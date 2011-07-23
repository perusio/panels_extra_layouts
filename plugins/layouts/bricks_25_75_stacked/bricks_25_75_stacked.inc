<?php
/**
 * @file   bricks_25_75_stacked.inc
 * @author António P. P. Almeida <appa@perusio.net>
 * @date   Fri Dec 17 05:00:37 2010
 *
 * @brief  Panels plugin for the 25/75 stacked layout.
 *
 *
 */

// Plugin definition.
$plugin = array(
  'title' => t('Bricks 25/75 stacked'),
  'category' => t('Columns: 2'),
  'icon' => 'bricks_25_75_stacked.png',
  'theme' => 'bricks_25_75_stacked',
  'css' => 'bricks_25_75_stacked.css',
  'regions' => array(
    'header_left' => t('Header left'),
    'header_middle' => t('Header middle'),
    'header_right' => t('Header right'),
    'top_stack' => t('Top stack'),
    'left_column' => t('Left column'),
    'right_column' => t('Right column'),
    'bottom_left' => t('Bottom left'),
    'bottom_middle_left' => t('Bottom middle left'),
    'bottom_middle_right' => t('Bottom middle right'),
    'bottom_right' => t('Bottom right'),
  ),
);
