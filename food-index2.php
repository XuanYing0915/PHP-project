<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>高雄旅遊網 | 商家管理</title>

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
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- 左側導覽列連結 -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">首頁</a>
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
              <h1 class="m-0">商家管理</h1>
            </div><!-- /.欄位 -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item active">商家管理</li>
              </ol>
            </div><!-- /.欄位 -->
          </div><!-- /.列-->
        </div><!-- /.容器（Fluid）-->
      </div>
      <!-- /.內容標頭 -->

      <!-- 主要內容 -->
      <section class="content">
        <div class="mx-4">
          <img id="img1" src="images/loading.gif" style="width:50px;display:none">
          <table id="userTable" class="table table-bordered text-center">
            <thead>
              <tr>
                <th class="align-middle">編號</th>
                <th class="align-middle">名稱</th>
                <th class="align-middle">描述</th>
                <th class="align-middle">電話</th>
                <th class="align-middle">服務</th>
                <th class="align-middle">地址</th>
                <th class="align-middle">經度</th>
                <th class="align-middle">緯度</th>
                <th class="align-middle">縮放</th>
                <th><button id="buttonAdd" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userModal">新增</button></th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>

          <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="userModalLabel">資料修改</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form id="userForm">
                    <div class="mb-3">
                      <input type="hidden" id="merchant_id" name="merchant_id">
                      <label for="name" class="col-form-label">名稱:</label>
                      <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                      <label for="description" class="col-form-label">描述:</label>
                      <input type="text" class="form-control" name="description" id="description">
                    </div>
                    <div class="mb-3">
                      <label for="phone" class="col-form-label">電話:</label>
                      <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                    <div class="mb-3">
                      <label for="facilities" class="col-form-label">服務:</label>
                      <input type="text" class="form-control" name="facilities" id="facilities">
                    </div>
                    <div class="mb-3">
                      <label for="address" class="col-form-label">地址:</label>
                      <input type="text" class="form-control" name="address" id="address">
                    </div>
                    <div class="mb-3">
                      <label for="longitude" class="col-form-label">經度:</label>
                      <input type="text" class="form-control" name="longitude" id="longitude">
                    </div>
                    <div class="mb-3">
                      <label for="latitude" class="col-form-label">緯度:</label>
                      <input type="text" class="form-control" name="latitude" id="latitude">
                    </div>
                    <div class="mb-3">
                      <label for="zoom" class="col-form-label">縮放:</label>
                      <input type="text" class="form-control" name="zoom" id="zoom">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                  <button id="buttonUpdate" type="button" class="btn btn-primary">修改</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.內容 -->
    </div>
    <!-- /.內容包裹區域 -->
    <footer class="main-footer">
      <strong>版權信息 &copy;第三組集團</strong>
      版權所有
      <div class="float-right d-none d-sm-inline-block">
        <b>版本</b> 1.0.0
      </div>
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    //$(document).ready(function(){ })
    //DOM Tree產生可以使用了
    $(function() {

      // const users = [
      //     { "name": "Tom", "email": "Tom@gmail.com", "age": 30 },
      //     { "name": "Mary", "email": "Mary@gmail.com", "age": 28 },
      //     { "name": "Jack2", "email": "Jack@gmail.com", "age": 32 },
      //     { "name": "John", "email": "John@gmail.com", "age": 25 }];

      //資料從localStorage取出來
      const users = JSON.parse(localStorage.getItem("users")) || [];


      //刪除陣列中的某一筆資料 splice("從陣列中的第幾個位置","刪除幾筆資料")
      // users.splice(1, 1); //從陣列中的第二個位置，刪除一筆資料
      //修改 splice("從陣列中的第幾個位置","刪除幾筆資料","然後在哪個位置上加入新的資料")
      //users.splice(1, 1, { "name": "??", "email": "Mary3@gmail.com", "age": 33 });
      //新增
      //users.push({ "name": "Mary3", "email": "Mary3@gmail.com", "age": 33 });

      //編輯資料
      $('#userTable>tbody').on('click', 'button:nth-child(1)', function() {
        //讀出Table中要修改的資料
        const row = ($(this).parents('tr'));
        const merchant_id = row.children('td:nth-child(1)').text();
        const name = row.children('td:nth-child(2)').text();
        const description = row.children('td:nth-child(3)').text();
        const phone = row.children('td:nth-child(4)').text();
        const facilities = row.children('td:nth-child(5)').text();
        const address = row.children('td:nth-child(6)').text();
        const longitude = row.children('td:nth-child(7)').text();
        const latitude = row.children('td:nth-child(8)').text();
        const zoom = row.children('td:nth-child(9)').text();
        //把修改的資料帶入到Modal中
        $('#merchant_id').val(merchant_id);
        $('#name').val(name);
        $('#description').val(description);
        $('#phone').val(phone);
        $('#facilities').val(facilities);
        $('#address').val(address);
        $('#longitude').val(longitude);
        $('#latitude').val(latitude);
        $('#zoom').val(zoom);
      })

      //修改或新增資料
      $('#buttonUpdate').on('click', function() {
        //根據隱藏欄位中是否有值來判斷要做新增還是修改
        let idx = $('#merchant_id').val();

        //將使用者修改的資料包裝成user物件
        // const user = {
        //     "id":$('#id').val(), 
        //     "name": $('#name').val(), 
        //     "email": $('#email').val(), 
        //     "age": $('#age').val() 
        // };

        if (idx === "") {
          //console.log("新增")
          //  users.push(user);

          //將資料存進資料庫中
          $.ajax({
            url: 'food-UserInsertApi.php', //將資料傳給這支PHP的程式
            type: 'POST', //透過POST的方法傳送資料
            // data:user,   //傳送到Server端的資料
            data: $('#userForm').serializeArray(),
            dataType: 'json' //Server回傳的結果為JSON格式
          }).done(function(data) {

            //data 就是Server回傳的結果
            // {"success":true,"errorMessage":"","postData":[]}
            if (data.success) {
              // alert("新增成功");
              Swal.fire('新增成功')
              ShowUsers();
            } else {
              alert(data.errorMessage);
            }
          })

        } else {
          //  console.log("修改")
          $.ajax({
            url: 'food-UserUpdateApi.php',
            type: 'POST',
            // data:user,
            data: $('#userForm').serializeArray(),
            dataType: 'json'
          }).done(function(data) {
            if (data.success) {
              // alert("修改成功");
              Swal.fire('修改成功')
              ShowUsers();
            } else {
              alert(data.errorMessage)
            }
          })
        }

        //更新localStorage中的資料
        // localStorage.setItem("users", JSON.stringify(users));

        //重新將JSON中的資料載入到網頁上

        //隱藏Modal
        $('#userModal').modal('hide');


      })


      //刪除資料
      $('#userTable>tbody').on('click', 'button:nth-child(2)', function() {


        Swal.fire({
          title: '真的要刪除嗎?',
          showDenyButton: true,
          confirmButtonText: '確定',
          denyButtonText: `取消`,
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
            const merchant_id = $(this).parents('tr').children('td:nth-child(1)').text();

            $.ajax({
              url: 'food-UserDeleteApi.php',
              type: 'GET',
              data: {
                "merchant_id": merchant_id
              },
              dataType: 'json'
            }).done(function(data) {
              if (data.success) {
                // alert("刪除成功");
                Swal.fire('刪除成功')
                ShowUsers();
              } else {
                alert("刪除失敗");
              }
            })
          } else if (result.isDenied) {
            // Swal.fire('Changes are not saved', '', 'info')
          }
        })


        //    if(window.confirm("真的要刪除嗎?")){
        //     const id = $(this).parents('tr').children('td:nth-child(1)').text();

        //         $.ajax({
        //             url:'UserDeleteApi.php',
        //             type:'GET',
        //             data:{"id":id},
        //             dataType:'json'
        //         }).done(function(data){
        //             if(data.success){
        //             // alert("刪除成功");
        //             Swal.fire('刪除成功')
        //                 ShowUsers();
        //             }else{
        //                 alert("刪除失敗");
        //             }
        //         })
        //    }else{
        //     return false;
        //    }



      })

      //顯示資料
      function ShowUsers() {
        //透過Ajax讀取Users資料
        $.ajax({
          url: 'food-UserSelectApi.php',
          type: 'GET',
          dataType: 'json'
        }).done(function(users) {

          const docFrag = $(document.createDocumentFragment()); //建立一個空的物件
          //user = {"name":"Jack","age":30}
          //user.name
          //user.age
          $.each(users, function(idx, user) {
            const {
              merchant_id,
              name,
              description,
              phone,
              facilities,
              address,
              longitude,
              latitude,
              zoom
            } = user;
            const data = `
                       <tr>
                            <td class="align-middle">${merchant_id}</td>
                            <td class="align-middle">${name}</td>
                            <td class="align-middle">${description}</td>
                            <td class="align-middle">${phone}</td>
                            <td class="align-middle">${facilities}</td>
                            <td class="align-middle">${address}</td>
                            <td class="align-middle">${longitude}</td>
                            <td class="align-middle">${latitude}</td>
                            <td class="align-middle">${zoom}</td>
                            <td class="align-middle"> 
                                <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#userModal">編輯</button>
                                <button class="btn btn-danger">刪除</button>
                            </td>
                        </tr>
                    `
            docFrag.append(data);
          })

          $('#userTable>tbody').html(docFrag);





        })
      }

      ShowUsers();

      //Modal隱藏
      $('#userModal').on('hide.bs.modal', function() {
        //清除所有input中的資料
        $('input').val("");
      })

      //Modal顯示
      $('#userModal').on('shown.bs.modal', function() {
        let idx = $('#merchant_id').val();
        if (idx === "") {
          $('#buttonUpdate').text("新增");
          $('#userModalLabel').text("使用者新增");
        } else {
          $('#buttonUpdate').text("修改")
          $('#userModalLabel').text("使用者修改");
        }

      })



      $(document).on({
        'ajaxStart': function() {
          $('#img1').show();
        },
        'ajaxStop': function() {
          $('#img1').hide();
        }
      })



    })
  </script>
</body>
</body>

</html>