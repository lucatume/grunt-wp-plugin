<?php
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
 * template modified by theAverageDev (Luca Tumedei) to use classes and
 * autoloading
 */

// Useful global constants
define('{%= prefix_caps %}_VERSION', '0.1.0');
define('{%= prefix_caps %}_URL', plugin_dir_url( __FILE__ ));
define('{%= prefix_caps %}_PATH', dirname( __FILE__ ) . '/');

// Include the autolaoder class if the class is not 
// still defined
if (!class_exists('\jwage\SplClassLoader')) {
    require_once(dirname(__FILE__) . '/includes/jwage/SplClassLoader.php');
}
// Register the plugin namespace with the class loader 
$classLoader = new jwage\SplClassLoader('{%= prefix %}', dirname(__FILE__). '/includes');
$classLoader->register();
// Bootstrap the plugin main class
new \{%= prefix %}\Main();
