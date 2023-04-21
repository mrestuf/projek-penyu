<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AuthenticationController extends Controller
{
  use LivewireAlert;
  
  public function loginUser() {
    return view('authentication.sign-in');
  }

  public function registerUser() {
    return view('authentication.sign-up');
  }
}
