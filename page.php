<?php get_header(); ?>
<?php get_template_part('sections/navigation'); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<main id="main">
			<article <?php post_class() ?> id="page">

				<header class="page-header">
					<div class="content">
						<img class="header__logo" src="<?php asset_path('img/logos/braziljs.svg') ?>" alt="BrazilJS" />
						<div class="post-content-wrapper">
							<div class="center-elements">
								<h1 class="title subtitle--color-2 title--type-2 title--type-4"><?php the_title(); ?></h1>
							</div>
						</div>
					</div>
				</header>
				<div class="content">
					<div class="post-content-wrapper">
						<div class="post-entry post-entry--page">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</article>
		</main>

	<?php endwhile; endif; ?>
<?php get_template_part('sections/weekly-internal'); ?>
<?php get_template_part('sections/sponsors'); ?>
<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>