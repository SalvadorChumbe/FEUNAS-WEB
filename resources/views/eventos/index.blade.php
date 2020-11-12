@extends('layouts.app')
@section('scripts')    
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
              $('#txtFecha').val(info.dateStr);
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
            /*events:[
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
            ]*/
            events:"{{url('/eventos/show')}}"
          });
          calendar.setOption("locale","Es"),
  
          calendar.render();

          //recolectar informacion
          $('#btnAgregar').click(function(){
            objEvento=recolectarDatosGUI("POST");
            EnviarInformacion('',objEvento);
          });
          function recolectarDatosGUI(method){
            nuevoEvento={
              id:$('#txtID').val(),
              title:$('#txtTitulo').val(),
              descripcion:$('#txtDescripcion').val(),
              color:$('#txtColor').val(),
              textColor:'#FFFFFF',
              start:$('#txtFecha').val()+" "+$('#txtHora').val(),
              end:$('#txtEnd').val(),
              '_token':$(" meta[name='csrf-token']").attr("content"),
              '_method':method
            }
            return (nuevoEvento);
          }
          function EnviarInformacion(accion,objEvento){
            $.ajax({
              type:"POST",
              url:"{{url('/eventos/registrar')}}"+accion,
              data:objEvento,
              success:function(msg){console.log(msg);},
              error:function(){alert("hay un error");}
            }
            );

          }
        });
    </script>
@endsection

@section('content')
<div class="row">
            <div class="col"></div>
            <div class="col-5"> <div id="calendar" ></div> </div>
            <div class="col"></div>
</div>           

  <!--parte de Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Datos del evento</h    5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body show-row"> 
          ID:
          <input type="text" name="txtID" id="txtID">
          <br/>
          Fecha:
          <input type="text" name="txtFecha" id="txtFecha">
          <br/>
          Titulo:
          <input type="text" name="txtTitulo" id="txtTitulo">
          <br/>
          Hora
          <input type="time" name="txtHora" id="txtHora">
          <br/>
          Finaliza
          <input type="time" name="txtEnd" id="txtEnd">
          <br/>
          Descripcion:
          <textarea name="txtDescripcion" id="txtDescripcion" cols="30" rows="10"></textarea>
          <br/>
          Color:
          <input type="color" name="txtColor" id="txtColor">
          <br/>
        </div>
        <div class="modal-footer">

            <button id="btnAgregar" class="btn btn-success">Agregar</button>
            <button id="btModificar" class="btn btn-warning">Modificar</button>
            <button id="btnBorrar" class="btn btn-danger">Borrar</button>
            <button id="btnCancelar" class="btn btn-default">Cancelar</button>


          </div>
      </div>
    </div>
  </div>

@endsection