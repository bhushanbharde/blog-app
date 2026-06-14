<?php

namespace App\Http\Controllers\dashboard;

// use App\Events\UserCreated;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();

        return response()->json(['users' => $users]);
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
        $user = false;
        
        $message = 'User created successfully!';
        try {
            $userData = [
                'name' => $request->name,
                'email' => $request->email,
                'bio' => $request->bio,
                'avatar' => $request->avatar,
                'password' => Hash::make('password'),
                'remember_token' => Str::random(20),
                'created_at' => now(),
                'updated_at' => now()
            ];

            $user = DB::table('users')->insert($userData);

        } catch (Exception $e) {
            $user = false;
            $message = $e;
        }

        return response()->json(['message' => $message, 'status' => $user]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $user = User::where('id', $id)->get();
        $user = User::findOrFail($id);

        //Event and Listeners
        // UserCreated::dispatch($user);die;

        return response()->json(['status' => true, 'user' => $user]);
        return view('dashboard.users.show', ['user' => $user[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->get();
        return view('dashboard.users.edit', ['user' => $user[0]]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, $id)
    {
        // dd($request);
        $user = User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'bio' => $request->bio,
            'avatar' => $request->avatar,
            'updated_at' => now()
        ]);
        if ($user) {
            return response()->json(['message' => 'User updated successfully!', 'status' => $user]);

            return redirect()->route('dash.users.index')->with('status', 'User updated successfully!');
        } else {
            return response()->json(['message' => 'Something went wrong!', 'status' => $user]);

            return "Something went wrong!";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $user = User::where('id', $id)->delete();
        if ($user) {
            return response()->json(['message' => 'User deleted successfully!', 'status' => $user]);

            return redirect()->route('dash.users.index')->with('status', 'User deleted successfully!');
        }
        return response()->json(['message' => 'Something went wrong!', 'status' => $user]);
        return "Something went wrong!";
    }
}
