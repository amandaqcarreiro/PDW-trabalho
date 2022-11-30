<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('user.create_userr');
    }
    public function loginPage(){
        return view('user.loginn');
    }
    public function calendarPage(){
        return view('user.calendar');
    }
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required|string",
            "email"=>"required|string|unique:users,email",
            "password"=>"required|string|confirmed"
        ]);

        $user = User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>bcrypt($request->password)
        ]);

        $token = $user->createToken("registered")->plainTextToken;

        return response([
            "user"=>$user,
            "token"=>$token
        ], 201);
    }

    public function login(Request $req){
        $req->validate([
            "email"=>"required|string",
            "password"=>"required|string"
        ]);

        $user = User::where('email', $req->email)->first();
        if(! $user || ! Hash::check($req->password, $user->password)){
            return response(["message" => "Email ou senha invalido"], 401);
        }

        $token = $user->createToken("registered")->plainTextToken;

        return response([
            "user" => $user,
            "token" => $token
        ], 201);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response(["message"=>"Logout bem sucedido"], 200);
    }
}
