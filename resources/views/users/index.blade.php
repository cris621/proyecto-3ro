@extends('layouts.app')

@section('content')
 <h1>Lista de Usuarios</h1>
 <a href="{{route ('users.create')}}" class="btn btn-success nb">Crear</a>
 <table>
    <tr>
        <th>#</th>
        <th>Usuario</th>
        <th>Nombres</th>
        <th>Correo</th>
        <th></th>
    </tr>
    @foreach($users as $u )
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$u->name}}</td>
        <td>{{$u->usu_nombres}}</td>
        <td>{{$u->email}}</td>
        <td> <a href="{{route('users.edit',$u->usu_id)}}" class='btn btn-info btn-sm'> Edit</a></td>
        <td> <a href="{{route('users.cont',$u->usu_id)}}" class='btn btn-secondary btn-sm'>Edit Cont</a></td>

    </tr>
    @endforeach 
</table>
 @endsection