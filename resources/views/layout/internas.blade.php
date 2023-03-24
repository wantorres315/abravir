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
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto+Mono:300,300italic,400,700%7CArvo:400,700">
    
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <div class="page">
      <main class="page-content" id="perspective">
        <div class="content-wrapper">
          <div class="page-header page-header-perspective">
            <div class="page-header-left"><a class="brand" href="/"><img src="{{ URL::asset('images/logo.png')}}" alt="" width="50" height="50"/></a></div>
            <div class="page-header-right">
              <div class="booking-control"><a class="btn btn-xs btn-circle btn-primary" href="{{getConfig('associe-se')->valor}}">{{getConfig('associe-se')->nome}}</a></div>
              <div id="perspective-open-menu" data-custom-toggle=".perspective-menu-toggle" data-custom-toggle-hide-on-blur="true"><span class="perspective-menu-text">Menu</span>
                <button class="perspective-menu-toggle"><span></span></button>
              </div>
            </div>
          </div>
          <div id="wrapper">
          @php
                  $show = 'true';
                @endphp
            @if(!empty($title))
              @if($title == 'noticia_interna')
                @php
                  $show = 'false';
                @endphp
              @endif
            @endif
            @if($show == 'true')
            <div class="page-title">
              <div class="page-title-content">
                <div class="shell">
                  <p class="page-title-header">@yield('title')</p>
                </div>
              </div>
            </div>
            @endif
            
            @yield('content', 'Default content')
           

            <footer class="page-footer page-footer-default">
              <div class="shell">
                <div class="range range-xs-center">
                  <div class="cell-lg-10"><a class="brand" href="/"><img src="{{ URL::asset('images/logo.png')}}" alt="" width="150" height="150"/></a>
                    <div class="text-highlighted-wrap">
                      <p class="text-highlighted">{!! getConfig('texto_footer')->valor !!}</p>
                    </div>
                    @php
                     $menu = getConfigByType('menu');
                    @endphp
                    <ul class="footer-navigation footer-navigation-horizontal">
                    @foreach($menu as $k=>$me)
                      <li @if($k == 0) class="active" @endif><a href="{{$me['valor']}}">{{$me['nome']}}</a></li>
                    @endforeach
                    </ul>


                    <div class="divider divider-small divider-light block-centered"></div>
                    <ul class="inline-list inline-list-md">
                      @if(!empty(getConfiguration('facebook')))
                        <li><a class="icon icon-xs link-gray-light fa-facebook" target = "_blank" href="{{getConfiguration('facebook')->valor}}"></a></li>
                        @endif
                @if(!empty(getConfiguration('twitter')))
                      <li><a class="icon icon-xs link-gray-light fa-twitter"  target = "_blank" href="{{getConfiguration('twitter')->valor}}"></a></li>
                      @endif
                @if(!empty(getConfiguration('youtube')))
                      <li><a class="icon icon-xs link-gray-light fa-youtube" target = "_blank" href="{{getConfiguration('youtube')->valor}}"></a></li>
                      @endif
                @if(!empty(getConfiguration('instagram')))
                      <li><a class="icon icon-xs link-gray-light fa-instagram" target = "_blank" href="{{getConfiguration('instagram')->valor}}"></a></li>
                      @endif
                    </ul>
                  </div>
                </div>
              </div>
            </footer>
          </div>
          <div id="perspective-content-overlay"></div>
        </div>
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-sidebar" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-sidebar" data-stick-up-clone="false">
            <div class="rd-navbar-inner">
              <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <div class="rd-navbar-brand"><a class="brand-name" href="/"><img src="{{ URL::asset('images/logo.png')}}" alt="" width="200" height="36"/></a><span style = "position: relative;margin: 10px;top: 3px;"class = "title">ABRAVIR</span></div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <div class="rd-navbar-nav-inner">
                  <ul class="rd-navbar-nav">
                 
                    @foreach($menu as $k=>$me)
                    <li><a href="{{$me['valor']}}">{{$me['nome']}}</a>
                    @endforeach
                    </li>
                   
                   
                  </ul>

               
                  <div class="rd-navbar-nav-footer">
                    <ul class="inline-list inline-list-md">
                    @if(!empty(getConfiguration('facebook')))
                      <li><a class="icon icon-xs link-gray-base fa-facebook" target = "_blank" href="{{getConfiguration('facebook')->valor}}"></a></li>
                      @endif
                @if(!empty(getConfiguration('twitter')))
                      <li><a class="icon icon-xs link-gray-base fa-twitter" target = "_blank" href="{{getConfiguration('twitter')->valor}}"></a></li>
                      @endif
                @if(!empty(getConfiguration('youtube')))
                      <li><a class="icon icon-xs link-gray-base fa-youtube" target = "_blank" href="{{getConfiguration('youtube')->valor}}"></a></li>
                      @endif
                @if(!empty(getConfiguration('instagram')))
                      <li><a class="icon icon-xs link-gray-base fa-instagram" target = "_blank"  href="{{getConfiguration('instagram')->valor}}"></a></li>
                      @endif
                    </ul>
                  </div>
                  
                </div>
              </div>
            </div>
          </nav>
        </div>
      </main>
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
    <script src="{{ URL::asset('js/script.js')}}"></script>
  </body>
</html>