<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Film;

class GenreController extends Controller
{
    public function index()
    {
        $datas = Genre::all();
        return view('genre.index', compact('datas'));
    }

    public function show($id)
    {
        $model = Genre::find($id);
        return view('genre.show', compact('model'));
    }

}
