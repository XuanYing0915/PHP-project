<?php
require __DIR__ . '/shares/connection.php';
header('Content-Type:application/json');

$output = [
    'success' => false,
    'errorMessage' => '',
    'data' => $_POST
];

sleep(1);

$sql = "INSERT INTO `food_merchants`(`name`, `description`, `phone`, `facilities`, `address`, `longitude`, `latitude`, `zoom`) VALUES (?,?,?,?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['name'],
    $_POST['description'],
    $_POST['phone'],
    $_POST['facilities'],
    $_POST['address'],
    $_POST['longitude'],
    $_POST['latitude'],
    $_POST['zoom'],

]);

if ($stmt->rowCount() == 1) {
    $output['success'] = true;
} else {
    $output['errorMessage'] = "新增失敗";
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
?>
