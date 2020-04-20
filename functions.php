<?php
    // function of add style
    function setstyle()
    {
        wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
        wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js',['jquery'] );
        wp_enqueue_style('nav',get_template_directory_uri().'/assets/css/nav.css');
        wp_enqueue_style('post',get_template_directory_uri().'/assets/css/style.css');

    }
    //function which implement styles
    add_action('wp_enqueue_scripts','setstyle');
    //add feature image to posts
    add_theme_support("post-thumbnails");
    //add dynamic menu
    add_theme_support("menus");
    //register menu in admin panel
    register_nav_menus(array(
        'top-nav'=>'Main Navigation',
        'footer-nav'=>'Footer Navigation',
    ));

    //make custom post
    function CustomPost()
    {
       register_post_type( "MySkills",array(
           "label"=>"myskills",
           "public"=>true,
           "supports" =>["title","editor","thumbnail"],
           'taxonomies' => ['category', 'post_tag'],
       )); 
    }
    //add action
    add_action( "init","CustomPost");
?>