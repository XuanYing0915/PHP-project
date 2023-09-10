  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./img/高旅logo.ico" rel="shortcut icon" />
    <title>高旅後台|景點管理</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- bs table -->
    <link href="https://unpkg.com/bootstrap-table@1.22.0/dist/bootstrap-table.min.css" rel="stylesheet">
    <!-- jq ui -->
    <link rel="stylesheet" href="./JQ_css/jquery-ui.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <style>
      .ui-autocomplete-loading {
        background: white url("./img/londing.gif") right center no-repeat;
      }
    </style>
  </head>

  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Preloader -->
      <div class="preloader">
        <img src="./img/高旅logo藍色.png" alt="" height="120" width="100" style="position: absolute;left: 50%;top: 50%;">
      </div>
    </div>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #ff9c07;">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../index3.html" class="nav-link">首頁</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">景點管理</a>
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

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar elevation-4 sideba   r-info" style="background-color:#00CCEA;height:2300px">
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
            <img src="./img/溫迪.webp" class="img-circle elevation-2 mt-3" alt="User Image" style="width: 40px;height:40px;">
          </div>
          <div class="info">
            <a href="#" class="d-block mt-3 " style="font-size: 24px;">Xuan</a>
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
                <li class="nav-item">
                  <a href="../index2.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>會員管理</p>
                  </a>
                </li>
                <li class="nav-item">
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
                <li class="nav-item">
                  <a href="../food-index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>商家查詢</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../food-index2.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>商家管理</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- 景點分頁 -->
            <li class="nav-item menu-is-opening menu-open">
              <a href="#" class="nav-link">
                <i class="fa-solid fa-cable-car mr-2"></i>
                <p>
                  景點
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item ml-3">
                  <a href="attractionBoard.php" class="nav-link active">
                    <i class="fa-solid fa-gear mr-2"></i>
                    <p>景點管理</p>
                  </a>
                </li>
                <li class="nav-item ml-3">
                  <a href="attractionInsert.php" class="nav-link">
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
                <li class="nav-item">
                  <a href="../tk_產品及方案管理.html" class="nav-link">
                    <i class="fa-solid fa-ticket mr-2"></i>
                    <p>票卷商品</p>
                  </a>
                </li>
                <li class="nav-item">
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
                <li class="nav-item">
                  <a href="../hotel/hotelindex.html" class="nav-link">
                    <i class="fa-solid fa-bed mr-2"></i>
                    <p>飯店查詢</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../hotelInsert.php" class="nav-link">
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
                <li class="nav-item">
                  <a href="../OrdersManage/food/orders/foodOrders.php" class="nav-link">
                    <i class="fa-solid fa-cart-shopping mr-2"></i>
                    <p>食品訂單</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../OrdersManage/hotel/orders/hotelOrders.php" class="nav-link">
                    <i class="fa-solid fa-cart-shopping mr-2"></i>
                    <p>訂房訂單</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../OrdersManage/ticket/orders/ticketOrders.php" class="nav-link">
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

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>景點管理</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item active">景點管理</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>



      <div class="card">
        <div class="card-header">
          <!-- 增加景點按鈕 -->
          <button type="button" class="btn btn-outline-info btn-block btn-lg" onclick="window.location.href='attractionInsert.php'">
            <svg xmlns=" http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="ez-icon engine-tab-trip" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M13.744 13.61l-.654 1.691-.094.068-.09.255-.014.023-.068.032.001.002a.535.535 0 0 0-.242.22.582.582 0 0 0-.076.286c0 .03.01.065.016.098l-.038.068-.021.016c-.066.046-.167.12-.28.208l-.175.144-.079.072-.09.112-.016.027-.087.211-.02.05-.006.054v.003l-.086.121-.038.052-.02.06c-.02.07-.03.124-.05.222-.063.325-.173.975-.273 1.55-.035.204-.068.386-.098.551-.01-.06-.013-.123-.035-.178l-.187-.512c-.045-.12-.09-.24-.129-.335l-.053-.13-.028-.057-.067-.1-.002-.001-.043-.043c-.053-.045-.14-.11-.273-.212-.194-.148-.462-.351-.685-.524a16.634 16.634 0 0 1-.285-.223l-.082-.07h-.001l-.168-.241a2.794 2.794 0 0 1-.059-.175l-.002-.01-.646-1.94-.192-.13.073-.11-.02-.227-.022-.243.029-.154c.078-.426.186-1.026.275-1.527l.112-.643.034-.205.006-.039.053-.096.062-.112.062.016.336.08.136-.34.118-.298-.189-.13a.366.366 0 0 1 .02-.045l.019-.042c.012-.031.041-.085.044-.195l-.003-.012c.144-.243.567-.996.969-1.724l.549-1.002.186-.348.01-.019.11-.078.09-.064.113-.257 1.334-1.93.11-.053c.07-.033.174-.069.299-.135.005-.006.167-.044.308-.07.073-.015.148-.03.216-.046.072-.016.124-.025.21-.06l.002-.001.445.784.232-.995.016-.141a.668.668 0 0 0-.073-.303c-.007-.01-.016-.02-.022-.032l.087-.073.047-.012.02.039.129.145c.14.128.336.265.518.388.09.06.174.113.242.155l.092.054.046.023.038.017c.02.005.039.016.11.024.02.002.035.001.053.002l-.005.014.1.192c-.006.008-.01.016-.017.024a.57.57 0 0 0-.042.038l-.083.126c-.052.112-.08.215-.117.352a12.29 12.29 0 0 0-.2.918l-.016.098-.009.103.01.09c.017.072.03.19.088.342l.012.035.003.052.002.04-.05.022-.052.242-.032.149.007.013-.016.02-.022.025-.094.165-.03.054-.012.05c0 .008-.042.109-.097.218-.083.172-.201.396-.298.587-.048.095-.092.182-.127.257l-.046.106-.021.06-.02.117v.002l-.001.035-.016.014-.093.126-.042.056-.02.07a.687.687 0 0 0 .031.506l-.027.032-.025.075-.017.065a50.04 50.04 0 0 0-.409 1.99 5.71 5.71 0 0 0-.057.397l-.079.081-.008.256c-.056.141-.09.282-.107.417l-.037.077-.005.011zm3.073-8.863l-.08-.06-.06-.01-.053-.1v-.08l.001-.402h-.401l-.226.002-.069-.002a6.93 6.93 0 0 1-.408-.27 3.807 3.807 0 0 1-.216-.165l-.018-.017-.042-.089-.048-.101-.095-.064-.01-.007-.154-.089-.04-.022-.13-.04-.1-.031-.103.023c-.124.027-.232.06-.327.087l-.124.035-.066.082-.017.016-.085.071-.018.022a.754.754 0 0 0-.167.18l-.036.062-.002.002-.129.151-.149.172c-.064.014-.148.03-.23.046-.076.016-.154.032-.226.05-.077.022-.137.034-.236.086-.05.03-.141.062-.262.116l-.003.001-.217.106-.094.046-1.453 2.1-.03.03-.05.113-.059.015-.08.081-.061.06-.027.073-.096.187c-.194.365-.61 1.123-.982 1.79-.186.334-.36.646-.491.876l-.158.275-.039.065-.084.128-.293.446.051.016a.576.576 0 0 0-.044.041l-.17.104-.272.167.07.212-.015.05-.177.631.132-.026-.027.157c-.072.412-.174.988-.262 1.477l-.117.636c-.031.166-.055.292-.058.302l-.01.037-.04.056-.007.008-.007.012-.121.18.075.174-.049.21.124-.039.076.126.048.08.253.16.558 1.674c.028.097.059.182.082.25l.018.054.033.048.22.315.082.09c.072.067.176.15.313.258.204.16.464.357.678.52l.27.205.046.036.046.113c.052.135.12.318.176.472l.116.32-.07.123a.554.554 0 0 0-.046.221c.003.156.056.249.092.318.003.003.01.052.028.13l.026.142.043.228.295.103.419.144.007-.03.047.087.343-.124.346-.124-.131-.485-.003-.017.047-.086.032-.11c.05-.22.157-.848.265-1.467.053-.308.105-.61.148-.843.02-.117.04-.217.054-.292l.014-.064.032-.046-.007-.006a.67.67 0 0 0 .119-.19c.015-.044.017-.074.024-.11l.035-.087a5.514 5.514 0 0 1 .403-.313l.014-.008.103-.082.064-.05.146-.265.027-.049.047-.203.01-.043.04-.019.101-.1.04-.039.1-.174.016-.03.03-.086.004-.003.025-.025.047-.046.054-.109.009-.017.675-1.746.054-.114.03-.064.006-.07a.907.907 0 0 1 .08-.329l.039-.077.003-.092.122-.128-.044-.17a1.04 1.04 0 0 1 .014-.114c.04-.285.15-.843.25-1.324.052-.24.099-.464.136-.63.017-.08.03-.142.042-.19l.065-.076.137-.16-.099-.362-.023-.086.026-.024.125-.113.011-.315c.013-.03.041-.09.081-.17l.291-.57c.048-.096.094-.188.13-.27.026-.058.046-.108.065-.162l.04-.073.113-.135.03-.03.226-.216-.055-.096.026-.14.013-.14c-.001-.055-.01-.098-.019-.144l.178-.218-.298-.296-.018-.087c.005-.039.017-.102.033-.187.037-.186.09-.44.141-.642.025-.097.049-.181.066-.234l.027-.05c.013-.01.095-.037.237-.119l.002-.001.058-.039.107-.072.06-.166.104-.279-.274-.206z">
              </path>
            </svg>
            <div style="font-size: 20px;">增加景點</div>
            <!-- </button> -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="attractionTable" class=" table table-bordered table-striped table-hover">
            <thead>
              <tr class="table-warning ">
                <th class="align-middle text-center">編號</th>
                <th class="align-middle text-center">名稱</th>
                <th class="align-middle text-center">封面圖</th>
                <th class="align-middle text-center">簡介</th>
                <th class="align-middle text-center">行政區</th>
                <th class="align-middle text-center">地址</th>
                <th class="align-middle text-center">休息日</th>
                <th class="align-middle text-center">開放時間</th>
                <th class="align-middle text-center">關閉時間</th>
                <th class="align-middle text-center">電話</th>
                <th class="align-middle text-center">介紹</th>
                <th class="align-middle text-center">交通</th>
                <th class="align-middle text-center">操作</th>
              </tr>
            </thead>
            <tbody>
              <!-- 插入資料庫資料 -->
            </tbody>
            <tfoot>
              <tr class="table-warning">
                <th class="align-middle text-center">編號</th>
                <th class="align-middle text-center">名稱</th>
                <th class="align-middle text-center">封面圖</th>
                <th class="align-middle text-center">簡介</th>
                <th class="align-middle text-center">行政區</th>
                <th class="align-middle text-center">地址</th>
                <th class="align-middle text-center">休息日</th>
                <th class="align-middle text-center">開放時間</th>
                <th class="align-middle text-center">關閉時間</th>
                <th class="align-middle text-center">電話</th>
                <th class="align-middle text-center">介紹</th>
                <th class="align-middle text-center">交通</th>
                <th class="align-middle text-center">操作</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>高旅網後台</b> 1.0
      </div>
      <strong>Copyright &copy; 2023.6 <a href="https://adminlte.io">第三組-高旅網</a>.</strong> 版權所有.
    </footer>

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
    <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
    <!-- Bootstrap 4 table -->
    <script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.22.0/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.22.0/dist/bootstrap-table-locale-all.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.22.0/dist/extensions/export/bootstrap-table-export.min.js"></script>
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


    <!-- Page specific script -->
    <!--sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      $(function() {

        $('[data-widget="sidebar-search"]').SidebarSearch('init');

        function showTable() {
          $("#attractionTable").DataTable({
              // 表格設定
              "responsive": true,
              "lengthChange": true,
              "autoWidth": true,
              "paging": true,
              "searching": true,
              "ordering": true,
              "info": true,
              "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
              // ajax
              "processing": true,
              ajax: './php/attractionBoardSelect.php',
              columns: [{
                  data: `attraction_id`
                },
                {
                  data: `attraction_name`
                },
                {
                  data: "img_name",
                  render: function(data, type) {
                    if (type === "display") {
                      return (
                        '<img src="img/image/' +
                        data +
                        `" alt="${data}" width="120" height="100" />`
                      );
                    }
                    return data;
                  },
                },
                {
                  data: `title`,
                  render: function(data, type, row) {
                    if (type === 'display' && data.length > 20) {
                      return data.substr(0, 20) + '...';
                    }
                    return data;
                  }

                },
                {
                  data: `area_name`
                },
                {
                  data: `address`
                },
                {
                  data: `off_day`
                },
                {
                  data: `open_time`
                },
                {
                  data: `closed_time`
                },
                {
                  data: `phone`
                },
                {
                  data: `description`,
                  render: function(data, type, row) {
                    if (type === 'display' && data.length > 40) {
                      return data.substr(0, 40) + '...';
                    }
                    return data;
                  }
                },
                {
                  data: `traffic`,
                  render: function(data, type, row) {
                    if (type === 'display' && data.length > 40) {
                      return data.substr(0, 40) + '...';
                    }
                    return data;
                  }
                },
                // 加開一個放入按鈕
                {
                  data: null,
                  render: function() {
                    return (
                      // 編輯按鈕
                      `<a class = "btn btn-app bg-warning editBtn">
                <i class = "fas fa-edit" style = "font-size:20px"></i>
                <p style = "vertical-align: middle;">編輯</p> 
                </a>` +
                      // 刪除按鈕
                      `<a class = "btn btn-app bg-danger delBtn">
                <i class = "fa-solid fa-trash" style = "font-size:20px"> </i> <p style = "vertical-align: middle;" >刪除</p> 
                </a>`
                    )
                  }
                }
              ],
              columnDefs: [{
                  targets: [1, 3, 9, 10, 11, 12], // column index (start from 0)
                  orderable: false, // set orderable false for selected columns
                },
                {
                  // 編號
                  width: "6%",
                  targets: 0
                }, {
                  // 名稱
                  width: "6%",
                  targets: 1
                },
                {
                  // 圖片
                  width: "5%",
                  targets: 2
                }, {
                  // 簡介
                  width: "10%",
                  targets: 3
                },
                {
                  width: "6%",
                  targets: 5
                },
                {
                  width: "6%",
                  targets: 6
                }, {
                  width: "8%",
                  targets: 8
                },
                {
                  width: "10%",
                  targets: 10
                },
                {
                  width: "6%",
                  targets: 11
                },
                {
                  width: "6%",
                  targets: 12
                }
              ],
            }).buttons().container()
            .appendTo('#attractionTable_wrapper .col-md-6:eq(0)');
        }
        // 開啟網頁時載入
        showTable();
        // 將table丟棄
        function initializeAttractionTable() {
          // 檢查是否被初始化
          if ($.fn.DataTable.isDataTable('#attractionTable')) {
            // 如果已经初始化，则销毁旧的 DataTable 实例
            $('#attractionTable').DataTable().destroy();
          }
        }


        // 編輯按鈕
        $('#attractionTable').on('click', '.editBtn', function() {
          console.log($(this).parents("tr").children("td:nth-child(1)").text());
          const id = $(this).parents("tr").children("td:nth-child(1)").text();
          window.location.replace(`attractionupdate.php?${id}`)

        });

        // 刪除按鈕
        $('#attractionTable').on('click', '.delBtn', function() {
          // 定義按鈕
          console.log($(this).parents("tr").children("td:nth-child(1)").text());
          const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
          })
          // 按鈕觸發
          swalWithBootstrapButtons.fire({
            title: '確定要刪除嗎?',
            text: "您將永遠失去這筆資料!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: '沒錯，我要刪除!',
            cancelButtonText: '不，我在想想!',
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
              // console.log($(this).parents('tr').children('td:nth-child(1)').text())
              // const id = $(this).parents("tr").children("td:nth-child(1)").text();
              const id = $(this).closest('tr').find('td:first-child').text();
              console.log(id)
              $.ajax({
                url: './php/attractionDelete.php',
                type: 'GET',
                data: {
                  "id": $(this).parents("tr").children("td:nth-child(1)").text()
                },
                dataType: 'json'
              }).done(function(data) {
                if (data.success) {
                  swalWithBootstrapButtons.fire({
                    title: '刪除!',
                    text: '景點已刪除!',
                    imageUrl: 'https://memeprod.ap-south-1.linodeobjects.com/user-maker/5cab2f68c4dc1308858548de57233b58.gif',
                    imageWidth: 400,
                    imageHeight: 300,
                    timer: 1500,
                    timerProgressBar: true,
                    showClass: {
                      popup: 'animate__animated animate__bounceInDown'
                    },
                    hideClass: {
                      popup: 'animate__animated animate__hinge'
                    }
                  })
                  console.log('4')
                  initializeAttractionTable();
                  showTable();
                } else {
                  swalWithBootstrapButtons.fire(
                    '錯誤!',
                    '系統出錯啦',
                    'warning'
                  )
                  console.log('5')
                }
              })
            } else if (
              result.dismiss === Swal.DismissReason.cancel
            ) {
              swalWithBootstrapButtons.fire(
                '取消',
                '景點依然存在:)',
                'info'
              )
            }
          })
        })
        $(window).on("resize", function() {
          location.reload();
        });

      })
    </script>
  </body>

  </html>