<?php
/**
 * Bootstrap the plugin unit testing environment.
 *
 * Edit 'active_plugins' setting below to point to your main plugin file.
 *
 * @package wordpress-plugin-tests
 */
// Activates this plugin in WordPress so it can be tested.
 
$GLOBALS['wp_tests_options'] = array(
    'template' => 'home',
    'wpsp_test' => true
);

define('DISABLE_MATTERMOST', true);

define('TEST_DEBUG',true);

define( 'WP_TESTS_TITLE', 'test Blogs' );

define( 'WP_TESTS_EMAIL', 'admin@example.org' );
 
require dirname(__FILE__) . '/wordpress/includes/bootstrap.php';
