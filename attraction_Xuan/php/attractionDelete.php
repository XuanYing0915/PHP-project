<?php

require __DIR__ . '/connection.php';
header('Content-Type:application/json');

$output = [
    'success' => false,
    'errorMessage' => '',
    'data' => $_GET
];

try {
    // 同時操作多個資料表
    $pdo->beginTransaction();

    // 刪圖片庫
    $sql = "DELETE FROM `attraction_image` WHERE `fk_attraction_id`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET["id"]]);

    // 刪景點
    $sql = "DELETE FROM `attraction` WHERE `attraction_id`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET["id"]]);

    if ($stmt->rowCount() == 1) {
        $output['success'] = true;
    } else {
        $output['errorMessage'] = "刪除失敗";
    }

    $pdo->commit();
} catch (PDOException $e) {
    $pdo->rollback();
    $output['errorMessage'] = $e->getMessage();
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
