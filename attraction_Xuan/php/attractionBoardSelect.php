<?php
require 'connection.php';

header('Content-Type:application/json');

$sql = "SELECT
`attraction_id`,
`attraction_name`,
(SELECT `img_name` FROM `attraction_image` WHERE `fk_attraction_id` = `attraction`.`attraction_id` LIMIT 1) AS `img_name`,
`title`,
`area`.`area_name`,
`address`,
`off_day`,
TIME_FORMAT(`open_time`, '%H:%i') AS `open_time`,
TIME_FORMAT(`closed_time`, '%H:%i') AS `closed_time`,
`phone`,
`description`,
`traffic`
FROM
`attraction`
JOIN
`area`
ON `attraction`.`fk_area_id` = `area`.`area_id`;";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();

// 將資料轉為json
echo json_encode(['data' => $rows], JSON_UNESCAPED_UNICODE);
