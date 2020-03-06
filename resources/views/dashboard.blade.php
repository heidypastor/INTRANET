@extends('layouts.app', ['page' => __('Inicio'), 'pageSlug' => 'Home'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Home
@endsection

@section('content')
    <div class="card">
        <div class="col-md-12 card-body">
          <div class="content">
              <h1 class="card-title text-center col-md-12">NOVEDADES <strong>PROSARC</strong></h1>
              {{-- <div id="carousel" class="col-md-8 col-sm-12 mx-auto">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner" id="imagen-carousel">
                      <div class="carousel-item active">
                        <img class="d-block w-100 alto" src="white/img/DJI_0127.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                          <h3 id="text-carousel" class="texto-carousel">Conoce PROSARC</h3>
                          <p id="text-carousel" class="texto-carousel"></p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 alto" src="white/img/bombero.png" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                          <h3 id="text-carousel" class="texto-carousel"></h3>
                          <h3 id="text-carousel" class="texto-carousel"></h3>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <a href="indicators/{{$indicator->id}}"><img class="d-block w-100 alto" src="{{Storage::url($indicator->IndGraphic)}}" alt="Thrid slide"></a>
                        <div class="carousel-caption d-none d-md-block">
                          <h3 id="text-carousel" class="texto-carousel">Indicador Actualizado</h3>
                          <h3 id="text-carousel" class="texto-carousel">{{$indicator->IndName}}</h3>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <a href="comites/{{$comitesCarousel->id}}"><img class="d-block w-100 alto" src="{{Storage::url($comitesCarousel->ComiImage)}}" alt="Four slide"></a>
                        <div class="carousel-caption d-none d-md-block">
                          <h3 id="text-carousel" class="texto-carousel">Comite Actualizado</h3>
                          <h3 id="text-carousel" class="texto-carousel">{{$comitesCarousel->ComiName}}</h3>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <a href="releases/{{$release->id}}"><img class="d-block w-100 alto" src="{{Storage::url($release->RelSrc)}}" alt="Five slide"></a>
                        <div class="carousel-caption d-none d-md-block">
                          <h3 id="text-carousel" class="texto-carousel">
                            @if($release->RelType === 'Comunicado')
                              ¡¡Nuevo {{$release->RelType}}!!
                            @else
                              ¡¡Nueva {{$release->RelType}}!!
                            @endif
                          </h3>
                          <h3 id="text-carousel" class="texto-carousel">{{$release->RelName}}</h3>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 alto" src="white/img/docu.jpg" alt="Six slide">
                        <div class="carousel-caption d-none d-md-block">
                          <h3 id="text-carousel" class="texto-carousel">Documento Actualizado</h3>
                          <h3 id="text-carousel" class="texto-carousel">{{$document->DocName}}</h3>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <a href="{{$requisito->ReqLink}}"><img class="d-block w-100 alto" src="white/img/requisito.png" alt="Six slide"></a>
                        <div class="carousel-caption d-none d-md-block">
                          <h3 id="text-carousel" class="texto-carousel">Nuevo Requisito y documento legal</h3>
                          <h3 id="text-carousel" class="texto-carousel">{{$requisito->ReqName}}</h3>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
              </div> --}}
              <div class="slider-pro" id="my-slider">
                <div class="sp-slides">
                  <!-- Slide 1 -->
                  <div class="sp-slide">
                    {{-- <img class="sp-image" src="https://picsum.photos/200/300"/> --}}
                    <img class="sp-image" src="white/img/DJI_0127.jpg" alt="First slide">
                    {{-- <h3 id="text-carousel" class="sp-layer">Conoce PROSARC</h3> --}}
                    {{-- <p id="text-carousel" class="sp-layer"></p> --}}

                    <h3 id="text-carousel" class="sp-layer sp-black"
                      data-position="bottomLeft" data-horizontal="10%"
                      data-show-transition="left" data-show-delay="300" data-hide-transition="right">
                      Conoce PROSARC
                    </h3>

                    <p id="text-carousel" class="sp-layer sp-white sp-padding"
                      data-width="200" data-horizontal="center" data-vertical="40%"
                      data-show-transition="down" data-hide-transition="up">
                      consectetur adipisicing elit
                    </p>
                    
                    <div class="sp-layer sp-static">Static content</div>
                  </div>
                  <!-- Slide 2 -->
                  <div class="sp-slide">
                    <img class="sp-image" src="white/img/bombero.png" alt="Second slide">
                  </div>
                  <!-- Slide 3 -->
                  <div class="sp-slide">
                    <a href="indicators/{{$indicator->id}}"><img class="sp-image" src="{{Storage::url($indicator->IndGraphic)}}" alt="Thrid slide"></a>
                    
                    <p class="sp-layer sp-black sp-rounded sp-padding" style="color:white; box-shadow:20px 20px 10px grey important!;" data-position="centerCenter" data-show-transition="left" data-show-delay="500" data-vertical="-50" data-hide-transition="right" data-show-duration="750">
                      Indicador Actualizado
                    </p>

                    <p class="sp-layer sp-white sp-rounded sp-padding hide-small-screen" data-position="centerCenter" data-show-transition="right" data-show-delay="500" data-vertical="50" data-hide-transition="left" data-show-duration="750">
                      <b>{{$indicator->IndName}}</b>
                    </p>
                  </div>
                  <!-- Slide 4 -->
                  <div class="sp-slide">
                    <a href="comites/{{$comitesCarousel->id}}"><img class="sp-image" src="{{Storage::url($comitesCarousel->ComiImage)}}" alt="Fourth slide"></a>
                    <h3 class="sp-layer sp-white sp-padding" class="">Comite Actualizado</h3>
                    <h3 id="sp-layer sp-black sp-padding hide-small-screen" class="">{{$comitesCarousel->ComiName}}</h3>
                  </div>
                  <!-- Slide 5 -->
                  <div class="sp-slide">
                    <a href="releases/{{$release->id}}"><img class="sp-image" src="{{Storage::url($release->RelSrc)}}" alt="Five slide"></a>
                    <div class="sp-layer">
                      <h3 id="text-carousel" class="">
                        @if($release->RelType === 'Comunicado')
                          ¡¡Nuevo {{$release->RelType}}!!
                        @else
                          ¡¡Nueva {{$release->RelType}}!!
                        @endif
                      </h3>
                      <h3 id="text-carousel" class="">{{$release->RelName}}</h3>
                    </div>
                  </div>
                  <!-- Slide 6 -->
                  <div class="sp-slide">
                    <img class="sp-image" src="white/img/docu.jpg" alt="Six slide">
                    <div class="sp-layer">
                      <h3 id="text-carousel" class="">Documento Actualizado</h3>
                      <h3 id="text-carousel" class="">{{$document->DocName}}</h3>
                    </div>
                  </div>
                  <!-- Slide 7 -->
                  <div class="sp-slide">
                    <a href="{{$requisito->ReqLink}}"><img class="sp-image" src="white/img/requisito.png" alt="Six slide"></a>
                    <div class="sp-layer">
                      <h3 id="text-carousel" class="">Nuevo Requisito y documento legal</h3>
                      <h3 id="text-carousel" class="">{{$requisito->ReqName}}</h3>
                    </div>
                  </div>
                </div>
                <div class="sp-thumbnails">
                  {{-- <img class="sp-thumbnail" src="path/to/thumbnail.jpg"/> --}}
              
                  {{-- <p class="sp-thumbnail">Thumbnail 2</p> --}}

                  <!-- thumbnail 1 -->
                  <div class="sp-thumbnail">
                    <img class="sp-thumbnail-image" src="white/img/DJI_0127.jpg"/>
                    <p class="sp-thumbnail-text">Conoce PROSARC S.A. ESP</p>
                  </div>

                  <!-- thumbnail 2 -->
                  <div class="sp-thumbnail">
                    <img class="sp-thumbnail-image" src="white/img/bombero.png"/>
                    <p class="sp-thumbnail-text">Numeros de Emergencia</p>
                  </div>

                  <!-- thumbnail 2 -->
                  <div class="sp-thumbnail">
                    <img class="sp-thumbnail-image" src="{{Storage::url($indicator->IndGraphic)}}"/>
                    <p class="sp-thumbnail-text">Indicador Actualizado</p>
                  </div>

                  <!-- thumbnail 2 -->
                  <div class="sp-thumbnail">
                    <img class="sp-thumbnail-image" src="{{Storage::url($comitesCarousel->ComiImage)}}"/>
                    <p class="sp-thumbnail-text">Comite Actualizado</p>
                  </div>

                  <!-- thumbnail 2 -->
                  <div class="sp-thumbnail">
                    <img class="sp-thumbnail-image" src="{{Storage::url($release->RelSrc)}}"/>
                    <p class="sp-thumbnail-text">¡¡{{ $release->RelType === 'Comunicado' ? "Nuevo" : "Nueva" }}{{$release->RelType}}!!</p>
                  </div>

                  <!-- thumbnail 2 -->
                  <div class="sp-thumbnail">
                    <img class="sp-thumbnail-image" src="white/img/docu.jpg"/>
                    <p class="sp-thumbnail-text">Documento Actualizado</p>
                  </div>

                  <!-- thumbnail 2 -->
                  <div class="sp-thumbnail">
                    <img class="sp-thumbnail-image" src="white/img/requisito.png"/>
                    <p class="sp-thumbnail-text">Nuevo Requisito/Documento Legal</p>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
    <div class="text-center">
      <div class="div-conoce-pro">
        <h2 class="text-center">Conoce a Prosarc</h2>
        <div class="row">
          <div class="col-md-6">
            <a href="{{ route('prosarc.nosotros') }}"><img src="white/img/logo.png" class="botones-conoce"></a>
            <br>
            <h4>Nosotros</h4>
          </div>
          <div class="col-md-6">
            <a href="{{ route('requisitos.index') }}"><img src="white/img/RL.jpg" class="botones-conoce"></a>
            <br>
            <h4>Requisitos legales</h4>
          </div>
        </div>
      </div>
      <div class="div-conoce-pro">
        <h2 class="text-center">Nuestra Gestión</h2>
        <div class="row">
          <div class="col-md-3 mx-auto">
            <a href="{{ route('prosarc.GHumana') }}"><img src="white/img/GH.jpg" class="botones-conoce"></a>
            <br>
            <h4>Gestión Humana</h4>         
          </div>

          <div class="col-md-3 mx-auto">
            <a href="{{ route('prosarc.GAmbiental') }}"><img src="white/img/GA.jpg" class="botones-conoce"></a>
            <br>
            <h4>Gestión Ambiental</h4>          
          </div>

          <div class="col-md-3 mx-auto">
            <a href="{{ route('prosarc.GCalidad') }}"><img src="white/img/GC.jpg" class="botones-conoce"></a>
            <br>
            <h4>Gestión de Calidad</h4>
          </div>

          <div class="col-md-3 mx-auto">
            <a href="{{ route('prosarc.SST') }}"><img src="white/img/SST.jpg" class="botones-conoce"></a>
            <br>
            <h4>Seguridad y salud <br> en el trabajo</h4>
          </div>
        </div>
      </div>

      <div class="div-comites-ahora text-center">
        <div class="col-lg-12">
          <h2 class="text-center">Comites PROSARC</h2>
          @foreach($comites as $comite)
            <a href="comites/{{$comite->id}}" class="btn btn-success">{{$comite->ComiName}}</a>
          @endforeach
          <br>
        </div>
      </div>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css') }}/sliderPro.css"/>

@endpush

@push('js')
    <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
    <script src="{{ asset('js') }}/sliderPro.js"></script>

    {{-- <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script> --}}

    <script type="text/javascript">
      jQuery( document ).ready(function( $ ) {
        $( '#my-slider' ).sliderPro({
          width: 960, 
          height: 400,
          orientation: 'horizontal',
          thumbnailWidth: 0,
          thumbnailHeight: 0,
          buttons:false,
          arrows: false,
          keyboard: true,
          waitForLayers: true,
          imageScaleMode: 'contain',
          // fade: true,
          // fadeDuration:1000,
          fullScreen:true,
          breakpoints: {
            1100: {
              thumbnailWidth: 0,
              thumbnailHeight: 0,
              // thumbnailPointer:true,
            },
            800: {
              thumbnailsPosition: 'right',
              thumbnailWidth: 270,
              thumbnailHeight: 100,
              thumbnailPointer:true,
            },
            500: {
              orientation: 'vertical',
              // thumbnailsPosition: 'bottom',
              // thumbnailPointer:true,
              thumbnailWidth: 0,
              thumbnailHeight: 0
            }
          }
        });
      });
    </script>
@endpush
