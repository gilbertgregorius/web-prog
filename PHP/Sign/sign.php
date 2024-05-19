<?php
session_start();
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "bem_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pass = md5($_POST["PasswordValue"]);

    try {
        // If user login
        if (isset($_POST['form_user'])) {
            $id = $_POST["NIMValue"];
            $sql = "SELECT * from user_tb WHERE nim = '$id' AND u_password = '$pass'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $name = $row['nama'];
                $nim = $row['nim'];
                $result->free();

                $sql = "SELECT * FROM calvin_pay WHERE nim = '$nim'";
                $res = $conn->query($sql);
                $row = $res->fetch_assoc();
                $cpay = $row['balance'];
                echo $conn->error;

                $is_admin = FALSE;
                $_SESSION['nim'] = $nim;
            } else {
                throw new Exception("Username or Password wrong!");
            }
        // If admin login
        } else if (isset($_POST['form_admin'])) {
            $pass = $_POST["PasswordValue"];
            $id = $_POST["IDValue"];
            $sql = "SELECT * from admin_tb WHERE id_admin = '$id' AND a_password = '$pass'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $name = "Admin";
                $cpay = 9999999999;

            $is_admin = TRUE;
            $_SESSION['admin'] = $is_admin;
            } else {
                echo "Error: " . $conn->error;
                throw new Exception("Username Password wrong!");
                
            }
        }

        // Set session variables
        $_SESSION['name'] = $name;
        $_SESSION['balance'] = $cpay;
        
        
        
        echo '<div class="alert alert-success" role="alert">';
        echo "Successful Login!";
        echo '</div>';
    } catch (Exception $e) {
        echo '<div class="alert alert-danger" role="alert">';
        echo $e->getMessage();
        echo '</div>';
    }
    echo '<div class="alert alert-info" role="alert">';
    echo "You Will be redirected in 3 seconds";
    echo '</div>';
}
$conn->close();
header("refresh:3;url='..'");
exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add this to the head section -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <title>Login | Calvin Shop</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
</html>