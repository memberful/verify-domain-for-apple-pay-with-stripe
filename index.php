<?php
/*
Plugin Name: Apple Pay domain verification for Stripe
Description: Add Stripe's Apple Pay domain association file to your site
Version: 1.22.3
Author: Memberful
Author URI: https://memberful.com/
License: MIT
*/

function memberful_show_apple_pay_domain_verification_file() {
  if ( $_SERVER["REQUEST_URI"] == "/.well-known/apple-developer-merchantid-domain-association" ) {
    readfile( dirname( __FILE__ ) . "/apple-developer-merchantid-domain-association");
    exit();
  }
}
add_action( 'plugins_loaded', 'memberful_show_apple_pay_domain_verification_file' );
