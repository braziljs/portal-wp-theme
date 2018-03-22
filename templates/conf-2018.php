<?php
/*
Template Name: Conf 2018 Teaser
*/
?>

<?php get_header(); ?>
<?php get_template_part('sections/navigation'); ?>

<!-- HOME HEADER -->
<header class="header-container helper__header" style="background-image: url(<?php asset_path('img/conf/poa-teaser-2018.jpg') ?>) ">

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
      <div class="timer__brjs">

        <div class="wrapper">
          <span id="dd"></span>
          <span class="period">Dias</span>
          <span class="dot">:</span>
        </div>

        <div class="wrapper">
          <span id="hh"></span>
          <span class="period">horas</span>
          <span class="dot">:</span>
        </div>

        <div class="wrapper">
          <span id="mm"></span>
          <span class="period">minutos</span>
          <span class="dot">:</span>
        </div>

        <div class="wrapper">
          <span id="ss"></span>
          <span class="period">segundos</span>
        </div>
      </div>
    </div>

  </div>

</header>

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

<script type="text/javascript">
  !function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t():"function"==typeof define&&define.amd?define([],t):"object"==typeof exports?exports.AOS=t():e.AOS=t()}(this,function(){return function(e){function t(n){if(o[n])return o[n].exports;var i=o[n]={exports:{},id:n,loaded:!1};return e[n].call(i.exports,i,i.exports,t),i.loaded=!0,i.exports}var o={};return t.m=e,t.c=o,t.p="dist/",t(0)}([function(e,t,o){"use strict";function n(e){return e&&e.__esModule?e:{"default":e}}var i=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var o=arguments[t];for(var n in o)Object.prototype.hasOwnProperty.call(o,n)&&(e[n]=o[n])}return e},a=o(1),r=(n(a),o(5)),c=n(r),u=o(6),s=n(u),d=o(7),f=n(d),l=o(8),m=n(l),p=o(9),b=n(p),v=o(10),g=n(v),y=o(13),w=n(y),h=[],k=!1,x=document.all&&!window.atob,j={offset:120,delay:0,easing:"ease",duration:400,disable:!1,once:!1,startEvent:"DOMContentLoaded"},O=function(){var e=arguments.length<=0||void 0===arguments[0]?!1:arguments[0];return e&&(k=!0),k?(h=(0,g["default"])(h,j),(0,b["default"])(h,j.once),h):void 0},_=function(){h=(0,w["default"])(),O()},z=function(){h.forEach(function(e,t){e.node.removeAttribute("data-aos"),e.node.removeAttribute("data-aos-easing"),e.node.removeAttribute("data-aos-duration"),e.node.removeAttribute("data-aos-delay")})},A=function(e){return e===!0||"mobile"===e&&m["default"].mobile()||"phone"===e&&m["default"].phone()||"tablet"===e&&m["default"].tablet()||"function"==typeof e&&e()===!0},E=function(e){return j=i(j,e),h=(0,w["default"])(),A(j.disable)||x?z():(document.querySelector("body").setAttribute("data-aos-easing",j.easing),document.querySelector("body").setAttribute("data-aos-duration",j.duration),document.querySelector("body").setAttribute("data-aos-delay",j.delay),"DOMContentLoaded"===j.startEvent&&["complete","interactive"].indexOf(document.readyState)>-1?O(!0):"load"===j.startEvent?window.addEventListener(j.startEvent,function(){O(!0)}):document.addEventListener(j.startEvent,function(){O(!0)}),window.addEventListener("resize",(0,s["default"])(O,50,!0)),window.addEventListener("orientationchange",(0,s["default"])(O,50,!0)),window.addEventListener("scroll",(0,c["default"])(function(){(0,b["default"])(h,j.once)},99)),document.addEventListener("DOMNodeRemoved",function(e){var t=e.target;t&&1===t.nodeType&&t.hasAttribute&&t.hasAttribute("data-aos")&&(0,s["default"])(_,50,!0)}),(0,f["default"])("[data-aos]",_),h)};e.exports={init:E,refresh:O,refreshHard:_}},function(e,t){},,,,function(e,t,o){"use strict";function n(e,t,o){var n=!0,a=!0;if("function"!=typeof e)throw new TypeError(c);return i(o)&&(n="leading"in o?!!o.leading:n,a="trailing"in o?!!o.trailing:a),r(e,t,{leading:n,maxWait:t,trailing:a})}function i(e){var t="undefined"==typeof e?"undefined":a(e);return!!e&&("object"==t||"function"==t)}var a="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol?"symbol":typeof e},r=o(6),c="Expected a function";e.exports=n},function(e,t){"use strict";function o(e,t,o){function n(t){var o=b,n=v;return b=v=void 0,O=t,y=e.apply(n,o)}function a(e){return O=e,w=setTimeout(d,t),_?n(e):y}function r(e){var o=e-h,n=e-O,i=t-o;return z?x(i,g-n):i}function u(e){var o=e-h,n=e-O;return!h||o>=t||0>o||z&&n>=g}function d(){var e=j();return u(e)?f(e):void(w=setTimeout(d,r(e)))}function f(e){return clearTimeout(w),w=void 0,A&&b?n(e):(b=v=void 0,y)}function l(){void 0!==w&&clearTimeout(w),h=O=0,b=v=w=void 0}function m(){return void 0===w?y:f(j())}function p(){var e=j(),o=u(e);if(b=arguments,v=this,h=e,o){if(void 0===w)return a(h);if(z)return clearTimeout(w),w=setTimeout(d,t),n(h)}return void 0===w&&(w=setTimeout(d,t)),y}var b,v,g,y,w,h=0,O=0,_=!1,z=!1,A=!0;if("function"!=typeof e)throw new TypeError(s);return t=c(t)||0,i(o)&&(_=!!o.leading,z="maxWait"in o,g=z?k(c(o.maxWait)||0,t):g,A="trailing"in o?!!o.trailing:A),p.cancel=l,p.flush=m,p}function n(e){var t=i(e)?h.call(e):"";return t==f||t==l}function i(e){var t="undefined"==typeof e?"undefined":u(e);return!!e&&("object"==t||"function"==t)}function a(e){return!!e&&"object"==("undefined"==typeof e?"undefined":u(e))}function r(e){return"symbol"==("undefined"==typeof e?"undefined":u(e))||a(e)&&h.call(e)==m}function c(e){if("number"==typeof e)return e;if(r(e))return d;if(i(e)){var t=n(e.valueOf)?e.valueOf():e;e=i(t)?t+"":t}if("string"!=typeof e)return 0===e?e:+e;e=e.replace(p,"");var o=v.test(e);return o||g.test(e)?y(e.slice(2),o?2:8):b.test(e)?d:+e}var u="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol?"symbol":typeof e},s="Expected a function",d=NaN,f="[object Function]",l="[object GeneratorFunction]",m="[object Symbol]",p=/^\s+|\s+$/g,b=/^[-+]0x[0-9a-f]+$/i,v=/^0b[01]+$/i,g=/^0o[0-7]+$/i,y=parseInt,w=Object.prototype,h=w.toString,k=Math.max,x=Math.min,j=Date.now;e.exports=o},function(e,t){"use strict";function o(e,t){r.push({selector:e,fn:t}),!c&&a&&(c=new a(n),c.observe(i.documentElement,{childList:!0,subtree:!0,removedNodes:!0})),n()}function n(){for(var e,t,o=0,n=r.length;n>o;o++){e=r[o],t=i.querySelectorAll(e.selector);for(var a,c=0,u=t.length;u>c;c++)a=t[c],a.ready||(a.ready=!0,e.fn.call(a,a))}}Object.defineProperty(t,"__esModule",{value:!0});var i=window.document,a=window.MutationObserver||window.WebKitMutationObserver,r=[],c=void 0;t["default"]=o},function(e,t){"use strict";function o(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(t,"__esModule",{value:!0});var n=function(){function e(e,t){for(var o=0;o<t.length;o++){var n=t[o];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}return function(t,o,n){return o&&e(t.prototype,o),n&&e(t,n),t}}(),i=function(){function e(){o(this,e)}return n(e,[{key:"phone",value:function(){var e=!1;return function(t){(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(t)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(t.substr(0,4)))&&(e=!0)}(navigator.userAgent||navigator.vendor||window.opera),e}},{key:"mobile",value:function(){var e=!1;return function(t){(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(t)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(t.substr(0,4)))&&(e=!0)}(navigator.userAgent||navigator.vendor||window.opera),e}},{key:"tablet",value:function(){return this.mobile()&&!this.phone()}}]),e}();t["default"]=new i},function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=function(e,t,o){var n=e.node.getAttribute("data-aos-once");t>e.position?e.node.classList.add("aos-animate"):"undefined"!=typeof n&&("false"===n||!o&&"true"!==n)&&e.node.classList.remove("aos-animate")},n=function(e,t){var n=window.pageYOffset,i=window.innerHeight;e.forEach(function(e,a){o(e,i+n,t)})};t["default"]=n},function(e,t,o){"use strict";function n(e){return e&&e.__esModule?e:{"default":e}}Object.defineProperty(t,"__esModule",{value:!0});var i=o(11),a=n(i),r=function(e,t){return e.forEach(function(e,o){e.node.classList.add("aos-init"),e.position=(0,a["default"])(e.node,t.offset)}),e};t["default"]=r},function(e,t,o){"use strict";function n(e){return e&&e.__esModule?e:{"default":e}}Object.defineProperty(t,"__esModule",{value:!0});var i=o(12),a=n(i),r=function(e,t){var o=0,n=0,i=window.innerHeight,r={offset:e.getAttribute("data-aos-offset"),anchor:e.getAttribute("data-aos-anchor"),anchorPlacement:e.getAttribute("data-aos-anchor-placement")};switch(r.offset&&!isNaN(r.offset)&&(n=parseInt(r.offset)),r.anchor&&document.querySelectorAll(r.anchor)&&(e=document.querySelectorAll(r.anchor)[0]),o=(0,a["default"])(e).top,r.anchorPlacement){case"top-bottom":break;case"center-bottom":o+=e.offsetHeight/2;break;case"bottom-bottom":o+=e.offsetHeight;break;case"top-center":o+=i/2;break;case"bottom-center":o+=i/2+e.offsetHeight;break;case"center-center":o+=i/2+e.offsetHeight/2;break;case"top-top":o+=i;break;case"bottom-top":o+=e.offsetHeight+i;break;case"center-top":o+=e.offsetHeight/2+i}return r.anchorPlacement||r.offset||isNaN(t)||(n=t),o+n};t["default"]=r},function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=function(e){for(var t=0,o=0;e&&!isNaN(e.offsetLeft)&&!isNaN(e.offsetTop);)t+=e.offsetLeft-("BODY"!=e.tagName?e.scrollLeft:0),o+=e.offsetTop-("BODY"!=e.tagName?e.scrollTop:0),e=e.offsetParent;return{top:o,left:t}};t["default"]=o},function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=function(e){e=e||document.querySelectorAll("[data-aos]");var t=[];return[].forEach.call(e,function(e,o){t.push({node:e})}),t};t["default"]=o}])});
