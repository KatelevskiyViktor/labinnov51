<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            /*'password' => Hash::make($request->password)*//*same that last under*/
        ]);


//        Auth::login($user);
        return redirect()->route('login')->with('success', 'Регистрация пройдена, авторизируйтесь.');
    }

    public function loginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)/*for work middleware need to create middleware and enter record. Also enter record to Kernel.php*/
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
//            session()->flash('success', 'You are logged');
            if(Auth::user()->is_admin){
                return redirect()->route('news.index');
            }else{
                return redirect()->home();
            }
        }

        return redirect()->back()->with('error', 'Неправильный логин или пароль');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.create');
    }
}
