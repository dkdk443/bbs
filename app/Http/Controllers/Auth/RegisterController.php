<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /**
     * 会員登録画面表示
     *
     * @param  \Illuminate\Http\Request  $request
     */

     public function register() {
        return view('auth.register');
     }

     public function registUser(StoreUserRequest $request) {
        $validated = $request->validated();
        $hashedPassword = Hash::make($validated['password']);

        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = $hashedPassword;
        $user->user_id = Str::random(8);
        $user->save();

        Auth::login($user);

        return redirect()->intended('/');
     }
}
