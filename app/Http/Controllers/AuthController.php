<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    /* @GET
*/
public function loginForm()
{
    return view('custom.login');
}

/* @POST
*/
public function login(Request $request){
    $this->validate($request, [
        'username' => 'required|username',
        'password' => 'required',
        ]);
    if (\User::attempt([
        'username' => $request->username,
        'password' => $request->password])
    ){
        return redirect('/home');
    }
    return redirect('/login')->with('error', 'Invalid username address or Password');
}
/* GET
*/
public function logout(Request $request)
{
    if(\User::check())
    {
        \User::logout();
        $request->session()->invalidate();
    }
    return  redirect('/login');
}
}

