@extends('layouts.app')
@section('title', 'edit')
@section('content')
<div class="contaainer">
<form action="{{route('users.update',['id'=>$id])}}" method="post">
    @method('PUT')
    @csrf
<div class="mb-3">
<label>Name :</label>
<input type="text" class="form-control" name="name" value="{{$users['name']}}"><br><br>

<label>Email :</label>
<input type="email" class="form-control" name="email" value="{{$users['email']}}"><br><br>

<input type="submit"  name ="submit">
@endsection