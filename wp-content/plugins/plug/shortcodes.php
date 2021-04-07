<?php

/**
 * Plugin Name: plug
 * Description: Just a plugin
 */
function recent_posts_function($atts)
{
    global $wpdb;
    $wpdb->get_results("SELECT * FROM {$wpdb->prefix}options WHERE option_id = 1", OBJECT);
     var_export();
}


/*function recent_posts_function($atts){
    extract(shortcode_atts(array(
        'posts' => 1,
    ), $atts));

    $return_string = '<table><tr><th>Titles</th></tr>';
    query_posts(array('orderby' => 'date', 'order' => 'DESC' , 'showposts' => $posts));
    if (have_posts()) :
        while (have_posts()) : the_post();
            $return_string .= '<tr><td text-align:center><a href="'.get_permalink().'">'.get_the_title().'</a></td></tr>';
        endwhile;
    endif;
    $return_string .= '</table>';

    wp_reset_query();
    return $return_string;
}*/

add_shortcode("posts",'recent_posts_function');



?>