<?php

function wpb_theme_setup(){
    add_theme_support('post-thumbnails');

}
add_action('after_setup_theme','wpb_theme_setup');