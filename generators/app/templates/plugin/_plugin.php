<?php

/**
 * <%= projectTitle %>
 *
 * @package     <%= projectTitle %>
 * @author      <%= projectAuthor %>
 * @copyright   <%= new Date().getFullYear() %> <%= projectTitle %>
 * @license     <%= projectLicense %>
 *
 * Plugin Name: <%= projectTitle %>
 * Description: <%= projectDescription %>
 * Version:     <%= projectVersion %>
 * Author:      <%= projectAuthor %>
 * Text Domain: <%= projectName %>
 * License:     <%= projectLicense %>
 *
 */

// Block direct access to file
defined( 'ABSPATH' ) or die( 'Not Authorized!' );

// Plugin Defines
define( "<%= definePrefix %>_FILE", __FILE__ );
define( "<%= definePrefix %>_DIR", dirname(__FILE__) );

define( "<%= definePrefix %>_CLI_DIR", dirname(__FILE__) . '/cli' );
define( "<%= definePrefix %>_INCLUDE_DIR", dirname(__FILE__) . '/include' );
define( "<%= definePrefix %>_ADMIN_DIR", dirname(__FILE__) . '/admin' );

define( "<%= definePrefix %>_DIR_BASENAME", plugin_basename( __FILE__ ) );
define( "<%= definePrefix %>_DIR_PATH", plugin_dir_path( __FILE__ ) );
define( "<%= definePrefix %>_DIR_URL", plugins_url( null, __FILE__ ) );

register_activation_hook(
	__FILE__,
	array(
		'<%= className %>_Main',
		'activate'
	)
);

register_deactivation_hook(
	__FILE__,
	array(
		'<%= className %>_Main',
		'deactivate'
	)
);

register_uninstall_hook(
	__FILE__,
	array(
		'<%= className %>_Main',
		'uninstall'
	)
);

// Require the main class file
require_once( <%= definePrefix %>_DIR . '/include/class-main.php' );
add_action( 'plugins_loaded', array('<%= className %>_Main', 'init') );
