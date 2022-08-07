@extends('layouts.app')
@section('title', 'Show')
@section('content')
<p>Name :</p>
<p>"{{$users['name']}}"><p><br><br>

<p>Email :</p>
<p>"{{$users['email']}}"><p><br><br>
@endsection