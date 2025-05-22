<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Goldfish</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('front-assets/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('front-assets/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('front-assets/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('front-assets/assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Updated: Nov 01 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="{{ route('front.home') }}" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('front-assets/assets/img/logo.png') }}" alt="">
                {{-- <h1 class="sitename">Goldfish</h1> --}}
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('front.home') }}" class="active">Home<br></a></li>
                    <li class="listing-dropdown"><a href="#"><span>Features</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li>
                                <a href="#">Attendance Management</a>
                                <p style="padding-left: 22px; font-size: 12px;">
                                    Cloud-Based Employee
                                    Attendance Management Software
                                </p>
                                <a href="#">Shift Management</a>
                                <p style="padding-left: 22px; font-size: 12px;">
                                    Cloud-Based Employee Scheduling and
                                    Shift Management Solution
                                </p>
                                <a href="#">Tax Management</a>
                                <p style="padding-left: 22px; font-size: 12px;">
                                    Tax Calculation, Tax Rule set-up etc.
                                    with the Complete HR Solution
                                </p>
                                {{-- <a href="#">Face Recognition</a>
                                <p style="padding-left: 22px; font-size: 12px;">
                                    Now access any of your office location
                                    globally with just a smile.
                                </p> --}}
                            </li>
                            <li>
                                <a href="#">Employee Leave Management</a>
                                <p style="padding-left: 22px; font-size: 12px;">
                                    Track all types of leave, No spreadsheets, No paper.
                                </p>
                                <a href="#">Employee Tracking</a>
                                <p style="padding-left: 22px; font-size: 12px;">
                                    Track Your Employees as They Work with The Best HR Software
                                </p>
                                <a href="#">Digital notice board</a>
                                <p style="padding-left: 22px; font-size: 12px;">
                                    Create Announcements, Notice Board, and More with Goldfish HR
                                </p>
                            </li>
                            <li>
                                <a href="#">Expense Management</a>
                                <p style="padding-left: 22px; font-size: 12px;">
                                    Capture And Record Every Penny Your Business Spends
                                </p>
                                <a href="#">Payroll Software</a>
                                <p style="padding-left: 22px; font-size: 12px;">
                                    All in one HR Payroll and Loan Management Software
                                </p>
                                <a href="#">Task Management</a>
                                <p style="padding-left: 22px; font-size: 12px;">
                                    Employee Task Management System and Activity with Goldfish HR
                                </p>
                            </li>

                            <li>
                                <a href="#">Employee Management</a>
                                <p style="padding-left: 22px; font-size: 12px;">
                                    Most Handy Employee Management Tool with All Features
                                </p>
                                <a href="#">Security</a>
                                <p style="padding-left: 22px; font-size: 12px;">
                                    Employee Management Became Secured and Powerful by Goldfish HR
                                </p>
                                <a href="#">Notifications</a>
                                <p style="padding-left: 22px; font-size: 12px;">
                                    Best HR Software with Mail Notification and Pop-up Feature
                                </p>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ route('front.pricing') }}">Pricing</a></li>
                    {{-- <li><a href="#services">Services</a></li> --}}
                    <li class="dropdown"><a href="#"><span>Devices</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li>

                    {{-- <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li> --}}
                    <li><a href="{{ route('front.blog') }}">Blog</a></li>

                    <li><a href="{{ route('front.contact') }}">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted flex-md-shrink-0" href="index.html#about">Get Started</a>

        </div>
    </header>
    <!-- =====  HEADER END  ===== -->


    <main>

        @yield('content')


    </main>




    <!-- =====  FOOTER START  ===== -->

    <footer id="footer" class="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                        <form action="{{ asset('front-assets/forms/newsletter.php') }}" method="post"
                            class="php-email-form">
                            <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                                    value="Subscribe"></div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">Goldfish</span>
                    </a>
                    <div class="footer-contact pt-3">

                        <p>
                            Streamline your human resources and payroll processes with HRM comprehensive module. Manage
                            employee data, attendance, and payroll seamlessly, ensuring accuracy and efficiency in HR
                            operations.
                        </p>
                        {{-- <p>Khan Tower (2nd Floor , 3rd Floor & 4th Floor) </p>
                        <p>80/3, VIP Road, Kakrail Dhaka, Bangladesh.</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+88-01811317129</span></p> --}}
                        <p><strong>Email:</strong> <span>info@opus-bd.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('front.home') }}">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Features</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('front.pricing') }}">Pricing</a>
                        </li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Devices</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Employee Information
                                Management</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Attendance and
                                Time Tracking</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Payroll Processing</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Benefits
                                Administration</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Streamline your HR and payroll operations with the right system—saving time, cutting costs, and
                        reducing errors across your organization.
                    </p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename"><a
                        href="https://opus-bd.com/">Goldfish-HR</a></strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                {{-- Designed by <a href="https://opus-bd.com/">Opus technology limited</a> Distributed by <a
                    href=“https://themewagon.com>ThemeWagon --}}
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('front-assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front-assets/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('front-assets/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('front-assets/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('front-assets/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('front-assets/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('front-assets/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front-assets/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('front-assets/assets/js/main.js') }}"></script>

</body>

</html>
