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

        $latitude = 43.42519;
        $longitude = 6.768337;

        $weatherData = $weatherApi->getWeather($latitude, $longitude);

        return $this->render('home/index.html.twig', [
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

    // fidelisation
    
    #[Route('/points', name: 'app_points')]
    public function fidelisation()
    {
        if($this->getUser()) {
            return $this->render('fidelisation/qrcode.html.twig');
        } else {
            return $this->redirectToRoute('app_login');
        }
        
    } 
}
