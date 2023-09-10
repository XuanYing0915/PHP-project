<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>查詢表格的內容</title>
</head>

<body>
	<?php
	$hotel_name = $_POST['hotel_name'];
	$hotel_address = $_POST['hotel_address'];
	$hotel_price = $_POST['hotel_price'];
	$hotel_introduction = $_POST['hotel_introduction'];
	$hotel_tel = $_POST['hotel_tel'];
	$hotel_mrt = $_POST['hotel_mrt'];
	$hotel_area = $_POST['hotel_area'];
	$hotel_category = $_POST['hotel_category'];

	//$_FILES["uploadFile"]["name"]: 該檔案在客戶端的檔名
	$photo = $_FILES["uploadFile"]["name"];
	/*
 $_FILES['uploadFile']['type']
//The mime type of the file, if the browser provided this information.
//An example would be "image/gif".


$_FILES['uploadFile']['size']
//The size, in bytes, of the uploaded file.

$_FILES['uploadFile']['tmp_name']
//The temporary filename of the file in which the uploaded file was stored
//on the server.

$_FILES['uploadFile']['error']
The error code associated with this file upload. ['error'] was added in PHP 4.2.0
*/


	//--------------------------
	//Case 1
	//$fileData = file_get_contents($_FILES['uploadFile']['tmp_name']);
	//-----------------------
	//Case 2
	$tmpName  = $_FILES['uploadFile']['tmp_name'];
	$fp      = fopen($tmpName, 'r');
	$fileData = fread($fp, filesize($tmpName));

	// ******************* 將檔案存放到Server的 img 資料夾下
	// 圖檔上傳後所欲存放的目錄 (預設的位置為本專案位於文件跟目錄之下資料夾)
	/*
 $up_dir = "qwer/";   //   asdf/ ==>相對於本程式位於Server的資料夾
//   /qwer/==>相對於硬碟的根目錄
*/
	$up_dir = "images/";


	// 若目錄不存在, 則建立之
	if (!is_dir($up_dir)) {  // 對於兩層以上的目錄要以下列方式來建立  >..<
		mkdir("images/");
		// mkdir("pictures/smallPic/");
	}
	// 上傳的檔案名稱及路徑
	$up_file = $up_dir . $_FILES["uploadFile"]["name"];
	echo $_FILES["uploadFile"]["tmp_name"] . "<BR>";
	echo $_FILES["uploadFile"]["name"] . "<BR>";
	echo $up_file . "<BR>";

	// 將檔案放到設定的目錄內
	$result = move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $up_file);
	echo $result . "<BR>";
	// ******************* 將檔案存放到Server的 img 資料夾下


	// ******************* 將檔案寫入到資料庫下 ***************
	//Case 1
	//$data = mysql_real_escape_string($fileData);
	//Case 2
	//$data = addslashes($fileData);
	try {
		$pdo = new PDO(
			'mysql:host=localhost;dbname=travel_kh;charset=utf8',
			'root',
			'root',
			array(
				PDO::ATTR_EMULATE_PREPARES => false,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			)
		);

		// 列出更新表格的 SQL 命命
		$insertSQL = "Insert Into hotel_kh " .
			"(hotel_id, hotel_name, hotel_address, hotel_price, hotel_introduction, hotel_mrt, hotel_area, hotel_category, hotel_img, hotel_tel, CoverImage)" .
			" values  (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";


		$pdoStmt = $pdo->prepare($insertSQL);
		$pdoStmt->bindValue(1, $hotel_name, PDO::PARAM_STR);
		$pdoStmt->bindValue(2, $hotel_address, PDO::PARAM_STR);
		$pdoStmt->bindValue(3, $hotel_price, PDO::PARAM_INT);
		$pdoStmt->bindValue(4, $hotel_introduction, PDO::PARAM_STR);
		$pdoStmt->bindValue(5, $hotel_mrt, PDO::PARAM_INT);
		$pdoStmt->bindValue(6, $hotel_area, PDO::PARAM_INT);
		$pdoStmt->bindValue(7, $hotel_category, PDO::PARAM_INT);
		$pdoStmt->bindValue(8, $photo, PDO::PARAM_STR);
		$pdoStmt->bindValue(9, $hotel_tel, PDO::PARAM_STR);
		$pdoStmt->bindValue(10, $fileData, PDO::PARAM_LOB);
		// 請MySQL執行此 $insertSQL 命命
		$pdoStmt->execute();
		// 取得受前一個命令的執行所影響的紀錄個數
		// 1: 表示更新成功(有1筆紀錄)
		// 0: 表示更新失敗(有0筆紀錄)
		$num = $pdoStmt->rowCount();
		echo "新增記錄的筆數=$num<br>";
		$_SESSION['Book_Message'] = '書籍新增成功';
		header("Location:hotelindex.html?message=新增成功");
		exit;
	} catch (PDOException $ex) {
		echo "存取資料庫時發生錯誤，訊息:" . $ex->getMessage() . "<br>";
		echo "行號:" . $ex->getLine() . "<br>";
		echo "堆疊:" . $ex->getTraceAsString() . "<br>";
	}
	$link = null
	?>
</body>

</html>