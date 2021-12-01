<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $datas = Cast::all();
        return view('cast.index', compact('datas'));
    }

    public function create(){   
        $model = new Cast;
        return view('cast.tambah', compact('model'));
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio'  => 'required',
        ], [
            'nama' => 'nama wajib diisi !!',
            'umur' => 'umur wajib diisi !!',
            'bio'  => 'bio wajib diisi !!'
        ]);

        $model = new Cast;
        $model->nama = $request->nama;
        $model->umur = $request->umur;
        $model->bio = $request->bio;
        $model->save();
        return redirect('cast');
    }

    public function show($id){
        $model = Cast::find($id);
        return view('cast.show', compact('model'));
    }

    public function edit($id){
        $model = Cast::find($id);
        return view('cast.edit', compact('model'));
    }

    public function update(Request $request, $id){   
        $model = Cast::find($id);
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio'  => 'required',
        ], [
            'nama' => 'nama wajib diisi !!',
            'umur' => 'umur wajib diisi !!',
            'bio'  => 'bio wajib diisi !!'
        ]);

        $model->nama = $request->nama;
        $model->umur = $request->umur;
        $model->bio = $request->bio;
        $model->save();
        return redirect('cast');
    }

    public function destroy($id){
        $model = Cast::find($id);
        $model->delete();
        return redirect('cast');
    }

    
}


