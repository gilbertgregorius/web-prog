<?php
session_start();
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "bem_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Handle Error first
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form for query
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_id = $_GET['item_id'];
    $newPrice = $_POST['priceValue'];
    $newStock = $_POST['stockValue'];

    $update_stock_sql = "UPDATE item_tb SET stock = $newStock WHERE item_id = '$item_id'";
    $conn->query($update_stock_sql);

    $update_price_sql = "UPDATE item_tb SET harga = $newPrice WHERE item_id = '$item_id'";
    $conn->query($update_price_sql);

    echo '<div class="alert alert-info" role="alert">';
    echo "Update Successful You Will be redirected in 3 seconds";
    echo '</div>';
    header("refresh:3;url='../PHP/shop.php'");
}
// End form
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <form action="" method="post" class="container mt-5">
        <h2>Update Stock</h2>
        <label for="inputValue" class="mt-3">Enter Price:</label>
        <input type="number" class="form-control" name="priceValue" required>
        <label for="inputValue" class="mt-3">Enter Stock:</label>
        <input type="number" class="form-control" name="stockValue" required>
        <button type="submit" class="btn btn-primary mt-3" name="form_user">Submit</button>
    </form>
</body>