<?php  
$data = [
    'phone' => '51960352717', // Recibe el telefono
    'body' => 'EEEEEEE', // Mensage
];
$json = json_encode($data); // codifica la  data de JSON
// URL for request POST /message
$url = 'https://eu16.chat-api.com/instance158521/message?token=p2wp72mg9gkcu63q';
// Make a POST request
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Send a request
$result = file_get_contents($url, false, $options);?>