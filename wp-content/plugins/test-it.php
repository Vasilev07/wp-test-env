<?php
/** 
 * Plugin Name: My First Plugin
 * Description: This is my playgroud
 * Plugin Author: Georgi Vasilev
*/
function modify_the_title($title) {
    $title = $title . 'Has been modified kur';

    return $title;
}
add_filter( 'the_title', 'modify_the_title' );

function modify_body($classes) {
    return $classes;
}
add_filter('body_class', 'modify_body');

function insert_div_to_content($content) {

    $div = '<div style="background: red;">Some element after content</div>';

    $content .= $div;

    return $content;
}
add_filter( 'the_content', 'insert_div_to_content');


function get_post_words_count($content) {
    if (!is_single()) {
        return $content;
    }

    $words_count = str_word_count($content);
    
    echo '<div>' . 'This post has' . $words_count . 'words in it.' . '</div>';

    return $content;
}
add_filter( 'the_content', 'get_post_words_count');

// function show_last_two_posts() {
//     $args = array(
//         'post_type'      => 'post',
//         'post_status'    => 'publish',
//         'posts_per_page' => 2 
//     );
//     $last_two_posts = new WP_Query($args);

//     if ($last_two_posts->have_posts()) {
//         echo '<ul>';
//         while ($last_two_posts->have_posts()) {
//             $last_two_posts->the_post();
//             echo '<li>' . get_the_title() . '</li>';
//         }
//         echo '</ul>';
//     }

//     wp_reset_postdata();

// }
// show_last_two_posts();