<?php

namespace App\Http\Controllers;

use App\Models\Neww;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(){
        $i = 0;
        $title = "Новости";
        $description = 'Новости и полезные статьи, о строительстве мостов из спагетти пр. и проходящих мероприятиях в проектах "Лаборатории инновационного творчества"';
        $newws = Neww::orderBy('id', 'desc')->paginate(4);
        return view('news', compact('title', 'newws', 'i', "description"));
    }

    public function show($id){
        $news = Neww::where('id', '=', $id)->get();
        $news = $news[0];
        $title = $news->title;
        $description = $news->content;
        return view('onenews', compact('title', 'news', 'description'));
    }
}
