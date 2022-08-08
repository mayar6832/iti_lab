@extends('layouts.app')
@section('title', 'edit')
@section('content')
<div class="contaainer">
<form action="{{route('users.update',['id'=>$user['id']])}}" method="post">
    @method('PUT')
    @csrf
<div class="mb-3">
<label>Name :</label>
<input type="text" class="form-control" name="name" value="{{$user['name']}}"><br><br>

<label>Email :</label>
<input type="email" class="form-control" name="email" value="{{$user['email']}}"><br><br>

<label>Password :</label>
<input type="password" class="form-control" name="password" value="{{$user['password']}}"><br><br>

<input type="submit"  name ="submit">
@endsection