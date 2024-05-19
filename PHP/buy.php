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

if (!isset($_SESSION['name'])) {
    echo '<div class="alert alert-warning" role="alert">';
    echo "You Haven't Logged In, please consider Logging in";
    echo ' <a href="../PHP/Sign/sign_in_user_form.html" class="alert-link">Log In</a>';
    echo '</div>';
    exit();
}

if (!isset($_GET['item_id'])) {
    echo '<div class="alert alert-danger" role="alert">';
    echo "Product not specified. Redirecting you back in 3 seconds...";
    echo '</div>';
    header("refresh:3;url='shop.php'");
    exit();
}
// End Handling Error

$item_id = $_GET['item_id'];

$sql = "SELECT * from item_tb WHERE item_id = '$item_id'";
$result = $conn->query($sql)->fetch_assoc();

// Get all details
$name_item = $result['nama_item'];
$price = $result['harga'];
$stock = $result['stock'];

// Echo
echo '<div class="container mt-5">';
echo '<div class="card" style="width: 12rem;">';
echo '<img src="../assets/products/' . strtolower(str_replace(" ", "", $name_item)) . '.jpg" class="card-img-top" alt="' . $name_item . '">';
echo '<div class="card-body">';
echo '<h5 class="card-title">Confirm Purchase</h5>';
echo '<p class="card-text">Confirm you buy <strong>' . $name_item . '</strong> for <strong>Rp ' . $price . '</strong>? (Stock: '. $stock . ')</p>';
echo '<form method="POST" action="">';
echo '<button type="submit" name="confirm" class="btn btn-primary">Yes</button>';
echo '</form>';
echo '</div>';
echo '</div>';
echo '</div>';
// End Echo

// Form for query
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['confirm'])) {
        $nim = $_SESSION['nim'];

        $update_stock_sql = "UPDATE item_tb SET stock = stock - 1 WHERE item_id = '$item_id'";
        $conn->query($update_stock_sql);

        $update_balance_sql = "UPDATE calvin_pay SET balance = balance - '$price' WHERE nim = '$nim'";
        $conn->query($update_balance_sql);

        // Update session variables
        $_SESSION['balance'] = $_SESSION['balance'] - $price;

        echo '<div class="alert alert-success mt-3" role="alert">';
        echo "Purchase Successful! Redirecting you back to shop in 3 seconds...";
        echo '</div>';
        header("refresh:3;url='shop.php'");
    }
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
</body>
</html>