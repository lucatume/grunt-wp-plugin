<?php
namespace {%= prefix %};

/**
 * Plugin Name: {%= title %}
 * Plugin URI:  {%= homepage %}
 * Description: {%= description %}
 * Version:     0.1.0
 * Author:      {%= author_name %}
 * Author URI:  {%= author_url %}
 * License:     GPLv2+
 * Text Domain: {%= prefix %}
 * Domain Path: /languages
 */

/**
 * Copyright (c) {%= grunt.template.today('yyyy') %} {%= author_name %} (email : {%= author_email %})
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

/**
 * Built using grunt-wp-plugin
 * Copyright (c) 2013 10up, LLC
 * https://github.com/10up/grunt-wp-plugin
 */

/**
 * Activation and deactivation
*/
register_activation_hook(__FILE__, array('\{%= prefix %}\Main', 'activate'));
register_deactivation_hook(__FILE__, array('\{%= prefix %}\Main', 'deactivate'));

// the main plugin class, defined in the {%= prefix %} namespace
class Main
{
    public function __construct()
    {
        add_action('init', array($this, 'init'));
    }
    /*
     * Default initialization for the plugin:
     * - Registers the default textdomain.
     */
    public function init()
    {
        $locale = apply_filters('plugin_locale', get_locale(), '{%= prefix %}');
        load_textdomain('{%= prefix %}', WP_LANG_DIR . '/{%= prefix %}/{%= prefix %}-' . $locale . '.mo');
        load_plugin_textdomain('{%= prefix %}', false, dirname(plugin_basename(__FILE__)) . '/languages/');
    }
    /**
     * Activate the plugin
     */
    public static function activate()
    {
        // do something here
    }
    /**
     * Deactivate the plugin
     * Uninstall routines should be in uninstall.php
     */
    public static function deactivate()
    {
        // do something here
    }
}
