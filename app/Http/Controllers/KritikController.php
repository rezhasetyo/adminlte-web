<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Kritik;

class KritikController extends Controller
{
    public function store(Request $request){
        $kritik = new Kritik;
        $kritik->isi = $request->isi;
        $kritik->point = $request->point;
        $kritik->film_id = $request->film_id;
        $kritik->user_id = Auth::id();
        
        $kritik->save();
        return redirect()->back();
    }
}
