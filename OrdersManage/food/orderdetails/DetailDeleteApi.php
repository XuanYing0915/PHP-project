<?php
require_once '../../shares/connection.php';

header('Content-Type:application/json');

$output = [
    'success' => false,
    'errorMessage' => '',
    'data' => $_GET
];


$sql = "DELETE FROM `ticket_orderdetails` WHERE tk_orderdetails_id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_GET["detailID"]]);

if($stmt->rowCount() == 1){
    $output['success'] = true;
}else{
    $output['errorMessage'] = "刪除失敗";
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>