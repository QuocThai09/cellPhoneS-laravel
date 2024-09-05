<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
   public function index(){
      $categoty_db = Category::all();
      return view('index',['categoty_db'=>$categoty_db]);
   }
}
