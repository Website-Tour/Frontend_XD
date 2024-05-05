<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "tour5"; 
// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['where']) && isset($_POST['date']) && isset($_POST['guest'])) {
        $where = $_POST['where'];
        $guest = $_POST['guest'];
        
        $date = $_POST['date'];
        $date = str_replace('/', '-', $date);
        $formatted_date = date('Y-m-d', strtotime($date));
        
        $guests_int = (int) preg_replace('/\D/', '', $guest);

        $sql = "SELECT * FROM tour WHERE area = '$where' AND thoigiandi >= '$formatted_date' AND soluongtrong >= $guests_int";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

            header('Content-Type: application/json');
            echo json_encode($rows);
        } else {
            http_response_code(500);
            echo json_encode(array("error" => "Database error"));
        }
    } else {
        http_response_code(400);
        echo json_encode(array("error" => "Missing form fields"));
    }
} else {
    http_response_code(405);
    echo json_encode(array("error" => "Method Not Allowed"));
}
?>
