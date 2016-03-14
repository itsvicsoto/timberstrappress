<?php
/*
 * Template Name: Services Page
 * Description: Services page
 */

	$context         = Timber::get_context();

	$context['services'] = Timber::get_posts('post_type=services');

	/* Dynamic Sidebar */
	$context['sidebar'] = Timber::get_widgets( 'Sidebar' );
	Timber::render( array ( 'page-' . $post->post_name . '.twig', 'page-projects.twig' ), $context );
