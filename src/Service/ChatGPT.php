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
        $this->url = 'https://api.openai.com/v1/chat/completion';
        $this->headers = [
            'Authorization: Bearer ' . $this->apiKey,
            'Content-Type: application/json'
        ];
    }

    public function chat($city)
    {
        $data = [
            'messages' => [
                ['role' => 'system', 'content' => 'You are a helpful assistant.'],
                ['role' => 'user', 'content' => $city]
            ]
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response);
    }
}