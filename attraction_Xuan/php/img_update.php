<?php
require __DIR__ . '/connection.php';
header('Content-Type:application/json');

$output = [
    'success' => false,
    'errorMessage' => '',
    'data' => $_POST
];

$imgData = str_replace(' ', '+', $_POST['img_data']);
$imgData = substr($imgData, strpos($imgData, ",") + 1);
$imgData = base64_decode($imgData);

// 保存新圖到image資料夾
$imgPath = '../img/image/' . $_POST['img_name'];
file_put_contents($imgPath, $imgData);
// 檢查資料夾是否存在
if (!file_exists('../img/image/')) {
    // 創資料夾，0777=設置讀寫權限
    mkdir('../img/image/', 0777, true);
}

// 將圖片下載進資料夾
file_put_contents($imgPath, $imgData);

// 取原本圖片路徑
$fk_attraction_id = $_POST['fk_attraction_id'];
$original_img_name = $_POST['original_img_name'];
// $previous_img_name = $stmt_get_img_path->fetchColumn();

// 刪除原本圖片
$previous_img_path = '../img/image/' . $original_img_name;
if (file_exists($previous_img_path)) {
    unlink($previous_img_path);
}


// 更新資料庫
$sql_update_image = "UPDATE `attraction_image` SET `img_name` = ? WHERE `fk_attraction_id` = ?";
$stmt_update_image = $pdo->prepare($sql_update_image);
$stmt_update_image->execute([
    $_POST['img_name'],
    $fk_attraction_id,
]);

if ($stmt_update_image->rowCount() == 1) {
    $output['success'] = true;
} else {
    $output['errorMessage'] = "更新失敗";
}

// 打印 $fk_attraction_id 和 $_POST['img_name']
$output['fk_attraction_id'] = $fk_attraction_id;
$output['img_name'] = $_POST['img_name'];

echo json_encode($output, JSON_UNESCAPED_UNICODE);
