<?php
/*
Plugin Name: Apple Pay for Stripe
Description: Verify your WordPress domain for Apple Pay with Stripe.
Version: 1.0
Author: Memberful
Author URI: https://memberful.com/
License: GPLv2 or later
*/

function memberful_show_apple_pay_domain_verification_file() {
  if ( $_SERVER["REQUEST_URI"] == "/.well-known/apple-developer-merchantid-domain-association" ) {
    readfile( dirname( __FILE__ ) . "/apple-developer-merchantid-domain-association");
    exit();
  }
}
add_action( 'plugins_loaded', 'memberful_show_apple_pay_domain_verification_file' );
