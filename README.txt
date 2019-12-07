=== Dompr ===
Contributors: vanaf1979
Donate link: https://vanaf1979.nl/
Tags: laravel, symfony, dumper
Requires at least: 5.3
Tested up to: 5.3
Stable tag: 5.3
Requires PHP: 7.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Laravel d() and dd() and Symfony Dump() functions for WordPress theme development.


== Description ==

The Dumpr plugin provides d() and dd() debugging functions similer to the ones found in [the Laravel PHP Framework](https://nl.wordpress.org/plugins/dumpr/).

Behing the scenes this plugin, like the Laravel framework, uses the [Symfony Var-Dumper package](https://symfony.com/components/VarDumper) and thus it also provides a dump() finction.

To prevent any unintended output in production sites the d(), dd() and dump() functions only return output when WP_DEBUG is set to true in your wp-config.php file.

Examples:

`<?php d($some_var); ?>`

`<?php d($some_var, $som_other_var); ?>`

`<?php dd($some_var); ?>`

`<?php dump($some_var); ?>`


== Installation ==

Download via the plugin repository:
1. [Download the Dumpr plugin here](https://nl.wordpress.org/plugins/dumpr/).
2. Upload the plugin files to the `/wp-content/plugins/dumpr` directory.
3. Activate Dumpr from your Plugins page.
4. Enable debugging in your wp-config.php file. define( 'WP_DEBUG', true );
5. Use the d(), dd(), and dump() functions in your theme's code.

Install via the WordPress admin:
1. Visit Plugins > Add New.
2. Search for “Dumpr”.
3. Install Dumpr.
4. Activate Dumpr.
5. Enable debugging in your wp-config.php file. define( 'WP_DEBUG', true );
6. Use the d(), dd(), and dump() functions in your theme's code.


== Frequently Asked Questions ==

= the d() or dd() functions don't return any output =

In order for these function to generate any output you have to enable debugging in your config.php file.


== Screenshots ==

1. Description for screenshot-1.(png|jpg|jpeg|gif).
2. Description for screenshot-2.(png|jpg|jpeg|gif).


== Changelog ==

= 0.9 =
* Fix – Som fix description.
* Tweak – Som tweak description.

= 0.8 =
* New – Added d() function.
* New – Added dd() function.


== Upgrade Notice ==

You should be able to upgrade with no know issues.


== Contributing ==

If you want to contribute please go to [the Dumpr GitHub repositorie](https://github.com/vanaf1979/dumpr).