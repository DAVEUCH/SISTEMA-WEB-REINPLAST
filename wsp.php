<?php
define('CHAT_TOKEN', 'p2wp72mg9gkcu63q');
define('CHAT_URL', 'https://eu16.chat-api.com/instance158521');


function sendMessage($to,$msg){
	$data = [
		'phone' => $to,
		'body' => $msg

	];

	$json = json_encode($data);
	$url = CHAT_URL.'sendMessage?token='.CHAT_TOKEN;
	$options = stream_context_create(['http' =>[
		'method' =>'POST',
		'header' =>'Content-type: application/json',
		'content' =>$json,
	]
	]);

	$result = file_get_contents($url,false,$options);

	if ($result)return json_decode($result); 
		

	return false;

	}



 $msg = "Dear Customer your order with number of Rafael Chourio has been recieved¡";

 $result = sendMessage('51960352717',$msg);

 if ($result !== false) {
 	if ($result->sent ==1) {
 		echo "mensaje enviado manito<br>";
 		echo $result->message;
 	}
 	else{
 		echo $result->message;

 	}

 }
else{
	var_dump($result);
}

  ?>