<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\User;
//use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gate;

class MainController extends Controller
{
   public function index() {
       $this->authorize('isManager');
//       if (Gate::allows('isAdmin')) {
           $groups=Group::get();
           $users=User::get();
           $user=Auth::user();
           return view('welcome',compact('groups'));
//       }

   }
}
