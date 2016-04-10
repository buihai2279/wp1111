<?php


define('THEME_DIR', get_template_directory());
define('THEME_INC_DIR', THEME_DIR . '/inc');
define('THEME_WIDGET_DIR',THEME_INC_DIR.'/widgets');
define('THEME_SHORTCODE_DIR',THEME_INC_DIR.'/shortcode');


require_once THEME_INC_DIR . '/customizer.php';

//  overwrite shortcode
require_once THEME_SHORTCODE_DIR . '/gallery.php';
new Shortcode_gallery();



global $customizer;
$customizer = new Customizer();


    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    function setuptheme()
    {
        add_theme_support( 'custom-background' );//Kích hoạt tùy chỉnh
        add_theme_support('category-thumbnails');
        add_theme_support( 'post-thumbnails' ); 
        add_theme_support( 'title-tag' );
        if (function_exists('add_image_size')) 
        { 
            add_image_size( 'post-image-half', 700, 395, array( 'center', 'center') );
            add_image_size( 'thumbnail-latest', 105, 70,array( 'center', 'center'));
            add_image_size( 'thumbnail-category', 400, 400,array( 'center', 'center'));
            add_image_size( 'ads', 300, 250,array( 'center', 'center'));
            add_image_size( 'large', 1024, 682,array( 'center', 'center'));
            add_image_size( 'link-image-background', 1100, 620,array( 'center', 'center'));
        }
        set_post_thumbnail_size( 300, 300, array( 'center', 'center')  );
        //array( 'aside', 'gallery','link','image','quote','video','audio','chat' )
        add_theme_support( 'post-formats', array('aside','quote','status','link','image','gallery','video','audio') );
    }

    add_action('after_setup_theme','setuptheme');


    function register_menus() {
      register_nav_menu( 'first-menu', __( 'Menu on Top Header'));
      register_nav_menu( 'main-menu', __( 'Main Header'));
      register_nav_menu( 'footer-menu', __( 'Menu on Footer'));
    }
    add_action( 'init', 'register_menus' );

require_once '/inc/Walker/walker-menu.php';

require_once 'inc/widgets/advertisement.php';
require_once 'inc/widgets/author.php';
require_once 'inc/widgets/categories.php';
require_once 'inc/widgets/custom_post.php';
require_once 'inc/widgets/instagram.php'; 
require_once 'inc/widgets/tags.php'; 
require_once 'inc/widgets/post_in_cat.php';
require_once 'inc/widgets/subscribe.php';
require_once 'inc/widgets/youtube.php';
require_once 'inc/widgets/slider.php';
function register_widgets() {
    register_widget( 'monster_subscribe_and_social_widget' );
    register_widget( 'monster_about_author_widget' );
    register_widget( 'monster_custom_posts_widget' );
    register_widget( 'monster_advertisement_widget' );
    register_widget( 'monster_youtube_subscribe_widget' );
    register_widget( 'monster_posts_carousel_widget' );
    register_widget( 'monster_instagram_widget' );
    register_widget( 'monster_posts_slider_widget' );
    register_widget( 'tag_cloud' );
    register_widget( 'monster_categories_tiles_widget' );
}
add_action( 'widgets_init', 'register_widgets' );
 ?>


<?php 

    function mymenucus()
    {
        add_menu_page( '', 'Theme Option Name', 'switch_themes','Theme_Option', 'Function_Theme_Option','',5);
        add_submenu_page('Theme_Option','Customize Social',' Social Customize', 'switch_themes','Social_url','Customize_Social' );
        add_submenu_page('Theme_Option','Customize Slide',' Slide Customize', 'switch_themes','Slide_url','Customize_Slide' );
        add_submenu_page('Theme_Option','Customize HomePage',' Customize', 'switch_themes','Home_url','Customize_HomePage' );
        remove_submenu_page( 'Theme_Option', 'Theme_Option' );
    }
    add_action('admin_menu','mymenucus');

