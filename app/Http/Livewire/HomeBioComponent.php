<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HomeBio;

class HomeBioComponent extends Component
{
    public function render()
    {
        $homeBio=HomeBio::first();
        return view('livewire.home-bio-component',['homeBio'=>$homeBio]);
    }
}
