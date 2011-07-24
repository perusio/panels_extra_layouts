<?php
/**
 * @file   twocol_30_70_stacked.inc
 * @author António P. P. Almeida <appa@perusio.net>
 * @date   Sun Jul 24 20:41:58 2011
 *
 * @brief  The two column 30/70 stacked layout.
 *
 *
 */

// Plugin definition.
$plugin = array(
  'title' => t('Two column 30/70 stacked'),
  'category' => t('Columns: 2'),
  'icon' => 'twocol_30_70_stacked.png',
  'theme' => 'twocol_30_70_stacked',
  'css' => 'twocol_30_70_stacked.css',
  'regions' => array(
    'header' => t('Header'),
    'top' => t('Top'),
    'left' => t('Left'),
    'right' => t('Right'),
    'footer' => t('Footer'),
  ),
);
