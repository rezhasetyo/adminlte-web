<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class ProfileController extends Controller
{   
    public function index(){
        
    }

    public function create(){   
        return view('crud2.create');
    }

    public function store(Request $request){
        $request->validate([
            'umur'      => 'required',
            'bio'       => 'required',
            'alamat'    => 'required']);
        $query = DB::table('profiles')->insert([
            "umur"   => $request["umur"],
            "bio"    => $request["bio"],
            "alamat" => $request["alamat"]
        ]);
        // $query->save();

        // $model->umur = $request->umur;
        // $model->bio = $request->bio;
        // $model->alamat = $request->alamat;
        // $model->save();
        return redirect('crud2.create');
    }
}
