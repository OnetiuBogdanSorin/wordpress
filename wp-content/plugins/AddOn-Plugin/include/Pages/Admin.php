<?php

/**
 * @package AddOn
 */

namespace Book\Pages;

use \Book\Api\SettingsApi;
use \Book\Base\BasController;
use \Book\Api\Callbacks\AdminCallbacks;

class Admin extends BasController
{
    public $settings;

    public $callbacks;

    public $pages = array();

    public $subpages = array();

    public function register()
    {
        $this->settings = new SettingsApi();

        $this->callbacks = new AdminCallbacks();

        $this->setPages();

        $this->setSubPages();

        $this->setSettings();

        $this->setSections();

        $this->setFields();

        $this->settings->addPages($this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
    }

    public function setPages()
    {
        $this->pages =[
            ['page_title' => 'AddOn Plugin',
                'menu_title' => 'AddOn',
                'capability' => 'manage_options',
                'menu_slug' => 'addon_plugin',
                'callback' => array($this->callbacks, 'adminDashboard'),
                'icon_url' => 'dashicons-welcome-view-site',
                'position' => 110],

            ['page_title' => 'Test Plugin',
                'menu_title' => 'Test',
                'capability' => 'manage_options',
                'menu_slug' => 'Test_plugin',
                'callback' => function(){echo '<h1>Test Plugins</h1>';},
                'icon_url' => 'dashicons-external',
                'position' => 9]];

    }

    public function setSubPages()
    {
        $this->subpages = array(
            array(
                'parent_slug' => 'addon_plugin',
                'page_title' => 'Custom SubPage',
                'menu_title' => 'CP',
                'capability' => 'manage_options',
                'menu_slug' => 'SubPage_menu',
                'callback' => function(){echo '<h1>Managing something</h1>';}
            ),array(
                'parent_slug' => 'addon_plugin',
                'page_title' => 'Custom Widget',
                'menu_title' => 'Widget',
                'capability' => 'manage_options',
                'menu_slug' => 'widget',
                'callback' => function(){echo '<h1>Some widgets</h1>';}
            ),array(
                'parent_slug' => 'addon_plugin',
                'page_title' => 'Custom Taxonomies',
                'menu_title' => 'Taxonomies',
                'capability' => 'manage_options',
                'menu_slug' => 'subpage_taxonomies',
                'callback' => function(){echo '<h1>Some taxonomies</h1>';}
            )
        );
    }

    public function setSettings()
    {
        $args = [
            [
               'option_group' => 'addon_option_group',
               'option_name' => 'text_sample',
               'callback' => array($this->callbacks, 'addonOptionsGroup')
            ]
        ];

        $this->settings->setSettings($args);
    }

    public function setSections()
    {
        $args = [
            [
                'id' => 'addon_admin_index',
                'title' => 'Settings',
                'callback' => array($this->callbacks, 'addonAdminSection'),
                'page'=>'addon_plugin'
            ]
        ];

        $this->settings->setSections($args);
    }

    public function setFields()
    {
        $args = [
            [
                'id' => 'text_example',
                'title' => 'Text',
                'callback' => array($this->callbacks, 'addonFields'),
                'page'=>'addon_plugin',
                'section' => 'addon_admin_index',
                'args' => ['label_for'=>'text_example',
                    'class' => 'example_class']
            ]
        ];

        $this->settings->setFields($args);
    }

    public function torque_hello_world_shortcode( $atts ) {
        $a = shortcode_atts( array(
            'name' => 'world'
        ), $atts );
        return 'Hello ' . $a['name'] . '!';
    }

}