@component('mail::message')

<center><h2><font color="#42ff00">Terminado</font></h2></center>
<body>
	<h3>La alerta <strong>{{$alert->AlertName}}</strong> ha sido realizada Exitosamente.</h3>
	<br><h3>Descripción:</h3> {{$alert->AlertDescription}}.

	@component('mail::button', ['url' => url('/alerts')])
	Ver Alerta
	@endcomponent

	<strong><center>¡¡¡FINALIZADO!!!</center></strong> 
</body>
@endcomponent