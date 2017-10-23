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

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	 fbq('init', '1179239125515538');
	fbq('track', 'PageView');
	</script>
	<noscript>
	 <img height="1" width="1"
	src="https://www.facebook.com/tr?id=1179239125515538&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->


<?php } ?>
</body>

</html>
