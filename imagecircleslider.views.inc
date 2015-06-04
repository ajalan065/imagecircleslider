<?php

/* Defines the TinyCircleSlider plugin for the views module*/

/* Implements the hooks_views_plugin() */

function imagecircleslider_views_plugins() {
  $path = drupal_get_path('module', 'imagecircleslider');
  return array(
    'module' => 'imagecircleslider',
	'style' => array(
	  'imagecircleslider' => array(
	  'title' => t('Image CircleSlider'),
	  'help' => t('Display the results as a circleslider.'),
	  'handler' => 'views_plugin_style_imagecircleslider',
	  'theme' => 'imagecircleslider_view',
	  'theme path' => $path,
	  'uses fields' => TRUE,
	  'uses options' => TRUE,
	  'uses row plugin' => TRUE,
	  'uses grouping' => FALSE,
	  'uses row class' => TRUE,
	  'type' => 'normal',
	  'parent' => 'basic',
	  'path' => drupal_get_path('module', 'imagecircleslider'),
	  ),
    ),
  );
}