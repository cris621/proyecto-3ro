@extends('layouts.app')

@section('content')
<h1>Generar Ordenes</h1>

<form action="">
    <select name="" id="" class="form-control">
    @foreach ($periodos as $p)

    <option value="{{$p->id}}">{{$p->anl_descripcion}}</option>
    @endforeach
</select>

<select name="" id="" class="form-control">
    @foreach ($jornadas as $j)

    <option value="{{$j->id}}">{{$j->jor_descripcion}}</option>
    @endforeach
</select>

<select name="" id="" class="form-control">
    @foreach ($meses as $m)

    <option value="{{$m}}">{{$m}}</option>
    @endforeach
</select>





</form>
@endsection