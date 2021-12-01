<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $profile = Profile::where('user_id', Auth::id()) -> first();

        return view('profile.index', compact('profile'));
    }

    public function update(Request $request, $id){
        $profile = Profile::find($id);
        $request->validate([
            'umur' => 'required',
            'alamat' => 'required',
            'bio'  => 'required',
        ], [
            'umur' => 'umur wajib diisi !!',
            'alamat' => 'alamat wajib diisi !!',
            'bio'  => 'bio wajib diisi !!'
        ]);

        $profile->umur = $request->umur;
        $profile->alamat = $request->alamat;
        $profile->bio = $request->bio;
        $profile->save();
        return redirect('/profile');
    }

}

