<?php
/**
 * @file   twocol_77_23_stacked.inc
 * @author António P. P. Almeida <appa@perusio.net>
 * @date   Fri Apr 15 16:51:31 2011
 *
 * @brief  The panels layout plugin for the two column 77/23 stacked layout.
 *
 *
 */

// Plugin definition.
$plugin = array(
  'title' => t('Two column 77/23 stacked'),
  'category' => t('Columns: 2'),
  'icon' => 'twocol_77_23_stacked.png',
  'theme' => 'twocol_77_23_stacked',
  'css' => 'twocol_77_23_stacked.css',
  'regions' => array(
    'header' => t('header'),
    'left' => t('left'),
    'right' => t('right'),
    'footer' => t('footer'),
  ),
);
