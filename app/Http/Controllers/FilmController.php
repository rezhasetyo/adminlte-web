<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
// use App\Models\Genre;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class FilmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
        
    public function index()
    {
        $datas = Film::all();
        return view('film.index', compact('datas'));
    }

   
    public function create()
    {
        $genre = DB::table('genres')->get();
        return view('film.create', compact('genre'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'judul'         => 'required',
            'tahun'         => 'required',
            'ringkasan'     => 'required',
            'genre_id'      => 'required',
            'poster'        => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ], [
            'judul'         => 'judul wajib diisi !!',
            'tahun'         => 'tahun wajib diisi !!',
            'ringkasan'     => 'ringkasan wajib diisi !!',
            'genre_id'      => 'genre id wajib diisi !!',
            'poster'        => 'format gambar salah !!'
        ]);

        $model = new Film;
        $model->judul = $request->judul;
        $model->tahun = $request->tahun;
        $model->ringkasan = $request->ringkasan;
        $model->genre_id = $request->genre_id;

        // $name = $request->file('poster')->getClientOriginalName();
        // $path = $request->file('poster')->store('public/poster');
        // $model->poster = $request->poster;
        $posterName = time(). '.' .$request->poster->extension();
        $request->poster->move(public_path('poster'), $posterName);
        $model->poster = $posterName;

        $model->save();
        return redirect('film');
    }

    
    public function show($id)
    {
        $model = Film::find($id);
        return view('film.show', compact('model'));
    }

    
    public function edit($id)
    {   
        $genre = DB::table('genres')->get();
        $model = Film::find($id);
        return view('film.edit', compact('model', 'genre'));
    }

    
    public function update(Request $request, $id)
    {
        $model = Film::find($id);
        $request->validate([
            'judul'         => 'required',
            'tahun'         => 'required',
            'ringkasan'     => 'required',
            'genre_id'      => 'required',
            // 'poster'        => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ], [
            'judul'         => 'judul wajib diisi !!',
            'tahun'         => 'tahun wajib diisi !!',
            'ringkasan'     => 'ringkasan wajib diisi !!',
            'genre_id'      => 'genre id wajib diisi !!',
            // 'poster'        => 'format gambar salah !!'
        ]);
        

        if($request->has('poster')){
            $model->judul = $request->judul;
            $model->tahun = $request->tahun;
            $model->ringkasan = $request->ringkasan;
            $model->genre_id = $request->genre_id;
            $posterName = time(). '.' .$request->poster->extension();
            $request->poster->move(public_path('poster'), $posterName);
            $model->poster = $posterName;
        }else{
            $model->judul = $request->judul;
            $model->tahun = $request->tahun;
            $model->ringkasan = $request->ringkasan;
            $model->genre_id = $request->genre_id;
        }
        
        $model->save();
        return redirect('film');
    }

    
    public function destroy($id)
    {   
        $model = Film::find($id);
        $path = "poster/";
        File::delete($path . $model->poster);
        $model->delete();
        return redirect('film');
    }
}
