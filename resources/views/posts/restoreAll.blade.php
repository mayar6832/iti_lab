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
    @foreach($adds as $dd)
    <tr>
       
        <td><a href="{{route('posts.show',['id'=>$post['id']])}}">{{$post['title']}}</a></td>
        <td>{{$post['body']}}<t/td>
        
        
       
        
</tr>
@endforeach

</tr>

</tbody>
    </table>
    
    @endsection

