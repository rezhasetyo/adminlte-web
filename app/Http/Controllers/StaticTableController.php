<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticTableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
        
    public function table()
    {
        return view('static.table');
    }

    public function dataTable()
    {
        return view('static.data-table');
    }
}
