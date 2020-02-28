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
                <div id="carousel" class="col-md-8 col-sm-12 mx-auto">
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
                          <img class="d-block w-100 responsive" src="white/img/DJI_0127.jpg" alt="First slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h3 id="text-carousel" class="texto-carousel">Conoce PROSARC</h3>
                            <p id="text-carousel" class="texto-carousel"></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100 responsive" src="white/img/bombero.png" alt="Second slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h3 id="text-carousel" class="texto-carousel"></h3>
                            <h3 id="text-carousel" class="texto-carousel"></h3>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <a href="indicators/{{$indicator->id}}"><img class="d-block w-100 responsive" src="{{Storage::url($indicator->IndGraphic)}}" alt="Thrid slide"></a>
                          <div class="carousel-caption d-none d-md-block">
                            <h3 id="text-carousel" class="texto-carousel">Indicador Actualizado</h3>
                            <h3 id="text-carousel" class="texto-carousel">{{$indicator->IndName}}</h3>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <a href="comites/{{$comitesCarousel->id}}"><img class="d-block w-100 responsive" src="{{Storage::url($comitesCarousel->ComiImage)}}" alt="Four slide"></a>
                          <div class="carousel-caption d-none d-md-block">
                            <h3 id="text-carousel" class="texto-carousel">Comite Actualizado</h3>
                            <h3 id="text-carousel" class="texto-carousel">{{$comitesCarousel->ComiName}}</h3>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <a href="releases/{{$release->id}}"><img class="d-block w-100 responsive" src="{{Storage::url($release->RelSrc)}}" alt="Five slide"></a>
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
                          <img class="d-block w-100 responsive" src="white/img/docu.jpg" alt="Six slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h3 id="text-carousel" class="texto-carousel">Documento Actualizado</h3>
                            <h3 id="text-carousel" class="texto-carousel">{{$document->DocName}}</h3>
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

@push('js')
    <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
    {{-- <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script> --}}
@endpush
