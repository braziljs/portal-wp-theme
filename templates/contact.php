<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
<?php get_template_part('sections/navigation'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="main">

			<header class="page-header">
				<div class="content">
					<img class="header__logo" src="<?php asset_path('img/logos/braziljs.svg') ?>" alt="BrazilJS" />
					<div class="post-content-wrapper">
						<div class="center-elements">
							<h1 class="title subtitle--color-2 title--type-2 title--type-4"><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</header>
			<div class="content">
				<div class="post-entry clearfix">
					<div class="col-6-12">
						<form class="contact-form" id="js-contact-form" type="POST" action="<?php echo get_template_directory_uri(); ?>/scripts/sendMail.php">
							<fieldset>
								<legend class="visuallyhidden">Formulário de Contato</legend>
									<label class="label" for="form-name">Nome</label>
									<input class="input" id="form-name" name="form-name" type="text" placeholder="Nome" required />
									<label class="label" for="form-email">E-Mail</label>
									<input class="input" id="form-email" name="form-email" type="email" placeholder="Seu@email" required />
									<label class="label" for="form-message">Mensagem</label>
									<textarea class="input input--textarea" id="form-message" name="form-message" type="submit" required></textarea>
									<input id="form-send" value="<?php echo get_field('e-mail', 'option'); ?>" name="form-send" type="hidden" />
									<input type="submit" class="anchor-button anchor-button--color-4 anchor-button--size-2" value="Enviar" />
							</fieldset>
						</form>
					</div>
					<div class="col-6-12 last">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</article>
	<?php endwhile; endif; ?>
<?php get_template_part('sections/weekly-internal'); ?>
<?php get_template_part('sections/sponsors'); ?>
<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>