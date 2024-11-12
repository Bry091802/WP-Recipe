<?php

function recipe_assets(){
    wp_enqueue_style('recipetheme', get_template_directory_uri() . '/css/style.css', microtime());
}

add_action('wp_enqueue_scripts', 'recipe_assets');