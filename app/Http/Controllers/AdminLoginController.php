<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminModel;

class AdminLoginController extends Controller
{
    function LoginIndex(){
    	return view('admin.admin_login');
    }

    function onLogout(Request $request){
        $request->session()->flush();
        return redirect('/admin_login');
    }


    function onLogin(Request $request)
    {
       $email= $request->input('email');
       $password= $request->input('password');
       $countValue=AdminModel::where('email','=',$email)->where('password','=',$password)->count();

        if($countValue==1){
            $request->session()->put('email',$email);                                                                                                                                                                                                                                                                                                              
            return 1;
        }
        else{
            return 0;
        }
    }   
}
