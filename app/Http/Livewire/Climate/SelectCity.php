<?php

namespace App\Http\Livewire\Climate;

use App\Models\City;
use App\Models\State;
use Livewire\Component;




class SelectCity extends Component
{

    public  $cities;
    public  $cityId;
   

    protected $rules=[
        'states'=>'require'
    ];

    public function mount()
    {

        #retorno dados das cidade para o select
  
        $this->cities = City::with('state')->get();
        


        
        
       
     
    }

    public function searchCity()
    {       

      
        #recebo os parametros selecionado  e emito o evento com os mesmo.
        $CityUF = City::with('state')->where('id', $this->cityId)->first();
        $this->emit('searchCity',$CityUF->name, $CityUF->state->uf);
        $this->reset('cityId');
    }
    public function render()
    {
        return view('livewire.climate.select-city');
    }
}
