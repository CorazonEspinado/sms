<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
   public function index() {

       $groups=Group::get();
       $users=User::get();
       $user=Auth::user();

         return view('welcome',compact('groups'));
   }
}
