<?php

namespace App\Http\Livewire\Wisatas;

use App\Models\Wisata;
use Livewire\Component;

class WisatasCard extends Component
{
    public $search = "";
    public $count = 4;

    public function render(Wisata $wisata)
    {
      $wisatas = $wisata->where('name_wisata', 'like', '%'.$this->search.'%')->take($this->count)->get();
      $total_wisatas = $wisata->count();

        return view('livewire.wisatas.wisatas-card', compact('wisatas', 'total_wisatas'));
    }

    public function loadmore()
    {
      $this->count += 4;
      sleep(2);
    }
}
