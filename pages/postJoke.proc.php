<?php
$url = "https://api101.up.railway.app/jokes";  

$data = array(
    'author' => $_REQUEST['author'],  
    'joke' => $_REQUEST['joke'],      
    'source' => $_REQUEST['source']   
);

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if(curl_errno($ch)) {
    echo 'Error al realizar la solicitud: ' . curl_error($ch);
} else {
    $json_response = json_decode($response, true);
    echo "Joke created successfully!";
}

curl_close($ch);
?>
