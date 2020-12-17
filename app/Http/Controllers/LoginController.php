<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DonorModel;

class LoginController extends Controller
{
    function LoginIndex(){
    	return view('donor.login');
    }

    function onLogout(Request $request){
        $request->session()->flush();
        return redirect('/login');
    }


    function onLogin(Request $request){
       $email= $request->input('email');
       $password= $request->input('password');
       $countValue=DonorModel::where('email','=',$email)->where('password','=',$password)->count();

        if($countValue==1){
            $request->session()->put('email',$email);                                                                                                                                                                                                                                                                                                              
            return 1;
        }
        else{
            return 0;
        }

    }
}
