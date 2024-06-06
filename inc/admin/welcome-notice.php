<?php
/**
 * Admin Welcome Notice
 *
 * @package Kafco
 * @author Diyar United
 * @since 0.0.1
 */

declare(strict_types=1);

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}




/**
 * plugin status.
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
