<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VolunteerModel;

class VolunteerLoginController extends Controller
{
    function LoginIndex(){
    	return view('volunteer.volunteer_login');
    }

    function onLogout(Request $request){
        $request->session()->flush();
        return redirect('/volunteer_login');
    }


    function onLogin(Request $request)
    {
       $email= $request->input('email');
       $password= $request->input('password');
       $countValue=VolunteerModel::where('email','=',$email)->where('password','=',$password)->count();

        if($countValue==1){
            $request->session()->put('email',$email);                                                                                                                                                                                                                                                                                                              
            return 1;
        }
        else{
            return 0;
        }

    }
}
