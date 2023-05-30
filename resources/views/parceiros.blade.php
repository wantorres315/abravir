@extends('layout.internas')

@section('title', getConfig('text_parceiros')->valor)

@section('content')
      @include('modulos.parceiros')
@endsection
