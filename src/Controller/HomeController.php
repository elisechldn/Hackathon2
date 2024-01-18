<?php

namespace App\Controller;

use App\Service\ChatGPT;
use App\Service\WeatherData;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]

    public function index(ChatGPT $chatGPT, Request $request): Response
    {
        $responses = 'nsm';
        $message = $request->request->get('message');
        $okButton = $request->request->get('ok');
        // $userMessage = 'donne moi uniquement le nom de 5 produits de maquillage de la marque L\'Oréal qui conviennent a ce temps';
        // Appel à l'API GPT L'Oréal pour obtenir des recommandations
        if(!empty($okButton)){
        $response = $chatGPT->chat($message);
        $responses = $response->choices[0]->message->content; 
        dump($responses);
        }
        // Retournez les recommandations de l'API L'Oréal
        return $this->render('Home/index.html.twig', [
            'responses' => $responses,            
        ]);
    }















    /*public function index(WeatherData $weatherData, ChatGPT $ChatGPT): Response
    {
        // Appel à l'API météo (remplacez par l'API que vous utilisez)
        $city = 'Paris'; // Remplacez par la localisation réelle ou par la variable $localisation si elle est correctement définie
        $weatherInfo = $weatherData->getWeather($city);

        // En fonction des données météorologiques, ajustez le message utilisateur pour l'API GPT
        $weatherCondition = $weatherInfo['weather'][0]['description'];
        $userMessage = $weatherCondition . ' donne moi uniquement le nom de 5 produits de maquillage de la marque L\'Oréal
        qui conviennent a ce temps';

        // Appel à l'API GPT L'Oréal pour obtenir des recommandations
        $response = $ChatGPT->chat($userMessage);

        // Retournez les recommandations de l'API L'Oréal
        return $this->render('Home/index.html.twig', [
            'reponse' => $response
        ]);
    }*/
}
