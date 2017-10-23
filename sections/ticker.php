<?php $ticker = get_field('ticker_habilitado', 'option'); ?>
<?php if($ticker): ?>

	<?php
		$tickerTitle = get_field('ticker_titulo', 'option');
		$tickerDescription = get_field('ticker_descrição', 'option');
		$tickerLink = get_field('ticker_link', 'option');
		$tickerLinkText = get_field('ticker_link_texto', 'option');
		$tickerType = get_field('ticker_tipo_de_ticker', 'option');
	?>

	<?php if($tickerType): ?>
		<?php
			$tickerImage = get_field('ticker_imagem_do_ticker', 'option');
			$tickerImage = $tickerImage[sizes]['ticker-background'];
			$tickerInternalClassReset =  is_home() ? '' : 'top';
		?>
		<section class="ticker <?php echo $tickerInternalClassReset; ?>" style="background-image: url('<?php echo $tickerImage; ?>')">
			<div class="ticker-content center-elements--mobile col-6-12">
				<h2 class="title title--type-3 title--color-2"><?php echo $tickerTitle; ?></h2>
				<div class="paragraph paragraph--color-2">
					<?php echo $tickerDescription; ?>
				</div>
				<a href="<?php echo $tickerLink; ?>" class="anchor-button anchor-button--size-2 anchor-button--color-3"><?php echo $tickerLinkText; ?></a>
			</div>
		</section>
	<?php else: ?>
		<section class="ticker">
			<div class="ticker-content center-elements">
				<h2 class="title title--type-2 title--color-2"><?php echo $tickerTitle; ?></h2>
				<div class="paragraph paragraph--color-2">
					<?php echo $tickerDescription; ?>
				</div>
				<a href="<?php echo $tickerLink; ?>" class="anchor-button anchor-button--size-2 anchor-button--color-3"><?php echo $tickerLinkText; ?></a>
			</div>
		</section>
	<?php endif; ?>

<?php endif; ?>