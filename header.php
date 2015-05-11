<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">

  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/devices/apple-touch-icon-iphone.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/devices/apple-touch-icon-ipad.png" />

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
