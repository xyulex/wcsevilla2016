<?php
/**
 * Plugin Name: WordCamp Sevilla 2016
 * Description: Incluye una imagen aleatoria antes de cada post.
 * Text Domain: wcsevilla2016
 * Version:     1.0
 * Author:      Raúl Martínez
 * Author URI:  https://profiles.wordpress.org/xyulex/
 * License:     GPLv2 or later
 * License URI:	http://www.gnu.org/licenses/gpl-2.0.html
 */

add_filter( 'the_content', 'imagen_destacada_random' );
wp_enqueue_style( 'wordcamp-css', plugins_url( '/css/style.css', __FILE__ ) );
wp_enqueue_script( 'jquery' );
wp_enqueue_script( 'wordcamp-js', plugins_url('/js/functions.js', __FILE__) );


function imagen_destacada_random($content) {
    $imagenesDir = __DIR__.'/img/';
    $imagenURL = plugins_url('/img/', __FILE__);
    $imagenesTotales = glob($imagenesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    $aleatorio = explode('/', $imagenesTotales[array_rand($imagenesTotales)]);
    $imagenAleatoria = end($aleatorio);
    return "<img src='" . $imagenURL.$imagenAleatoria . "' width='200' class='wcsevilla'>" . $content;
}