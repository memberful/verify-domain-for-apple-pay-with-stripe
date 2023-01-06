<?php
/*
Plugin Name: Verify domain for Apple Pay with Stripe
Plugin URI: https://github.com/memberful/verify-domain-for-apple-pay-with-stripe
Description: Adds the domain association file to enable Apple Pay on the Web for your Stripe account.
Version: 1.0.2
Requires at least: 4.1
Requires PHP: 7.0
Author: Memberful
Author URI: https://memberful.com/
License: GPLv2 or later
*/

function memberful_show_apple_pay_domain_verification_file() {
  if ( isset($_SERVER["REQUEST_URI"]) ) {
    if ( urlencode($_SERVER["REQUEST_URI"]) === urlencode("/.well-known/apple-developer-merchantid-domain-association") ) {
      readfile( __DIR__ . "/apple-developer-merchantid-domain-association");
      exit();
    }
  }
}

add_action( "plugins_loaded", "memberful_show_apple_pay_domain_verification_file" );
