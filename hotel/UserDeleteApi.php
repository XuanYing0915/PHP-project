<?php
require __DIR__ . '/shares/connection.php';
header('Content-Type:application/json');

$output = [
    'success' => false,
    'errorMessage' => '',
    // 'data' => $_GET
];


// $sql = "DELETE FROM `hotel_kh` WHERE hotel_id=?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$_GET["id"]]);

// if($stmt->rowCount() == 1){
//     $output['success'] = true;
// }else{
//     $output['errorMessage'] = "刪除失敗";
// }

// echo json_encode($output, JSON_UNESCAPED_UNICODE);


if (isset($_POST['hotel_id'])) {
    $hotelId = $_POST['hotel_id'];

    $sql = "DELETE FROM `hotel_kh` WHERE `hotel_id` = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$hotelId]);

    if ($stmt->rowCount() == 1) {
        $output['success'] = true;
    } else {
        $output['errorMessage'] = "刪除失敗";
    }
} else {
    $output['errorMessage'] = "未提供要刪除的資料的 ID";
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);


?>