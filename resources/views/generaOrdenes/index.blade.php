@extends('layouts.app')
@section('content')

@php
if (!function_exists('mesesTexto')) {
    function mesesTexto($nmes)
    {
        $meses = [
            1 => 'Enero',
            2 => 'Febrero',
            3 => 'Marzo',
            4 => 'Abril',
            5 => 'Mayo',
            6 => 'Junio',
            7 => 'Julio',
            8 => 'Agosto',
            9 => 'Septiembre',
            10 => 'Octubre',
            11 => 'Noviembre',
            12 => 'Diciembre'
        ];

        return $meses[$nmes];
    }
}
@endphp

<script>
    $(document).on("click",".btn_delete", function(){
      if(confirm("¿Seguro deseas elimiar este archivo?")){
        const secuencial=$(this).attr("secuencial");
        $("#secuencial").val(secuencial);
        $("#frmEliminar").submit();
      }
   })
</script>

<form action="{{ route('eliminarOrdenes')}}" method="POST" id="frmEliminar">
    @csrf

    <input type="hidden" name="secuencial" id="secuencial" value="0">


</form>




<h1>Generar Ordenes</h1>

<form action="{{route('generarOrdenes')}}"   method="POST">
<div class="row">
@csrf

    <div class="col-md-2">
    <select name="anl_id" id="" class="form-control">
    @foreach ($periodos as $p)

    <option value="{{$p->id}}">{{$p->anl_descripcion}}</option>
    @endforeach
</select>
</div>

<div class="col-md-2">

<select name="jor_id" id="" class="form-control">
    @foreach ($jornadas as $j)

    <option value="{{$j->id}}">{{$j->jor_descripcion}}</option>
    @endforeach
</select>
</div>

<div class="col-md-2">
<select name="mes" id="" class="form-control">
    @foreach ($meses as $key=>$m)

    <option value="{{$key}}">{{$m}}</option>
    @endforeach
</select>
</div>
<div class="col-md-2">

<button type="submit" class="btn btn-info">Enviar</BUTton>
</div>

</div>


</form>

<table>
    <tr>
        <th>Ordenes</th>     
    </tr>     
    <tr>         
        <td>Secuencial</td>        
         <td>Fecha</td>         
         <td>Jornada</td>    
         <td>Año Electivo</td>    
         <td>Mes</td>    
         <td>Acciones</td>    
         </tr>  
         @foreach($ordenes as $o)  
          <tr>         
            <td>{{$o->especial}}</td>         
            <td>{{$o->fecha}}</td>     
            <td>{{$o->jor_descripcion}}</td>     
            <td>{{$o->anl_descripcion}}</td>     
            <td>{{mesesTexto($o->mes)}}</td>     
            <td>
                <a href="{{route('genera_ordenes.show', $o->especial)}}" class="btn btn-info btn-sm">Ver</a>
                
                <a class="btn btn-danger btn-sm btn_delete" secuencial="{{$o->especial}}">
                    <i class="fas fa-trahs" ></i>Eliminar</a>

                    <a href="{{route('genera_ordenes.xls', $o->especial)}}" class="btn btn-success btn-sm">XLS</a>


                </td>
        </tr>     
        @endforeach 
    </table>
@endsection