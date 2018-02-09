	<div class="powered-wrapper">
		<div class="content">
			<span class="powered__info">BrazilJS®  é uma iniciativa <a href="https://nasc.io/?utm_source=braziljs"><strong>NASC.</strong></a></span>
			<span class="powered__info">&nbsp; &nbsp; Hosted by <a href="https://getupcloud.com/?utm_source=braziljs"><img src="<?php asset_path('img/sponsors/logo-getupcloud.svg') ?>" alt="Getup"></a></span>
			<div class="flow-opposite">
				<a href="http://marimbondo.me/?utm_source=braziljs" title="Feito à mão por marimbondo"><img src="<?php asset_path('img/logos/logo-marimbondo.svg') ?>" alt="marimbondo" /><span class="visuallyhidden">Desenvolvido por marimbondo</span></a>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
<?php  if (getEnvironment() === 'dev') { ?>
	<script src="<?php echo get_template_directory_uri(); ?>/dev/js/lib/require.js" data-main="<?php echo get_template_directory_uri(); ?>/dev/js/main"></script>
<?php } else { ?>
  	<script src="<?php asset_path('js/main.js') ?>"></script>
<?php } ?>

<?php
	// Load Google Analytics Script
	if (getEnvironment() === 'assets') { ?>
	<script>

	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='//www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-32119524-1','auto');ga('send','pageview');

	</script>


	<!-- Alura + BrazilJS -->
	<script>
	!function(e){var t={};t.URL="https://www.alura.com.br/api/cursos-em-destaque",t.request=function(){var e=fetch(t.URL,{method:"GET"});e.then(function(e){e.json().then(function(e){t.setCourses(e)})}),e.catch(function(e){console.error("Failed retrieving information",e)})},t.setCourses=function(e){e.cursosEmDestaque.forEach(function(e){var t=document.createElement("li"),n=document.getElementById("card-wrapper-list"),a=document.createElement("div"),d=document.createElement("div"),r=document.createElement("a"),c=document.createElement("img"),i=document.createElement("div"),i=document.createElement("div"),s=document.createElement("h3"),l=document.createElement("a");t.classList.add("article-list__item","col-4-12"),a.setAttribute("class","card"),d.setAttribute("class","card__header"),i.setAttribute("class","card__content"),r.classList.add("media-wrapper"),r.setAttribute("role","presentation"),r.setAttribute("aria-hidden","true"),r.href=e.url,c.classList.add("media-wrapper__thumb","card__thumb","card__thumb__alura"),c.style.minWidth="135px",c.src=e.icone,s.setAttribute("class","card__title"),l.innerHTML=e.nome,l.href=e.url,n.appendChild(t),t.appendChild(a),a.appendChild(d),d.appendChild(r),r.appendChild(c),a.appendChild(i),i.appendChild(s),s.appendChild(l)})},t.makeHTML=function(e){var n=document.createElement("section"),a=document.createElement("div"),d=document.createElement("div"),r=document.createElement("h2"),c=document.createElement("ul"),i=document.createElement("div"),s=document.createElement("a");"/"==location.pathname?n.style.marginTop="6.25rem":n.style.margin="6.25rem 0",a.classList.add("content"),d.classList.add("center-elements--mobile"),r.classList.add("title"),c.classList.add("row","card-wrapper"),c.id="card-wrapper-list",i.classList.add("center-elements","row"),s.classList.add("anchor-button"),s.innerHTML="veja todos os cursos",s.href="https://www.alura.com.br/braziljs",r.innerHTML="Cursos recomendados pela BrazilJS",n.appendChild(a),a.appendChild(d),d.appendChild(r),a.appendChild(c),a.appendChild(i),i.appendChild(s),null!=document.getElementById("main")&&(t.request(),document.getElementById("main").appendChild(n))},t.init=function(){var e=location.pathname;"/conf/"!=e&&"/eventos-parceiros/"!=e&&"/sobre/"!=e&&"/contato/"!=e&&t.makeHTML()},t.init()}();
	</script>
	<!-- Alura + BrazilJS -->

	<!-- Scup -->
	<script>
		// Use the variables below to include the name and email address of the user who is currently logged in.
		window.scupSettings = {
		channelAccount:"LVC_1ca83170-0aa0-11e8-ba14-c1ce6c5c20e6",
		userName: "",
		userEmail: ""
		}
		</script>
	<script>!function(t){var e=t.createElement("script");e.src="https://api-live-chat.care.scup.com/widget",t.body.appendChild(e)}(document);</script>
  	<!-- /Scup -->


<?php } ?>
</body>

</html>
