@component('mail::message')

<div class="container" style="background-color: #ffff00">
	# Recuerda: Tienes una nueva alerta: <strong>{{$alert->AlertName}}</strong> 
	<br> para el día {{$alert->AlertDateEvent}}.
	<br><br><strong><center>¡¡¡NO OLVIDAR!!!</center></strong> 
</div>

@component('mail::button', ['url' => url('/alerts')])
Ver Alerta
@endcomponent

@endcomponent