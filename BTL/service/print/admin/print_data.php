<?php 
header("Content-Type: application/json");

$host = "localhost";
$username = "root";
$password = "";
$database = "smart_print";

$conn = new mysqli($host, $username, $password, $database);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM print_machine";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $name = $row['name'];
        $co_so = $row['co_so'];
        $toa = $row['toa'];
        $date = $row['date'];
        $state = $row['State'];

        $data[] = array( 
            'id' => $id,
            'name' => $name,
            'co_so' => $co_so,
            'toa' => $toa,
            'date' => $date,
            'state' => $state
        );
    }

    echo json_encode($data);
} else {
    echo json_encode(array("status" => "error", "message" => "No data found."));
}

$conn->close();

?>