<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function FormRegister()
    {
        return view('client.signUp');
    }

    public function Register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required',],
            'email' => ['required','email','unique:users'],
            'password' => ['required'],
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $request->session()->regenerate();
        Auth::login($user);
        return redirect('/');
    }
    public function FormLogin()
    {
        return view('client.signIn');
    }
    public function Login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            
            $user = Auth::user();


                if ($user->role == 1) {
                    return redirect('admin');
                } else {
                    return redirect('/');
                }
                }
        return back()->onlyInput('email');
    }
    public function LogOut()
    {
        Auth::logout();
        \request()->session()->invalidate();
        return redirect('/');
    }

}
