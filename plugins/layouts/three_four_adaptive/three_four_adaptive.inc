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
  'regions' => array(
    '11' => t('Header left'),
    '12' => t('Header center'),
    '13' => t('Header right'),
    '21' => t('Top left'),
    '22' => t('Top middle'),
    '23' => t('Top right'),
    '31' => t('Middle top left'),
    '32' => t('Middle top center'),
    '33' => t('Middle top right'),
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
