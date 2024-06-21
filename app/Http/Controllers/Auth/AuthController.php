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
        'email'=> 'required',
        'password'=> 'required',
    ]);
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        return redirect ()->intented('dashboard')
        ->withSuccess('Login Berhasil');
    }
    return redirect("login")->withSucces('Gagal Login');
}    

public function updateTotalNominal(Request $request) {
    $totalNominal = $request->input('totalNominal');
    Session::put('totalNominal', $totalNominal);
    return response()->json(['success' => true]);
}
}