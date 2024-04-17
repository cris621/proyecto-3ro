@extends('layouts.app')
@section('content')


<div class="container">
<div><h1 class="bg-success text-center"> ORDENES INDIVIDUALES</h1></div>

<table class="table table-striped table-bordered">
<tr>

<td>Codigo</td>
<td>Cedula</td>
<td>Estudiante</td>
<td>Jornada</td>
<td>Especialidad</td>
<td>Curso</td>
<td>Valor</td>
<td>Documento</td>
<td>Estado</td>

</tr>
@foreach($ordenes as $o)
<tr>

<td>{{$o->codigo}}</td>
<td>{{$o->est_cedula}}</td>
<td>{{$o->est_apellidos}}</td>
<td>{{$o->jor_descripcion}}</td>   
<td>{{$o->esp_descripcion}}</td>   
<td>{{$o->cur_descripcion}}</td>   
<td>{{$o->vpagado}}</td>   
<td>{{$o->numero_documento}}</td>   
<td>{{$o->estado==0?'PENDIENTE':'PAGADO'}}</td>   

</tr>
@endforeach
</table>
</div>































@endsection