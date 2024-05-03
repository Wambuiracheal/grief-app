<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="CTG Template">
    <meta name="keywords" content="CTG, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CTG</title>

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
                                <img src="/images/logo.jpg" alt="">
                            </a>
                        </div>
                        <nav class="mobile-menu">
                            <ul>

                                <li><a href="#aboutus">About us</a></li>
                                <li><a href="#classes">Sessions</a></li>
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
            <div class="single-slide set-bg active" data-setbg="/images/bg-1.jpeg">
                <h1>Compass Through Grief</h1>
                <a href="#services" class="primary-btn">Read More</a>
            </div>
            <div class="single-slide set-bg" data-setbg="/images/bg-2.jpeg">

                <h1>Compass Through Grief</h1>
                
                <a href="#services" class="primary-btn">Read More</a>
            </div>
            <div class="single-slide set-bg" data-setbg="/images/bg-3.jpeg">

                <h1>Compass Through Grief</h1>
                
                <a href="#services" class="primary-btn">Read More</a>
            </div>
            <div class="single-slide set-bg" data-setbg="/images/bg-4.jpeg">

                <h1>Compass Through Grief</h1>
                
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
                            <img src="/images/s2.jpeg" alt="">
                        </div>
                        <div class="feature-text">
                            <div class="feature-icon">
                                <img src="/images/features/icon-1.png" alt="">
                            </div>
                            <h5>Empowering Environment</h5>
                            <p>Our compassionate and understanding community provides a safe space to share your experiences and connect with others on a similar journey.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-features">
                        <div class="features-img">
                            <img src="/images/s1.jpeg" alt="">
                        </div>
                        <div class="feature-text">
                            <div class="feature-icon">
                                <img src="/images/features/icon-2.png" alt="">
                            </div>
                            <h5>Qualified Counselors</h5>
                            <p>Connect with experienced grief counselors who can provide personalized guidance and support during this challenging time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-features">
                        <div class="features-img">
                            <img src="/images/s3.jpeg" alt="">
                        </div>
                        <div class="feature-text">
                            <div class="feature-icon">
                                <img src="/images/features/icon-3.png" alt="">
                            </div>
                            <h5>Flexible Scheduling</h5>
                            <p>We offer convenient booking options to fit your needs, ensuring you can access support whenever you need it most.
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
                        <h5>Individual Counselling</h5>
                        <p>Connect with experienced therapists for personalized guidance and support tailored to your unique journey of grief.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service c-text">
                        <img src="/images/icon-2.png" alt="">
                        <h5>Support Groups and Community</h5>
                        <p>Find solace and understanding in connecting with others who share your experience. Participate in online or in-person groups focused on specific types of loss or general support.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <img src="/images/icon-3.png" alt="">
                        <h5>Grief Education</h5>
                        <p>Access comprehensive information about grief, its stages, coping mechanisms, and helpful resources tailored to different types of loss and cultural backgrounds.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <img src="/images/icon-4.png" alt="">
                        <h5>Peer Support and Mentorship</h5>
                        <p>Connect with individuals who have walked a similar path of grief. Find encouragement, learn from their experiences, and offer support to others in turn.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row p-70">
                <div class="col-lg-12 text-center">
                    <a href="https://chat.whatsapp.com/JAaMs74qDGVIZJLnJt0nXI" class="service-btn primary-btn">Join our Online community</a>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming-event-section spad-2" id="classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="upcoming-classes">
                        <div class="up-title">
                            <span>Next</span>
                            <h5>Upcoming Support Sessions</h5>
                        </div>
                        <ul class="classes-time">
                            <li><img src="/images/stopwatch.png" alt="">Family Grief Support Group<span>Tuesday, 2024-04-09 at 18:00 PM</span></li>
                            <li><img src="/images/stopwatch.png" alt="">Individual Grief Counseling (Adults)<span>Wednesday, 2024-04-10 at 10:00 AM</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="membership-card set-bg" data-setbg="/images/m-card.jpeg">
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
                    <div class="member-sign-up set-bg" data-setbg="/images/signup.jpeg">
                        <div class="up-title">
                            <span>New</span>
                            <h5>Grief Support Resources</h5>
                        </div>
                        <p>We understand that grief is a unique journey for every family. Explore our resources designed to provide support and guidance during this challenging time.
                        </p>
                        <ul class="resources-list">
                            <li><a href="https://www.helpguide.org/articles/grief/coping-with-grief-and-loss.htm">Grief & Loss Articles</a></li>
                            <li><a href="https://www.unicef.org/armenia/en/stories/strategies-cope-grief">Children's Grief Activities</a></li>
                            <li><a href="https://raisingchildren.net.au/teens/communicating-relationships/death-grief/parent-sibling-death-long-term-support-teenagers#:~:text=After%20a%20sibling%20or%20parent,will%20probably%20change%20over%20time.">Parent and Sibling Loss</a></li>
                          </ul>
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
