<?php

namespace Inc;

use Service\Singleton;

class Shortcodes
{
	use Singleton;

	/**
	 * Init general commands and hooks
	 */
	public static function init()
	{
		Shortcodes::instance();
	}


	/**
	 * Shortcodes constructor. Theme default options
	 */
	private function __construct()
	{
		add_shortcode( 'privacy', [$this, 'privacy_page_sc_vr51'] );
	}

	/**
	 * Creates a Privacy Page link shortcode.
	 * Use as [privacy title="Privacy Page Title"] or [privacy]
	 * Default page title is Privacy Page.
	 * Page link points to the Privacy Page set in Dashboard > Privacy.
	 * The privacy page will only display if the page is public (status = publish).
	 *
	 * @param array $atts Shortcode attributes
	 * @return string|void
	 */
	public function privacy_page_sc_vr51( $atts ) {
		$atts = shortcode_atts(
			array(
				'title' => 'Privacy Policy'
			), $atts
		);

		$title = sanitize_text_field( $atts['title'] );

		$privacy_page_id = (int) get_option( 'wp_page_for_privacy_policy' );

		if ( ! empty($privacy_page_id) && get_post_status( $privacy_page_id ) === 'publish' ) {
			$link = esc_url( get_privacy_policy_url() );
			return sprintf( '<a href="%s">%s</a>', $link, esc_html( $title ) );
		}

		return '';
	}
}