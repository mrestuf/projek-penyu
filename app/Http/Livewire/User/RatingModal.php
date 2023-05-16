<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class RatingModal extends Component
{
    public $rating;
    public $message;

    public function render()
    {
        return view('livewire.user.rating-modal');
    }

    public function reviewSubmit()
    {
      $this->validate([
        'rating' => 'required|in:1,2,3,4,5',
        'message' => 'required|string',
      ]);

      $creds = [
        'rating' => $this->rating,
        'message' => $this->message,
      ];
    }
}
