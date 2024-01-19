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

    public function getWeather($latitude, $longitude)
    {
        //Obligé de précise "client" car le méthode request()
        //appartient à HttpClientInterface et pas à WeatherApi
        $response = $this->client->request(
            'GET',
            'https://api.tomorrow.io/v4/weather/forecast?location=' . $latitude . ',' . $longitude . '&apikey=ghzvzNTHjSxpSAFxkDZcKvcTbaQJxRwT'
        );
        $weatherData= $response->toArray()['timelines']['daily'][0]['values']['temperatureAvg'];

        return $weatherData;
    }
}
