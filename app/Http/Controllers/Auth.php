<?php

namespace App\Http\Controllers;

class Auth extends Controller{

  public static function attempt($phone, $password){
    if($phone == '01676176820' && $password == '12345678' ){
      return 1;
    }
    return 0;
  }
  
}