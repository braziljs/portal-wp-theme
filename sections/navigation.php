<!-- NAVIGATION -->
<div class="section">
	<div class="content">
		<div id="js-navigation-wrapper" class="navigation-wrapper flow-opposite">
			<button id="js-navigation-toogler" class="default-button navigation-toogler" type="button" aria-label="Abrir o menu de navegação">
				<span class="navigation-toogler__text">menu</span><span class="navigation-toogler__burguer">&nbsp;</span>
			</button>
			<nav id="js-navigation" class="navigation" role="navigation">
				<?php
					$args = array(
						'menu' => 'menu',
						'container' => false,
						'menu_class' => 'navigation-list',
						'menu_id' => 'js-navigation-list'
					);
					wp_nav_menu($args);
				?>
			</nav>
		</div>
	</div>
</div>
<!-- END NAVIGATION -->
