@extends('layouts.app')

@section('scripts')

<link rel="stylesheet" href="{{asset('fullcalendar/core/main.css')}}">
<link rel="stylesheet" href="{{asset('fullcalendar/daygrid/main.css')}}">
<link rel="stylesheet" href="{{asset('fullcalendar/list/main.css')}}">
<link rel="stylesheet" href="{{asset('fullcalendar/timegrid/main.css')}}">

<script src="{{asset('fullcalendar/core/main.js')}}" defer></script>

<script src="{{asset('fullcalendar/interaction/main.js')}}" defer></script>

<script src="{{asset('fullcalendar/daygrid/main.js')}}" defer></script>
<script src="{{asset('fullcalendar/list/main.js')}}" defer></script>
<script src="{{asset('fullcalendar/timegrid/main.js')}}" defer></script>

<script>

        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');
  
          var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'dayGrid', 'interaction', 'timeGrid', 'list' ],
            //defaultView:'timeGridDay'

            header:{
                left:'prev,next today Miboton',
                center:'title',
                right:'dayGridMonth,timeGridWeek,timeGridDay'
            },
            customButtons:{
                Miboton:{
                    text:"TODAS LAS ACTIVIDADES",
                    click:function(){
                        alert("!hola");
                        $('#exampleModal').modal('toggle');
                    }
                }
            },
            dateClick:function(info){
              $('#exampleModal').modal();
              console.log(info);
              calendar.addEvent({title:"evento x", date:info.dateStr})
            },
            eventClick:function(info){

              console.log(info);
              console.log(info.event.title);
              console.log(info.event.start);

              console.log(info.event.end);
              console.log(info.event.textColor);
              console.log(info.event.backgroundColor);

              console.log(info.event.extendedProps.descripcion);

            },
            events:[
              {
                title:"Mi evento 1",
                start:"2020-09-13 12:30:00",
                descripcion:"descripcion del evento 1"
              },{
                title:"Mi evento 2",
                start:"2020-09-14 12:30:00",
                end:"2020-09-20 12:30:00",
                color:"#FFCCAA",
                textColor:"#000000",
                descripcion:"descripcion del evento 2"
              }
            ]


          });
          calendar.setOption("locale","Es"),
  
          calendar.render();

        });

    </script>

@endsection

@section('content')
<div class="row">
            <div class="col"></div>
            <div class="col-7"> <div id="calendar" ></div> </div>
            <div class="col"></div>
</div>           


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">

            <button id="btnAgregar" class="btn-success">Agregar</button>
            <button id="btModificar" class="btn-success">Modificar</button>
            <button id="btnBorrar" class="btn-danger">Borrar</button>
            <button id="btnCancelar" class="btn-default">Agregar</button>


            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

@endsection