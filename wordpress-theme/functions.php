<?php
/**
 * Portfolio Theme Functions
 */

function portfolio_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style('google-fonts-preconnect-1', 'https://fonts.googleapis.com', array(), null);
    wp_enqueue_style('google-fonts-preconnect-2', 'https://fonts.gstatic.com', array(), null);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap', array(), null);
    
    // Main Theme Style
    wp_enqueue_style('portfolio-style', get_stylesheet_uri(), array(), '1.0');
    
    // SEO Works Custom Style (Loads on the SEO page or template)
    if (is_page('seo-works-and-wins') || is_page_template('page-seo-works-and-wins.php') || file_exists(get_template_directory() . '/seo-style.css')) {
        wp_enqueue_style('seo-style', get_template_directory_uri() . '/seo-style.css', array('portfolio-style'), '1.0');
    }

    // Main Script
    wp_enqueue_script('portfolio-script', get_template_directory_uri() . '/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_assets');