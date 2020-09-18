<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;
use Illuminate\Database\MySqlConnection;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        $adminContent = User::all();
        return view('adminManagement', compact('adminContent'));
    }
    public function create()
    {
        return view('createAdmin');
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'name'            =>  'required',
            'email' => 'required|email',
            'password'            =>  'required',
        ]);
        $adminContent = new User([
            'name'            =>    $request->get('name'),
            'email'            =>    $request->get('email'),
            'password'              =>    $request->get('password'),
        ]);
        $adminContent->save();
        return redirect('/a');
    }
    public function show($name)
    {
        $adminContent = DB::table('users')->where('name',$name)->first();
        return view('page.dynamic', ['adminContent' => $adminContent]);
    }
    public function edit($name)
    {
        $adminContent = DB::table('users')->where('name',$name)->first();
        return view('editAdmin', ['adminContent' => $adminContent]);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|exists:users,name',
            'email' =>  'required|email',
            'password' =>  'required',
        ]);
        $obj = \App\User::where('name', $request->name)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
           ]);
        return redirect('/a');
    }
    public function destroy(Request $request)
    {
        $obj = \App\User::where('name', $request->name)
        ->delete();
        return redirect('/a');
    }
    public function authenticate(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|exists:users,name',
            'email' => 'required|exists:users,email|email',
            'password'            =>  'required|exists:users,password'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/a');
        }
    }
}
