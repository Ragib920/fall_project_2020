<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DonorModel;
use App\VolunteerModel;
use App\PostModel;

class AdminController extends Controller
{
    public function home()
    {
      return view('admin.dashboard');
    }



    public function donor_list()
    {
      $donor = DonorModel::orderBy('id','DESC')->get();
      return view('admin.donor_list',compact('donor'));
    }



    public function volunteer_list()
    {
      $volunteer = VolunteerModel::orderBy('id','DESC')->get();
      return view('admin.volunteer_list',compact('volunteer'));
    }



    public function help_post_list()
    {
      $post = PostModel::orderBy('id','DESC')->get();
      return view('admin.help_post_list',compact('post'));
    }



    public function change_password()
    {
      return view('admin.change_password');
    }



    // public function count_post()
    // {
    //   $post = PostModel::all();
    //   return view('admin.dashboard', compact('post'));
    // }



    // public function count_volunteer()
    // {
    //   $volunteer = VolunteerModel::all();
    //   return view('admin.dashboard', compact('volunteer'));
    // }



    // public function count_donor()
    // {
    //   $donor = DonorModel::all();
    //   return view('admin.dashboard', compact('donor'));
    // }



}
