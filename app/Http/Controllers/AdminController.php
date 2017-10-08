<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
   
    public function index()
    {
        $adverts = DB::select('select * from adverts');
        // dd($adverts);
        return view('admin.index',compact('adverts'));
    }

}
