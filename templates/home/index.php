    <?php
    // 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

    function callOpenAI($message)
    {
        $apiKey = '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';
        $url = 'https://api.openai.com/v1/chat/completion';
        $data = [
            "model" => "gpt-3.5-turbo",
            "messages" => [
                [
                    "role" => "system",
                    "content" => "You are a helpful assistant."
                ],
                [
                    "role" => "user",
                    "content" => $message
                ],

            ],
            "max_tokens" => 100,
            "temperature" => 0.7,
        ];
        $headers = [
            'Authorization: Bearer ' . $apiKey,
            'Content-Type: application/json'
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    if (isset($_POST['message']) && isset($_POST['ok'])) {
        $message = $_POST['message'];
        $response = callOpenAI($message);
        $data = json_decode($response, true);
        echo "<p>".$data['choices']."</p>";
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Discute avec cette pute d'API GPT</h1>

    <form method="post">
        <input type="text" name="message" placeholder="Entrez un message">
        <input type="submit" name="ok" value="Envoyer">
    </form>
</body>

</html>