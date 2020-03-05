@extends('layouts.app', ['page' => __('Alertas'), 'pageSlug' => 'alerts'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Alertas - Calendario
@endsection

@push('css')
    <link href="{{ asset('css') }}/datatable-depen.css" rel="stylesheet"/>
    <link href="{{ asset('css') }}/datatable-plugins.css" rel="stylesheet"/>
    <link href="{{ asset('css') }}/fullcalendar.css" rel="stylesheet"/>
@endpush

@section('content')
	<div class="col-md-12">
        <div class="col-md-10 mx-auto"><br><br>
            <div id="calendar"></div>
        </div>
    </div>
@endsection

@push('js')
	<script src="{{ asset('js') }}/datatable-depen.js"></script>
	<script src="{{ asset('js') }}/datatable-plugins.js"></script>
	<script src="{{ asset('js') }}/fullcalendar.js"></script>
@endpush

@push('scripts')
    
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');

          var calendar = new FullCalendar.Calendar(
            calendarEl, {

            locale: 'es',
            timeZone: 'UTC',
            defaultView: 'dayGridMonth',

            plugins: [ 'dayGrid', 'interaction', 'timeGrid' ],
            eventSources:[{
            events: [
                    @foreach($alerts as $alert)
                        @if($alert->user_id == Auth::user()->id)
                            {
                            id: '{{$alert->id}}',
                            title: '{{$alert->AlertName}}',
                            url: "alerts/{{$alert->id}}/edit",
                            color: '#23ff00',
                            start: '{{$alert->AlertDateEvent}}',
                            end: '{{$alert->AlertDateEvent}}',
                            textColor: 'black'
                            },
                        @endif
                    @endforeach
                ],
            }],
            eventLimit: true,
            eventLimitText: "más",
            header: {
                left: 'dayGridMonth,timeGridWeek,timeGridDay',
                center: 'title',
                right: 'prev,today,next'
            },
            buttonText:{
                today: 'Hoy',
                day: 'Día',
                month: 'Mes',
                week: 'Semana'
            },
            defaultRangeSeparator: ' - ',
            height: 'parent',
            views: {
                month: {
                    eventLimit: 1
                }
            },

            dateClick: function(info) {
                calendar.changeView('timeGridDay', info.dateStr);
            },


            droppable: true,
            eventStartEditable: true,
            drop : function( dropInfo ) {
                let hora = FullCalendar.formatDate(dropInfo.date.toUTCString(), {
                    hour: '2-digit',
                    hour12: false,
                    minute: '2-digit'
                });
                $('.AlertDateEvent').val(dropInfo.dateStr);
            },

            eventReceive: function( info ) {
                var id = info.event.id;
                var tipo = info.event.title;
                info.event.remove();
                    $('#AlertDateEvent').val("");                
            },

            eventDrop: function( eventDropInfo ) {
                CambioDeFecha(eventDropInfo.event);
            },

            eventClick: function(info){
                info.jsEvent.preventDefault();
                window.open(info.event.url);
            }
          });
          calendar.render();
            function CambioDeFecha(event){
                var id = event.id;
                var fecha = event.start.toISOString();
                var token = '{{csrf_token()}}';
                var data={Event:fecha,_token:token};
                console.log(fecha);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{url('/CambioDeFechaAlerts')}}/"+id,
                    type: "PUT",
                    data: data,
                    success: function (msg) {
                        /*alert(msg);*/
                        $.notify({
                          icon: "far fa-calendar-alt",
                          message: msg

                        }, {
                          type: 'info',
                          timer: 8000,
                          placement: {
                            from: 'top',
                            align: 'right'
                          }
                        });
                    },
                    error: function (jqXHR, textStatus, errorThrown) {

                        $.notify({
                          icon: "far fa-calendar-alt",
                          message: "Solo puede programar una alerta apartir del dia de mañana"
                          
                        }, {
                          type: 'danger',
                          timer: 8000,
                          placement: {
                            from: 'top',
                            align: 'right'
                          }
                        });
                        // for (var i = jqXHR.responseJSON.errors.Event.length - 1; i >= 0; i--) {
                        //     NotifiFalse(jqXHR.responseJSON.errors.Event[i]);
                        // }
                    }
                });
            }
        });
    </script>
@endpush