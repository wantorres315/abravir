<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>@yield('title')</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <link rel="icon" href="{{ URL::asset('images/favicon.ico')}}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto+Mono:300,300italic,400,700%7CArvo:400,700">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.royal-navy.css"/>
    
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
                    <div class="brand-mobile"><img src="{{ URL::asset('images/logo.png')}}" alt="" width="200" height="36" style = "border-radius:50%"/>
                    </div>
                    <div class="brand-desktop"><img src="{{ URL::asset('images/logo.png')}}" alt="" width="125" height="125" style = "border-radius:50%"/>
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
                <p class="text-highlighted">{!! getConfig('texto_footer')->valor !!}</p>
              </div>
            </div>
            <div class="cell-sm-6 cell-md-3">
              <h3>{{getConfig('texto_siganos')->valor}}</h3>
              <div class="divider divider-conch"></div>
              <ul class="inline-list inline-list-xs">
                @if(!empty(getConfiguration('facebook')))
                <li><a class="icon icon-xs-outline icon-wild-sand-filled icon-circle fa-facebook" target = "_blank" href="{{getConfiguration('facebook')->valor}}"></a></li>
                @endif
                @if(!empty(getConfiguration('twitter')))
                <li><a class="icon icon-xs-outline icon-wild-sand-filled icon-circle fa-twitter" target = "_blank" href="{{getConfiguration('twitter')->valor}}"></a></li>
                @endif
                @if(!empty(getConfiguration('youtube')))
                <li><a class="icon icon-xs-outline icon-wild-sand-filled icon-circle fa-youtube" target = "_blank" href="{{getConfiguration('youtube')->valor}}"></a></li>
                @endif
                @if(!empty(getConfiguration('instagram')))
                <li><a class="icon icon-xs-outline icon-wild-sand-filled icon-circle fa-instagram" target = "_blank" href="{{getConfiguration('instagram')->valor}}"></a></li>
                @endif
              </ul>
            </div>
          </div>
        </div>
      </footer>
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
    <script src="{{ URL::asset('js/core.min.js')}}"></script>
    <script src="{{ URL::asset('js/evo-calendar.js')}}"></script>
    <script src="{{ URL::asset('js/script.js')}}"></script>
    
  </body>
</html>