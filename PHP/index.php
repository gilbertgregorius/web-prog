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
                            <li><a class="dropdown-item" href="events.html">Events</a></li>
                            <li><a class="dropdown-item" href="ministry.html">Ministry</a></li>
                            <li><a class="dropdown-item" href="talent.html">Talent</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="https://calvin.ac.id" target="_blank">Our Campus</a></li>
                        </ul>
                    </li>
                </ul>
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
                                    <i class="fa fa-wallet"></i> Rp50.000, -
                                </a>
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

<body class="d-flex flex-column h-100">
    <!-- Part 0 | Carousel -->
    <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong mt-0" data-bs-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-bs-target="#introCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#introCarousel" data-bs-slide-to="1"></li>
        </ol>    
        
        <div class="carousel-inner" id="carousel-home"></div>
    
        <!-- Controls -->
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
        <a class="carousel-control-next" href="#introCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
    </div>
     
    <!-- Part 1 | About Us-->
    <div class="container-fluid about-us" id="learn-more">
        <div class="row my-3"></div>
        <div class="row mx-5 mt-5">
            <img class="col col-lg-6" src="../assets/group/bem-all.jpg" alt="Foto BEM">
            <div class="col col-lg-6">
                <h1>About Us</h1>
                <p>The Student Executive Board is established with the primary goal of enhancing organizational skills, leadership abilities, and the creativity of its members. Here, every individual has the opportunity to hone the talents bestowed upon them by God, enabling them to grow into competent and creative leaders for the future.</p>
            </div>
        </div>
        <!-- Youtube video -->
        <!-- <div class="embed-responsive embed-responsive-16by9 mb-5 d-flex align-items-center justify-content-center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/WBTKVOiSeJU?si=UJ72tOanbqh1aCw-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div> -->
    </div>

    <!-- Part 2 | Bible Quotes-->
    <div class="container-fluid bible-quotes">
        <h1 class="mt-5">Ephesians 4:15-16</h1>
        <p class="text-center mx-5 mb-5"><em>"Instead, speaking the truth in love, we will grow to become in every respect the mature body of him who is the head, that is, Christ.   From him the whole body, joined and held together by every supporting ligament, grows and builds itself up in love, as each part does its work."</em></p>
    </div>

    <!-- Part 3 | Male Vale-->
    <p class="display-3 fw-bold d-flex justify-content-center align-items-center mt-5">President & Vice President</p>
    <div class="row">
        <!-- Part 3.1 | Maleakhi -->
        <div class="col card border-0">
            <div class="">
                <div class="card-body px-5 pt-5 m-5 profile">
                    <div class="d-flex justify-content-center">
                        <img src="../assets/people/male.jpg" class="rounded-circle shadow-5-strong" width="200" height="200">
                    </div>                    
                    <figure class="text-center">
                        <blockquote class="blockquote mt-5 mb-4">
                            <p><span class="font-italic">As President of BEM, I'm thrilled to kick off another promising year together. 
                                Our goal is simple: to champion your voices and aspirations. With your support, we'll create an inclusive and dynamic community where every student thrives. 
                                Let's make this year one to remember!.</span></p>
                        </blockquote>
                        <figcaption class="blockquote-footer mb-0">
                            Maleakhi Ezekiel <br><cite title="Source Title">President BEM 2023/2024</cite>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

        <!-- Part 3.2 | Valerie -->
        <div class="col card border-0">
            <div class="">
                <div class="card-body px-5 pt-5 m-5 profile">
                    <div class="d-flex justify-content-center">
                        <img src="../assets/people/vale.jpg" class="rounded-circle shadow-5-strong" width="200" height="200">
                    </div>
                    
                    <figure class="text-center">
                        <blockquote class="blockquote mt-5 mb-4">
                            <p><span class="font-italic">As Vice President of BEM, I'm excited to welcome you to a year of growth and collaboration.
                                Together, let's celebrate diversity and build a community where every voice is heard and valued. 
                                Let's make it happen, together!</span></p>
                        </blockquote>
                        <figcaption class="blockquote-footer mb-0">
                            Valerie Wangsawijaya <br> <cite title="Source Title">Vice President BEM 2023/2024</cite>
                        </figcaption>
                    </figure>
                </div>
            </div>   
        </div>
    </div>

    <!-- Part 4 | Our Team -->
    <section class="section-from-gpt p-0 m-5">
        <!-- Member List -->
        <p class="text-center h1" style="font-size: 4vw;">
            <strong>Our Member</strong>
        </p>
        <div class="row" id="members" style="margin-bottom: 100px;">
        </div> <!-- dengan Js -->

        <!-- Content Row-->
        <p class="text-center h1" style="font-size: 4vw;">
            <strong>Our Divison</strong>
        </p>
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card divisions mx-3">
                    <img src="../assets/group/bem-ministry.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ministry Division</h5>
                        <p class="card-text">The Ministry Division focuses on spiritual growth and pastoral care, organizing prayer meetings, religious gatherings, and outreach programs to foster a supportive community and deepen students' spiritual beliefs.</p>
                        <a href="ministry.html" class="btn btn-primary border-0" style="background-color: #800706;">More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div class="card divisions mx-3">
                    <img src="../assets/group/bem-events.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Events Division</h5>
                        <p class="card-text">The Events Division plans diverse activities to enhance campus life, including cultural festivals, academic conferences, and social gatherings, promoting unity, collaboration, and school spirit.</p>
                        <a href="events.html" class="btn btn-primary border-0" style="background-color: #800706;">More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div class="card divisions mx-3">
                    <img src="../assets/group/bem-talent.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Talent Division</h5>
                        <p class="card-text">The Talent Division recognizes and develops student talents through talent shows, workshops, and training programs, empowering students to reach their full potential and make meaningful contributions to the community.</p>
                        <a href="talent.html" class="btn btn-primary border-0" style="background-color: #800706;">More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact  -->
        <div class="container px-5 pb-5 pt-5" id="contact">
            <div class="row gx-5 align-items-center">
                <section class="google-maps col-xxl-7">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8361535274685!2d106.84265699999997!3d-6.152692999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5db59766413%3A0xdaa8627877dbb6b0!2sCalvin%20Institute%20Technology!5e0!3m2!1sid!2sid!4v1709906484829!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </section>
                <section class="col-xxl-5">
                    <!-- Hubungi Kami -->
                    <div class="col-lg-10 mb-5">
                        <h5 class="font-weight-light">Hubungi Kami</h5>
                        <form method="POST" id="contactForm" name="contactForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" name="message" rows="7" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary fw-bold"
                                            style="background-color: #800706;">Send Message <small>*Dont Click</small></button>
                                        <div class="submitting"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
</body>

<!-- Part 5 | Footer -->
<footer>
    <p>COPYRIGHT © 2023 YAYASAN PENDIDIKAN TINGGI REFORMASI INJILI. ALL RIGHTS RESERVED.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../js/script_main.js"></script>
</html>
