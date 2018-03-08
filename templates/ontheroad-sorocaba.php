<?php
/*
* Template Name: OnTheRoad - Sorocaba
*/
?>

<?php get_header(); ?>
<?php get_template_part('sections/navigation'); ?>

<!-- HOME HEADER -->
<header class="header-container helper__header" style="background-image: url(<?php asset_path('img/conf/sorocaba-vertical--small.jpg') ?>) ">
  
  <div class="content">
    
    <div class="header__info">
      <div class="__date">
        <p>5 de maio</p>
        <hr>
        <p>Sábado</p>
      </div>
      <div class="__address">
        <p>Av. Independência, 210 - Éden, Sorocaba - SP, 18087-101</p>  
      </div>
    </div>

    <h1 class="header__logo"><img src="<?php asset_path('img/logos/braziljs-otr-sorocaba.png') ?>" alt="BrazilJS" /></h1>
    <div class="header-content center-elements--mobile col-5-12">
      
      <h2 class="header__title">BrazilJS OnTheRoad <p>Edição Sorocaba!</p></h2>
      <hr>
      
      <p class="paragraph paragraph--font-2 paragraph--color-2">Levamos conteúdo de qualidade para toda a comunidade, por meio da BrazilJS Weekly, artigos, vídeos, screencasts, cursos e muito mais.</p>
      
      <script src="https://embedstore.ingresse.com/ingresse-widget.js"></script> 

      <div class="ingresse-widget" data-btntext="Comprar Ingressos" data-btnbgcolor="#ffc819" data-btntextcolor="#222" data-eventid="23969" ></div>
      <a href="https://docs.google.com/forms/d/e/1FAIpQLScUBKCqvhVyKLwoN_kZyG-WFPLXlyvcwHUNrmgU6PLG5An-JQ/viewform" class="anchor-button anchor-button--color-5">Call4 Papers</a>
    </div>

  </div>

</header>
<!-- END HOME HEADER -->
  

<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>

