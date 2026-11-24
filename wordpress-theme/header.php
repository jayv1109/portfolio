<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <!-- NAVIGATION -->
  <header class="header">
    <nav class="navbar container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
        JR<span>.</span>
      </a>

      <button class="menu-toggle" id="menuToggle" aria-label="Open navigation">
        ☰
      </button>

      <ul class="nav-links" id="navLinks">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">About</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#experience' ) ); ?>">Experience</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Services</a></li>
        <li><a href="<?php echo esc_url( home_url( '/seo-works/' ) ); ?>">SEO Works</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Contact</a></li>
      </ul>
    </nav>
  </header>
