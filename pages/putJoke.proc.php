<?php
$id = $_GET['id'];  

$url = "https://api101.up.railway.app/jokes/$id"; 

$data = array(
    'title' => $_REQUEST['title'],
    'price' => $_REQUEST['price'],
    'description' => $_REQUEST['description'],
    'image' => $_REQUEST['image'],
    'category' => $_REQUEST['category']
);

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if(curl_errno($ch)) {
    echo 'Error al realizar la solicitud: ' . curl_error($ch);
} else {
    $json_response = json_decode($response, true);
    echo "Joke updated successfully!";
}

curl_close($ch);
?>
