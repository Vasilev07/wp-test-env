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

        $content = $content . $div;

        return $content;
    }
    
    add_filter( 'the_content', 'insert_div_to_content');
?>