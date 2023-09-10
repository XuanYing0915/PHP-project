<?php
require_once '../../shares/connection.php';
header('Content-Type:application/json');

$output = [
    'success' => false,
    'errorMessage' => '',
    'data' => $_GET
];


$sql = "UPDATE `ticket_orders` SET `order_total`=? WHERE tk_order_id = ?";
$stmt2 = $pdo->prepare($sql);
$stmt2->execute([
    $_GET["orderTotal"],
    $_GET["orderID"]
]);

if($stmt->rowCount() == 1 ){
    $output['success'] = true;
}else{
    $output['errorMessage'] = "修改失敗";
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>