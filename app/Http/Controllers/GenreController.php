<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use PDF;


class GenreController extends Controller
{
    public function index()
    {
        $datas = Genre::all();
        return view('library.genre', compact('datas'));
    }

    public function createPDF() {
        // retreive all records from db
            $datas = Genre::all();

        // share data to view
            view()->share('genres',$datas);
            // $pdf = PDF::loadView('library.pdf', $datas);
            $pdf = PDF::loadView('library.cetakpdf',['datas'=>$datas]);
  
        // download PDF file with download method
            return $pdf->download('hasil.pdf');

    }
}