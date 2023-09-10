<?php
require_once '../../shares/connection.php';
header('Content-Type:application/json');

$output = [
    'success' => false,
    'errorMessage' => '',
    'data' => $_POST
];

$sql = "UPDATE `ticket_orderdetails` SET `product_id`=?,`product_quantity`=?,`product_price`=? WHERE tk_orderdetails_id=? AND tk_order_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['product_id'],
    $_POST['product_quantity'],
    $_POST['product_price'],
    $_POST['tk_orderdetails_id'],
    $_POST['tk_order_id'],
]);

// $sql2 = "UPDATE `ticket_orders` SET `order_total`=?, WHERE tk_order_id = ?";
// $stmt2 = $pdo->prepare($sql);
// $stmt2->execute([
//     $_POST['product_quantity']*$_POST['product_price'],
//     $_POST['tk_order_id'],
// ]);

if($stmt->rowCount() == 1 ){
    $output['success'] = true;
}else{
    $output['errorMessage'] = "修改失敗";
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>