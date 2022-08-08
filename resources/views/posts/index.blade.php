@extends('layouts.app')
@section('title', 'list')
@section('content')
   
    <table class="table">
        <thead><tr>
            <th scope="col">title</th>
            <th scope="col">body</th>
            
            
            <th scope="col">Actions</th>
</tr>
</thead>
<tbody>
    @foreach($posts as $post)
    <tr>
       
        <td><a href="{{route('posts.show',['id'=>$post['id']])}}">{{$post['title']}}</a></td>
        <td>{{$post['body']}}<t/td>
        
        
        <td>

          <a href="{{route('posts.edit',['id'=>$post['id']])}}">  <button name="update" style="background-color:blue ;color:white"  >UPDATE</button></a>
           <form method="post" action="{{route('posts.destroy',['id'=>$post['id']])}}">
            @method('DELETE')
            @csrf
           <button name="delete" style="background-color:red; color:white">DELETE </button></form>
          
        </td>
        
</tr>
@endforeach

</tr>
<a href="{{route('posts.delete',['id'=>$posts['id']])}}"> <button name="deleted">DELETEd_POSTS </button></a>
</tbody>
    </table>
    
    @endsection

