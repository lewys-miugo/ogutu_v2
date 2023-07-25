<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeBio;


class AdminHomeBioComponent extends Component
{
    public function render()
    {
        $homeBio=HomeBio::first();

        return view('livewire.admin.admin-home-bio-component',['homeBio'=>$homeBio]);
    }
}
