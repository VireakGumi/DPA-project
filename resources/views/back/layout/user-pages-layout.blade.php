<!doctype html>
<html lang="en">

<head>
    <link href="/back/assets/libs/nouislider/dist/nouislider.min.css" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Codescandy" />
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="/back/assets/images/favicon/favicon.ico" />
    <!-- darkmode js -->
    <script src="/back/assets/js/vendors/darkMode.js"></script>
    <!-- Libs CSS -->
    <link href="/back/assets/fonts/feather/feather.css" rel="stylesheet" />
    <link href="/back/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="/back/assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
    <!-- Theme CSS -->
    <link rel="stylesheet" href="/back/assets/css/theme.min.css">

    <link rel="canonical" href="https://geeksui.codescandy.com/geeks/pages/landings/landing-job.html">
    <title>@yield('pageTitle')</title>
    @stack('stylesheets')
</head>

<body class="bg-white">
    <nav class="navbar navbar-expand-lg">
        <div class="container px-0">
            <div class="d-flex">
                <a class="navbar-brand" href="../../index.html"><img src="/back/assets/images/brand/logo/logo.svg"
                        alt="Geeks"></a>
            </div>
            <div class="order-lg-3">
                <div class="d-flex align-items-center">
                    <div class="dropdown">
                        <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button"
                            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                            <i class="bi theme-icon-active"><i class="bi theme-icon bi-sun-fill"></i></i>
                            <span class="visually-hidden bs-theme-text">Toggle theme</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center active"
                                    data-bs-theme-value="light" aria-pressed="true">
                                    <i class="bi theme-icon bi-sun-fill"></i>
                                    <span class="ms-2">Light</span>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                    data-bs-theme-value="dark" aria-pressed="false">
                                    <i class="bi theme-icon bi-moon-stars-fill"></i>
                                    <span class="ms-2">Dark</span>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                    data-bs-theme-value="auto" aria-pressed="false">
                                    <i class="bi theme-icon bi-circle-half"></i>
                                    <span class="ms-2">Auto</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-icon btn-light rounded-circle d-none d-md-inline-flex ms-2"><i
                            class="fe fe-shopping-cart align-middle"></i></a>
                    <a href="{{ route('u.login') }}" class="btn btn-outline-primary ms-2 d-none d-lg-block">Log
                        in</a>
                    <a href="{{ route('u.register') }}" class="btn btn-primary ms-2 d-none d-lg-block">Register</a>
                    <!-- Button -->
                    <button class="navbar-toggler collapsed ms-2 ms-lg-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="icon-bar top-bar mt-0"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                </div>
            </div>
            <!-- Collapse -->
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-default py-0 py-lg-2">
        <div class="container px-0">
            <!-- Collapse -->
            <div class="navbar-collapse collapse" id="navbar-default" style="">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarPages" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Web Themes & Templates</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarPages">
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">All
                                    items</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item">Popular Files</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">Featured Files</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">Top New Files</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">N/A</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">WordPress</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item"></a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">WordPress</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">Category Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Elementor</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item"></a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">WordPress</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">Category Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Hosting</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item"></a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">WordPress</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">Category Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Html</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item"></a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">WordPress</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">Category Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Shopify</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item"></a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">WordPress</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">Category Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Jamstack</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item"></a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">WordPress</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">Category Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Marketing</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item"></a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">WordPress</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">Category Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">CMS</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item"></a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">WordPress</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">Category Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">eCommerce</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item"></a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">WordPress</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">Category Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">UI
                                    Templates</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item"></a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">WordPress</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">Category Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Plugins</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item"></a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">WordPress</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">Category Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">More</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item"></a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">WordPress</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">Category Single</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarPages"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Code</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarPages">
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">N/A</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item"></a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">N/A</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">N/A</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarPages"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Video</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarPages">
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">N/A</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item"></a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">N/A</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">N/A</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarPages"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Audio</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarPages">
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">N/A</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item"></a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">N/A</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">N/A</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarPages"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Graphics</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarPages">
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">N/A</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item"></a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">N/A</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">N/A</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarPages"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Photos</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarPages">
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">N/A</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item"></a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">N/A</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">N/A</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarPages"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">3D Files</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarPages">
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">N/A</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-overview.html"
                                            class="dropdown-item"></a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category.html"
                                            class="dropdown-item">N/A</a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/dashboard/admin-course-category-single.html"
                                            class="dropdown-item">N/A</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    @yield('content')
    <!-- footer -->
    <footer class="pt-lg-8 pt-5 footer">
        <div class="container mt-lg-2">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- about company -->
                    <div class="mb-4">
                        <img src="/back/assets/images/brand/logo/logo.svg" alt="Geeks" class="logo-inverse" />
                        <div class="mt-4">
                            <p>Geek is feature-rich components and beautifully Bootstrap UIKit for developers, built
                                with bootstrap responsive framework.</p>
                            <!-- social media -->
                            <div class="fs-4 mt-4">
                                <!--Facebook-->
                                <a href="#" class="me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg>
                                </a>
                                <!--Twitter-->
                                <a href="#" class="me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path
                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                    </svg>
                                </a>

                                <!--GitHub-->
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-2 col-md-3 col-6">
                    <div class="mb-4">
                        <!-- list -->
                        <h3 class="fw-bold mb-3">Company</h3>
                        <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
                            <li><a href="#" class="nav-link">About</a></li>
                            <li><a href="#" class="nav-link">Pricing</a></li>
                            <li><a href="#" class="nav-link">Blog</a></li>
                            <li><a href="#" class="nav-link">Careers</a></li>
                            <li><a href="#" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="mb-4">
                        <!-- list -->
                        <h3 class="fw-bold mb-3">Support</h3>
                        <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
                            <li><a href="#" class="nav-link">Help and Support</a></li>
                            <li><a href="#" class="nav-link">Become Instructor</a></li>
                            <li><a href="#" class="nav-link">Get the app</a></li>
                            <li><a href="#" class="nav-link">FAQ’s</a></li>
                            <li><a href="#" class="nav-link">Tutorial</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <!-- contact info -->
                    <div class="mb-4">
                        <h3 class="fw-bold mb-3">Get in touch</h3>
                        <p>339 McDermott Points Hettingerhaven, NV 15283</p>
                        <p class="mb-1">
                            Email:
                            <a href="#">support@geeksui.com</a>
                        </p>
                        <p>
                            Phone:
                            <span class="text-dark fw-semibold">(000) 123 456 789</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center g-0 border-top py-2 mt-6">
                <!-- Desc -->
                <div class="col-lg-4 col-md-5 col-12">
                    <span>
                        ©
                        <span id="copyright2">
                            <script>
                                document.getElementById("copyright2").appendChild(document.createTextNode(new Date().getFullYear()));
                            </script>
                        </span>
                        Geeks-UI, Inc. All Rights Reserved
                    </span>
                </div>

                <!-- Links -->
                <div class="col-12 col-md-7 col-lg-8 d-md-flex justify-content-end">
                    <nav class="nav nav-footer">
                        <a class="nav-link ps-0" href="#">Privacy Policy</a>
                        <a class="nav-link px-2 px-md-3" href="#">Cookie Notice</a>

                        <a class="nav-link" href="#">Terms of Use</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path
                d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>
    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="/back/assets/libs/nouislider/dist/nouislider.min.js"></script>
    <script src="/back/assets/libs/wnumb/wNumb.min.js"></script>
    <script src="/back/assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="/back/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/back/assets/libs/simplebar/dist/simplebar.min.js"></script>
    <!-- Theme JS -->
    <script src="/back/assets/js/theme.min.js"></script>
    <script src="/back/assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
    <script src="/back/assets/js/vendors/tooltip.js"></script>
    @stack('scripts')
</body>

</html>
