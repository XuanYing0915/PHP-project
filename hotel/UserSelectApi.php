<?php


require __DIR__ . '/shares/connection.php';

header('Content-Type:application/json');

// $sql = "SELECT hotel_id,hotel_name,hotel_address,hotel_tel,hotel_img,hotel_price,hotel_introduction,hotel_mrt,hotel_area,hotel_category FROM `hotel_kh`";

$sql = "SELECT hotel_id, hotel_name, hotel_address, hotel_tel, 
hotel_img, hotel_price, hotel_introduction, hotel_mrt, 
hotel_area, hotel_category, hotel_mrt.mrt_name ,area.area_name,hotel_category.category_name
        FROM hotel_kh 
        JOIN hotel_mrt ON hotel_kh.hotel_mrt = hotel_mrt.mrt_id
        JOIN area ON hotel_kh.hotel_area = area.area_id
        JOIN hotel_category ON hotel_kh.hotel_category = hotel_category.category_id
        ORDER BY hotel_kh.hotel_id ASC";


$stmt = $pdo->prepare($sql);
$stmt->execute(); 
// $rows = $stmt->fetchAll(); 
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as &$row) {
    unset($row['CoverImage']);
}



echo json_encode(['data'=>$rows], JSON_UNESCAPED_UNICODE);


?>