<?php

namespace App\Http\Livewire\Crowdfundings;

use App\Models\Crowdfunding;
use Livewire\Component;

class CrowdfundingsCard extends Component
{
    public $search = "";
    public $count = 4;

    public function render(Crowdfunding $crowdfunding)
    {
      $crowdfundings = $crowdfunding->where('nama_pengembangan_wisata', 'like', '%'.$this->search.'%')->take($this->count)->get();
      $total_crowdfundings = $crowdfunding->count();

        return view('livewire.crowdfundings.crowdfundings-card', compact('crowdfundings', 'total_crowdfundings'));
    }

    public function loadmore()
    {
      $this->count += 4;
      sleep(2);
    }
}
