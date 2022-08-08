@extends('layouts.app')
@section('title', 'Show')
@section('content')
<p>Name :</p>
<p>"{{$user['name']}}"><p><br><br>

<p>Email :</p>
<p>"{{$user['email']}}"><p><br><br>
@endsection