<section>
	<div class="center-elements--mobile">
		<h2 class="title">Últimos artigos</h2>
	</div>
	<?php
	    //We dont't want the tag "weekly" to appear in the list
	    $tag = get_term_by('name', 'weekly', 'post_tag');
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 7,
			'order' => 'DESC',
			'tag__not_in' => $tag->term_id
		);
	    $wp_query = new WP_Query($args);
	?>
	<?php $firstItem = true; ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php if ($firstItem): ?>
			<?php $imageLink = wp_get_attachment_image_src(get_post_thumbnail_id(), 'highlight-thumb'); ?>
			<div class="highlight">
				<div class="highlight__thumb-container col-8-12">
					<a href="<?php the_permalink() ?>" class="col-8-12 media-wrapper" aria-hidden="true" role="presentation" tabindex="-1">
						<img src="<?php echo $imageLink[0]; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" />
					</a>
				</div>
				<div class="highlight__info col-4-12">
					<h3 class="highlight__title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<div class="paragraph">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
			<ul class="row card-wrapper">
		<?php $firstItem = false; ?>
		<?php else: ?>
			<?php $imageLink = wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumb'); ?>
			<li class="col-4-12 article-list__item">
				<div class="card">
					<div class="card__header">
						<a href="<?php the_permalink() ?>" class="media-wrapper" aria-hidden="true" role="presentation" tabindex="-1">
							<img class="media-wrapper__thumb card__thumb" src="<?php echo $imageLink[0]; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" />
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
		<?php endif; ?>
	<?php endwhile; ?>
	</ul>
	<div class="center-elements row">
		<a href="<?php bloginfo('url'); ?>/blog" class="anchor-button">Confira todos os artigos</a>
	</div>
</section>