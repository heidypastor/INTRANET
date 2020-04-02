@component('mail::message')
<div class="col-md-10 mx-auto">
	<img src="http://nube.prosarc.com/index.php/s/VCgdN9HiaE8KedD/download" width="800" height="230">
</div>

<div class="col-md-12"><br><br></div>
<div class="col-md-12" style="background-color: #f8fad6; padding: 10px 10px 10px 10px;">
	<br>
	<div class="col-md-12 text-center">
		<h1 style="color: #000000;"><center>¡¡¡Nuevo Comunicado!!!</center></h1>
	</div>

	<br><center><strong>{{$releases->RelName}}</strong></center><br>
	<br><font color="#000000" class="text-justify">{{$releases->RelMessage}}.</font>
	<br><br><strong  style="color: #000000;">Creado por:</strong>
	<br><center  style="color: #000000;">{{$releases->user->name}}</center>
	<br><br>
	@component('mail::button', ['url' => url('/releases', $releases->id)])
	Ver Comunicado
	@endcomponent
</div>
@endcomponent