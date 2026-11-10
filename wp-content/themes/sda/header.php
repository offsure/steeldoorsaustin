<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<meta name="google-site-verification" content="H7X5S4mWzpHxyfr58fLNNCjMOXfgLlg2ot0jTnMVh6w" />
	<meta name="p:domain_verify" content="afeaa921ee294af392411ae6cec58b67"/>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PC49LMGZ');</script>
<!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-transparent">
  <div class="container">

    <!-- Logo / Site Title -->
    <?php if ( has_custom_logo() ) : ?>
      <?php the_custom_logo(); ?>
    <?php else : ?>
      <a class="navbar-brand fw-semibold" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php bloginfo( 'name' ); ?>
      </a>
    <?php endif; ?>

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" 
      aria-controls="nav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'yourtheme' ); ?>">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Nav Center + Button Right -->
    <div class="collapse navbar-collapse" id="nav">
      <!-- Center Nav -->
      <?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-3',
          'fallback_cb'    => false,
        ) );
      ?>

      <!-- Right Button -->
      <div class="d-flex">
        <a class="btn btn-danger" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">
          <?php _e( 'Get a Free Quote', 'yourtheme' ); ?>
        </a>
      </div>
    </div>
  </div>
</nav>

