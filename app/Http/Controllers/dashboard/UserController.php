<?php

namespace App\Http\Controllers\dashboard;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::table('users')->orderBy('id', 'desc')->get();
        return view('dashboard.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $user = DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'bio' => $request->bio,
            'avatar' => $request->avatar,
            'password' => Hash::make('password'),
            'remember_token' => Str::random(20),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if($user){
            return redirect()->route('userlist');
        }
        else{
            return "Something went wrong!";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        return view('dashboard.users.show', ['user' => $user[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        return view('dashboard.users.edit', ['user' => $user[0]]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, $id)
    {
        // dd($request);
        $user = DB::table('users')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'bio' => $request->bio,
            'avatar' => $request->avatar,
            'updated_at' => now()
        ]);
        if($user){
            return redirect()->route('userlist');
        }
        else{
            return "Something went wrong!";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $user = DB::table('users')->where('id', $id)->delete();
        if($user)
            return redirect()->route('userlist');
        return "Something went wrong!";
    }
}
