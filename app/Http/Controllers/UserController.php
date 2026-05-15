<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('users.index',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request 
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name=$request->name;   
        $user->email=$request->email;   
        $user->password=$request->password;   
        $user->birthday=$request->birthday;   
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit',compact('user'));
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
        $user = new User();
        $user->name=$request->name;   
        $user->email=$request->email;   
        $user->password=$request->password;   
        $user->birthday=$request->birthday;   
        $user->save();
        return redirect()->route('users.index');
    }
    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}