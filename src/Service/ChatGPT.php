<?php
// 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
namespace App\Service;


class ChatGPT
{
    private string $apiKey;
    private string $url;
    private array $headers;

    public function __construct()
    {
        $this->apiKey = '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';
        $this->url = 'https://api.openai.com/v1/chat/completions';
        $this->headers = [
            'Authorization: Bearer ' . $this->apiKey,
            'Content-Type: application/json'
        ];
    }

    public function chat($city)
    {
        $apiKey = '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';
        $url = 'https://api.openai.com/v1/chat/completions';

        $data = array(
            "model" => "gpt-3.5-turbo",
            "messages" => [
                ["role" => "system",
                "content" => "You are a helpful assistant."],
                ["role" => "user",
                "content" => $city]
            ],
            "max_tokens" => 100,
            "temperature" => 0.7,
        );

        $headers = array(
            'Authorization: Bearer ' . $apiKey,
            'Content-Type: application/json'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        if ($response === false) {
            die('Erreur cURL : ' . curl_error($ch));
        }
        curl_close($ch);

        return json_decode($response);
    }
}