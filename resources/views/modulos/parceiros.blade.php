<section class="section-xl bg-gray-dark bg-image text-center" style="background-image: url(images/bg-image-1.jpg);">
        <div class="shell">
          <div class="range range-50">
            <div class="cell-xs-12">
              @if(empty($show_all))
                <h2>{{ getText('text_parceiros')}}</h2>
              @endif
              <div class="p text-width-medium">
                <p class="big">{{ getText('descricao_parceiros')}}</p>
              </div>
            </div>
            <div class="cell-xs-12">
            <div class="range range-30">
              @foreach($parceiros as $parceiro)
              
                <div class="cell-sm-6 cell-md-4 height-fill">
                  <div class="thumbnail-card"><img class="thumbnail-card-image" src="/{{ str_replace('public','storage', $parceiro->logo)}}" alt="" width="370" height="310"/>
                    <div class="thumbnail-card-body">
                      <p class="thumbnail-card-header" data-toggle="modal" data-target="#modalWindow">{{$parceiro->nome}}</p>
                      <div class="thumbnail-card-text">
                        <p>{{$parceiro->observacoes}}</p>
                        
                        <p>
                          @if($parceiro->telefone || $parceiro->telemovel) <i class = "fa fa-phone"></i> @endif 
                          @if($parceiro->telefone)<a href = "tel:{{$parceiro->telefone}}">{{$parceiro->telefone}}</a>@endif 
                          @if($parceiro->telefone && $parceiro->telemovel) / @endif 
                          @if($parceiro->telemovel) <a href = "tel:{{$parceiro->telemovel}}"> {{$parceiro->telemovel}} @endif </a></p>
                         
                      </div>
                      <ul class="inline-list inline-list-md">
                        @if($parceiro->facebook)
                          <li><a class="icon icon-xs link-gray-base fa-facebook" href="{{$parceiro->facebook}}"></a></li>
                        @endif
                        @if($parceiro->instagram)
                          <li><a class="icon icon-xs link-gray-base fa-instagram" href="{{$parceiro->instagram}}"></a></li>
                        @endif
                        @if($parceiro->site)
                          <li><a class="icon icon-xs link-gray-base fa-link" href="{{$parceiro->site}}"></a></li>
                        @endif
                        @if($parceiro->email)
                          <li><a class="icon icon-xs link-gray-base fa-envelope"href = "mailto:{{$parceiro->email}}"></a></li>
                        @endif
                        
                      </ul>
                    </div>
                  </div>
                </div>
                
              
              @endforeach
              </div>
            </div>
            @if(empty($show_all))
            <div class="cell-xs-12"><a class="btn btn-sm btn-style-1 btn-primary" href="/parceiros">{{ getText('botao_ver_parceiros') }}</a></div>
            @endif
          </div>
        </div>
      </section>

 