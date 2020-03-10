@extends('layouts.app', ['page' => __('Inicio'), 'pageSlug' => 'Home'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Home
@endsection

@section('content')
{{-- @include('layouts.partials.loading') --}}
    <div class="card">
      <div class="col-md-12 card-body">
        <h1 class="card-title text-center col-md-12">NOVEDADES <strong>PROSARC</strong></h1>
        <div class="slider-pro" id="my-slider">
          <div class="sp-slides">
            <!-- Slide 1 -->
            <div class="sp-slide">
              <img class="sp-image" src="white/img/DJI_0127.jpg" alt="First slide">

              {{-- <h3 id="text-carousel" class="sp-layer sp-black sp-rounded sp-padding specialshadow1 specialshadow1hover specialshadow1click" style="color:white;"
                data-position="bottomLeft" data-horizontal="10%"
                data-show-transition="left" data-show-delay="300" data-hide-transition="right">
                Conoce PROSARC
              </h3> --}}

              <a href="/nosotros"><p class="sp-layer sp-black sp-rounded sp-padding specialshadow1 specialshadow1hover specialshadow1click" style="color:white;"
                data-width="200" data-horizontal="10%" data-vertical="28%"
                data-show-transition="right" data-hide-transition="up" data-show-delay="500">
                Conoce PROSARC
              </p></a>
              
              {{-- <div class="sp-layer sp-static">Static content</div> --}}
            </div>
            <!-- Slide 2 -->
            <div class="sp-slide">
              <img class="sp-image" src="white/img/bombero.png" alt="Second slide">
            </div>
            <!-- Slide 3 -->
            <div class="sp-slide">
              <img class="sp-image" src="{{Storage::url($indicator->IndGraphic) ? Storage::url($indicator->IndGraphic) : 'white/img/no_image.png'}}" alt="Thrid slide">
              <a href="indicators/{{$indicator->id}}"><p class="sp-layer sp-black sp-rounded sp-padding specialshadow1 specialshadow1hover specialshadow1click" style="color:white;" data-position="centerCenter" data-show-transition="left" data-show-delay="500" data-vertical="-50" data-hide-transition="left" data-show-duration="750">
                Indicador Actualizado
                </p>
              </a>
              
              <a href="indicators/{{$indicator->id}}"><p class="sp-layer sp-white sp-rounded sp-padding hide-small-screen specialshadow2 specialshadow2hover specialshadow2click" data-position="centerCenter" data-show-transition="right" data-show-delay="500" data-vertical="50" data-hide-transition="right" data-show-duration="750">
                {{$indicator->IndName}}
                </p>
              </a>
            </div>
            <!-- Slide 4 -->
            <div class="sp-slide">
              <img class="sp-image" src="{{(Storage::url($release->RelSrc) == '') || (Storage::url($release->RelSrc) == Null) ? Storage::url($comitesCarousel->ComiImage) : 'white/img/no_image.png'}}" alt="Fourth slide">
              <a href="indicators/{{$indicator->id}}"><p class="sp-layer sp-black sp-rounded sp-padding specialshadow1 specialshadow1hover specialshadow1click" style="color:white;" data-position="centerCenter" data-show-transition="left" data-show-delay="500" data-vertical="-50" data-hide-transition="left" data-show-duration="750">
                Comite Actualizado
                </p>
              </a>
              
              <a href="indicators/{{$indicator->id}}"><p class="sp-layer sp-white sp-rounded sp-padding hide-small-screen specialshadow2 specialshadow2hover specialshadow2click" data-position="centerCenter" data-show-transition="right" data-show-delay="500" data-vertical="50" data-hide-transition="right" data-show-duration="750">
                {{$comitesCarousel->ComiName}}
                </p>
              </a>
            </div>
            <!-- Slide 5 -->
            <div class="sp-slide">
              <img class="sp-image" src="{{(Storage::url($release->RelSrc) == '') || (Storage::url($release->RelSrc) == Null) ? Storage::url($release->RelSrc) : 'white/img/no_image.png'}}" alt="Five slide">
                <a href="indicators/{{$indicator->id}}"><p class="sp-layer sp-black sp-rounded sp-padding specialshadow1 specialshadow1hover specialshadow1click" style="color:white;" data-position="centerCenter" data-show-transition="left" data-show-delay="500" data-vertical="-50" data-hide-transition="left" data-show-duration="750">
                  @if($release->RelType === 'Comunicado')
                      ¡¡Nuevo {{$release->RelType}}!!
                  @else
                    ¡¡Nueva {{$release->RelType}}!!
                  @endif
                  </p>
                </a>
                
                <a href="indicators/{{$indicator->id}}"><p class="sp-layer sp-white sp-rounded sp-padding hide-small-screen specialshadow2 specialshadow2hover specialshadow2click" data-position="centerCenter" data-show-transition="right" data-show-delay="500" data-vertical="50" data-hide-transition="right" data-show-duration="750">
                  {{$release->RelName}}
                  </p>
                </a>
            </div>
            <!-- Slide 6 -->
            <div class="sp-slide">
              <img class="sp-image" src="white/img/docu.jpg" alt="Six slide">
              <a href="indicators/{{$indicator->id}}"><p class="sp-layer sp-black sp-rounded sp-padding specialshadow1 specialshadow1hover specialshadow1click" style="color:white;" data-position="centerCenter" data-show-transition="left" data-show-delay="500" data-vertical="-50" data-hide-transition="left" data-show-duration="750">
                Documento Actualizado
                </p>
              </a>
              
              <a href="indicators/{{$indicator->id}}"><p class="sp-layer sp-white sp-rounded sp-padding hide-small-screen specialshadow2 specialshadow2hover specialshadow2click" data-position="centerCenter" data-show-transition="right" data-show-delay="500" data-vertical="50" data-hide-transition="right" data-show-duration="750">
                {{$document->DocName}}
                </p>
              </a>
            </div>
            <!-- Slide 7 -->
            <div class="sp-slide">
              <img class="sp-image" src="white/img/requisito.png" alt="Six slide">
                <a href="indicators/{{$indicator->id}}"><p class="sp-layer sp-black sp-rounded sp-padding specialshadow1 specialshadow1hover specialshadow1click" style="color:white;" data-position="centerCenter" data-show-transition="left" data-show-delay="500" data-vertical="-50" data-hide-transition="left" data-show-duration="750">
                Nuevo Requisito y documento legal
                </p>
              </a>
              
              <a href="indicators/{{$indicator->id}}"><p class="sp-layer sp-white sp-rounded sp-padding hide-small-screen specialshadow2 specialshadow2hover specialshadow2click" data-position="centerCenter" data-show-transition="right" data-show-delay="500" data-vertical="50" data-hide-transition="right" data-show-duration="750">
                {{$requisito->ReqName}}
                </p>
              </a>
            </div>
          </div>
          <div class="sp-thumbnails">
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
              <img class="sp-thumbnail-image" src="{{Storage::url($indicator->IndGraphic) ? Storage::url($indicator->IndGraphic) : 'white/img/no_image.png'}}"/>
              <p class="sp-thumbnail-text">Indicador Actualizado</p>
            </div>

            <!-- thumbnail 2 -->
            <div class="sp-thumbnail">
              <img class="sp-thumbnail-image" src="{{(Storage::url($release->RelSrc) == '') || (Storage::url($release->RelSrc) == Null) ? Storage::url($comitesCarousel->ComiImage) : 'white/img/no_image.png'}}"/>
              <p class="sp-thumbnail-text">Comite Actualizado</p>
            </div>

            <!-- thumbnail 2 -->
            <div class="sp-thumbnail">
              <img class="sp-thumbnail-image" src="{{Storage::url($release->RelSrc) ? Storage::url($release->RelSrc) : 'white/img/no_image.png'}}"/>
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
 
    <script type="text/javascript">     
        $('#my-slider').sliderPro({
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
          centerImage: true,
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
    </script>
@endpush
