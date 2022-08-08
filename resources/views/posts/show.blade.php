@extends('layouts.app')
@section('title', 'Show')
@section('content')
<p>Title : </p>
<p>{{$post['title']}}<p><br>

<p>Body :</p>
<p>{{$post['body']}}<p><br>
<p>Enabled:</p>
<p>{{$post['enabled']}}<p><br>
<p>User_id:</p>
<p>{{$post['user_id']}}<p><br>
@endsection