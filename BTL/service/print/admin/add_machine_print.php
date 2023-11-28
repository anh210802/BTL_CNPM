<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['username_admin']) && !isset($_SESSION['admin'])) {
    header("location: http://localhost/BTL/login/admin/login_admin.php"); // Chuyển hướng về trang đăng nhập nếu chưa đăng nhập
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $co_so = isset($_POST['co_so']) ? $_POST['co_so'] : null;
    $toa = isset($_POST['toa']) ? $_POST['toa'] : null;
    $state = isset($_POST['state']) ? $_POST['state'] : null;
    

    if (
        !empty($name) &&
        !empty($co_so) &&
        !empty($toa) &&
        !empty($state) &&
        is_string($name) && strlen($name) <= 255 &&
        is_string($co_so) && strlen($co_so) <= 255 &&
        is_string($toa) && strlen($toa) <= 255 &&
        is_string($state) && strlen($state) <= 255
    ) {
        $connection = new PDO("mysql:host=localhost;dbname=smart_print", "root", "");
        $query = $connection->prepare("INSERT INTO print_machine (name, co_so, toa, state) VALUES (:name, :co_so, :toa, :state)");
        $query->bindParam(":name", $name);
        $query->bindParam(":co_so", $co_so);
        $query->bindParam(":toa", $toa);
        $query->bindParam("state", $state);
        $query->execute();
        $response = array('status' => 'Thêm máy in thành công', 'message' => 'dữ liệu được ghi lại!');
    } else {
        $response = array('status' => '!', 'message' => 'Kiểm tra lại thông tin máy in trước khi xác nhận!');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous">
    <link rel="stylesheet" href="print_admin.css" >
    <link rel="shortcut icon" type="Images/png" href="http://localhost/BTL/image/hcmut.png" />
    <title>Thêm máy in</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    h2 {
        text-align: center;
    }
    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 30%;
    }
    input[type="text"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
   
    }
   
    input[type=submit] {
        width: 100%;
        background-color: #808080;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        color: black;
    }
    input[type=submit]:hover {
        background-color: #C0C0C0;
    }
</style>
<body>
    <div class="container">
        <h2>Thêm máy in</h2>
        <form action="" method="post">
            <label for="name">Tên máy in</label>
            <input type="text" name="name" required><br>

            <label for="co_so">Cơ sở:</label><br>
            <input onclick="chonToa(this)" type="radio" id="co_so" name="co_so" value="Ly Thuong Kiet">Ly Thuong Kiet</input><br>
            <input onclick="chonToa(this)" type="radio" id="co_so" name="co_so" value="Di An">Di An</input><br>

            <label for="toa">Tòa:</label><br>
                <table id="toa">
                
                </table>

            <label for="state">Cài đặt trạng thái hoạt động:</label><br>
            <input type="radio" name ="state" value="On">On<br>
            <input type="radio" name ="state" value="Off">Off<br>
            <input type="radio" name ="state" value="Bảo trì">Bảo trì<br>

            <input type="submit" value="Xác nhận thêm máy in">
        </form>
        <?php 
            if (isset($response)) echo "<p>Thông báo: {$response['status']}, {$response['message']}</p>"; 
        ?>
        <form method="post" action="print_admin.php">
            <input type="submit" value="Quay lại trang danh sách">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    var data_toa_2 = ["H1", "H2", "H3", "H6"];
    var data_toa_1 = ["A1", "A2", "A3", "A4", "A5","B1","B2","B3","B4","B5","C1","C2","C3","C4","C5"];

    function chonToa(radio) {
        if (radio.checked && radio.value == "Ly Thuong Kiet") {
            var table = $('#toa');
            table.empty();
            data_toa_1.forEach(function (toa) {
                var row_1 =
                    '<tr>' +
                    '<td><input type="radio" name="toa" value="' + toa + '">' + toa + '</td>' +
                    '</tr>';
                table.append(row_1);
            });
        } else if (radio.checked && radio.value == "Di An") {
            var table = $('#toa');
            table.empty();
            data_toa_2.forEach(function (toa) {
                var row_2 =
                    '<tr>' +
                    '<td><input type="radio" name="toa" value="' + toa + '">' + toa + '</td>' +
                    '</tr>';
                table.append(row_2);
            });
        } else {
            var table = $('#toa');
            table.empty();
        }
    }
</script>

</body>
</html>


