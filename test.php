<?php


$ch = curl_init();
// CONNECT TO API, VERIFY MY API KEY AND PASSWORD AND GET THE LEAD DATA
curl_setopt($ch, CURLOPT_URL,"https://app.kartra.com/api");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
    http_build_query(
        array(
            'app_id' => 'ByGvzegWuASj',
			'api_key' => 'qkohPGNF',
			'api_password' => 'WaLkIAvHZRBh',
            'get_lead' => [
			   'email' => 'hemlata@avdevs.com',
			]
        )
    )
);

// REQUEST CONFIRMATION MESSAGE FROM API…
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
$server_json = json_decode($server_output);
print_r($server_json);
switch ($server_json->status) {
    case "Error" :
        // process what error was about
        break;
    case "Success" :
        // after this you can use the info passed from kartra in your own scripts. 
        // Ex: $server_json->lead_details contains the lead details
        break;
}

?>

<!-- 'app_id' => 'ByGvzegWuASj',
'api_key' => 'qkohPGNF',
'api_password' => 'WaLkIAvHZRBh', -->