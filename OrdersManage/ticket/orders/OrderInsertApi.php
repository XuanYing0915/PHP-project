<?php
require_once  '../../shares/connection.php';
header('Content-Type:application/json');

$output = [
    'success' => false,
    'errorMessage' => '',
    'data' => $_POST
];


$sql = "INSERT INTO `ticket_orders`(`staff_id`, `member_id`, `payment`, `receiver_name`, `receiver_phone`, `shipping_method`, `shipping_address`, `shipping_fee`) VALUES (?,?,?,?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['staff_id'],
    $_POST['member_id'],
    $_POST['payment'],
    $_POST['receiver_name'],
    $_POST['receiver_phone'],
    $_POST['shipping_method'],
    $_POST['shipping_address'],
    $_POST['shipping_fee']

]);

if($stmt->rowCount() == 1){
    $output['success'] = true;
}else{
    $output['errorMessage'] = "新增失敗";
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
