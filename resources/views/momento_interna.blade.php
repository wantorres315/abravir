@extends('layout.internas')

@section('title', $momento->title)

@section('content')
    <input type = "hidden" name = "id" id = "id_momento" value = "{{$momento->id}}">
    <link rel="stylesheet" href="{{ URL::asset('css/blueimp-gallery.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('css/blueimp-gallery-indicator.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('css/blueimp-gallery-video.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('css/demo.css')}}" />
    <section class="section-md bg-periglacial-blue text-center">
              <div class="shell">
                <div class="range range-30">

               
                <!-- The container for the list of example images -->
                <div id="links" class="links" style = "height:500px"></div>
                <!-- The Gallery as lightbox dialog -->
                  <div id="blueimp-gallery" class="blueimp-gallery" aria-label="image gallery" aria-modal="true" role="dialog">
                    <div class="slides" aria-live="polite"></div>
                        <h3 class="title"></h3>
                        <a class="prev" aria-controls="blueimp-gallery" aria-label="previous slide" aria-keyshortcuts="ArrowLeft"></a>
                        <a class="next" aria-controls="blueimp-gallery" aria-label="next slide" aria-keyshortcuts="ArrowRight"></a>
                        <a class="close" aria-controls="blueimp-gallery" aria-label="close" aria-keyshortcuts="Escape"></a>
                        <a class="play-pause" aria-controls="blueimp-gallery" aria-label="play slideshow" aria-keyshortcuts="Space" aria-pressed="false" role="button"></a>
                        <ol class="indicator"></ol>
                    </div>
                 
                 
                </div>
          
    </section>
    <script src="{{ URL::asset('js/blueimp-helper.js')}}"></script>
    <script src="{{ URL::asset('js/blueimp-gallery.js')}}"></script>
    <script src="{{ URL::asset('js/blueimp-gallery-fullscreen.js')}}"></script>
    <script src="{{ URL::asset('js/blueimp-gallery-indicator.js')}}"></script>
    <script src="{{ URL::asset('js/blueimp-gallery-video.js')}}"></script>
    <script src="{{ URL::asset('js/blueimp-gallery-vimeo.js')}}"></script>
    <script src="{{ URL::asset('js/blueimp-gallery-youtube.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.js')}}"></script>
    
    <script src="{{ URL::asset('js/jquery.blueimp-gallery.js')}}"></script>
   
    <script src="{{ URL::asset('js/demo.js')}}"></script>

                
@endsection