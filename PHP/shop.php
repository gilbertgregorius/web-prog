<<<<<<< HEAD
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_id = $_POST['item_id'];
    if (isset($_POST['delete'])) {
        header("Location: ../PHP/deletestock.php?item_id=" . urlencode($item_id));
        exit();
    } else if (isset($_POST['update'])) {
        header("Location: ../PHP/updatestock.php?item_id=" . urlencode($item_id));
        exit();
    }
}

include '../PHP/header.php';
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "bem_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Handle Error first
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$i_id = 1;



?>
=======
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop | Calvin Student Board</title>
    <!-- Bootstrap dependencies -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap">
    <!-- Logo -->
    <link rel="shortcut icon" href="../assets/logo/cit_logo.ico" type="image/x-icon">
    <!-- Homemade CSS -->
    <link rel="stylesheet" href="../css/styleown.css">
    <link rel="stylesheet" href="../css/styles.css">

    <!-- Bootstrap icons-->        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<<<<<<< HEAD
=======
<header>
    <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #800606cd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="../PHP/index.php">
                <img src="../assets/logo/bem.png" alt="BEM Logo" style="width: 2em;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../PHP/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../PHP/index.php#learn-more">About</a>
                    </0li>
                    <li class="nav-item">
                        <a class="nav-link" href="../PHP/index.php#contact">Contact</a>
                    </li>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Our Division
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../html/events.html">Events</a></li>
                            <li><a class="dropdown-item" href="../html/ministry.html">Ministry</a></li>
                            <li><a class="dropdown-item" href="../html/talent.html">Talent</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="https://calvin.ac.id" target="_blank">Our Campus</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php" rel="nofollow">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.youtube.com/@CalvinInstituteofTechnology" rel="nofollow" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/" rel="nofollow" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://x.com/" rel="nofollow" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <?php 
                    
                    if (isset($_SESSION['name'])) {
                        $name = $_SESSION['name'];
                        $cpay = $_SESSION['balance'];
                        // Login
                        echo '<li class="nav-item">
                                <a class="nav-link" href="" rel="nofollow">
                                    <i class="fa fa-user"></i>
                                </a>
                                </li>';
                        echo '<li>' . $name . '</li>';
                        echo '<li class="nav-item">
                                <a class="nav-link" href="" rel="nofollow">
                                    <i class="fa fa-wallet"></i>
                                </a>
                                <a class="nav-link" href="Sign\logout.php" rel="nofollow">
                                    <b> Logout </b>
                                </a>
                                </li>';
                        echo '<li>' . $cpay . '</li>';

                    } else {
                        echo '<li class="nav-item">
                                <a class="nav-link" href="Sign\sign_in_user_form.html" rel="nofollow">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </a>
                              </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
<body>
    <!-- Header-->
    <div class="bg-dark py-5 banner">
        <div class="py-5"></div>
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Find your essentials</h1>
                <p class="lead fw-normal mb-0">Discover our best products</p>
            </div>
        </div>
        <div class="py-5"></div>
    </div>

    <!-- Shopping Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <!-- Product 1 -->
<<<<<<< HEAD
                <?php 
                    $item_exist = true;
                    $sql = "SELECT * from item_tb WHERE item_id='$i_id'";
                    $res = $conn->query($sql);
                    if (!$res->num_rows > 0) {
                        $item_exist = false;
                    }
                    $displayStyle = $item_exist ? '' : 'display: none;';
                    $res -> free();
                ?>
                <div class="col mb-5" style="<?php echo $displayStyle; ?>">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-warning text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <?php 
                        if (isset($_SESSION['admin'])) {
                            echo '<form method="post" class="position-absolute" style="top: 2.5rem; right: 0.5rem;">
                                <input type="hidden" name="item_id" value="1">
                                <button type="submit" name="update" class="badge bg-success text-white border-0" style="cursor: pointer;">Update</button>
                            </form>
                            <form method="post" class="position-absolute" style="top: 4.5rem; right: 0.5rem;">
                                <input type="hidden" name="item_id" value="1">
                                <button type="submit" name="delete" class="badge bg-danger text-white border-0" style="cursor: pointer;">Delete</button>
                            </form>';
                        };
                        ?>
                        <!-- Product image-->
                        <img class="card-img-top" src="../assets/products/pulpengelbiru.jpg" alt="..." />
=======
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="../assets/products/product_1.jpg" alt="..." />
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
<<<<<<< HEAD
                                <h5 class="fw-bolder">
                                <?php
                                $sql = "SELECT nama_item FROM item_tb WHERE item_id = '$i_id'";
                                $result = $conn->query($sql);
                                if ($result) {
                                    $row = $result->fetch_assoc();
                                    if ($row) {
                                        echo $row['nama_item'];
                                    } else {
                                        echo "No data found for item_id = $i_id";
                                    }
                                    $result->free();
                                } else {
                                    echo "Query failed: " . $conn->error;
                                }
                                ?>
                                </h5>
=======
                                <h5 class="fw-bolder">Pulpen Gel Hitam</h5>
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <p>(93)</p>
                                </div>
                                <!-- Product price-->
<<<<<<< HEAD
                                <span class="text-muted text-decoration-line-through">Rp9.000, -</span>
                                <?php
                                $sql = "SELECT harga FROM item_tb WHERE item_id = '$i_id'";
                                $result = $conn->query($sql);
                                if ($result) {
                                    $row = $result->fetch_assoc();
                                    if ($row) {
                                        echo 'Rp ' .$row['harga'];
                                    } else {
                                        echo "No data found for item_id = $i_id";
                                    }
                                    $result->free();
                                } else {
                                    echo "Query failed: " . $conn->error;
                                }

                                $i_id++;
                                ?>
=======
                                <span class="text-muted text-decoration-line-through">Rp11.000, -</span>
                                Rp8.000, -
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
<<<<<<< HEAD
                            <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="buy.php?item_id=1">Buy Now</a></div>
=======
                            <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="buy.php?item_id=4">Buy Now</a></div>
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
<<<<<<< HEAD

                <?php 
                    $item_exist = true;
                    $sql = "SELECT * from item_tb WHERE item_id='$i_id'";
                    $res = $conn->query($sql);
                    if (!$res->num_rows > 0) {
                        $item_exist = false;
                    }
                    $displayStyle = $item_exist ? '' : 'display: none;';
                    $res -> free();
                ?>
                <div class="col mb-5" style="<?php echo $displayStyle; ?>">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-warning text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <?php 
                        if (isset($_SESSION['admin'])) {
                            echo '<form method="post" class="position-absolute" style="top: 2.5rem; right: 0.5rem;">
                                <input type="hidden" name="item_id" value="2">
                                <button type="submit" name="update" class="badge bg-success text-white border-0" value="2" style="cursor: pointer;">Update</button>
                            </form>
                            <form method="post" class="position-absolute" style="top: 4.5rem; right: 0.5rem;">
                                <input type="hidden" name="item_id" value="2">
                                <button type="submit" name="delete" class="badge bg-danger text-white border-0" value="2" style="cursor: pointer;">Delete</button>
                            </form>';
                        };
                        ?>
                        <!-- Product image-->
                        <img class="card-img-top" src="../assets/products/bukutulisa4100lembar.jpg" alt="..." />
=======
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="../assets/products/product_2.jpg" alt="..." />
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
<<<<<<< HEAD
                                <h5 class="fw-bolder">
                                <?php
                                $sql = "SELECT nama_item FROM item_tb WHERE item_id = '$i_id'";
                                $result = $conn->query($sql);
                                if ($result) {
                                    $row = $result->fetch_assoc();
                                    if ($row) {
                                        echo $row['nama_item'];
                                    } else {
                                        echo "No data found for item_id = $i_id";
                                    }
                                    $result->free();
                                } else {
                                    echo "Query failed: " . $conn->error;
                                }
                                ?>
                                </h5>
=======
                                <h5 class="fw-bolder">A4 Textbook</h5>
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <p>(52)</p>
                                </div>
                                <!-- Product price-->
<<<<<<< HEAD
                                <span class="text-muted text-decoration-line-through">Rp2.000.000, -</span>
                                <?php
                                $sql = "SELECT harga FROM item_tb WHERE item_id = '$i_id'";
                                $result = $conn->query($sql);
                                if ($result) {
                                    $row = $result->fetch_assoc();
                                    if ($row) {
                                        echo 'Rp ' .$row['harga'];
                                    } else {
                                        echo "No data found for item_id = $i_id";
                                    }
                                    $result->free();
                                } else {
                                    echo "Query failed: " . $conn->error;
                                }

                                $i_id++;
                                ?>
=======
                                <span class="text-muted text-decoration-line-through">Rp39.000, -</span>
                                Rp24.000, -
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
<<<<<<< HEAD
                            <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="buy.php?item_id=2">Buy Now</a></div>
=======
                            <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="buy.php?item_id=3">Buy Now</a></div>
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
<<<<<<< HEAD
                <?php 
                    $item_exist = true;
                    $sql = "SELECT * from item_tb WHERE item_id='$i_id'";
                    $res = $conn->query($sql);
                    if (!$res->num_rows > 0) {
                        $item_exist = false;
                    }
                    $displayStyle = $item_exist ? '' : 'display: none;';
                    $res -> free();
                ?>
                <div class="col mb-5" style="<?php echo $displayStyle; ?>">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-warning text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <?php 
                        if (isset($_SESSION['admin'])) {
                            echo '<form method="post" class="position-absolute" style="top: 2.5rem; right: 0.5rem;">
                                <input type="hidden" name="item_id" value="3">
                                <button type="submit" name="update" class="badge bg-success text-white border-0" value="3" style="cursor: pointer;">Update</button>
                            </form>
                            <form method="post" class="position-absolute" style="top: 4.5rem; right: 0.5rem;">
                                <input type="hidden" name="item_id" value="3">
                                <button type="submit" name="delete" class="badge bg-danger text-white border-0" value="3" style="cursor: pointer;">Delete</button>
                            </form>';
                        };
                        ?>
                        <!-- Product image-->
                        <img class="card-img-top" src="../assets/products/penggarisplastik30cm.jpg" alt="..." />
=======
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="../assets/products/product_3.jpg" alt="..." />
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
<<<<<<< HEAD
                                <h5 class="fw-bolder">
                                <?php
                                $sql = "SELECT nama_item FROM item_tb WHERE item_id = '$i_id'";
                                $result = $conn->query($sql);
                                if ($result) {
                                    $row = $result->fetch_assoc();
                                    if ($row) {
                                        echo $row['nama_item'];
                                    } else {
                                        echo "No data found for item_id = $i_id";
                                    }
                                    $result->free();
                                } else {
                                    echo "Query failed: " . $conn->error;
                                }
                                ?>
                                </h5>
=======
                                <h5 class="fw-bolder">Penggaris Plastik 30cm</h5>
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <p>(28)</p>
                                </div>
                                <!-- Product price-->
<<<<<<< HEAD
                                <span class="text-muted text-decoration-line-through">Rp2.999.000, -</span>
                                <?php
                                $sql = "SELECT harga FROM item_tb WHERE item_id = '$i_id'";
                                $result = $conn->query($sql);
                                if ($result) {
                                    $row = $result->fetch_assoc();
                                    if ($row) {
                                        echo 'Rp ' .$row['harga'];
                                    } else {
                                        echo "No data found for item_id = $i_id";
                                    }
                                    $result->free();
                                } else {
                                    echo "Query failed: " . $conn->error;
                                }

                                $i_id++;
                                ?>
=======
                                <span class="text-muted text-decoration-line-through">Rp5.000, -</span>
                                Rp4.000, -
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
<<<<<<< HEAD
                            <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="buy.php?item_id=3">Buy Now</a></div>
=======
                            <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="buy.php?item_id=2">Buy Now</a></div>
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
<<<<<<< HEAD
                <?php 
                    $item_exist = true;
                    $sql = "SELECT * from item_tb WHERE item_id='$i_id'";
                    $res = $conn->query($sql);
                    if (!$res->num_rows > 0) {
                        $item_exist = false;
                    }
                    $displayStyle = $item_exist ? '' : 'display: none;';
                    $res -> free();
                ?>
                <div class="col mb-5" style="<?php echo $displayStyle; ?>">
                    <div class="card h-100">
                        <?php 
                            if (isset($_SESSION['admin'])) {
                                echo '<form method="post" class="position-absolute" style="top: 0.5rem; right: 0.5rem;">
                                    <input type="hidden" name="item_id" value="4">
                                    <button type="submit" name="update" class="badge bg-success text-white border-0" value="4" style="cursor: pointer;">Update</button>
                                </form>
                                <form method="post" class="position-absolute" style="top: 2.5rem; right: 0.5rem;">
                                    <input type="hidden" name="item_id" value="4">
                                    <button type="submit" name="delete" class="badge bg-danger text-white border-0" value="4" style="cursor: pointer;">Delete</button>
                                </form>';                            
                            };
                        ?>
                        <!-- Product image-->
                        <img class="card-img-top" src="../assets/products/penghapus10cm.jpg" alt="..." />
=======
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="../assets/products/product_4.jpg" alt="..." />
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
<<<<<<< HEAD
                                <h5 class="fw-bolder">
                                <?php
                                $sql = "SELECT nama_item FROM item_tb WHERE item_id = '$i_id'";
                                $result = $conn->query($sql);
                                if ($result) {
                                    $row = $result->fetch_assoc();
                                    if ($row) {
                                        echo $row['nama_item'];
                                    } else {
                                        echo "No data found for item_id = $i_id";
                                    }
                                    $result->free();
                                } else {
                                    echo "Query failed: " . $conn->error;
                                }
                                ?>
                                </h5>
=======
                                <h5 class="fw-bolder">Pensil 2B</h5>
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <p>(11)</p>
                                </div>
                                <!-- Product price-->
<<<<<<< HEAD
                                <?php
                                $sql = "SELECT harga FROM item_tb WHERE item_id = '$i_id'";
                                $result = $conn->query($sql);
                                if ($result) {
                                    $row = $result->fetch_assoc();
                                    if ($row) {
                                        echo 'Rp ' .$row['harga'];
                                    } else {
                                        echo "No data found for item_id = $i_id";
                                    }
                                    $result->free();
                                } else {
                                    echo "Query failed: " . $conn->error;
                                }

                                $i_id++;
                                ?>
=======
                                Rp2.000, -
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
<<<<<<< HEAD
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="buy.php?item_id=4">Buy Now</a></div>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <?php 
                    $item_exist = true;
                    $sql = "SELECT * from item_tb WHERE item_id='$i_id'";
                    $res = $conn->query($sql);
                    if (!$res->num_rows > 0) {
                        $item_exist = false;
                    }
                    $displayStyle = $item_exist ? '' : 'display: none;';
                    $res -> free();
                ?>
                <div class="col mb-5" style="<?php echo $displayStyle; ?>">
                    <div class="card h-100">
                        <?php 
                            if (isset($_SESSION['admin'])) {
                                echo '<form method="post" class="position-absolute" style="top: 0.5rem; right: 0.5rem;">
                                    <input type="hidden" name="item_id" value="5">
                                    <button type="submit" name="update" class="badge bg-success text-white border-0" style="cursor: pointer;">Update</button>
                                </form>
                                <form method="post" class="position-absolute" style="top: 2.5rem; right: 0.5rem;">
                                    <input type="hidden" name="item_id" value="5">
                                    <button type="submit" name="delete" class="badge bg-danger text-white border-0" style="cursor: pointer;">Delete</button>
                                </form>';                            
                            };
                        ?>
                        <!-- Product image-->
                        <img class="card-img-top" src="../assets/products/pensil2b.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">
                                <?php
                                $sql = "SELECT nama_item FROM item_tb WHERE item_id = '$i_id'";
                                $result = $conn->query($sql);
                                if ($result) {
                                    $row = $result->fetch_assoc();
                                    if ($row) {
                                        echo $row['nama_item'];
                                    } else {
                                        echo "No data found for item_id = $i_id";
                                    }
                                    $result->free();
                                } else {
                                    echo "Query failed: " . $conn->error;
                                }
                                ?>
                                </h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <p>(5)</p>
                                </div>
                                <!-- Product price-->
                                <?php
                                $sql = "SELECT harga FROM item_tb WHERE item_id = '$i_id'";
                                $result = $conn->query($sql);
                                if ($result) {
                                    $row = $result->fetch_assoc();
                                    if ($row) {
                                        echo 'Rp ' .$row['harga'];
                                    } else {
                                        echo "No data found for item_id = $i_id";
                                    }
                                    $result->free();
                                } else {
                                    echo "Query failed: " . $conn->error;
                                }

                                $i_id++;
                                ?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="buy.php?item_id=5">Buy Now</a></div>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <?php 
                    $item_exist = true;
                    $sql = "SELECT * from item_tb WHERE item_id='$i_id'";
                    $res = $conn->query($sql);
                    if (!$res->num_rows > 0) {
                        $item_exist = false;
                    }
                    $displayStyle = $item_exist ? '' : 'display: none;';
                    $res -> free();
                ?>
                <div class="col mb-5" style="<?php echo $displayStyle; ?>">
                    <div class="card h-100">
                        <?php 
                            if (isset($_SESSION['admin'])) {
                                echo '<form method="post" class="position-absolute" style="top: 0.5rem; right: 0.5rem;">
                                    <input type="hidden" name="item_id" value="6">
                                    <button type="submit" name="update" class="badge bg-success text-white border-0" style="cursor: pointer;">Update</button>
                                </form>
                                <form method="post" class="position-absolute" style="top: 2.5rem; right: 0.5rem;">
                                    <input type="hidden" name="item_id" value="6">
                                    <button type="submit" name="delete" class="badge bg-danger text-white border-0" style="cursor: pointer;">Delete</button>
                                </form>';                            
                            };
                        ?>
                        <!-- Product image-->
                        <img class="card-img-top" src="../assets/products/rautanpensil.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">
                                <?php
                                $sql = "SELECT nama_item FROM item_tb WHERE item_id = '$i_id'";
                                $result = $conn->query($sql);
                                if ($result) {
                                    $row = $result->fetch_assoc();
                                    if ($row) {
                                        echo $row['nama_item'];
                                    } else {
                                        echo "No data found for item_id = $i_id";
                                    }
                                    $result->free();
                                } else {
                                    echo "Query failed: " . $conn->error;
                                }
                                ?>
                                </h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <p>(6)</p>
                                </div>
                                <!-- Product price-->
                                <?php
                                $sql = "SELECT harga FROM item_tb WHERE item_id = '$i_id'";
                                $result = $conn->query($sql);
                                if ($result) {
                                    $row = $result->fetch_assoc();
                                    if ($row) {
                                        echo 'Rp ' .$row['harga'];
                                    } else {
                                        echo "No data found for item_id = $i_id";
                                    }
                                    $result->free();
                                } else {
                                    echo "Query failed: " . $conn->error;
                                }

                                $i_id++;
                                ?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="buy.php?item_id=6">Buy Now</a></div>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <?php 
                    $item_exist = true;
                    $sql = "SELECT * from item_tb WHERE item_id='$i_id'";
                    $res = $conn->query($sql);
                    if (!$res->num_rows > 0) {
                        $item_exist = false;
                    }
                    $displayStyle = $item_exist ? '' : 'display: none;';
                    $res -> free();
                ?>
                <div class="col mb-5" style="<?php echo $displayStyle; ?>">
                    <div class="card h-100">
                        <?php 
                            if (isset($_SESSION['admin'])) {
                                echo '<form method="post" class="position-absolute" style="top: 0.5rem; right: 0.5rem;">
                                    <input type="hidden" name="item_id" value="7">
                                    <button type="submit" name="update" class="badge bg-success text-white border-0" style="cursor: pointer;">Update</button>
                                </form>
                                <form method="post" class="position-absolute" style="top: 2.5rem; right: 0.5rem;">
                                    <input type="hidden" name="item_id" value="7">
                                    <button type="submit" name="delete" class="badge bg-danger text-white border-0" style="cursor: pointer;">Delete</button>
                                </form>';                            
                            };
                        ?>
                        <!-- Product image-->
                        <img class="card-img-top" src="../assets/products/tipexcair.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">
                                <?php
                                $sql = "SELECT nama_item FROM item_tb WHERE item_id = '$i_id'";
                                $result = $conn->query($sql);
                                if ($result) {
                                    $row = $result->fetch_assoc();
                                    if ($row) {
                                        echo $row['nama_item'];
                                    } else {
                                        echo "No data found for item_id = $i_id";
                                    }
                                    $result->free();
                                } else {
                                    echo "Query failed: " . $conn->error;
                                }
                                ?>
                                </h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <p>(8)</p>
                                </div>
                                <!-- Product price-->
                                <?php
                                $sql = "SELECT harga FROM item_tb WHERE item_id = '$i_id'";
                                $result = $conn->query($sql);
                                if ($result) {
                                    $row = $result->fetch_assoc();
                                    if ($row) {
                                        echo 'Rp ' .$row['harga'];
                                    } else {
                                        echo "No data found for item_id = $i_id";
                                    }
                                    $result->free();
                                } else {
                                    echo "Query failed: " . $conn->error;
                                }

                                $i_id++;
                                ?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="buy.php?item_id=7">Buy Now</a></div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 8 -->
                <?php 
                    $item_exist = true;
                    $sql = "SELECT * from item_tb WHERE item_id='$i_id'";
                    $res = $conn->query($sql);
                    if (!$res->num_rows > 0) {
                        $item_exist = false;
                    }
                    $displayStyle = $item_exist ? '' : 'display: none;';
                    $res -> free();
                ?>
                <div class="col mb-5" style="<?php echo $displayStyle; ?>">
                    <div class="card h-100">
                        <?php 
                            if (isset($_SESSION['admin'])) {
                                echo '<form method="post" class="position-absolute" style="top: 0.5rem; right: 0.5rem;">
                                    <input type="hidden" name="item_id" value="8">
                                    <button type="submit" name="update" class="badge bg-success text-white border-0" style="cursor: pointer;">Update</button>
                                </form>
                                <form method="post" class="position-absolute" style="top: 2.5rem; right: 0.5rem;">
                                    <input type="hidden" name="item_id" value="8">
                                    <button type="submit" name="delete" class="badge bg-danger text-white border-0" style="cursor: pointer;">Delete</button>
                                </form>';
                            };
                        ?>
                        <!-- Product image-->
                        <img class="card-img-top" src="../assets/products/bolpoinhitam.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">
                                <?php
                                $sql = "SELECT nama_item FROM item_tb WHERE item_id = '$i_id'";
                                $result = $conn->query($sql);
                                if ($result) {
                                    $row = $result->fetch_assoc();
                                    if ($row) {
                                        echo $row['nama_item'];
                                    } else {
                                        echo "No data found for item_id = $i_id";
                                    }
                                    $result->free();
                                } else {
                                    echo "Query failed: " . $conn->error;
                                }
                                ?>
                                </h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star"></div>
                                    <p>(1)</p>
                                </div>
                                <!-- Product price-->
                                <?php
                                $sql = "SELECT harga FROM item_tb WHERE item_id = '$i_id'";
                                $result = $conn->query($sql);
                                if ($result) {
                                    $row = $result->fetch_assoc();
                                    if ($row) {
                                        echo 'Rp ' .$row['harga'];
                                    } else {
                                        echo "No data found for item_id = $i_id";
                                    }
                                    $result->free();
                                } else {
                                    echo "Query failed: " . $conn->error;
                                }

                                $i_id++;
                                ?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="buy.php?item_id=8">Buy Now</a></div>
=======
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="buy.php?item_id=1">Buy Now</a></div>
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>COPYRIGHT &copy; 2023 YAYASAN PENDIDIKAN TINGGI REFORMASI INJILI. ALL RIGHTS RESERVED.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="..js/script_shop.js"></script>
</body>
<<<<<<< HEAD
</html>
<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
    // Get all delete buttons
    var deleteButtons = document.querySelectorAll('.delete-btn');

    // Attach click event listener to each delete button
    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default form submission
            
            // Get the item card associated with the delete button
            var card = button.closest('.col');

            // Hide the card by setting its display property to 'none'
            card.style.display = 'none';
        });
    });
});

</script> -->
=======
</html>
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
