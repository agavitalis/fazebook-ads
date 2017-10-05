<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    
    public function index(){

        return view('publisher.index');
    } 

    public function plans(){
        
                return view('publisher.plan');
            } 

    public function postadd(){
        
                return view('publisher.postadd');
            }
            
    public function profile(){
        
                return view('publisher.profile');
            } 

    public function referal(){
        
                return view('publisher.referal');
            }
            
    public function cashout(){
        
                return view('publisher.cashout');
            } 
}
