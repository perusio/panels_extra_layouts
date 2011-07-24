<?php

// Plugin definition.
$plugin = array(
  'title' => t('Two column 70/30 stacked'),
  'category' => t('Columns: 2'),
  'icon' => 'twocol_70_30_stacked.png',
  'theme' => 'twocol_70_30_stacked',
  'css' => 'twocol_70_30_stacked.css',
  'panels' => array(
    'header' => t('Header'),
    'top' => t('Top'),
    'left' => t('Left'),
    'right' => t('Right'),
    'footer' => t('Footer'),
  ),
);
