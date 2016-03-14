<?php
/*
 * Template Name: Projects Page
 * Description: Projects page
 */

	$context         = Timber::get_context();

	$context['projects'] = Timber::get_posts('post_type=projects');

	/* Dynamic Sidebar */
	$context['sidebar'] = Timber::get_widgets( 'Sidebar' );
	Timber::render( array ( 'page-' . $post->post_name . '.twig', 'page-projects.twig' ), $context );
