<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Calvin Shop</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "bem_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Handle Error first
if ($conn->connect_error) {
    echo '<div class="alert alert-danger">Connection failed: ' . $conn->connect_error . '</div>';
    exit();
}

if (!isset($_SESSION['name'])) {
    echo '<div class="alert alert-warning">You Haven\'t Logged In, please consider Logging in <a href="../Sign/sign_in_user_form.html" class="alert-link">Log In</a></div>';
    exit();
}

if (!isset($_GET['item_id'])) {
    echo '<div class="alert alert-warning">Product not specified. Redirecting you back in 3 seconds...</div>';
    header("refresh:3;url='shop.php'");
    exit();
}
// End Handling Error

$item_id = $_GET['item_id'];

$sql = "SELECT * FROM item_tb WHERE item_id = '$item_id'";
$result = $conn->query($sql)->fetch_assoc();

# Get all details
$name_item = $result['nama_item'];
$price = $result['harga'];
$stock = $result['stock'];

# Display item details and confirmation form
echo '<div class="card">';
echo '<div class="card-body">';
echo '<h5 class="card-title">' . htmlspecialchars($name_item) . '</h5>';
echo '<p class="card-text">Price: Rp ' . number_format($price, 0, ',', '.') . '</p>';
echo '<form method="POST" action="">';
echo '<button type="submit" name="confirm" class="btn btn-primary"><i class="fas fa-check"></i> Confirm you buy ' . htmlspecialchars($name_item) . ' for Rp ' . number_format($price, 0, ',', '.') . '</button>';
echo '</form>';
echo '</div>';
echo '</div>';

// Form for query
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['confirm'])) {
        $nim = $_SESSION['nim'];
        
        $update_stock_sql = "UPDATE item_tb SET stock = stock - 1 WHERE item_id = '$item_id'";
        $conn->query($update_stock_sql);

        $update_balance_sql = "UPDATE calvin_pay SET balance = balance - '$price' WHERE nim = '$nim'";
        $conn->query($update_balance_sql);

        echo '<div class="alert alert-success mt-3">Buy Successful! Redirecting you back to shop in 3 seconds...</div>';
        header("refresh:3;url='shop.php'");
    }
}
// End form
?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>