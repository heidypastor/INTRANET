@component('mail::message')

<center><h2><font color="#ffd100">¡¡ALERTA AMARILLA!!</font></h2></center>
<center><h3><font color="#ffd100">Tienes poco tiempo.</font></h3></center>
<body>
	<strong>Recuerda</strong> 
	<br>Tienes una alerta pendiente: <strong>{{$alert->AlertName}}</strong> 
	<br> para el día {{$alert->AlertDateEvent}}.
	<br><h3>Descripción:</h3> {{$alert->AlertDescription}}.

	@component('mail::button', ['url' => url('/alerts')])
	Ver Alerta
	@endcomponent

	<strong><center>¡¡¡NO OLVIDAR!!!</center></strong> 
</body>
@endcomponent