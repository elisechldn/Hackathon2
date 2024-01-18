<?php 

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class WeatherApi
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getWeather(float $latitude, float $longitude)
    {
        //Obligé de précise "client" car le méthode request()
        //appartient à HttpClientInterface et pas à WeatherApi
        $response = $this->client->request(
            'GET',
            'https://api.tomorrow.io/v4/weather/forecast?location=42.3478,-71.0466&apikey=siQzSnOjLXySbo0W28znF17vdZ5lQyGe',
        );

        $weatherData= $response->toArray();
        $temperatureCelcius =$this->fahrenheitToCelcius($weatherData['timelines']['daily'][0]['values']['temperatureAvg']);
        return $temperatureCelcius;
    }

    public function fahrenheitToCelcius(float $fahrenheit):float
    {

        $celcius = ($fahrenheit - 32)/1.8;

        return $celcius;
    }
}