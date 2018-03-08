<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<?php
		if (is_search())
			echo '<meta name="robots" content="noindex, nofollow" />';
	?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

	<link rel="dns-prefetch" href="//www.google-analytics.com">
	<link href='https://fonts.gstatic.com' rel='preconnect' crossorigin>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,400i,700,900i%7CLora:400,400i,700i' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php asset_path('css/main.css') ?>" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">

	<?php if (is_home()) { ?>
		<meta property="og:image" content="<?php asset_path('img/social-networks/braziljs.jpg') ?>" />
	<?php } ?>

	<?php wp_head(); ?>

</head>

<body id="js-body" class="body">
<div class="full-wrapper">
	<!-- SKIP LINKS -->
	<ul class="skip-links" id="js-skip-links">
		<li class="skip-links__item"><a class="visuallyhidden skip-links__anchor" href="#js-navigation">Ir para o menu do site</a></li>
		<li class="skip-links__item"><a class="visuallyhidden skip-links__anchor" href="#main">Ir para o conteúdo do site</a></li>
	</ul>
	<!-- END SKIP LINKS -->