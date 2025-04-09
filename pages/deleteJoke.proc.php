<?php
$id = $_GET['id'];  

$url = "https://api101.up.railway.app/jokes/$id";  

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  // Asegúrate de recibir una respuesta

$response = curl_exec($ch);

if(curl_errno($ch)) {
    echo 'Error al realizar la solicitud: ' . curl_error($ch);
} else {
    $json_response = json_decode($response, true);
    echo "Joke deleted successfully!";
}

curl_close($ch);
?>
