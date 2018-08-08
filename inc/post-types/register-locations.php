<?php

$locations = new CPT(array(
	'post_type_name' => 'locations',
	'singular' => __('Location', 'handspecialist'),
	'plural' => __('Locations', 'handspecialist'),
	'slug' => 'location'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields'),
    'menu_icon' => 'dashicons-location'
));