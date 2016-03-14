<?php
/*
 * Template Name: Careers Page
 * Description: Careers page
 */

	$context         = Timber::get_context();

	$context['careers'] = Timber::get_posts('post_type=careers');

	/* Dynamic Sidebar */
	$context['sidebar'] = Timber::get_widgets( 'Sidebar' );
	Timber::render( array ( 'page-' . $post->post_name . '.twig', 'page-careers.twig' ), $context );
