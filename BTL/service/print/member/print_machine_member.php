<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['username_member']) && !isset($_SESSION['name_member'])) {
    header("location: http://localhost/BTL/login/member/login_member.php"); // Chuyển hướng về trang đăng nhập nếu chưa đăng nhập
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous">
    <link rel="stylesheet" href="print_machine_member.css" >
    <link rel="shortcut icon" type="Images/png" href="http://localhost/BTL/image/hcmut.png" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Trang chủ</title>
  </head>
  <body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <div class="container">
        <img id="logo" src="http://localhost/BTL/image/hcmut.png" alt="">
        <a href="http://localhost/BTL/login/admin/menu_admin.php" class="navbar-brand">Dịch vụ sinh viên</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapsibleNavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar" style="padding-left: 4%;">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="http://localhost/BTL/login/member/menu_member.php" class="nav-link">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">In ấn</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Hỗ trợ</a>
              </li>
            <li class="nav-item">
              <a href="http://localhost/BTL/login/logout.php" class="nav-link">Đăng xuất</a>
            </li>
          </ul>
        </div>
        <form class="d-flex">
          <?php
            //hiển thị tên người dùng
            echo "<font color='WHITE'> " .$_SESSION['name_member']. "</font>";
          ?>
        </form>
      </div>
    </nav>
    <!-- End Navbar -->

    <section class="bg-light text-dark">
      <div class="container">
        <div class="row">
          <!-- Start List Group Sidebar -->
          <div class="col-xl-2 col-lg-2">
            <div class="row">
              <div class="col-lg-12 col-md-6">
                <!-- Item 1: Category -->
                <div class="list-group">
                  <button
                    type="button"
                    class="list-group-item list-group-item-dark"
                    aria-current="true"
                  >
                    Dịch vụ
                  </button>
                  <button
                    type="button"
                    class="list-group-item list-group-item-action"
                  >
                  <a href="http://localhost/BTL/login/admin/menu_member.php" class="nav-link">Trang chủ</a>
                  </button>
                  <button
                    type="button"
                    class="list-group-item list-group-item-action"
                  >
                  <a href="http://localhost/BTL/service/print/member/print_member.php" class="nav-link">Đăng ký lịch in</a>
                  </button>
                  <button
                    type="button"
                    class="list-group-item list-group-item-action"
                  >
                    <a href="http://localhost/BTL/service/print/admin/print_member.php" class="nav-link">Máy in</a>
                  </button>
                  <button
                    type="button"
                    class="list-group-item list-group-item-action"
                  >
                    <a href="#" class="nav-link">Xem lịch sử</a>
                  </button>
                  <button
                    type="button"
                    class="list-group-item list-group-item-action"
                  >
                  <a href="#" class="nav-link">Mua trang in</a>
                  </button>
                  <button
                    type="button"
                    class="list-group-item list-group-item-action"
                  >
                  <a href="#" class="nav-link">Xem điểm in</a>
                  </button>
                  <button
                    type="button"
                    class="list-group-item list-group-item-action"
                  >
                  <a href="#" class="nav-link">Thông tin dịch vụ</a>
                  </button>
                </div>
              </div>
              <div
                class="col-lg-12 left-column justify-content-center hide-on-mobile"
                style="height: 500px"
              ></div>
            </div>
          </div>
          <!-- End List Group Sidebar -->

          <!-- Start Main Content -->
          <div class="col-xl-8 col-lg-10" >
            <div class="container mt-2">
                <!-- Breadcrumb -->
                <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="http://localhost/BTL/login/member/menu_member.php">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="http://localhost/BTL/service/print/member/print_member.php">Máy in</a></li>
                    </ol>
                </nav>
                <!-- Product -->
                <div class="print_machine">
                  <table id="print_machine_table" class="table table-striped">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Tên thiết bị</th>
                              <th>Cơ sở</th>
                              <th>Tòa</th>
                              <th>Ngày sử dụng</th>
                              <th>Trạng thái</th>
                          </tr>
                      </thead>
                      <tbody>
                          
                      </tbody>
                  </table>
                </div>
            </div>    
          </div>
          <!-- End Main Content -->

          <div class="hide-on-mobile col-xl-2">
            <div class="row row-above">
              <div class="col-lg-12" style="height: 600px;">
                <div class="add-to">
                    <img src="http://localhost/BTL/image/hcmut.png" alt="" >
                    <a href="https://mybk.hcmut.edu.vn/my/index.action">My Bach Khoa</a>
                 
                </div>
                <div class="add-to">
                    <img src="http://localhost/BTL/image/hcmut.png" alt="">
                    <a href="https://mybk.hcmut.edu.vn/app/">MyBK App</a>
                </div>
                <div class="add-to">
                    <img src="http://localhost/BTL/image/mybk_pay.jpg" alt="">
                    <a href="https://bkpay.hcmut.edu.vn/bkpay/home.action">MyBKPay</a>
                </div>
              </div>
            </div>
            <div class="row" style="border-top: 2px solid;">
              <div class="col-lg-12" style="height: 50px"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="p-3 bg-dark text-white text-center position-relative">
      <div class="container">
        <p class="lead">Trang chủ</p>
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Thông tin dịch vụ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mybk.hcmut.edu.vn/my/index.action">MyBK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/BTL/login/logout.php">Đăng xuất</a>
          </li>
        </ul>
      </div>
    </footer>
    <!-- End Footer -->

    <script>
        $(document).ready(function() {
                    
              $.ajax({
                  url: 'print_data.php',
                  method: 'GET',
                  dataType: 'json',
                  success: function(data) {
                      var tableBody = $('#print_machine_table tbody');

                      data.forEach(function(print_smart) {
                          var row = '<tr>' +
                              '<td>' + print_smart.id + '</td>' +
                              '<td>' + print_smart.name + '</td>' +
                              '<td>' + print_smart.co_so + '</td>' +
                              '<td>' + print_smart.toa + '</td>' +
                              '<td>' + print_smart.date + '</td>' +
                              '<td>' + print_smart.state + '</td>' +
                              '</tr>';

                          tableBody.append(row);
                      });
                  },
                  error: function(error) {
                      console.log(error);
                  }
              });
          });
          
  </script>
  </body>
</html>