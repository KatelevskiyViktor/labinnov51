<?php

namespace App\Http\Controllers\Bigbroo;

use App\Http\Controllers\Controller;
use App\Models\Neww;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $newws = Neww::orderBy('id','desc')->paginate(5);
        return view('bigbro.news.index', compact('newws'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bigbro.news.create');
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
        $request->validate([
            'author' => 'required',
            'title' => 'required|unique:newws',
            'under_title' => 'required',
            'content' => 'required|unique:newws',
            'event'=> 'nullable',
            'img' => 'nullable|image',
            'created_at' =>'required'
        ]);

        $data = $request->all();
        $data['event'] = isset($data['event']) ? 1 : null;

        $data['img'] = Neww::uploadImage($request);

        Neww::create($data);


        return redirect()->route('news.index')->with('success', 'Новость добалена!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = Neww::find($id);
        return view('bigbro.news.edit', compact('news'));
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
            'author' => 'required',
            'title' => 'required',
            'under_title' => 'required',
            'content' => 'required',
            'img' => 'nullable|image',
            'created_at' =>'required'
        ]);

        $news = Neww::find($id);
        $data = $request->all();

        if($file = Neww::uploadImage($request, $news->img)){
            $data['img'] = $file;
        }/*to if you want to change record your image did not leave*/

        $news->update($data);


        return redirect()->route('news.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $news = Neww::find($id);
        Storage::delete(str_replace("storage/", "","$news->img"));
        $news->delete();
        return redirect()->route('news.index')->with('success', 'Новость удалена');
    }
}
