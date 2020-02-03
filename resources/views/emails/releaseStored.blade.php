@component('mail::message')

# Nuev@ {{$release->RelType}} ha sido publicado: {{$release->Rel}} 

@component('mail::button', ['url' => url('/releases', [$release->id])])
Ver Comunicado
@endcomponent

@endcomponent