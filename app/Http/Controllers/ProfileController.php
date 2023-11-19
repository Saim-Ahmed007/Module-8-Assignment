<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(Request $request ,$id){
        $name = "Donald Trump";
        $age = "75";
        $data = array(
            "id"=> $id,
            "name"=> $name,
            "age"=> $age
        );

        setcookie(

        $name = 'access_token',    
        $value = '123-XYZ',         
        $minutes = time() + (60 * 1),   
        $path = '/',               
        $domain = $_SERVER['SERVER_NAME'],          
        $secure = false,            
        $httpOnly = true              
        );

        return response($data,200);

    }
}
