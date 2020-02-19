@component('mail::message')

# Recuerda: Tienes una nueva alerta: <strong>{{$alert->AlertName}}</strong> 
<br> para el día {{date_format($alert->AlertDateEvent, 'd-m-Y')}}.
<br><br><strong><center>¡¡¡NO OLVIDAR!!!</center></strong> 

@component('mail::button', ['url' => url('/alerts')])
Ver Alerta
@endcomponent

@endcomponent