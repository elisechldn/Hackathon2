<?php 

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class WeatherApi
{
    public function getWeather(HttpClientInterface $client) //pas de retour
    {
        //Obligé de précise "client" car le méthode request()
        //appartient à HttpClientInterface et pas à WeatherApi
        $response = $client->request(
            'GET',
            'https://api.tomorrow.io/v4/weather/forecast?location=42.3478,-71.0466&apikey=siQzSnOjLXySbo0W28znF17vdZ5lQyGe',
        );
        return $response->getContent();
    }

    public function fahrenheitToCelcius(int $celcius):int
    {
        $fahrenheit = 0;
        $celcius = ($fahrenheit - 32)/1.8;

        return $celcius;
    }
}