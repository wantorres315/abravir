<section class="section-lg bg-periglacial-blue text-center">
  <div class="shell">
    <div class="range range-sm-center range-75">
      <div class="cell-xs-12">
         @if(empty($show_all))
        <h2>{!! $titulo_noticia !!}</h2>
        
        <div class="p text-width-medium">
          <p class="big">{!! getConfig('texto_home_noticias')->valor !!}</p>
        </div>
        @endif
      </div>
      <div class="cell-xs-12">
        <div class="range range-30">
          @foreach($noticias as $noticia)
            <div class="cell-sm-6 cell-md-4">
              <article class="post-block"><img class="post-block-image" src="/{{ str_replace('public','storage', $noticia->foto_main)}}" alt="" width="370" height="250">
                <div class="post-block-body">
                  <p class="post-block-title"><a href="/noticia/{{$noticia->id}}">{{$noticia->titulo}}</a></p>
                  <div class="post-block-text">
                    <p>{{$noticia->resumo}} </p>
                  </div>
                  <ul class="post-block-meta">
                    
                    <li><span class="icon icon-xxs icon-primary fa fa-calendar-plus-o"></span>
                    @php 
                    $data = explode(' ', $noticia->created_at);
                    $data2 = explode('-', $data[0]);
                    $dataFinal = $data2[2]."/".$data2[1]."/".$data2[0]." ".$data[1];
                    @endphp
                      <time datetime="2017-08-26">{{$dataFinal}}</time>
                    </li>
                  </ul>
                </div>
              </article>
            </div>
          @endforeach
          
          @if(empty($show_all))
          <div class="cell-xs-12"><a class="btn btn-sm btn-style-1 btn-primary" href="/noticias">{!! getConfig('botao_ver_noticias')->valor !!}</a></div>
          @endif
         
        </div>
      </div>
    </div>
  </div>
</section>