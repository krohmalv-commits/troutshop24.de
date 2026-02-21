<?php
/**
 * Header
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/LocalBusiness">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="ecwid_product_browser_scroller"></div>

<div id="page-wrapper">
  <header id="site-header" role="banner">
    <nav id="site-nav" role="navigation" aria-label="Primary Navigation">

      <ul id="mobile-nav">
        <li>
          <a href="#" id="mobile-nav-trigger" aria-expanded="false" aria-controls="nav-overlay">Menu</a>
          <ul class="subnav" aria-label="Mobile submenu">
            <li><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-home" title="Home">Home</a></li>
            <li><a href="<?php echo esc_url(home_url('/shop')); ?>">Shop</a></li>
            <li><a href="<?php echo esc_url(home_url('/blog/latest-articles')); ?>">Latest News</a></li>
            <li><a href="<?php echo esc_url(home_url('/articles')); ?>">Articles</a></li>
            <li><a href="<?php echo esc_url(home_url('/shipping-and-returns')); ?>">Shipping &amp; Returns</a></li>
            <li><a href="<?php echo esc_url(home_url('/about')); ?>">Rechtliches</a></li>
            <li><a href="<?php echo esc_url(home_url('/retailers')); ?>">Retailers</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Kontakt</a></li>
          </ul>
        </li>
      </ul>

      <ul id="main-nav">
        <li>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-home" title="Home" aria-label="Home">
            <span class="icon-squid" aria-hidden="true"></span>
          </a>
        </li>

        <li><a href="<?php echo esc_url(home_url('/shop')); ?>">Shop</a></li>

        <li>
          <a href="#" class="subnav-toggle" aria-expanded="false">News</a>
          <ul class="subnav" aria-label="News submenu">
            <li><a href="<?php echo esc_url(home_url('/blog/latest-articles')); ?>">Latest News</a></li>
            <li><a href="<?php echo esc_url(home_url('/articles')); ?>">Articles</a></li>
            <li><a href="https://communityminiaturesproject.com/" target="_blank" rel="noopener">Community Minis</a></li>
          </ul>
        </li>

        <li>
          <a href="#" class="subnav-toggle" aria-expanded="false">About</a>
          <ul class="subnav" aria-label="About submenu">
            <li><a href="<?php echo esc_url(home_url('/about')); ?>">About Bad Squiddo Games</a></li>
            <li><a href="<?php echo esc_url(home_url('/shipping-and-returns')); ?>">Shipping &amp; Returns</a></li>
            <li><a href="<?php echo esc_url(home_url('/retailers')); ?>">Retailers</a></li>
          </ul>
        </li>

        <li><a href="<?php echo esc_url(home_url('/events')); ?>">Events</a></li>
        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
      </ul>

      <ul id="right-nav" class="hidden-xs" aria-label="Social links">
        <li><a href="https://bsky.app/profile/badsquiddogames.bsky.social" title="Bluesky" target="_blank" rel="noopener"><span class="icon-bluesky" aria-hidden="true"></span></a></li>
        <li><a href="https://www.facebook.com/TheDiceBagLady/" title="Facebook" target="_blank" rel="noopener"><span class="icon-facebook" aria-hidden="true"></span></a></li>
        <li><a href="https://www.youtube.com/channel/UCg9FbveRbyvs7y23sMafqtQ" title="Youtube" target="_blank" rel="noopener"><span class="icon-youtube" aria-hidden="true"></span></a></li>
        <li><a href="https://www.instagram.com/badsquiddogames/" title="Instagram" target="_blank" rel="noopener"><span class="icon-instagram" aria-hidden="true"></span></a></li>
      </ul>




    <span id="nav-overlay" aria-hidden="true"></span>

    <a href="<?php echo esc_url(home_url('/')); ?>" title="Home" class="header-logo-link" aria-label="Home">
      <img
        src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/logo-bad-squiddo.png'); ?>"
        class="header-logo"
        alt="Bad Squiddo Games"
        decoding="async"
      >
    </a>
  </header>

  <div id="content-wrapper" class="nav-blur">
