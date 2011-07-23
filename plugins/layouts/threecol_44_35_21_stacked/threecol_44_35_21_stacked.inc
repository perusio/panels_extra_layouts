<?php
/**
 * @file   threecol_44_35_21_stacked.inc
 * @author António P. P. Almeida <appa@perusio.net>
 * @date   Thu Apr 14 10:51:43 2011
 *
 * @brief  Panels plugin for a 44/35/21 stacked layout.
 *
 *
 */

// Plugin definition.
$plugin = array(
  'title' => t('Three column 44/35/21 stacked'),
  'category' => t('Columns: 3'),
  'icon' => 'threecol_44_35_21_stacked.png',
  'theme' => 'threecol_44_35_21_stacked',
  'css' => 'threecol_44_35_21_stacked.css',
  'regions' => array(
    'left' => t('Left'),
    'top_middle' => t('Top middle'),
    'top_right' => t('Top right'),
    'right' => t('Right'),
    'footer' => t('Footer'),
  ),
);
