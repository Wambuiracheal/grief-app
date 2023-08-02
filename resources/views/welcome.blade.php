<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="TopGym Template">
    <meta name="keywords" content="TopGym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TopGym | Fitness </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,700,900" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-menu">
                        <div class="logo">
                            <a href="/">
                                <img src="/images/logo.png" alt="">
                            </a>
                        </div>
                        <nav class="mobile-menu">
                            <ul>

                                <li><a href="#aboutus">About us</a></li>
                                <li><a href="#classes">Classes</a></li>
                                <li><a href="./elements.html"> &nbsp;</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li class="search-btn search-trigger"><i class="fa fa-search"></i></li>
                            </ul>
                        </nav>
                        <div id="mobile-menu-wrap"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Search Bar Begin -->
    {{-- <section class="search-bar-wrap">
        <span class="search-close"><i class="fa fa-close"></i></span>
        <div class="search-bar-table">
            <div class="search-bar-tablecell">
                <div class="search-bar-inner">
                    <h2>Search</h2>
                    <form action="#">
                        <input type="search" placeholder="Type Keywords">
                        <button type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Search Bar End -->
    <!-- Top Social Begin -->
    {{-- <div class="top-social">
        <div class="top-social-links">
            <ul>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
        </div>
    </div> --}}
    <!-- Top Social End -->
    <!-- Hero Slider Section Begin -->
    <section class="hero-slider">
        <div class="slide-items owl-carousel">
            <div class="single-slide set-bg active" data-setbg="/images/bg1.jpg">

                <h1>Be Fit.Top Gym</h1>
                <a href="#services" class="primary-btn">Read More</a>
            </div>
            <div class="single-slide set-bg" data-setbg="/images/bg-2.jpg">

                <h1>Be Fit.Top Trainer</h1>
                <a href="#services" class="primary-btn">Read More</a>
            </div>
            <div class="single-slide set-bg" data-setbg="/images/bg-3.jpg">

                <h1>Be Fit.Top Body</h1>
                <a href="#services" class="primary-btn">Read More</a>
            </div>
            <div class="single-slide set-bg" data-setbg="/images/bg4.jpg">

                <h1>Be Fit.Together</h1>
                <a href="#services" class="primary-btn">Read More</a>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->
    <!-- Features Section Begin -->
    <section class="features-section spad" id="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-features">
                        <div class="features-img">
                            <img src="/images/gym2.jpeg" alt="">
                        </div>
                        <div class="feature-text">
                            <div class="feature-icon">
                                <img src="/images/features/icon-1.png" alt="">
                            </div>
                            <h5>Amazing Setting</h5>
                            <p>Our wide variety of equipment and calm setting keeps you pumped and motivated to give your body the
                                right squeeze.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-features">
                        <div class="features-img">
                            <img src="/images/gym5.jpeg" alt="">
                        </div>
                        <div class="feature-text">
                            <div class="feature-icon">
                                <img src="/images/features/icon-2.png" alt="">
                            </div>
                            <h5>Best Trainers</h5>
                            <p>Our trainers and friendly staff offer professional services that guarantee you the desired end result.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-features">
                        <div class="features-img">
                            <img src="/images/gym4.jpeg" alt="">
                        </div>
                        <div class="feature-text">
                            <div class="feature-icon">
                                <img src="/images/features/icon-3.png" alt="">
                            </div>
                            <h5>Diet Plans</h5>
                            <p>The right physique is achieved through a combined discipline of smart and correct dieting, which can be organized
                                according to your training program.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->
    <!-- Services Section Begin -->
    <section class="services-section spad" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Features</span>
                        <h2>Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <img src="/images/icon-1.png" alt="">
                        <h5>Cardio</h5>
                        <p>Your body might just need some intensive pump to get your heart beating in the right places and blood flowing in
                            the right places.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service c-text">
                        <img src="/images/icon-2.png" alt="">
                        <h5>Heavy Lifting</h5>
                        <p>Aiming to improve your strength? Then the heavier the better, strong!!
                            Our equipment entails various heavy weights that will just help you get that dream physique.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <img src="/images/icon-3.png" alt="">
                        <h5>Yoga</h5>
                        <p>Relaxation and strecthing to bring calmness to the entire human body. Recovery exercises to ease the mind and the soul.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <img src="/images/icon-4.png" alt="">
                        <h5>Spinning</h5>
                        <p>Hop on and get going. High intensive training programs incorporated in our Gym's facilities will send that stubborn fat
                            right back to drain and have you enjoying your   cheat day.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row p-70">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('register') }}" class="service-btn primary-btn">see all the services</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->
    <!-- Trainer Section Begin -->
    {{-- <section class="trainer-section set-bg" data-setbg="/images/trainer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>The Best</span>
                        <h2>Trainers</h2>
                        <a href="#" class="primary-btn trainer-btn">See All</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-trainer">
                        <div class="trainer-img">
                            <img src="/images/trainer/trainer-1.jpg" alt="">
                            <div class="img-hover">
                                <a href="#"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="trainer-text">
                            <h5>Rachel Smith <span>Aerobics Instructor</span></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-trainer">
                        <div class="trainer-img">
                            <img src="/images/trainer/trainer-2.jpg" alt="">
                            <div class="img-hover">
                                <a href="#"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="trainer-text">
                            <h5>Micheal Williams <span>Aerobics Instructor</span></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-trainer">
                        <div class="trainer-img">
                            <img src="/images/trainer/trainer-3.jpg" alt="">
                            <div class="img-hover">
                                <a href="#"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="trainer-text">
                            <h5>James Brown <span>Aerobics Instructor</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Traniner Section End -->
    <!-- Upcoming Event Begin -->
    <section class="upcoming-event-section spad-2" id="classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="upcoming-classes">
                        <div class="up-title">
                            <span>Next</span>
                            <h5>Upcomming Classes</h5>
                        </div>
                        <ul class="classes-time">
                            <li><img src="/images/stopwatch.png" alt=""> Gym Fitness <span>11:00 - 12:00</span></li>
                            <li><img src="/images/stopwatch.png" alt=""> Pilates <span>12:00 - 13:00</span></li>
                            <li><img src="/images/stopwatch.png" alt=""> Spinning <span>13:00 - 14:00</span></li>
                            <li><img src="/images/stopwatch.png" alt=""> Yoga <span>14:00 - 15:00</span></li>
                            <li><img src="/images/stopwatch.png" alt=""> Gym Fitness <span>15:00 - 16:00</span></li>
                            <li><img src="/images/stopwatch.png" alt=""> Pilates <span>16:00 - 17:00</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="membership-card set-bg" data-setbg="/images/m-card.jpg">
                        <div class="membership-details">
                            <div class="up-title">
                                <span>Next</span>
                                <h5>Membership Cards</h5>
                            </div>
                            <div class="discount">
                                <h1>25% <span>Discount</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="member-sign-up set-bg" data-setbg="/images/signup-bg.jpg">
                        <div class="up-title">
                            <span>New</span>
                            <h5>Special Programs</h5>
                        </div>
                        <p>Get started and join us. Lets take your body to the next level while helping you push past your limits. We work to help
                            you achieve your fitness goals.
                        </p>
                        <div class="member-signup-btn">
                            <a href="{{ route('register') }}" class="primary-btn">Sign up Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Upcoming Event End -->
    <!-- Footer Section Begin -->

    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
