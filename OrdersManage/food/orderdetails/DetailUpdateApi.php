<?php
require_once '../../shares/connection.php';
header('Content-Type:application/json');

$output = [
    'success' => false,
    'errorMessage' => '',
    'data' => $_POST
];

$sql = "UPDATE `ticket_orderdetails` SET `product_id`=?,`product_quantity`=?,WHERE tk_orderdetails_id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    
    $_POST['product_id'],
    $_POST['product_quantity'],
    $_POST['tk_orderdetails_id'],
]);

if($stmt->rowCount() == 1){
    $output['success'] = true;
}else{
    $output['errorMessage'] = "修改失敗";
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>