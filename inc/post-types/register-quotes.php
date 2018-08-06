<?php

$quote = new CPT(array(
	'post_type_name' => 'quote',
	'singular' => __('Quote', 'handspecialist'),
	'plural' => __('Quotes', 'handspecialist'),
	'slug' => 'quote'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields'),
    'menu_icon' => 'dashicons-format-quote'
));