</script>

<script>
  /*! smooth-scroll v12.1.5 | (c) 2017 Chris Ferdinandi | MIT License | http://github.com/cferdinandi/smooth-scroll */
  !(function(e,t){"function"==typeof define&&define.amd?define([],(function(){return t(e)})):"object"==typeof exports?module.exports=t(e):e.SmoothScroll=t(e)})("undefined"!=typeof global?global:"undefined"!=typeof window?window:this,(function(e){"use strict";var t="querySelector"in document&&"addEventListener"in e&&"requestAnimationFrame"in e&&"closest"in e.Element.prototype,n={ignore:"[data-scroll-ignore]",header:null,speed:500,offset:0,easing:"easeInOutCubic",customEasing:null,before:function(){},after:function(){}},o=function(){for(var e={},t=0,n=arguments.length;t<n;t++){var o=arguments[t];!(function(t){for(var n in t)t.hasOwnProperty(n)&&(e[n]=t[n])})(o)}return e},a=function(t){return parseInt(e.getComputedStyle(t).height,10)},r=function(e){"#"===e.charAt(0)&&(e=e.substr(1));for(var t,n=String(e),o=n.length,a=-1,r="",i=n.charCodeAt(0);++a<o;){if(0===(t=n.charCodeAt(a)))throw new InvalidCharacterError("Invalid character: the input contains U+0000.");t>=1&&t<=31||127==t||0===a&&t>=48&&t<=57||1===a&&t>=48&&t<=57&&45===i?r+="\\"+t.toString(16)+" ":r+=t>=128||45===t||95===t||t>=48&&t<=57||t>=65&&t<=90||t>=97&&t<=122?n.charAt(a):"\\"+n.charAt(a)}return"#"+r},i=function(e,t){var n;return"easeInQuad"===e.easing&&(n=t*t),"easeOutQuad"===e.easing&&(n=t*(2-t)),"easeInOutQuad"===e.easing&&(n=t<.5?2*t*t:(4-2*t)*t-1),"easeInCubic"===e.easing&&(n=t*t*t),"easeOutCubic"===e.easing&&(n=--t*t*t+1),"easeInOutCubic"===e.easing&&(n=t<.5?4*t*t*t:(t-1)*(2*t-2)*(2*t-2)+1),"easeInQuart"===e.easing&&(n=t*t*t*t),"easeOutQuart"===e.easing&&(n=1- --t*t*t*t),"easeInOutQuart"===e.easing&&(n=t<.5?8*t*t*t*t:1-8*--t*t*t*t),"easeInQuint"===e.easing&&(n=t*t*t*t*t),"easeOutQuint"===e.easing&&(n=1+--t*t*t*t*t),"easeInOutQuint"===e.easing&&(n=t<.5?16*t*t*t*t*t:1+16*--t*t*t*t*t),e.customEasing&&(n=e.customEasing(t)),n||t},u=function(){return Math.max(document.body.scrollHeight,document.documentElement.scrollHeight,document.body.offsetHeight,document.documentElement.offsetHeight,document.body.clientHeight,document.documentElement.clientHeight)},c=function(e,t,n){var o=0;if(e.offsetParent)do{o+=e.offsetTop,e=e.offsetParent}while(e);return o=Math.max(o-t-n,0)},s=function(e){return e?a(e)+e.offsetTop:0},l=function(t,n,o){o||(t.focus(),document.activeElement.id!==t.id&&(t.setAttribute("tabindex","-1"),t.focus(),t.style.outline="none"),e.scrollTo(0,n))},f=function(t){return!!("matchMedia"in e&&e.matchMedia("(prefers-reduced-motion)").matches)};return function(a,d){var m,h,g,p,v,b,y,S={};S.cancelScroll=function(){cancelAnimationFrame(y)},S.animateScroll=function(t,a,r){var f=o(m||n,r||{}),d="[object Number]"===Object.prototype.toString.call(t),h=d||!t.tagName?null:t;if(d||h){var g=e.pageYOffset;f.header&&!p&&(p=document.querySelector(f.header)),v||(v=s(p));var b,y,E,I=d?t:c(h,v,parseInt("function"==typeof f.offset?f.offset():f.offset,10)),O=I-g,A=u(),C=0,w=function(n,o){var r=e.pageYOffset;if(n==o||r==o||(g<o&&e.innerHeight+r)>=A)return S.cancelScroll(),l(t,o,d),f.after(t,a),b=null,!0},Q=function(t){b||(b=t),C+=t-b,y=C/parseInt(f.speed,10),y=y>1?1:y,E=g+O*i(f,y),e.scrollTo(0,Math.floor(E)),w(E,I)||(e.requestAnimationFrame(Q),b=t)};0===e.pageYOffset&&e.scrollTo(0,0),f.before(t,a),S.cancelScroll(),e.requestAnimationFrame(Q)}};var E=function(e){h&&(h.id=h.getAttribute("data-scroll-id"),S.animateScroll(h,g),h=null,g=null)},I=function(t){if(!f()&&0===t.button&&!t.metaKey&&!t.ctrlKey&&(g=t.target.closest(a))&&"a"===g.tagName.toLowerCase()&&!t.target.closest(m.ignore)&&g.hostname===e.location.hostname&&g.pathname===e.location.pathname&&/#/.test(g.href)){var n;try{n=r(decodeURIComponent(g.hash))}catch(e){n=r(g.hash)}if("#"===n){t.preventDefault(),h=document.body;var o=h.id?h.id:"smooth-scroll-top";return h.setAttribute("data-scroll-id",o),h.id="",void(e.location.hash.substring(1)===o?E():e.location.hash=o)}h=document.querySelector(n),h&&(h.setAttribute("data-scroll-id",h.id),h.id="",g.hash===e.location.hash&&(t.preventDefault(),E()))}},O=function(e){b||(b=setTimeout((function(){b=null,v=s(p)}),66))};return S.destroy=function(){m&&(document.removeEventListener("click",I,!1),e.removeEventListener("resize",O,!1),S.cancelScroll(),m=null,h=null,g=null,p=null,v=null,b=null,y=null)},S.init=function(a){t&&(S.destroy(),m=o(n,a||{}),p=m.header?document.querySelector(m.header):null,v=s(p),document.addEventListener("click",I,!1),e.addEventListener("hashchange",E,!1),p&&e.addEventListener("resize",O,!1))},S.init(d),S}}));
</script>

<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function () {

    function anchorLink () {

      new window.SmoothScroll('a[href*="#"]', {
          ignore       : '[data-scroll-ignore]',
          header       : null,
          speed        : 500,
          offset       : 0,
          easing       : 'easeInOutCubic',
          customEasing : function (time) {
              // Function. Custom easing pattern
          },

          // Callback API
          before: function () {
              // Callback to run before scroll
          },
          after: function () {
              // Callback to run after scroll
          }
      });
    }

    anchorLink();

    function initBackground () {
      var imageId = (Math.floor(Math.random() * (5))+1),
          el = document.getElementById("bg-call4paper");
      const IMG_URL = `https://braziljs.org/wp-content/uploads/2018/02/icon-${imageId}-opt-avatar.svg`
      let img = new Image()
      img.onload = event => {
        el.style.backgroundImage = `url(${IMG_URL})`;
      }
      img.src = IMG_URL
    }

    setInterval(function() {
      initBackground();
    }, 2000)

    var input = document.getElementById("subscribe");

    // function newsletter () {
    //   var elm;

    //   elm = document.getElementsByClassName("subscribe")[0]
    //   elm.classList.add("actived");
    // };

    document.addEventListener("click", function (el) {
      elm = document.getElementsByClassName("subscribe")[0]

      if (el.target.type != "email" && el.target.type != "submit" && elm.classList.contains("actived")) {
        elm.classList.remove("actived")
      }
    });

    function aosAnimate () {
      if (window.innerWidth > 767) {
        window.AOS.init({
          offset: 200,
          duration: 600,
          easing: 'ease-in-sine',
          delay: 100,
        });
      }
    };

    aosAnimate();

    function Timer() {

      var YY = 2018;
      var MM = 08;
      var DD = 24;
      var HH = 00;
      var MI = 00;
      var SS = 00;


      var today = new Date();
      var further = new Date(YY, MM-1, DD, HH, MI, SS);

      var ss = parseInt((further - today) / 1000);
      var mm = parseInt(ss / 60);
      var hh = parseInt(mm / 60);
      var dd = parseInt(hh / 24);

      var missing = '';

      ss = ss - (mm * 60);
      mm = mm - (hh * 60);
      hh = hh - (dd * 24);

      day    = (dd && dd > 1) ? dd : "";
      hour   = (toString(hh).length) ? (hh < 10 ? "0" + hh : hh) : "";
      minut  = (toString(mm).length) ? (mm < 10 ? "0" + mm : mm) : "";
      second = (ss < 10 ? "0" + ss : ss);

      if (dd + hh + mm + ss > 0) {
        document.getElementById("dd").innerHTML = day;
        document.getElementById("hh").innerHTML = hour;
        document.getElementById("mm").innerHTML = minut;
        document.getElementById("ss").innerHTML = second;

        setTimeout(Timer, 1000);
      } else {
        document.getElementById("elm-timer").innerHTML = 'CHEGOU!!!!';
        // setTimeout(Timer, 1000);
      }
    }

    document.getElementsByTagName("body").onload = Timer();


    // window.addEventListener('resize', resize);
    // input.addEventListener('click', newsletter);
  });
</script>

<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>
