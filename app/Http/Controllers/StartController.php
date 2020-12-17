<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
      return view('pages.index');
    }
  
    public function recent_activities()
    {
      return view('pages.recent_activities');
    }
}
