<?php
require __DIR__ . '/shares/Staffconnection.php';
header('Content-Type:application/json');

$output = [
    'success' => false,
    'errorMessage' => '',
    'data' => $_POST
];

sleep(1);

$sql = "INSERT INTO `backend_manage`(`staff_id`, `staff_name`, `pwd`, `account_permission`, `account_state`) VALUES (?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['staff_id'],
    $_POST['staff_name'],
    $_POST['pwd'],
    $_POST['account_permission'],
    $_POST['account_state'],

]);

if ($stmt->rowCount() == 1) {
    $output['success'] = true;
} else {
    $output['errorMessage'] = "新增失敗";
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
