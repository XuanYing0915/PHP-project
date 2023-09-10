<?php
session_start();
?>
<?php require_once('../../shares/connection.php'); ?>
<?php require_once('../Order_CRUD_Main_Class_Dao.php'); ?>
<?php

$orderDao = new OrderDao();
$row_staff = $orderDao->allStaffs();
$row_member = $orderDao->allMembers();

$currentPage = $_SERVER["PHP_SELF"];
$maxRows = 4;    // 每頁顯示四筆記錄
$pageNum = 0;    // 將要顯示哪一頁的資料(0表示第一頁)

// 設定一個SESSION變數BookListMaxRows，內容為每頁至多顯示之記錄數，
// 其他程式需要此資料。
$_SESSION['OrderListMaxRows'] = $maxRows;

if (isset($_GET['pageNum'])) {
    $pageNum = $_GET['pageNum'];
    echo $pageNum;
}
$startRow = $pageNum * $maxRows;    // 算出將要顯示的分頁是由哪一筆開始(0表示第一筆)


// 算出總共有多少筆商品的SQL敘述，Book表格的總紀錄筆數
// 如果外界有透過GET方法傳入totalRows(表格的總紀錄筆數)
// if (isset($_GET['totalRows'])) {
//   $totalRows = $_GET['totalRows'];
// } else {
// 	// 否則到資料庫讀取『Book表格的總紀錄筆數』，
// 	// 放到變數 $totalRows內
// 	$totalRows  = count($orderDao->findAll()) ;
// }
// // 計算有幾頁(Page) 0 表示有1頁，1 表示有2頁，
// // 例如：有15筆記錄，每頁3筆, 總共5頁($totalPages的值為4)
// $totalPages = ceil($totalRows/$maxRows)-1;  // 

// $queryString_Recordset1 = "&totalRows=$totalRows";
?>

<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>票券訂單管理</title>
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

