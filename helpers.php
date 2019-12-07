<?php
/**
 * Dumpr
 *
 * @package             Dumpr
 * @author              Stephan Nijman <vanaf1979@gmail.com>
 * @copyright           2019 Stephan Nijman
 * @license             GPL-2.0-or-later
 * @version             1.0.0
 * 
 * @uses Var-dumper https://github.com/symfony/var-dumper
 */


/**
 * d.
 *
 * Dump variable.
 * 
 * @uses Var-dumper https://github.com/symfony/var-dumper
 *
 * @return void
 */
if ( ! function_exists('d') && function_exists('dump') ) {
    function d( ...$vars ) : void {
        call_user_func_array( 'dump' , $vars );
    }
}


/**
 * dp.
 *
 * Dump the current post object with meta fields.
 * 
 * @uses Var-dumper https://github.com/symfony/var-dumper
 *
 * @return void
 */
if ( ! function_exists('dp') && function_exists('dump') ) {
    function dp( $post = null ) : void {
        
        if( ! $post ) {
            $post = get_post();
        } else if ( $post instanceof WP_Post ) {
            $post = $post;
        } else if( is_int( $post ) ) {
            $post = get_post( $post );
        } else {
            $post = array();
        }
        
        if( isset( $post->ID ) ) {
            $meta = get_post_meta( $post->ID );
        } else {
            $meta = array();
        }
        
        call_user_func_array( 'dump' , array( $post , $meta ) );

    }
}


/**
 * dpd.
 *
 * Dump the current post object with meta fields and die.
 * 
 * @uses Var-dumper https://github.com/symfony/var-dumper
 *
 * @return void
 */
if ( ! function_exists('dpd') && function_exists('dump') && function_exists('dp') ) {
    function dpd( $post = null ) : void {
        dp($post);
        die(1);
    }
}