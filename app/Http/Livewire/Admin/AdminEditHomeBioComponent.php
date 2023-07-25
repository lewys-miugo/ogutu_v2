<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeBio;

class AdminEditHomeBioComponent extends Component
{
    public $homeBio;
    public $home_bio=[];

    public function mount()
    {
        $homeBio =HomeBio::first();
        $this->home_bio=$homeBio->home_bio;

    }

    public function updateHomeBio()
    {
        $homeBio=HomeBio::first();

        $homeBio->home_bio=$this->home_bio;
        $homeBio->save();
        session()->flash('message','Home biography has been updated');

        return redirect()->route('admin.home.bio');
    }
    public function render()
    {
        // $homeBio=HomeBio::first();,['homeBio'=>$homeBio]

        return view('livewire.admin.admin-edit-home-bio-component');
    }
}
