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
    <link rel="stylesheet" href="print_member.css" >
    <link rel="shortcut icon" type="Images/png" href="http://localhost/BTL/image/hcmut.png" />
    <title>Trang chủ</title>
  </head>
  <body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <div class="container">
        <img id="logo" src="http://localhost/BTL/image/hcmut.png" alt="">
        <a href="http://localhost/BTL/login/member/menu_member.php" class="navbar-brand">Dịch vụ sinh viên</a>
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
              <a href="http://localhost/BTL/service/print/member/print_member.php" class="nav-link">In ấn</a>
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
                  <a href="http://localhost/BTL/login/member/menu_member.php" class="nav-link">Trang chủ</a>
                  </button>
                  <button
                    type="button"
                    class="list-group-item list-group-item-action"
                  >
                  <a href="#" class="nav-link">Thông tin cơ bản</a>
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
                    <a href="http://localhost/BTL/service/history/member/history_member.php" class="nav-link">Xem lịch sử in</a>
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
                  <a href="#" class="nav-link">Xem địa điểm in</a>
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
                  <li class="breadcrumb-item"><a href="http://localhost/BTL/service/print/member/print_member.php">In ấn</a></li>
                </ol>
              </nav>
              <h2>Số trang giấy hiện có:</h2>
              <form class="have-page">
                <?php
                  //hiển thị tên người dùng
                  echo "<font color='Black'> " .$_SESSION['name_member']. "</font>";
                ?>
              </form>
              <form id="loginForm" action="#" method="post">
                <button type="submit" class="payPage">Mua thêm</button>
              </form>
              <div class="min-h-screen flex items-center justify-center pt-16">
                <div class="bg-white p-10 rounded shadow-md text-center">
                <h1 class="text-2xl font-semibold mb-4">Chọn thuộc tính in</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                  <div class="mb-4">
                    <label for="size" class="block mb-2">Khổ giấy</label>
                    <select name="size" id="size" class="border w-full p-2">
                      <option value="A4">A4</option>
                      <option value="A5">A5</option>
                      <option value="A3">A3</option>
                      <option value="A2">A2</option>
                    </select>
                  </div>
                  <div class="mb-4">
                    <label for="layout" class="block mb-2">Layout</label>
                    <select name="layout" id="layout" class="border w-full p-2">
                      <option value="portrait">Dọc</option>
                      <option value="landscape">Ngang</option>
                    </select>
                  </div>
                  <div class="mb-4">
                    <label for="pages" class="block mb-2">Pages</label>
                    <select name="pages" id="pages" class="border w-full p-2">
                      <option value="all">Tất cả</option>
                      <option value="odd">Lẻ</option>
                      <option value="even">Chẵn</option>
                    </select>
                  </div>
                  <div class="mb-4">
                    <label for="color" class="block mb-2">Màu sắc</label>
                    <select name="color" id="pages" class="border w-full p-2">
                      <option value="color">In màu</option>
                      <option value="black-while">In không màu</option>
                    </select>
                  </div>
                  <div class="mb-4">
                    <label for="copies" class="block mb-2">In số bản</label>
                    <input type="number" name="copies" id="copies" class="border w-full p-2" step="1" min="1" value="1">
                  </div>
                  <div class="mb-4">
                    <label for="scale" class="block mb-2">Tỷ lệ khung (%)</label>
                    <input type="number" name="scale" id="scale" class="border w-full p-2" step="1" min="1" value="100">
                  </div>
                <p id="printText" class="mb-4">Chọn file PDF :</p>
                <input type="file" id="uploadPDF" accept="application/pdf" class="mb-4">
                <form id="printForm">
                  <button onclick="printLive()"  class="printB">In</button>
                </form>
                <form id="printForm">
                  <button onclick="printSchedule()" class="printB">Đặt lịch in</button>
                </form>
              </div>
              </div>
              </div>
              <script>
                async function printLive() {
                  const uploadPDF = document.getElementById("uploadPDF");
                  const file = uploadPDF.files[0];
                  if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                      // Create a Blob from the PDF data
                      const pdfData = e.target.result;
                      const pdfBlob = new Blob([pdfData], { type: "application/pdf" });

                      // Create a URL and open it in a new window to print
                      const printWindow = window.open(URL.createObjectURL(pdfBlob));
                      printWindow.focus();
                      printWindow.addEventListener("load", () => printWindow.print());
                    };
                    reader.readAsArrayBuffer(file);
                  } else {
                    alert("Bạn chưa chọn file pdf. Vui lòng chọn file để in!");
                  }
                }
                async function printSchedule() {
                  const uploadPDF = document.getElementById("uploadPDF");
                  const file = uploadPDF.files[0];
                  if (file) {
                    const reader = new FileReader();
                    reader.readAsArrayBuffer(file);
                    alert("Đặt lịch in thành công!");
                  } else {
                    alert("Bạn chưa chọn file pdf. Vui lòng chọn file để in!");
                  }
                }
              </script>
          </div>

          <!-- End Main Content -->
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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>