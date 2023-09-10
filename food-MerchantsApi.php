<?php
require __DIR__ . '/shares/connection.php';

header('Content-Type:application/json');

$sql = "SELECT merchant_id,name,description,phone,facilities,address,longitude,latitude,zoom FROM `food_merchants`";

$stmt = $pdo->prepare($sql);
$stmt->execute(); 
$rows = $stmt->fetchAll(); 

echo json_encode(['data' => $rows], JSON_UNESCAPED_UNICODE);
