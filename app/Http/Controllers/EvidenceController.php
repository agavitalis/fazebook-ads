<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EvidenceController extends Controller
{

    public function __construct() {

        $this->middleware('auth');
        $this->middleware('adminguard');
        
    }

    public function confirmads(){

        
        
        $adverts = DB::select('select * from adverts where state = 1');
 
        $params = [
            'title' => 'Confirm an Ad',
            
        ];

        return view('admin.confirmads',compact('adverts'))->with($params);
    }



function confirm_user($ad_id){ 
    
    $publishers = DB::table('evidence')->get();
    
    $params = [
        'title' => 'Confirm Publishers evidence',
        
    ];

    return view('admin.confirmad_user',compact('publishers'))->with($params);

   }



function confirmad_user2(Request $request){
    
    $id = $request->advertid;
    
    $adverts = DB::update('update evidences set confirmed = 1 where id = ?',[$id]);

                     $params = [
                'title' => 'Confirm an ad',
                'status' => 'User confirmed successfully'    ];
    
     return redirect('/confirmads')->with($params);
                
        }
    
      
function credit_user(Request $request){
    
    $id = $request->credit;
    
   // $balance = DB::select('select * from publishers where email = ?',[$id]);
    $publisher=DB::table('publishers')->where('email',$id)->first();
    
  // dd($publisher->email);

if($publisher->plan==1){

    $adverts = DB::update('update publishers set balance = 300 + ? where email = ?',[$publisher->balance,$id]);

}
else if($publisher->plan==2){

    $adverts = DB::update('update publishers set balance = 500 + ? where email = ?',[$publisher->balance,$id]);
}   
else if($publisher->plan==3){
    
        $adverts = DB::update('update publishers set balance = 1000 + ? where email = ?',[$publisher->balance,$id]);
}    
else{
return back()->with('error','You cannot credit this guy');

}  
     $params = [
                'title' => 'Confirm an ad',
                'status' => 'User credited successfully'
                
            ];
    
            return back()->with($params);
                
}
} 