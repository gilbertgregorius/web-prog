<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "bem_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = (int)$_POST["NIMValue"];
    $name = $_POST["NameValue"];
    $pass = md5($_POST["PasswordValue"]);

    $sql = "SELECT *
            FROM user_tb WHERE nim = '$nim'";
    $result = $conn -> query($sql);
    if ($result -> num_rows > 0) {
        echo "<h3>NIM already registered</h3>";
    } else {
        $sql = "INSERT INTO user_tb
        VALUES ('$nim', '$pass', '$name')";
        if ($conn -> query($sql) === True) {
            echo "<h3> Sign up success!</h3>";
            echo "<p> You will be redirected to home page in 3 seconds</p>";
            $sql  = "INSERT INTO calvin_pay
                    values(NULL, '$nim', 50000)";
            $conn -> query($sql);
        } else {
            echo "<h3> Sign up failed!</h3>";
            echo "<p> You can retry and if the problem persist please contact development team </p>";
            echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
}
$conn -> close();
header("refresh:3;url='index.php'");
exit();
?>