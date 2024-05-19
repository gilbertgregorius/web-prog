<?php
session_start();
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "bem_db";

$conn = new mysqli($servername, $username, $password, $dbname);

//Handle Error first
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['name'])) {
    echo "You Haven't Logged In, please consider Logging in";
    echo "<a href='../Sign/sign_in_user_form.html'> Log In</a>";
    exit();
}

if (!isset($_GET['item_id'])) {
    echo "Product not specified. Redirecting you back in 3 seconds...";
    header("refresh:3;url='shop.php'");
    exit();
}
// End Handling Error

$item_id = $_GET['item_id'];

$sql = "SELECT * from item_tb
        WHERE item_id = '$item_id'";
$result = $conn->query($sql)->fetch_assoc();

#Get all details
$name_item = $result['nama_item'];
$price = $result['harga'];
$stock = $result['stock'];

#Echo
// echo '<img src="../assets/products/' . htmlspecialchars($name_item) . '.jpg">';
echo "Confirm you buy $name_item for Rp $price ?";
echo '<form method="POST" action="">
<button type="submit" name="confirm">Yes</button>
</form>';
// End Echo

// Form for query
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['confirm'])) {
        $nim = $_SESSION['nim'];
        
        $update_stock_sql = "UPDATE item_tb SET stock = stock - 1 WHERE item_id = '$item_id'";
        $conn->query($update_stock_sql);

        $update_balance_sql = "UPDATE calvin_pay SET balance = balance - '$price' WHERE nim = '$nim'";
        $conn->query($update_balance_sql);

        echo "Buy Successful!  redirect you back to shop in 3 seconds";
        header("refresh:3;url='shop.php'");
    }
}
//End form
   