<!-- SEARCH BOX -->
<div class="search-wrapper">
	<div class="content">
		<img class="header__logo" src="<?php asset_path('img/logos/braziljs.svg') ?>" alt="BrazilJS" />
		<form class="search-form" role="search" action="<?php echo home_url( '/' ); ?>" method="get">
			<label class="visuallyhidden" for="s">digite sua busca</label>
			<input class="search-form__search" id="s" type="search" name="s" placeholder="digite sua busca" required />
			<input type="submit" value="buscar" class="flow-opposite anchor-button anchor-button--color-2" />
		</form>
	</div>
</div>
<!-- END SEARCH BOX -->