<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class GetController extends Controller
{
 

    public function getMethodDataRetrive($information){
        return $information;
    }
    public function postMethodDataRetrive(Request $request){
       session()->put(['name'=>  "Ruhul Amin",'email' =>"ruhul@gmail.com"]);
        //Session::set(['viewModelData'=>  "abcdefg"] );
        return redirect()->route('postToGet');
    }
    
    public function postToGetFunction(){
        if(Session::has('name')){
            $name = Session::get('name');
            echo $name;
        }
        if(Session::has('email')){
            $email = Session::get('email');
            echo "  ". $email;
        }
        
    }
}
