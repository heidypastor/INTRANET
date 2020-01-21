@extends('layouts.app', ['pageSlug' => 'dashboard'])

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
                <h1 class="card-title text-center">NOVEDADES <strong>PROSARC</strong></h1>
                <div id="carousel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="white/img/DJI_0125.jpg" alt="First slide" width="640" height="360">
                          <div class="carousel-caption d-none d-md-block">
                            <h3 id="text-carousel" class="texto-carousel">Conoce PROSARC</h3>
                            <p id="text-carousel" class="texto-carousel"></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="white/img/alerta.jpg" alt="Second slide"  width="640" height="360">
                          <div class="carousel-caption d-none d-md-block">
                            <h4 id="text-carousel" class="texto-carousel">Contactos de Emergencia</h4>
                            <h4 id="text-carousel" class="texto-carousel">3125262958</h4>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <a href="indicators/{{$indicator->id}}"><img class="d-block w-100" src="{{Storage::url($indicator->IndGraphic)}}" alt="Thrid slide"  width="640" height="360"></a>
                          <div class="carousel-caption d-none d-md-block">
                            <h4 id="text-carousel" class="texto-carousel">Indicador Actualizado</h4>
                            <h4 id="text-carousel" class="texto-carousel">{{$indicator->IndName}}</h4>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <a href="comites/{{$comitesCarousel->id}}"><img class="d-block w-100" src="{{Storage::url($comitesCarousel->ComiImage)}}" alt="Four slide"  width="640" height="360"></a>
                          <div class="carousel-caption d-none d-md-block">
                            <h4 id="text-carousel" class="texto-carousel">Comite Actualizado</h4>
                            <h4 id="text-carousel" class="texto-carousel">{{$comitesCarousel->ComiName}}</h4>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="white/img/docu.jpg" alt="Five slide"  width="640" height="360">
                          <div class="carousel-caption d-none d-md-block">
                            <h4 id="text-carousel" class="texto-carousel">Documento Actualizado</h4>
                            <h4 id="text-carousel" class="texto-carousel"><font color="#000000">{{$document->DocName}}</h4>
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
    <div class="div-conoce-pro">
      <h2 class="text-center">Conoce a Prosarc</h2>
      <table class="col-lg-12 text-center">
        <tr>
          <td><a href="{{ route('prosarc.nosotros')  }}"><img src="white/img/logo.png" class="botones-conoce"></a></td>
          <td><a href="{{ route('prosarc.requiLegal')  }}"><img src="white/img/RL.jpg" class="botones-conoce"></a></td>
        </tr>
        <tr>
          <td><h4>Nosotros</h4></td>
          <td><h4>Requisitos legales</h4></td>
        </tr>
      </table>
    </div>
    <div class="div-conoce-pro">
      <h2 class="text-center">Nuestra Gestión</h2>
      <table class="col-lg-12 text-center">
        <tr>
          <td><a href="{{ route('prosarc.GHumana')  }}"><img src="white/img/GH.jpg" class="botones-conoce"></a></td>
          <td><a href="*"><img src="white/img/GA.jpg" class="botones-conoce"></a></td>
          <td><a href="*"><img src="white/img/GC.jpg" class="botones-conoce"></a></td>
          <td><a href="*"><img src="white/img/SST.jpg" class="botones-conoce"></a></td>
        </tr>
        <tr>
          <td><h4>Gestión Humana</h4></td>
          <td><h4>Gestión Ambiental</h4></td>
          <td><h4>Gestión de Calidad</h4></td>
          <td><h4>Seguridad y salud <br> en el trabajo</h4></td>
        </tr>
      </table>
    </div>
    <div class="div-comites text-center">
      <div class="col-lg-12">
        <h2 class="text-center">Comites PROSARC</h2>
        @foreach($comites as $comite)
          <a href="comites/{{$comite->id}}" class="btn btn-success">{{$comite->ComiName}}</a>
        @endforeach
        <br>
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
