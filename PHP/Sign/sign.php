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
            $sql = "SELECT * from user_tb
                    WHERE nim = '$id' AND u_password = '$pass'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $name = $row['nama'];
                $nim = $row['nim'];
                $result->free();

                $sql = "SELECT * FROM calvin_pay
                        WHERE nim = '$nim'";
                $res = $conn->query($sql);
                $row = $res->fetch_assoc();
                $cpay = $row['balance'];
                echo $conn->error;
            } else {
                throw new Exception("Username or Password wrong!");
            }
        // If admin login
        } elseif (isset($_POST['form_admin'])) {
            $id = $_POST["IDValue"];
            $sql = "SELECT * from admin_tb
                    WHERE id_admin = '$id' AND a_password = '$pass'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $name = "Admin";
                $cpay = 9999999999;
            } else {
                throw new Exception("Username or Password wrong!");
            }
        }

        // Set session variables
        $_SESSION['name'] = $name;
        $_SESSION['balance'] = $cpay;
        $_SESSION['nim'] = $nim;
        
        echo "<h5>Successful Login!</h5>";
    } catch (Exception $e) {
        echo "<h5>" . $e->getMessage() . "</h5>";
    }
    echo "<h5> You Will be redirected in 3 seconds </h5>";
}
$conn -> close();
header("refresh:3;url='..'");
exit();
?>