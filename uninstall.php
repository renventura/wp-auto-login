<?php

/**
 *	Delete plugin data
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) exit;

delete_option( 'wp_auto_login' );