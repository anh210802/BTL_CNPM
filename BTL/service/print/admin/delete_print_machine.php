<?php
header('Content-Type: application/json');


if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {

    $data_send = json_decode(file_get_contents("php://input"), true);

    $data = $data_send['id'];

    if (isset($data)) {
        $id = $data;
        if (is_numeric($id)) {
            $connection = new PDO("mysql:host=localhost;dbname=smart_print", "root", "");
            $query = $connection->prepare("DELETE FROM print_machine WHERE id = :id");
            $query->bindParam(":id", $id);
            $query->execute();

            echo json_encode(array("status" => "success", "message" => "Xóa thành công"));
        } else {
            echo json_encode(array("status" => "error", "message" => "Lỗi id"));
        }
    } else {
        echo json_encode(array("status" => "error", "message" => "Thiếu thông tin id"));
    }
} else {
    echo json_encode(array("status" => "error", "message" => "Yêu cầu không hợp lệ"));
}
?>