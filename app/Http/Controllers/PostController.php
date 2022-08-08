<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts= Post::all()  ;
        return view('posts.index')->with(['posts'=> $posts=Post::paginate(3)]);
    }

    
    public function create()
    {
        return view('posts.create');
    }

   
    public function store(Request $request)
    {
        $added=$request->all();
        
        Post::create(
            ['title' => $added['title'] , 'body' => $added['body'],'enabled' => $added['enabled'],'user_id' => $added['user_id']]);
            return  redirect(route('posts.index'));
    }

   
    public function show($id)
    {
        $post= Post::find($id) ;
        return view('posts.show')-> with(['post'=>$post]);
    }

   
    public function edit($id)
    {
        $post= Post::find($id) ;
        return view('posts.edit')-> with(['post'=>$post ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $added=$request->all();
        
        Post::where('id',$id)->update(
            ['Title' => $added['title'] , 'body' => $added['body'],'enabled' => $added['enabled'],'user_id' => $added['user_id'] ]);
            return  redirect(route('posts.index'));
    }

   
    public function destroy($id)
    {   $postt= Post::find($id) ;
        
        Post::where('id',$id)->delete();
        return  redirect(route('posts.index'));
            
      
    }
    public function delete(){
        $dds= Post::withTrashed()->restore();
        // dd($dds);
         return view('posts.delete')->with(['dds'=> $dds=Post::paginate(9)]);
    }
   
}
