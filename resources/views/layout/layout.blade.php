<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto+Mono:300,300italic,400,700%7CArvo:400,700">
    <link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <div class="page">
      <header class="page-header">
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-stick-up-clone="true" data-md-stick-up-offset="140px" data-lg-stick-up-offset="140px">
            <div class="rd-navbar-inner">
              <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <div class="rd-navbar-brand"><a class="brand-name" href="/">
                    <div class="brand-mobile"><img src="images/logo.png" alt="" width="200" height="36" style = "border-radius:50%"/>
                    </div>
                    <div class="brand-desktop"><img src="images/logo.png" alt="" width="125" height="125" style = "border-radius:50%"/>
                    </div></a></div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <div class="rd-navbar-nav-inner">
                  <ul class="rd-navbar-nav">
                    @php
                     $menu = getConfigByType('menu');
                    @endphp
                     @foreach($menu as $k=>$me)
                        <li @if($k == 0) class="active" @endif><a href="{{$me['valor']}}">{{$me['nome']}}</a></li>
                     
                    @endforeach
                    
                   
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      @yield('content', 'Default content')
      

      <footer class="page-footer page-footer-variant-3">
        <div class="shell">
          <div class="range range-50">
            <div class="cell-sm-6 cell-md-4">
              <h3>{{getConfig('texto_paginas')->valor}}</h3>
              <div class="divider divider-conch"></div>
              <ul class="footer-navigation row footer-navigation-vertical" style="max-width: 390px;">
              @foreach($menu as $k=>$me)
                <li class="col-xs-6"><a href="{{$me['valor']}}">{{$me['nome']}}</a></li>
               @endforeach
              </ul>
            </div>
            <div class="cell-sm-6 cell-md-5">
              <h3>{{getConfig('nome_site')->valor}}</h3>
              <div class="divider divider-conch"></div>
              <div class="text-highlighted-wrap">
                <p class="text-highlighted">{{getConfig('texto_footer')->valor}}</p>
              </div>
            </div>
            <div class="cell-sm-6 cell-md-3">
              <h3>{{getConfig('texto_siganos')->valor}}</h3>
              <div class="divider divider-conch"></div>
              <ul class="inline-list inline-list-xs">
                <li><a class="icon icon-xs-outline icon-wild-sand-filled icon-circle fa-facebook" href="#"></a></li>
                <li><a class="icon icon-xs-outline icon-wild-sand-filled icon-circle fa-twitter" href="#"></a></li>
                <li><a class="icon icon-xs-outline icon-wild-sand-filled icon-circle fa-youtube" href="#"></a></li>
                <li><a class="icon icon-xs-outline icon-wild-sand-filled icon-circle fa-linkedin" href="#"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div class="modal fade text-center" id="modalWindow" role="dialog">
      <div class="modal-dialog custom-modal-dialog">
        <div class="custom-modal-content">
          <button class="close" type="button" data-dismiss="modal"></button>
          <div class="shell">
            <div class="box-portfolio"><img class="box-portfolio-image" src="images/barbers-single-1-130x130.jpg" alt="" width="130" height="130"/>
              <p class="box-portfolio-header">simon wilson</p>
              <div class="box-portfolio-text">
                <p>Simon Wilson founded Barbershop in 2003 at the age of 23. He decided to establish a place where the long standing traditions of American barbering could be saved. He kept Barbershop a true place for men, their fathers, and sons, rather than converting it to a unisex salon as was the popular trend at the time. Over the past 13 years, Mr. Wilson has grown his shop from a small, local spot to a nationally and internationally recognized standard in the industry. Simon has been the recipient of various accolades including the HYPE Award for Entrepreneurs and the Hartford Business Journal's 40 Under Forty (Class of 2014). He can be found at the shop on Wednesdays and Fridays.</p>
              </div>
              <ul class="inline-list inline-list-md">
                <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__cent"></div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>