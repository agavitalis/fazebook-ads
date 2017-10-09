<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\Publisher;

class GeneralController extends Controller
{
    //this function will display, to both the publisher and everybody

public function readmore($id=null){
    
        // $adverts = DB::select('select * from adverts');
        if($id!= null)
        {
            $publisher=DB::table('publishers')->where('email',Auth::user()->email)->first();
            $advert=DB::table('adverts')->where('id',$id)->first();
           // dd($advert);
            return view('general.readmore',compact('advert','publisher'));
        } 
}
}