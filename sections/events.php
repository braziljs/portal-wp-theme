<!-- HOME EVENTS -->
<?php
	//We need to reset the posts loop
	wp_reset_postdata();
	$today = date('Ymd');
    $args = array(
		'post_type' => 'eventos',
		'meta_key' => 'data',
		'orderby' => 'meta_value_num',
		'posts_per_page' => 2,
		'order' => 'ASC',
		'meta_query' => array (
			array (
				'key' => 'data',
				'compare' => '>=',
				'value' => $today
			)
		)
	);
    $wp_query = new WP_Query($args);

?>

<?php if (have_posts()): ?>
	<section class="section-wrapper">
		<div class="content">
			<div class="center-elements--mobile">
				<h2 class="title" id="latest-events-title">Próximos eventos</h2>
			</div>
			<ul class="calendar-list" aria-labelledby="latest-events-title">
				<?php $firstEvent = true; ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
						$eventDate = get_field('data');
						$eventMonth = date_i18n('F', strtotime($eventDate));
						$eventDay = date_i18n('d', strtotime($eventDate));
						$eventYear = date_i18n('Y', strtotime($eventDate));

						//Get the time diference
						$today =  date_create(date('Ymd'));
						$interval = date_diff($today, date_create($eventDate));
						$daysDifferece = $interval->days;

						//Get the days diference label
						$timeCount = '';

						if ($daysDifferece == 7) {
							$timeCount = 'Falta uma semana';
						} elseif ($daysDifferece > 1 && $daysDifferece < 7) {
							$timeCount = 'Faltam '.$daysDifferece.' dias';
						} elseif ($daysDifferece === 1) {
							$timeCount = 'Falta um dia!';
						} elseif ($daysDifferece === 0) {
							$timeCount = 'É Hoje!';
						}

						//Get the column count for the second event
						$columnCount = $firstEvent ? 'col-7-12' : 'col-5-12';

						// Image links and ALT
						$imageLink = $firstEvent ? wp_get_attachment_image_src(get_post_thumbnail_id(), 'event-thumb') : wp_get_attachment_image_src(get_post_thumbnail_id(), 'event-thumb-small');
						$imageAlt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);

					?>

					<li class="<?php echo $columnCount; ?>">
						<div class="card card--type-2">
							<div class="card__header">
								<a href="<?php the_permalink() ?>" class="media-wrapper" aria-hidden="true" role="presentation" tabindex="-1">
									<img class="card__thumb" src="<?php echo $imageLink[0]; ?>" alt="<?php echo $imageAlt ?>" />
								</a>
								<?php if ($timeCount): ?>
									<strong class="card__ribbon"><span class="card__ribbon-text"><?php echo $timeCount ?></span></strong>
								<?php endif; ?>
							</div>
							<div class="card__content">
								<span class="card__label"><?php echo $eventDay; ?> de <?php echo $eventMonth; ?> <?php echo $eventYear; ?></span>
								<h3 class="card__title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
								<div class="card__paragraph"><?php the_content() ?></div>
							</div>
						</div>
					</li>

					<?php $firstEvent = false; ?>

				<?php endwhile; ?>
			</ul>
			<div class="row center-elements">
				<a href="<?php bloginfo('url'); ?>/eventos-parceiros" class="anchor-button">Veja todos os eventos parceiros</a>
			</div>
		</div>
	</section>
<?php endif; ?>

<!-- END HOME EVENTS -->