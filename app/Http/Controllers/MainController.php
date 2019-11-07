<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
   public function index() {

       $groups=Group::get();
       $users=User::get();
       foreach ($users as $user) {
           dump($user->group);
           dump($user->profile);
           dump($user->messages);
       }
dd('a');
         return view('welcome',compact('groups'));
   }
}
