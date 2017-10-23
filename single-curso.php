<?php get_header(); ?>
<?php get_template_part('sections/navigation'); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php
			$eventDate = get_field('data');
			$eventMonth = date_i18n('F', strtotime($eventDate));
			$eventDay = date_i18n('d', strtotime($eventDate));
			$eventYear = date_i18n('Y', strtotime($eventDate));
		?>
	<main id="main" itemscope itemtype="http://schema.org/NewsArticle">
		<article <?php post_class() ?> id="article" data-article-id="<?php the_ID(); ?>" data-article-title="<?php the_title(); ?>" data-article-url="<?php the_permalink(); ?>">
			<header class="post-header">
				<div class="content">
					<img class="header__logo" src="<?php asset_path('img/logos/braziljs.svg') ?>" alt="BrazilJS" />
					<div class="post-content-wrapper center-elements--mobile">
						<h1 class="title title--type-4 p-name" itemprop="headline"><?php the_title(); ?></h1>
						<div class="header__meta">
							<div class="header__meta-author">
								<span>Onde:</span>
								<span class="header__meta-author-anchor"><?php echo the_field('onde'); ?></span>
							</div>
							<div class="header__meta-author">
								<span>Quando:</span>
								<span class="header__meta-author-anchor"><?php echo $eventDay; ?> de <?php echo $eventMonth; ?> <?php echo $eventYear; ?></span>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="content">
				<div class="post-content-wrapper">
					<div class="post-entry">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</article>
	</main>
	<?php $ticker = get_field('ticker_habilitado', 'option'); ?>
	<?php if($ticker): ?>
		<div class="section-wrapper">
			<div class="content">
				<?php get_template_part('sections/ticker'); ?>
			</div>
		</div>
	<?php endif; ?>

	<?php
		//Gets the first 3 posts from the blog and exclude the current one
		$postid = array(get_the_ID());
		wp_reset_postdata();
		$today = date('Ymd');
       	$query = new WP_Query(array(
		    'posts_per_page'   => 3,
		    'post_type' => 'curso',
		    'meta_query' => array (
				array (
					'key' => 'data',
					'compare' => '>=',
					'value' => $today
				)
			),
		    'orderby' => 'rand',
		    'post__not_in' => $postid
        ));

	?>

	<?php if ($query->have_posts()): ?>
		<section class="section-wrapper">
			<div class="content">
				<div class="center-elements--mobile">
					<h2 class="title" id="related-links">Outros cursos</h2>
				</div>

				<ul aria-labelledby="related-links" class="pattern-list clearfix">
					<?php while ($query->have_posts()): $query->the_post(); ?>
						<?php
							$postThumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumb');
							if (empty($postThumb))  {
								$postThumb[0] = get_template_directory_uri().'/dev/img/thumb-generica-2.jpg';
							}
						?>
						<li class="col-4-12">
							<div class="card">
								<div class="card__header">
									<a href="<?php the_permalink() ?>" class="media-wrapper" aria-hidden="true" role="presentation" tabindex="-1">
										<img class="media-wrapper__thumb card__thumb" src="<?php echo $postThumb[0]; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" />
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
									<div class="card__paragraph">
										<?php the_excerpt(); ?>
									</div>
								</div>
							</div>
						</li>

			 		<?php endwhile; ?>
				</ul>
				<div class="center-elements">
					<a href="<?php bloginfo('url'); ?>/cursos" class="anchor-button">Confira todos os cursos</a>
				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endwhile; endif; ?>
<?php get_template_part('sections/weekly-internal'); ?>
<?php get_template_part('sections/sponsors'); ?>
<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>