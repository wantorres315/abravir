@extends('layout.internas')

@section('title', 'Momentos Especiais')

@section('content')
<section class="section-md bg-periglacial-blue text-center">
              <div class="shell">
                <div class="range range-30">
                  @foreach($momentos as $momento)
                  <div class="cell-sm-6 cell-md-4">
                    <article class="product"><a class="product-image" href="single-product.html">
                      <img src="/{{ str_replace('public','storage', $momento->capa)}}" alt="" width="300" height="168"></a>
                      <p class="product-title">{{$momento->title}}</p>
                      <p>{{$momento->resumo}}</p>
                      <a class="btn-shop" href="{{url('/momento/'.$momento->id)}}"><span class="btn-shop-icon fa fa-eye"></span><span class="btn-shop-text">Ver Momento Especial</span></a>
                    </article>
                  </div>
                  @endforeach
                 
                 
                </div>
                @if ($momentos->hasPages())

      <ul class="pagination-custom" style = "bottom:37px">
        @if ($momentos->onFirstPage())
          <li class="disabled"><a href="#"></a></li>
        @else
          <li ><a href="href="{{ $momentos->previousPageUrl() }}"></a></li>
        @endif
       
        @foreach ($momentos->links()->elements as $element)
            @if (is_string($element))
                <li class="page-item disabled">{{ $element }}</li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $momentos->currentPage())
                        <li class="page-item active">
                            <a class="page-link">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        
        @if ($momentos->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $momentos->nextPageUrl() }}" rel="next"></a>
            </li>
        @else
            <li class="page-item disabled">
                <a class="page-link" href="#"></a>
            </li>
        @endif
    </ul>
@endif
                
@endsection