<?php
/**
 * Default template for displaying Training listings
 *
 * @package Herd HR Training
 */

use Timber\Timber;

$context = Timber::context();

$sessions = array();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		$post_id = get_the_ID(); // phpcs:ignore

		$registrations = get_posts(
			array(
				'numberposts' => -1,
				'post_type'   => 'mu-registrations',
				'meta_key'    => 'muhr_registration_training_session', // phpcs:ignore
				'meta_value'  => $post_id, // phpcs:ignore
			)
		);

		wp_reset_postdata();

		$seats_total = get_field( 'mu_training_training_seats', $post_id );
		$seats_left  = intval( $seats_total ) - intval( count( $registrations ) );

		$start_date = DateTime::createFromFormat( 'Y-m-d H:i:s', get_field( 'mu_training_start_time', $post_id ) );
		$end_date   = DateTime::createFromFormat( 'Y-m-d H:i:s', get_field( 'mu_training_end_time', $post_id ) );
		$instructor = get_field( 'mu_training_instructor', $post_id );
		$style      = get_field( 'mu_training_style', $post_id );

		$sessions[] = array(
			'id'                 => $post_id,
			'title'              => get_the_title(),
			'seats_left'         => $seats_left,
			'seats_taken'        => count( $registrations ),
			'start_month'        => $start_date ? $start_date->format( 'M' ) : '',
			'start_day'          => $start_date ? $start_date->format( 'j' ) : '',
			'start_formatted'    => $start_date ? $start_date->format( 'F j, g:ia' ) : '',
			'end_formatted'      => $end_date ? $end_date->format( 'g:ia' ) : '',
			'instructor_name'    => $instructor ? $instructor['instructor_name'] : '',
			'style'              => $style,
			'location'           => get_field( 'mu_training_training_location', $post_id ),
			'training_url'       => get_field( 'mu_training_training_url', $post_id ),
			'course_description' => get_field( 'mu_training_course_description', $post_id ),
			'term_description'   => term_description(),
			'registration_url'   => home_url( '/training/registration/?courseid=' . $post_id ),
			'instructor_url'     => home_url( '/training/registered-list/?courseid=' . $post_id ),
		);
	}
}

$context['sessions']      = $sessions;
$context['archive_title'] = get_the_archive_title();
$context['pagination']    = get_the_posts_pagination( array( 'mid_size' => 2 ) );

Timber::render( 'taxonomy-mu-training.twig', $context );
