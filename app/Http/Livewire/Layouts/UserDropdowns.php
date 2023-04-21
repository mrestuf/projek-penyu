<?php

namespace App\Http\Livewire\Layouts;

use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class UserDropdowns extends Component
{
    use LivewireAlert;

    public function render()
    {
      return view('livewire.layouts.user-dropdowns');
    }

    public function signOut()
    {
      Auth::logout();
      $this->flash('success', 'Successfully Logout', [
        'position' => 'top-end',
        'timer' => 1500,
        'toast' => true,
        'timerProgressBar' => true,
        'width' => '300',
      ], '/wisata');
      
    }
}
