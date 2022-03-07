<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Models\hotwater;

class retrivehotwatercontroller extends Controller
{
    public function index()
    {
      $hotwaters = hotwater::all()->toArray();
      return view('findhotwater',compact('hotwaters'));
    }
}
