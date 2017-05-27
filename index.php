<?php
/*
Plugin Name: WP Inline SVG Shortcode
Plugin URI: https://github.com/ericmasiello/wp-inline-svg-shortcode
Description: Allows you to insert inline SVGs using shortcodes
Version: 0.0.1
Author: Eric Masiello
Author URI: http://www.synbydesign.com
License: GPL
Copyright: Eric Masiello
Credit: 
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function inline_svg_fn( $atts, $content = NULL ) {
  extract( shortcode_atts( array( 'id' => '', 'class' => '', 'title' => '' ), $atts ) );
  $output = '<svg class="' . $class . '"><title>' . $title . '</title><use xlink:href="#' . $id . '" /></svg>';
  return $output;
}

add_shortcode( "inline_svg", "inline_svg_fn" );
?>