<?php
// require __DIR__ . '/connection.php';
// header('Content-Type:application/json');

// $output = [
//     'success' => false,
//     'errorMessage' => '',
//     'data' => $_POST
// ];

// $imgData = str_replace(' ', '+', $_POST['img_data']);
// $imgData = substr($imgData, strpos($imgData, ",") + 1);
// $imgData = base64_decode($imgData);


// // 將圖片保存到文件
// $imgPath = '../img/image/' . $_POST['img_name'];

// // 检查目录是否存在
// if (!file_exists('../img/image/')) {
//     // 创建目录，并设置权限为读写
//     mkdir('../img/image/', 0777, true);
// }

// // 现在可以将图像数据写入文件
// file_put_contents($imgPath, $imgData);

// // 獲取最後一筆attraction_id
// $sql_get_id = "SELECT `attraction_id` FROM `attraction` ORDER BY `attraction_id` DESC LIMIT 1;";
// $stmt_get_id = $pdo->prepare($sql_get_id);
// $stmt_get_id->execute();

// // 獲取查询结果的`attraction_id`值
// $fk_attraction_id = $stmt_get_id->fetchColumn();

// // 
// $sql = "INSERT INTO `attraction_image`( `fk_attraction_id`, `img_name`) VALUES (?, ?)";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([
//     $fk_attraction_id,
//     $_POST['img_name']
// ]);

// if ($stmt->rowCount() == 1) {
//     $output['success'] = true;
// } else {
//     $output['errorMessage'] = "新增失敗";
// }

// echo json_encode($output, JSON_UNESCAPED_UNICODE);



// require __DIR__ . '/connection.php';
// header('Content-Type:application/json');

// $output = [
//     'success' => false,
//     'errorMessage' => '',
//     'data' => $_POST
// ];

// $imgData = str_replace(' ', '+', $_POST['img_data']);
// $imgData = substr($imgData, strpos($imgData, ",") + 1);
// $imgData = base64_decode($imgData);

// // 将图片保存到文件
// $imgPath = '../img/image/' . $_POST['img_name'];

// // 检查目录是否存在
// if (!file_exists('../img/image/')) {
//     // 创建目录，并设置权限为读写
//     mkdir('../img/image/', 0777, true);
// }

// // 现在可以将图像数据写入文件
// file_put_contents($imgPath, $imgData);

// // 获取最后一笔 attraction_id
// $sql_get_id = "SELECT `attraction_id` FROM `attraction` ORDER BY `attraction_id` DESC LIMIT 1";
// $stmt_get_id = $pdo->query($sql_get_id);

// // 获取查询结果的 `attraction_id` 值
// $attraction_id = $stmt_get_id->fetchColumn();

// // 插入图片信息到 `attraction_image`
// $sql = "INSERT INTO `attraction_image` (`fk_attraction_id`, `img_name`) VALUES (?, ?)";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([
//     $attraction_id,
//     $_POST['img_name'],
// ]);

// if ($stmt->rowCount() == 1) {
//     $output['success'] = true;
// } else {
//     $output['errorMessage'] = "新增失敗";
// }

// echo json_encode($output, JSON_UNESCAPED_UNICODE);

// require __DIR__ . '/connection.php';
// header('Content-Type: application/json');

// $output = [
//     'success' => false,
//     'errorMessage' => '',
//     'data' => $_POST
// ];

// $imgData = str_replace(' ', '+', $_POST['img_data']);
// $imgData = substr($imgData, strpos($imgData, ",") + 1);
// $imgData = base64_decode($imgData);

// // 将图像保存到文件
// $imgPath = '../img/image/' . $_POST['img_name'];

// // 检查目录是否存在
// if (!file_exists('../img/image/')) {
//     // 创建目录，并设置权限为读写
//     mkdir('../img/image/', 0777, true);
// }

// // 将图像数据写入文件
// if (file_put_contents($imgPath, $imgData)) {
//     // 获取最后一笔 attraction_id
//     $sql_get_id = "SELECT `attraction_id` FROM `attraction` ORDER BY `attraction_id` DESC LIMIT 1";
//     $stmt_get_id = $pdo->prepare($sql_get_id);
//     $stmt_get_id->execute();

//     // 获取查询结果的 attraction_id 值
//     $fk_attraction_id = $stmt_get_id->fetchColumn();

//     // 插入图像信息到 `attraction_image`
//     $sql = "INSERT INTO `attraction_image` (`fk_attraction_id`, `img_name`) VALUES (?, ?)";
//     $stmt = $pdo->prepare($sql);
//     if ($stmt->execute([$fk_attraction_id, $_POST['img_name']])) {
//         $output['success'] = true;
//     } else {
//         $output['errorMessage'] = "插入数据失败";
//     }
// } else {
//     $output['errorMessage'] = "保存图像失败";
// }

// echo json_encode($output, JSON_UNESCAPED_UNICODE);
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

//保存圖片到image
$imgPath = '../img/image/' . $_POST['img_name'];

// 確認目錄是否存在
if (!file_exists('../img/image/')) {
    // 創建目錄，0777 =設定讀寫
    mkdir('../img/image/', 0777, true);
}

//創建圖片
file_put_contents($imgPath, $imgData);

// 取資料庫最後一筆 attraction_id
$sql_get_id = "SELECT `attraction_id` FROM `attraction` ORDER BY `attraction_id` DESC LIMIT 1;";
$stmt_get_id = $pdo->prepare($sql_get_id);
$stmt_get_id->execute();

// 獲取 attraction_id 值
$fk_attraction_id = $stmt_get_id->fetchColumn();

$sql = "INSERT INTO `attraction_image`(`fk_attraction_id`, `img_name`) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $fk_attraction_id,
    $_POST['img_name'],
]);

if ($stmt->rowCount() == 1) {
    $output['success'] = true;
} else {
    $output['errorMessage'] = "新增失敗";
}

// 打印 $fk_attraction_id 和 $_POST['img_name']
$output['fk_attraction_id'] = $fk_attraction_id;
$output['img_name'] = $_POST['img_name'];

echo json_encode($output, JSON_UNESCAPED_UNICODE);
