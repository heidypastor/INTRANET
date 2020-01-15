@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="card">
        <div class="col-md-12 card-body align-middle">
            <div class="content">
                <h1 class="card-title text-center">ACTUALIZACIONES</h1>
                <div id="carousel">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="white/img/DJI_0125.jpg" class="d-block w-100" width="640" height="360">
                          <div class="carousel-caption d-none d-md-block">
                            <h5 id="text-carousel">Conoce Prosarc</h5>
                            <p id="text-carousel"></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="white/img/header.jpg" class="d-block w-100" width="640" height="360">
                          <div class="carousel-caption d-none d-md-block">
                            <h5 id="text-carousel">Second slide label</h5>
                            <p id="text-carousel">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="white/img/bg5.jpg" class="d-block w-100" width="640" height="360">
                          <div class="carousel-caption d-none d-md-block">
                            <h5 id="text-carousel">Third slide label</h5>
                            <p id="text-carousel">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
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
        <button class="btn btn-success">COPASST</button>
        <button class="btn btn-success">Cómite de Convivencia</button>
        <button class="btn btn-success">Cómite Ambiental</button>
        <br>
        <button class="btn btn-success">Brigadistas</button>
        <button class="btn btn-success">Seguridad Víal</button>
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
