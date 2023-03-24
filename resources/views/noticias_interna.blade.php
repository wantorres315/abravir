@extends('layout.internas')

@section('title', $noticia->titulo)

@section('content')
<section class="section-md bg-periglacial-blue">
<div class="shell">
  <a class="link link-primary link-return" href='{{url("/noticias")}}'>Back</a>
                <article class="post-single">
                  <div class="post-single-header" style="background-image: url('/{{ str_replace('public','storage', $noticia->foto_main)}}');"></div>
                
                  <div class="post-single-body">
                  <h3>{{$noticia->titulo}}</h3>
                      {{$noticia->resumo}}
                      
                      <br>
                      {!!$noticia->texto!!}
                      @if($noticia->foto1)
                      <img src = "/{{ str_replace('public','storage', $noticia->foto1)}}" style = "width:100%">
                      @endif
                      @if($noticia->foto2)
                      <img src = "/{{ str_replace('public','storage', $noticia->foto2)}}" style = "width:100%">
                      @endif
                      @if($noticia->foto3)
                      <img src = "/{{ str_replace('public','storage', $noticia->foto3)}}" style = "width:100%">
                      @endif
                      @if($noticia->foto4)
                      <img src = "/{{ str_replace('public','storage', $noticia->foto4)}}" style = "width:100%">
                      @endif
                  </div>
                  <div class="post-single-body">
                      
                  </div>
                  
                </article>
              </div>
@endsection