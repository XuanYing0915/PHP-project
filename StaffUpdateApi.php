<?php
require __DIR__ . '/shares/Staffconnection.php';
header('Content-Type:application/json');

$output = [
    'success' => false,
    'errorMessage' => '',
    'data' => $_POST
];

$sql = "UPDATE `backend_manage` SET `staff_name`=?,`pwd`=?, `account_permission`=?,`account_state`=?WHERE staff_id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['staff_name'],
    $_POST['pwd'],
    $_POST['account_permission'],
    $_POST['account_state'],
    $_POST['staff_id']
]);

if($stmt->rowCount() == 1){
    $output['success'] = true;
}else{
    $output['errorMessage'] = "修改失敗";
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>