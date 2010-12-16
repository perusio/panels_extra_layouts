<?php

// Plugin definition.
$plugin = array(
  'title' => t('Three column 42/29/29 stacked'),
  'category' => t('Columns: 3'), 
  'icon' => 'threecol_42_29_29_stacked.png',
  'theme' => 'panels_extra_layouts_threecol_42_29_29_stacked',
  'css' => 'threecol_42_29_29_stacked.css',
  'panels' => array(
    'left' => t('Left side'),
    'middle' => t('Middle column'),
    'right' => t('Right side'),
    'bottom_above' => t('Bottom stack above'),
    'bottom_bellow' => t('Bottom stack bellow'),
  ),
);
