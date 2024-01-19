<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\WeatherApi;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index()
    {
        return $this->render('base.html.twig');
    }

    #[Route('/weather', name: 'app_weather')]
    public function index0(WeatherApi $weatherApi): Response
    {

        $latitude = 43.42519;
        $longitude = 6.768337;

        $weatherData = $weatherApi->getWeather($latitude, $longitude);

        return $this->render('base.html.twig', [
            'controller_name' => 'HomeController',
            'weather'=> $weatherData,
        ]);
    }

    public function showWeather(WeatherAPI $weatherApi)
    {
        $latitude = 43.42519;
        $longitude = 6.768337;

        $weatherData = $weatherApi-> getWeather($latitude, $longitude);
        return $this->render('includes/_weatherwidget.html.twig');
    }

    #[Route('/points', name: 'app_points')]
    public function qrcode()
    {
        return $this->render('fidelisation/qrcode.html.twig');
    }
}
