<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package filmscene
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, user-scalable=no">
    <title><?php wp_title( '|', true, 'right' ); ?>Rausch Productions</title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
    <?php wp_head(); ?>
    <script src="//use.typekit.net/mhx0ocv.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  </head>

  <body>

    <header class="global-header push-menu-right">
      <a href="/FS-REBOOT/wordpress" class="logotype"></a>
      
      <nav class="nav-primary">
        <ul>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">LED Technology</a></li>
          <li><a href="#">Team</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>

    </header>

    <button type="button" role="button" class="lines-button toggle-push-right"><span class="lines"></span></button>

   <main>