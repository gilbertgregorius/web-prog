<!-- 

Gilbert Gregorius Kirana - 222102119
Gery Yulianto - 222101862
Jonathan Febrian Handoyo - 222102303
 -->
 <?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calvin Student Board</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Calvin Institute of Technology Student Board">
    <meta name="author" content="Gery Yulianto, Jonathan Febrian, Gilbert Gregorius">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap">
    </noscript>
    
    <!-- Logo -->
    <link rel="shortcut icon" href="../assets/logo/cit_logo.ico" type="image/x-icon">
    
    <!-- CSS -->
    <link href="../css/styles.css" rel="stylesheet">
    <link href="../css/styleown.css" rel="stylesheet">
    
</head>

<header>
    <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #800606cd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="../assets/logo/bem.png" alt="BEM Logo" style="width: 2em;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <!-- Basic -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#learn-more">About</a>
                    </0li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Our Division
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../division/events.php">Events</a></li>
                            <li><a class="dropdown-item" href="../division/ministry.php">Ministry</a></li>
                            <li><a class="dropdown-item" href="../division/talent.php">Talent</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="https://calvin.ac.id" target="_blank">Our Campus</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Social media -->
                <ul class="row navbar-nav ms-auto">
                    <li class="col col-3 nav-item">
                        <a class="nav-link" href="https://www.youtube.com/@CalvinInstituteofTechnology" rel="nofollow" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li class="col col-3 nav-item">
                        <a class="nav-link" href="https://www.facebook.com/" rel="nofollow" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="col col-3 nav-item">
                        <a class="nav-link" href="https://x.com/" rel="nofollow" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>
                <!-- User information -->
                <ul class="row navbar-nav">
                <?php 
                    if (isset($_SESSION['name'])) {
                        $name = $_SESSION['name'];
                        $cpay = $_SESSION['balance'];
                        // Login
                        echo '<li class="col nav-item">
                                <a class="nav-link" href="" rel="nofollow">
                                    <i class="fa fa-user"></i>
                                </a>
                                </li>';
                        echo '<li class="col col-auto nav-link"> Welcome back, '
                                    . $name .
                             '</li>';
                        echo '<li class="col nav-item">
                                <a class="nav-link" href="shop.php" rel="nofollow">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </li>';
                        echo '<li class="col col-auto nav-item">
                                <a class="nav-link" href="#" rel="nofollow">
                                    <i class="fa fa-wallet"></i>' . $cpay .
                            '</a>
                             </li>';
                        echo '<li class="col nav-item">
                                <a class="nav-link" href="Sign\logout.php" rel="nofollow">
                                    <i class="fas fa-sign-in-alt"></i>
                                </a>
                            </li>';
                    } else {
                        echo '<li class="col nav-item">
                                <a class="nav-link" href="Sign\sign_in_user_form.html" rel="nofollow">
                                    <i class="fa fa-user"></i>
                                </a>
                              </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
