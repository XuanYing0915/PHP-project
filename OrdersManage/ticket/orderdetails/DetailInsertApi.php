<?php
require_once '../../shares/connection.php';
header('Content-Type:application/json');

$output = [
    'success' => false,
    'errorMessage' => '',
    'data' => $_POST
];


$sql = "INSERT INTO `ticket_orderdetails`(`tk_order_id`,`product_id`, `product_quantity`, `product_price`) VALUES (?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['tk_order_id'],
    $_POST['product_id'],
    $_POST['product_quantity'],
    $_POST['product_price'],
    

]);

if($stmt->rowCount() == 1){
    $output['success'] = true;
}else{
    $output['errorMessage'] = "新增失敗";
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>