<?php

namespace App\Http\Livewire\Authentication;

use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Login extends Component
{
    use LivewireAlert;

    public $email;
    public $password;
    public $loadingText;

    public function render()
    {
      return view('livewire.authentication.login');
    }

    public function login()
    {
      $this->validate([
        'email' => 'required|string|min:3',
        'password' => 'required|string|min:6',
      ]);

      $creds = [
        'email' => $this->email,
        'password' => $this->password,
      ];

      $this->loadingText = 'logging in...';
      $valid = Auth::guard('web')->attempt($creds);

      if($valid) {
        $this->flash('success', 'Successfully Login', [
          'position' => 'top-end',
          'timer' => 1500,
          'toast' => true,
          'timerProgressBar' => true,
          'width' => '300',
        ], '/wisata');
      }else {
        $this->resetData();
  
        $this->alert('error', 'Invalid Username or Password', [
          'position' => 'top-end',
          'timer' => 3000,
          'toast' => true,
          'timerProgressBar' => true,
          'width' => '400',
        ]);
      }

    }

    public function resetData() {
      $this->email = '';
      $this->password = '';
      $this->loadingText = '';
    }
}
