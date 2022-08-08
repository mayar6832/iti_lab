<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = User::create(['name'=>'Dr. Harold Moen','email'=>'ellie.arvey@example.net','password'=>1234567]);
        // dd($user);
      $users= User::all()  ;
         return view('users.index')->with(['users'=> $users=User::paginate(9)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $added=$request->only('name','email','password');
        
        User::create(
            ['name' => $added['name'] , 'email' => $added['email'] ,'password'=>$added['password']]);
            return  redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $user= User::find($id) ;
        return view('users.show')-> with(['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {$user= User::find($id) ;
        // $users =$users[$id];

        return view('users.edit')-> with(['user'=>$user ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {    $added=$request->only('name','email');
        
        User::where('id',$id)->update(
            ['name' => $added['name'] , 'email' => $added['email'] ]);
            return  redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::find($id) ;
        
        User::where('id',$id)->delete();
        return  redirect(route('users.index'));
        // return "Remove the specified resource with id $id
        // from storage.";
    }
}
