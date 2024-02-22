<?php
/**
 * Show the appropriate content for the Chat post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Manaslu
 * @since Manaslu 1.0.0
 */


// If there are paragraph blocks, print up to two.
// Otherwise this is legacy content, so print the excerpt.

if ( has_block( 'core/paragraph', get_the_content() ) ) {
	manaslu_print_first_instance_of_block( 'core/paragraph', get_the_content(), 2 );
} else {
    if ( absint(manaslu_get_option( 'excerpt_length' )) != '0'){
    	the_excerpt();
    }
}