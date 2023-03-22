@extends('layout.internas')

@section('title', getConfig('text_sobre')->valor)

@section('content')
<section class="section-xl bg-periglacial-blue text-center">
              <div class="shell">
                <div class="range range-sm-center range-50">
                  <div class="cell-xs-12">
                   
                    <div class="p text-width-medium">
                      <p class="big">{!!getConfig('descricao_inicial_sobre')->valor!!}</p>
                    </div>
                  </div>
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
            </section>

            <section class="section-xl bg-periglacial-blue text-center">
              <div class="shell">
                <div class="range range-sm-center range-75">
                  <div class="cell-xs-12">
                    <h2>{!!getConfig('texto_pessoas')->valor!!}</h2>
                    <div class="p text-width-medium">
                      <p class="big">{!!getConfig('texto_sobre_pessoal')->valor!!}</p>
                    </div>
                  </div>
                  <div class="cell-lg-10">
                  @foreach($equipes as $equipe)
                    <blockquote class="quote-review">
                     
                      <div class="quote-review-left">
                        <div class="quote-review-avatar"><img class="quote-review-image" src="/{{ str_replace('public','storage', $equipe->logo)}}" alt="" width="100" height="100">
                        </div>
                      </div>
                      <div class="quote-review-body">
                        <div class="quote-review-header">
                          <p class="quote-review-title">{{$equipe->nome}} </p>
                          <ul class="quote-review-rating">
                            @if(!empty($equipe->facebook))
                            <a href = "{{$equipe->facebook}}" target = "_blank"><li class="icon icon-xs icon-primary fa fa-facebook"></li></a>
                            @endif
                            @if(!empty($equipe->email))
                            <a href = "mailto:{{$equipe->email}}"><li class="icon icon-xs icon-primary fa fa-envelope"></li></a>
                            @endif
                            @if(!empty($equipe->instagram))
                            <a href = "{{$equipe->instagram}}" target = "_blank"><li class="icon icon-xs icon-primary fa fa-instagram"></li></a>
                            @endif
                          </ul>
                        </div>
                        <div class="quote-review-meta"><span class="quote-review-user">{{$equipe->cargo}}</span>
                         
                        </div>
                        <p class="quote-review-text">
                          <q>{{$equipe->descricao}}</q>
                        </p>
                      </div>
                     
                    </blockquote>
                    @endforeach
                   
                  </div>
                </div>
              </div>
            </section>

@endsection