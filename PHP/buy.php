<<<<<<< HEAD
=======
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
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "bem_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Handle Error first
if ($conn->connect_error) {
<<<<<<< HEAD
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['name'])) {
    echo '<div class="alert alert-warning" role="alert">';
    echo "You Haven't Logged In, please consider Logging in";
    echo ' <a href="../PHP/Sign/sign_in_user_form.html" class="alert-link">Log In</a>';
    echo '</div>';
=======
    echo '<div class="alert alert-danger">Connection failed: ' . $conn->connect_error . '</div>';
    exit();
}

if (!isset($_SESSION['name'])) {
    echo '<div class="alert alert-warning">You Haven\'t Logged In, please consider Logging in <a href="../Sign/sign_in_user_form.html" class="alert-link">Log In</a></div>';
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
    exit();
}

if (!isset($_GET['item_id'])) {
<<<<<<< HEAD
    echo '<div class="alert alert-danger" role="alert">';
    echo "Product not specified. Redirecting you back in 3 seconds...";
    echo '</div>';
=======
    echo '<div class="alert alert-warning">Product not specified. Redirecting you back in 3 seconds...</div>';
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
    header("refresh:3;url='shop.php'");
    exit();
}
// End Handling Error

$item_id = $_GET['item_id'];

<<<<<<< HEAD
$sql = "SELECT * from item_tb WHERE item_id = '$item_id'";
$result = $conn->query($sql)->fetch_assoc();

// Get all details
=======
$sql = "SELECT * FROM item_tb WHERE item_id = '$item_id'";
$result = $conn->query($sql)->fetch_assoc();

# Get all details
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
$name_item = $result['nama_item'];
$price = $result['harga'];
$stock = $result['stock'];

<<<<<<< HEAD
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
=======
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
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088

// Form for query
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['confirm'])) {
        $nim = $_SESSION['nim'];
<<<<<<< HEAD

=======
        
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
        $update_stock_sql = "UPDATE item_tb SET stock = stock - 1 WHERE item_id = '$item_id'";
        $conn->query($update_stock_sql);

        $update_balance_sql = "UPDATE calvin_pay SET balance = balance - '$price' WHERE nim = '$nim'";
        $conn->query($update_balance_sql);

<<<<<<< HEAD
        // Update session variables
        $_SESSION['balance'] = $_SESSION['balance'] - $price;

        echo '<div class="alert alert-success mt-3" role="alert">';
        echo "Purchase Successful! Redirecting you back to shop in 3 seconds...";
        echo '</div>';
=======
        echo '<div class="alert alert-success mt-3">Buy Successful! Redirecting you back to shop in 3 seconds...</div>';
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
        header("refresh:3;url='shop.php'");
    }
}
// End form
?>
<<<<<<< HEAD

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
=======
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
</body>
</html>