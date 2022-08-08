@extends('layouts.app')
@section('title', 'create')
@section('content')

<html>

<form action="{{route('posts.store')}}" method="post">
    @csrf
<label>Title</label>

<input type="text" class="form-control" name="title" ><br><br>

<label>Body</label>
<input type="text" class="form-control" name="body" ><br><br>
<label>Enabled</label>
<input type="text" class="form-control" name="enabled" ><br><br>
<label>User_id</label>
<input type="text" class="form-control" name="user_id" ><br><br>
<input type="submit"  name ="submit">
</form>



</html>
@endsection