<?php get_header(); ?>
<?php get_template_part('sections/navigation'); ?>
<?php get_template_part('sections/header'); ?>
<main class="section-wrapper" id="main">
	<div class="content">
		<?php get_template_part('sections/latest-news'); ?>
		<?php get_template_part('sections/ticker'); ?>
	</div>
</main>
<?php get_template_part('sections/weekly'); ?>
<?php get_template_part('sections/events'); ?>
<?php get_template_part('sections/courses'); ?>
<?php get_template_part('sections/home-videos'); ?>
<section class="section-wrapper">
	<div class="content">
		<div class="center-elements"><h2 class="title title--type-2">Conheça as nossas iniciativas</h2></div>
		<?php get_template_part('sections/home-products'); ?>
	</div>
</section>
<?php get_template_part('sections/sponsors'); ?>
<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>