<?php

/**
 * @package AddOn
 */

namespace Book\Base;

use \Book\Base\BasController;

class SettingsLinks extends BasController
{
    public function register()
    {
        add_filter("plugin_action_links_$this->plugin", array($this, 'settingsLinks'));
    }

    public function settingslinks($links)
    {
        $setting_link='<a href="admin.php?page=addon_plugin">Settings</a>';
        array_push($links,$setting_link);
        return $links;
    }
}