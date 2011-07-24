<?php
/**
 * @file   threecol_15_70_15_stacked.inc
 * @author António P. P. Almeida <appa@perusio.net>
 * @date   Sun Jul 24 17:26:14 2011
 *
 * @brief  Panels plugin for the three column 15/70/15 stacked layout.
 *
 *
 */

// Plugin definition.
$plugin = array(
  'title' => t('Three column 15/70/15 stacked'),
  'category' => t('Columns: 3'),
  'icon' => 'threecol_15_70_15_stacked.png',
  'theme' => 'threecol_15_70_15_stacked',
  'css' => 'threecol_15_70_15_stacked.css',
  'regions' => array(
    'header' => t('Header'),
    'left' => t('Left'),
    'middle' => t('Middle'),
    'right' => t('Right'),
    'footer' => t('Footer'),
  ),
);
