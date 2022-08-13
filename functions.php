<?php

function palmoil_files(){
    wp_enqueue_script('commonevents', get_theme_file_uri('/js/cmnjs.js'));
    wp_enqueue_script('scrool', get_theme_file_uri('/js/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrapjs', get_theme_file_uri('/js/bootstrap.bundle.min.js'));
    wp_enqueue_script('font-awesomejs', get_theme_file_uri('/js/bootstrap.bundle.min.js'));
    wp_enqueue_script('owl-js', get_theme_file_uri('/js/owl.carousel.min.js'));
    wp_enqueue_style('palmoil_main_styles', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('owl_console1', get_theme_file_uri('/css/owl.theme.default.min.css'));
    wp_enqueue_style('owl_console1', get_theme_file_uri('/css/owl.carousel.min.css'));
    wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));
    wp_enqueue_style('font-awe-some', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.csss');
}

add_action('wp_enqueue_scripts', 'palmoil_files');



function palmoil_post_types(){
    register_post_type('companyname', array(
        'public' => true,
        'labels' => array(
            'name' => 'Company Name',
            'add_new_item' => 'Add New Company',
            'edit_item' => 'Edit Company',
            'all_items' => 'All Company',
            'singular_name' => 'Company'

            
        ),
        'menu_icon' => 'dashicons-admin-multisite'
    ));


}

add_action('init', 'palmoil_post_types');



function get_images_from_media_library() {
    $args = array(
        'post_type' => 'attachment',
        'post_mime_type' =>'image',
        'post_status' => 'inherit',
        'posts_per_page' => 5,
        'orderby' => 'rand'
    );
    $query_images = new WP_Query( $args );
    $images = array();
    foreach ( $query_images->posts as $image) {
        $images[]= $image->guid;
    }
    return $images;
}

add_action('init', 'get_images_from_media_library');



