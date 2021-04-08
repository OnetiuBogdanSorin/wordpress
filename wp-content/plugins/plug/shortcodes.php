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
    var_dump($post);
    $return_string = '<table><tr>
            <th>ID</th>
            <th>Title of the post</th>
            <th>Status of the post</th>
            </tr>';
    foreach($post as $print)
    {
        $return_string .="<tr><td>$print->ID</td><td>$print->post_title</td><td>$print->post_status</td></tr>";
    }
    $return_string .= '</table>';
    return $return_string;
}


//function recent_posts_function($atts){
//    extract(shortcode_atts(array(
//        'posts' => 5,
//    ), $atts));
//
//    $return_string = '<table><tr><th>Titles</th></tr>';
//    query_posts(array('orderby' => 'date', 'order' => 'DESC' , 'showposts' => $posts));
//    if (have_posts()) :
//        while (have_posts()) : the_post();
//            $return_string .= '<tr><td><a href="'.get_permalink().'">'.get_the_title().'</a></td></tr>';
//        endwhile;
//    endif;
//    $return_string .= '</table>';
//
//    wp_reset_query();
//    return $return_string;
//}

add_shortcode("number",'recent_posts_function');



?>