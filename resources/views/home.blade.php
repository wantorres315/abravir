@extends('layout.layout')

@section('title', getConfig('nome_site')->valor)

@section('content')
<section class="jumbotron-custom jumbotron-custom-3 bg-white bg-image bg-image-custom bg-image-center" style="background-image: url(images/fundo.jpg);">
        <div class="jumbotron-custom-content text-center">
          <div class="shell">
            <div class="range range-sm-center">
              <div class="cell-sm-9 cell-md-8 cell-lg-7">
                <h1>{!! getConfig('texto_inicial')->valor !!}</h1>
                <p class="large"> {!! getConfig('descricao_inicial')->valor !!}</p>

               
                <a class="btn btn-style-1 btn-primary" href="{{getConfig('associe-se')->valor}}">{{ getConfig('associe-se')->nome }}</a>
                
              </div>
            </div>
          </div>
        </div>
      </section>
      @php
      if(!empty(getConfiguration('video_inicial')->valor)){
      @endphp
      <section class=" section-lg bg-periglacial-blue text-center">
        <div class="shell">
          <div class="range range-sm-center range-75">
             <div class="image-wrap-inner">
                <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
                <iframe id="ytplayer" type="text/html" width="640" height="360" src="http://www.youtube.com/embed/{{getConfiguration('video_inicial')->valor}}?autoplay=1&origin=http://example.com"frameborder="0"></iframe>
                
               

                 
                
               
              
              </div>
          
           
          </div>
        </div>
      </section>
      @php

      }

      @endphp
      <section class=" section-lg bg-white">
        <div class="shell">
          <div class="range range-sm-center range-75">
            <div class="cell-md-12 cell-md-12-mod-1 text-center jumbotron-custom-3 bg-white bg-image" style="">
              <div class="image-wrap-inner">
                <h2>{{getConfig('text_sobre')->valor}}</h2>
                
                <p class="big">{!!getConfig('descricao_inicial_sobre')->valor!!}</p><a class="btn btn-style-1 btn-primary" href="{{getConfig('quem somos')->valor}}">{{getConfig('quem somos')->nome}}</a>

                <div class="cell-xs-12">
                    <div class="range range-30">
                      @foreach($servicos as $servico)
                      <div class="cell-xs-6 cell-md-3">
                        <article class="box-icon">
                        
                          <p class="box-icon-header"><a class="link-underlined" href="services.html">{{$servico->nome}}</a></p>
                          <p class="box-icon-text">{{$servico->descricao}}</p>
                        </article>
                      </div>
                     @endforeach
                    
                      
                    </div>
                  </div>
              </div>
            </div>
           
          </div>
        </div>
      </section>
      @include('modulos.noticias')
      
      <section class=" section-lg bg-white">
      <h2 style = 'text-align:center'>Proximos Eventos</h2>
      <br>
      <div id="calendar"></div>
              
        </div>
        
      </section>

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
