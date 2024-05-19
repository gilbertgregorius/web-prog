<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "bem_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['item_id'])) {
    $item_id = $conn->real_escape_string($_GET['item_id']);
} else {
    die("Item ID not provided.");
}

$sql = "DELETE FROM item_tb WHERE item_id = '$item_id'";
if ($conn->query($sql) === TRUE) {
    header('Location: ../PHP/shop.php');
    exit();
} else {
    echo "Error: " . $conn->error;
}


$conn->close();
?>
