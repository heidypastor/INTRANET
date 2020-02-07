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
        <div class="col-md-10 mx-auto">
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

          var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'dayGrid', 'interaction' ],
            eventSources:[{
            events: [
                    @foreach($alerts as $alert)
                    {
                    id: '{{$alert->id}}',
                    title: '{{$alert->AlertName}}',
                    url: "alerts/{{$alert->id}}/edit",
                    color: '#23ff00',
                    start: '{{$alert->AlertDateEvent}}',
                    end: '{{$alert->AlertDateEvent}}',
                    textColor: 'black'
                    },
                    @endforeach
                ],
            }],
            eventLimit: true,
            eventLimitText: "más",
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
            }
          });
          calendar.render();
            


            function CambioDeFecha(event){
                var id = event.id;
                var fecha = event.start.toISOString();
                var data = {Event:fecha};
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
                        NotifiTrue(msg);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        for (var i = jqXHR.responseJSON.errors.Event.length - 1; i >= 0; i--) {
                            NotifiFalse(jqXHR.responseJSON.errors.Event[i]);
                        }
                    }
                });
            }




        });
    </script>
@endpush