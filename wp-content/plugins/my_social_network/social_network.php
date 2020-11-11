<?php
/*
*   Plugin Name: My Social Network
*   Description: This is a social network plugin
*   Author: Oliver Leon
*   Author URI: https://www.leonoliver.com
*   Version: 1.0
*   License: GPLv2 or later
*/
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

if(! defined('ABSPATH')) { //Security practice
    die;
}


function wpcf_add_admin_page(){
    // Generate Social Network Admin Page    //Page title  |  Menu title  |  Capability  |  Menu Slug  |  Callable function  |  Icon URL
    add_menu_page('Social Network', 'Social Network', 'manage_options', 'sn_settings', 'sn_theme_create_page', 'dashicons-admin-site', 110);
    
    //Generate CT Admin Sub Pages
                    // id
    add_submenu_page('sn_settings', 'SN Social Network Settings', 'General', 'manage_options', 'sn_settings', 'sn_theme_create_page');
    add_submenu_page('sn_settings', 'Social Network Settings', 'Social Links', 'manage_options', 'sn_settings_social_links', 'sn_theme_settings_page');


    //Activate Custom Settings
    add_action('admin_init', 'sn_custom_settings');
}
add_action('admin_menu', 'wpcf_add_admin_page' );

function sn_custom_settings(){
    //register_setting -> create specific section in the db (wp_options table)
                    //unit name settings-group |  option name for input value
    register_setting( 'sn-settings-group', 'facebook_icon' ); //input field
    register_setting( 'sn-settings-group', 'facebook_link' ); //input field
    register_setting( 'sn-settings-group', 'twitter_icon' );
    register_setting( 'sn-settings-group', 'twitter_link' );
    register_setting( 'sn-settings-group', 'instagram_icon' );
    register_setting( 'sn-settings-group', 'instagram_link' );
    register_setting( 'sn-settings-group', 'pinterest_icon' );
    register_setting( 'sn-settings-group', 'pinterest_link' );

                        // id of section | title of section form | callback function generate html | page id
    add_settings_section('sn-sidebar-options', 'Manage Options', 'sn_sidebar_options', 'sn_settings');
    add_settings_section( 'sn-sidebar-options', 'Manage Options', 'sn_sidebar_options', 'sn_settings_social_links');
                        //id  | title of section | callback function  |  Name of the page the field belongs  | section id  
    add_settings_field('sidebar-facebook', 'Show Facebook Icon', 'sn_sidebar_facebook', 'sn_settings_social_links', 'sn-sidebar-options');
    add_settings_field('sidebar-twitter', 'Show Twitter Icon', 'sn_sidebar_twitter', 'sn_settings_social_links', 'sn-sidebar-options');
    add_settings_field('sidebar-instagram', 'Show Instagram Icon', 'sn_sidebar_instagram', 'sn_settings_social_links', 'sn-sidebar-options');
    add_settings_field('sidebar-pinterest', 'Show Pinterest Icon', 'sn_sidebar_pinterest', 'sn_settings_social_links', 'sn-sidebar-options');
}

function sn_sidebar_options(){
    echo "Customize your Information";
}

//Write custom desgined Page in the second custom function
function sn_theme_settings_page(){
    //generation of our admin Page
    require_once('social_network_design.php');
}

function sn_sidebar_facebook(){
     $facebook_icon = get_option( 'facebook_icon' ); //extra value from db
     $facebook = esc_attr( get_option( 'facebook_link' )); ?>
   <input type="text" name="facebook_link" value="<?php echo $facebook; ?>" placeholder="Facebook Link" /> <input type="radio" name="facebook_icon" value="yes" <?php echo ($facebook_icon == 'yes') ? 'checked' : 'unchecked' ?>/> Yes <input type="radio" name="facebook_icon" value="no" <?php echo($facebook_icon == 'no') ? 'checked' : 'unchecked' ?> /> No
 <?php
}

function sn_sidebar_twitter(){
    $twitter_icon = get_option( 'twitter_icon' );
    $twitter = esc_attr( get_option( 'twitter_link' )); ?>
     <input type="text" name="twitter_link" value="<?php echo $twitter ; ?>" placeholder="Twitter Link" /> <input type="radio" name="twitter_icon" value="yes" <?php echo ($twitter_icon == 'yes') ? 'checked' : 'unchecked' ?>/> Yes <input type="radio" name="twitter_icon" value="no" <?php echo($twitter_icon == 'no') ? 'checked' : 'unchecked' ?> /> No
 <?php
}

function sn_sidebar_instagram(){
    $instragram_icon = get_option( 'instagram_icon' );
    $instagram = esc_attr( get_option( 'instagram_link' )); ?>
    <input type="text" name="instagram_link" value="<?php echo $instagram ; ?>" placeholder="Instagram Link" /> <input type="radio" name="instagram_icon" value="yes" <?php echo ($instragram_icon == 'yes') ? 'checked' : 'unchecked' ?>/> Yes <input type="radio" name="instagram_icon" value="no" <?php echo($instragram_icon == 'no') ? 'checked' : 'unchecked' ?> /> No

<?php 
}

function sn_sidebar_pinterest(){
    $pinterest_icon = get_option( 'pinterest_icon' );
    $pinterest = esc_attr( get_option( 'pinterest_link' )); ?>
    <input type="text" name="pinterest_link" value="<?php echo $pinterest ; ?>" placeholder="Pinterest Link" /> <input type="radio" name="pinterest_icon" value="yes" <?php echo ($pinterest_icon == 'yes') ? 'checked' : 'unchecked' ?>/> Yes <input type="radio" name="pinterest_icon" value="no" <?php echo($pinterest_icon == 'no') ? 'checked' : 'unchecked' ?> /> No

<?php 
}

//Template Submenu functions
function sn_theme_create_page() {
    require_once('sn-admin.php');
}

//Add style sheet
add_action('admin_enqueue_scripts', 'register_stylesheet');

//callable function in wich css will be registered
function register_stylesheet(){
    wp_enqueue_style('plugin_stylesheet', plugins_url('assets/css/plugin_social_network_styles.css', __FILE__));
}



//Add js/Jquery files
// add_action('admin_enqueue_scripts', 'register_scripts');

//callable function in wich js/jquery will be registered
// function register_scripts(){
//     wp_enqueue_script('js_jquery.file', plugins_url('js_jquery.js', __FILE__));
// }


?>