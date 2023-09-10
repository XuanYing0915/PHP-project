<?php
require 'connection.php';

// header('Content-Type:application/json');
// $id = $_SERVER['QUERY_STRING'];


$sql = "SELECT 
`attraction_name`,
`title`, 
`area`.`area_name`,
`address`,
`off_day`,
TIME_FORMAT(`open_time`, '%H:%i') AS `open_time`,
TIME_FORMAT(`closed_time`, '%H:%i') AS`closed_time`,
`phone`, 
`description`, 
`traffic` 
FROM `attraction` 
JOIN `area` 
ON `attraction`.`fk_area_id` = `area`.`area_id` 
WHERE attraction_id=600001;";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// 將資料轉為json
// echo json_encode($rows, JSON_UNESCAPED_UNICODE);
