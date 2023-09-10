<?php
require __DIR__ . '/shares/Staffconnection.php';

header('Content-Type:application/json');


$sql = "SELECT * FROM `backend_manage`";
$stmt = $pdo->prepare($sql);
$stmt->execute(); 
$rows = $stmt->fetchAll(); 



echo json_encode($rows, JSON_UNESCAPED_UNICODE);

?>