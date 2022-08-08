@extends('layouts.app')
@section('title', 'list')
@section('content')
   
    <table class="table">
        <thead><tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            
            <th scope="col">Actions</th>
</tr>
</thead>
<tbody>
    @foreach($users as $user)
    <tr>
       
        <td>{{$user['id']}}</td>
        <td><a href="{{route('users.show',['id'=>$user['id']])}}">{{$user['name']}}</a><t/td>
        
        <td>{{$user['email']}}</td>
        <td>

          <a href="{{route('users.edit',['id'=>$user['id']])}}">  <button name="edit" style="background-color:blue ;color:white"  >Edit</button></a>
           <form method="post" action="{{route('users.destroy',['id'=>$user['id']])}}">
            @method('DELETE')
            @csrf
           <button name="delete" style="background-color:red; color:white">delete</button></form>
        </td>
        
</tr>
@endforeach
</tr>
</tbody>
    </table>
    
    @endsection

