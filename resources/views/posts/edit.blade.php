@extends('layouts.app')
@section('title', 'edit')
@section('content')
<div class="contaainer">
<form action="{{route('posts.update',['id'=>$post['id']])}}" method="post">
    @method('PUT')
    @csrf
<div class="mb-3">
<label>Title :</label>
<input type="text" class="form-control" name="title" value="{{$post['title']}}"><br><br>

<label>Body:</label>
<input type="text" class="form-control" name="body" value="{{$post['body']}}"><br><br>
<label>Enabled:</label>
<input type="text" class="form-control" name="enabled" value="{{$post['enabled']}}"><br><br>
<label>User_id:</label>
<input type="text" class="form-control" name="user_id" value="{{$post['user_id']}}"><br><br>

<input type="submit"  name ="submit">
@endsection