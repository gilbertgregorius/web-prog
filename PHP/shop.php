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
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="../assets/products/product_1.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Pulpen Gel Hitam</h5>
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
                                <span class="text-muted text-decoration-line-through">Rp11.000, -</span>
                                Rp8.000, -
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="buy.php?item_id=4">Buy Now</a></div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="../assets/products/product_2.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">A4 Textbook</h5>
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
                                <span class="text-muted text-decoration-line-through">Rp39.000, -</span>
                                Rp24.000, -
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="buy.php?item_id=3">Buy Now</a></div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="../assets/products/product_3.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Penggaris Plastik 30cm</h5>
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
                                <span class="text-muted text-decoration-line-through">Rp5.000, -</span>
                                Rp4.000, -
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="buy.php?item_id=2">Buy Now</a></div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="../assets/products/product_4.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Pensil 2B</h5>
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
                                Rp2.000, -
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="buy.php?item_id=1">Buy Now</a></div>
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
</html>