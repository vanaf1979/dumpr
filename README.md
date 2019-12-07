## Dumpr WordPress plugin

| WARNING: Curently in testing phase. Do not use in production sites! |
| --- |
  
Laravel d() and dd() and Symfony Dump() functions for WordPress theme development.

Contributors: vanaf1979  
Donate link: https://vanaf1979.nl/  
Tags: laravel, symfony, var, dumper, var-dumper  
Requires at least: 5.3  
Tested up to: 5.3  
Stable tag: 5.3  
Requires PHP: 7.0.0  
License: GPLv2 or later  
License URI: https://www.gnu.org/licenses/gpl-2.0.html  

<br/><br/>
## Example output
<p align="left">
 <img src="https://i.postimg.cc/1ztwLQd8/dumpr.png">
</p>

<br/><br/>
## Description

The Dumpr plugin provides d() and dd() debugging functions similar to the ones found in [the Laravel PHP Framework](https://nl.wordpress.org/plugins/dumpr/).

Behind the scenes this plugin, like the Laravel framework, uses the [Symfony Var-Dumper package](https://symfony.com/components/VarDumper) and thus it also provides a dump() function.

To dump post objects your can use the extra dp() and dpd() functions.

To prevent any unintended output in production sites the provided functions only return output when WP_DEBUG is set to true in your wp-config.php file.

NOTE: If you use any of the provided functions and deactivate/remove the plugin a fatal error will occur.

### Examples:

```php
<?php 
// Dump a single variable.
d($some_var);

// The d() and dd() functions except multiple varialbes.
d($some_var, $som_other_var);

// Dump a variable and die.
dd($some_var);

// Dump a variable using the dump function from var-dumper.
dump($some_var);

// Dump the current post object with meta values.
dp();

// Dump a post object by reference with meta values.
dp($post);

// Dump the post object with id 1 including meta values.
dp(1);

// Dump the current post object with meta values and die.
dpd(); 
?>
```

<br/><br/>
## Installation
1. Download Dumpr from this repository.
2. Upload Dumpr files to the `/wp-content/plugins/dumpr` directory.
3. Activate Dumpr from your Plugins page.
4. Enable debugging in your wp-config.php file. define( 'WP_DEBUG', true );
5. Use the functions in your theme's code.


<br/><br/>
## Frequently Asked Questions

= the functions don't return any output =

In order for these function to generate any output you have to enable debugging in your config.php file.

<br/><br/>
## Bugs
If you find any bugs with this plugin please [open a issue](https://github.com/vanaf1979/dumpr/issues/new).


<br/><br/>
## Contributing
This repository uses GitFlow.
1. Fork this repository and create a new branche starting from the develop branch.
2. Make your changes.
3. Issue a pull request back into the develop branch.