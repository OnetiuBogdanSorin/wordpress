<div class="wrap">
    <h1>Admin Page</h1>
    <?php settings_errors() ?>

    <form method="post" action="options.php">
        <?php settings_fields('addon_option_group');
        do_settings_sections('addon_plugin');//name of the plugin
        submit_button();
        ?>

    </form>
</div>

