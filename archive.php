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
				<?php if (have_posts()) : ?>

		 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

					<?php /* If this is a category archive */ if (is_category()) { ?>
						<h1 class="title subtitle--color-2 title--type-2 title--type-4">Arquivos para a categoria <?php single_cat_title(); ?></h1>

					<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
						<h1 class="title subtitle--color-2 title--type-2 title--type-4">Arquivos para a tag <?php single_tag_title(); ?></h1>

					<?php /* If this is an author archive */ } elseif (is_author()) { ?>
						<h1 class="title subtitle--color-2 title--type-2 title--type-4">Arquivos para o autor "<?php echo the_author_meta('display_name'); ?>"</h1>

					<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
						<h1 class="title subtitle--color-2 title--type-2 title--type-4"><?php _e('Blog Archives','html5reset'); ?></h1>

					<?php } ?>
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
									<a href="<?php echo get_permalink(); ?>" class="media-wrapper" aria-hidden="true" role="presentation" tabindex="-1">
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

		<?php else : ?>

			<h2><?php _e('Nothing Found','html5reset'); ?></h2>

		<?php endif; ?>

		</div>
	</div>

<?php get_template_part('sections/sponsors'); ?>
<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>