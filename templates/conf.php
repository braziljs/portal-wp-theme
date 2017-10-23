<?php
/*
Template Name: Conf
*/
?>
<?php get_header(); ?>
<?php get_template_part('sections/navigation'); ?>
<div id="js-conf-page" class="conf-wrapper">
	<div class="content">
		<img class="header__logo" src="<?php asset_path('img/logos/braziljs.svg') ?>" alt="BrazilJS" />
	</div>
	<main id="main">
		<div class="center-elements conf__header">
			<span class="conf__slogan">7ª Edição</span>
			<h1 class="title title--type-2 title--size-2 title--color-2">BrazilJS Conf 2017</h1>
		</div>
		<div class="conf-container">
			<div class="conf-container__event conf-container__event--poa">
				<h2 class="conf-container__title">Porto Alegre</h2>
				<strong class="conf-container__date">25 e 26 de agosto</strong>
				<a href="https://eventloop.com.br/braziljs-conf-2017-poa" class="anchor-button anchor-button--size-2 anchor-button--color-5 conf-container__date">Comprar o ingresso <span class="visuallyhidden">para a edição Porto Alegre</span>!</a>
			</div>
			<div class="conf-container__event conf-container__event--recife">
				<h2 class="conf-container__title">Fortaleza</h2>
				<strong class="conf-container__date">01 e 02 de setembro</strong>
				<a href="https://eventloop.com.br/braziljs-conf-2017-fortaleza" class="anchor-button anchor-button--size-2 anchor-button--color-5 conf-container__date">Comprar o ingresso <span class="visuallyhidden">para a edição Fortaleza</span>!</a>
			</div>
		</div>
	</main>
</div>
<?php get_template_part('sections/conf/speakers-list'); ?>
<?php get_template_part('sections/conf/schedule'); ?>
<?php get_template_part('sections/conf/hotels'); ?>
<?php get_template_part('sections/sponsors'); ?>
<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>