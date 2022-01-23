<?php

namespace App\Http\Livewire\Climate;

use Livewire\Component;
use App\Actions\WebService\ApiWeatherMap;




class Show extends Component
{

   public function mount()
    {

    $api = new ApiWeatherMap("fc0735eb4f130b0104f933eed6227fdb");


    dd($api);

    }
    public function render()
    {
        return view('livewire.climate.show');
    }
}
