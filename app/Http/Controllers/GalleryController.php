<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Video;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $i = 0;
        $title = "Галерея";
        $description = "Фото и видео отчёты по проходящим соревнованиям, научно-техническому творчеству. Строительство мостов из спагетти и пр.";
        $albums = Album::orderBy('id')->get();
        $videos = Video::orderBy('id')->get();

        return view('gallery', compact('title', 'description', 'albums', 'i', 'videos'));
    }
}
