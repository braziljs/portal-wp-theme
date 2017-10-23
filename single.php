<?php get_header(); ?>
<?php get_template_part('sections/navigation'); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<main id="main" itemscope itemtype="http://schema.org/NewsArticle">
		<article <?php post_class() ?> id="article" data-article-id="<?php the_ID(); ?>" data-article-title="<?php the_title(); ?>" data-article-url="<?php the_permalink(); ?>">
			<header class="post-header">
				<div class="content">
					<img class="header__logo" src="<?php asset_path('img/logos/braziljs.svg') ?>" alt="BrazilJS" />
					<div class="post-content-wrapper center-elements--mobile">
						<h1 class="title title--type-4 p-name" itemprop="headline"><?php the_title(); ?></h1>
						<div class="header__meta">
							<div class="header__meta-author">
								<span>Por:</span>
								<span class="header__meta-author-anchor"><?php the_author_posts_link(); ?></span>
							</div>
							<time class="post__time dt-published" datetime="<?php echo date(DATE_W3C); ?>" itemprop="datePublished"><?php the_time(get_option('date_format')) ?></time>
							<div class="post-categories-wrapper p-category">Em:  <?php the_category(); ?></div>
						</div>
					</div>
				</div>
			</header>
			<div class="content">
				<div class="post-content-wrapper">
					<div class="post-entry">
						<?php the_content(); ?>
					</div>
					<footer class="row">
						<div class="tags-list-wrapper"><span class="tags-list__title">Tags:</span> <?php the_tags('<ul class="tags-list"><li class="tags-list__item">', '</li><li class="tags-list__item">', '</li></ul>'); ?></div>
						<ul class="post-share">
							<li class="post-share__item">
								<a href="#disqus" class="post-share__anchor post-share__anchor--comments"><img class="post-share__icon" src="<?php asset_path('/img/social-networks/icon-comments.svg') ?>" alt="">Comentar</a>
							</li>
							<li class="post-share__item">
								<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" rel="external" class="post-share__anchor post-share__anchor--share"><img class="post-share__icon" src="<?php asset_path('/img/social-networks/icon-facebook--white.svg') ?>" alt="" />Compartilhar <span class="visuallyhidden">no Facebook (abre em nova janela)</span></a>
							</li>
							<li class="post-share__item">
								<a href="https://twitter.com/share?via=BrazilJS&amp;text=<?php echo rawurlencode(get_the_title()); ?>&amp;url=<?php the_permalink(); ?>" class="post-share__anchor post-share__anchor--tweet" target="_blank" rel="external"><img class="post-share__icon" src="<?php asset_path('/img/social-networks/icon-twitter--white.svg') ?>" alt="" />Twittar <span class="visuallyhidden"> em nova janela</span></a>
							</li>
						</ul>
						<div class="author-container h-card p-author" itemscope itemtype="https://schema.org/Person">
							<figure class="author-container__thumb u-photo" itemprop="image">
								<?php echo get_avatar(get_the_author_meta('email'), 80); ?>
							</figure>
							<div class="author-container__info-container" itemprop="author">
								<h3 itemprop="name" class="author-container__name subtitle subtitle--type-2 subtitle--color-3 p-name"><?php echo the_author_meta('display_name'); ?></h3>
								<p class="author-container__description paragraph paragraph--color-3"><?php echo the_author_meta('description'); ?></p>
								<a href="<?php echo the_author_meta('user_url'); ?>" class="anchor u-url" itemprop="url"><?php echo the_author_meta('user_url'); ?></a>
							</div>
						</div>
					</footer>
				</div>
			</div>
		</article>
	</main>
	<div class="section-wrapper--type-5">
		<div class="content">
			<div class="post-content-wrapper" id="disqus">
        		<div id="disqus_thread"></div>
			</div>
		</div>
	</div>
	<?php $ticker = get_field('ticker_habilitado', 'option'); ?>
	<?php if($ticker): ?>
		<div class="section-wrapper">
			<div class="content">
				<?php get_template_part('sections/ticker'); ?>
			</div>
		</div>
	<?php endif; ?>
	<section class="section-wrapper">
		<div class="content">
			<div class="center-elements--mobile">
				<h2 class="title" id="related-links">Leia também</h2>
			</div>
			<?php
				//Gets the first 3 posts from the blog and exclude the current one
				$postid = array(get_the_ID());
		       	$query = new WP_Query(array(
				    'posts_per_page'   => 3,
				    'orderby' => 'rand',
				    'post__not_in' => $postid
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
				<a href="<?php bloginfo('url'); ?>/blog" class="anchor-button">Confira todos os artigos</a>
			</div>
		</div>
	</section>
	<?php endwhile; endif; ?>
<?php get_template_part('sections/weekly-internal'); ?>
<?php get_template_part('sections/sponsors'); ?>
<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>