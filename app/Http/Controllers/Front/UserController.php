<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserController extends Controller
{
   public function showUserName() {
       return "Mostafa Abido" ;
   }

   public function getIndex() {
    /*$data=[];
    $data['name'] = 'mostafa abido' ;
    $data ['id'] = 5;  
    return view ('welcome',$data);
    */
    $obj = new \stdClass();
    $obj -> name = ' mostafa abido';
    $obj -> id = 8 ;
    $obj -> gender = 'male' ;
    return view ('welcome',compact('obj'));
   }
}
