<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>飯店資料新增頁面</title>
<link href="./style3.css" rel="stylesheet" type="text/css" />
<!-- <link href="file:///C|/wamp/www/style.css" rel="stylesheet"
	type="text/css" /> -->
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
</head>

<body bgcolor='#ccd9ff'>
	<!-- Nav頁面 -->
	
 <!-- Main Sidebar Container -->
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
                  <i class="fa-solid fa-gear "></i>
                  <p>景點管理</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="../attraction_Xuan/attractionInsert.php" class="nav-link">
                  <i class="fa-solid fa-person-walking-luggage "></i>
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
          <li class="nav-item menu-is-opening menu-open">
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
                <a href="hotelInsert.php" class="nav-link active">
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

	<!-- Nav頁面 -->
  <!-- Navbar -->
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
  <!-- /.navbar -->
	<h3 align="center" style="margin-top:1.5rem">飯店資料維護</h3>
	<hr />
	<br />

	<br />
	<form id="form1" name="form1" method="post"
		action="hotelInsertPDO.php" enctype="multipart/form-data" onsubmit="return validateForm()">

		<table class="table_color" width="708" border="2" align="center"
			cellpadding="2" cellspacing="2" >
			<tr height='40'>
				<td colspan="4" align="center" valign="bottom"><Font color='#6b6bee'
					size='+2'>新增飯店資料</Font>
					<!-- <BR> 本網頁會呼叫 _BookDataInsert.php來處理上傳的資料<BR>
					包括搬移上傳檔案到指定的資料夾以及寫入資料庫<BR> -->
				</td>
			</tr>
			<tr height='36'>
				<td width="90" align="right" class="title_font">飯店名稱</td>
				<td colspan="3"><input name="hotel_name" class='InputClass' type="text"
					id="hotel_name" size="26" /> <span id="hotel_nameError" style="color: red;font-size:12px;"></span>
         </td>
			</tr>
			<tr height='36'>
				<td width="45" align="right" class="title_font">地址</td>
				<td width="312"><input name="hotel_address" class='InputClass' type="text"
					id="hotel_address" size="26" /><span id="hotel_addressError" style="color: red;font-size:12px;"></span></td>
					<td width="52" class="title_font"><div align="right">行政區</div></td>
                <td width="161">
					<select name="hotel_area">
                <option value="1">鹽埕區</option>
                <option value="2">鼓山區</option>
                <option value="3">新興區</option>
                <option value="4">旗津區</option>
                <option value="5">苓雅區</option>
                <option value="6">左營區</option>
                <option value="7">楠梓區</option>
                <option value="8">三民區</option>
                <option value="9">前金區</option>
                <option value="10">前鎮區</option>
                <option value="11">小港區</option>
                <option value="12">鳳山區</option>
                <option value="13">林園區</option>
                <option value="14">大寮區</option>
                <option value="15">大樹區</option>
                <option value="17">仁武區</option>
                <option value="18">鳥松區</option>
                <option value="19">岡山區</option>
                <option value="20">橋頭區</option>
                <option value="28">美濃區</option>
                <option value="29">六龜區</option>
            </select>
			    </td>
			</tr>
			<tr height='36'>

				<td width="45" class="title_font"><div align="right">電話</div></td>
				<td width="312"><input class='InputClass' name="hotel_tel" type="text"
					id="hotel_tel" size="8" /> <span id="tel_validation_result" style="color: red;font-size:12px;"></span></td>
				<td width="52" class="title_font"><div align="right">捷運站</div></td>
                <td width="161">
					<select name="hotel_mrt">
					  <option value="1">無捷運站</option>
            <option value="5101">左營</option>
            <option value="5102">巨蛋</option>
            <option value="5103">高雄車站</option>
						<option value="5104">三多商圈</option>
						<option value="5105">美麗島</option>
						<option value="5106">小港</option>
						<option value="5107">中央公園</option>
						<option value="5108">凹子底</option>
						<option value="5109">後驛</option>
						<option value="5112">草衙</option>
						<option value="5113">前鎮高中</option>
						<option value="5114">凱旋</option>
						<option value="5116">西子灣</option>
						<option value="5117">生態園區</option>
						<option value="5120">都會公園</option>
						<option value="5121">文化中心</option>
						<option value="5123">鹽埕埔</option>
						<option value="5133">技擊館</option>
                    </select>
			    </td>
				</tr>
			<tr height='36'>
			<td width="52" align="right" class="title_font">價格</td>
				<td width="161"><input name="hotel_price" class='InputClass' type="text"
					id="price" size="8" /><span id="price_validation_result" style="color: red;font-size:12px;"></span></td>
				<td width="52" class="title_font"><div align="right">類別</div></td>
                <td width="161">
					<select name="hotel_category">
						<option value="1">無類別</option>
                        <option value="5001">親子同樂</option>
                        <option value="5002">寵物友善</option>
                        <option value="5003">青年旅宿</option>
                    </select>
			    </td>
			</tr>
				<!-- 圖片 -->	
			<tr height='120'>
				<td width="45" align="right" class="title_font">圖片</td>
        <td colspan='3'>
					<table border='0'>
						<tr>
							<td><img height='120' width='96' style="display: none;" id="uploadedImage" src="" alt="">
              <div id="imageCotainer" >
			      	<input style="background: #FFFFFF" class='InputClass' type="file" name="uploadFile" id="uploadFile" size="40" />
               <span id="upload_error" style="color: red;font-size:12px;"></span>
               </div>
              </td>
            </tr>
         </table>
       </td>
		</tr>
				<tr height='36'>
				<td width="45" align="right" class="title_font">簡介</td>
				<td colspan="3"><textarea name="hotel_introduction" class='InputClass' id="hotel_introduction" rows="4" style="width:100%; resize:vertical;"></textarea></td>
			</tr>
			<tr height="36">
				<td height="61" colspan="6" align="center"><BR /> <input
					type="submit" name="Submit" value="新增" />
					<a href="hotelindex.html">返回</a>
				</td>
				
			</tr>
		</table>
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
    <!-- 判斷輸入框空值跳出錯誤 -->
    <script>
          function validateForm() {
            // 获取输入字段的值
            var hotelName = document.getElementById("hotel_name").value;
            var hoteladdress = document.getElementById("hotel_address").value;
            // 检查字段是否为空
            var hotel_nameError = document.getElementById("hotel_nameError");
            if (hotelName === "") {
              hotel_nameError.innerHTML = "請輸入飯店名稱";
            } else {
              hotel_nameError.innerHTML = "";
            }
            var hotel_addressError = document.getElementById("hotel_addressError");
            if (hoteladdress === "") {
              hotel_addressError.innerHTML = "請輸入地址";
            } else {
              hotel_addressError.innerHTML = "";
            }

            var fileInput = document.getElementById("uploadFile");
            var file = fileInput.files[0];
            if (!file) {
              var uploadError = document.getElementById("upload_error");
              uploadError.innerHTML = "請選擇一個圖片檔案";
              return false; // 阻止表單提交                 
            }else {
              var uploadError = document.getElementById("upload_error");
              uploadError.innerHTML = "";
            }


            if (hotelName === "" || hoteladdress === "") {
              return false;
            }

            return true; // 允许表单提交

          }

          //即時更新圖片功能
          $(document).ready(function() {
            // 当选择文件发生变化时
            $('#uploadFile').on('change', function(e) {
              var file = e.target.files[0];
              var reader = new FileReader();
              
            // 读取文件并显示图片
                reader.onload = function(e) {
                  $('#uploadedImage').attr('src', e.target.result);
                  $('#uploadedImage').show(); // 显示图片
                }
              // 读取文件内容
              reader.readAsDataURL(file);
            });
            // 点击图片时触发选择文件的操作
              $('#uploadedImage').on('click', function() {
                e.preventDefault();
              });
            });

          // 判斷電話號碼輸入為數字及最多10碼
          $('#hotel_tel').on('blur', function() {
              var phoneNumber = $(this).val();
              
              // 使用正则表达式验证输入是否为数字，并且限制最多10位数
              var isValid = /^\d{1,10}$/.test(phoneNumber);

              if (!isValid) {
                $('#tel_validation_result').text('請輸入有效的電話號碼，僅限數字。');
                $(this).val(''); // 清空输入框
              } else {
                $('#tel_validation_result').text(''); // 清空验证结果
              }
            });
          
           // 判斷價格輸入為數字及最多11位數
           $('#price').on('blur', function() {
              var phoneNumber = $(this).val();
              
              // 使用正则表达式验证输入是否为数字，并且限制最多10位数
              var isValid = /^\d{1,11}$/.test(phoneNumber);

              if (!isValid) {
                $('#price_validation_result').text('僅限數字');
                $(this).val(''); // 清空输入框
              } else {
                $('#price_validation_result').text(''); // 清空验证结果
              }
            });
          
</script>
</body>
</html>
