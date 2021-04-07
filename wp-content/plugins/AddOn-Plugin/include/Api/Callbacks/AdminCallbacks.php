<?php

/**
 * @package AddOn
 */

namespace Book\Api\Callbacks;

use \Book\Base\BasController;

class AdminCallbacks extends BasController
{
    public function adminDashboard()
    {
        return require_once($this->plugin_path.'/templates/admin.php');
    }

    public function adminCPT()
    {
        return require_once($this->plugin_path.'/templates/cpt.php');
    }

    public function adminWidget()
    {
        return require_once($this->plugin_path.'/templates/widget.php');
    }

    public function adminTaxonomy()
    {
        return require_once($this->plugin_path.'/templates/taxonomy.php');
    }

    public function addonOptionsGroup($input)
    {
        return $input;
    }

    public function addonAdminSection()
    {
        echo 'Some section.';
    }

    public function addonFields()
    {
        $value= esc_attr(get_option('text_example'));
        echo '<input type="text" class="regular-text", name="text_example" value="'.$value.'" placeholder="Write something">';
    }

}