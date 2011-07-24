<?php
/**
 * @file   threecol_7_62_31.inc
 * @author António P. P. Almeida <appa@perusio.net>
 * @date   Sun Jul 24 20:39:00 2011
 *
 * @brief  The three column 7/62/31 layout.
 *
 *
 */

// Plugin definition.
$plugin = array(
  'title' => t('Three column 7/62/31'),
  'category' => t('Columns: 3'),
  'icon' => 'threecol_7_62_31.png',
  'theme' => 'threecol_7_62_31',
  'css' => 'threecol_7_62_31.css',
  'regions' => array(
    'left' => t('Left'),
    'middle' => t('Middle'),
    'right' => t('Right'),
  ),
);
