<?php
require_once '../../shares/connection.php';
header('Content-Type:application/json');

$output = [
    'success' => false,
    'errorMessage' => '',
    'data' => $_POST
];

$sql = "UPDATE `ticket_orders` SET `order_status`=?,`payment`=?,`payment_status`=?,`staff_id`=?,`receiver_name`=?,`receiver_phone`=?,`shipping_method`=?, `shipping_address`=?, `shipping_fee`=?  WHERE tk_order_id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    
    $_POST['order_status'],
    $_POST['payment'],
    $_POST['payment_status'],
    $_POST['staff_id'],
    $_POST['receiver_name'],
    $_POST['receiver_phone'],
    $_POST['shipping_method'],
    $_POST['shipping_address'],
    $_POST['shipping_fee'],
    
    $_POST['tk_order_id'],
]);

if($stmt->rowCount() == 1){
    $output['success'] = true;
}else{
    $output['errorMessage'] = "修改失敗";
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>