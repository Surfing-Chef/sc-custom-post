<?php
/**
 * Plugin Name: SC Custom Post
 * Plugin URI: https://github.com/Surfing-Chef/sc-custom-post
 * Description: Creates a custom post section for a website
 * Version: 1.0
 * Author: Surfing-Chef
 * Author URI: https://github.com/Surfing-Chef
 * License: GPL3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: sc-custom-post
*/

// Exit if accessed directly
defined( 'ABSPATH' ) or die( "Error: contact admin@surfing-chef.com" );

function sc_register_post_type(){
  $args = array('public' => true, 'label' => 'Custom Posts');

  register_post_type( 'sc-post', $args );
}
add_action('init', 'sc_register_post_type');
