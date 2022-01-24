<?php

namespace App\Actions\WebService;

use App\Models\Climate;

class ApiWeatherMap
{


    /**
     * BASE URL
     * @var string
     */

     const BASE_URL="https://api.openweathermap.org";

/**
      * Name da cidade
      * @var string 
      */
      private $cityName;

      /**
      * uf
      * @var string 
      */
      private $ufName;

     /**
      * KEY DE ACCESSO A API
      * @var string 
      */
      private $apiKey;

      /**
       * Controi a classe definindo a key da api
       * @param string $apiKey
       */
      public function __construct($apiKey)
      {
          $this->apiKey = $apiKey;
      }

      /**
       * obtem o clima de uma cidade
       * @param string $city
       * @param string $uf       * 
       * @return array
       */
      public function searchClimate($city, $uf )
      {
        $this->cityName = $city;
        $this->ufName = $uf;

        return $this->get('/data/2.5/weather',[
            'q' => $city.',BR-'.$uf.',BRA'
        ]);

      }

     
      /**
       * Executa a query get na api
       * @param string $resource
       * @param array $params
       * @return array
       */

      private function get($resource, $params = [])
      {
          #Parametros para consulta regionais

          $params['units']='metric';
          $params['lang']='pt_br';
          $params['appid']=$this->apiKey;

          #endpoint para cidades BR
          
          $endpoint = self::BASE_URL.$resource.'?'.http_build_query($params);
          
            # iniciar e setra as comfig do CURL
            $curl = curl_init();

            curl_setopt_array($curl,[
                CURLOPT_URL => $endpoint,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => 'GET'
            ]);


            #resposta

            $response = curl_exec($curl);

            #fecha curl
            curl_close($curl);


            #pegar o retorno salvar ou atualiza a tabela climate com o typo e o data
            $dataClimate = Climate::select('id')->where('type', $this->cityName.$this->ufName)->first();

            if($dataClimate){
               $update = Climate::where('id',$dataClimate->id )->update([
                    'type' => $this->cityName.$this->ufName,
                    'data' => $response
                ]);
                       
            return  $update;
            }else{
                $create = Climate::create([
                    'type' => $this->cityName.$this->ufName,
                    'data' => $response
                ]); 
                          
            return  $create;
            }
    

      }



      

}