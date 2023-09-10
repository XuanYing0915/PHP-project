<?php session_start(); ?>
<?php require_once('./shares/connection.php'); ?>
<?php require_once('hotelCRUD.php'); ?>
<?php require_once('Book.php'); ?>


<?php
/*
 程式的功能：
修改book表格內的某一筆記錄。某些功能與新增記錄相同。
 
使用者透過瀏覽器瀏覽書籍資料(index.php)時，他可按下某本書籍
的『書名』超連結，瀏覽器會發出 /BookUpdate.php?bookID=xxxxx的請求。
xxxxx為該本書籍的流水號。
 
這樣的請求為瀏覽器對本程式發出的第一次對請求。此時(本程式第一次執行時)，
本程式會透過  $sid = $_GET['bookID']; 取得因使用者按下『書名』超連結所送
來的書籍流水號xxxxx。接著，以此流水號為依據，到資料庫內讀取對應的書籍記錄。
然後本程式會送回一個含有該筆書籍資料的表單讓使用者修改資料。
 
當使用者修改完畢、按下『Submit』按鈕後，這些修改後的資料會由瀏覽器送回到
本程式(瀏覽器第二次對本程式發出請求)。此時，本程式會檢查使用者輸入的資料，
如果有錯誤，送回原輸入資料與錯誤訊息，交由使用者修改。改完後，使用者再次按
下『Submit』按鈕(瀏覽器第三次...對本程式發出請求)。這些資料會再度送回到本
程式。經過檢查，修改後的資料如果沒有錯誤，程式會將這些資料寫入資料庫。
*/
// 下列變數將會存放要傳送給使用者修改的資料，以及使用者透過瀏覽器傳送回來的資料
// $bookID = $_POST['bookID'];
$hotel_id = "";
$hotel_tel = "";
$hotel_mrt = "";
$hotel_name = "";
$hotel_address = "";
$hotel_price = "";
$fileName = "" ;
$coverImage = "" ;
$hotel_area = "";
$hotel_category = "";
$hotel_introduction = "";
//----------------
// 通常使用者輸入之資料必須經過程式的檢查，正確無誤的資料才會寫入
// 資料庫。如果輸入資料有錯誤，將送回錯誤訊息通知使用者修改。
// 下列個變數將存放要送回給使用者看的錯誤訊息。
$errhotel_Tel = '';
$errhotel_Mrt = "";
$errhotel_Name = "";
$errhotel_Address = "";
$errhotel_Price = '';
$errPicture = '';
$errDBMessage = '';
$errhotel_Area = '';
$errhotel_Category = '';
$errhotel_Introduction = '';
// 此變數表示資料是否正確
$validData = 1;
// ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1"))
// 可用來判斷瀏覽器是第1次對本程式發出HTTP請求，還是第2,3,4...次對
// 本程式發出HTTP請求。
//
// "MM_insert"是本表單內的一個隱藏欄位，瀏覽器是第1次對本程式發出HTTP
// 請求時(注意：此時本程式會在Server端執行)瀏覽器不會送來此欄位，但是
// 當本程式產生回應給瀏覽器時，會送回含有名為 "MM_insert" 的隱藏欄位，
// 如 <input type="hidden" name="MM_update" value="form1" />，
// 因此當瀏覽器第2,3,4...次對本程式發出HTTP請求，就會送出有此欄位。
//---------------------------------------------------------------------------
$hotelDao = new hotelDao();

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
	// 讀取使用者傳來的資料
	$hotel_id = $_POST['hotel_id'];
	$hotel_tel = $_POST['hotel_tel'];
	$hotel_mrt = $_POST['hotel_mrt'];
	$hotel_area = $_POST['hotel_area'];
	$hotel_category = $_POST['hotel_category'];
	$hotel_introduction = $_POST['hotel_introduction'];
	$hotel_name = $_POST['hotel_name'];
	$hotel_address = $_POST['hotel_address'];
	$hotel_price = $_POST['hotel_price'];
		// $message = $_POST['hotel_introduction'];
	// echo "<script type='text/javascript'>alert('$message');</script>";
	if (empty($hotel_tel)) {
		$errhotel_Tel = '必須輸入電話';
		$validData = 0;
	}
	if (empty($hotel_mrt)) {
		$errhotel_Mrt = '必須輸入捷運站';
		$validData = 0;
	}
	if (empty($hotel_area)) {
		$errhotel_Area = '必須輸入行政區';
		$validData = 0;
	}
	if (empty($hotel_category)) {
		$errhotel_Category = '必須輸入類別';
		$validData = 0;
	}
	if (empty($hotel_introduction)) {
		// $errhotel_Introduction = '必須輸入簡介';
		$validData = 1;
	}
	if (empty($hotel_name)) {
		$errhotel_Name = '飯店名稱不能空白';
		$validData = 0;
	}
	if (empty($hotel_address)) {
		$errhotel_Address = '必須輸入地址';
		$validData = 0;
	}
	if (empty($hotel_price)) {
		$errhotel_Price = '必須輸入價格';
		$validData = 0;
	} else if (!is_numeric($hotel_price)) {   // is_int() : 檢查是否為整數
		$errhotel_price = '必須輸入數值';
		$validData = 0;
	}
	// if ($_FILES["uploadFile"]["error"] == 0)   {
	// 	$imageContent = file_get_contents($_FILES['uploadFile']['tmp_name']);
	// 	//$data = mysql_real_escape_string($imageContent);
	// 	//$data = addslashes($imageContent);
	// 	// $_FILES["uploadFile"]["name"] : 圖片檔的檔名
	// 	$fileName = $_FILES["uploadFile"]["name"];
	// }
