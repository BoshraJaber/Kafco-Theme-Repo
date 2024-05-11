<?php
/**
 * Admin Welcome Notice
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 0.0.1
 */

declare(strict_types=1);

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}




/**
 * Spectra plugin status.
 *
 * @since 0.0.1
 * @return string
 */
function is_spectra_plugin_status(): string {
	$plugin_slug = 'ultimate-addons-for-gutenberg/ultimate-addons-for-gutenberg.php';
	$status      = 'not-installed';

	if ( is_plugin_active( $plugin_slug ) ) {
		return 'activated';
	}

	if ( file_exists( WP_PLUGIN_DIR . '/' . $plugin_slug ) ) {
		return 'installed';
	}

	return $status;
}

/**
 * Localize js.
 *
 * @since 0.0.1
 * @param string $plugin_status plugin current status.
 * @return array
 */
function localize_welcome_notice_js( $plugin_status ): array {

	return array(
		'nonce'         => wp_create_nonce( 'swt-dismiss-welcome-notice-nonce' ),
		'ajaxUrl'       => esc_url( admin_url( 'admin-ajax.php' ) ),
		'pluginStatus'  => $plugin_status,
		'pluginSlug'    => 'ultimate-addons-for-gutenberg',
		'activationUrl' => esc_url(
			add_query_arg(
				array(
					'plugin_status' => 'all',
					'paged'         => '1',
					'action'        => 'activate',
					'plugin'        => rawurlencode( 'ultimate-addons-for-gutenberg/ultimate-addons-for-gutenberg.php' ),
					'_wpnonce'      => wp_create_nonce( 'activate-plugin_ultimate-addons-for-gutenberg/ultimate-addons-for-gutenberg.php' ),
				),
				admin_url( 'plugins.php' )
			)
		),
		'activating'    => __( 'Activating', 'spectra-one' ) . '&hellip;',
		'installing'    => __( 'Installing', 'spectra-one' ) . '&hellip;',
		'done'          => __( 'Done', 'spectra-one' ),
	);
}
