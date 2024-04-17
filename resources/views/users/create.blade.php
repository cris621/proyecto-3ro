@extends('layouts.app')
@section('content')
<h1>Agregar Usuarios</h1>



<form action="{{route('users.store')}}" method="POST">
    @csrf

@include('users.fields')

</form>








@endsection 