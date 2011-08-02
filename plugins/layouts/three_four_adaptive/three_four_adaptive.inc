<?php
/**
 * @file   three_four_adaptive.inc
 * @author António P. P. Almeida <appa@perusio.net>
 * @date   Sun Jul 31 12:43:09 2011
 *
 * @brief The three/four adaptive layout plugin.
 *
 *
 */

// Plugin definition.
$plugin = array(
  'title' => t('Three four adaptive'),
  'category' => t('Adaptive: 3x3 - 4x4'),
  'icon' => 'three_four_adaptive.png',
  'theme' => 'three_four_adaptive',
  'css' => 'three_four_adaptive.css',
  'panels' => array(
    '11' => t('Header left'),
    '12' => t('Header center'),
    '13' => t('Header right'),
    '21' => t('Top left'),
    '22' => t('Top middle'),
    '23' => t('Top right'),
    '31' => t('Middle top left'),
    '32' => t('Middle top center'),
    '33' => t('Middle top bottom'),
    '41' => t('Middle below top left'),
    '42' => t('Middle below top center left'),
    '43' => t('Middle below top center right'),
    '44' => t('Middle below top right'),
    '51' => t('Middle above bottom left'),
    '52' => t('Middle above bottom center left'),
    '53' => t('Middle above bottom center right'),
    '54' => t('Middle above bottom right'),
    '61' => t('Bottom left'),
    '62' => t('Bottom center left'),
    '63' => t('Bottom center right'),
    '64' => t('Bottom right'),
    '71' => t('Footer left'),
    '72' => t('Footer center left'),
    '73' => t('Footer center right'),
    '74' => t('Footer right'),
  ),
);


/**
 * The mapper function for computing the hash.
 *
 * @param $x integer
 *   The index of the content array.
 * @return integer
 *   The sum of all the 2nd digits in a given row of the content array.
 */
function panels_extra_layouts_adaptive_get_digit($x) {
  return empty($x) ? 0 : array_pop(sscanf($x, "%*1d%d"));
} // panels_extra_layouts_adaptive_get_digit


/**
 * The hashing function is quite simple, hence imperfect. There are some
 * exceptions that are handled below to make the way the grid is filled
 * consistent.
 *
 * h(i) = \sum_{i}_{j = 1,n} get_digit(c(i,j))
 *
 * where i is the row number, j is the column number, c(i,j) is the content of
 * entry (i,j) of the content matrix and get_digit is a function that
 * returns m given a number nm, e.g., 41, returns 1.
 *
 * @param $indexes array
 *   The indexes of a given row of the content array.
 * @param $columns integer
 *   The number of columns in the current 'submatrix'.
 * @param $mapper_f string
 *   The mapper function name.
 *
 * @return integer
 *   The hash of a given row.
 */
function panels_extra_layouts_adaptive_hash($indexes = array(), $columns = 3, $mapper_f) {
  // Bail out if there are no elements.
  if (empty($indexes)) return 0;
  // Count the number of elements in the given row.
  $n = count($indexes);
  // Compute the hash.
  $h = $n == 1 ?  1 : array_sum(array_map($mapper_f, $indexes));
  // For 4 columns there are a couple of special cases where the hash is
  // ambiguous.
  if ($h != 0 && $columns == 4) {
    // If we are in a special situation correct it. The hashing function is quite
    // naive. It's the sum of the column indexes in each row.
    if ($n == 2 && ($h == 7  || ($h == 5 && array_pop(sscanf($indexes[1], "%*1d%d")) == 3)))
      return 3;
  }
  return $h;
} // panels_extra_layouts_adaptive_hash
