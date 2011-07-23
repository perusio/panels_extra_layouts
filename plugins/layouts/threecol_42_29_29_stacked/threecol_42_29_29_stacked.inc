<?php
/**
 * @file   threecol_42_29_29_stacked.inc
 * @author António P. P. Almeida <appa@perusio.net>
 * @date   Fri Dec 17 05:05:34 2010
 *
 * @brief Panels plugin for the three column 42/29/29 stacked layout.
 *
 *
 */

// Plugin definition.
$plugin = array(
  'title' => t('Three column 42/29/29 stacked'),
  'category' => t('Columns: 3'),
  'icon' => 'threecol_42_29_29_stacked.png',
  'theme' => 'threecol_42_29_29_stacked',
  'css' => 'threecol_42_29_29_stacked.css',
  'regions' => array(
    'left' => t('Left side'),
    'middle' => t('Middle column'),
    'right' => t('Right side'),
    'bottom_above' => t('Bottom stack above'),
    'bottom_below' => t('Bottom stack bellow'),
  ),
);
