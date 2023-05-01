<?php

namespace App\Http\Controllers;

use App\Models\Neww;
use App\Models\Uemail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = "Главная страница";
        $description = "Первый городской чемпионат по строительству мостов из спагетти \"Технобаттлы\" - строительство мостов из спагетти. Проект реализуется при поддержке Фонда президентских грантов, а также при поддержке Министерства образования и науки и Министерства культуры Мурманской области.";
        $events = Neww::orderBy('id','desc')->where('event', '=', '1')->limit(2)->get();
        return view('home', compact('title', 'description', 'events'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required|email|unique:uemails'
        ]);


        Uemail::create([
            'email' => $request->email,
        ]);
        session()->flash('success', 'Вашa почта добавлена!');


        return redirect()->route('home');

    }
}
