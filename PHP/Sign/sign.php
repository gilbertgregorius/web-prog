<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Calvin Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css">
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

        if ($conn->connect_error) {
            echo '<div class="alert alert-danger">Connection failed: ' . $conn->connect_error . '</div>';
            exit();
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pass = md5($_POST["PasswordValue"]);

            try {
                // If user login
                if (isset($_POST['form_user'])) {
                    $id = $_POST["NIMValue"];
                    $sql = "SELECT * FROM user_tb WHERE nim = '$id' AND u_password = '$pass'";
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
                    } else {
                        throw new Exception("Username or Password wrong!");
                    }
                // If admin login
                } elseif (isset($_POST['form_admin'])) {
                    $id = $_POST["IDValue"];
                    $sql = "SELECT * FROM admin_tb WHERE id_admin = '$id' AND a_password = '$pass'";
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
                $_SESSION['nim'] = $nim ?? '';

                echo '<div class="alert alert-success">Successful Login!</div>';
            } catch (Exception $e) {
                echo '<div class="alert alert-danger">' . $e->getMessage() . '</div>';
            }
            echo '<div class="alert alert-info">You will be redirected in 3 seconds...</div>';
            header("refresh:3;url='..'");
            exit();
        }
        $conn->close();
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
