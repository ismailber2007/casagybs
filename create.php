<?php
// ضع هنا الـ token من Environment Variable أو مباشرة
$token = getenv("ECOTRACK_TOKEN"); 
// رابط الـ API الصحيح من curl command في Postman
$url = "{{url}}/api/v1/create/order?reference&nom_client=&telephone=&telephone_2&adresse=&code_postal&commune=&code_wilaya=&montant=&remarque&produit&stock&quantite&produit_a_recuperer&boutique&type=&stop_desk&weight&fragile&gps_link"; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    echo "<pre>";
    echo "HTTP Status: $httpCode\n";
    print_r($response);
    echo "</pre>";
} else {
    echo "الطريقة غير مسموحة.";
}
?>

