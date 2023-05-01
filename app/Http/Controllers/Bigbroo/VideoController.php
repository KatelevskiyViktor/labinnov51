<?php

namespace App\Http\Controllers\Bigbroo;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index(){
        $videos = Video::orderBy('id', 'desc')->paginate(5);
        return view('bigbro.video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bigbro.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(StoreCategory $request)*//*one more way to validation*/
    public function store(Request $request)
    {
        /*session()->flash('success', 'You are logged');*/
        $request->validate([
            'title_alb' => 'required',
            'title_vid' => 'required|unique:videos',
            'video' => 'required|unique:videos',
        ]);

        $data = $request->all();
        Video::create($data);

        return redirect()->route('video.index')->with('success', 'Видео добавлено!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::find($id);
        return view('bigbro.video.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title_alb' => 'required',
            'title_vid' => 'required',
            'video' => 'required',
        ]);

        $video = Video::find($id);
        $data = $request->all();

        $video->update($data);


        return redirect()->route('video.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();
        return redirect()->route('video.index')->with('success', 'Видео удалено');
    }
}
