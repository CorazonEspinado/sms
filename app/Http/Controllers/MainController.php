<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
   public function index() {

       $user=User::get();
//       dd($user);
       return view('welcome');
   }
}
