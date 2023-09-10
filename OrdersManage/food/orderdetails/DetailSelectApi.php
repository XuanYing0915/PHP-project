<?php
require_once '../../shares/connection.php';

header('Content-Type:application/json');


$sql = "SELECT * FROM `ticket_orderdetails` WHERE tk_order_id =2023061530001";
$stmt = $pdo->prepare($sql);
$stmt->execute(); 
$rows = $stmt->fetchAll(); 



echo json_encode($rows, JSON_UNESCAPED_UNICODE);

?>