
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/imgHover/imagehover.min.css">
    <link rel="stylesheet" href="assets/viewerjs/css/viewer.css">
    <link rel="stylesheet" href="assets/aos/aos.css">
</head>

<body class="bg-light">

     <!-- Navbar start -->                                                       
     <nav class="navbar navbar-light fixed-top bg-light shadow-sm">
            <div class="container-lg">
                <a class="navbar-brand text-danger fw-bold fs-4">E.D</a>
                <div class="dropdown">
                    <button class="btn btn-secondary btn-danger" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fa-solid fa-bars"></i></button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown">
                        <li><a href="#home" class="dropdown-item">Home</a></li>
                        <li><a href="#about" class="dropdown-item">About</a></li>
                        <li><a href="#course" class="dropdown-item">Course</a></li>
                        <li><a href="" class="dropdown-item">Project</a></li>
                        <li><a href="" class="dropdown-item">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <!-- Navbar end -->

    <!-- Home starts -->
    <section class="home py-5" id="home">
        <div class="container-lg">
            <div class="row min-vh-100 align-items-center align-content-center">
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="home-img text-center"></div>
                    <img src="/assets/image/hero-img.png" class="rounded-circle mw-100 img-fluid" alt="">
                </div>
                <div class="col-md-6 mt-5 mt-md-0 order-md-first">
                    <div class="home-text"></div>
                    <h1 class="text-uppercase fs-1 fw-bold" style="color: black;" >Selamat Datang Di</h1>
                    <h2>D-course</h2>
                    <p class="mt-4 text-muted">D-course merupakan website kursus untuk anak sma/smk yang ingin mempelajari bahasa pemrograman</p>
                    <a href="#about" class="btn btn-danger px-3 mt-2">About Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Home ends -->

    <!-- About start -->
    <section class="about py-5" id="about">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class=""fw-bold mb-5>About Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-5">
                    <div class="about-text">
                        <h3 class="fs-4 mb-4">D-course merupakan website kursus untuk anak sma/smk yang ingin mempelajari bahasa pemrograman</h3>
                        <p class="text-muted">D-course merupakan website kursus untuk anak sma/smk yang ingin mempelajari bahasa pemrograman</p>
                    </div>
                    <div class="row text-center text-uppercase my-3">
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">100</h4>
                                <p>member di course kami</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">90</h4>
                                <p>member di course kami</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">80</h4>
                                <p>member di course kami</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-center">
                            <a href="#course" class="btn px-3 btn-danger me-5">Course Kami</a>
                            <div class="social-links">
                                <a href="" class="text-dark me-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="" class="text-dark me-2"><i class="fab fa-twitter"></i></a>
                                <a href="" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                                <a href="" class="text-dark me-2"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-10">
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">Materi</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">Praktek</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About ends -->

    <!-- Course start -->
    <section class="course py-5" id="course">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">My Course</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="course-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 fs-2">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="fs-5 py-2">Frontend</h3>
                        <p class="text-muted">Kalian akan mempelajari tentang frontend.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="course-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 fs-2">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 class="fs-5 py-2">Backend</h3>
                        <p class="text-muted">Kalian akan mempelajari tentang frontend.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="course-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 fs-2">
                            <i class="fas fa-image"></i>
                        </div>
                        <h3 class="fs-5 py-2">Design</h3>
                        <p class="text-muted">Kalian akan mempelajari tentang frontend.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Course ends -->

    
    <!-- Script -->
    <script src="https://unpkg.com/jquery@3/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/fontawesome/js/all.min.js"></script>
    <script src="assets/smoothScroll/smooth-scroll.polyfills.js"></script>
    <script src="assets/viewerjs/js/viewer.js"></script>
    <script src="assets/aos/aos.js"></script>
</body>
</html>