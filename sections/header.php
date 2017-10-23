<!-- HOME HEADER -->
	<header class="header-container">
		<div class="content">
			<h1 class="header__logo"><img src="<?php asset_path('img/logos/braziljs.svg') ?>" alt="BrazilJS" /></h1>
			<div class="header-content center-elements--mobile col-5-12">
				<h2 class="header__title">A BrazilJS é mais do que apenas uma conferência!</h2>
				<p class="paragraph paragraph--font-2 paragraph--color-2">Levamos conteúdo de qualidade para toda a comunidade, por meio da BrazilJS Weekly, artigos, vídeos, screencasts, cursos e muito mais.</p>
				<a href="<?php bloginfo('url'); ?>/blog" class="anchor-button anchor-button--color-2" title="Explore os artigos disponíveis no Portal BrazilJS">Leia artigos</a>
				<a href="<?php bloginfo('url'); ?>/sobre" class="anchor-button anchor-button--color-5">Sobre a BrazilJS</a>
			</div>
			<?php $headerWarning = get_field('header_habilitar_aviso', 'option'); ?>
			<?php if($headerWarning): ?>
				<?php
					$headerTitle = get_field('header_titulo', 'option');
					$headerDescription = get_field('header_descrição', 'option');
					$headerLink = get_field('header_link', 'option');
					$headerLinkText = get_field('header_valor-link', 'option');
				?>
				<div class="header-highlight center-elements--mobile col-4-12 flow-opposite">
					<div class="header-highlight__content">
						<h2 class="title title--color-2"><?php echo $headerTitle; ?></h2>
						<div class="paragraph paragraph--font-2 paragraph--color-2">
							<?php echo $headerDescription; ?>
						</div>
						<a href="<?php echo $headerLink; ?>" class="anchor-button anchor-button--color-2"><?php echo $headerLinkText; ?></a>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</header>
<!-- END HOME HEADER -->