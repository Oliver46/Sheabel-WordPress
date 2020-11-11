<?php
/*
*   Plugin Name: Weather API
*   Description: This plugin request data from the Open Weather Map
*   Author: Oliver Leon
*   Author URI: https://www.leonoliver.com
*   Version: 1.0
*/

if(! defined('ABSPATH')) { //Security practice
    die;
}

// 2 build-in functions | add_action() & add_menu_page()
add_action('admin_menu', 'cf_weather_api_page' );

//2 custom functions are required
function cf_weather_api_page(){
    //add_menu_page( 
    //    'Page_title', //Page Title
    //    'Menu_title', //Menu Title
    //    'manage_options', //Capability
    //    'custom_plugin', //Menu Slug
    //    'custom_function2', //Callable function
    //    'icon' ); //Icon URL
    
    add_menu_page('WEATHER API', 'Weather API', 'manage_options', 'custom_weather_plugins_settings', 'cf2_create_weather_page', 'dashicons-rest-api');

    add_submenu_page('custom_weather_plugins_settings', 'Custom Weather API Settings', 'General', 'manage_options', 'custom_weather_plugins_settings', 'cf2_create_weather_page');

    //Active custom settings
    add_action('admin_init', 'weather_cp_settings');
}

function weather_cp_settings(){
    register_setting( 'weather-settings-group', 'input_city' );
    register_setting( 'weather-settings-group', 'input_url' );
    register_setting( 'weather-settings-group', 'input_api_key');

    add_settings_section( 'weather-sidebar-options', 'Manage Options', 'weather_sidebar_options', 'custom_weather_plugins_settings' );

    add_settings_field('sidebar-city-input', 'City', 'sidebar_city_input', 'custom_weather_plugins_settings', 'weather-sidebar-options');
    add_settings_field('sidebar-url-input', 'URL', 'sidebar_url_input', 'custom_weather_plugins_settings', 'weather-sidebar-options');
    add_settings_field('sidebar-api-key-input', 'API KEY', 'sidebar_api_key_input', 'custom_weather_plugins_settings', 'weather-sidebar-options');
}

function weather_sidebar_options(){
    echo "Weather Information";
}

function sidebar_city_input(){
    $city = esc_attr( get_option( 'input_city' )); ?>
    <input type="text" name="input_city" value="<?php echo $city; ?>" placeholder="City" />
<?php
}

function sidebar_url_input(){
    $url = esc_attr( get_option( 'input_url' ));
    echo '<input type="text" name="input_url" value="' .$url. '" placeholder="URL" />';
}

function sidebar_api_key_input(){
    $api_key = esc_attr( get_option( 'input_api_key' ));
    echo '<input type="text" name="input_api_key" value="' .$api_key. '" placeholder="API KEY" />';
}

function cf2_create_weather_page() {
    require_once('weather_design.php');
}

//Write custom desgined Page in the second custom function
// function custom_function2(){
//     require_once('weather_design.php');
// }

//Add style sheet
add_action('admin_enqueue_scripts', 'register_weather_stylesheet');

//callable function in wich css will be registered
function register_weather_stylesheet(){
    wp_enqueue_style('plugin_stylesheet', plugins_url('/plugin_styles.css', __FILE__));
}

//Add js/Jquery files
add_action('admin_enqueue_scripts', 'register_scripts');

//callable function in wich js/jquery will be registered
function register_scripts(){
    wp_enqueue_script('js_jquery.file', plugins_url('js_jquery.js', __FILE__));
}

?>