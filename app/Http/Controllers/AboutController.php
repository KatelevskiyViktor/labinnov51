<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $title = "О нас";
        $description = "Автономная некоммерческая организация содействия развитию и популяризации науки и техники \"Лаборатория инновационного творчества, г. Мурманск";
        return view('about', compact('title', 'description'));
    }
}
