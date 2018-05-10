<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','ASC')->paginate(5);
        return view('admin.user.index')
        ->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->name= $request->name;
        $usuario->username = $request->username;
        $usuario->email = $request->email;
        $usuario->password= \Hash::make($request->password);	
        $usuario->save();
        
        return redirect()->route('home');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = user::find($id);
        return view('admin.user.edit')
        ->with('user',$user);
    }

    public function update(Request $request, $id)
    {
        $usuario=User::find($id);
        $usuario->name = $request->name;
        $usuario->username = $request->username;
        $usuario->email = $request->email;
        $usuario->nivel = $request->nivel;
        if($request->password != $usuario->password){
            $usuario->password= \Hash::make($request->password);
        }
        
        $usuario->save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::find($id);
        $user -> delete();
        //flash('Se ha eliminado correctamente.')->success()->important();
        return redirect()->route('user.index');
    }
}
