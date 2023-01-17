=== Verify domain for Apple Pay with Stripe ===
Contributors: patrik bona, drewstrojny
Tags: apple pay, stripe, domain verification, memberful
Requires at least: 4.1
Requires PHP: 7.0
Tested up to: 6.1.1
Stable tag: 1.0.3
License: GPLv2 or later

Adds the domain association file to enable Apple Pay on the Web for your Stripe account.

== Description ==

Adds [Stripe's domain association file](https://stripe.com/files/apple-pay/apple-developer-merchantid-domain-association) for [Apple Pay verification](https://stripe.com/docs/apple-pay/web#going-live) to your WordPress site and makes it available at `https://<YOUR_SITE_DOMAIN>/.well-known/apple-developer-merchantid-domain-association`.

= Troubleshooting =

* Apple Pay requires SSL. This means you must have an SSL certificate installed on your website and your domain must be accessible at an URL that starts with `https`.
* You must have custom permalinks enabled (anything but **Plain**) from Settings => Permalinks in your WordPress dashboard. If the plugin doesn't work, make sure the URL is not blocked by your web server and that request is being passed to WordPress. 

== Installation ==

1. Install and activate the plugin directly from your WordPress dashboard, or download the files and visit Plugins => Add New => Upload from your WordPress dashboard.
2. Go to your Stripe dashboard and add your domain from Account Settings => Apple Pay.
3. Navigate to `https://<YOUR_SITE_DOMAIN>/.well-known/apple-developer-merchantid-domain-association` and verify that it returns the contents of Stripe's domain association file.

== Changelog ==

= 1.0.3 =

* Updated README

= 1.0.2 =

* Escape and force strict comparison when checking $_SERVER["REQUEST_URI"]
* Bumped minimum WP version to 4.1
* Bumped minimum PHP version to 7.0

= 1.0.1 =

* Replace Stripe domain association file with the new version

= 1.0 =

* Plugin release.
