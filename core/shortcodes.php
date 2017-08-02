<?php

if (!class_exists('gleamShortcodes')) {

class gleamShortcodes {


	function __construct (){

			/* User and Users meta Shortcodes */
	
			add_shortcode("displayusers_meta", array ($this, 'displayusers_meta_shortcode'));
			add_shortcode ("display_firstname" , array ($this, 'display_firstname_shortcode'));
			add_shortcode ("display_lastname" , array ($this, 'display_lastname_shortcode'));
			add_shortcode ("display_displayname" , array ($this, 'display_displayname_shortcode'));
			add_shortcode ("display_userid" , array ($this, 'display_userid_shortcode'));
			add_shortcode ("display_username" , array ($this, 'display_username_shortcode'));
			add_shortcode ("display_useremail" , array ($this, 'display_useremail_shortcode'));
			
	
	}
	function displayusers_meta_shortcode($atts, $content){
	    
	    if (!is_user_logged_in()) return;
		
	
		$user_id=get_current_user_id();
		return get_user_meta( $user_id, $atts['meta'], true );;
	}
	
	
	
	function display_firstname_shortcode ($atts, $content){
	    
	    if (!is_user_logged_in()) return;
	
		$current_user = wp_get_current_user();
		return $current_user->user_firstname;

	
	}
	
	function display_lastname_shortcode ($atts, $content){
	    
	    if (!is_user_logged_in()) return;
	
		$current_user = wp_get_current_user();
		return $current_user->user_lastname;

	
	}
	
	function display_displayname_shortcode ($atts, $content){
	    
	    if (!is_user_logged_in()) return;
	
		$current_user = wp_get_current_user();
		return $current_user->display_name;

	
	}
	
	function display_userid_shortcode ($atts, $content){
	    
	    if (!is_user_logged_in()) return;
	
		$current_user = wp_get_current_user();
		return $current_user->ID;

	
	}
	function display_username_shortcode($atts, $content){
	    
	    if (!is_user_logged_in()) return;
	
		 $current_user = wp_get_current_user();
		 return $current_user->user_login;
		 
	}
	
	
	function display_useremail_shortcode ($atts, $content){
	    
	    if (!is_user_logged_in()) return;
	
		$current_user = wp_get_current_user();
		return $current_user->user_email;

	
	}


	}


}