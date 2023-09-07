<?php
require __DIR__ . '/connection.php';

header('Content-Type:application/json');

$sql = "SELECT
`attraction_id`,
`attraction_name`,
`title`,
`area`.`area_name`,
`address`,
`off_day`,
TIME_FORMAT(`open_time`, '%H:%i') AS `open_time`,
TIME_FORMAT(`closed_time`, '%H:%i') AS`closed_time`,
`phone`,
`description`,
-- `lat`,
-- `lng`,
-- `zoom`,
`traffic`
FROM
`attraction`
JOIN `area`
ON
`attraction`.`fk_area_id` = `area`.`area_id`;";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();

// 將資料轉為json
echo json_encode(['data'=>$rows], JSON_UNESCAPED_UNICODE);
