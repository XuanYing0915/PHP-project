<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>高雄旅遊網 | 商家查詢 </title>

  <!-- Google字型：Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- 字體驚人 -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- 主題風格 -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- 覆蓋式滾動條 -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- 日期範圍選擇器 -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- 預載器 -->
    <div class="preloader">
      <img src="attraction_Xuan/img/高旅logo藍色.png" alt="" height="120" width="100" style="position: absolute;left: 50%;top: 50%;">
    </div>

    <!-- 導覽列 -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #ff9c07;">
      <!-- 左側導覽列連結 -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">首頁</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">商家查詢</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.導覽列 -->

    <!-- 主側邊欄容器 -->
    <aside class="main-sidebar elevation-4 sidebar-info" style="background-color:#00CCEA;height:2300px">
      <!-- Brand Logo -->
      <a href="../index3.html" class="brand-link">
        <img src="attraction_Xuan/img/高旅logo藍色.png" alt="高旅 Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
        <span class="brand-text " style="color: #ff9c07;font-weight: 700;">高旅網後台</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-2 pb-2 pr-3 mb-2 d-flex rounded-pill text-cancer" style="background-color: antiquewhite;">
          <div class="image">
            <img src="dist/img/耀西.png" class="img-circle elevation-2 mt-3" alt="User Image" style="width: 40px;height:40px;">
          </div>
          <div class="info">
            <a href="#" class="d-block mt-3 " style="font-size: 24px;">阿隆隆</a>
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
            <li class="nav-item menu-is-opening">
              <a href="#" class="nav-link">
                <i class="fa-solid fa-user-tie mr-2"></i>
                <p>
                  會員
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item ml-3">
                  <a href="index2.php" class="nav-link">
                    <i class="fa-solid fa-user-tie mr-2"></i>
                    <p>會員管理</p>
                  </a>
                </li>
                <li class="nav-item ml-3">
                  <a href="" class="nav-link">
                    <i class="fa-solid fa-user-tie mr-2"></i>
                    <p>待補</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- 美食分頁 -->
            <li class="nav-item menu-is-opening menu-open">
              <a href="#" class="nav-link">
                <i class="fa-solid fa-utensils mr-2"></i>
                <p>
                  美食
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item ml-3">
                  <a href="food-index.php" class="nav-link active">
                    <i class="fa-solid fa-utensils mr-2"></i>
                    <p>商家查詢</p>
                  </a>
                </li>
                <li class="nav-item ml-3">
                  <a href="food-index2.php" class="nav-link">
                    <i class="fa-solid fa-utensils mr-2"></i>
                    <p>商家管理</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- 景點分頁 -->
            <li class="nav-item menu-is-opening">
              <a href="#" class="nav-link">
                <i class="fa-solid fa-cable-car mr-2"></i>
                <p>
                  景點
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item ml-3">
                  <a href="attraction_Xuan/attractionBoard.php" class="nav-link">
                    <i class="fa-solid fa-gear mr-2"></i>
                    <p>景點管理</p>
                  </a>
                </li>
                <li class="nav-item ml-3">
                  <a href="attraction_Xuan/attractionInsert.php" class="nav-link">
                    <i class="fa-solid fa-person-walking-luggage mr-2"></i>
                    <p>新增景點</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- 票卷分頁 -->
            <li class="nav-item menu-is-opening">
              <a href="#" class="nav-link">
                <i class="fa-solid fa-ticket mr-2"></i>
                <p>
                  票卷
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item ml-3">
                  <a href="tk_產品及方案管理.html" class="nav-link">
                    <i class="fa-solid fa-ticket mr-2"></i>
                    <p>票卷商品</p>
                  </a>
                </li>
                <li class="nav-item ml-3">
                  <a href="產品其他管理.html" class="nav-link">
                    <i class="fa-solid fa-ticket mr-2"></i>
                    <p>票卷雜項</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- 旅宿分頁 -->
            <li class="nav-item menu-is-opening">
              <a href="#" class="nav-link">
                <i class="fa-solid fa-bed mr-2"></i>
                <p>
                  旅宿
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item ml-3">
                  <a href="hotel/hotelindex.html" class="nav-link">
                    <i class="fa-solid fa-bed mr-2"></i>
                    <p>飯店查詢</p>
                  </a>
                </li>
                <li class="nav-item ml-3">
                  <a href="hotel/hotelInsert.php" class="nav-link">
                    <i class="fa-solid fa-bed mr-2"></i>
                    <p>新增飯店</p>
                  </a>
                </li>
              </ul>
            </li>


            <!-- 購物車 -->
            <li class="nav-item menu-is-opening">
              <a href="#" class="nav-link">
                <i class="fa-solid fa-cart-shopping mr-2"></i>
                <p>
                  訂單管理
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item ml-3">
                  <a href="OrdersManage/food/orders/foodOrders.php" class="nav-link">
                    <i class="fa-solid fa-cart-shopping mr-2"></i>
                    <p>食品訂單</p>
                  </a>
                </li>
                <li class="nav-item ml-3">
                  <a href="OrdersManage/hotel/orders/hotelOrders.php" class="nav-link">
                    <i class="fa-solid fa-cart-shopping mr-2"></i>
                    <p>訂房訂單</p>
                  </a>
                </li>
                <li class="nav-item ml-3">
                  <a href="OrdersManage/ticket/orders/ticketOrders.php" class="nav-link">
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

    <!-- 內容包裝器。包含頁面內容 -->
    <div class="content-wrapper">
      <!-- 內容標頭（頁面標頭） -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">商家查詢</h1>
            </div><!-- /.欄位 -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item active">商家查詢</li>
              </ol>
            </div><!-- /.欄位 -->
          </div><!-- /.列-->
        </div><!-- /.容器（Fluid）-->
      </div>
      <!-- /.內容標頭 -->

      <!-- 主要內容 -->
      <section class="content">
        <div class="mx-4">
          <table id="merchants" class="display" style="width:100%">
            <thead>
              <tr>
                <th>編號</th>
                <th>名稱</th>
                <th>描述</th>
                <th>電話</th>
                <th>服務</th>
                <th>地址</th>
                <th>經度</th>
                <th>緯度</th>
                <th>縮放</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>編號</th>
                <th>名稱</th>
                <th>描述</th>
                <th>電話</th>
                <th>服務</th>
                <th>地址</th>
                <th>經度</th>
                <th>緯度</th>
                <th>縮放</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </section>
      <!-- /.內容 -->
    </div>
    <!-- /.內容包裹區域 -->
    <!-- <footer class="main-footer">
      <strong>版權信息 &copy; 第三組集團</strong>
      版權所有
      <div class="float-right d-none d-sm-inline-block">
        <b>版本</b> 1.0.0
      </div>
    </footer> -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>高旅網後台</b> 1.0
      </div>
      <strong>Copyright &copy; 2023.6 <a href="https://adminlte.io">第三組-高旅網</a>.</strong> 版權所有.
    </footer>

    <!-- 控制側邊欄 -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- 控制側邊欄的內容在此處 -->
    </aside>
    <!-- /.控制側邊欄 -->
  </div>
  <!-- ./包裝器 -->





  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- 在 jQuery UI 提示框（tooltip）和 Bootstrap 提示框之間解決衝突 -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob 圖表 -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- 日期範圍選擇器 -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- 覆蓋式滾動條 -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- 為了示範目的，使用 AdminLTE -->
  <!-- <script src="dist/js/demo.js"></script> -->
  <!-- AdminLTE 儀表板示範（僅供示範用途） -->
  <script src="dist/js/pages/dashboard.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

  <script>
    $(function() {
      $('#merchants').DataTable({
        ajax: 'food-MerchantsApi.php',
        columns: [{
            data: 'merchant_id'
          },
          {
            data: 'name'
          },
          {
            data: 'description'
          },
          {
            data: 'phone'
          },
          {
            data: 'facilities'
          },
          {
            data: 'address'
          },
          {
            data: 'longitude'
          },
          {
            data: 'latitude'
          },
          {
            data: 'zoom'
          }
        ]
      });
    })
  </script>
</body>

</html>