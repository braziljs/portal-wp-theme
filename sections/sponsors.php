<section class="section-wrapper--type-3">
	<div class="content">
		<div class="center-elements">
			<h2 class="title title--type-2">Patrocinadores BrazilJS</h2>
			<p class="sponsor-list__paragraph paragraph paragraph--font-2 paragraph--size-2 paragraph--color-3">Quem torna o projeto BrazilJS possível são as empresas que apoiam, investem e acreditam em nossas ideias. <br/> Quer fazer parte dessa iniciativa? <a class="anchor" href="<?php bloginfo('url'); ?>/patrocine">Seja um patrocinador</a></p>
		</div>
		<!-- GOLD SPONSORS -->
		<?php
			//We need to reset the posts loop
			wp_reset_postdata();
		    $args = array(
				'post_type' => 'patrocinadores',
				'posts_per_page' => -1,
				'order' => 'ASC',
				'meta_query' => array (
					array (
						'key' => 'categoria',
						'compare' => '=',
						'value' => 'gold'
					)
				)
			);
		    $wp_query = new WP_Query($args);
		?>
		<?php if (have_posts()): ?>
			<div>
				<h3 class="subtitle subtitle--type-2">Gold</h3>
				<ul class="sponsor-list">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php $imageLink = wp_get_attachment_image_src(get_post_thumbnail_id()) ?>
						<li class="sponsor-list__item"><a class="sponsor-list__anchor" href="<?php the_field('url') ?>"><img class="sponsor-list__thumb" src="<?php echo $imageLink[0]; ?>" alt="<?php the_title(); ?>"/></a></li>
					<?php endwhile; ?>
				</ul>
			</div>
		<?php endif; ?>
		<!-- END GOLD SPONSORS -->

		<!-- SILVER SPONSORS -->
		<?php
			//We need to reset the posts loop
			wp_reset_postdata();
		    $args = array(
				'post_type' => 'patrocinadores',
				'posts_per_page' => -1,
				'order' => 'ASC',
				'meta_query' => array (
					array (
						'key' => 'categoria',
						'compare' => '=',
						'value' => 'silver'
					)
				)
			);
		    $wp_query = new WP_Query($args);
		?>
		<?php if (have_posts()): ?>
			<div>
				<h3 class="subtitle subtitle--type-2">Silver</h3>
				<ul class="sponsor-list">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php $imageLink = wp_get_attachment_image_src(get_post_thumbnail_id()) ?>
						<li class="sponsor-list__item"><a class="sponsor-list__anchor" href="<?php the_field('url') ?>"><img class="sponsor-list__thumb" src="<?php echo $imageLink[0]; ?>" alt="<?php the_title(); ?>"/></a></li>
					<?php endwhile; ?>
				</ul>
			</div>
		<?php endif; ?>
		<!-- END SILVER SPONSORS -->

		<!-- BRONZE SPONSORS -->
			<?php
				//We need to reset the posts loop
				wp_reset_postdata();
			    $args = array(
					'post_type' => 'patrocinadores',
					'posts_per_page' => -1,
					'order' => 'ASC',
					'meta_query' => array (
						array (
							'key' => 'categoria',
							'compare' => '=',
							'value' => 'bronze'
						)
					)
				);
			    $wp_query = new WP_Query($args);
			?>
			<?php if (have_posts()): ?>
				<div>
					<h3 class="subtitle subtitle--type-2">Bronze</h3>
					<ul class="sponsor-list">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php $imageLink = wp_get_attachment_image_src(get_post_thumbnail_id()) ?>
							<li class="sponsor-list__item"><a class="sponsor-list__anchor" href="<?php the_field('url') ?>"><img class="sponsor-list__thumb" src="<?php echo $imageLink[0]; ?>" alt="<?php the_title(); ?>"/></a></li>
						<?php endwhile; ?>
					</ul>
				</div>
			<?php endif; ?>
		<!-- END BRONZE SPONSORS -->

		<!-- APOIO SPONSORS -->
			<?php
				//We need to reset the posts loop
				wp_reset_postdata();
			    $args = array(
					'post_type' => 'patrocinadores',
					'posts_per_page' => -1,
					'order' => 'ASC',
					'meta_query' => array (
						array (
							'key' => 'categoria',
							'compare' => '=',
							'value' => 'apoio'
						)
					)
				);
			    $wp_query = new WP_Query($args);
			?>
			<?php if (have_posts()): ?>
				<div>
					<h3 class="subtitle subtitle--type-2">Apoio</h3>
					<ul class="sponsor-list">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php $imageLink = wp_get_attachment_image_src(get_post_thumbnail_id()) ?>
							<li class="sponsor-list__item"><a class="sponsor-list__anchor" href="<?php the_field('url') ?>"><img class="sponsor-list__thumb" src="<?php echo $imageLink[0]; ?>" alt="<?php the_title(); ?>"/></a></li>
						<?php endwhile; ?>
					</ul>
				</div>
			<?php endif; ?>
		<!-- END APOIO SPONSORS -->

	</div>
</section>