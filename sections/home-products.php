<!-- HOME PRODUCTS -->
<ul class="products__list">
	<li class="product">
		<div class="products__item flow-opposite">
			<div class="col-5-12">
				<div class="col-4-12 flow-opposite">
					<h3 class="products__name">Eventos</h3>
					<p class="paragraph paragraph--color-2">Organizamos e fazemos a curadoria de uma série de eventos em todo Brasil. Desde que a primeira BrazilJS Conf aconteceu, em 2011, mais de 50 eventos relacionados surgiram e acontecem todo ano no Brasil. Isso mostra o poder e engajamento de toda comunidade brasileira.</p>
				</div>
			</div>
			<ul class="products-highlight col-4-12 last">
				<li class="products-highlight__item col-2-12">
					<strong class="products-highlight__value">1.600</strong>
					<span class="products-highlight__key">Participantes em 2016</span>
				</li>
				<li class="products-highlight__item col-2-12">
					<strong class="products-highlight__value">10</strong>
					<span class="products-highlight__key">Eventos parceiros</span>
				</li>
			</ul>
			<picture>
				<img class="products__thumb" src="<?php asset_path('img/products-example.jpg') ?>" alt="" />
			</picture>
		</div>
		<ul class="products-links">
			<li class="products-links__item">
				<a href="<?php bloginfo('url'); ?>/conf/" class="products-links__anchor anchor">Va para o site da BrazilJS Conf</a>
			</li>
			<li class="products-links__item">
				<a href="<?php bloginfo('url'); ?>/eventos-parceiros/" class="products-links__anchor anchor">Conheça nossos eventos parceiros</a>
			</li>
		</ul>
	</li>
	<li class="product product__type-2">
		<div class="products__item">
			<div class="col-5-12 flow-opposite last">
				<div class="col-4-12">
					<h3 class="products__name">Conteúdo</h3>
					<p class="paragraph paragraph--color-2">Levamos conteúdo de qualidade para toda a comunidade. Através da BrazilJS Weekly, artigos no portal, vídeos no Youtube, screencasts, cursos, etc, é possível estar sempre atualizado com o que existe de novo no mundo Front-end, além de se profissionalizar, tudo isso com o selo de qualidade BrazilJS.</p>
				</div>
			</div>
			<ul class="products-highlight col-4-12">
				<li class="products-highlight__item col-2-12">
					<strong class="products-highlight__value"><?php $count_posts = wp_count_posts(); echo $count_posts->publish; ?></strong>
					<span class="products-highlight__key">Artigos publicados</span>
				</li>
				<li class="products-highlight__item col-2-12">
					<strong class="products-highlight__value">6k +</strong>
					<span class="products-highlight__key">Inscritos no Youtube</span>
				</li>
			</ul>
			<picture>
				<img class="products__thumb" src="<?php asset_path('img/products-example--2.jpg') ?>" alt="" />
			</picture>
		</div>
		<ul class="products-links products-links--type-2">
			<li class="products-links__item">
				<a href="<?php bloginfo('url'); ?>/blog/" class="products-links__anchor anchor">Veja todos os artigos</a>
			</li>
			<li class="products-links__item">
				<a href="https://www.youtube.com/channel/UCnLdHOuue5i1O7TsH6oh07w" class="products-links__anchor anchor">Confira nosso canal no Youtube</a>
			</li>
		</ul>
	</li>
	<li class="product product__type-3">
		<div class="products__item flow-opposite">
			<div class="col-5-12">
				<div class="col-4-12 flow-opposite">
					<h3 class="products__name">Comunidade e open-source</h3>
					<p class="paragraph paragraph--color-2">Sem comunidade, não existe a BrazilJS. Estamos sempre focados em ajudar e fomentar o crescimento saudável da comunidade JavaScript no Brasil. Amamos e acreditamos no Open-source, por isso, sempre que possível, desenvolvemos projetos que possam ajudar outros desenvolvedores.</p>
				</div>
			</div>
			<ul class="products-highlight col-4-12 last">
				<li class="products-highlight__item col-2-12">
					<strong class="products-highlight__value">10k +</strong>
					<span class="products-highlight__key">Inscritos na weekly</span>
				</li>
				<li class="products-highlight__item col-2-12">
					<strong class="products-highlight__value">1.5k</strong>
					<span class="products-highlight__key">Registrados no Slack</span>
				</li>
			</ul>
			<picture>
				<img class="products__thumb" src="<?php asset_path('img/products-example--3.jpg') ?>" alt="" />
			</picture>
		</div>
		<ul class="products-links">
			<li class="products-links__item">
				<a href="https://now-examples-slackin-vvjogtwzcf.now.sh/" class="products-links__anchor anchor">Vá para o nosso canal no Slack</a>
			</li>
			<li class="products-links__item">
				<a href="http://braziljs.us5.list-manage.com/subscribe/post?u=77b6594f10bba05dcc722c80e&id=e6beed4270" class="products-links__anchor anchor">Assine a BrazilJS Weekly</a>
			</li>
		</ul>
	</li>
</ul>
<!-- END HOME PRODUCTS -->