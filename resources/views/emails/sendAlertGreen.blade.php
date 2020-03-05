@component('mail::message')

<center><h2><font color="#42ff00">¡¡ALERTA VERDE!!</font></h2></center>
<center><h3><font color="#42ff00">Aún tienes tiempo.</font></h3></center>
<body>
	<strong>Recuerda</strong> 
	<br>Tienes una nueva alerta: <strong>{{$alert->AlertName}}</strong> 
	<br> para el día {{date_format($alert->AlertDateEvent, 'd-m-Y')}}.
	<br><h3>Descripción:</h3> {{$alert->AlertDescription}}.

	@component('mail::button', ['url' => url('/alerts')])
	Ver Alerta
	@endcomponent

	<strong><center>¡¡¡NO OLVIDAR!!!</center></strong> 
</body>
@endcomponent