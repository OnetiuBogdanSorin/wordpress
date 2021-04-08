<?php

/**
 * Plugin Name: plug
 * Description: Just a plugin
 */
function recent_posts_function($atts)
{
    extract(shortcode_atts(array('id' => 3), $atts));

    global $wpdb;

    //$posts=$wpdb->get_results($wpdb->prepare("SELECT ID,post_title, post_name FROM $wpdb->posts WHERE id=$id", OBJECT));

    $post = $wpdb->get_results("SELECT ID, post_title, post_status FROM `postview` WHERE id = $id", OBJECT);

    $return_string =
           '<table><tr>
            <th>ID</th>
            <th>Title of the post</th>
            <th>Status of the post</th>
            </tr>';
    foreach($post as $print)
    {
        $return_string .=
            "<tr>
             <td>$print->ID</td>
             <td>$print->post_title</td>
             <td>$print->post_status</td>
             </tr>";
    }
    $return_string .= '</table>';

    return $return_string;
}
add_shortcode("number",'recent_posts_function');
?>
