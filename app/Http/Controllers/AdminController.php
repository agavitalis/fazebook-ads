<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\Publisher;
use App\Models\Advertizer;


class AdminController extends Controller
{
    public function __construct() {
        
        $this->middleware('auth');
        $this->middleware('adminguard');
    }
           
    public function index()
    {
        $adverts = DB::select('select * from adverts');
        // dd($adverts);
        return view('admin.index',compact('adverts'));
    }


    public function transferpayment(Request $request)
    {
        if($request->isMethod('GET'))
        {
                $publishers = DB::table('publishers')->where('plan',0)->get();
                return view('admin.transferpayment',compact('publishers'));
        }
        
        elseif($request->isMethod('POST'))
        {
            $plan=$request->plan;
            $id=$request->publisher_id;

            $publisher = Publisher::find($id);
            // let me check the plan to be credicted
            
            if($plan == 1)
            {
                $publisher->plan=1;
                $publisher->datesubscribed=date("Y-m-d G:i:s");
                $publisher->update();
               // $adverts = DB::update('update publishers set referal_balance = 150 + ? where email = ?',[$publisher->referal_balance,$publisher->referal]);
                

                try{
                    //we credit the referal
                    $adverts = DB::update('update publishers set referal_balance = 150 + ? where email = ?',[$publisher->referal_balance,$publisher->referal]);
                    
                }
               // $adverts = DB::update('update publishers set referal_balance = 150 + ? where email = ?',[$publisher->balance,$publsher->referal]);
               finally{
                return back()->with('success','Publisher plan successfull activated.');
                }
            }
           else if($plan == 2)
            {
                $publisher->plan=2;
                $publisher->datesubscribed=date("Y-m-d G:i:s");
                $publisher->update();

                try{
                    //we credit the referal
                    $adverts = DB::update('update publishers set referal_balance = 250 + ? where email = ?',[$publisher->referal_balance,$publisher->referal]);
                    
                }
                finally{
                    return back()->with('success','Publisher plan successfull activated.');
                }
                
            }
           else if($plan == 3)
            {
                $publisher->plan=3;
                $publisher->datesubscribed=date("Y-m-d G:i:s");
                $publisher->update();

                try{
                    //we credit the referal
                    $adverts = DB::update('update publishers set referal_balance = 500 + ? where email = ?',[$publisher->referal_balance,$publisher->referal]);
                    
                }

                finally{
                    return back()->with('success','Publisher plan successfull activated.');
                }
            }
            else
            {
               
                return back()->with('error','Publisher not  activated.');
            }
            
        }
    }


    //i took care of the advertizer here
    public function viewadvertizer(Request $request)
    {
        if($request->isMethod('GET'))
        {
            $advertizer = DB::select('select * from advertizers where `url` != "" ' );
            return view('admin.advertizer',compact('advertizer'));

        }
        elseif($request->isMethod('POST')){


                $id = $request->advert;
        
                $update =advertizer::findOrFail($id);
        
                $update->url="";
                $update->update();
        
                $params = [
                            'title' => 'List of advertizers',
                            'status' => 'Advert deleted successfully'
                    
                             ];
        
                 return redirect('/viewadvertizer')->with($params);
        }

    }


}