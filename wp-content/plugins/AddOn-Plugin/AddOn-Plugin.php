<?php
/**
 * Plugin Name: AddOn Plugin
 *
 * Plugin Name:       My Basics Plugin
 * Plugin URI:        https://www.wordpress.obs/wp-content/plugins.AddOn-Plugin
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Bogdan
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
*/

/**
 * @package AddOn
 */

use Book\Init;
use Book\Base\Activate;
use Book\Base\Deactivate;
use Book\Pages\Admin;

defined('ABSPATH') or die('not working');

if(file_exists(__FILE__).'/vendor/autoload.php')
{
    require_once dirname(__FILE__).'/vendor/autoload.php';
}


//Activation and deactivation of the plugin

function activate_addon_plugin()
{
    Activate::activate();
}

function deactivate_addon_plugin()
{
    Deactivate::deactivate();
}

register_activation_hook(__FILE__, 'activate_addon_plugin');
register_deactivation_hook(__FILE__, 'deactivate_addon_plugin');

//Enable services

if(class_exists('Book\\Init'))
{
    Book\Init::register_services();
}
