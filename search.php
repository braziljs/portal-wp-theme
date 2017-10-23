<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
<?php get_template_part('sections/navigation'); ?>
<?php get_template_part('sections/search-box'); ?>
	<?php if (have_posts()) : ?>
		<div class="page-header">
			<div class="content">
				<div class="center-elements">
					<h1 class="title subtitle--color-3 title--type-2">Resultado da sua busca por "<?php echo esc_html( get_search_query( false ) ); ?> ":</h1>
				</div>
				<ul>
					<?php while (have_posts()) : the_post(); ?>
						<?php
							$postThumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumb');
							if (empty($postThumb))  {
								$postThumb[0] = get_template_directory_uri().'/dev/img/thumb-generica-2.jpg';
							}
						?>
						<li class="col-4-12 article-list__item">
							<div class="card">
								<div class="card__header">
									<a href="<?php echo get_permalink(); ?>" class="media-wrapper">
										<img class="media-wrapper__thumb card__thumb" src="<?php echo $postThumb[0]; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" />
									</a>
								</div>
								<div class="card__content">
									<h2 class="card__title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
									<div class="card__paragraph">
										<?php the_excerpt(); ?>
									</div>
								</div>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
				<div class="center-elements row">
					<?php
						$args = array(
							'prev_next' => false,
							'type' => 'list',
							'before_page_number' => '<span class="visuallyhidden">Ir para a página </span>'
						);
					?>
					<?php echo paginate_links($args); ?>
				</div>
			</div>
		</div>

	<?php else : ?>
		<div class="page-header">
			<div class="content">
				<div class="center-elements">
					<h1 class="title subtitle--color-3 title--type-2">Sua busca por "<?php echo esc_html( get_search_query( false ) ); ?>" não retornou resultados. <br/> Por favor faça uma nova busca.</h1>
				</div>
				<div>
					<div class="center-elements--mobile">
						<h2 class="subtitle subtitle--color-3" id="related-links">Alguns artigos que podem interessar:</h2>
					</div>
					<?php

				       	$query = new WP_Query(array(
						    'posts_per_page'   => 3,
						    'orderby' => 'rand'
				        ));

					?>
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
										<a href="<?php the_permalink() ?>" class="media-wrapper">
											<img class="media-wrapper__thumb card__thumb" src="<?php echo $postThumb[0]; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" />
										</a>
									</div>
									<div class="card__content">
										<h2 class="card__title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
										<div class="card__paragraph">
											<?php the_excerpt(); ?>
										</div>
									</div>
								</div>
							</li>

				 		<?php endwhile; ?>
					</ul>
					<div class="center-elements">
						<a href="<?php bloginfo('url'); ?>/artigos" class="anchor-button">Confira todos os artigos</a>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
<?php get_template_part('sections/weekly-internal'); ?>
<?php get_template_part('sections/sponsors'); ?>
<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>