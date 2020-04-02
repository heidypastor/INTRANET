{{-- @component('mail::message') --}}
<div class="col-md-10 mx-auto">
	<img src="http://nube.prosarc.com/index.php/s/7hcXkyU0UHSj0eH/download" width="800" height="230">
</div>
<div class="col-md-12" style="background-color: rgba(255, 255, 0, .4); padding: 10px 10px 10px 10px;">
	<br>
	<div class="col-md-12 text-center">
		<h1 style="color: #000000;"><center>¡¡ALERTA AMARILLA!!</center></h1>
		<h3 style="color: #000000;"><center>Tienes poco tiempo.</center></h3>
	</div>

	<strong style="color: #000000;">Recuerda</strong> 
	<br><font color="#000000">Tienes una alerta pendiente:</font> <strong style="color: #000000;">{{$alert->AlertName}}</strong> 
	<br><font color="#000000"> para el día {{date_format($alert->AlertDateEvent, 'd-m-Y')}}.</font>
	<br><h3 style="color: #000000;">Descripción:</h3><font color="#000000" class="text-justify"> {{$alert->AlertDescription}}.</font>
	<br><br>
	<strong><center style="color: #000000;">¡¡¡NO OLVIDAR!!!</center></strong> 

	@component('mail::button', ['url' => url('/alerts')])
	Ver Alerta
	@endcomponent
</div>
<div class="col-md-10 mx-auto">
	<img src="http://nube.prosarc.com/index.php/s/YCjtqnXnzFk1tve/download">
</div>
{{-- @endcomponent --}}