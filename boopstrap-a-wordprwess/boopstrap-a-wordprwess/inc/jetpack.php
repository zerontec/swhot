<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Boopstrap a wordprwess
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function boopstrap_a_wordprwess_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'boopstrap_a_wordprwess_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function boopstrap_a_wordprwess_jetpack_setup
add_action( 'after_setup_theme', 'boopstrap_a_wordprwess_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function boopstrap_a_wordprwess_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function boopstrap_a_wordprwess_infinite_scroll_render
