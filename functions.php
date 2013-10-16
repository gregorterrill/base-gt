<?php

function load_site_script() {
    wp_enqueue_script('site-scripts', get_template_directory_uri().'/js/site-scripts.js',false,false,true);
}
add_action('wp_enqueue_scripts','load_site_script');


function make_menus() {
    register_nav_menus(
        array(
            'primary_navigation' => 'Primary Navigation',
            'footer_navigation' => 'Footer Navigation'
        )
    );
}
add_action( 'init', 'make_menus' );


function make_widgets() {

    register_sidebar(array(
        'name'          => 'Primary Sidebar',
        'id'            => 'sidebar-primary',
        'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
        'after_widget'  => '</div></section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => 'Footer Sidebar',
        'id'            => 'sidebar-footer',
        'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
        'after_widget'  => '</div></section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'make_widgets');


function remove_the_meta_boxes() {
    remove_meta_box('formatdiv', 'post', 'side');
}
add_action( 'add_meta_boxes', 'remove_the_meta_boxes' );


function customize_dashboard() {
    //remove useless stuff
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );

    //move Right Now
    global $wp_meta_boxes;
    $widget = $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'];
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'] );
    $wp_meta_boxes['dashboard']['side']['core']['dashboard_right_now'] = $widget;

    //add custom Tutorial widget
    wp_add_dashboard_widget( 'gt_dashboard_tutorial', 'Welcome to Your WordPress Dashboard!', 'add_gt_tut_widget' );
}
add_action( 'wp_dashboard_setup', 'customize_dashboard' );


function add_gt_tut_widget() { ?>
 
    <p>Hi! This is a message from your friendly neighborhood web developer, Gregor.</p>
    <p>Not sure what to do next? Try these links:</p>
    <ul>
        <li><a href="http://codex.wordpress.org">The WordPress Codex</a></li>
        <li><a href="http://easywpguide.com">Easy WP Guide</a></li>
    </ul>
<?php }


function remove_menus_for_non_admins() {
    if (!current_user_can('administrator')) {
        remove_menu_page('tools.php');
        remove_menu_page('options-general.php');
        remove_menu_page('themes.php');
        remove_menu_page('plugins.php');
    }
    remove_menu_page('edit-comments.php');
}
add_action( 'admin_menu', 'remove_menus_for_non_admins' );


function new_excerpt_more( $more ) {
    return '...<a href="'.get_permalink().'">read more &raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');