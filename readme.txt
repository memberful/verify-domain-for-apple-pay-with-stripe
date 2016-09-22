=== Apple Pay for Stripe ===
Contributors: patrik bona
Tags: memberful, apple pay, stripe, domain verification
Requires at least: 1.5.2
Tested up to: 4.6.1
Stable tag: 1.0
License: MIT
License URI: https://opensource.org/licenses/MIT

Add Apple Pay domain association file for Stripe to your site.

== Description ==

This plugin adds Stripe's domain association file for Apple Pay to your site
and makes it available at
`https://<YOUR_SITE_DOMAIN>/.well-known/apple-developer-merchantid-domain-association`.

Plugin should work most cases. If it isn't working, then make sure that the
URL is not blocked by your web server and that it is passed to WordPress. You
can do this by making sure that Non-Plain permalinks (`Settings -> Permalinks`)
are working for you.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/apple-pay-for-stripe` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress

== Frequently Asked Questions ==

== Screenshots ==

== Changelog ==

= 1.0 =

* Plugin release.

== Upgrade Notice ==
