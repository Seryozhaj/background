<?php
/**
 * Your code here.
 *
 */
	
wp_enqueue_style( 'fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css' ,false, '4','all');
wp_enqueue_script( 'fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array ( 'jquery' ), 4, true);
wp_enqueue_script( 'fancybox_ruls', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
