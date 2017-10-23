<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
<?php get_template_part('sections/navigation'); ?>
<?php get_template_part('sections/search-box'); ?>

		<div class="page-header">
			<div class="content">
				<div class="center-elements">
					<h1 class="title subtitle--color-3 title--type-2">Opa! Aqui não tem nada não :) Aproveita e confere alguns de nossos artigos!</h1>
				</div>
				<div>
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
										<a href="<?php the_permalink() ?>" class="media-wrapper" aria-hidden="true" role="presentation" tabindex="-1">
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
<?php get_template_part('sections/weekly-internal'); ?>
<?php get_template_part('sections/sponsors'); ?>
<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>