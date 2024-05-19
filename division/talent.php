<?php include '../PHP/header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Talent Division</title>
    
    <link rel="shortcut icon" href="../assets/logo/cit_logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-reboot.min.css">

    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/additional.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/styleown.css">

    <!-- External CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap">
    </noscript>
</head>

<body>
    <!-- Hero Section -->
    <section class="header16 cid-u6MbAsct8PTT mbr-fullscreen mbr-parallax-background" id="hero-17-u6MbAsct8PTT">
        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="content-wrap col-12 col-md-10">
                    <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-4 display-1">
                        <strong>Talent Division</strong>
                    </h1>
                    <p class="mbr-fonts-style mbr-text mbr-white mb-4 display-7">Fostering creativity and campus spirit,
                        the BEM Talent Division cultivates student talent through shows, workshops, guest speakers, and
                        auditions.</p>
                    <div class="mbr-section-btn"><a class="btn btn-white-outline display-7" href="#about_us">Explore
                            Now</a></div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section class="article12 cid-u6MbAscVS7" id="about_us">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <h3 class="mbr-section-title mbr-fonts-style mb-4 mt-0 display-3 fw-bold">
                        <strong>About Us</strong>
                    </h3>
                    <p class="mbr-text mbr-fonts-style display-7">The BEM Talent Division is responsible for organizing
                        and managing various talent-related events on campus, including talent shows, auditions,
                        workshops, and guest speaker events. </p>
                    <p class="mbr-text mbr-fonts-style display-7">The division aims to provide students with
                        opportunities to showcase their talents, help them develop their skills, promote a culture of
                        creativity and innovation on campus, and foster a sense of community. </p>
                    <p class="mbr-text mbr-fonts-style display-7">Students can get involved by attending division
                        meetings, contacting the division director, or volunteering to help with upcoming events. </p>
                    <p class="mbr-text mbr-fonts-style display-7">The BEM Talent Division is always looking for new and
                        talented students to get involved and share their talents with the campus community.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Member List -->
    <!-- Member List -->
    <section class="people03 cid-u6MbAsdRxB" id="team-1-u6MbAsdRxB">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 content-head">
                    <div class="mbr-section-head mb-5">
                        <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-3 fw-bold">
                            <strong>Our Member</strong>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row" id="Talent">
                <!-- Ministry members will be inserted here by JavaScript -->
            </div>
        </div>
    </section>

    <script>
        var members = [
            {
                img: "https://calvin.ac.id/wp-content/uploads/2023/11/DSC07524-scaled.jpg",

                name: "Lieprilson Firdaus",
                role: "Coordinator",
                division: "Talent"

            },
            {
                img: "https://calvin.ac.id/wp-content/uploads/2023/11/DSC07457-scaled-e1700803421305.jpg",

                name: "Elizabeth Aurelia",
                role: "Member",
                division: "Talent"

            },
            {
                img: "https://calvin.ac.id/wp-content/uploads/2023/11/DSC07447-scaled.jpg",

                name: "Febby Natasya Limyadi",
                role: "Member",
                division: "Talent"

            },
            {
                img: "https://calvin.ac.id/wp-content/uploads/2023/11/DSC07465-scaled.jpg",

                name: "Wesley Hakim",
                role: "Creative Media",
                division: "Talent"

            }
        ];

        for (var i = 0; i < members.length; i++) {
            var member = members[i];
            var memberHTML = `
                <div class="item features-image col-12 col-md-6 col-lg-3">
                    <div class="item-wrapper">
                        <div class="item-img mb-3">
                            <img src="${member.img}">
                        </div>
                        <div class="item-content align-left">
                            <h6 class="item-subtitle mbr-fonts-style h3">
                                <strong>${member.name}</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style">${member.role}</p>
                        </div>
                    </div>
                </div>
            `;
            document.getElementById(member.division).innerHTML += memberHTML;
        }
    </script>


    <!-- Program Kerja  -->
    <section class="features18 section-from-gpt-sub" id="features-24-u6MbAsdri7">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-12 content-head">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-3 fw-bold">
                        <strong>Work Programs</strong>
                    </h3>
                    <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-4 h6">
                        Our Work Programs in 1 Period
                    </h5>
                </div>
            </div>
            <div class="row">
                <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
                    <div class="item-wrapper">
                        <div class="card card-box align-left p-5">
                            <h5 class="card-title mbr-fonts-style h3">
                                <strong>UKM Stage</strong>
                            </h5>
                            <p class="card-text mbr-fonts-style h6">
                                A platform for student clubs and organizations to showcase their talents and promote their activities.</p>
                        </div>
                    </div>
                </div>
                <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
                    <div class="item-wrapper">
                        <div class="card card-box align-left p-5">
                            <h5 class="card-title mbr-fonts-style h3">
                                <strong>CIC (Calvin Innovation Challenge)</strong>
                            </h5>
                            <p class="card-text mbr-fonts-style h6">
                                An innovation competition that encourages students to develop creative solutions to real-world problems.</p>
                        </div>
                    </div>
                </div>
                <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
                    <div class="item-wrapper">
                        <div class="card card-box align-left p-5">
                            <h5 class="card-title mbr-fonts-style h3">
                                <strong>Funding Merchandise</strong>
                            </h5>
                            <p class="card-text mbr-fonts-style h6">
                                A program that provides financial support to student clubs and organizations for merchandise production.</p>
                        </div>
                    </div>
                </div>
                <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
                    <div class="item-wrapper">
                        <div class="card card-box align-left p-5">
                            <h5 class="card-title mbr-fonts-style h3">
                                <strong>XPC (Xperience Calvin)</strong>
                            </h5>
                            <p class="card-text mbr-fonts-style h6">
                                An annual event that provides a platform for students to showcase their talents and creativity through various performances and competitions.</p>
                        </div>
                    </div>
                </div>
                <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
                    <div class="item-wrapper">
                        <div class="card card-box align-left p-5">
                            <h5 class="card-title mbr-fonts-style h3">
                                <strong>UKM Day</strong>
                            </h5>
                            <p class="card-text mbr-fonts-style h6">
                                A day-long event that celebrates the diversity of student clubs and organizations on campus.</p>
                        </div>
                    </div>
                </div>
                <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
                    <div class="item-wrapper">
                        <div class="card card-box align-left p-5">
                            <h5 class="card-title mbr-fonts-style h3">
                                <strong>UKM Content</strong>
                            </h5>
                            <p class="card-text mbr-fonts-style h6">
                                A program that provides support to student clubs and organizations in creating content for their social media platforms.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script_divisi.js"></script>

    <script>

        (function () {
            var animationInput = document.createElement('input');
            animationInput.setAttribute('name', 'animation');
            animationInput.setAttribute('type', 'hidden');
            document.body.append(animationInput);
        })();

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>