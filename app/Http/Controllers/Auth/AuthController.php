<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

public function postLogin (Request $request) {
    $request->validate( [
        'username'=> 'required',
        'password'=> 'required',
    ]);
    $credentials = $request->only('username', 'password');
    if (Auth::attempt($credentials)) {
        return redirect ()->intented('dashboard')
        ->withSuccess('Login Berhasil');
    }
    return redirect("login")->withSucces('Gagal Login');
}    
}
