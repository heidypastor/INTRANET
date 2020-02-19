@component('mail::message')

<center><h2><font color="#ff0000">No Realizado</font></h2></center>
<body>
	<h3>La alerta <strong>{{$alert->AlertName}}</strong> No fue realizada teniendo en cuenta que su fecha limite era el día {{date_format($alert->AlertDateEvent, 'd-m-Y')}}</h3>
	<br><h3>Descripción:</h3> {{$alert->AlertDescription}}.

	@component('mail::button', ['url' => url('/alerts')])
	Ver Alerta
	@endcomponent

	<strong><center>No realizado</center></strong> 
</body>
@endcomponent