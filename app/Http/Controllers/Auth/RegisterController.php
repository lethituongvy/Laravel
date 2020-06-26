<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    function index()
    {
        return view("auth.register");
    }
    function register(Request $request)
    {    $name = $request->name;
        $username = $request->username;
        $password = $request->password;
        $birth = $request->birth;
        $email = $request->email;
        $phone = $request->phone;
        $role = $request->role;
        $hashPassword = Hash::make($password);
        DB::table('users')->insert([ "name" => $name,"username" => $username, "password" => $hashPassword, "birth" => $birth,"email" => $email,"phone" => $phone, "role" => $role]);
        return redirect('/auth/login');
    }
}
