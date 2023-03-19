<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     /**
     * ログイン画面表示
     *
     * @param  \Illuminate\Http\Request  $request
     */

     public function login() {
        return view('auth.login');
     }
    /**
     * 認証の試行を処理
     *
     * @param  \Illuminate\Http\Request  $request
     */

     public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors([
            'email' => 'ログイン情報が間違っています',
        ])->onlyInput('email');
     }
}
