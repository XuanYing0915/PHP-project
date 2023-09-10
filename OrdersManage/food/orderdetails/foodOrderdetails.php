<?php
session_start();
?>
<?php
require_once('../../shares/connection.php');
require_once('../Order_CRUD_Main_Class_Dao.php');

$orderDao = new OrderDao();
$orderID = "-1";
if (isset($_GET['order_id'])) {
    $orderID = $_GET['order_id'];
}
$row_detail = $orderDao->detailsByOrder($orderID);
$row_order = $orderDao->findById($orderID);
?>


<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>票券訂單明細</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
    <!-- jsGrid -->
    <link rel="stylesheet" href="../../../plugins/jsgrid/jsgrid.min.css">
    <link rel="stylesheet" href="../../../plugins/jsgrid/jsgrid-theme.min.css">
    <link rel="stylesheet" href="../../../plugins/bootstrap/css/bootstrap.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item ">
                    <a href="../../OrderManage.html" class="nav-link " role="button" data-widget="backhome">
                        <i class="fas fa-house-user"></i>
                    </a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
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
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <!-- <span class="badge badge-danger navbar-badge">3</span> -->
                    </a>
                   
                    <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <!-- <span class="badge badge-warning navbar-badge">15</span> -->
                    </a>
                    
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../OrderManage.html" class="brand-link text-decoration-none">
                <img src="../../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light ">後端管理平台</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../images/Toya.JPG" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-decoration-none">稚微微</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-edit"></i>

                                <p>
                                    訂單管理
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../food/foodOrders.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>食品訂單</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="../orders/ticketOrders.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>票券訂單</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../hotel/hotelOrders.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>住宿訂單</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>

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
                            <h1 class="text-bold">票券訂單 >> 訂單明細</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                                <li class="breadcrumb-item "><a href="../../OrderManage.html">訂單管理</a></li>
                                <li class="breadcrumb-item"><a href="../orders/ticketOrders.php">票券訂單</a></li>
                                <li class="breadcrumb-item active">票券訂單明細</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="card">

                    <!-- ./card-body -->
                    <div class="card-body">

                        <!-- 訂單明細 -->
                        <div>
                            <div class="d-flex justify-content-between pb-2">
                                <p for="" class="ml-1 font-weight-bolder">訂單<span id="orderID_get"><?php echo "$orderID"; ?></span></p>
                                <button class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#detailModal" id="insertBtn">新增明細</button>
                            </div>
                            <table class="table table-bordered table-striped" id="ticketOrderdetails">

                                <thead class="table-warning">
                                    <tr>
                                        <th class="col-2 align-middle ">訂單明細編號</th>
                                        <th class="col-2 align-middle">產品ID</th>
                                        <th class="col-1 align-middle">數量</th>
                                        <th class="col-2 align-middle">產品金額</th>
                                        <th class="col-2 align-middle">產品小計</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($row_detail as $detail) {
                                    ?>
                                        <tr>
                                            <td class='align-middle'><?php echo $detail[1]; ?></td>
                                            <td class='align-middle'><?php echo $detail[2]; ?></td>
                                            <td class='align-middle'><?php echo $detail[3]; ?></td>
                                            <td class='align-middle'><?php if (isset($_POST['product_id'])) {
                                                                            // $productID = $_POST['product_id'];
                                                                            // switch ($productID) {
                                                                            //     case 30001:
                                                                            //         echo 40;
                                                                            //         break;
                                                                            //     case 30002:
                                                                            //         echo 40;
                                                                            //         break;
                                                                            //     default:
                                                                            //         echo 0;
                                                                            //         break;
                                                                            // }
                                                                        } else {
                                                                            echo $detail[4];
                                                                        } ?></td>
                                            <td class='align-middle'><?php echo $detail[4] * $detail[3]; ?></td>


                                            <td class=' flex-wrap'>
                                                <button class='btn btn-warning m-1' data-bs-toggle="modal" data-bs-target="#detailModal" <?php echo $detail[1]; ?>>編輯</button>
                                                <button class='btn btn-danger m-1'>刪除</button>
                                            </td>
                                        </tr>
                                    <?php
                                    }

                                    ?>
                                </tbody>
                            </table>
                            <?php
                            foreach ($row_order as $row) {
                            ?>
                                <div class="d-flex align-items-end flex-column me-2 pb-4">

                                    <ul class="list-unstyled">
                                        <li>商品總價 &nbsp;<span><?php echo $row[10]; ?></span></li>
                                        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;運費 &nbsp;<span><?php echo $row[9]; ?></span></li>
                                        <li class="fw-bold text-decoration-underline">訂單總價 &nbsp;<span><?php echo $row[11]; ?></span></li>

                                    </ul>


                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <!-- 訂單明細新增or編輯 -->
                        <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">


                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5">訂單明細</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- 訂單明細表格 -->
                                        <form id="detailForm">
                                            <div class="mb-3">

                                                <label for="orderID" class="col-form-label">訂單編號</label>
                                                <input type="text" class="form-control" name="tk_order_id" id="orderID_1" readonly>
                                            </div>
                                            <div class="mb-3">

                                                <label for="detailID" class="col-form-label">訂單明細編號</label>
                                                <input type="text" class="form-control" name="tk_orderdetails_id" id="detailID" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="product" class="col-form-label">產品</label>
                                                <select name="product_id" id="product" class="form-select">
                                                    <option value="30001">壽山動物園門票 -成人</option>
                                                    <option value="30002">壽山動物園門票 -兒童 </option>
                                                    <option value="30003">義大世界入園券-全日票</option>
                                                    <option value="30004">義大世界入園券-午後票</option>
                                                    <option value="30005">高雄鈴鹿賽道樂園單人暢遊券</option>
                                                    <option value="30006">高雄迷你鈴鹿賽道Birel N35單人卡丁賽車券</option>
                                                    <option value="30007">高雄鈴鹿賽道樂園單人星光暢遊票</option>
                                                    <option value="30008">奧斯丁夢想樂園高雄草衙店 - 一大一小，平日不限時／假日三小時＋200 元主餐一份 </option>
                                                    <option value="30009">奧斯丁夢想樂園高雄草衙店 - 一大一小平日假日兩小時＋200 元代幣</option>
                                                    <option value="30010">奧斯丁夢想樂園高雄草衙店 - 一大一小平日不限時／假日三小時 </option>
                                                    <option value="30011">奧斯丁夢想樂園高雄草衙店 - 一大一小平日不限時／假日三小時＋下午茶套餐 </option>
                                                    <option value="30012">高雄科工館展示廳入場券 </option>
                                                    <option value="30013">高雄國立科學工藝博物館熱雪天堂探索樂園優惠套票（兒童130cm以下，可一位大人免費陪同，即買即用） </option>
                                                    <option value="30014">高雄科工館大銀幕電影院 </option>
                                                    <option value="30015">打狗英國領事館｜門票｜全票 </option>
                                                    <option value="30016">全票 </option>
                                                    <option value="30017">半票 </option>
                                                    <option value="30018">平日入場門票-單人票 </option>
                                                    <option value="30019">平日入場門票-四人套票 </option>
                                                    <option value="30020">假日入場門票-單人票 </option>
                                                    <option value="30021">假日入場門票-四人套票 </option>
                                                    <option value="30022">全票 </option>
                                                    <option value="30023">團體票 </option>
                                                    <option value="30024">磨穀樂DIY </option>
                                                    <option value="30025">雙人DIY體驗套票（含入場門票）</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="age" class="col-form-label">產品數量</label>
                                                <input type="text" class="form-control" name="product_quantity" id="amount">
                                            </div>
                                            <div class="mb-3">
                                                <label for="age" class="col-form-label">產品金額</label>
                                                <input type="text" class="form-control" name="product_price" id="price">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                                        <button id="buttonUpdate" type="button" class="btn btn-primary">新增</button>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <!-- 訂單資訊 -->
                        <div>
                        <?php
                    foreach ($row_order as $row) {
                    ?>
                            <div class="ms-1 mb-2  border-top border-1 pt-4">
                                <button class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#orderModal" id="editOrder">編輯訂單</button>
                            </div>
                            <div class="row d-flex " id="orderInfo">
                                <div class="col-12 col-md-6">
                                    <div class="bg-gray-light p-2 mb-2">
                                        <label for="" class="col-3">訂單編號</label>
                                        <span><?php echo $row[0]; ?></span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="bg-gray-light p-2 mb-2">
                                        <label for="" class="col-3">下訂時間</label>
                                        <span><?php echo $row[3]; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="bg-gray-light p-2 mb-2">
                                        <label for="" class="col-3">會員編號</label>
                                        <span><?php echo $row[1]; ?></span>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="bg-gray-light p-2 mb-2">
                                        <label for="" class="col-3">訂單狀態</label>
                                        <span><?php echo $row[13]; ?></span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="bg-gray-light p-2 mb-2">
                                        <label for="" class="col-3">付款方式</label>
                                        <span><?php echo $row[4]; ?></span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="bg-gray-light p-2 mb-5">
                                        <label for="" class="col-3">付款狀態</label>
                                        <span class=""><?php echo $row[12]; ?></span>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="bg-gray-light p-2 mb-2">
                                        <label for="" class="col-3">負責員工</label>
                                        <span><?php echo $row[2]; ?></span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">

                                </div>
                                <div class="col-12 col-md-6 ">
                                    <div class="bg-gray-light p-2 mb-4">
                                        <label for="" class="col-3">收貨人姓名</label>
                                        <span><?php echo $row[5]; ?></span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="bg-gray-light p-2 mb-2">
                                        <label for="" class="col-3">連絡電話</label>
                                        <span><?php echo $row[6]; ?></span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="bg-gray-light p-2 mb-2">
                                        <label for="" class="col-3">運送方式</label>
                                        <span><?php echo $row[7]; ?></span>
                                    </div>
                                </div>


                                <div class="col-12 col-md-6">
                                    <div class="bg-gray-light p-2 mb-2">
                                        <label for="" class="col-3">運送地址</label>
                                        <span class=""><?php echo $row[8]; ?></span>
                                    </div>
                                </div>


                                <div class="col-12 col-md-6">
                                    <div class="bg-gray-light p-2 mb-2">
                                        <label for="" class="col-3">商品總價</label>
                                        <span><?php echo $row[10]; ?></span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="bg-gray-light p-2 mb-2">
                                        <label for="" class="col-3">運費</label>
                                        <span><?php echo $row[9]; ?></span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="bg-gray-light p-2 mb-2">
                                        <label for="" class=" col-3">總計費用</label>
                                        <span><?php echo $row[11]; ?></span>
                                    </div>
                                </div>
                                <?php
                    }
                        ?>
                            </div>
                        

                    </div>

                        <!-- 訂單編輯 -->
                        <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5">訂單編輯</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="orderForm">
                                            <div class="mb-3">

                                                <label for="orderID_2" class="col-form-label">訂單編號</label>
                                                <input type="text" class="form-control" name="tk_order_id" id="orderID_2" readonly ">
                                            </div>

                                            <div class="mb-3">
                                                <label for="memberID" class="col-form-label">會員編號</label>
                                                <input type="text" class="form-control" name="member_id" id="memberID" readonly value="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="orderStatus" class="col-form-label">訂單狀態</label>
                                                <select name="order_status" id="orderStatus" class="form-select">
                                                    <option>已成立</option>
                                                    <option>已寄出</option>
                                                    <option>已完成</option>
                                                    <option>已取消</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="payment" class="col-form-label">付款方式</label>
                                                <select name="payment" id="payment" class="form-select">
                                                    <option>信用卡線上付款</option>
                                                    <option>ATM虛擬帳號</option>
                                                    <option>超商代碼</option>
                                                </select>

                                            </div>
                                            <div class="mb-3">
                                                <label for="paymentStatus" class="col-form-label">付款狀態</label>
                                                <select name="payment_status" id="paymentStatus" class="form-select">
                                                    <option>尚未付款</option>
                                                    <option>已付款</option>
                                                    <option>已過付款期限</option>
                                                </select>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="mb-3">
                                                <label for="staffID" class="col-form-label">負責員工編號</label>
                                                <input type="text" class="form-control" name="staff_id" id="staffID" value="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="receiver" class="col-form-label">收貨人姓名</label>
                                                <input type="text" class="form-control" name="receiver_name" id="receiver" value="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="phone" class="col-form-label">連絡電話</label>
                                                <input type="text" class="form-control" name="receiver_phone" id="phone" value="">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="mb-3">
                                                <label for="shipping" class="col-form-label">運送方式</label>
                                                <select name="shipping_method" id="shipping" class="form-select">
                                                    <option>寄送到家</option>
                                                    <option>無實體商品</option>
                                                    <option>超商取貨</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="address" class="col-form-label">運送地址</label>
                                                <input type="text" class="form-control" name="shipping_address" id="address" value="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="orderTotal" class="col-form-label">商品總價</label>
                                                <input type="text" class="form-control" name="order_total" id="orderTotal" value="" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="fee" class="col-form-label">運費</label>
                                                <input type="text" class="form-control" name="shipping_fee" id="fee" value="">
                                            </div>
                                            <!-- <div class="mb-3">
                                                <label for="phone" class="col-form-label">總計費用</label>
                                                <input type="text" class="form-control" name="receiver_phone" id="phone" value="">
                                            </div> -->
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                                        <button id="buttonUpdateOrder" type="button" class="btn btn-primary">編輯</button>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.card-body -->
            </section>
            <div class="d-flex justify-content-center pt-3 pb-5">
            <a href="../orders/ticketOrders.php" class="fs-5 link-black text-decoration-none">回到上頁</a>
        </div>
        </div>
        <!-- /.card -->
        
        
        
        <!-- /.content -->

    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->






    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="../../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jsGrid -->
    <script src="../../../plugins/jsgrid/demos/db.js"></script>
    <script src="../../../plugins/jsgrid/jsgrid.min.js"></script>
    <!-- jQuery Mapael -->
    <script src="../../../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="../../../plugins/raphael/raphael.min.js"></script>
    <script src="../../../plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="../../../plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="../../../plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../../dist/js/pages/dashboard2.js"></script>
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Page specific script -->
    <script>
        $(function() {
            function reload() {
                location.reload();
            }
            //編輯明細資料
            $('#ticketOrderdetails>tbody').on('click', 'button:nth-child(1)', function() {
                //讀出Table中要修改的資料
                const row = ($(this).parents('tr'));
                const orderID = $('#orderID_get').text();
                
                const detailID = row.children('td:nth-child(1)').text();
                const product = row.children('td:nth-child(2)').text();
                const amount = row.children('td:nth-child(3)').text();
                const price = row.children('td:nth-child(4)').text();

                //把修改的資料帶入到Modal中
                $('#orderID_1').val(orderID);
                $('#detailID').val(detailID);
                $('#product').val(product);
                $('#amount').val(amount);
                $('#price').val(price);
            })


            //新增明細資料
            $('#insertBtn').on('click', function() {
                const orderID = $('#orderID_get').text();
                $('#orderID_1').val(orderID);
                $('#detailID').val('');
                $('#product').val('');
                $('#amount').val('');
                $('#price').val('');
            })

            $('#buttonUpdate').on('click', function() {
                console.log($('#detailForm').serializeArray());
                let idx = $('#detailID').val();
                // console.log(idx);
                if (idx === "") {
                    //將資料存進資料庫中
                    $.ajax({
                        url: 'DetailInsertApi.php', //將資料傳給這支PHP的程式
                        type: 'POST', //透過POST的方法傳送資料
                        // data:user,   //傳送到Server端的資料
                        data: $('#detailForm').serializeArray(),

                        dataType: 'json' //Server回傳的結果為JSON格式
                    }).done(function(data) {

                        //data 就是Server回傳的結果
                        // {"success":true,"errorMessage":"","postData":[]}
                        if (data.success) {
                            setTimeout(function() {
                                Swal.fire('新增成功');
                            }, 100);
                            setTimeout(reload, 2500);
                        } else {
                            alert(data.errorMessage);
                        }
                    })
                } else {
                    $.ajax({
                        url: 'DetailUpdateApi.php', //將資料傳給這支PHP的程式
                        type: 'POST', //透過POST的方法傳送資料
                        // data:user,   //傳送到Server端的資料
                        data: $('#detailForm').serializeArray(),

                        dataType: 'json' //Server回傳的結果為JSON格式
                    }).done(function(data) {

                        //data 就是Server回傳的結果
                        // {"success":true,"errorMessage":"","postData":[]}
                        if (data.success) {

                            setTimeout(function() {
                                Swal.fire('修改成功');
                            }, 100);
                            setTimeout(reload, 2500);

                            // location.reload();
                        } else {
                            alert(data.errorMessage);
                        }
                    })

                }

                //隱藏Modal
                $('#detailModal').modal('hide');
                $('input').val("");

            })

            //明細增改Modal顯示
            $('#detailModal').on('shown.bs.modal', function() {
                let idx = $('#detailID').val();

                if (idx === "") {
                    $('#buttonUpdate').text("新增");
                    $('#detailModalLabel').text("訂單明細新增");
                } else {
                    $('#buttonUpdate').text("修改")
                    $('#detailModalLabel').text("訂單明細修改");
                }

            })
            //刪除明細
            $('#ticketOrderdetails>tbody').on('click', 'button:nth-child(2)', function() {

                Swal.fire({
                    title: '真的要刪除嗎?',
                    showDenyButton: true,
                    confirmButtonText: '確定',
                    denyButtonText: `取消`,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        const detailID = $(this).parents('tr').children('td:nth-child(1)').text();

                        $.ajax({
                            url: 'DetailDeleteApi.php',
                            type: 'GET',
                            data: {
                                "detailID": detailID
                            },
                            dataType: 'json'
                        }).done(function(data) {
                            if (data.success) {
                                // alert("刪除成功");
                                setTimeout(function() {
                                    Swal.fire('刪除成功');
                                }, 100);
                                setTimeout(reload, 2500);
                            } else {
                                alert("刪除失敗");
                            }
                        })
                    }
                })

            })

            //編輯資料
            $('#editOrder').on('click', function() {
                const orderID = $('#orderID_get').text();
                const memberID = $('#orderInfo').children('div:nth-child(3)').children().children('span').text();
                const orderStatus = $('#orderInfo').children('div:nth-child(4)').children().children('span').text();
                const payment = $('#orderInfo').children('div:nth-child(5)').children().children('span').text();
                const paymentStatus = $('#orderInfo').children('div:nth-child(6)').children().children('span').text();
                const staffID = $('#orderInfo').children('div:nth-child(7)').children().children('span').text();
                const receiver = $('#orderInfo').children('div:nth-child(9)').children().children('span').text();
                const phone = $('#orderInfo').children('div:nth-child(10)').children().children('span').text();
                const shipping = $('#orderInfo').children('div:nth-child(11)').children().children('span').text();
                const address = $('#orderInfo').children('div:nth-child(12)').children().children('span').text();
                const orderTotal = $('#orderInfo').children('div:nth-child(13)').children().children('span').text();
                const fee = $('#orderInfo').children('div:nth-child(14)').children().children('span').text();


                // //把修改的資料帶入到Modal中
                $('#orderID_2').val(orderID);
                $('#memberID').val(memberID);
                $('#orderStatus').val(orderStatus);
                $('#payment').val(payment);
                $('#paymentStatus').val(paymentStatus);
                $('#staffID').val(staffID);
                $('#receiver').val(receiver);
                $('#phone').val(phone);
                $('#shipping').val(shipping);
                $('#address').val(address);
                $('#orderTotal').val(orderTotal);
                $('#fee').val(fee);

            })

            $('#buttonUpdateOrder').on('click', function() {
                console.log($('#orderForm').serializeArray());
                
                    $.ajax({
                        url: '../orders/OrderUpdateApi.php', //將資料傳給這支PHP的程式
                        type: 'POST', //透過POST的方法傳送資料
                        // data:user,   //傳送到Server端的資料
                        data: $('#orderForm').serializeArray(),

                        dataType: 'json' //Server回傳的結果為JSON格式
                    }).done(function(data) {

                        //data 就是Server回傳的結果
                        // {"success":true,"errorMessage":"","postData":[]}
                        if (data.success) {

                            setTimeout(function() {
                                Swal.fire('修改成功');
                            }, 100);
                            setTimeout(reload, 2500);

                            // location.reload();
                        } else {
                            alert(data.errorMessage);
                        }
                    })

                

                //隱藏Modal
                $('#orderModal').modal('hide');
                $('input').val("");

            })
        })
    </script>
</body>

</html>

</body>

</html>