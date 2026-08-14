<?php
/**
 * Customization of the editor for Training and Sessions
 *
 * @package Herd HR Training
 */

/**
 * Remove YoastSEO metaboxes from Sessions
 */
function mu_hr_training_remove_seo_metaboxes() {
	remove_meta_box( 'wpseo_meta', 'mu-session', 'normal' );
	remove_meta_box( 'wpseo_meta', 'mu-registrations', 'normal' );
}
add_action( 'add_meta_boxes', 'mu_hr_training_remove_seo_metaboxes', 11 );

/**
 * Set the Session title based on the select Training taxonomy title.
 *
 * @param integer $post_id The ID of the current post.
 */
function mu_hr_training_update_title_and_taxonomy_on_save( $post_id ) {
	if ( 'mu-session' === get_post_type( $post_id ) && get_field( 'mu_training_type', $post_id ) ) {
		wp_set_post_terms( $post_id, get_field( 'mu_training_type', $post_id ), 'mu-training' );

		$the_term = get_term_by( 'id', get_field( 'mu_training_type', $post_id ), 'mu-training' );

		wp_update_post(
			array(
				'ID'         => $post_id,
				'post_title' => $the_term->name,
			),
		);
	}
}
add_action( 'acf/save_post', 'mu_hr_training_update_title_and_taxonomy_on_save', 20 );

/**
 * Set Custom Columns for Sessions
 *
 * @param type $columns Default WordPress post columns.
 */
function mu_hr_trianing_sessions_custom_columns( $columns ) {

	if ( ! is_super_admin() ) {
		unset( $columns['date'] );
		unset( $columns['modified'] );
	}

	unset( $columns['wpseo-score'] );
	unset( $columns['wpseo-score-readability'] );
	unset( $columns['wpseo-title'] );
	unset( $columns['wpseo-metadesc'] );
	unset( $columns['wpseo-focuskw'] );
	unset( $columns['wpseo-links'] );
	unset( $columns['wpseo-linked'] );
	unset( $columns['redirect'] );
	unset( $columns['sso'] );
	$columns['start_time'] = __( 'Start Time', 'mu-hr-training' );
	$columns['end_time']   = __( 'End Time', 'mu-hr-training' );
	$columns['seats']      = __( 'Seats Available', 'mu-hr-training' );
	$columns['reglist']    = __( 'Registration', 'mu-hr-training' );
	return $columns;
}
add_filter( 'manage_mu-session_posts_columns', 'mu_hr_trianing_sessions_custom_columns' );

/**
 * Add values from meta fields to custom columns.
 *
 * @param array   $column Default WordPress post columns.
 * @param integer $post_id The ID of the post.
 */
function mu_hr_training_custom_columns_data( $column, $post_id ) {
	switch ( $column ) {
		case 'start_time':
			echo esc_attr( get_post_meta( $post_id, 'mu_training_start_time', true ) );
			break;
		case 'end_time':
			echo esc_attr( get_post_meta( $post_id, 'mu_training_end_time', true ) );
			break;
		case 'seats':
			echo esc_attr( get_post_meta( $post_id, 'mu_training_training_seats', true ) );
			break;
		case 'reglist':
			echo '<a href="https://www.marshall.edu/human-resources/training/registered-list/?courseid=' . esc_attr( $post_id ) . '">Registration List</a>';
			break;
	}
}
add_action( 'manage_mu-session_posts_custom_column', 'mu_hr_training_custom_columns_data', 10, 2 );

/**
 * Set Custom Columns for Sessions
 *
 * @param type $columns Default WordPress post columns.
 */
function mu_hr_training_registrations_custom_columns( $columns ) {

	if ( ! is_super_admin() ) {
		unset( $columns['date'] );
		unset( $columns['modified'] );
	}

	unset( $columns['wpseo-score'] );
	unset( $columns['wpseo-score-readability'] );
	unset( $columns['wpseo-title'] );
	unset( $columns['wpseo-metadesc'] );
	unset( $columns['wpseo-focuskw'] );
	unset( $columns['wpseo-links'] );
	unset( $columns['wpseo-linked'] );
	$columns['session'] = __( 'Training Session', 'mu-hr-training' );
	return $columns;
}
add_filter( 'manage_mu-registrations_posts_columns', 'mu_hr_training_registrations_custom_columns' );

/**
 * Add values from meta fields to custom columns.
 *
 * @param array   $column Default WordPress post columns.
 * @param integer $post_id The ID of the post.
 */
function mu_hr_training_registrations_custom_columns_data( $column, $post_id ) {
	if ( 'session' !== $column ) {
		return;
	}

	$session = get_field( 'muhr_registration_training_session', $post_id );
	$session = $session instanceof WP_Post ? $session : get_post( $session );

	if ( ! $session instanceof WP_Post || 'mu-session' !== $session->post_type ) {
		echo esc_attr__( 'Training session unavailable', 'mu-hr-training' );
		return;
	}

	$start_value = get_field( 'mu_training_start_time', $session->ID );
	$end_value   = get_field( 'mu_training_end_time', $session->ID );
	$start       = is_string( $start_value ) ? @DateTime::createFromFormat( 'Y-m-d H:i:s', $start_value ) : false; // phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged
	$start_error = DateTime::getLastErrors();
	$start_valid = $start && ( false === $start_error || ( 0 === $start_error['warning_count'] && 0 === $start_error['error_count'] ) );
	$end         = is_string( $end_value ) ? @DateTime::createFromFormat( 'Y-m-d H:i:s', $end_value ) : false; // phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged
	$end_error   = DateTime::getLastErrors();
	$end_valid   = $end && ( false === $end_error || ( 0 === $end_error['warning_count'] && 0 === $end_error['error_count'] ) );

	$course_day        = $start_valid ? $start->format( 'F j, Y' ) : __( 'Date unavailable', 'mu-hr-training' );
	$course_start_time = $start_valid ? $start->format( 'g:i a' ) : __( 'Time unavailable', 'mu-hr-training' );
	$course_end_time   = $end_valid ? $end->format( 'g:i a' ) : __( 'Time unavailable', 'mu-hr-training' );

	echo esc_attr( $session->post_title . ' on ' . $course_day . ' ' . $course_start_time . '-' . $course_end_time );
}
add_action( 'manage_mu-registrations_posts_custom_column', 'mu_hr_training_registrations_custom_columns_data', 10, 2 );

/**
 * Remove View link on Dashboard for Registrations.
 *
 * @param array $actions The array of actions on the post row.
 * @return array
 */
function mu_hr_training_remove_view_action( $actions ) {
	if ( 'mu-registrations' === get_post_type() ) {
		unset( $actions['view'] );
	}
	return $actions;
}
add_filter( 'post_row_actions', 'mu_hr_training_remove_view_action', 10, 1 );

/**
 * Add the start time to the training name in the registration relation field.
 *
 * @param string $text The text to be displayed.
 * @param object $post The post object.
 *
 * @return string
 */
function mu_hr_training_full_training_name_for_registration_relation( $text, $post ) {
	$start_time = get_field( 'mu_training_start_time', $post->ID );
	if ( $start_time ) {
		$text .= ' ' . esc_attr( DateTime::createFromFormat( 'Y-m-d H:i:s', $start_time )->format( 'F j, Y g:i a' ) );
	}
	return $text;
}
add_filter( 'acf/fields/post_object/result', 'mu_hr_training_full_training_name_for_registration_relation', 10, 2 );
