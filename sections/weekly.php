<!-- WEEKLY NEWSLETTER -->
<section class="newsletter-wrapper">
	<?php get_template_part('sections/weekly-content'); ?>
	<?php
		$weeklyGroup = get_field('weekly_cartola', 'option');
		$weeklyTitle = get_field('weekly_titulo', 'option');
		$weeklyLink = get_field('weekly_link', 'option');
		$weeklyThumb = get_field('weekly_thumb', 'option')[sizes]['weekly-thumb'];
		$isVideoThumb = get_field('weekly_video', 'option') ? 'media-wrapper--video' : '';
	?>
	<div class="row newsletter-wrapper__bottom">
		<div class="content">
			<div class="newsletter__thumb col-6-12">
				<a href="<?php echo $weeklyLink ?>" class="media-wrapper <?php echo $isVideoThumb; ?>" aria-hidden="true" role="presentation" tabindex="-1">
					<img class="media-wrapper__thumb" src="<?php echo $weeklyThumb; ?>" alt="<?php echo $weeklyTitle; ?>" />
				</a>
			</div>
			<div class="col-6-12">
				<span class="newsletter__label"><?php echo $weeklyGroup; ?></span>
				<h3 class="newsletter__title"><a href="<?php echo $weeklyLink ?>"><?php echo $weeklyTitle; ?></a></h3>
			</div>
		</div>
	</div>
</section>
<!-- END WEEKLY NEWSLETTER -->