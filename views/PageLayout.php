<?php

class PageLayout {
  public static function renderHeader(string $heading, string $title = null) {
    if (!$title) {
      $title = $heading;
    }
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:site_name" content="Yarn"/>
    <meta property="og:title" content="Yarn" />
    <meta property="og:image" content="https://yarnpkg.com/assets/og_image.png" />
    <meta property="og:description" content="Fast, reliable, and secure dependency management." />

    <title><?= htmlspecialchars($title) ?> | Yarn</title>
    <meta name="description" content="Fast, reliable, and secure dependency management.">

    <link rel="canonical" href="https://yarnpkg.com/en/docs/cli/">
    <link rel="alternate" type="application/rss+xml" title="Yarn" href="https://yarnpkg.com/feed.xml" />
    <link rel="icon" href="https://yarnpkg.com/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://yarnpkg.com/css/main.css?t=2016-10-26T20:55:42+00:00">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/docsearch.js/1/docsearch.min.css" />
  </head>
  <body>



























<nav class="navbar navbar-static-top navbar-light">
  <div class="container">

    <a  href="https://yarnpkg.com/" >
      <svg class="logo navbar-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1154.8 518">
  <defs>
    <path id="main" d="
      M718.6 257.8c-8 27.6-20.8 47.6-35.2 63.6V181c0-9.6-8.4-17.6-21.6-17.6-5.6 0-10.4 2.8-10.4 6.8 0 2.8 1.6 5.2 1.6 12.8v64.4c-4.8 28-16.8 54-32.8 54-11.6 0-18.4-11.6-18.4-33.2 0-33.6 4.4-51.2 11.6-80.8 1.6-6 13.2-22-6.4-22-21.2 0-18.4 8-21.2 14.8 0 0-13.4 47.6-13.4 90 0 34.8 14.6 57.6 41.4 57.6 17.2 0 29.6-11.6 39.2-27.6V351c-26.4 23.2-49.6 43.6-49.6 84 0 25.6 16 46 38.4 46 20.4 0 41.6-14.8 41.6-56.8V355c21.6-18.8 44.8-42.4 58.4-88.8.4-1.6.4-3.6.4-4 0-7.6-7.6-16.4-14-16.4-4 0-7.2 3.6-9.6 12zm-76.8 198c-6.4 0-10.4-9.6-10.4-22 0-24 8.8-39.2 21.6-52.4v42.8c0 7.6 1.6 31.6-11.2 31.6z
      M833.4 301c-9.6 0-13.6-9.6-13.6-18.4v-66c0-9.6-8.4-17.6-21.6-17.6-5.6 0-10.4 2.8-10.4 6.8 0 2.8 1.6 5.2 1.6 12.8v61.6C785 291.4 777.8 301 767 301c-14 0-22.8-12-22.8-32.8 0-57.6 35.6-83.6 66-83.6 4 0 8 .8 11.6.8 4 0 5.2-2.4 5.2-9.2 0-10.4-7.6-16.8-18.4-16.8-48.8 0-95.2 40.8-95.2 107.6 0 34 16.4 60.4 47.6 60.4 15.2 0 26.4-7.2 34.4-16.4 6 9.6 16.8 16.4 30.8 16.4 34.4 0 50.4-36 57.2-62.4.4-1.6.4-2.4.4-2.8 0-7.6-7.6-16.4-14-16.4-4 0-8 3.6-9.6 12-3.6 17.6-10.8 43.2-26.8 43.2z
      M949 327.4c34.4 0 50-36 57.2-62.4 0-.8.4-1.6.4-2.8 0-7.6-7.6-16.4-14-16.4-4 0-8 3.6-9.6 12-3.6 17.6-10.4 43.2-28.8 43.2-10.8 0-16-10.4-16-21.6 0-40 18-87.2 18-92 1.6-9.2-14.4-22.4-19.2-22.4h-20.8c-4 0-8 0-21.2-1.6-4.4-16.4-15.6-21.2-25.2-21.2-10.4 0-20 7.2-20 18.4 0 11.6 7.2 20 17.2 25.6-.4 20.4-2 53.6-6.4 69.6-3.6 13.6 17.2 28 22.4 11.2 7.2-23.2 9.6-58 10-73.6h34.8c-12.8 34.4-20 62.8-20 88.4 0 35.2 22.4 45.6 41.2 45.6z
      M984.6 309.8c0 14.8 11.2 17.6 19.2 17.6 11.6 0 11.2-9.6 11.2-17.2v-58.4c2.8-31.6 27.6-66 39.2-66 7.6 0 8.4 10.4 8.4 22.8v81.2c0 20.4 12.4 37.6 33.6 37.6 34.4 0 51.4-36 58.2-62.4.4-1.6.4-2.4.4-2.8 0-7.6-7.6-16.4-14-16.4-4 0-8 3.6-9.6 12-3.6 17.6-11.8 43.2-27.8 43.2-10.4 0-10.4-14.8-10.4-18.4v-82.8c0-18.4-6.4-40.4-33.2-40.4-19.6 0-34 17.2-44.8 39.6v-18c0-9.6-8.4-17.6-21.6-17.6-5.6 0-10.4 2.8-10.4 6.8 0 2.8 1.6 5.2 1.6 12.8v126.8z
      M259 0c143 0 259 116 259 259S402 518 259 518 0 402 0 259 116 0 259 0z"/>
  </defs>

  <use class="logo-primary-rave" xlink:href="#main" x="0" y="0" style="fill: url(#rave)"/>
  <use class="logo-primary" xlink:href="#main" x="0" y="0"/>

  <path class="logo-secondary" d="M435.2 337.5c-1.8-14.2-13.8-24-29.2-23.8-23 .3-42.3 12.2-55.1 20.1-5 3.1-9.3 5.4-13 7.1.8-11.6.1-26.8-5.9-43.5-7.3-20-17.1-32.3-24.1-39.4 8.1-11.8 19.2-29 24.4-55.6 4.5-22.7 3.1-58-7.2-77.8-2.1-4-5.6-6.9-10-8.1-1.8-.5-5.2-1.5-11.9.4C293.1 96 289.6 93.8 286.9 92c-5.6-3.6-12.2-4.4-18.4-2.1-8.3 3-15.4 11-22.1 25.2-1 2.1-1.9 4.1-2.7 6.1-12.7.9-32.7 5.5-49.6 23.8-2.1 2.3-6.2 4-10.5 5.6h.1c-8.8 3.1-12.8 10.3-17.7 23.3-6.8 18.2.2 36.1 7.1 47.7-9.4 8.4-21.9 21.8-28.5 37.5-8.2 19.4-9.1 38.4-8.8 48.7-7 7.4-17.8 21.3-19 36.9-1.6 21.8 6.3 36.6 9.8 42 1 1.6 2.1 2.9 3.3 4.2-.4 2.7-.5 5.6.1 8.6 1.3 7 5.7 12.7 12.4 16.3 13.2 7 31.6 10 45.8 2.9 5.1 5.4 14.4 10.6 31.3 10.6h1c4.3 0 58.9-2.9 74.8-6.8 7.1-1.7 12-4.7 15.2-7.4 10.2-3.2 38.4-12.8 65-30 18.8-12.2 25.3-14.8 39.3-18.2 13.6-3.3 22.1-15.7 20.4-29.4zm-23.8 14.7c-16 3.8-24.1 7.3-43.9 20.2-30.9 20-64.7 29.3-64.7 29.3s-2.8 4.2-10.9 6.1c-14 3.4-66.7 6.3-71.5 6.4-12.9.1-20.8-3.3-23-8.6-6.7-16 9.6-23 9.6-23s-3.6-2.2-5.7-4.2c-1.9-1.9-3.9-5.7-4.5-4.3-2.5 6.1-3.8 21-10.5 27.7-9.2 9.3-26.6 6.2-36.9.8-11.3-6 .8-20.1.8-20.1s-6.1 3.6-11-3.8c-4.4-6.8-8.5-18.4-7.4-32.7 1.2-16.3 19.4-32.1 19.4-32.1s-3.2-24.1 7.3-48.8c9.5-22.5 35.1-40.6 35.1-40.6s-21.5-23.8-13.5-45.2c5.2-14 7.3-13.9 9-14.5 6-2.3 11.8-4.8 16.1-9.5 21.5-23.2 48.9-18.8 48.9-18.8s13-39.5 25-31.8c3.7 2.4 17 32 17 32s14.2-8.3 15.8-5.2c8.6 16.7 9.6 48.6 5.8 68-6.4 32-22.4 49.2-28.8 60-1.5 2.5 17.2 10.4 29 43.1 10.9 29.9 1.2 55 2.9 57.8.3.5.4.7.4.7s12.5 1 37.6-14.5c13.4-8.3 29.3-17.6 47.4-17.8 17.5-.3 18.4 20.2 5.2 23.4z"/>

  <linearGradient id="rainbow" x1="0%" y1="0%" x2="100%" y2="0">
    <stop offset="0%"            stop-color="#00ff00"/>
    <stop offset="7.1428571429%" stop-color="#86fa00"/>
    <stop offset="14.285714286%" stop-color="#ffdb00"/>
    <stop offset="21.428571429%" stop-color="#ff8d00"/>
    <stop offset="28.571428572%" stop-color="#ff0001"/>
    <stop offset="35.714285715%" stop-color="#ff0068"/>
    <stop offset="42.857142857%" stop-color="#ff00ce"/>
    <stop offset="50%"           stop-color="#ff00ff"/>
    <stop offset="57.142857143%" stop-color="#ff2eff"/>
    <stop offset="64.285714286%" stop-color="#b437ff"/>
    <stop offset="71.428571429%" stop-color="#616aff"/>
    <stop offset="78.571428572%" stop-color="#00c0ff"/>
    <stop offset="85.714285715%" stop-color="#00d8ff"/>
    <stop offset="92.857142858%" stop-color="#00ffff"/>
    <stop offset="100%"          stop-color="#00ff00"/>
  </linearGradient>

  <pattern id="rave" x="0" y="0" width="100%" height="100%" patternUnits="userSpaceOnUse">
    <rect x="0" y="0" width="2000%" height="100%" fill="url(#rainbow)">
      <animate attributeType="XML" attributeName="x" from="-1900%" to="100%" dur="5s" repeatCount="indefinite"/>
    </rect>
    <rect x="0" y="0" width="2000%" height="100%" fill="url(#rainbow)">
      <animate attributeType="XML" attributeName="x" from="-2800%" to="-1900%" dur="5s" repeatCount="indefinite"/>
    </rect>
  </pattern>
</svg>

      <span class="sr-only">Yarn</span>
    </a>

    <button class="navbar-toggler hidden-lg-up pull-xs-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
      <!-- &#9776; -->
    </button>

    <div class="collapse navbar-toggleable-md" id="navbar">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="https://yarnpkg.com/en/docs/getting-started">Getting Started</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://yarnpkg.com/en/docs">Documentation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://yarnpkg.com/blog">Blog</a>
        </li>
        <li class="nav-item algolia-search-wrapper">
          <label for="algolia-doc-search" class="sr-only">Search documentation</label>
          <input id="algolia-doc-search" type="search" placeholder="Search docs..."/>
        </li>
      </ul>

      <ul class="nav navbar-nav pull-lg-right">
        <li class="nav-item">
          <a class="nav-link" href="https://discord.gg/yarnpkg">Discord</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://twitter.com/yarnpkg">Twitter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/yarnpkg">GitHub</a>
        </li>
      </ul>
    </div>
  </div>
</nav>











<div class="hero">
  <div class="container">


      <h1 class="hero-text display-4"><?= htmlspecialchars($heading) ?></h1>

  </div>
</div>

<div class="container">
























<div class="row">
  <div class="col-md-12 guide">
    <div class="guide-content">
    <?
  }

