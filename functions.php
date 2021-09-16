<?php
require_once get_theme_file_path('/inc/example.php');
// require_once get_theme_file_path('/inc/acf.php');
require_once get_theme_file_path('/inc/cmb2-md.php');

if(site_url() == 'http://localhost/html2wordpress'){
    define('version',time());
}else{
    define('version',get_theme_url()-> get('version'));
}

function alpha_script(){

    wp_enqueue_style('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('featherlight_css','//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css');
    wp_enqueue_style('dashicons');

    
    wp_enqueue_style('font-awesome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    wp_enqueue_style('main_style',get_stylesheet_uri());

    wp_enqueue_script('featherlight_js','//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js',array('jquery'),version,true);
}
add_action('wp_enqueue_scripts','alpha_script');



function alpha_support(){
    load_theme_textdomain('alpha');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
    add_theme_support('title-tag');
    add_theme_support('widgets');

    $custom_control = array(
        'header-text' => true,
        'default-text-color' => '#222'
    );

    register_nav_menu('primary menu','primary menu');

    add_theme_support('post-formats',array("video","audio","link","quote","image"));

    add_image_size('alpha-home-feature',400,400,array('center','center'));

}
add_action('after_setup_theme','alpha_support');

function alpha_widget(){
    register_sidebar(array(
        'name' => 'main-sidebar',
        'id' => 'main-sidebar',
        'description' => 'add your main sidebar',
        'before-widget' => '<div>',
        'after-widget' => '</div>',
        'before-title' => '<h3>',
        'after-title' => '</h3>'
    ));
}
add_action('widgets_init','alpha_widget');


function alpha_about_hero_section(){
    if(is_page()){
$thumbnail_img = get_the_post_thumbnail_url(null,'large');
        ?>
<style>
    .About_hero_section{
        background:url(<?php echo $thumbnail_img ?>);
        height:700px;
        background-repeat: no-repeat;
        background-size:cover;
        background-position:center center;
    }
    .About_hero_section h3,h1{
        color: #<?php echo get_header_textcolor(); ?>
    }
</style>
<?php 
if(!display_header_text()){
    ?>
    <style>
        .About_hero_section h3,h1{
        display:none;
    }
    </style>
    <?php
}
?>

        <?php
    }
}
if(is_front_page()){
    if(current_theme_supports('custom-header')){
        ?>
        <style>
            .header{
                background:url(<?php echo header_image(); ?>)
            }
        </style>
        <?php
    }
}

add_action('wp_head','alpha_about_hero_section');


// remove class filter




if(!function_exists('alpha_body_class')){
    function alpha_body_class($classes){
        unset($classes[array_search('',$classes)]);
        return $classes;
     }
     add_filter('body_class','alpha_body_class');
     
     
     require get_template_directory().'/lib/attachments.php';
}

// add_filter('acf/settings/show_admin','__return_false');



