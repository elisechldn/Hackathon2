<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\WeatherApi;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(WeatherApi $weatherApi): Response
    {

        $latitude = 42.3478;
        $longitude = -71.0466;

        $weatherData = $weatherApi->getWeather($latitude, $longitude);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'weather'=> $weatherData,
        ]);
    }

    public function showWeather(WeatherAPI $weatherApi)
    {
        $latitude = 42.3478;
        $longitude = -71.0466;

        $weatherData = $weatherApi-> getWeather($latitude, $longitude);
        return $this->render('includes/_weatherwidget.html.twig', [
            'weather' => $weatherData,
        ]);
    }
}
