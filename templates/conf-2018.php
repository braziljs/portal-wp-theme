<?php
/*
Template Name: Conf 2018 Teaser
*/
?>

<?php get_header(); ?>
<?php get_template_part('sections/navigation'); ?>

<!-- HOME HEADER -->

<header class="header-container helper__header" id="js-conf-teaser" style="background-image: url(<?php asset_path('img/conf/poa-teaser-2018.jpg') ?>) ">

  <div class="content">

    <div class="keynotes" style="display: none;">
      <div class="__keynote">
        <p>Confira</p>
        <p><a href="#keynotes">Keynotes</a> CONFIRMADOS<span>!</span></p>
        <p>#BrazilJS2018</p>        
      </div>
    </div>    
    
    <h1 class="header__logo">
      <img src="<?php asset_path('img/logos/braziljs.svg') ?>" alt="BrazilJS" />
    </h1>

    <div class="row">
      <div class="header__info">
        <div class="__date">
          <p>24 e 25 de AGOSTO</p>
          <hr>
          <p class="__address">Porto Alegre, RS - BarraShopping Sul</p>  
        </div>
      </div>

      <div class="header-content center-elements--mobile col-6-12">
        
        <h2 class="header__title">
          Venha fazer parte da <span>BrazilJS Conf</span>, uma experiência única e verdadeira em eventos!
        </h2>

        <hr>
        
        <p class="paragraph paragraph--font-2 paragraph--color-2">
          Levamos conteúdo de qualidade para toda a comunidade, por meio da BrazilJS Weekly, artigos, vídeos, screencasts, cursos e muito mais.
        </p>
        
        <script src="https://embedstore.ingresse.com/ingresse-widget.js"></script>

        <div class="ingresse-widget" data-btntext="Comprar Ingressos" data-btnbgcolor="#ffc819" data-btntextcolor="#222" data-eventid="23468" ></div>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLScvM9sctUCe2vjbUxv3QzhRimn5ztB7JyPgbnpTDksS3eTpQw/viewform" class="anchor-button anchor-button--color-5">Call4 Papers</a> 
      </div>
    </div>

    <div class="row">
      <div class="timer__brjs" id="brjs-countdown" style="display: none;">

        <div class="wrapper">
          <span id="dd">00</span>
          <span class="period">Dias</span>
          <span class="dot">:</span>
        </div>

        <div class="wrapper">
          <span id="hh">00</span>
          <span class="period">horas</span>
          <span class="dot">:</span>
        </div>

        <div class="wrapper">
          <span id="mm">00</span>
          <span class="period">minutos</span>
          <span class="dot">:</span>
        </div>

        <div class="wrapper">
          <span id="ss">00</span>
          <span class="period">segundos</span>
        </div>
      </div>
    </div>

  </div>
</header>

<!-- END HEADER -->

