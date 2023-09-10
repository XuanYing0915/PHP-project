<?php
require __DIR__ . '/shares/connection.php';

header('Content-Type:application/json');


$sql = "SELECT * FROM `food_merchants`";
$stmt = $pdo->prepare($sql);
$stmt->execute(); 
$rows = $stmt->fetchAll(); 



echo json_encode($rows, JSON_UNESCAPED_UNICODE);

?>