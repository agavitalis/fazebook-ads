<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Publisher;
use App\Models\Advertizer;
use App\Models\Cashout;
use App\Models\Evidence;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\DB;

class PublisherController extends Controller
{

    public function __construct() {
         $this->middleware('auth');
     }
    
    public function index(){
        $publisher=DB::table('publishers')->where('email',Auth::user()->email)->first();
        return view('publisher.index',compact('publisher'));
    } 

    public function plans(){
                 $publisher=DB::table('publishers')->where('email',Auth::user()->email)->first();
                return view('publisher.plan',compact('publisher'));
    } 

    public function postadd(Request $request,$id=null){

        if($request->isMethod('GET'))
        {
                $publisher=DB::table('publishers')->where('email',Auth::user()->email)->first();

                //get the ads
                $adverts = DB::select('select * from adverts');

                return view('publisher.postadd',compact('publisher','adverts'));
         }
        
        elseif($request->isMethod('POST'))
        {

                $file = $request->advert;
                // $link = $request->link;
           
                if($file->getSize()<2000000){
                                   
                 
                   
                    if(!DB::table('evidence')->where('publisher_id',Auth::user()->email)->first()){

                            //I saved this guy with his original name
                        $name= $file->getClientOriginalName();
                        $file->storeAs('public',$name);
                        $imageurl= Storage::url($name);
                         
                     
                      $evidence = new evidence();

                      $evidence->publisher_id = Auth::user()->email;
                      $evidence->address = $imageurl;

                      $evidence->save();
                                        
                        return back()->with('success','Your Evidence is successfully uploaded.');
        
                        }


                        
                    else{
                        return back()->with('You can only upload one file at a time..');
                        
                    }
        
              }
                
              else{
                return back()->with('error','You must upload a file size less than 1MB ');
        
                 }
            
        }
    }
     
    public function referal(){
                $email=Auth::user()->email;
                $publisher=DB::table('publishers')->where('email',$email)->first();
                $referals=DB::table('publishers')->where('referal',$email)->get();
                return view('publisher.referal',compact('publisher','referals'));
            } 

    public function profile(Request $request,$id=null){
        
                     $email=Auth::user()->email;

                    if($request->isMethod('GET'))
                    {
                        $publisher=DB::table('publishers')->where('email',$email)->first();
                        return view('publisher.profile',compact('publisher'));
                    }
                    elseif($request->isMethod('POST'))
                    {
                       
                       
                        if($request->hasFile('image'))
                        {
                             //I saved this guy with his original name
                            $name= $request->image->getClientOriginalName();
                            $request->image->storeAs('public',$name);
                            $imageurl= Storage::url($name);
                            // get the image url and save it for me
                            $publisher =DB::table('publishers')->where('profilepics',$imageurl)->first();
                            if($publisher){
                                 //Storage::delete($delete->imageurl);
                                 $delete=Publisher::findOrFail($id);
                                 Storage::delete($delete->profilepics);
                                 return back()->with('error','Profile Picture already in the system.');
                                }
                            else{
                                $publisher = Publisher::findOrFail($id);
                                $publisher->profilepics=$imageurl;
                                $publisher->update();
                            }
                        }   
                            
                       // $publisher=DB::table('publishers')->where('email',$email)->first();
                        $publisher = Publisher::find($id);
                       // dd($request);
                        $publisher->name= $request->name;
                        $publisher->phone=$request->phone;
                        $publisher->bankname=$request->bankname;
                        $publisher->accountname=$request->accountname;
                        $publisher->accountno=$request->accountno;
                        
                        
                       

                        $publisher->update();
                        return back()->with('success','Profile Successfully Updated.');
                        }
                        
                    }   
            
            
    public function cashout(Request $request,$id=null){
        
            // $email=Auth::user()->email;

            if($request->isMethod('GET'))
            {
                $publisher=DB::table('publishers')->where('email',Auth::user()->email)->first();
                return view('publisher.cashout',compact('publisher'));
            } 

            elseif($request->isMethod('POST'))
            {
                $publisher=DB::table('publishers')->where('email',Auth::user()->email)->first();

                if($publisher->balance < $request->amount )
                {
                    return back()->with('error','You can either withdrew all or lesser.');
                }
                else{

                    $cashout = new Cashout();
                    $cashout->name= Auth::user()->name;
                    $cashout->email= Auth::user()->email;
                    $cashout->accountno= $request->accountno;
                    $cashout->accountname= $request->accountname;
                    $cashout->bankname= $request->bankname;
                    $cashout->amount= $request->amount;

                    $cashout->save();
                    return back()->with('success','Your cashout have been noted, You will be credited within 24hours');




                }

            }
}
// ln -s /home/solidcas/facebookads/storage/app/public/ /home/solidcas/public_html/facebookads.com.ng


}