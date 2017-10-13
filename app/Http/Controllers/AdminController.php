<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\Publisher;


class AdminController extends Controller
{
    public function __construct() {
        
        $this->middleware('auth');
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
}
