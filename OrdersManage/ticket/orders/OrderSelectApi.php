<?php
require_once '../../shares/connection.php';

header('Content-Type:application/json');


$sql = "SELECT * FROM `ticket_orders`";
$stmt = $pdo->prepare($sql);
$stmt->execute(); 
$rows = $stmt->fetchAll(); 



echo json_encode($rows, JSON_UNESCAPED_UNICODE);

?>