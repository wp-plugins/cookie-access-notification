<?php
/*
Plugin Name: Cookie Access Notification
Version: 1.0
Plugin URI: http://www.schloebe.de/
Description: Sends out an email to the blog admin when a commenter accesses the blog with a certain username/ email address/ website url.
Author: Oliver Schl&ouml;be
Author URI: http://www.schloebe.de/
*/

function os_cookie_check() {
    $visitor_ip = $_SERVER['REMOTE_ADDR'];
    $zugriff_ort = $_SERVER['REQUEST_URI'];
    $email = get_option('admin_email');
    $betreff = "New access with IP " . $visitor_ip . " on " . wp_specialchars( get_option('blogname') );
    $headers = "From: " . wp_specialchars( get_option('blogname') ) . " <$email>\n";
    $headers .= "Content-Type: text/html\n";
    $headers .= "Content-Transfer-Encoding: 8bit\n";
    $mailtext = "New access on " . wp_specialchars( get_option('blogname') ) . " from commentator " . $_COOKIE["comment_author_" . COOKIEHASH] . " with IP " . $visitor_ip . " on page " . $zugriff_ort;
    if( isset( $_COOKIE["comment_author_" . COOKIEHASH] ) && $_COOKIE["comment_author_" . COOKIEHASH] == 'Alphawolf' && !isset( $_COOKIE["wp_os_access_" . COOKIEHASH] ) ) {
        setcookie( "wp_os_access_" . COOKIEHASH, $visitor_ip, time()+3600 );
        mail($email, $betreff, $mailtext, $headers);
    }
}

add_action('init', 'os_cookie_check');
?>