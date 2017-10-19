<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Advertizer;
use DB;

class AdvertizerController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
   
   public function index(){
       $publisher=DB::table('advertizers')->where('email',Auth::user()->email)->first();
       return view('advertizer.index',compact('publisher'));
   } 

   public function postadvert(Request $request, $id=null){
            if($request->isMethod('GET'))
            {
                $publisher=DB::table('advertizers')->where('email',Auth::user()->email)->first();
                return view('advertizer.regadd',compact('publisher'));
            } 

            elseif($request->isMethod('POST')){

               // dd($request);
               $advert=Advertizer::findOrFail($id);
               $advert->phone =$request->phone;
               $advert->company_name= $request->company_name;
               $advert->url= $request->about_add;

                $advert->update();
                return back()->with('success'," Your advert successfully recorded, we will be in touch soonest ");


            }

   }
}