add_action( 'widgets_init', 'bettie_widgets_init' );
function bettie_widgets_init() {
    register_sidebar( 
        array(
        'name' =>'Right Sidebar',
        'id' => 'sidebar-1',
        'description' =>'Widgets in this area will be shown on all posts and pages.',
        'before_widget' => '<div id="%1$s" class="widget %2$s ">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
        ));
    register_sidebar( 
        array(
        'name' =>'Footer Sidebar (Instagram)',
        'id' => 'sidebar-3',
        'description' =>'Widgets in this area will be shown on all posts and pages.',
        'before_widget' => '<aside id="%1$s" class="widget %2$s ">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
        ));
    register_sidebar( 
        array(
        'name' =>'End Content',
        'id' => 'sidebar-2',
        'description' =>'Widgets in this area will be shown on all posts and pages.',
        'before_widget' => '<div id="%1$s" class="widget %2$s ">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
        ));
    register_sidebar( 
        array(
        'name' =>'Categories',
        'id' => 'sidebar-4',
        'description' =>'Widgets in this area will be shown on all posts and pages.',
        'before_widget' => '<div id="%1$s" class="widget %2$s ">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
        ));
    register_sidebar( 
        array(
        'name' =>'Sidebar Container Slider',
        'id' => 'sidebar-container',
        'description' =>'Widgets in this area will be shown on all posts and pages.',
        'before_widget' => '<aside id="%1$s" class="widget %2$s ">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
        ));
}
 ?>




<?php
/*============================================================================
 * 2. NẠP NHỮNG TẬP TIN JS VÀO THEME
============================================================================*/
add_action('wp_enqueue_scripts', 'register_js');

function register_js(){
    $jsUrl = get_template_directory_uri() . '/assets/js';

    wp_register_script('jquery_min',$jsUrl.'/jquery-1.12.1.min.js',array('jquery'),'1.0',false);
    wp_enqueue_script('jquery_min');

    wp_register_script('bootstrap_js',$jsUrl.'/bootstrap.min.js',array('jquery'),'1.0',false);
    wp_enqueue_script('bootstrap_js');

    wp_register_script('owl_carousel_js',$jsUrl.'/owl.carousel.min.js',array('jquery'),'1.0',false);
    wp_enqueue_script('owl_carousel_js');

    wp_register_script('my_js',$jsUrl.'/my_jquery.js',array('jquery'),'1.0',false);
    wp_enqueue_script('my_js');

    if(is_singular() && comments_open() ){
        wp_enqueue_script('comment-reply');
    }
}
?>
<?php
/*============================================================================
 * 1. NẠP NHỮNG TẬP TIN CSS VÀO THEME
============================================================================*/
add_action('wp_enqueue_scripts', 'register_styles');

function register_styles(){
    global $wp_styles;
    $cssUrl = get_template_directory_uri() . '/assets/css';

    wp_register_style('bootstrap_css', $cssUrl . '/bootstrap.min.css',array(),'1.0');
    wp_enqueue_style('bootstrap_css');

    wp_register_style('theme_min', $cssUrl . '/theme.min.css',array(),'1.0');
    wp_enqueue_style('theme_min');

    wp_register_style('custom_css', $cssUrl . '/custom.css',array(),'1.0');
    wp_enqueue_style('custom_css');

// font
    wp_register_style('font_awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',array());
    wp_enqueue_style('font_awesome');

    wp_register_style('font_Roboto','https://fonts.googleapis.com/css?family=Roboto',array());
    wp_enqueue_style('font_Roboto');

    wp_register_style('font_Open_Sans','https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300',array());
    wp_enqueue_style('font_Open_Sans');

    wp_register_style('font_Noto','https://fonts.googleapis.com/css?family=Noto+Serif',array());
    wp_enqueue_style('font_Noto');

    // fix IE9
    wp_register_style('html5shiv_ie9','https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js',array(),'1.0');
    wp_register_style('respond_ie9','https://oss.maxcdn.com/respond/1.4.2/respond.min.js',array(),'1.0');
    $wp_styles->add_data('html5shiv_ie9', 'conditional', 'IE 9');
    wp_enqueue_style('html5shiv_ie9');
    $wp_styles->add_data('respond_ie9', 'conditional', 'IE 9');
    wp_enqueue_style('respond_ie9');

}
?>
<?php 
    function cleaner_url($url) {
            $U = explode(' ',$url);
            $W =array();
            foreach ($U as $k => $u) {
                if (stristr($u,'http')||(count(explode('.',$u))>1)) {
                    unset($U[$k]);
                    return cleaner_url( implode(' ',$U));
                }
            }
              return implode(' ',$U);
        }
 ?>