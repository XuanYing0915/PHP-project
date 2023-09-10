<?php
require __DIR__ . '/connection.php';
header('Content-Type:application/json');

$output = [
    'success' => false,
    'errorMessage' => '',
    'data' => $_POST
];

$sql = "INSERT INTO `attraction`(`attraction_name`, `title`, `fk_area_id`, `address`, `off_day`, `open_time`, `closed_time`, `phone`, `description`,`traffic`) VALUES (?,?,?,?,?,?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['attraction_name'],
    $_POST['title'],
    $_POST['fk_area_id'],
    $_POST['address'],
    $_POST['off_day'],
    $_POST['open_time'],
    $_POST['closed_time'],
    $_POST['phone'],
    $_POST['description'],
    $_POST['traffic']
]);

if ($stmt->rowCount() == 1) {
    $output['success'] = true;
} else {
    $output['errorMessage'] = "新增失敗";
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
