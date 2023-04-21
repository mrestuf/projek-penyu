<?php

namespace App\Http\Livewire\Authentication;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Register extends Component
{
    use LivewireAlert;

    public $firstname;
    public $lastname;
    public $email;
    public $phonenumber;
    public $password;

    public function render()
    {
        return view('livewire.authentication.register');
    }

    public function store()
    {
      
      $this->validate([
        'firstname' => 'required|string|min:3',
        'lastname' => 'required|string|min:3',
        'phonenumber' => 'required|numeric',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6'
      ]);
      
      $data = [
        'firstname' => $this->firstname,
        'lastname' => $this->lastname,
        'phonenumber' => $this->phonenumber,
        'email' => $this->email,
        'password' => Hash::make($this->password),
        'role' => 1
      ];

      $user = new User();
      $user->fill($data);
      $user->save();

      $this->flash('success', 'Successfully Created User', [
        'position' => 'top-end',
        'timer' => 3000,
        'toast' => true,
        'timerProgressBar' => true,
      ], '/auth/login');

      $this->resetData();
    }

    public function resetData() {
      $this->firstname = "";
      $this->lastname = "";
      $this->email = "";
      $this->phonenumber = "";
      $this->password = "";
    }
}
