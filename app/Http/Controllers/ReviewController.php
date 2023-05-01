<?php

namespace App\Http\Controllers;

use App\Models\Neww;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function index(){
        $title = "Страница отзывов";
        $description = 'Отзывы о научно-техническом творчестве в проектах "Лаборатории инновационного творчества". О "Технобаттлах" и пр. ';
        $reviews = Review::orderBy('id', 'desc')->get();
        return view('review', compact('title', 'reviews', 'description'));

    }

    public function store(Request $request){

        $request->validate([
            'author' => 'required|min:5|max:30',
            'job' => 'nullable|min:5|max:30',
            'message' => 'required|min:10|max:700',
            'avatar' => 'nullable|image|max:2048',
            'captcha' => 'required|captcha'
        ]);

        if($request->hasFile('avatar')){
            $folder = date('Y-m-d');
            /*$avatar = $request->file('avatar')->store("images/{$folder}");*/
            $image = \Image::make($request->file('avatar'));
            $nameAva = md5(microtime() . rand(0, 9999));
            $imgPath = "images/{$folder}/{$nameAva}.jpg";
            Storage::disk('local')->makeDirectory("public/images/{$folder}");
            $image->resize(139, 139, function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            }, 90);

            $image->save(storage_path('app/public/'.$imgPath));
        }else{
            $imgPath = "images/non_ava.png";
        }

        $review = Review::where('message', '=', $request->message)->get();

        if($review->count()){
            session()->flash('error', 'Такой отзыв уже есть, измените его');
        }else{
            Review::create([
                'author' => $request->author,
                'job' => $request->job,
                'message' => $request->message,
                'avatar' => $imgPath ?? null
            ]);
            session()->flash('success', 'Ваш отзыв добавлен!');
        }



        return redirect()->route('review');

    }

    public function reload(){
        return response()->json(['captcha' => captcha_img()]);
    }
}
