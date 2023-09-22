<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function homepage()
   {
      return view('homepage');
   }

   public function profile()
   {
      return view('profile');
   }
}
