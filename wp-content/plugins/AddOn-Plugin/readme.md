/*if(!class_exists('AddOn')) {
class AddOn
{
public $plugin;

        function __construct()
        {
            $this->plugin=plugin_basename(__FILE__);
        }

        public static function register()
        {


            add_action('admin_menu', array($this, 'add_admin_pages'));


        }

        function create_post_type()
        {
            add_action('init', array($this, 'custom_post_type'));
        }

        public function setting_links($links)
        {

        }



        function uninstall()
        {
        }

        function custom_post_type()
        {
            register_post_type('book', ['public' => true, 'label' => 'Books']);
        }




        function activate()
        {
            Activate::activate();
        }

        function deactivate()
        {
            Deactivate::deactivate();
        }
    }

    if (class_exists('AddOn')) {
        $addonPlugin = new AddOn();
        $addonPlugin->register();
        //AddOn::register();  /*if the reigster function is static
    }

    //require_once plugin_dir_path(__FILE__) . 'include/Activate.php';
    //register_activation_hook(__FILE__, array('AddOnPluginActivate', 'activate'));

    //require_once plugin_dir_path(__FILE__) . 'include/Deactivate.php';
    //register_deactivation_hook(__FILE__, array('AddOnPluginDeactivate', 'deactivate'));

}
*/