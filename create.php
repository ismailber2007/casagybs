<?php

$token = "3pmqr8IU94RkLoUnTJilpfda92FZAEuiJ56OHXZVoQmBxq9ouWTJrEptedAd";

$url = "https://documenter.getpostman.com/view/14517169/Tz5je15g#377308a2-3dee-41cb-9c36-4b8dc94d9fc2"; // ضع الرابط الصحيح هنا

$data = [
    "nom_client" => $_POST['customer_name'],
    "telephone" => $_POST['phone'],
    "wilaya" => $_POST['wilaya'],
    "commune" => $_POST['commune'],
    "adresse" => $_POST['address'],
    "montant" => $_POST['price'],
    "commentaire" => $_POST['note']
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