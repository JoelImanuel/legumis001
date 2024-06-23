<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login (Request $request) {
        $request->validate( [
            'email'=> 'required',
            'password'=> 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect ()->intended('dashboard')->withSuccess('Login Berhasil');
        }
        return redirect("/")->withSucces('Gagal Login');
    }

    public function logout() {
        Auth::logout();

        return redirect("/");
    }
}
