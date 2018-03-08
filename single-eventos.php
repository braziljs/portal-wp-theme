<?php get_header(); ?>
<?php get_template_part('sections/navigation'); ?>

<?php

	$context = Timber::get_context();
    $context['events'] = Timber::get_posts();


    Timber::render('event.twig', $context);

?>
<?php get_template_part('sections/sponsors'); ?>
<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>