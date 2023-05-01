<?php

namespace App\Http\Controllers;

use App\Models\Techbattle;
use Illuminate\Http\Request;

class TechbattlesController extends Controller
{
    public function index(){
        $i = 0;
        $title = "страница о Технобаттлах";
        $description = "Проект \"Технобаттлы-2021\" - строительство мостов из спагетти. Проект реализуется при поддержке Фонда президентских грантов. В рамках проекта будут проведены соревнования среди учащихся школ, ВУЗов и средних профессиональных заведений!";
        $techbattles = Techbattle::orderBy('id', 'desc')->paginate(1);
        return view('techbattles', compact('title', 'techbattles', 'i', 'description'));
    }
}
