@extends('layouts.app')
@section('content')
<h1>Editar Contraseña</h1>

<form action="{{route ('users.update',$user->usu_id)}}" method="POST">
    @csrf
    @method('PUT')
    @include('users.edicont')
    
</form>





@endsection 