  public static function renderFooter() {
    ?>
  </div>

</div>
</div>

</div>











<hr class="footer-divider">

<div class="container">
<footer class="footer">
  <div class="footer-left">
    <span class="footer-item">Yarn</span>
    <span class="footer-item"><a href="https://github.com/yarnpkg/yarn/blob/master/LICENSE">Distributed under BSD License</a></span>
    <span class="footer-item"><a href="/en/org/code-of-conduct">Code of Conduct</a></span>
  </div>

  <div class="footer-right">
  </div>


  <script type="text/javascript" src="https://cdn.jsdelivr.net/docsearch.js/1/docsearch.min.js"></script>
  <script type="text/javascript" src="https://yarnpkg.com/js/docsearch.js"></script>
</footer>
</div>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-85522875-1', 'auto');
ga('send', 'pageview');
</script>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha256-/5pHDZh2fv1eZImyfiThtB5Ag4LqDjyittT7fLjdT/8=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js" integrity="sha256-+h0g0j7qusP72OZaLPCSZ5wjZLnoUUicoxbvrl14WxM=" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js" integrity="sha256-ifihHN6L/pNU1ZQikrAb7CnyMBvisKG3SUAab0F3kVU=" crossorigin="anonymous"></script>


</body>
</html>
    <?php
  }
}
