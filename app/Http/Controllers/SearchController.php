<?php

namespace App\Http\Controllers;

use App\Models\Neww;
use App\Models\Techbattle;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function index(Request $request){
        $title = "Страница поиска по сайту";
        $description = 'Поиск упоминания запрашиваемой информации в проектах и новостях "Лаборатории инновационного творчества" ';
        $i = 0;
        $request->validate([
            's' => 'required'
        ]);

        $s = $request->s;
        $newws = Neww::where('content', 'LIKE', "%{$s}%")
            ->orWhere('title', 'LIKE', "%{$s}%")
            ->orWhere('under_title', 'LIKE', "%{$s}%")
            ->orWhere('author', 'LIKE', "%{$s}%")
            ->orWhere('created_at', 'LIKE', "%{$s}%")
            ->paginate(4, ['*'], 'pagen');
        $techbattles = Techbattle::where('about_content', 'LIKE', "%{$s}%")
            ->orWhere('our_partners', 'LIKE', "%{$s}%")
            ->orWhere('question', 'LIKE', "%{$s}%")
            ->orWhere('meth_recom', 'LIKE', "%{$s}%")
            ->orWhere('title', 'LIKE', "%{$s}%")
            ->orWhere('created_at', 'LIKE', "%{$s}%")
            ->paginate(1, ['*'], 'paget');
        return view('search', compact('newws', 's', 'techbattles', 'i', 'title', 'description'));
    }
}
