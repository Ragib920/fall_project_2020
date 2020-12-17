<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DonorModel;
use App\PostModel;

class DonorController extends Controller
{
    public function donor_home()
    {
      return view('donor.donor_home');
    }



    public function my_post(Request $request)
    {
      $post = PostModel::where("donor_id",$request->session()->get("email"))->orderBy('id','DESC')->get();
      return view('donor.my_post',compact('post'));
    }



    public function signup()
    {
      return view('donor.signup');
    }



    public function registration(Request $request)
    {
      $donors = New DonorModel();
      $donors->name =$request->name;
      $donors->email =$request->email;
      $donors->contact =$request->contact;
      $donors->area =$request->area;
      $donors->address =$request->address;
      $donors->password =$request->password;
      $donors->save();
      return back()->with('signup','You have successfully registered! Now you are a Proud Donor of "Care For Dogs"');
    }



    public function create_post()
    {
      return view('donor.create_post');
    }



    public function new_post(Request $request)
    {
      $posts = New PostModel();
      $posts->title =$request->title;
      $posts->description =$request->description;
        $posts->donor_id =$request->session()->get("email");
      $posts->status ='0';
      $posts->save();
      return back()->with('create_post','Post succesfully created');
    }



    public function delete_post($id)
    {
      PostModel::where('id',$id)->delete();
      return back()->with('/donor/delete_post','Post succesfully deleted');
    }



    public function edit_post($id)
    {
      $posts= PostModel::find($id);
      return view('/donor/edit_post',compact('posts'));
    }



    public function updated_post(Request $request)
    {
      $posts= PostModel::find($request->id);
      $posts->title =$request->title;
      $posts->description =$request->description;
      $posts->save();
      return back()->with('updated_post','Post succesfully updated');
    }




}
