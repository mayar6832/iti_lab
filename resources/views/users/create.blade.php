@extends('layouts.app')
@section('title', 'create')
@section('content')

<html>

<form action="{{route('users.store')}}" method="post">
    @csrf
<label>Name :</label>

<input type="text" class="form-control" name="name" ><br><br>

<label>Email :</label>
<input type="email" class="form-control" name="email" ><br><br>

<input type="submit"  name ="submit">
</form>



</html>
@endsection