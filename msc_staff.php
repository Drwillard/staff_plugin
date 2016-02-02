<?php

/*
Plugin Name: MSC Staff Plugin
Plugin URI:  http://willard.us
Description: Adds staff tools to MSC website
Version:     0.5
Author:      Chris Willard
Author URI:  http://
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset
*/

add_action('init', 'cwillard_msc_staff_shortcodes');

function cwillard_msc_staff_shortcodes() {
	
        add_shortcode( 'staff_block', 'staff_setup');
        add_shortcode( 'staff_section', 'staff_section');
	add_shortcode( 'staff', 'format_staff');
        
	
	}
	
function format_staff($params, $content = null) {
    
    $uploads    = wp_upload_dir();
    $imgPath    = $uploads['baseurl'];
    $defaultPic = "<img src='" . $imgPath . "/Small_staffsmiley1.png' />";
    
    $name       = (key_exists('name', $params)) ? $params['name'] : "Coming soon";
    $position   = (key_exists('title', $params)) ? $params['title'] : "MSC Staff!";
    $link       = (key_exists('link', $params)) ? $params['link'] : "http://mscwired.org" . $_SERVER['REQUEST_URI'];
    $content    = ($content) ? $content : $defaultPic;
    
        ?>
        <div style="margin: 6px; float: left;"><a href="<?php echo $link; ?>">
            <img class="alignnone" src="<?php echo $content; ?>" alt="" width="132" height="144" />
            <strong><?php echo $position; ?></strong><br class="clear" /><?php echo $name?></a>
        </div>
        <?php    
    
}

function staff_section ($params, $content) {
    
    $title      = (key_exists('title', $params)) ? $params['title'] : "Morning Star Staff";    
    return '<div class="container_staff">' . "<h4>". $title ."</h4>". do_shortcode($content) . '</div><div class="break_staff"></div>';

}

function staff_setup($params, $conetnt) {
    /*
     * This is a hacky way to do this, I know...
     */
    ?>
        <br class="clear" /><br class="clear" />
        <style>
        a {
            text-decoration: none;
        } .container_staff {
            display:table-row !important;
        } .break_staff {
            padding-bottom: 50px;
        } h4 {
            margin-bottom: -12px !important;
            line-height: -12px !important;
        }
        </style>    
        
    <?php
    
}


?>