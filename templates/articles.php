<?php
/*
Template Name: Artigos
*/
?>
<?php get_header(); ?>
<?php get_template_part('sections/navigation'); ?>
<?php get_template_part('sections/search-box'); ?>

	<?php $paginationNumber = get_query_var('paged'); ?>
	<?php if ($paginationNumber <= 0): ?>
		<div class="featured-wrapper">
			<div class="content">
				<h2 class="subtitle">Artigos Em Destaque</h2>
				<?php
				    //We need to store the articles highlight ids to not show them inside the post list
				    $postsID = array();

				    // Recover the "destaques" field and get the highlight list from it.
					$highlights = get_field('destaques', 'option');
					$highlightsList = $highlights[0][destaques_destaque];

					//If it's the first item, it's the main highlight layout.
					$firstItem = true;

				?>
					<?php foreach ($highlightsList as $highlight) { ?>

						<?php
							//The post information
							$postID = $highlight -> ID;
							$postsID[] = $postID;
							$postExcerpt = $highlight -> post_excerpt;
							$postTitle = $highlight -> post_title;
						?>
						<?php if ($firstItem): ?>
							<?php $postThumb = wp_get_attachment_image_src(get_post_thumbnail_id($postID), 'highlight-thumb'); ?>
							<div class="highlight">
								<div class="highlight__thumb-container col-8-12">
									<a href="<?php echo get_permalink($postID); ?>" class="col-8-12 media-wrapper" aria-hidden="true" role="presentation" tabindex="-1">
										<img src="<?php echo $postThumb[0]; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($postID), '_wp_attachment_image_alt', true); ?>" />
									</a>
								</div>
								<div class="highlight__info col-4-12">
									<h3 class="highlight__title highlight__title--color-2"><a href="<?php echo get_permalink($postID); ?>"><?php echo $postTitle; ?></a></h3>
									<div class="paragraph paragraph--color-2">
										<?php echo $postExcerpt; ?>
									</div>
								</div>
							</div>
							<ul class="row card-wrapper">
						<?php $firstItem = false; ?>
						<?php else: ?>
							<?php $postThumb = wp_get_attachment_image_src(get_post_thumbnail_id($postID), 'post-thumb'); ?>
							<li class="col-4-12">
								<div class="card">
									<div class="card__header">
										<a href="<?php echo get_permalink($postID); ?>" class="media-wrapper" aria-hidden="true" role="presentation" tabindex="-1">
											<img class="media-wrapper__thumb card__thumb" src="<?php echo $postThumb[0]; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($postID), '_wp_attachment_image_alt', true); ?>" />
										</a>
									</div>
									<div class="card__content card__content--list">
										<h3 class="card__title"><a href="<?php echo get_permalink($postID); ?>"><?php echo $postTitle; ?></a></h3>
										<div class="card__paragraph">
											<?php echo $postExcerpt; ?>
										</div>
									</div>
								</div>
							</li>
						<?php endif; ?>

					<?php } ?>
			</div>

	<?php endif ?>

	</div>
	<div class="section-wrapper article-list-wrapper">
		<div class="content">
			<h2 class="subtitle subtitle--color-3">Últimos artigos</h2>
			<ul class="article-list">
				<?php
				    //Variable that holds the pagination for the query
				    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				    //We dont't want the tag "weekly" to appear in the list
				    $tag = get_term_by('name', 'weekly', 'post_tag');
				    $args = array(
			    		'post_type' => 'post',
			    		'posts_per_page' => 9,
			    		'paged' => $paged,
			    		'post__not_in' => $postsID,
			    		'tag__not_in' => $tag->term_id
			    		);
				    $wp_query = new WP_Query($args);

				?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
						$postThumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumb');
						if (empty($postThumb))  {
							$postThumb[0] = get_template_directory_uri().'/dev/img/thumb-generica-2.jpg';
						}
					?>
					<li class="col-4-12 article-list__item">
						<div class="card">
							<div class="card__header">
								<a href="<?php echo get_permalink(); ?>" class="media-wrapper" aria-hidden="true" role="presentation" tabindex="-1">
									<img class="media-wrapper__thumb card__thumb" src="<?php echo $postThumb[0]; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" />
								</a>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
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
<div class="weekly-wrapper-articles">
	<?php get_template_part('sections/weekly'); ?>
</div>
<?php get_template_part('sections/sponsors'); ?>
<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>