<main class="section-wrapper helper__main">
  <div class="content">
    <section>
      <div class="center-elements--mobile">
        <h2 class="title">Keynotes confirmados</h2>
      </div>

      <div class="speaker__grid row card-wrapper">

        <ul class="speaker-wrapper">

          <li class="speaker-item">
            <div class="speaker-info">
              <div class="speaker-img">
                <ul>
                  <li><a href="https://twitter.com/lady_ada_king" class="speaker-networks__anchor twitter"></a></li>
                  <li><a href="https://github.com/adarosecannon" class="speaker-networks__anchor github"></a></li>
                  <li><a href="https://www.linkedin.com/in/adarose" class="speaker-networks__anchor linkedin"></a></li>
                  <li><a href="https://ada.is/" class="speaker-networks__anchor info"></a></li>
                </ul>
                <div class="speaker__image lady_ada_king"></div>
              </div>
              <div class="speaker-bio">
                <h3>Ada Rose Cannon</h3>
                <p>
                  <span>Developer Advocate da Samsung para o navegador <a href="https://twitter.com/SamsungInternet">@SamsungInternet</a>. Web fangirl. Geralmente em Londres. WebXR Device API, Web Components, PWA.</span>
                </p>
              </div>
            </div>
          </li>

          <li class="speaker-item">
            <div class="speaker-info">
              <div class="speaker-img">
                <ul>
                  <li><a href="https://twitter.com/getify" class="speaker-networks__anchor twitter"></a></li>
                  <li><a href="https://github.com/getify" class="speaker-networks__anchor github"></a></li>
                  <li><a href="https://www.linkedin.com/in/getify" class="speaker-networks__anchor linkedin"></a></li>
                </ul>
                <div class="speaker__image kyle_simpson"></div>
              </div>
              <div class="speaker-bio">
                <h3>Kyle Simpson</h3>
                <p>
                  <span>Kyle Simpson é um evangelista da Open Web, apaixonado por todas as coisas relacionadas ao JavaScript. Ele é um escritor, palestrante, professor e contribuidor em projetos open-source.</span>
                </p>
              </div>
            </div>
          </li>

          <li class="speaker-item">
            <div class="speaker-info">
              <div class="speaker-img">
                <ul>
                  <li><a href="https://twitter.com/feross" class="speaker-networks__anchor twitter"></a></li>
                  <li><a href="https://github.com/feross" class="speaker-networks__anchor github"></a></li>
                  <li><a href="https://feross.org" class="speaker-networks__anchor info"></a></li>
                </ul>
                <div class="speaker__image feross"></div>
              </div>
              <div class="speaker-bio">
                <h3>Feross Aboukhadijeh</h3>
                <p>
                  <span>Programador, designer, professor e cientista louco. Atualmente, construindo o <a href="https://webtorrent.io/">WebTorrent</a>, um cliente de streaming BitTorrent para o navegador, alimentado pela WebRTC. Antes disso, construiu o <a href="https://web.archive.org/web/20150810065820/https://peercdn.com/">PeerCDN</a>, uma rede de entrega de conteúdo peer-to-peer para tornar os sites mais rápidos e mais baratos.</span>
                </p>
              </div>
            </div>
          </li>

          <li class="speaker-item">
            <div class="speaker-info">
              <div class="speaker-img">
                <ul>
                  <li><a href="https://docs.google.com/forms/d/e/1FAIpQLScvM9sctUCe2vjbUxv3QzhRimn5ztB7JyPgbnpTDksS3eTpQw/viewform" class="speaker-networks__anchor twitter"></a></li>
                  <li><a href="https://docs.google.com/forms/d/e/1FAIpQLScvM9sctUCe2vjbUxv3QzhRimn5ztB7JyPgbnpTDksS3eTpQw/viewform" class="speaker-networks__anchor github"></a></li>
                  <li><a href="https://docs.google.com/forms/d/e/1FAIpQLScvM9sctUCe2vjbUxv3QzhRimn5ztB7JyPgbnpTDksS3eTpQw/viewform" class="speaker-networks__anchor linkedin"></a></li>
                  <li><a href="https://docs.google.com/forms/d/e/1FAIpQLScvM9sctUCe2vjbUxv3QzhRimn5ztB7JyPgbnpTDksS3eTpQw/viewform" class="speaker-networks__anchor info"></a></li>
                </ul>
                <a class='link__c4' href="https://docs.google.com/forms/d/e/1FAIpQLScvM9sctUCe2vjbUxv3QzhRimn5ztB7JyPgbnpTDksS3eTpQw/viewform">
                  <div class="speaker__image call4papers" id="bg-call4paper"><span></span></div>
                </a>
              </div>
              <div class="speaker-bio">
                <h3>Call 4 Papers</h3>
                <p>
                  <span>Não deixe de <a href="https://docs.google.com/forms/d/e/1FAIpQLScvM9sctUCe2vjbUxv3QzhRimn5ztB7JyPgbnpTDksS3eTpQw/viewform">submeter</a> sua palestra com um conteúdo super criativo para, quem sabe, apresentá-lo a mais de 1500 pessoas na maior conferência de JavaScript do Universo!</span>
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </div>

  <div class="content">
    <div class="made-by-g">
      Made by <a target="__blank" href="http://asgabe.github.io/?utm_source=braziljs">Gabe</a>!
    </div>
  </div>
</main>

<section class="hospedagem__wrapper" id="hospedagem">
  <div class="content">
    <div class="__hotel col-7-12">
      Precisa de um hotel?
      <p>
        Veja as melhores opções e tarifas  de hospedagens para participantes
      </p>
    </div>
    <a class="btn-hotel" href="https://hoteis.evnts.rocks/rs/braziljs-conf-2018">VER HOSPEDAGENS</a>
    <div>powered by <img src="<?php asset_path('img/logos/evnts-logo.png') ?>" alt="evnts"></div>
  </div>
</section>

<!-- SCRIPT'S -->

<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>
