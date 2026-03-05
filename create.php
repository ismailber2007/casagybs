<?php

$token = getenv("ECOTRACK_TOKEN");

$url = "https://app.ecotrack.dz/api/v1/create/order";

$data = [
    "nom_client" => $_POST['customer_name'],
    "telephone" => $_POST['phone'],
    "adresse" => $_POST['address'],
    "code_wilaya" => $_POST['wilaya'],
    "commune" => $_POST['commune'],
    "montant" => $_POST['price'],
    "remarque" => $_POST['note'],
    "type" => "1",
    "boutique" => "CasaGyps"
];

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer $token"
]);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);

curl_close($ch);

echo "<pre>";
print_r($response);
echo "</pre>";

?>
