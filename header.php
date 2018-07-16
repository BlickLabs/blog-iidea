<?php
  /**
  * The header for our theme.
  *
  * Displays all of the <head> section and everything up till <div id="content">
  *
  * @package storefront
  */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/header.css' ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/footer.css' ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
  <?php do_action( 'storefront_before_header' ); ?>

  <header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
    <div class="col-full">
      <nav class="site-navbar nav-blue-bg">
        <div class="site-navbar__desktop-logo-container">
          <a href="http://iidea.org.mx/iideahome/index.html">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logos/logo.svg' ?>" alt="Logo">
          </a> 
        </div>
        <div class="site-navbar__menu-trigger">
          <span class="fa fa-bars"></span>
        </div>
        <div class="site-navbar__menu-container">
          <div class="site-navbar__mobile-logo-container">
            <a href="http://iidea.org.mx/iideahome/index.html">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/logos/logo.svg' ?>" alt="Logo">
            </a> 
            <a href="">
              <img id="navbar-close" src="<?php echo get_template_directory_uri() . '/assets/images/icons/navbar-close.png' ?>" alt="Close">
            </a>
          </div>
          <div class="site-navbar__menu">
            <a href="http://iidea.org.mx/iideahome/index.html" class="site-navbar__menu-link iide-firasans-bold">Inicio</a>

            <a href="http://iidea.org.mx/iideahome/sectores.html" class="site-navbar__menu-link iidea-firasans-medium">Cursos</a>

            <a href="http://iidea.org.mx/iideahome/nosotros.html" class="site-navbar__menu-link iidea-firasans-medium">Nosotros</a>
            <!--
            <a href="profesores.html" class="site-navbar__menu-link  iidea-firasans-medium ">Profesores</a>
            -->
            <a href="http://iidea.org.mx/iideahome/aliados.html" class="site-navbar__menu-link iidea-firasans-medium">Aliados</a>

            <a href="http://iidea.org.mx/iideahome/contacto.html" class="site-navbar__menu-link iidea-firasans-medium">Contacto</a>

            <a href="http://iidea.org.mx/shop/" class="site-navbar__menu-link active iidea-firasans-medium ">Tienda</a>
          </div>
          <?php
            /**
            * Functions hooked into storefront_header action
            *
            * @hooked storefront_skip_links                       - 0
            * @hooked storefront_social_icons                     - 10
            * @hooked storefront_site_branding                    - 20
            * @hooked storefront_secondary_navigation             - 30
            * @hooked storefront_product_search                   - 40
            * @hooked storefront_primary_navigation_wrapper       - 42
            * @hooked storefront_primary_navigation               - 50
            * @hooked storefront_header_cart                      - 60
            * @hooked storefront_primary_navigation_wrapper_close - 68
            */
          do_action( 'storefront_header' ); ?>
        </div>
      </nav>

    </div>
  </header><!-- #masthead -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript">
  (function () {
    var mobile = window.matchMedia('(max-width: 1050px)'); // Change

    function detectTouch(e) {
      if (!$(e.target).is('.site-navbar__menu-trigger') && !$(e.target).is('.site-navbar__menu-container') && !$(e.target).closest('.site-navbar__menu-container').length && $('.site-navbar__menu-container').hasClass('site-navbar__menu-container--show-menu')) {
        e.preventDefault();
        $('.site-navbar__menu-container').removeClass('site-navbar__menu-container--show-menu');
        $('body').removeClass('noscroll');
      }
    }

    function detectClick() {
      if ($('.site-navbar__menu-container').hasClass('site-navbar__menu-container--show-menu')) {
        $('.site-navbar__menu-container').removeClass('site-navbar__menu-container--show-menu');
        $('body').removeClass('noscroll');
      } else {
        $('.site-navbar__menu-container').addClass('site-navbar__menu-container--show-menu');
        $('body').addClass('noscroll');
      }
    }

    if (mobile.matches) {
      $('body')[0].addEventListener('touchstart', detectTouch, {passive: false});
      $('.site-navbar__menu-trigger').click(detectClick);
    } else {
      $('body')[0].removeEventListener('touchstart', detectTouch, {passive: false});
      $('.site-navbar__menu-trigger').off('click');
      $('body').removeClass('noscroll');
    }

    $(window).resize(function () {
      $('body')[0].removeEventListener('touchmove', detectTouch, {passive: false});
      $('.site-navbar__menu-trigger').off('click');
      $('body').removeClass('noscroll');
      $('.site-navbar__menu-container').removeClass('show-menu');

      if (mobile.matches) {
        $('body')[0].addEventListener('touchmove', detectTouch, {passive: false});
        $('.site-navbar__menu-trigger').click(detectClick);
      }
    });

    // Action for close navBar
    $('#navbar-close').on('click touchstart', function(e) {
      e.preventDefault();
      $('.site-navbar__menu-container').removeClass('site-navbar__menu-container--show-menu');
      $('body').removeClass('noscroll');
    });

    // Delete border-bottom of the previous element, the active element.
    var $itemActive = $('.site-navbar__menu-link.active');
    if ($itemActive) {
      var $prev = $itemActive.prev();
      $prev.css('border-bottom', 'none');
    }
  })();
</script>

  <?php
  /**
   * Functions hooked in to storefront_before_content
   *
   * @hooked storefront_header_widget_region - 10
   */
  do_action( 'storefront_before_content' ); ?>

  <div id="content" class="site-content" tabindex="-1">
    <div class="col-full">

    <?php
    /**
    * Functions hooked in to storefront_content_top
    *
    * @hooked woocommerce_breadcrumb - 10
    */
    do_action( 'storefront_content_top' );
