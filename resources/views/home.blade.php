@extends('layout.layout')

@section('title', 'Abravir')

@section('content')
<section class="jumbotron-custom jumbotron-custom-3 bg-white bg-image bg-image-custom bg-image-center" style="background-image: url(images/fundo.jpg);">
        <div class="jumbotron-custom-content text-center">
          <div class="shell">
            <div class="range range-sm-center">
              <div class="cell-sm-9 cell-md-8 cell-lg-7">
                <h1>{!! getConfig('texto_inicial')->valor !!}</h1>
                <p class="large"> {!! getConfig('descricao_inicial')->valor !!}</p>

                @php
                if(!empty(getConfiguration('video_inicial')->valor)){
                @endphp
                <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
                <div id="player"></div>

                <script>
                  // 2. This code loads the IFrame Player API code asynchronously.
                  var tag = document.createElement('script');

                  tag.src = "https://www.youtube.com/iframe_api";
                  var firstScriptTag = document.getElementsByTagName('script')[0];
                  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                  // 3. This function creates an <iframe> (and YouTube player)
                  //    after the API code downloads.
                  var player;
                  function onYouTubeIframeAPIReady() {
                    player = new YT.Player('player', {
                    
                      videoId: '{{ getConfiguration('video_inicial')->valor }}',
                      events: {
                        'onReady': onPlayerReady,
                        'onStateChange': onPlayerStateChange
                      }
                    });
                  }

                  // 4. The API will call this function when the video player is ready.
                  function onPlayerReady(event) {
                    event.target.playVideo();
                  }

                  // 5. The API calls this function when the player's state changes.
                  //    The function indicates that when playing a video (state=1),
                  //    the player should play for six seconds and then stop.
                  var done = false;
                  function onPlayerStateChange(event) {
                    if (event.data == YT.PlayerState.PLAYING && !done) {
                      setTimeout(stopVideo, 6000);
                      done = true;
                    }
                  }
                  function stopVideo() {
                    player.stopVideo();
                  }
                </script>
                @php

                }

                @endphp
                <a class="btn btn-style-1 btn-primary" href="{{getConfig('associe-se')->valor}}">{{ getConfig('associe-se')->nome }}</a>
                
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class=" section-lg bg-white">
        <div class="shell">
          <div class="range range-sm-center range-75">
            <div class="cell-md-12 cell-md-12-mod-1 text-center jumbotron-custom-3 bg-white bg-image" style="">
              <div class="image-wrap-inner">
                <h2>{{getConfig('text_sobre')->valor}}</h2>
                
                <p class="big">{!!getConfig('descricao_inicial_sobre')->valor!!}</p><a class="btn btn-style-1 btn-primary" href="{{getConfig('quem somos')->valor}}">{{getConfig('quem somos')->nome}}</a>
              
              </div>
            </div>
           
          </div>
        </div>
      </section>
      @include('modulos.noticias')
      
      
      <section class="box-wrap box-wrap-md bg-white">
              <div class="box-wrap-map" style = "background-color:#b1c7cf">
                
              </div>
              <div class="box-wrap-content">
                <div class="shell">
                  <div class="range">
                    <div class="cell-xs-12">
                      <div class="box-contacts box-contacts-horizontal box-wrap-content-interactive">
                      <div class="box-contacts-col">
                          <div class="box-contacts-block">
                            <h3>{!!getConfig('texto_endereco')->valor!!}</h3>
                            <address>{!!getConfig('endereco')->valor!!}</address>
                          </div>
                          <div class="divider divider-nebula"></div>
                          <h3>{!!getConfig('texto_fale_conosco')->valor!!}</h3>
                            <p>{!!getConfig('fale_conosco')->valor!!}</p>
                        </div>
                        <div class="box-contacts-col box-contacts-right">
                          <div class="box-contacts-block">
                            
                            <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="/fale_conosco" novalidate="novalidate">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">  
                            <div class="form-group">
                                <label class="form-label-outside" for="contact-full-name">Nome Completo</label>
                                <input class="form-control form-control-has-validation form-control-last-child" id="contact-full-name" type="text" name="name" ><span class="form-validation"></span>
                              </div>
                              <div class="form-group">
                                <label class="form-label-outside" for="contact-phone">Telefone</label>
                                <input class="form-control form-control-has-validation form-control-last-child" id="contact-phone" type="text" name="phone" ><span class="form-validation"></span>
                              </div>
                              <div class="form-group">
                                <label class="form-label-outside" for="contact-phone">E-mail</label>
                                <input class="form-control form-control-has-validation form-control-last-child" id="contact-phone" type="text" name="email" ><span class="form-validation"></span>
                              </div>
                              <div class="form-group">
                                <label class="form-label-outside" for="contact-phone">Mensagem</label>
                                <textarea class="form-control form-control-has-validation form-control-last-child" id="message" type="text" name="message" ></textarea><span class="form-validation"></span>
                              </div>
                              <button class="btn btn-sm btn-primary btn-block btn-circle" type="submit">{!!getConfig('enviar')->valor!!}</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </section>
      @include('modulos.parceiros')
@endsection
