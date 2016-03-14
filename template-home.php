<?php
/*
 * Template Name: Home Page
 * Description: Home page
 */

	$context         = Timber::get_context();
	$post            = new TimberPost();
	$context['post'] = $post;
	/* Dynamic Sidebar */
	$context['sidebar'] = Timber::get_widgets( 'Sidebar' );
	Timber::render( array ( 'page-' . $post->post_name . '.twig', 'page-home.twig' ), $context );
