<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{
  public function userLogin(Request $request){
   $isLogin= Auth::attempt($request->phoneNumber, $request->password);

   if($isLogin == 1){
    Session::put('isLogin', 'true');
    return 'Login In';
   }
   Session::put('isLogin', '');
   return 'Invalid User';
  }


  public function balance(){
    return 20000;
  }

  public function cashout(){
    return 'Cashout Done';
  }
}