//--------------------------------------
		if ($_FILES["uploadFile"]["error"] == 0) {
			$imageContent = file_get_contents($_FILES['uploadFile']['tmp_name']);
			$fileName = $_FILES["uploadFile"]["name"];
			
			$targetDirectory = "images/";  // 目標資料夾路徑
			$targetFilePath = $targetDirectory . $fileName;  // 目標檔案路徑

			// 將圖片資料存入目標檔案
			if (file_put_contents($targetFilePath, $imageContent)) {
				echo "圖片已成功儲存到 images 資料夾！";
			} else {
				echo "儲存圖片時發生錯誤！";
			}
		}
	//--------------------------------------------------------------------
	if ($validData) {
		try {
			if (strlen($fileName) > 0 ) {
			
				$hotel_kh = new hotel_kh($hotel_id, $hotel_address, $hotel_tel, $imageContent , 
				$fileName, $hotel_price, $hotel_name , $hotel_mrt, $hotel_area, $hotel_category, $hotel_introduction);
				$result = $hotelDao->update($hotel_kh);
			} else {
				$hotel_kh = new hotel_kh($hotel_id, $hotel_address, $hotel_tel, NULL , 
				NULL, $hotel_price, $hotel_name ,  $hotel_mrt, $hotel_area, $hotel_category, $hotel_introduction);
				$result = $hotelDao->updateWithoutCoverImage($hotel_kh);
			}

			// 請MySQL執行此 $updateSQL 命命
			if ($result==1) {
				// 取得受前一個命令的執行所影響的紀錄個數
				// 1: 表示更新成功(有1筆紀錄)
				// 0: 表示更新失敗(有0筆紀錄)
				$_SESSION['Book_Message'] = '電話' . $hotel_tel . '修改成功';			
			} else {
				$_SESSION['Book_Message'] = '電話' . $hotel_tel . '資料未異動';
			}
			header("Cache-Control: no-cache, must-revalidate");
			header('Location: hotelindex.html?message=編輯成功');
		} catch(PDOException $ex) {
			$errDBMessage = '資料庫錯誤:' . $ex->getMessage() . ", Line= " . $ex->getLine();
		}
	} else {
       // 
	}
} else {
	$sid = 0 ;
	if (!isset($_GET['hotel_id'])) {
		$sid = -1 ;
	} else {
		$sid = $_GET['hotel_id'];
	}
	
	$row = $hotelDao->findById($sid);
	//print_r($row);
	// list($bookID, $title, $author, $price, $companyID, $image, $bookNo, $coverImage) = $row;
	$hotel_id = $row['hotel_id']; 
	$hotel_name = $row['hotel_name']; 
	$hotel_address = $row['hotel_address']; 
	$hotel_price = $row['hotel_price']; 
	$hotel_mrt= $row['hotel_mrt'];  
	$hotel_area= $row['hotel_area'];  
	$hotel_category= $row['hotel_category'];  
	$hotel_introduction= $row['hotel_introduction'];  
	$hotel_img = $row['hotel_img']; 
	$hotel_tel = $row['hotel_tel']; 
	$coverImage = $row['CoverImage'];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>飯店資料編輯頁面</title>
<link href="./style3.css" rel="stylesheet" type="text/css" />
 <!-- 自己外加的連結 -->
    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css" />
    <!-- DataTables -->
    <link
      rel="stylesheet"
      href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"
    />
    <link
      rel="stylesheet"
      href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css"
    />
    <link
      rel="stylesheet"
      href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css"
    />
	    <!-- Theme style -->
		<link rel="stylesheet" href="../dist/css/adminlte.min.css" />
      <!-- 新增icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
		<!-- 到這------------------------------------------------ -->
<script type="text/javascript">
function setFocus()
{
     document.getElementById("hotel_name").focus();
}

function confirmDelete() {
	if (confirm("確定刪除此項書籍資料(書號:<?php echo $hotel_tel ?>)?") ) {
		document.forms[0].action="BookDelete.php?hotel_tel=<?php echo $hotel_tel ?>" ;
		document.forms[0].method="GET";
		document.forms[0].submit();
	} else {
	}
}

function updateBook() {
    document.forms[0].action="hotelUpdate.php" ;
	document.forms[0].method="POST";
	document.forms[0].submit();
}
</script>
</head>

<body onload="setFocus()" bgcolor='#FFFACD'>
<aside class="main-sidebar elevation-4 sidebar-info" style="background-color:#00CCEA;height:900px">
    <!-- Brand Logo -->
    <a href="../index3.html" class="brand-link">
      <img src="./img/高旅logo藍色.png" alt="高旅 Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
      <span class="brand-text " style="color: #ff9c07;font-weight: 700;">高旅網後台</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-2 pb-2 pr-3 mb-2 d-flex rounded-pill text-cancer" style="background-color: antiquewhite;">
        <div class="image">
          <!-- <img src="./img/溫迪.webp" class="img-circle elevation-2 mt-3" alt="User Image" style="width: 40px;height:40px;"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block mt-3 " style="font-size: 24px;"> Elbert</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- 會員分頁 -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-user-tie mr-2"></i>
              <p>
                會員
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <a href="../index2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>會員管理</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="attractionInsert.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>待補</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- 美食分頁 -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-utensils mr-2"></i>
              <p>
                美食
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <a href="../food-index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>商家查詢</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="../food-index2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>商家管理</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- 景點分頁 -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-cable-car mr-2"></i>
              <p>
                景點
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <a href="../attraction_Xuan/attractionBoard.php" class="nav-link">
                  <i class="fa-solid fa-gear mr-2"></i>
                  <p>景點管理</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="../attraction_Xuan/attractionInsert.php" class="nav-link">
                  <i class="fa-solid fa-person-walking-luggage mr-2"></i>
                  <p>新增景點</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- 票卷分頁 -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-ticket mr-2"></i>
              <p>
                票卷
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <a href="../tk_產品及方案管理.html" class="nav-link">
                  <i class="fa-solid fa-ticket mr-2"></i>
                  <p>票卷商品</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="../產品其他管理.html" class="nav-link">
                  <i class="fa-solid fa-ticket mr-2"></i>
                  <p>票卷雜項</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- 旅宿分頁 -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-bed mr-2"></i>
              <p>
                旅宿
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <a href="../hotel/hotelindex.html" class="nav-link">
                  <i class="fa-solid fa-bed mr-2"></i>
                  <p>飯店查詢</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="hotelInsert.php" class="nav-link">
                  <i class="fa-solid fa-bed mr-2"></i>
                  <p>新增飯店</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- 購物車 -->
          <li class="nav-item">
            <a href="#" class="nav-link">

              <i class="fa-solid fa-cart-shopping mr-2"></i>
              <p>
                訂單管理
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <a href="../project/food/foodOrders.html" class="nav-link">
                  <i class="fa-solid fa-cart-shopping mr-2"></i>
                  <p>食品訂單</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="../project/hotel/hotelOrders.html" class="nav-link">
                  <i class="fa-solid fa-cart-shopping mr-2"></i>
                  <p>訂房訂單</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="../project/ticket/ticketOrders.html" class="nav-link">
                  <i class="fa-solid fa-cart-shopping mr-2"></i>
                  <p>票卷訂單</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #ff9c07;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="hotelindex.html" class="nav-link">首頁</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">飯店管理</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> -->
      <!-- 全視窗 -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>

				<!-- 到這 -->
	<h3 align="center" style="margin-top:1.5rem">飯店資料維護</h3>
	<hr />
	<br />
	<br />
	<form id="form1" name="form1" method="post" action="hotelUpdate.php"
		enctype="multipart/form-data">

		<table class="table_color" width="708" border="2" align="center"
			cellpadding="2" cellspacing="2">
			<tr height='40'>
				<td colspan="4" align="center" valign="bottom"><font color='#6b6bee'
					size='+2'>編輯飯店資料</font></td>
			</tr>
			<tr height='36'>
				<td width="80" align="right" class="title_font">飯店名稱</td>
				<td colspan="3"><input name="hotel_name" class='InputClass' type="text"
					id="hotel_name" value="<?php echo $hotel_name; ?>" size="26" /><font
					color='red' size='-1'><?php echo $errhotel_Name; ?> </font></td>
			</tr>
			<tr height='36'>
				<td width="45" align="right" class="title_font">地址</td>
				<td width="312"><input name="hotel_address" class='InputClass' type="text"
					id="hotel_address" value="<?php echo $hotel_address; ?>" size="26" /><font
					color='red' size='-1'><?php echo $errhotel_Address; ?> </font></td>
					<td width="60" class="title_font"><div align="right">行政區</div></td>
				<td width="161"><?php echo setSelectByarea($pdo, "hotel_area", $hotel_area)  ?><font
					color='red' size='-1'><?php echo $errhotel_Area; ?> </font></td>
			</tr>
			<tr height='36'>
				<td width="45" class="title_font"><div align="right">電話</div></td>
				<td width="312"><input class='InputClass' name="hotel_tel" type="text"
					id="hotel_tel" value="<?php echo $hotel_tel; ?>" size="6" /><font
					color='red' size='-1'><?php echo $errhotel_Tel; ?> </font></td>
				<td width="60" class="title_font"><div align="right">捷運站</div></td>
				<td width="161"><?php echo setSelectBymrt($pdo, "hotel_mrt", $hotel_mrt)  ?><font
					color='red' size='-1'><?php echo $errhotel_Mrt; ?> </font></td>
			</tr>
			<tr  height='36'>
			<td width="52" align="right" class="title_font">價格</td>
				<td width="161"><input name="hotel_price" class='InputClass' type="text"
					id="hotel_price" value="<?php echo $hotel_price; ?>" size="3" /><font
					color='red' size='-1'><?php echo $errhotel_Price; ?> </font></td>
					<td width="60" class="title_font"><div align="right">類別</div></td>
				<td width="161"><?php echo setSelectBycategory($pdo, "hotel_category", $hotel_category)  ?><font
					color='red' size='-1'><?php echo $errhotel_Category; ?> </font></td>
			</tr>
      <!-- 圖片 -->
			<tr height='120'>
				<td width="45" align="right" class="title_font">圖片</td>
				<td colspan='3'>
					<table border='0'>
						<tr>
							<td><img height='120' width='96'
								src='BookCoverImage.php?searchKey=<?php echo $hotel_id ?>' /></td>
							<td colspan='2'><input style="background: #FFFFFF"
								class='InputClass' type="file" name="uploadFile" size="40" /><font
								color='red' size='-1'><?php echo $errPicture; ?> </font></td>
						</tr>
					</table>
				</td>
			</tr>
       <!-- 圖片 -->
			<tr height='36'>
				<td width="45" align="right" class="title_font">簡介</td>
				<td colspan="3">
          <textarea name="hotel_introduction" class='InputClass' 
          id="hotel_introduction" rows="4" style="width:100%; resize:vertical;"><?php echo $hotel_introduction; ?>
        </textarea>
        <font color='red' size='-1'><?php echo $errhotel_Introduction; ?></font>
        </td>
			</tr>
			<tr height='35'>
				<td colspan='4' align='center'><input name="hotel_id" type="hidden"
					id="hotel_id" value="<?php echo $hotel_id; ?>" /> <input type="button"
					name="update" value="修改" onclick='updateBook()' />
					<a href="hotelindex.html">返回</a>
					&nbsp;&nbsp;&nbsp; 
				</td>
			</tr>
		</table>
		<div id="insert" >
			<?php
			echo $errDBMessage;   // 顯示錯誤訊息
		 ?>
			<input type="hidden" name="MM_update" value="form1" />
		</div>
	</form>


	    <!-- /.content-wrapper -->
	<footer class="main-footer" style="margin-top:10rem">
		<div class="float-right d-none d-sm-block">
		<b>高旅網後台</b> 1.0
		</div>
		<strong>Copyright &copy; 2023.6 <a href="https://adminlte.io">第三組-高旅網</a>.</strong> 版權所有.
	</footer>

	  <!-- 外遷頁面JS從這開始 -->
	 <!-- Control Sidebar -->
	 <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/jszip/jszip.min.js"></script>
    <script src="../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for 彈跳視窗 purposes -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- 引入jquery檔方便做照片即時刷新處理 -->
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
	<script>
			//做照片即時刷新處理 
		$(document).ready(function() {
			$('input[name="uploadFile"]').change(function() {
				var file = this.files[0];
				var reader = new FileReader();

				reader.onload = function(e) {
				$('img').attr('src', e.target.result);
				};

				reader.readAsDataURL(file);
			});
		});
	</script>
</body>
</html>