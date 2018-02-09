<?php
/*
Template Name: Conf 2018 Teaser
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- META -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <meta name="author" content="Nasc" />

  <!-- INFO -->
  <title>BrazilJS 2018</title>
  <link rel="shortcut icon" type="image/svg" href="assets/images/braziljs-logo.svg" />

  <!-- FACEBOOK -->
  <meta property="og:url" content="https://braziljs.org/" />
  <meta property="og:site_name" content="BrazilJS" />
  <meta property="og:image" content="images/braziljs-logo.svg" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="BrazilJS Conf 2018" />
  <meta property="og:description" content="BrazilJS Conf 2018 24 e 25 de agosto" />
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:locale:alternate" content="en_US" />

  <!-- TWITTER -->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="braziljs.org" />
  <meta name="twitter:title" content="BrazilJS Conf 2018" />
  <meta name="twitter:description" content="BrazilJS Conf 2018 24 e 25 de agosto." />
  <meta name="twitter:creator" content="Nasc" />
  <meta name="twitter:image:src" content="images/braziljs-logo.svg" />
  <meta name="twitter:image" content="images/braziljs-logo.svg" />

  <!-- <link rel="stylesheet" href="styles/reset.css" /> -->
  <!-- <link rel="stylesheet" href="styles/aos.css" media="screen and (min-width:768px)" /> -->

</head>
<body data-aos-easing="ease-out-back" data-aos-duration="1000" data-aos-delay="0">

  <style type="text/css">
    * {
        margin: 0;
        padding: 0;
        border: 0;
        -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
                box-sizing: border-box;
    }

    *:before,
    *:after {
        -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
                box-sizing: border-box;
    }

    html {
        font-size: 10px;
        font-family: 'Raleway', sans-serif;
          -webkit-text-size-adjust: 100%;
             -moz-text-size-adjust: 100%;
              -ms-text-size-adjust: 100%;
                  text-size-adjust: 100%;
    }

    body {
        margin: 0;
    }

    a {
        text-decoration: none;
        background-color: transparent;
    }

    a:active,
    a:hover {
        outline: 0;
    }

    ol,
    ul {
        list-style: none;
    }

    /* HTML5 RESET */

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    menu,
    nav,
    section,
    summary {
        display: block;
    }

    audio,
    canvas,
    progress,
    video {
        display: inline-block;
        vertical-align: baseline;
    }

    audio:not([controls]) {
        display: none;
        height: 0;
    }

    [hidden],
    template {
      display: none;
    }

    b,
    strong {
      font-weight: bold;
    }

    dfn {
      font-style: italic;
    }

    h1 {
      font-size: 2em;
      margin: 0.67em 0;
    }

    mark {
      background: #ff0;
      color: #000;
    }

    small {
      font-size: 80%;
    }

    sub,
    sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline;
    }

    sup {
      top: -0.5em;
    }

    sub {
      bottom: -0.25em;
    }

    img {
      border: 0;
    }

    svg:not(:root) {
      overflow: hidden;
    }

    figure {
      margin: 1em 40px;
    }

    hr {
        height: 0;
        -webkit-box-sizing: content-box;
           -moz-box-sizing: content-box;
            -ms-box-sizing: content-box;
                box-sizing: content-box;
    }

    pre {
        overflow: auto;
    }

    code,
    kbd,
    pre,
    samp {
      font-family: monospace, monospace;
      font-size: 1em;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      color: inherit;
      font: inherit;
      margin: 0;
    }

    button {
      overflow: visible;
    }

    button,
    select {
        text-transform: none;
    }

    button,
    html input[type="button"],
    input[type="reset"],
    input[type="submit"] {
        -webkit-appearance: button;
        cursor: pointer;
    }
    button[disabled],
    html input[disabled] {
        cursor: default;
    }
    button::-moz-focus-inner,
    input::-moz-focus-inner {
        border: 0;
        padding: 0;
    }
    input {
        line-height: normal;
    }
    input[type="checkbox"],
    input[type="radio"] {
        padding: 0;
        -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
                box-sizing: border-box;
    }
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        height: auto;
    }
    input[type="search"] {
        -webkit-appearance: textfield;
        -webkit-box-sizing: content-box;
           -moz-box-sizing: content-box;
            -ms-box-sizing: content-box;
                box-sizing: content-box;
    }
    input[type="search"]::-webkit-search-cancel-button,
    input[type="search"]::-webkit-search-decoration {
        -webkit-appearance: none;
    }
    fieldset {
        border: 1px solid #c0c0c0;
        margin: 0 2px;
        padding: 0.35em 0.625em 0.75em;
    }
    legend {
        border: 0;
        padding: 0;
    }
    textarea {
        overflow: auto;
    }
    optgroup {
        font-weight: bold;
    }
    table {
        border-collapse: collapse;
        border-spacing: 0;
    }
    td,
    th {
        padding: 0;
    }

    /* CLASS RESET */

    .clearfix {
        zoom: 1;
    }

    .clear {
        clear:both;
        display:block;
        overflow:hidden;
        visibility:hidden;
        width:0;
        height:0
    }

    .clearfix:before,
    .clearfix:after {
        content: "";
        display: block;
        height: 0;
        overflow: hidden;
    }

    .clearfix:after {
        clear: both;
    }
  </style>

  <style type="text/css" media="screen and (min-width:768px)">
    [data-aos][data-aos][data-aos-duration='50'],body[data-aos-duration='50'] [data-aos]{transition-duration:50ms}[data-aos][data-aos][data-aos-delay='50'],body[data-aos-delay='50'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='50'].aos-animate,body[data-aos-delay='50'] [data-aos].aos-animate{transition-delay:50ms}[data-aos][data-aos][data-aos-duration='100'],body[data-aos-duration='100'] [data-aos]{transition-duration:.1s}[data-aos][data-aos][data-aos-delay='100'],body[data-aos-delay='100'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='100'].aos-animate,body[data-aos-delay='100'] [data-aos].aos-animate{transition-delay:.1s}[data-aos][data-aos][data-aos-duration='150'],body[data-aos-duration='150'] [data-aos]{transition-duration:.15s}[data-aos][data-aos][data-aos-delay='150'],body[data-aos-delay='150'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='150'].aos-animate,body[data-aos-delay='150'] [data-aos].aos-animate{transition-delay:.15s}[data-aos][data-aos][data-aos-duration='200'],body[data-aos-duration='200'] [data-aos]{transition-duration:.2s}[data-aos][data-aos][data-aos-delay='200'],body[data-aos-delay='200'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='200'].aos-animate,body[data-aos-delay='200'] [data-aos].aos-animate{transition-delay:.2s}[data-aos][data-aos][data-aos-duration='250'],body[data-aos-duration='250'] [data-aos]{transition-duration:.25s}[data-aos][data-aos][data-aos-delay='250'],body[data-aos-delay='250'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='250'].aos-animate,body[data-aos-delay='250'] [data-aos].aos-animate{transition-delay:.25s}[data-aos][data-aos][data-aos-duration='300'],body[data-aos-duration='300'] [data-aos]{transition-duration:.3s}[data-aos][data-aos][data-aos-delay='300'],body[data-aos-delay='300'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='300'].aos-animate,body[data-aos-delay='300'] [data-aos].aos-animate{transition-delay:.3s}[data-aos][data-aos][data-aos-duration='350'],body[data-aos-duration='350'] [data-aos]{transition-duration:.35s}[data-aos][data-aos][data-aos-delay='350'],body[data-aos-delay='350'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='350'].aos-animate,body[data-aos-delay='350'] [data-aos].aos-animate{transition-delay:.35s}[data-aos][data-aos][data-aos-duration='400'],body[data-aos-duration='400'] [data-aos]{transition-duration:.4s}[data-aos][data-aos][data-aos-delay='400'],body[data-aos-delay='400'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='400'].aos-animate,body[data-aos-delay='400'] [data-aos].aos-animate{transition-delay:.4s}[data-aos][data-aos][data-aos-duration='450'],body[data-aos-duration='450'] [data-aos]{transition-duration:.45s}[data-aos][data-aos][data-aos-delay='450'],body[data-aos-delay='450'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='450'].aos-animate,body[data-aos-delay='450'] [data-aos].aos-animate{transition-delay:.45s}[data-aos][data-aos][data-aos-duration='500'],body[data-aos-duration='500'] [data-aos]{transition-duration:.5s}[data-aos][data-aos][data-aos-delay='500'],body[data-aos-delay='500'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='500'].aos-animate,body[data-aos-delay='500'] [data-aos].aos-animate{transition-delay:.5s}[data-aos][data-aos][data-aos-duration='550'],body[data-aos-duration='550'] [data-aos]{transition-duration:.55s}[data-aos][data-aos][data-aos-delay='550'],body[data-aos-delay='550'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='550'].aos-animate,body[data-aos-delay='550'] [data-aos].aos-animate{transition-delay:.55s}[data-aos][data-aos][data-aos-duration='600'],body[data-aos-duration='600'] [data-aos]{transition-duration:.6s}[data-aos][data-aos][data-aos-delay='600'],body[data-aos-delay='600'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='600'].aos-animate,body[data-aos-delay='600'] [data-aos].aos-animate{transition-delay:.6s}[data-aos][data-aos][data-aos-duration='650'],body[data-aos-duration='650'] [data-aos]{transition-duration:.65s}[data-aos][data-aos][data-aos-delay='650'],body[data-aos-delay='650'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='650'].aos-animate,body[data-aos-delay='650'] [data-aos].aos-animate{transition-delay:.65s}[data-aos][data-aos][data-aos-duration='700'],body[data-aos-duration='700'] [data-aos]{transition-duration:.7s}[data-aos][data-aos][data-aos-delay='700'],body[data-aos-delay='700'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='700'].aos-animate,body[data-aos-delay='700'] [data-aos].aos-animate{transition-delay:.7s}[data-aos][data-aos][data-aos-duration='750'],body[data-aos-duration='750'] [data-aos]{transition-duration:.75s}[data-aos][data-aos][data-aos-delay='750'],body[data-aos-delay='750'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='750'].aos-animate,body[data-aos-delay='750'] [data-aos].aos-animate{transition-delay:.75s}[data-aos][data-aos][data-aos-duration='800'],body[data-aos-duration='800'] [data-aos]{transition-duration:.8s}[data-aos][data-aos][data-aos-delay='800'],body[data-aos-delay='800'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='800'].aos-animate,body[data-aos-delay='800'] [data-aos].aos-animate{transition-delay:.8s}[data-aos][data-aos][data-aos-duration='850'],body[data-aos-duration='850'] [data-aos]{transition-duration:.85s}[data-aos][data-aos][data-aos-delay='850'],body[data-aos-delay='850'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='850'].aos-animate,body[data-aos-delay='850'] [data-aos].aos-animate{transition-delay:.85s}[data-aos][data-aos][data-aos-duration='900'],body[data-aos-duration='900'] [data-aos]{transition-duration:.9s}[data-aos][data-aos][data-aos-delay='900'],body[data-aos-delay='900'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='900'].aos-animate,body[data-aos-delay='900'] [data-aos].aos-animate{transition-delay:.9s}[data-aos][data-aos][data-aos-duration='950'],body[data-aos-duration='950'] [data-aos]{transition-duration:.95s}[data-aos][data-aos][data-aos-delay='950'],body[data-aos-delay='950'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='950'].aos-animate,body[data-aos-delay='950'] [data-aos].aos-animate{transition-delay:.95s}[data-aos][data-aos][data-aos-duration='1000'],body[data-aos-duration='1000'] [data-aos]{transition-duration:1s}[data-aos][data-aos][data-aos-delay='1000'],body[data-aos-delay='1000'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1000'].aos-animate,body[data-aos-delay='1000'] [data-aos].aos-animate{transition-delay:1s}[data-aos][data-aos][data-aos-duration='1050'],body[data-aos-duration='1050'] [data-aos]{transition-duration:1.05s}[data-aos][data-aos][data-aos-delay='1050'],body[data-aos-delay='1050'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1050'].aos-animate,body[data-aos-delay='1050'] [data-aos].aos-animate{transition-delay:1.05s}[data-aos][data-aos][data-aos-duration='1100'],body[data-aos-duration='1100'] [data-aos]{transition-duration:1.1s}[data-aos][data-aos][data-aos-delay='1100'],body[data-aos-delay='1100'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1100'].aos-animate,body[data-aos-delay='1100'] [data-aos].aos-animate{transition-delay:1.1s}[data-aos][data-aos][data-aos-duration='1150'],body[data-aos-duration='1150'] [data-aos]{transition-duration:1.15s}[data-aos][data-aos][data-aos-delay='1150'],body[data-aos-delay='1150'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1150'].aos-animate,body[data-aos-delay='1150'] [data-aos].aos-animate{transition-delay:1.15s}[data-aos][data-aos][data-aos-duration='1200'],body[data-aos-duration='1200'] [data-aos]{transition-duration:1.2s}[data-aos][data-aos][data-aos-delay='1200'],body[data-aos-delay='1200'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1200'].aos-animate,body[data-aos-delay='1200'] [data-aos].aos-animate{transition-delay:1.2s}[data-aos][data-aos][data-aos-duration='1250'],body[data-aos-duration='1250'] [data-aos]{transition-duration:1.25s}[data-aos][data-aos][data-aos-delay='1250'],body[data-aos-delay='1250'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1250'].aos-animate,body[data-aos-delay='1250'] [data-aos].aos-animate{transition-delay:1.25s}[data-aos][data-aos][data-aos-duration='1300'],body[data-aos-duration='1300'] [data-aos]{transition-duration:1.3s}[data-aos][data-aos][data-aos-delay='1300'],body[data-aos-delay='1300'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1300'].aos-animate,body[data-aos-delay='1300'] [data-aos].aos-animate{transition-delay:1.3s}[data-aos][data-aos][data-aos-duration='1350'],body[data-aos-duration='1350'] [data-aos]{transition-duration:1.35s}[data-aos][data-aos][data-aos-delay='1350'],body[data-aos-delay='1350'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1350'].aos-animate,body[data-aos-delay='1350'] [data-aos].aos-animate{transition-delay:1.35s}[data-aos][data-aos][data-aos-duration='1400'],body[data-aos-duration='1400'] [data-aos]{transition-duration:1.4s}[data-aos][data-aos][data-aos-delay='1400'],body[data-aos-delay='1400'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1400'].aos-animate,body[data-aos-delay='1400'] [data-aos].aos-animate{transition-delay:1.4s}[data-aos][data-aos][data-aos-duration='1450'],body[data-aos-duration='1450'] [data-aos]{transition-duration:1.45s}[data-aos][data-aos][data-aos-delay='1450'],body[data-aos-delay='1450'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1450'].aos-animate,body[data-aos-delay='1450'] [data-aos].aos-animate{transition-delay:1.45s}[data-aos][data-aos][data-aos-duration='1500'],body[data-aos-duration='1500'] [data-aos]{transition-duration:1.5s}[data-aos][data-aos][data-aos-delay='1500'],body[data-aos-delay='1500'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1500'].aos-animate,body[data-aos-delay='1500'] [data-aos].aos-animate{transition-delay:1.5s}[data-aos][data-aos][data-aos-duration='1550'],body[data-aos-duration='1550'] [data-aos]{transition-duration:1.55s}[data-aos][data-aos][data-aos-delay='1550'],body[data-aos-delay='1550'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1550'].aos-animate,body[data-aos-delay='1550'] [data-aos].aos-animate{transition-delay:1.55s}[data-aos][data-aos][data-aos-duration='1600'],body[data-aos-duration='1600'] [data-aos]{transition-duration:1.6s}[data-aos][data-aos][data-aos-delay='1600'],body[data-aos-delay='1600'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1600'].aos-animate,body[data-aos-delay='1600'] [data-aos].aos-animate{transition-delay:1.6s}[data-aos][data-aos][data-aos-duration='1650'],body[data-aos-duration='1650'] [data-aos]{transition-duration:1.65s}[data-aos][data-aos][data-aos-delay='1650'],body[data-aos-delay='1650'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1650'].aos-animate,body[data-aos-delay='1650'] [data-aos].aos-animate{transition-delay:1.65s}[data-aos][data-aos][data-aos-duration='1700'],body[data-aos-duration='1700'] [data-aos]{transition-duration:1.7s}[data-aos][data-aos][data-aos-delay='1700'],body[data-aos-delay='1700'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1700'].aos-animate,body[data-aos-delay='1700'] [data-aos].aos-animate{transition-delay:1.7s}[data-aos][data-aos][data-aos-duration='1750'],body[data-aos-duration='1750'] [data-aos]{transition-duration:1.75s}[data-aos][data-aos][data-aos-delay='1750'],body[data-aos-delay='1750'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1750'].aos-animate,body[data-aos-delay='1750'] [data-aos].aos-animate{transition-delay:1.75s}[data-aos][data-aos][data-aos-duration='1800'],body[data-aos-duration='1800'] [data-aos]{transition-duration:1.8s}[data-aos][data-aos][data-aos-delay='1800'],body[data-aos-delay='1800'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1800'].aos-animate,body[data-aos-delay='1800'] [data-aos].aos-animate{transition-delay:1.8s}[data-aos][data-aos][data-aos-duration='1850'],body[data-aos-duration='1850'] [data-aos]{transition-duration:1.85s}[data-aos][data-aos][data-aos-delay='1850'],body[data-aos-delay='1850'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1850'].aos-animate,body[data-aos-delay='1850'] [data-aos].aos-animate{transition-delay:1.85s}[data-aos][data-aos][data-aos-duration='1900'],body[data-aos-duration='1900'] [data-aos]{transition-duration:1.9s}[data-aos][data-aos][data-aos-delay='1900'],body[data-aos-delay='1900'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1900'].aos-animate,body[data-aos-delay='1900'] [data-aos].aos-animate{transition-delay:1.9s}[data-aos][data-aos][data-aos-duration='1950'],body[data-aos-duration='1950'] [data-aos]{transition-duration:1.95s}[data-aos][data-aos][data-aos-delay='1950'],body[data-aos-delay='1950'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='1950'].aos-animate,body[data-aos-delay='1950'] [data-aos].aos-animate{transition-delay:1.95s}[data-aos][data-aos][data-aos-duration='2000'],body[data-aos-duration='2000'] [data-aos]{transition-duration:2s}[data-aos][data-aos][data-aos-delay='2000'],body[data-aos-delay='2000'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2000'].aos-animate,body[data-aos-delay='2000'] [data-aos].aos-animate{transition-delay:2s}[data-aos][data-aos][data-aos-duration='2050'],body[data-aos-duration='2050'] [data-aos]{transition-duration:2.05s}[data-aos][data-aos][data-aos-delay='2050'],body[data-aos-delay='2050'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2050'].aos-animate,body[data-aos-delay='2050'] [data-aos].aos-animate{transition-delay:2.05s}[data-aos][data-aos][data-aos-duration='2100'],body[data-aos-duration='2100'] [data-aos]{transition-duration:2.1s}[data-aos][data-aos][data-aos-delay='2100'],body[data-aos-delay='2100'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2100'].aos-animate,body[data-aos-delay='2100'] [data-aos].aos-animate{transition-delay:2.1s}[data-aos][data-aos][data-aos-duration='2150'],body[data-aos-duration='2150'] [data-aos]{transition-duration:2.15s}[data-aos][data-aos][data-aos-delay='2150'],body[data-aos-delay='2150'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2150'].aos-animate,body[data-aos-delay='2150'] [data-aos].aos-animate{transition-delay:2.15s}[data-aos][data-aos][data-aos-duration='2200'],body[data-aos-duration='2200'] [data-aos]{transition-duration:2.2s}[data-aos][data-aos][data-aos-delay='2200'],body[data-aos-delay='2200'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2200'].aos-animate,body[data-aos-delay='2200'] [data-aos].aos-animate{transition-delay:2.2s}[data-aos][data-aos][data-aos-duration='2250'],body[data-aos-duration='2250'] [data-aos]{transition-duration:2.25s}[data-aos][data-aos][data-aos-delay='2250'],body[data-aos-delay='2250'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2250'].aos-animate,body[data-aos-delay='2250'] [data-aos].aos-animate{transition-delay:2.25s}[data-aos][data-aos][data-aos-duration='2300'],body[data-aos-duration='2300'] [data-aos]{transition-duration:2.3s}[data-aos][data-aos][data-aos-delay='2300'],body[data-aos-delay='2300'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2300'].aos-animate,body[data-aos-delay='2300'] [data-aos].aos-animate{transition-delay:2.3s}[data-aos][data-aos][data-aos-duration='2350'],body[data-aos-duration='2350'] [data-aos]{transition-duration:2.35s}[data-aos][data-aos][data-aos-delay='2350'],body[data-aos-delay='2350'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2350'].aos-animate,body[data-aos-delay='2350'] [data-aos].aos-animate{transition-delay:2.35s}[data-aos][data-aos][data-aos-duration='2400'],body[data-aos-duration='2400'] [data-aos]{transition-duration:2.4s}[data-aos][data-aos][data-aos-delay='2400'],body[data-aos-delay='2400'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2400'].aos-animate,body[data-aos-delay='2400'] [data-aos].aos-animate{transition-delay:2.4s}[data-aos][data-aos][data-aos-duration='2450'],body[data-aos-duration='2450'] [data-aos]{transition-duration:2.45s}[data-aos][data-aos][data-aos-delay='2450'],body[data-aos-delay='2450'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2450'].aos-animate,body[data-aos-delay='2450'] [data-aos].aos-animate{transition-delay:2.45s}[data-aos][data-aos][data-aos-duration='2500'],body[data-aos-duration='2500'] [data-aos]{transition-duration:2.5s}[data-aos][data-aos][data-aos-delay='2500'],body[data-aos-delay='2500'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2500'].aos-animate,body[data-aos-delay='2500'] [data-aos].aos-animate{transition-delay:2.5s}[data-aos][data-aos][data-aos-duration='2550'],body[data-aos-duration='2550'] [data-aos]{transition-duration:2.55s}[data-aos][data-aos][data-aos-delay='2550'],body[data-aos-delay='2550'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2550'].aos-animate,body[data-aos-delay='2550'] [data-aos].aos-animate{transition-delay:2.55s}[data-aos][data-aos][data-aos-duration='2600'],body[data-aos-duration='2600'] [data-aos]{transition-duration:2.6s}[data-aos][data-aos][data-aos-delay='2600'],body[data-aos-delay='2600'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2600'].aos-animate,body[data-aos-delay='2600'] [data-aos].aos-animate{transition-delay:2.6s}[data-aos][data-aos][data-aos-duration='2650'],body[data-aos-duration='2650'] [data-aos]{transition-duration:2.65s}[data-aos][data-aos][data-aos-delay='2650'],body[data-aos-delay='2650'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2650'].aos-animate,body[data-aos-delay='2650'] [data-aos].aos-animate{transition-delay:2.65s}[data-aos][data-aos][data-aos-duration='2700'],body[data-aos-duration='2700'] [data-aos]{transition-duration:2.7s}[data-aos][data-aos][data-aos-delay='2700'],body[data-aos-delay='2700'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2700'].aos-animate,body[data-aos-delay='2700'] [data-aos].aos-animate{transition-delay:2.7s}[data-aos][data-aos][data-aos-duration='2750'],body[data-aos-duration='2750'] [data-aos]{transition-duration:2.75s}[data-aos][data-aos][data-aos-delay='2750'],body[data-aos-delay='2750'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2750'].aos-animate,body[data-aos-delay='2750'] [data-aos].aos-animate{transition-delay:2.75s}[data-aos][data-aos][data-aos-duration='2800'],body[data-aos-duration='2800'] [data-aos]{transition-duration:2.8s}[data-aos][data-aos][data-aos-delay='2800'],body[data-aos-delay='2800'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2800'].aos-animate,body[data-aos-delay='2800'] [data-aos].aos-animate{transition-delay:2.8s}[data-aos][data-aos][data-aos-duration='2850'],body[data-aos-duration='2850'] [data-aos]{transition-duration:2.85s}[data-aos][data-aos][data-aos-delay='2850'],body[data-aos-delay='2850'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2850'].aos-animate,body[data-aos-delay='2850'] [data-aos].aos-animate{transition-delay:2.85s}[data-aos][data-aos][data-aos-duration='2900'],body[data-aos-duration='2900'] [data-aos]{transition-duration:2.9s}[data-aos][data-aos][data-aos-delay='2900'],body[data-aos-delay='2900'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2900'].aos-animate,body[data-aos-delay='2900'] [data-aos].aos-animate{transition-delay:2.9s}[data-aos][data-aos][data-aos-duration='2950'],body[data-aos-duration='2950'] [data-aos]{transition-duration:2.95s}[data-aos][data-aos][data-aos-delay='2950'],body[data-aos-delay='2950'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='2950'].aos-animate,body[data-aos-delay='2950'] [data-aos].aos-animate{transition-delay:2.95s}[data-aos][data-aos][data-aos-duration='3000'],body[data-aos-duration='3000'] [data-aos]{transition-duration:3s}[data-aos][data-aos][data-aos-delay='3000'],body[data-aos-delay='3000'] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay='3000'].aos-animate,body[data-aos-delay='3000'] [data-aos].aos-animate{transition-delay:3s}[data-aos][data-aos][data-aos-easing=linear],body[data-aos-easing=linear] [data-aos]{transition-timing-function:cubic-bezier(.25,.25,.75,.75)}[data-aos][data-aos][data-aos-easing=ease],body[data-aos-easing=ease] [data-aos]{transition-timing-function:ease}[data-aos][data-aos][data-aos-easing=ease-in],body[data-aos-easing=ease-in] [data-aos]{transition-timing-function:ease-in}[data-aos][data-aos][data-aos-easing=ease-out],body[data-aos-easing=ease-out] [data-aos]{transition-timing-function:ease-out}[data-aos][data-aos][data-aos-easing=ease-in-out],body[data-aos-easing=ease-in-out] [data-aos]{transition-timing-function:ease-in-out}[data-aos][data-aos][data-aos-easing=ease-in-back],body[data-aos-easing=ease-in-back] [data-aos]{transition-timing-function:cubic-bezier(.6,-.28,.735,.045)}[data-aos][data-aos][data-aos-easing=ease-out-back],body[data-aos-easing=ease-out-back] [data-aos]{transition-timing-function:cubic-bezier(.175,.885,.32,1.275)}[data-aos][data-aos][data-aos-easing=ease-in-out-back],body[data-aos-easing=ease-in-out-back] [data-aos]{transition-timing-function:cubic-bezier(.68,-.55,.265,1.55)}[data-aos][data-aos][data-aos-easing=ease-in-sine],body[data-aos-easing=ease-in-sine] [data-aos]{transition-timing-function:cubic-bezier(.47,0,.745,.715)}[data-aos][data-aos][data-aos-easing=ease-out-sine],body[data-aos-easing=ease-out-sine] [data-aos]{transition-timing-function:cubic-bezier(.39,.575,.565,1)}[data-aos][data-aos][data-aos-easing=ease-in-out-sine],body[data-aos-easing=ease-in-out-sine] [data-aos]{transition-timing-function:cubic-bezier(.445,.05,.55,.95)}[data-aos][data-aos][data-aos-easing=ease-in-quad],body[data-aos-easing=ease-in-quad] [data-aos]{transition-timing-function:cubic-bezier(.55,.085,.68,.53)}[data-aos][data-aos][data-aos-easing=ease-out-quad],body[data-aos-easing=ease-out-quad] [data-aos]{transition-timing-function:cubic-bezier(.25,.46,.45,.94)}[data-aos][data-aos][data-aos-easing=ease-in-out-quad],body[data-aos-easing=ease-in-out-quad] [data-aos]{transition-timing-function:cubic-bezier(.455,.03,.515,.955)}[data-aos][data-aos][data-aos-easing=ease-in-cubic],body[data-aos-easing=ease-in-cubic] [data-aos]{transition-timing-function:cubic-bezier(.55,.085,.68,.53)}[data-aos][data-aos][data-aos-easing=ease-out-cubic],body[data-aos-easing=ease-out-cubic] [data-aos]{transition-timing-function:cubic-bezier(.25,.46,.45,.94)}[data-aos][data-aos][data-aos-easing=ease-in-out-cubic],body[data-aos-easing=ease-in-out-cubic] [data-aos]{transition-timing-function:cubic-bezier(.455,.03,.515,.955)}[data-aos][data-aos][data-aos-easing=ease-in-quart],body[data-aos-easing=ease-in-quart] [data-aos]{transition-timing-function:cubic-bezier(.55,.085,.68,.53)}[data-aos][data-aos][data-aos-easing=ease-out-quart],body[data-aos-easing=ease-out-quart] [data-aos]{transition-timing-function:cubic-bezier(.25,.46,.45,.94)}[data-aos][data-aos][data-aos-easing=ease-in-out-quart],body[data-aos-easing=ease-in-out-quart] [data-aos]{transition-timing-function:cubic-bezier(.455,.03,.515,.955)}[data-aos^=fade][data-aos^=fade]{opacity:0;transition-property:opacity,transform}[data-aos^=fade][data-aos^=fade].aos-animate{opacity:1;transform:translate(0)}[data-aos=fade-up]{transform:translateY(100px)}[data-aos=fade-down]{transform:translateY(-100px)}[data-aos=fade-right]{transform:translate(-100px)}[data-aos=fade-left]{transform:translate(100px)}[data-aos=fade-up-right]{transform:translate(-100px,100px)}[data-aos=fade-up-left]{transform:translate(100px,100px)}[data-aos=fade-down-right]{transform:translate(-100px,-100px)}[data-aos=fade-down-left]{transform:translate(100px,-100px)}[data-aos^=zoom][data-aos^=zoom]{opacity:0;transition-property:opacity,transform}[data-aos^=zoom][data-aos^=zoom].aos-animate{opacity:1;transform:translate(0) scale(1)}[data-aos=zoom-in]{transform:scale(.6)}[data-aos=zoom-in-up]{transform:translateY(100px) scale(.6)}[data-aos=zoom-in-down]{transform:translateY(-100px) scale(.6)}[data-aos=zoom-in-right]{transform:translate(-100px) scale(.6)}[data-aos=zoom-in-left]{transform:translate(100px) scale(.6)}[data-aos=zoom-out]{transform:scale(1.2)}[data-aos=zoom-out-up]{transform:translateY(100px) scale(1.2)}[data-aos=zoom-out-down]{transform:translateY(-100px) scale(1.2)}[data-aos=zoom-out-right]{transform:translate(-100px) scale(1.2)}[data-aos=zoom-out-left]{transform:translate(100px) scale(1.2)}[data-aos^=slide][data-aos^=slide]{transition-property:transform}[data-aos^=slide][data-aos^=slide].aos-animate{transform:translate(0)}[data-aos=slide-up]{transform:translateY(100%)}[data-aos=slide-down]{transform:translateY(-100%)}[data-aos=slide-right]{transform:translateX(-100%)}[data-aos=slide-left]{transform:translateX(100%)}[data-aos^=flip][data-aos^=flip]{backface-visibility:hidden;transition-property:transform}[data-aos=flip-left]{transform:perspective(2500px) rotateY(-100deg)}[data-aos=flip-left].aos-animate{transform:perspective(2500px) rotateY(0)}[data-aos=flip-right]{transform:perspective(2500px) rotateY(100deg)}[data-aos=flip-right].aos-animate{transform:perspective(2500px) rotateY(0)}[data-aos=flip-up]{transform:perspective(2500px) rotateX(-100deg)}[data-aos=flip-up].aos-animate{transform:perspective(2500px) rotateX(0)}[data-aos=flip-down]{transform:perspective(2500px) rotateX(100deg)}[data-aos=flip-down].aos-animate{transform:perspective(2500px) rotateX(0)}
    /*# sourceMappingURL=aos.css.map*/
  </style>

  <!-- <link rel="stylesheet" href="styles/main.css" /> -->

  <style type="text/css">
    @import url("https://fonts.googleapis.com/css?family=Julius+Sans+One");.center{display:block;margin:0 auto}.absolute-center{left:0;right:0;margin:0 auto;position:absolute}.bounce{-webkit-animation:bounce 4s 2s infinite;-moz-animation:bounce 4s 2s infinite;animation:bounce 4s 2s infinite}.scale-shadow{-webkit-animation:scale-shadow 4s infinite;-moz-animation:scale-shadow 4s infinite;animation:scale-shadow 4s infinite}@-webkit-keyframes scale-shadow{0%, 10%, 25%, 40%, 50%{transform:scale(1)}20%{transform:scale(1.05)}30%{transform:scale(1.05)}}@-webkit-keyframes bounce{0%, 10%, 25%, 40%, 50%{-webkit-transform:translateY(0);transform:translateY(0)}20%{-webkit-transform:translateY(-10px);transform:translateY(-10px)}30%{-webkit-transform:translateY(-5px);transform:translateY(-5px)}}@keyframes bounce{0%, 20%, 50%, 80%, 100%{-webkit-transform:translateY(0);transform:translateY(0)}40%{-webkit-transform:translateY(-10px);transform:translateY(-10px)}60%{-webkit-transform:translateY(-5px);transform:translateY(-5px)}}html{height:100%;font-family:'Julius Sans One', sans-serif}body{font-size:10px;background:#000}body #flipped{content:"";opacity:.2;width:100%;height:100%;position:absolute;-webkit-transition:all .7s ease-out;-moz-transition:all .7s ease-out;-ms-transition:all .7s ease-out;transition:all .7s ease-out;background-size:cover;background-repeat:no-repeat;background-position:center;background-attachment:unset;background-image:url("https://braziljs.org/wp-content/uploads/2018/02/1-opt.jpg")}body main{overflow:hidden;position:relative}.viewport{width:100%;padding:15px 0;min-height:980px}.content{margin:0 auto;max-width:1320px;position:relative}#content-page-main{color:#fff;text-align:center}#content-page-main>*{text-shadow:-2px 1px 5px #000}#content-page-main .conf-teaser{padding:0 15px;display:flex;height:100%;flex-direction:column;justify-content:space-between}#content-page-main .conf-teaser .braziljs{position:relative;margin-bottom:30px}#content-page-main .conf-teaser .braziljs .braziljs-logo{width:200px;height:150px;display:inline-block;background-size:auto;background-repeat:no-repeat;background-position:center;background-attachment:unset;background-image:url("https://braziljs.org/wp-content/themes/braziljs/assets/img/logos/braziljs-00508dcfc4.svg")}#content-page-main .conf-teaser .braziljs .lead{padding:15px 0;font-size:2rem}#content-page-main .conf-teaser .braziljs .lead .desc{font-size:2rem;max-width:600px;line-height:1.5;margin:10px auto}#content-page-main .conf-teaser .braziljs .lead .desc span{color:#ffdd16;font-weight:700;font-size:2.5rem}#content-page-main .conf-teaser .braziljs .lead .event-date{display:flex;margin:20px 0;flex-direction:row;justify-content:center}#content-page-main .conf-teaser .braziljs .lead .event-date .date{color:#000;width:120px;height:120px;margin:0 20px;display:block;background:#fff;font-weight:700;font-size:5rem;text-shadow:none;border-radius:5px;position:relative;box-shadow:-10px 10px 25px -5px rgba(0,0,0,0.75)}#content-page-main .conf-teaser .braziljs .lead .event-date .date p{color:#fff;display:block;padding:5px 0;font-size:3rem;font-weight:700;background:#a50c0c;border-top-left-radius:4px;border-top-right-radius:4px}#content-page-main .conf-teaser .braziljs .lead .event-date .date .day{font-size:4rem}#content-page-main .conf-teaser .braziljs .lead .event-date .date .weeky{display:block;font-size:1.4rem}#content-page-main .conf-teaser .braziljs .lead .event-date .date:after,#content-page-main .conf-teaser .braziljs .lead .event-date .date:before{content:"";top:35px;width:5px;height:15px;background:#fff;position:absolute;display:inline-block;border-radius:5px;box-shadow:0 1px 15px #000}#content-page-main .conf-teaser .braziljs .lead .event-date .date:before{left:7px}#content-page-main .conf-teaser .braziljs .lead .event-date .date:after{right:7px}#content-page-main .conf-teaser .braziljs .lead .address{margin-top:50px}#content-page-main .conf-teaser .timer{margin-bottom:30px}#content-page-main .conf-teaser .timer .timer-itens{width:100%;color:#fff;display:flex;margin:0 auto;position:relative;justify-content:center}#content-page-main .conf-teaser .timer>*{-webkit-transition:all .2s ease-in;-moz-transition:all .2s ease-in;-ms-transition:all .2s ease-in;transition:all .2s ease-in}#content-page-main .conf-teaser .timer .wrapper{width:120px;height:120px;margin:0 10px;font-size:5rem;font-weight:700;position:relative;border-bottom:1px solid #fff3}#content-page-main .conf-teaser .timer .wrapper #dd,#content-page-main .conf-teaser .timer .wrapper #hh,#content-page-main .conf-teaser .timer .wrapper #mm,#content-page-main .conf-teaser .timer .wrapper #ss{display:block}#content-page-main .conf-teaser .timer .wrapper .period{font-size:2rem}#content-page-main .conf-teaser .timer .wrapper .dot{top:-15px;right:-20px;font-size:8rem;position:absolute}#content-page-main .conf-teaser .newsletter{margin-bottom:30px}#content-page-main .conf-teaser .newsletter .subscribe{width:165px;height:64px;margin:auto;padding:10px;max-width:400px;border:1px solid;border-radius:3px;position:relative;-webkit-transition:all .2s ease-in;-moz-transition:all .2s ease-in;-ms-transition:all .2s ease-in;transition:all .2s ease-in}#content-page-main .conf-teaser .newsletter .subscribe:hover{width:465px}#content-page-main .conf-teaser .newsletter .subscribe:hover input{width:225px}#content-page-main .conf-teaser .newsletter .subscribe input{width:0;left:10px;height:43px;outline:none;font-weight:700;box-shadow:none;font-size:1.5rem;font-style:italic;position:absolute;background-color:transparent}#content-page-main .conf-teaser .newsletter .subscribe button{right:10px;color:#000;width:143px;height:42px;font-weight:700;font-size:1.8rem;border-radius:3px;position:absolute;-webkit-transition:all .2s ease-in;-moz-transition:all .2s ease-in;-ms-transition:all .2s ease-in;transition:all .2s ease-in;background-color:#ffdd16}#content-page-main .conf-teaser .newsletter .subscribe button:hover{opacity:.5}#content-page-main .conf-teaser .newsletter .subscribe.actived{width:465px}#content-page-main .conf-teaser .newsletter .subscribe.actived input{width:225px}#content-page-main .conf-teaser .social-networks{margin-bottom:30px}#content-page-main .conf-teaser .social-networks .social-list-network{display:flex;flex-direction:row;justify-content:center}#content-page-main .conf-teaser .social-networks .social-list-network .social-networks__item{margin:0 10px;margin-right:5px;vertical-align:top;display:inline-block}#content-page-main .conf-teaser .social-networks .social-list-network .social-networks__item .social-networks__anchor{width:40px;height:40px;display:flex;border-radius:50%;-webkit-transition:all .2s ease-in;-moz-transition:all .2s ease-in;-ms-transition:all .2s ease-in;transition:all .2s ease-in;align-items:center;display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;-ms-flex-pack:center;-ms-flex-align:center;background-color:#000;justify-content:center;-webkit-box-pack:center;-webkit-box-align:center;border:2px solid #ffdd16;-webkit-border-radius:50%;-webkit-align-items:center;-webkit-justify-content:center}#content-page-main .conf-teaser .social-networks .social-list-network .social-networks__item .social-networks__anchor:hover{opacity:.5}#content-page-main .conf-teaser .social-networks .social-list-network .social-networks__item .social-networks__anchor.twitter{background-size:auto;background-repeat:no-repeat;background-position:center;background-attachment:unset;background-image:url("https://braziljs.org/wp-content/themes/braziljs/assets/img/social-networks/icon-twitter-67da4a8fd3.svg")}#content-page-main .conf-teaser .social-networks .social-list-network .social-networks__item .social-networks__anchor.facebook{background-size:auto;background-repeat:no-repeat;background-position:center;background-attachment:unset;background-image:url("https://braziljs.org/wp-content/themes/braziljs/assets/img/social-networks/icon-facebook-4dc5ea14b7.svg")}#content-page-main .conf-teaser .social-networks .social-list-network .social-networks__item .social-networks__anchor.github{background-size:auto;background-repeat:no-repeat;background-position:center;background-attachment:unset;background-image:url("https://braziljs.org/wp-content/themes/braziljs/assets/img/social-networks/icon-github-ace65d373d.svg")}#content-page-main .conf-teaser .social-networks .social-list-network .social-networks__item .social-networks__anchor.youtube{background-size:auto;background-repeat:no-repeat;background-position:center;background-attachment:unset;background-image:url("https://braziljs.org/wp-content/themes/braziljs/assets/img/social-networks/icon-youtube-05e9e5620e.svg")}#content-page-main .conf-teaser .social-networks .social-list-network .social-networks__item .social-networks__anchor.instagram{background-size:auto;background-repeat:no-repeat;background-position:center;background-attachment:unset;background-image:url("https://braziljs.org/wp-content/themes/braziljs/assets/img/social-networks/icon-instagram-063e94bf2c.svg")}#content-page-main .conf-teaser .social-networks .social-list-network .social-networks__item .social-networks__anchor.slack{background-size:auto;background-repeat:no-repeat;background-position:center;background-attachment:unset;background-image:url("https://braziljs.org/wp-content/themes/braziljs/assets/img/social-networks/icon-slack-23e8a48a40.svg")}#content-page-main .conf-teaser .nasc{position:relative}#content-page-main .conf-teaser .nasc .nasc-logo{height:80px;display:block;background-size:auto;background-repeat:no-repeat;background-position:center;background-attachment:unset;background-image:url("nasc-logo.png")}#content-page-main .conf-teaser .nasc .desc{font-weight:700;font-size:1.4rem;font-style:italic}#content-page-main .conf-teaser .nasc .desc p:after,#content-page-main .conf-teaser .nasc .desc p:before{content:"";color:#fff;width:30px;margin:5px 10px;display:inline-block;border-bottom:1px solid #fff}.powered{color:#fff;width:100%;padding:0 10px;position:relative}.powered .content-itens{display:flex;flex-direction:row}.powered .content-itens .made{right:0;font-weight:700;line-height:22px;position:absolute;text-shadow:-1px 1px 1px #222}.powered .content-itens .brjs{font-weight:700;line-height:20px}.powered .content-itens .brjs a{font-size:1.3rem}.powered a{color:#fff;font-size:1.1rem}::-webkit-scrollbar{width:5px;background:rgba(231,231,231,0.4)}@media screen and (max-width: 639px){#content-page-main .conf-teaser .timer .wrapper{width:auto;height:80px;font-size:3rem}#content-page-main .conf-teaser .timer .wrapper .period{font-size:1.4rem}#content-page-main .conf-teaser .timer .wrapper .dot{top:-10px;right:-17px;font-size:5rem}#content-page-main .conf-teaser .newsletter .subscribe:hover,#content-page-main .conf-teaser .newsletter .subscribe.actived{width:100%;height:auto}#content-page-main .conf-teaser .newsletter .subscribe:hover input,#content-page-main .conf-teaser .newsletter .subscribe.actived input{left:auto;width:100%;position:relative}#content-page-main .conf-teaser .newsletter .subscribe:hover button,#content-page-main .conf-teaser .newsletter .subscribe.actived button{width:100%;right:auto;display:block;position:relative}#content-page-main .conf-teaser .newsletter .subscribe button{width:100%;right:auto;display:block;position:relative}}
    /*# sourceMappingURL=main.css.map */
  </style>


  <div class="flipped" id="flipped"></div>
  <main id="content-page-main" class="content-page-main viewport">
    <section class="content conf-teaser">
      <div class="braziljs">
        <span class="braziljs-logo" data-aos="zoom-in"></span>
        <div class="lead">
          <p class="desc" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400">Venha fazer parte da <span>BrazilJS Conf</span>, uma experiência única e verdadeira em eventos</p>
          <div class="event-date" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="800">
            <div class="date">
              <p>Ago</p>
              <span class="day">24</span>
              <span class="weeky">Sexta-feira</span>
            </div>
            <div class="date">
              <p>Ago</p>
              <span class="day">25</span>
              <span class="weeky">Sábado</span>
            </div>
          </div>
          <p class="address" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="1200"> Porto Alegre, RS - BarraShopping Sul</p>
        </div>
      </div>
      <div class="timer">
        <div class="timer-itens">
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
      <div class="newsletter">
        <form id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" method="post" action="//braziljs.us5.list-manage.com/subscribe/post?u=77b6594f10bba05dcc722c80e&amp;id=e6beed4270">
          <div class="subscribe">
            <input id="subscribe" type="email" name="EMAIL" required="" placeholder="Enter Your Email">
            <button type="submit" class="flow-opposite anchor-button anchor-button--color-4 anchor-button--size-2">Fique informado</button>
          </div>
        </form>
      </div>
      <div class="social-networks">
        <ul class="social-list-network">
          <li class="social-networks__item">
            <a href="https://twitter.com/braziljs" class="social-networks__anchor twitter"></a>
          </li>
          <li class="social-networks__item">
            <a href="https://fb.com/braziljs" class="social-networks__anchor facebook"></a>
          </li>
          <li class="social-networks__item">
            <a href="https://github.com/braziljs" class="social-networks__anchor github"></a>
          </li>
          <li class="social-networks__item">
            <a href="https://www.youtube.com/channel/UCnLdHOuue5i1O7TsH6oh07w" class="social-networks__anchor youtube"></a>
          </li>
          <li class="social-networks__item">
            <a href="https://www.instagram.com/brazil.js/" class="social-networks__anchor instagram"></a>
          </li>
          <li class="social-networks__item">
            <a href="https://now-examples-slackin-vvjogtwzcf.now.sh/" class="social-networks__anchor slack"></a>
          </li>
        </ul>
      </div>
      <div class="powered">
        <div class="content">
          <div class="content-itens">
            <div class="brjs">
              BrazilJS® é uma iniciativa <a href="https://nasc.io/?utm_source=braziljs-conf-2018">NASC</a>
            </div>
            <div class="made">
              Made by <a href="https://github.com/asgabe?utm_source=braziljs-conf-2018" target="__blank">Gabe</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  <!-- SCRIPT'S -->

  <script type="text/javascript">
    !function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t():"function"==typeof define&&define.amd?define([],t):"object"==typeof exports?exports.AOS=t():e.AOS=t()}(this,function(){return function(e){function t(n){if(o[n])return o[n].exports;var i=o[n]={exports:{},id:n,loaded:!1};return e[n].call(i.exports,i,i.exports,t),i.loaded=!0,i.exports}var o={};return t.m=e,t.c=o,t.p="dist/",t(0)}([function(e,t,o){"use strict";function n(e){return e&&e.__esModule?e:{"default":e}}var i=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var o=arguments[t];for(var n in o)Object.prototype.hasOwnProperty.call(o,n)&&(e[n]=o[n])}return e},a=o(1),r=(n(a),o(5)),c=n(r),u=o(6),s=n(u),d=o(7),f=n(d),l=o(8),m=n(l),p=o(9),b=n(p),v=o(10),g=n(v),y=o(13),w=n(y),h=[],k=!1,x=document.all&&!window.atob,j={offset:120,delay:0,easing:"ease",duration:400,disable:!1,once:!1,startEvent:"DOMContentLoaded"},O=function(){var e=arguments.length<=0||void 0===arguments[0]?!1:arguments[0];return e&&(k=!0),k?(h=(0,g["default"])(h,j),(0,b["default"])(h,j.once),h):void 0},_=function(){h=(0,w["default"])(),O()},z=function(){h.forEach(function(e,t){e.node.removeAttribute("data-aos"),e.node.removeAttribute("data-aos-easing"),e.node.removeAttribute("data-aos-duration"),e.node.removeAttribute("data-aos-delay")})},A=function(e){return e===!0||"mobile"===e&&m["default"].mobile()||"phone"===e&&m["default"].phone()||"tablet"===e&&m["default"].tablet()||"function"==typeof e&&e()===!0},E=function(e){return j=i(j,e),h=(0,w["default"])(),A(j.disable)||x?z():(document.querySelector("body").setAttribute("data-aos-easing",j.easing),document.querySelector("body").setAttribute("data-aos-duration",j.duration),document.querySelector("body").setAttribute("data-aos-delay",j.delay),"DOMContentLoaded"===j.startEvent&&["complete","interactive"].indexOf(document.readyState)>-1?O(!0):"load"===j.startEvent?window.addEventListener(j.startEvent,function(){O(!0)}):document.addEventListener(j.startEvent,function(){O(!0)}),window.addEventListener("resize",(0,s["default"])(O,50,!0)),window.addEventListener("orientationchange",(0,s["default"])(O,50,!0)),window.addEventListener("scroll",(0,c["default"])(function(){(0,b["default"])(h,j.once)},99)),document.addEventListener("DOMNodeRemoved",function(e){var t=e.target;t&&1===t.nodeType&&t.hasAttribute&&t.hasAttribute("data-aos")&&(0,s["default"])(_,50,!0)}),(0,f["default"])("[data-aos]",_),h)};e.exports={init:E,refresh:O,refreshHard:_}},function(e,t){},,,,function(e,t,o){"use strict";function n(e,t,o){var n=!0,a=!0;if("function"!=typeof e)throw new TypeError(c);return i(o)&&(n="leading"in o?!!o.leading:n,a="trailing"in o?!!o.trailing:a),r(e,t,{leading:n,maxWait:t,trailing:a})}function i(e){var t="undefined"==typeof e?"undefined":a(e);return!!e&&("object"==t||"function"==t)}var a="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol?"symbol":typeof e},r=o(6),c="Expected a function";e.exports=n},function(e,t){"use strict";function o(e,t,o){function n(t){var o=b,n=v;return b=v=void 0,O=t,y=e.apply(n,o)}function a(e){return O=e,w=setTimeout(d,t),_?n(e):y}function r(e){var o=e-h,n=e-O,i=t-o;return z?x(i,g-n):i}function u(e){var o=e-h,n=e-O;return!h||o>=t||0>o||z&&n>=g}function d(){var e=j();return u(e)?f(e):void(w=setTimeout(d,r(e)))}function f(e){return clearTimeout(w),w=void 0,A&&b?n(e):(b=v=void 0,y)}function l(){void 0!==w&&clearTimeout(w),h=O=0,b=v=w=void 0}function m(){return void 0===w?y:f(j())}function p(){var e=j(),o=u(e);if(b=arguments,v=this,h=e,o){if(void 0===w)return a(h);if(z)return clearTimeout(w),w=setTimeout(d,t),n(h)}return void 0===w&&(w=setTimeout(d,t)),y}var b,v,g,y,w,h=0,O=0,_=!1,z=!1,A=!0;if("function"!=typeof e)throw new TypeError(s);return t=c(t)||0,i(o)&&(_=!!o.leading,z="maxWait"in o,g=z?k(c(o.maxWait)||0,t):g,A="trailing"in o?!!o.trailing:A),p.cancel=l,p.flush=m,p}function n(e){var t=i(e)?h.call(e):"";return t==f||t==l}function i(e){var t="undefined"==typeof e?"undefined":u(e);return!!e&&("object"==t||"function"==t)}function a(e){return!!e&&"object"==("undefined"==typeof e?"undefined":u(e))}function r(e){return"symbol"==("undefined"==typeof e?"undefined":u(e))||a(e)&&h.call(e)==m}function c(e){if("number"==typeof e)return e;if(r(e))return d;if(i(e)){var t=n(e.valueOf)?e.valueOf():e;e=i(t)?t+"":t}if("string"!=typeof e)return 0===e?e:+e;e=e.replace(p,"");var o=v.test(e);return o||g.test(e)?y(e.slice(2),o?2:8):b.test(e)?d:+e}var u="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol?"symbol":typeof e},s="Expected a function",d=NaN,f="[object Function]",l="[object GeneratorFunction]",m="[object Symbol]",p=/^\s+|\s+$/g,b=/^[-+]0x[0-9a-f]+$/i,v=/^0b[01]+$/i,g=/^0o[0-7]+$/i,y=parseInt,w=Object.prototype,h=w.toString,k=Math.max,x=Math.min,j=Date.now;e.exports=o},function(e,t){"use strict";function o(e,t){r.push({selector:e,fn:t}),!c&&a&&(c=new a(n),c.observe(i.documentElement,{childList:!0,subtree:!0,removedNodes:!0})),n()}function n(){for(var e,t,o=0,n=r.length;n>o;o++){e=r[o],t=i.querySelectorAll(e.selector);for(var a,c=0,u=t.length;u>c;c++)a=t[c],a.ready||(a.ready=!0,e.fn.call(a,a))}}Object.defineProperty(t,"__esModule",{value:!0});var i=window.document,a=window.MutationObserver||window.WebKitMutationObserver,r=[],c=void 0;t["default"]=o},function(e,t){"use strict";function o(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(t,"__esModule",{value:!0});var n=function(){function e(e,t){for(var o=0;o<t.length;o++){var n=t[o];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}return function(t,o,n){return o&&e(t.prototype,o),n&&e(t,n),t}}(),i=function(){function e(){o(this,e)}return n(e,[{key:"phone",value:function(){var e=!1;return function(t){(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(t)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(t.substr(0,4)))&&(e=!0)}(navigator.userAgent||navigator.vendor||window.opera),e}},{key:"mobile",value:function(){var e=!1;return function(t){(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(t)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(t.substr(0,4)))&&(e=!0)}(navigator.userAgent||navigator.vendor||window.opera),e}},{key:"tablet",value:function(){return this.mobile()&&!this.phone()}}]),e}();t["default"]=new i},function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=function(e,t,o){var n=e.node.getAttribute("data-aos-once");t>e.position?e.node.classList.add("aos-animate"):"undefined"!=typeof n&&("false"===n||!o&&"true"!==n)&&e.node.classList.remove("aos-animate")},n=function(e,t){var n=window.pageYOffset,i=window.innerHeight;e.forEach(function(e,a){o(e,i+n,t)})};t["default"]=n},function(e,t,o){"use strict";function n(e){return e&&e.__esModule?e:{"default":e}}Object.defineProperty(t,"__esModule",{value:!0});var i=o(11),a=n(i),r=function(e,t){return e.forEach(function(e,o){e.node.classList.add("aos-init"),e.position=(0,a["default"])(e.node,t.offset)}),e};t["default"]=r},function(e,t,o){"use strict";function n(e){return e&&e.__esModule?e:{"default":e}}Object.defineProperty(t,"__esModule",{value:!0});var i=o(12),a=n(i),r=function(e,t){var o=0,n=0,i=window.innerHeight,r={offset:e.getAttribute("data-aos-offset"),anchor:e.getAttribute("data-aos-anchor"),anchorPlacement:e.getAttribute("data-aos-anchor-placement")};switch(r.offset&&!isNaN(r.offset)&&(n=parseInt(r.offset)),r.anchor&&document.querySelectorAll(r.anchor)&&(e=document.querySelectorAll(r.anchor)[0]),o=(0,a["default"])(e).top,r.anchorPlacement){case"top-bottom":break;case"center-bottom":o+=e.offsetHeight/2;break;case"bottom-bottom":o+=e.offsetHeight;break;case"top-center":o+=i/2;break;case"bottom-center":o+=i/2+e.offsetHeight;break;case"center-center":o+=i/2+e.offsetHeight/2;break;case"top-top":o+=i;break;case"bottom-top":o+=e.offsetHeight+i;break;case"center-top":o+=e.offsetHeight/2+i}return r.anchorPlacement||r.offset||isNaN(t)||(n=t),o+n};t["default"]=r},function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=function(e){for(var t=0,o=0;e&&!isNaN(e.offsetLeft)&&!isNaN(e.offsetTop);)t+=e.offsetLeft-("BODY"!=e.tagName?e.scrollLeft:0),o+=e.offsetTop-("BODY"!=e.tagName?e.scrollTop:0),e=e.offsetParent;return{top:o,left:t}};t["default"]=o},function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=function(e){e=e||document.querySelectorAll("[data-aos]");var t=[];return[].forEach.call(e,function(e,o){t.push({node:e})}),t};t["default"]=o}])});
  </script>

  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {

      function resize () {

        var view = document.querySelectorAll(".viewport")[0];
        view.style.height = window.innerHeight + "px";

      };

      resize();

      var input = document.getElementById("subscribe");

      function newsletter () {
        var elm;

        elm = document.getElementsByClassName("subscribe")[0]
        elm.classList.add("actived");

      };

      document.addEventListener("click", function (el) {
        elm = document.getElementsByClassName("subscribe")[0]

        if (el.target.type != "email" && el.target.type != "submit" && elm.classList.contains("actived")) {
          elm.classList.remove("actived")
        }

      })

      function aosAnimate () {
        if (window.innerWidth > 767) {
          console.log('init');
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


      window.addEventListener('resize', resize);
      input.addEventListener('click', newsletter);
    });
  </script>
  </body>
</html>
