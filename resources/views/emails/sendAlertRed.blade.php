@component('mail::message')

<center><h2><font color="#ff0000">¡¡ALERTA ROJA!!</font></h2></center>
<center><h3><font color="#ff0000">Ya no tienes tiempo.</font></h3></center>
<body>
	<br>Tienes una alerta olvidada: <strong>{{$alert->AlertName}}</strong> 
	<br> para el día {{date_format($alert->AlertDateEvent, 'd-m-Y')}}.
	<br><h3>Descripción:</h3> {{$alert->AlertDescription}}.

	@component('mail::button', ['url' => url('/alerts')])
	Ver Alerta
	@endcomponent

	<strong><center>¡¡¡HAZLO YA!!!</center></strong> 
</body>
@endcomponent