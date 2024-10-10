<?php
/*
Plugin Name: WooCommerce Add to Cart GIF Popup
Description: Displays a popup with a GIF when the "Add to Cart" button is clicked.
Version: 1.0
Author: Mohamed Naflan
*/


function wc_add_to_cart_gif_popup_enqueue_scripts() {
   
    wp_enqueue_script('jquery');

   
    wp_enqueue_script('wc-add-to-cart-gif-popup-js', plugin_dir_url(__FILE__) . 'js/wc-add-to-cart-gif-popup.js', array('jquery'), '1.0', true);

   
    wp_enqueue_style('wc-add-to-cart-gif-popup-css', plugin_dir_url(__FILE__) . 'css/wc-add-to-cart-gif-popup.css');
}
add_action('wp_enqueue_scripts', 'wc_add_to_cart_gif_popup_enqueue_scripts');


function wc_add_to_cart_gif_popup_html() {
    ?>
    <div id="gif-popup-modal" class="gif-popup-modal">
        <div class="gif-popup-content">
            <span class="gif-popup-close">&times;</span>
            <img src="https://media.tenor.com/m9Qn9PO13qMAAAAj/juicebox-banny.gif" alt="Add to Cart GIF">
        </div>
    </div>
    <?php
}
add_action('wp_footer', 'wc_add_to_cart_gif_popup_html');
