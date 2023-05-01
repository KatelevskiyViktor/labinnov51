<?php

namespace App\Http\Controllers\Bigbroo;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index(){
            $albums = Album::orderBy('id', 'desc')->paginate(5);
            return view('bigbro.gallery.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bigbro.gallery.create');
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
            'name_alb' => 'required|unique:albums',
            'name_alb_en' => 'required|unique:albums',
            'count_ph' => 'required',
            'img' => 'required',
        ]);



        $data = $request->all();
        Album::create($data);
        if($request->hasFile('img')) {
            $allowedfileExtension = ['jpeg','jpg','png'];
            $i = 1;
            foreach ($request->file('img') as $photo) {
                $extension = $photo->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);
                if($check){
                    $image = \Image::make($photo);
                    $namePhoto = 'img-'.$i;
                    $photoPathLarge = "images/{$request->name_alb_en}/large/{$namePhoto}.jpg";
                    $photoPathThumbs = "images/{$request->name_alb_en}/thumbs/{$namePhoto}.jpg";
                    Storage::disk('local')->makeDirectory("public/images/{$request->name_alb_en}/large");
                    Storage::disk('local')->makeDirectory("public/images/{$request->name_alb_en}/thumbs");
                    $image->save(storage_path('app/public/' . $photoPathLarge));
                    $image->resize(128, 128, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    }, 90);

                    $image->save(storage_path('app/public/' . $photoPathThumbs));
                    $i++;
                }
            }
        }

        return redirect()->route('gallery.index')->with('success', 'Альбом добавлен!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::find($id);
        return view('bigbro.gallery.edit', compact('album'));
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
            'name_alb' => 'required',
            'name_alb_en' => 'required',
            'count_ph' => 'required',
        ]);

        $album = Album::find($id);
        $data = $request->all();

        $album->update($data);


        return redirect()->route('gallery.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $album = Album::find($id);
        Storage::deleteDirectory('images/'.$album->name_alb_en);
        $album->delete();
        return redirect()->route('gallery.index')->with('success', 'Альбом удалена');
    }
}
