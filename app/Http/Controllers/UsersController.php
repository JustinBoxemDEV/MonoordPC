<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use \PDF;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $usersToShow = $users->where('is_deleted', '=', 0);
        
        return view('users.index', compact('usersToShow'));
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
        $user = new User;
        $user->fill($request->all());
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return redirect('/users')->with('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::all()->find($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all()->find($id);
        return view('users.edit', compact('user'));
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
        $user = User::all()->find($id);
//        $isAdmin = $request->input('is_admin');
//        dd($request);
            if (!$request->has('is_admin')) {
                $request->merge(['is_admin' => 0]);
            }
            if (!$request->has('is_verified')) {
                $request->merge(['is_verified' => 0]);
            }
            
       if(empty($request->get('password'))){

          $user->update($request->except('password')); 
          
        } else {
          $newPassword = bcrypt($request->get('password'));
          $request['password'] = $newPassword;
          $user->update($request->all());
       }
        return redirect('/users/')->with('succes');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
//        $user = User::all()->find($id);
//        $user->delete();
//        return redirect('/users/')->with('succes');
        
        $user = User::all()->find($id);
        if (!$request->has('is_deleted')) {
            $request->merge(['is_deleted' => 1]);
        }
        //$deactivate = $request->get('is_deleted');
        $user->update($request->all());
        return redirect('/users/')->with('succes');

    }

}
