<?php

namespace App\Http\Livewire\Climate;

use Carbon\Carbon;
use Livewire\Component;
use App\Actions\WebService\ApiWeatherMap;




class Show extends Component
{
    public string $city ='Cacoal';
    public string $uf='RO';
    public  $temperature;
    public  $feelsLike;
    public  $temperatureMin;
    public  $temperatureMax;
    public $iconStatus;

    protected $listeners = [
        'searchCity' =>'search'
    ];
    



   public function mount()
    {

    $api = new ApiWeatherMap("fc0735eb4f130b0104f933eed6227fdb");


    $climate = $api->searchClimate($this->city, $this->uf);

    $this->temperature = $climate['main']['temp'] ?? 'Dados não encontrado';
    $this->feelsLike = $climate['main']['feels_like'] ?? 'Dados não encontrado';
    $this->statusClimate = $climate['weather'][0]['description'] ?? 'Dados não encontrado';
    $this->temperatureMin = $climate['main']['temp_min'] ?? 'Dados não encontrado';
    $this->temperatureMax = $climate['main']['temp_max'] ?? 'Dados não encontrado';
    

    }
    public function search($city, $uf)
    {
     
    $api = new ApiWeatherMap("fc0735eb4f130b0104f933eed6227fdb");

   
        
        
    
    $this->city = $city;
    $this->uf = $uf;
    $climate = $api->searchClimate($city, $uf);

    $this->temperature = $climate['main']['temp'] ?? 'Dados não encontrado';
    $this->feelsLike = $climate['main']['feels_like'] ?? 'Dados não encontrado';
    $this->statusClimate = $climate['weather'][0]['description'] ?? 'Dados não encontrado';
    $this->temperatureMin = $climate['main']['temp_min'] ?? 'Dados não encontrado';
    $this->temperatureMax = $climate['main']['temp_max'] ?? 'Dados não encontrado';
  


   

    }

    public function render()
    {
        return view('livewire.climate.show');
    }


}
