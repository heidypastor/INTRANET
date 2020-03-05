@component('mail::message')

<br><strong>Nombre:</strong>
<br><center>{{$releases->RelName}}</center>
<br><strong>Mensaje:</strong>
<br><center>{{$releases->RelMessage}}.</center>
<br><strong>Creado por:</strong>
<br><center>{{$releases->user->name}}</center>

@component('mail::button', ['url' => url('/releases', $releases->id)])
Ver Comunicado
@endcomponent

@endcomponent