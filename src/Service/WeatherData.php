<?php

namespace App\Service;

class WeatherData
{
    private $apiKey = '';
    private $apiUrl = '';

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getWeather($city)
    {
        $url = $this->apiUrl . "?q={$city}&appid={$this->apiKey}&units=metric";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            // Gestion des erreurs de requête
            echo 'Erreur API météo : ' . curl_error($ch);
            return null;
        }

        curl_close($ch);

        $weatherData = json_decode($response, true);

        return $weatherData;
    }
}