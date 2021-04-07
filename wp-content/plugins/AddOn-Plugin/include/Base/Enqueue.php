<?php

/**
 * @package AddOn
 */

namespace Book\Base;

use \Book\Base\BasController;

class Enqueue extends BasController
{
    public function register()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    function enqueue()
    {
        wp_enqueue_style('mypluginstyle', $this->plugin_url.'assets/CSS/mystyle.css');
        wp_enqueue_style('mypluginscript', $this->plugin_url.'assets/js/myscript.js');
    }
}