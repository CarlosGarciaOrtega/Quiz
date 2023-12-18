<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesionController extends Controller
{
    public function loginForm(){
        return view('login');
    }
    
    
     public function login(Request $request){
        
       session(['nombre' => $request->nombre]);
       
       if($request->nombre=='admin'){
            return redirect('/backend');
       }else{
           return   redirect('/');
       }
      
    }
    
    
    public function logout(){
        session()->forget('nombre');
            return redirect('/');
        
    }
}
