<?php
/*
Template Name: Eventos
*/
?>
<?php get_header(); ?>
<?php get_template_part('sections/navigation'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<header class="page-header">
				<div class="content">
					<img class="header__logo" src="<?php asset_path('img/logos/braziljs.svg') ?>" alt="BrazilJS" />
					<div class="post-content-wrapper">
						<div class="center-elements">
							<h1 id="latest-events-title" class="title subtitle--color-2 title--type-2 title--type-4"><?php the_title(); ?></h1>
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
		</div>
<?php endwhile; endif; ?>

<?php $ticker = get_field('ticker_habilitado', 'option'); ?>
<?php if($ticker): ?>
	<div class="section-wrapper top">
		<div class="content">
			<?php get_template_part('sections/ticker'); ?>
		</div>
	</div>
<?php endif; ?>



<?php
	$args = array(
		'post_type' => 'eventos',
		'meta_key' => 'data',
		'orderby' => 'meta_value_num',
		'posts_per_page' => -1,
		'order' => 'ASC'
	);
    $wp_query = new WP_Query($args);
 ?>
 <?php if (have_posts()): ?>
	<main class="section-wrapper" id="main">
		<div class="content">
			<div class="post-content-wrapper">
				<ul class="calendar-list center-elements--mobile" aria-labelledby="latest-events-title">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
							$eventDate = get_field('data');
							$eventMonth = date_i18n('F', strtotime($eventDate));
							$eventDay = date_i18n('d', strtotime($eventDate));
							$eventYear = date_i18n('Y', strtotime($eventDate));

							// Image links and ALT
							$imageLink = wp_get_attachment_image_src(get_post_thumbnail_id(), 'event-thumb-small');
							$imageAlt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);

						?>

						<li class="col-5-12 calendar-list__item">
							<div class="card card--type-2">
								<div class="card__header">
									<a href="<?php the_permalink() ?>" class="media-wrapper" aria-hidden="true" role="presentation" tabindex="-1">
										<img class="card__thumb" src="<?php echo $imageLink[0]; ?>" alt="<?php echo $imageAlt ?>" />
									</a>
								</div>
								<div class="card__content">
									<span class="card__label"><?php echo $eventDay; ?> de <?php echo $eventMonth; ?> <?php echo $eventYear; ?></span>
									<h2 class="card__title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
									<div class="card__paragraph"><?php the_content() ?></div>
								</div>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</main>
<?php endif; ?>
<?php get_template_part('sections/weekly-internal'); ?>
<?php get_template_part('sections/sponsors'); ?>
<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>