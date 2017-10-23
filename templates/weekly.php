<?php
/*
Template Name: Weekly
*/
?>
<?php get_header(); ?>
<?php get_template_part('sections/navigation'); ?>
<?php get_template_part('sections/search-box'); ?>
<?php $paginationNumber = get_query_var('paged'); ?>


	<div class="section-wrapper article-list-wrapper">
		<div class="content">
			<div class="center-elements">
				<h1 class="title subtitle--color-3 title--type-2"><?php the_title(); ?> </h1>
			</div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post-entry post-entry--page center-elements">
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>
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
			    		'tag__in' => $tag->term_id
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
	<?php get_template_part('sections/weekly-internal'); ?>
</div>
<?php get_template_part('sections/sponsors'); ?>
<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>