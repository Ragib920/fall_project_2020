<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\VolunteerModel;
use App\PostModel;


class VolunteerController extends Controller
{
    public function home()
    {
      $post = PostModel::orderBy('id','DESC')->get();
      return view('volunteer.volunteer_home',compact('post'));
    }



    public function pickedup_request()
    {
      return view('volunteer.volunteer_pickedup_request');
    }



    public function signup()
    {
      return view('volunteer.signup');
    }



    public function registration(Request $request)
    {
      $volunteers = New VolunteerModel();
      $volunteers->name =$request->name;
      $volunteers->email =$request->email;
      $volunteers->contact =$request->contact;
      $volunteers->area =$request->area;
      $volunteers->address =$request->address;
      $volunteers->password =$request->password;
      $volunteers->save();
      return back()->with('signup','You have successfully registered! Now you have become a volunteer of "Care For Dogs"');
    }



    public function update_post($id)
    {
      $post= PostModel::find($id);
      $post->status='1';
      $post->save();
      return redirect('/volunteer/home');
    }

}
