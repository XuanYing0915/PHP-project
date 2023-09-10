<?php
require 'connection.php';

header('Content-Type:application/json');

$sql = "SELECT * FROM `area`;";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
// 將資料轉為json
echo json_encode($rows, JSON_UNESCAPED_UNICODE);
