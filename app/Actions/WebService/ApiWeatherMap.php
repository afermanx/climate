<?php

namespace App\Actions\WebService;





class ApiWeatherMap
{


    /**
     * BASE URL
     * @var string
     */

     const BASE_URL="https://api.openweathermap.org";



     /**
      * KEY DE ACCESSO A API
      * @var string 
      */
      private $apiKey;

      public function __construct($apiKey)
      {
          $this->apiKey = $apiKey;
      }

}