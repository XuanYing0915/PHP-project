<?php
require './php/connection.php';
// require './php/u_select.php';
$id = $_SERVER['QUERY_STRING'];


$sql =
  "SELECT 
`attraction_name`,
`title`, 
`img_name`,
`area`.`area_id`,
`area`.`area_name`,
`address`,
`off_day`,
TIME_FORMAT(`open_time`, '%H:%i') AS `open_time`,
TIME_FORMAT(`closed_time`, '%H:%i') AS`closed_time`,
`phone`, 
`description`, 
`traffic` 
FROM `attraction` 
JOIN `area` 
ON `attraction`.`fk_area_id` = `area`.`area_id` 
JOIN `attraction_image` 
ON  `attraction_image`.`fk_attraction_id` =`attraction`.`attraction_id`
WHERE attraction_id=$id;";



$row = $pdo->query($sql)->fetch();
if (empty($row)) {
  header('Location:attractionBoard.php');
  exit;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./img/高旅logo.ico" rel="shortcut icon" />
  <title>高旅後台|更改景點</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- animate -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" /> -->
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="../plugins/dropzone/min/dropzone.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="../plugins/codemirror/codemirror.css">
  <link rel="stylesheet" href="../plugins/codemirror/theme/monokai.css">
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="../plugins/simplemde/simplemde.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <style>
    em {
      font-size: 12px;
      color: #ff9c07;
      font-weight: 700;
    }

    label {
      font-size: 18px;
      color: #0392ff;
      font-weight: 700;
    }

    .checkbox label {
      font-size: 16px;
      color: #000a90;
      font-weight: 500;
    }

    .openYearRound {
      font-size: 18px;
      color: #ff8e03;
      font-weight: 700;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader">
      <img src="./img/高旅logo藍色.png" alt="AdminLTELogo" height="120" width="100" style="position: absolute;left: 50%;top: 50%;">
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
        <a href="../index3.html" class="nav-link">首頁</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">編輯景點</a>
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
  <aside class="main-sidebar elevation-4 sidebar-info" style="background-color:#00CCEA;height:1800px">
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
          <a href="#" class="d-block mt-3 " style="font-size: 24px;"> Venti</a>
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
                <a href="attractionBoard.php" class="nav-link">
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
            <h1>修改景點</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">首頁</a></li>
              <li class="breadcrumb-item active">修改景點</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- 基本資訊 -->
        <div class="card card-default">
          <div class="card-header ">
            <em>必填 請確實填寫</em>
            <h3 class="card-title pr-2" style="color: #00CCEA;font-weight: 900;">景點基本資訊</h3>

            <div class="card-tools">
              <!-- 展開 縮小欄位 -->
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <form action="" method="post">

                  <!-- 景點名稱 -->
                  <div class="form-group">
                    <label for="attractionName">旅遊景點</label>
                    <input type="text" class="form-control" id="attractionName" value="<?= $row['attraction_name'] ?>" required>
                  </div>

                  <!-- 行政區 可搜尋 -->
                  <div class="form-group">
                    <label for="areaSelect">地區</label>
                    <select id="areaSelect" class="form-control" style="width: 100%;">

                    </select>
                  </div>

                  <!-- 景點地址 -->
                  <div class="form-group">
                    <label for="address">地址</label>
                    <input type="text" class="form-control" id="address" placeholder="請輸入地址" value="<?= $row['address'] ?>" required>
                  </div>
                  <!-- 聯絡方式 -->
                  <div class="form-group">
                    <label for="phone">聯絡方式:</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-phone"></i>
                        </span>
                      </div>
                      <input type="text" id="phone" class="form-control" data-inputmask="'mask':'(99)9999-9999'" data-mask inputmode="text" value="<?= $row['phone'] ?>">
                    </div>
                  </div>
                  <div class="row d-flex">
                    <div class="form-group col-md-6">
                      <!-- 開放時間 -->
                      <label for="openTimeVal">開放時間:</label>
                      <div class="input-group date" data-target-input="nearest" id="open_time">
                        <input type="text" class="form-control datetimepicker-input" data-target="#open_time" id="openTimeVal" value="<?= $row['open_time'] ?>" />
                        <div class="input-group-append" data-target="#open_time" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                      </div>
                    </div>
                    <!-- 關閉時間 -->
                    <div class="form-group col-md-6">
                      <label for="closedTimeVal">關閉時間:</label>
                      <div class="input-group date" data-target-input="nearest" id="closed_time">
                        <input type="text" class="form-control datetimepicker-input" data-target="#closed_time" id="closedTimeVal" value="<?= $row['closed_time'] ?>" />
                        <div class="input-group-append" data-target="#closed_time" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

            <!-- 公休日 -->
            <div class="form-group">
              <label class="d-block" for="off_day">公休日:</label>
              <div class="checkbox d-flex justify-content-around">
                <div class="icheck-primary d-inline">
                  <input type="checkbox" neme="off_day" id="monday" value="星期一" class="ck">
                  <label for="monday">
                    星期一
                  </label>
                </div>
                <div class="icheck-primary d-inline">
                  <input type="checkbox" neme="off_day" id="tuesday" value="星期二" class="ck">
                  <label for="tuesday">
                    星期二
                  </label>
                </div>
                <div class="icheck-primary d-inline">
                  <input type="checkbox" neme="off_day" id="wednesday" value="星期三" class="ck">
                  <label for="wednesday">
                    星期三
                  </label>
                </div>
                <div class="icheck-primary d-inline">
                  <input type="checkbox" neme="off_day" id="thursday" value="星期四" class="ck">
                  <label for="thursday">
                    星期四
                  </label>
                </div>
                <div class="icheck-primary d-inline">
                  <input type="checkbox" neme="off_day" id="friday" value="星期五" class="ck">
                  <label for="friday">
                    星期五
                  </label>
                </div>
                <div class="icheck-primary d-inline">
                  <input type="checkbox" neme="off_day" id="saturday" value="星期六" class="ck">
                  <label for="saturday">
                    星期六
                  </label>
                </div>
                <div class="icheck-primary d-inline">
                  <input type="checkbox" neme="off_day" id="sunday" value="星期天" class="ck">
                  <label for="sunday">
                    星期天
                  </label>
                </div>

              </div>
              <div class="icheck-primary d-inline">
                <input type="checkbox" id="openYearRound" value="全年開放">
                <label for="openYearRound" class="openYearRound">
                  全年開放
                </label>
              </div>

            </div>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->


        <!-- /.col-->
        <!-- /.card-body -->
        <!-- 景點介紹 -->
        <div class="card card-default">
          <div class="card-header ">
            <em>填寫越完整越好</em>
            <h3 class="card-title pr-2" style="color: #00CCEA;font-weight: 900;">景點介紹</h3>

            <div class="card-tools">
              <!-- 展開 縮小欄位 -->
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <!-- 圖片 -->
                  <div class="card card-outline card-danger">
                    <div class="card-header">

                      <div class="form-group">
                        <label for="attractionImg">上傳圖片</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="attractionImg">
                            <label id="fileName" class="custom-file-label" for="attractionImg"><?php echo $row['img_name'] ?></label>
                          </div>

                        </div>
                      </div>
                      <div id="imgPreview" class="height: 100px; overflow:scroll;">
                        <!-- 預覽圖片 -->
                        <img id="attractionImg" src="<?php echo "./img/image/" . $row['img_name'] ?>" class="img-thumbnail img-fluid mx-auto d-block" alt="<?php echo "./img/image/" . $row['img_name'] ?>">
                      </div>
                    </div>
                  </div>
                  <!-- 簡介 -->
                  <div class="card card-primary card-outline">
                    <!-- style="background: #00CCEA; -->
                    <div class="card-header">
                      <h3 class="card-title">
                        景點簡介
                      </h3>
                      <div class="card-body"></div>
                      <div id="titleEditor"></div>
                    </div>
                    <!-- /.card-header -->
                  </div>
                  <!-- 詳細介紹 -->
                  <div class="card  card-outline card-warning">
                    <div class="card-header">
                      <h3 class="card-title">
                        詳細介紹
                      </h3>
                      <div class="card-body"></div>
                      <div id="descriptionEditor"></div>
                    </div>
                    <!-- /.card-header -->
                  </div>
                  <!-- 交通 -->
                  <div class="card card-success card-outline">
                    <div class="card-header ">
                      <h3 class="card-title">
                        交通方式
                      </h3>
                      <div class="card-body"></div>
                      <div id="trafficEditor"></div>
                    </div>
                    <!-- /.card-header -->
                  </div>
                </div>
                <!-- /.card-body -->
                </form>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.container-fluid -->
    <!-- 增加景點按鈕 -->
    <button type="submit" class="btn btn-outline-info btn-block btn-lg" id="sumbitBtn">
      <svg xmlns=" http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="ez-icon engine-tab-trip" viewBox="0 0 24 24">
        <path fill-rule="evenodd" d="M13.744 13.61l-.654 1.691-.094.068-.09.255-.014.023-.068.032.001.002a.535.535 0 0 0-.242.22.582.582 0 0 0-.076.286c0 .03.01.065.016.098l-.038.068-.021.016c-.066.046-.167.12-.28.208l-.175.144-.079.072-.09.112-.016.027-.087.211-.02.05-.006.054v.003l-.086.121-.038.052-.02.06c-.02.07-.03.124-.05.222-.063.325-.173.975-.273 1.55-.035.204-.068.386-.098.551-.01-.06-.013-.123-.035-.178l-.187-.512c-.045-.12-.09-.24-.129-.335l-.053-.13-.028-.057-.067-.1-.002-.001-.043-.043c-.053-.045-.14-.11-.273-.212-.194-.148-.462-.351-.685-.524a16.634 16.634 0 0 1-.285-.223l-.082-.07h-.001l-.168-.241a2.794 2.794 0 0 1-.059-.175l-.002-.01-.646-1.94-.192-.13.073-.11-.02-.227-.022-.243.029-.154c.078-.426.186-1.026.275-1.527l.112-.643.034-.205.006-.039.053-.096.062-.112.062.016.336.08.136-.34.118-.298-.189-.13a.366.366 0 0 1 .02-.045l.019-.042c.012-.031.041-.085.044-.195l-.003-.012c.144-.243.567-.996.969-1.724l.549-1.002.186-.348.01-.019.11-.078.09-.064.113-.257 1.334-1.93.11-.053c.07-.033.174-.069.299-.135.005-.006.167-.044.308-.07.073-.015.148-.03.216-.046.072-.016.124-.025.21-.06l.002-.001.445.784.232-.995.016-.141a.668.668 0 0 0-.073-.303c-.007-.01-.016-.02-.022-.032l.087-.073.047-.012.02.039.129.145c.14.128.336.265.518.388.09.06.174.113.242.155l.092.054.046.023.038.017c.02.005.039.016.11.024.02.002.035.001.053.002l-.005.014.1.192c-.006.008-.01.016-.017.024a.57.57 0 0 0-.042.038l-.083.126c-.052.112-.08.215-.117.352a12.29 12.29 0 0 0-.2.918l-.016.098-.009.103.01.09c.017.072.03.19.088.342l.012.035.003.052.002.04-.05.022-.052.242-.032.149.007.013-.016.02-.022.025-.094.165-.03.054-.012.05c0 .008-.042.109-.097.218-.083.172-.201.396-.298.587-.048.095-.092.182-.127.257l-.046.106-.021.06-.02.117v.002l-.001.035-.016.014-.093.126-.042.056-.02.07a.687.687 0 0 0 .031.506l-.027.032-.025.075-.017.065a50.04 50.04 0 0 0-.409 1.99 5.71 5.71 0 0 0-.057.397l-.079.081-.008.256c-.056.141-.09.282-.107.417l-.037.077-.005.011zm3.073-8.863l-.08-.06-.06-.01-.053-.1v-.08l.001-.402h-.401l-.226.002-.069-.002a6.93 6.93 0 0 1-.408-.27 3.807 3.807 0 0 1-.216-.165l-.018-.017-.042-.089-.048-.101-.095-.064-.01-.007-.154-.089-.04-.022-.13-.04-.1-.031-.103.023c-.124.027-.232.06-.327.087l-.124.035-.066.082-.017.016-.085.071-.018.022a.754.754 0 0 0-.167.18l-.036.062-.002.002-.129.151-.149.172c-.064.014-.148.03-.23.046-.076.016-.154.032-.226.05-.077.022-.137.034-.236.086-.05.03-.141.062-.262.116l-.003.001-.217.106-.094.046-1.453 2.1-.03.03-.05.113-.059.015-.08.081-.061.06-.027.073-.096.187c-.194.365-.61 1.123-.982 1.79-.186.334-.36.646-.491.876l-.158.275-.039.065-.084.128-.293.446.051.016a.576.576 0 0 0-.044.041l-.17.104-.272.167.07.212-.015.05-.177.631.132-.026-.027.157c-.072.412-.174.988-.262 1.477l-.117.636c-.031.166-.055.292-.058.302l-.01.037-.04.056-.007.008-.007.012-.121.18.075.174-.049.21.124-.039.076.126.048.08.253.16.558 1.674c.028.097.059.182.082.25l.018.054.033.048.22.315.082.09c.072.067.176.15.313.258.204.16.464.357.678.52l.27.205.046.036.046.113c.052.135.12.318.176.472l.116.32-.07.123a.554.554 0 0 0-.046.221c.003.156.056.249.092.318.003.003.01.052.028.13l.026.142.043.228.295.103.419.144.007-.03.047.087.343-.124.346-.124-.131-.485-.003-.017.047-.086.032-.11c.05-.22.157-.848.265-1.467.053-.308.105-.61.148-.843.02-.117.04-.217.054-.292l.014-.064.032-.046-.007-.006a.67.67 0 0 0 .119-.19c.015-.044.017-.074.024-.11l.035-.087a5.514 5.514 0 0 1 .403-.313l.014-.008.103-.082.064-.05.146-.265.027-.049.047-.203.01-.043.04-.019.101-.1.04-.039.1-.174.016-.03.03-.086.004-.003.025-.025.047-.046.054-.109.009-.017.675-1.746.054-.114.03-.064.006-.07a.907.907 0 0 1 .08-.329l.039-.077.003-.092.122-.128-.044-.17a1.04 1.04 0 0 1 .014-.114c.04-.285.15-.843.25-1.324.052-.24.099-.464.136-.63.017-.08.03-.142.042-.19l.065-.076.137-.16-.099-.362-.023-.086.026-.024.125-.113.011-.315c.013-.03.041-.09.081-.17l.291-.57c.048-.096.094-.188.13-.27.026-.058.046-.108.065-.162l.04-.073.113-.135.03-.03.226-.216-.055-.096.026-.14.013-.14c-.001-.055-.01-.098-.019-.144l.178-.218-.298-.296-.018-.087c.005-.039.017-.102.033-.187.037-.186.09-.44.141-.642.025-.097.049-.181.066-.234l.027-.05c.013-.01.095-.037.237-.119l.002-.001.058-.039.107-.072.06-.166.104-.279-.274-.206z">
        </path>
      </svg>
      <div style="font-size: 20px;">修改景點</div>
    </button>
    <!-- </button> -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>高旅網後台</b> 1.0
    </div>
    <strong>Copyright &copy; 2023.6 <a href="https://adminlte.io">第三組-高旅網</a>.</strong>版權所有.
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!-- Select2 -->
  <script src="../plugins/select2/js/select2.full.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script> -->
  <!-- Bootstrap4 Duallistbox -->
  <script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <!-- InputMask -->
  <script src="../plugins/moment/moment.min.js"></script>
  <script src="../plugins/inputmask/jquery.inputmask.min.js"></script>
  <!-- date-range-picker -->
  <script src="../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- BS-Stepper -->
  <script src="../plugins/bs-stepper/js/bs-stepper.min.js"></script>
  <!-- dropzonejs -->
  <script src="../plugins/dropzone/min/dropzone.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- Summernote -->
  <script src="../plugins/summernote/summernote-bs4.min.js"></script>
  <!-- CodeMirror -->
  <!-- <script src="../plugins/codemirror/codemirror.js"></script>
  <script src="../plugins/codemirror/mode/css/css.js"></script>
  <script src="../plugins/codemirror/mode/xml/xml.js"></script>
  <script src="../plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script> -->
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="../dist/js/demo.js"></script> -->
  <!-- Page specific script -->
  <!--sweetalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $(function() {
      const select = $('#areaSelect');

      // 地區選單改變
      select.on('change', function() {
        // 取出選定的id
        console.log($(this).val());
        console.log(select.val());
        areaId = ($(this).val())
      })

      // 地區選單
      function loadAreas() {
        $.ajax({
          url: './php/a_area_select.php',
          type: 'GET',
          dataType: 'json'
        }).done(function(areas) {
          // 生成新物件
          const docFrag = $(document.createDocumentFragment());
          // 帶入資料生成下拉選單
          areas.forEach(function(area) {
            const {
              area_id,
              area_name
            } = area;
            const option = `<option value="${area_id}">${area_name}</option>;`
            docFrag.append(option);
          });
          // 把值設為空
          select.empty();
          // 第一個選項
          // 待解決  無法顯示原本顯示的項目

          // 將php值轉為js變數使用
          <?php $area_id = $row["area_id"] ?>
          const originalAreaId = <?php echo  $area_id ?>;

          <?php $area_name = $row["area_name"] ?>
          const originalAreaName = '<?php echo  $area_name ?>';

          select.append(`<option value="${originalAreaId}">${originalAreaName}</option>`);
          // 生成資料
          select.append(docFrag);
        });
      }
      // 生成下拉選單
      loadAreas();


      // 公休日勾選欄
      // 將php值轉為js變數使用
      <?php $offDayValues = $row["off_day"] ?>
      let originalOD = '<?php echo  $offDayValues ?>';
      let offDayValues = [];


      function originalOffDay() {
        // 把字串切割裝進陣列
        let updateOffDayArr = originalOD.split(',');
        console.log(updateOffDayArr);
        // 帶入資料比對  有相同的值就勾選
        for (var i = 0; i < updateOffDayArr.length; i++) {
          let day = updateOffDayArr[i];
          $(`.ck[value="${day}"]`).prop('checked', true);
          // if ($(`.ck:nth-child[${i}]`).val() == updateOffDayArr[i]) {
          //   $(`.ck[value="${day}"]`).prop('checked', true);
          // }
          offDayValues.push(day);
          console.log('原本的公休日迴圈', offDayValues);
        }
      }
      originalOffDay()


      // 打印到陣列函式
      function updateOffDay() {
        offDayValues = [];
        $('.ck:checked').each(function() {
          offDayValues.push($(this).val());
        });
      }

      updateOffDay();
      // 勾選處發
      $('.ck').change(function() {

        if ($(this).is(':checked')) {
          updateOffDay();
          console.log('勾選', offDayValues);

        } else {
          updateOffDay();
          console.log('取消勾選', offDayValues);

        }
      });

      // 點擊全年開放  把按鈕禁用
      $('#openYearRound').change(function() {
        if ($(this).is(':checked')) {
          $('.ck').prop('checked', false).attr('disabled', true);
          offDayValues = [];
          offDayValues.push($('#openYearRound').val());
          console.log(offDayValues);
        } else {
          $('.ck').attr('disabled', false);
          updateOffDay();
        }
      });



      // 時間顯示
      $('#open_time').datetimepicker({
        format: 'HH:mm:00'
      });
      $('#closed_time').datetimepicker({
        format: 'HH:mm:00'
      });

      // 電話方式
      $('[data-mask]').inputmask();


      // 圖片預覽
      let fileName = ''; // 这里声明了全局变量
      let imgBase64 = '';

      // 將原本景點圖片的名稱儲存  
      // 改修改圖片時傳送ajax刪除
      <?php
      $original_img_name = $row['img_name'];
      ?>
      let original_img_name = '<?php echo  $original_img_name ?>';


      $('#attractionImg').on('change', function(e) {
        const file = this.files[0]; //將上傳檔案轉換為base64字串
        const fr = new FileReader(); //建立FileReader物件 
        console.log(file.name);
        fr.onload = function(e) {
          // 移除原本圖片預覽
          $('#imgPreview').children().remove();
          // 移除原本圖片檔名
          $('#fileName').text("");
          // 生成選擇圖片的預覽
          const preview = `<img id="attractionImg" src="${e.target.result}" class="img-thumbnail img-fluid mx-auto d-block" alt="${e.target.result}">`;
          // 加入html
          $('#imgPreview').append(preview);
          // 加入檔案名
          $('#fileName').append(file.name);
          imgBase64 = e.target.result;
        };
        // 使用 readAsDataURL 將圖片轉成 Base64
        fr.readAsDataURL(file);
        fileName = file.name;
      });

      // 編輯器 - 標題
      $('#titleEditor').summernote({
        placeholder: '用一句話作介紹~<br>呈現在精美小卡!',
        height: 100,
      });
      // 將php變數轉為js
      <?php $title = $row["title"] ?>
      let title = "";
      title = `<?php echo $title ?>`;
      // 待入資料
      $('#titleEditor').summernote('code', title);


      // 編輯器-詳細介紹
      $('#descriptionEditor').summernote({
        placeholder: '詳細的介紹景點<br>可以吸引更多遊客唷!',
        height: 100,
      });
      // 將php變數轉為js   
      <?php $description = $row["description"] ?>
      let description = `<?php echo  $description ?>`;
      // 待入資料
      $('#descriptionEditor').summernote('code', description);


      // 編輯器-交通
      $('#trafficEditor').summernote({
        placeholder: '前往景點的交通方式!',
        height: 100,
      });
      // 將php變數轉為js   
      <?php $traffic = $row["traffic"] ?>
      let traffic = `<?php echo  $traffic ?>`;
      // 待入資料
      $('#trafficEditor').summernote('code', traffic);


      // 離開提示
      window.onbeforeunload = function() {
        return "您的修改尚未保存！";
      }
      let attractionId = <?php echo $id ?>;


      // 表單初始化時，保存原始值
      const originalAttractionName = $('#attractionName').val();
      const originalTitle = $('#titleEditor').summernote('code');
      let originalArea = Number($('#areaSelect').val());
      const originalAddress = $('#address').val();
      const originalOpenTime = $('#openTimeVal').val();
      const originalClosedTime = $('#closedTimeVal').val();
      const originalPhone = $('#phone').val();
      const originalDescription = $('#descriptionEditor').summernote('code');
      const originalTraffic = $('#trafficEditor').summernote('code');



      // 能動版---修改圖+表單才會成功---------------------------------------------------------------------
      // 把資料送出
      // $('#sumbitBtn').on('click', function() {
      //   // console.log(offDayValues);
      //   console.log(Number($('#areaSelect').val()), $("#areaSelect"))

      //   const attractionName = $('#attractionName').val(); //景點名 
      //   // console.log(attractionName);
      //   const areaId = Number($('#areaSelect').val()); //地區
      //   // console.log(('#areaSelect').val());
      //   const address = $('#address').val(); //地址
      //   // console.log($('#address').val());
      //   const phone = $('#phone').val(); //電話
      //   // console.log(phone);
      //   const offDay = offDayValues; //公休日
      //   // console.log(offDay);
      //   const titleEditor = $('#titleEditor').summernote('code');
      //   // console.log(titleEditor);
      //   const descriptionEditor = $('#descriptionEditor').summernote('code');
      //   // console.log(descriptionEditor);
      //   const trafficEditor = $('#trafficEditor').summernote('code');
      //   // console.log(trafficEditor);

      //   // 定義表單上傳資料
      //   let attractionId = <?php echo $id ?>;
      //   const upeate = {
      //     attraction_id: attractionId,
      //     attraction_name: $('#attractionName').val(),
      //     title: $('#titleEditor').summernote('code'),
      //     fk_area_id: areaId,
      //     address: $('#address').val(),
      //     off_day: offDayValues.toString(),
      //     open_time: ($('#openTimeVal').val()),
      //     closed_time: ($('#closedTimeVal').val()),
      //     phone: ($('#phone').val()),
      //     description: $('#descriptionEditor').summernote('code'),
      //     traffic: $('#trafficEditor').summernote('code'),
      //   }


      //   console.log(upeate);
      //   // 定義視窗按鈕套件
      //   const swalWithBootstrapButtons = Swal.mixin({
      //     customClass: {
      //       confirmButton: 'btn btn-success',
      //       cancelButton: 'btn btn-danger'
      //     },
      //     buttonsStyling: false
      //   })

      //   // 按鈕觸發
      //   // swalWithBootstrapButtons.fire({
      //   //   title: '確定要修改嗎?',
      //   //   icon: 'info',
      //   //   showCancelButton: true,
      //   //   confirmButtonText: '是的，我想修改!',
      //   //   cancelButtonText: '不，我再確認一下!',
      //   //   reverseButtons: true
      //   // }).then((result) => {

      //   // if (result.isConfirmed) {

      //   // 定義一個變數判斷是否修改表單
      //   let isFormChange = (
      //     $('#attractionName').val() !== '' ||
      //     $('#titleEditor').summernote('code') !== '' ||
      //     Number($('#areaSelect').val()) !== 0 ||
      //     $('#address').val() !== '' ||
      //     $('#openTimeVal').val() !== '' ||
      //     $('#closedTimeVal').val() !== '' ||
      //     $('#phone').val() !== '' ||
      //     $('#descriptionEditor').summernote('code') !== '' ||
      //     $('#trafficEditor').summernote('code') !== ''
      //   );

      //   // 定義一個變數判斷是否修改圖片
      //   let isImageChange = (fileName !== original_img_name);

      //   // 判定没有修改任何内容
      //   // if (!isFormChange && !isImageChange) {
      //   //   Swal.fire({
      //   //     icon: 'info',
      //   //     title: '没有进行任何修改',
      //   //     text: '请编辑表单或选择图片以进行修改',
      //   //     showConfirmButton: false,
      //   //     timer: 2000,
      //   //     timerProgressBar: true,
      //   //     showClass: {
      //   //       popup: 'animate__animated animate__bounceInDown'
      //   //     },
      //   //     hideClass: {
      //   //       popup: 'animate__animated animate__backOutDown'
      //   //     }
      //   //   });
      //   //   return; // 結束
      //   // }

      //   // 如果更改表單
      //   if (isFormChange || isImageChange) {
      //     // 觸發按鈕
      //     swalWithBootstrapButtons.fire({
      //       title: '確定要修改嗎?',
      //       icon: 'info',
      //       showCancelButton: true,
      //       confirmButtonText: '是的，我想修改!',
      //       cancelButtonText: '不，我再確認一下!',
      //       reverseButtons: true
      //     }).then((result) => {
      //       if (isFormChange) {
      //         // 傳送表單ajax
      //         $.ajax({
      //           url: './php/a_update.php',
      //           type: 'POST',
      //           data: upeate,
      //           dataType: 'json'
      //         }).done(function(data) {
      //           if (data.success) {
      //             if (isImageChange) {
      //               $.ajax({
      //                 url: './php/img_update.php',
      //                 type: 'POST',
      //                 data: {
      //                   img_name: fileName,
      //                   img_data: imgBase64,
      //                   fk_attraction_id: attractionId,
      //                   original_img_name: original_img_name
      //                 },
      //                 dataType: 'json'
      //               }).done(function(data) {
      //                 if (data.success) {
      //                   swalWithBootstrapButtons.fire({
      //                     title: '修改成功!',
      //                     text: "即將為您跳轉回管理景點頁",
      //                     icon: 'success',
      //                     showConfirmButton: false,
      //                     showClass: {
      //                       popup: 'animate__animated animate__bounceInDown'
      //                     },
      //                     hideClass: {
      //                       popup: 'animate__animated animate__fadeOutUp'
      //                     },
      //                     timer: 2000,
      //                     timerProgressBar: true
      //                   }).then((result) => {

      //                     window.onbeforeunload = null;
      //                     window.setTimeout(function() {
      //                       window.location.href = 'attractionBoard.php';
      //                     }, 200);
      //                   });
      //                 }
      //               });
      //             } else {
      //               // Only form updated, no image change
      //               swalWithBootstrapButtons.fire(
      //                 '修改成功!',
      //                 '即將為您跳轉回管理景點頁',
      //                 'success'
      //               ).then((result) => {
      //                 window.onbeforeunload = null;
      //                 window.setTimeout(function() {
      //                   window.location.href = 'attractionBoard.php';
      //                 }, 200);
      //               });
      //             }
      //           } else {

      //             Swal.fire({
      //               icon: 'error',
      //               title: data.errorMessage,
      //               text: "請稍後再試",
      //               showConfirmButton: false,
      //               timer: 2000,
      //               timerProgressBar: true,
      //               showClass: {
      //                 popup: 'animate__animated animate__bounceInDown'
      //               },
      //               hideClass: {
      //                 popup: 'animate__animated animate__backOutDown'
      //               }
      //             });
      //           }
      //         });
      //       }
      //     })
      //   }
      // })

      // 能動版  到此全註解



      // 圖/表全部分開  拆出函式版--------------------------------------------------------------
      // 把資料送出按紐
      $('#sumbitBtn').on('click', function() {
        console.log("原始值");
        console.log(attractionId);
        console.log(originalAttractionName)
        console.log(originalTitle)
        console.log(originalArea)
        console.log(originalAddress)
        console.log(originalOpenTime)
        console.log(originalClosedTime)
        console.log(originalPhone)
        console.log(originalDescription)
        console.log(originalTraffic)
        console.log(original_img_name);

        // console.log(offDayValues);
        // console.log(Number($('#areaSelect').val()), $("#areaSelect"))

        // const attractionName = $('#attractionName').val(); //景點名 
        // // console.log(attractionName);
        // const areaId = Number($('#areaSelect').val()); //地區
        // // console.log(('#areaSelect').val());
        // const address = $('#address').val(); //地址
        // // console.log($('#address').val());
        // const phone = $('#phone').val(); //電話
        // // console.log(phone);
        // const offDay = offDayValues; //公休日
        // // console.log(offDay);
        // const titleEditor = $('#titleEditor').summernote('code');
        // // console.log(titleEditor);
        // const descriptionEditor = $('#descriptionEditor').summernote('code');
        // // console.log(descriptionEditor);
        // const trafficEditor = $('#trafficEditor').summernote('code');
        // console.log(trafficEditor);


        // 定義表單上傳資料
        const upeate = {
          attraction_id: attractionId,
          attraction_name: $('#attractionName').val(),
          title: $('#titleEditor').summernote('code'),
          fk_area_id: Number($('#areaSelect').val()),
          address: $('#address').val(),
          off_day: offDayValues.toString(),
          open_time: ($('#openTimeVal').val()),
          closed_time: ($('#closedTimeVal').val()),
          phone: ($('#phone').val()),
          description: $('#descriptionEditor').summernote('code'),
          traffic: $('#trafficEditor').summernote('code'),
        }

        // log  改變的值  area有問題  刪

        console.log("--------------------------------------------");
        console.log("改變");
        console.log(attractionId);
        console.log($('#attractionName').val());
        console.log($('#titleEditor').summernote('code'));
        console.log(Number($('#areaSelect').val()));
        console.log($('#address').val());
        console.log(offDayValues.toString());
        console.log($('#openTimeVal').val());
        console.log(($('#closedTimeVal').val()));
        console.log($('#phone').val());
        console.log($('#descriptionEditor').summernote('code'));
        console.log($('#trafficEditor').summernote('code'));
        console.log(fileName);

        // 定義視窗按鈕套件
        const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
          },
          buttonsStyling: false
        })

        // 定義一個變數判斷是否修改表單
        let isFormChange = (
          $('#attractionName').val() !== originalAttractionName ||
          $('#titleEditor').summernote('code') !== originalTitle ||
          // Number($('#areaSelect').val()) !== originalArea ||
          $('#address').val() !== originalAddress ||
          $('#openTimeVal').val() !== originalOpenTime ||
          $('#closedTimeVal').val() !== originalClosedTime ||
          $('#phone').val() !== originalPhone ||
          $('#descriptionEditor').summernote('code') !== originalDescription ||
          $('#trafficEditor').summernote('code') !== originalTraffic
        );

        // 定義一個變數判斷是否修改圖片
        let isImageChange = (fileName !== original_img_name);


        console.log("表單判定修改")
        console.log(isFormChange)
        console.log("圖片判定修改")
        console.log(isImageChange)




        // alert套件效果
        // 詢問修改
        function changeReady() {
          swalWithBootstrapButtons.fire({
            title: '確定要修改嗎?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonText: '是的，我想修改!',
            cancelButtonText: '不，我再確認一下!',
            reverseButtons: true
          })
        }

        // 成功
        function UpSuccess() {
          swalWithBootstrapButtons.fire(
            '修改成功！',
            '即將為您跳轉回管理景點頁面',
            'success'
          ).then((result) => {
            window.onbeforeunload = null;
            window.setTimeout(function() {
              window.location.href = 'attractionBoard.php';
            }, 200);
          });
        }
        // 失敗
        function UpError() {
          Swal.fire({
            icon: 'error',
            title: '修改失敗',
            text: '請稍後再試',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            showClass: {
              popup: 'animate__animated animate__bounceInDown'
            },
            hideClass: {
              popup: 'animate__animated animate__backOutDown'
            }
          });
        }

        // 不修改
        function unmodified() {
          Swal.fire({
            icon: 'warning',
            title: '提醒',
            text: '你沒有修改東西唷',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            showClass: {
              popup: 'animate__animated animate__bounceInDown'
            },
            hideClass: {
              popup: 'animate__animated animate__backOutDown'
            }
          })
        }


        // 開始判定傳送資料

        // 判定没有修改任何内容
        if (!isFormChange && !isImageChange) {
          unmodified();
          return; // 結束
        }


        // 如果只修改表單
        if (isFormChange && !isImageChange) {
          changeReady().then((result) => {

            if (result.isConfirmed) {
              // 只修改表單
              if (isFormChange && !isImageChange) {
                console.log("只修改表單");
                $.ajax({
                  url: './php/a_update.php',
                  type: 'POST',
                  data: upeate,
                  dataType: 'json'
                }).done(function(data) {
                  // 成功
                  if (data.success) {
                    UpSuccess()
                  }
                })
              } else {
                // 失敗
                UpError()
              }
            }
          });
        }


        // 只修改圖片
        if (!isFormChange && isImageChange) {
          console.log("只修改圖片");
          $.ajax({
            url: './php/img_update.php',
            type: 'POST',
            data: {
              // 如果圖片未修改  給原本的圖片名
              img_name: fileName !== '' ? fileName : original_img_name,
              img_data: imgBase64,
              fk_attraction_id: attractionId,
              original_img_name: original_img_name
            },
            dataType: 'json'
          }).done(function(data) {
            if (data.success) {
              UpSuccess()
            } else {
              // 更新失敗
              UpError()
            }
          });
        }



        // 同時修改表單和圖片
        if (isFormChange && isImageChange) {
          console.log("都修改");
          // 先傳送表單ajax
          $.ajax({
            url: './php/a_update.php',
            type: 'POST',
            data: upeate,
            dataType: 'json'
          }).done(function(data) {
            // 表單傳送成功後再傳送圖片修改的 AJAX
            $.ajax({
              url: './php/img_update.php',
              type: 'POST',
              data: {
                img_name: fileName,
                img_data: imgBase64,
                fk_attraction_id: attractionId,
                original_img_name: original_img_name
              },
              dataType: 'json'
            }).done(function(data) {
              if (data.success) {
                UpSuccess()
              } else {
                // 更新失敗
                UpError()
              }
            });
          });
        }
      })

      // 全拆版 到此全註解



      // 未拆版--------------------------------------------------------------------------------
      // // 把資料送出
      // $('#sumbitBtn').on('click', function() {
      //   console.log("原始值");
      //   console.log(attractionId);
      //   console.log(originalAttractionName)
      //   console.log(originalTitle)
      //   console.log(originalArea)
      //   console.log(originalAddress)
      //   console.log(originalOpenTime)
      //   console.log(originalClosedTime)
      //   console.log(originalPhone)
      //   console.log(originalDescription)
      //   console.log(originalTraffic)
      //   console.log(original_img_name);

      //   // console.log(offDayValues);
      //   // console.log(Number($('#areaSelect').val()), $("#areaSelect"))

      //   // const attractionName = $('#attractionName').val(); //景點名 
      //   // // console.log(attractionName);
      //   // const areaId = Number($('#areaSelect').val()); //地區
      //   // // console.log(('#areaSelect').val());
      //   // const address = $('#address').val(); //地址
      //   // // console.log($('#address').val());
      //   // const phone = $('#phone').val(); //電話
      //   // // console.log(phone);
      //   // const offDay = offDayValues; //公休日
      //   // // console.log(offDay);
      //   // const titleEditor = $('#titleEditor').summernote('code');
      //   // // console.log(titleEditor);
      //   // const descriptionEditor = $('#descriptionEditor').summernote('code');
      //   // // console.log(descriptionEditor);
      //   // const trafficEditor = $('#trafficEditor').summernote('code');
      //   // console.log(trafficEditor);

      //   // 定義表單上傳資料

      //   const upeate = {
      //     attraction_id: attractionId,
      //     attraction_name: $('#attractionName').val(),
      //     title: $('#titleEditor').summernote('code'),
      //     fk_area_id: Number($('#areaSelect').val()),
      //     address: $('#address').val(),
      //     off_day: offDayValues.toString(),
      //     open_time: ($('#openTimeVal').val()),
      //     closed_time: ($('#closedTimeVal').val()),
      //     phone: ($('#phone').val()),
      //     description: $('#descriptionEditor').summernote('code'),
      //     traffic: $('#trafficEditor').summernote('code'),
      //   }

      //   console.log("改變");
      //   console.log(attractionId);
      //   console.log($('#attractionName').val());
      //   console.log($('#titleEditor').summernote('code'));
      //   console.log(Number($('#areaSelect').val()));
      //   console.log($('#address').val());
      //   console.log(offDayValues.toString());
      //   console.log($('#openTimeVal').val());
      //   console.log(($('#closedTimeVal').val()));
      //   console.log($('#phone').val());
      //   console.log($('#descriptionEditor').summernote('code'));
      //   console.log($('#trafficEditor').summernote('code'));
      //   console.log(fileName);

      //   // 定義視窗按鈕套件
      //   const swalWithBootstrapButtons = Swal.mixin({
      //     customClass: {
      //       confirmButton: 'btn btn-success',
      //       cancelButton: 'btn btn-danger'
      //     },
      //     buttonsStyling: false
      //   })

      //   // 定義一個變數判斷是否修改表單
      //   let isFormChange = (
      //     $('#attractionName').val() !== originalAttractionName ||
      //     $('#titleEditor').summernote('code') !== originalTitle ||
      //     // Number($('#areaSelect').val()) !== originalArea ||
      //     $('#address').val() !== originalAddress ||
      //     $('#openTimeVal').val() !== originalOpenTime ||
      //     $('#closedTimeVal').val() !== originalClosedTime ||
      //     $('#phone').val() !== originalPhone ||
      //     $('#descriptionEditor').summernote('code') !== originalDescription ||
      //     $('#trafficEditor').summernote('code') !== originalTraffic
      //   );

      //   // 定義一個變數判斷是否修改圖片
      //   let isImageChange = (fileName !== original_img_name);


      //   console.log("表單判定修改")
      //   console.log(isFormChange)
      //   console.log("圖片判定修改")
      //   console.log(isImageChange)


      //   // 判定没有修改任何内容
      //   if (!isFormChange && !isImageChange) {
      //     Swal.fire({
      //       icon: 'warning',
      //       title: '提醒',
      //       text: '你沒有修改東西唷',
      //       showConfirmButton: false,
      //       timer: 2000,
      //       timerProgressBar: true,
      //       showClass: {
      //         popup: 'animate__animated animate__bounceInDown'
      //       },
      //       hideClass: {
      //         popup: 'animate__animated animate__backOutDown'
      //       }
      //     });
      //     return; // 結束
      //   }


      //   // 定義詢問是否修改
      //   function changeReady() {
      //     swalWithBootstrapButtons.fire({
      //       title: '確定要修改嗎?',
      //       icon: 'info',
      //       showCancelButton: true,
      //       confirmButtonText: '是的，我想修改!',
      //       cancelButtonText: '不，我再確認一下!',
      //       reverseButtons: true
      //     })
      //   }

      //   // 定義修改成功的動畫
      //   // function swalSuccessOrError() {
      //   //   if (data.success) {
      //   //     swalWithBootstrapButtons.fire(
      //   //       '修改成功！',
      //   //       '即將為您跳轉回管理景點頁面',
      //   //       'success'
      //   //     ).then((result) => {
      //   //       window.onbeforeunload = null;
      //   //       window.setTimeout(function() {
      //   //         window.location.href = 'attractionBoard.php';
      //   //       }, 200);
      //   //     });
      //   //   } else {
      //   //     // 更新失敗
      //   //     Swal.fire({
      //   //       icon: 'error',
      //   //       title: '修改失敗',
      //   //       text: '請稍後再試',
      //   //       showConfirmButton: false,
      //   //       timer: 2000,
      //   //       timerProgressBar: true,
      //   //       showClass: {
      //   //         popup: 'animate__animated animate__bounceInDown'
      //   //       },
      //   //       hideClass: {
      //   //         popup: 'animate__animated animate__backOutDown'
      //   //       }
      //   //     });
      //   //   }
      //   // }

      //   // 開始判定傳送資料
      //   // 如果修改了表單和圖片都修改
      //   if (isFormChange || isImageChange) {
      //     // 觸發按鈕
      //     swalWithBootstrapButtons.fire({
      //       title: '確定要修改嗎?',
      //       icon: 'info',
      //       showCancelButton: true,
      //       confirmButtonText: '是的，我想修改!',
      //       cancelButtonText: '不，我再確認一下!',
      //       reverseButtons: true
      //     }).then((result) => {
      //       if (result.isConfirmed) {
      //         // 只修改表單
      //         if (isFormChange && !isImageChange) {
      //           console.log("只修改表單");
      //           $.ajax({
      //             url: './php/a_update.php',
      //             type: 'POST',
      //             data: upeate,
      //             dataType: 'json'
      //           }).done(function(data) {
      //             // 表單傳送成功後再傳送圖片的 AJAX
      //             $.ajax({
      //               url: './php/img_update.php',
      //               type: 'POST',
      //               data: {
      //                 img_name: fileName,
      //                 img_data: imgBase64,
      //                 fk_attraction_id: attractionId,
      //                 original_img_name: original_img_name
      //               },
      //               dataType: 'json'
      //             })
      //           }).done(function(data) {
      //             if (data.success) {
      //               swalWithBootstrapButtons.fire(
      //                 '修改成功！',
      //                 '即將為您跳轉回管理景點頁面',
      //                 'success'
      //               ).then((result) => {
      //                 window.onbeforeunload = null;
      //                 window.setTimeout(function() {
      //                   window.location.href = 'attractionBoard.php';
      //                 }, 200);
      //               });
      //             } else {
      //               // 更新失敗
      //               Swal.fire({
      //                 icon: 'error',
      //                 title: '修改失敗',
      //                 text: '請稍後再試',
      //                 showConfirmButton: false,
      //                 timer: 2000,
      //                 timerProgressBar: true,
      //                 showClass: {
      //                   popup: 'animate__animated animate__bounceInDown'
      //                 },
      //                 hideClass: {
      //                   popup: 'animate__animated animate__backOutDown'
      //                 }
      //               });
      //             }
      //           });
      //         }
      //         // 只修改圖片
      //         else if (!isFormChange && isImageChange) {
      //           console.log("只修改圖片");
      //           // 再傳送圖片修改的 AJAX
      //           $.ajax({
      //             url: './php/img_update.php',
      //             type: 'POST',
      //             data: {
      //               img_name: fileName,
      //               img_data: imgBase64,
      //               fk_attraction_id: attractionId,
      //               original_img_name: original_img_name
      //             },
      //             dataType: 'json'
      //           }).done(function(data) {
      //             if (data.success) {
      //               swalWithBootstrapButtons.fire(
      //                 '修改成功！',
      //                 '即將為您跳轉回管理景點頁面',
      //                 'success'
      //               ).then((result) => {
      //                 window.onbeforeunload = null;
      //                 window.setTimeout(function() {
      //                   window.location.href = 'attractionBoard.php';
      //                 }, 200);
      //               });
      //             } else {
      //               // 更新失敗
      //               Swal.fire({
      //                 icon: 'error',
      //                 title: '修改失敗',
      //                 text: '請稍後再試',
      //                 showConfirmButton: false,
      //                 timer: 2000,
      //                 timerProgressBar: true,
      //                 showClass: {
      //                   popup: 'animate__animated animate__bounceInDown'
      //                 },
      //                 hideClass: {
      //                   popup: 'animate__animated animate__backOutDown'
      //                 }
      //               });
      //             }
      //           });
      //         }
      //         // 同時修改表單和圖片
      //         else {
      //           console.log("都修改");
      //           // 先傳送表單ajax
      //           $.ajax({
      //             url: './php/a_update.php',
      //             type: 'POST',
      //             data: upeate,
      //             dataType: 'json'
      //           }).done(function(data) {
      //             // 表單傳送成功後再傳送圖片修改的 AJAX
      //             $.ajax({
      //               url: './php/img_update.php',
      //               type: 'POST',
      //               data: {
      //                 img_name: fileName,
      //                 img_data: imgBase64,
      //                 fk_attraction_id: attractionId,
      //                 original_img_name: original_img_name
      //               },
      //               dataType: 'json'
      //             }).done(function(data) {
      //               if (data.success) {
      //                 swalWithBootstrapButtons.fire(
      //                   '修改成功！',
      //                   '即將為您跳轉回管理景點頁面',
      //                   'success'
      //                 ).then((result) => {
      //                   window.onbeforeunload = null;
      //                   window.setTimeout(function() {
      //                     window.location.href = 'attractionBoard.php';
      //                   }, 200);
      //                 });
      //               } else {
      //                 // 更新失敗
      //                 Swal.fire({
      //                   icon: 'error',
      //                   title: '修改失敗',
      //                   text: '請稍後再試',
      //                   showConfirmButton: false,
      //                   timer: 2000,
      //                   timerProgressBar: true,
      //                   showClass: {
      //                     popup: 'animate__animated animate__bounceInDown'
      //                   },
      //                   hideClass: {
      //                     popup: 'animate__animated animate__backOutDown'
      //                   }
      //                 });
      //               }
      //             });
      //           });
      //         }
      //       }
      //     });
      //   }








    })
    // })
  </script>
</body>

</html>