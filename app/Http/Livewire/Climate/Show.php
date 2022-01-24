<?php

namespace App\Http\Livewire\Climate;

use Carbon\Carbon;
use Livewire\Component;
use App\Actions\WebService\ApiWeatherMap;
use App\Models\Climate;

use function GuzzleHttp\json_decode;
use function GuzzleHttp\json_encode;

class Show extends Component
{
    public string $city = 'Cacoal';
    public string $uf = 'RO';
    public  $temperature;
    public  $feelsLike;
    public  $temperatureMin;
    public  $temperatureMax;
    public  $date;
    public  $messageAPI;

    protected $listeners = [
        'searchCity' => 'search'
    ];




    public function mount()
    {

        # no mount verifico se ha dados no banco e se eles é maior ou igual 20min
        # se nao conter dados ou passou de 20min da ultima Req ele chama a api se nao pega no banco
        $dataClimate = Climate::select('data', 'created_at', 'updated_at')
            ->where('type', $this->city . $this->uf)->first();

        if($dataClimate!=null){
        
        $dateCreate = Carbon::parse($dataClimate->created_at);
        $dateUpdate = Carbon::parse($dataClimate->updated_at);
        $this->date = Carbon::now();
        $diffDateCreate = $dateCreate->diffInMinutes($this->date);
        $diffDateUpdate = $dateUpdate->diffInMinutes($this->date);
        $this->messageAPI = "";


        if ($diffDateCreate >= 20 && $diffDateUpdate >= 20) {
            $api = new ApiWeatherMap("fc0735eb4f130b0104f933eed6227fdb");
            $api->searchClimate($this->city, $this->uf);

            $this->messageAPI = "Consultando a API...";
        }

    }else{
        
        $api = new ApiWeatherMap("fc0735eb4f130b0104f933eed6227fdb");
        $api->searchClimate($this->city, $this->uf);

        

        $this->messageAPI = "Consultando a API...";

        $dataClimate = Climate::select('data', 'created_at', 'updated_at')
        ->where('type', $this->city . $this->uf)->first();
    }


        $climate =  json_decode($dataClimate->data);






        $this->temperature = $climate->main->temp ?? 'Dados não encontrado';
        $this->feelsLike = $climate->main->feels_like ?? 'Dados não encontrado';
        $this->statusClimate = $climate->weather[0]->description ?? 'Dados não encontrado';
        $this->temperatureMin = $climate->main->temp_min ?? 'Dados não encontrado';
        $this->temperatureMax = $climate->main->temp_max ?? 'Dados não encontrado';
    }
    public function search($city, $uf)
    {
        

        # no search recebo os parabetro do compoenent searchCity e com verifico se ha dados no banco e se eles é maior ou igual 20min
        # se nao conter dados ou passou de 20min da ultima Req ele chama a api se nao pega no banco

        $dataClimate = Climate::select('data', 'created_at', 'updated_at')
        ->where('type', $city . $uf)->first();

        $this->city = $city;
        $this->uf = $uf;

       

    

        if($dataClimate!=null){
            $dateCreate = Carbon::parse($dataClimate->created_at);
            $dateUpdate = Carbon::parse($dataClimate->updated_at);
            $this->date = Carbon::now();
            $diffDateCreate = $dateCreate->diffInMinutes($this->date);
            $diffDateUpdate = $dateUpdate->diffInMinutes($this->date);
            
        
        
            if ($diffDateCreate >= 20 && $diffDateUpdate >= 20) {

               
                $api = new ApiWeatherMap("fc0735eb4f130b0104f933eed6227fdb");
                $api->searchClimate($city, $uf);
        
                $this->messageAPI ;

               
            }

         
        
        }else{
           
            $api = new ApiWeatherMap("fc0735eb4f130b0104f933eed6227fdb");
            $api->searchClimate($city, $uf);

            
    
            $this->messageAPI = "Consultando a API...";

            $dataClimate = Climate::select('data', 'created_at', 'updated_at')
            ->where('type', $city . $uf)->first();
        }

            
        
        
   

    $climate =  json_decode($dataClimate->data);






    $this->temperature = $climate->main->temp ?? 'Dados não encontrado';
    $this->feelsLike = $climate->main->feels_like ?? 'Dados não encontrado';
    $this->statusClimate = $climate->weather[0]->description ?? 'Dados não encontrado';
    $this->temperatureMin = $climate->main->temp_min ?? 'Dados não encontrado';
    $this->temperatureMax = $climate->main->temp_max ?? 'Dados não encontrado';



    }

    public function render()
    {
        return view('livewire.climate.show');
    }
}