<body class="hold-transition  sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light ">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link " role="button" data-widget="backhome">
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
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#4D9BAC">
            <!-- Brand Logo -->

            <a href="../../OrderManage.html" class="brand-link text-decoration-none " style="border-bottom:1px solid #82d1ce">
                <img src="../../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light ">後端管理平台</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel my-3 pb-3 d-flex" style="border-bottom:1px solid #82d1ce">
                    <div class="image">
                        <img src="../../images/Toya.JPG" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-decoration-none">稚微微</a>
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
                                    <a href="../../food/orders/foodOrders.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>食品訂單</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="#" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>票券訂單</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../hotel/orders/hotelOrders.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>住宿訂單</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>

            </div>
        </aside>

        <!-- Main Sidebar Container -->




        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="text-bold">票券訂單</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                                <li class="breadcrumb-item "><a href="../../OrderManage.html">訂單管理</a></li>
                                <li class="breadcrumb-item active">票券訂單</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="card">

                    <div class="card-body">
                        <!-- <div class="search-path">search</div> -->
                        <div class="d-flex justify-content-end pb-2">

                            <button class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#orderModal" id="insertBtn">新增訂單</button>
                        </div>
                        <!-- 訂單一覽 -->
                        <table class="table table-bordered table-striped" id="ticketOrders">
                            <thead class="table-warning">
                                <tr>
                                    <th>訂單編號</th>
                                    <th>會員編號</th>
                                    <th>員工編號</th>
                                    <th>下訂時間</th>
                                    <th>訂單狀態</th>
                                    <th>訂單金額</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $arr2D = $orderDao->findAll(); ?>
                                <?php

                                foreach ($arr2D as $row) { ?>
                                    <tr>
                                        <td class='align-middle'><?php echo $row[0]; ?></td>
                                        <td class='align-middle'><?php echo $row[1]; ?></td>
                                        <td class='align-middle'><?php echo $row[2]; ?></td>
                                        <td class='align-middle'><?php echo $row[3]; ?></td>
                                        <td class='align-middle'><?php echo $row[12]; ?></td>
                                        <td class='align-middle'><?php echo $row[10]+$row[9]; ?></td>

                                        <td class='d-flex justify-content-center flex-wrap'>

                                            <a class='btn btn-info m-1' href="../orderdetails/ticketOrderdetails.php?order_id=<?php echo $row[0]; ?>">明細</a>
                                            <button class='btn btn-danger m-1'>刪除</button>
                                        </td>
                                    </tr>
                                <?php
                                }

                                ?>

                                
                            </tbody>
                        </table>
                        <div class="mt-3">
                            <p id="orderLines"></p>

                        </div>

                        <!-- 訂單新增 -->
                        <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5">訂單新增</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="orderForm">

                                            <div class="mb-3">
                                                <label for="staffID" class="col-form-label">負責員工</label>
                                                <select class="form-select" name="staff_id" id="staffID">
                                                    <?php
                                                    foreach ($row_staff as $staff) {
                                                    ?>
                                                        <option value=<?php echo $staff[0] ?>><?php echo $staff[1] ?> </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="memberID" class="col-form-label">會員</label>
                                                <select class="form-select" name="member_id" id="memberID" value="">
                                                    
                                                    <?php
                                                    foreach ($row_member as $member) {
                                                    ?>
                                                        <option value=<?php echo $member[0] ?>><?php echo $member[0] ?>&nbsp;<?php echo $member[1] ?><?php echo $member[2] ?> </option>
                                                    <?php
                                                    }
                                                    ?>
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
                                                <label for="receiver" class="col-form-label">收貨人姓名</label>
                                                <input type="text" class="form-control" name="receiver_name" id="receiver" value="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="phone" class="col-form-label">連絡電話</label>
                                                <input type="text" class="form-control" name="receiver_phone" id="phone" value="">
                                            </div>

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
                                                <label for="fee" class="col-form-label">運費</label>
                                                <input type="text" class="form-control" name="shipping_fee" id="fee" value="">
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                                        <button id="buttonUpdateOrder" type="button" class="btn btn-primary">新增</button>
                                    </div>
                                </div>


                            </div>
                        </div>


                        <!-- <div id="ticketOrders"></div> -->
                    </div>
                    <!-- /.card-body -->

                </div>
                <!-- /.card -->
            </section>
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
                const order_rows = $('#ticketOrders>tbody>tr');
                const order_lines = order_rows.length;
                document.getElementById('orderLines').innerText=`共${order_lines}筆`;
                function reload() {
                    location.reload();
                }
                //新增訂單
                $('#buttonUpdateOrder').on('click', function() {
                    // console.log($('#orderForm').serializeArray());

                    //將資料存進資料庫中
                    $.ajax({
                        url: 'OrderInsertApi.php', //將資料傳給這支PHP的程式
                        type: 'POST', //透過POST的方法傳送資料
                        // data:user,   //傳送到Server端的資料
                        data: $('#orderForm').serializeArray(),

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
                    //隱藏Modal
                    $('#orderModal').modal('hide');
                    $('input').val("");

                })

                //刪除明細
                $('#ticketOrders>tbody').on('click', 'button:nth-child(2)', function() {

                    Swal.fire({
                        title: '真的要刪除嗎?',
                        showDenyButton: true,
                        confirmButtonText: '確定',
                        denyButtonText: `取消`
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            const orderID = $(this).parents('tr').children('td:nth-child(1)').text();
                            // console.log(orderID);

                            $.ajax({
                                url: 'OrderDeleteApi.php',
                                type: 'GET',
                                data: {
                                    "orderID": orderID
                                },
                                dataType: 'json'
                            }).done(function(data) {
                                if (data.success) {
                                    
                                    $.ajax({
                                        url: 'OrderDetailDeleteApi.php',
                                        type: 'GET',
                                        data: {
                                            "orderID": orderID
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
                                } else {
                                    alert("刪除失敗");
                                }
                            })
                        }
                    })

                })
            })
        </script>
</body>

</html>

</body>

</html>