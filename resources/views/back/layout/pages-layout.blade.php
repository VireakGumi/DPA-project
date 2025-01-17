<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/back/assets/libs/flatpickr/dist/flatpickr.min.css">
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
    {{-- <link rel="stylesheet" href="/back/croppie/croppie.css"> --}}
    <link rel="shortcut icon" type="image/x-icon" href="/back/assets/images/favicon/favicon.ico" />

    <!-- darkmode js -->
    <script src="/back/assets/js/vendors/darkMode.js"></script>

    <!-- Libs CSS -->
    <link href="/back/assets/fonts/feather/feather.css" rel="stylesheet" />
    <link href="/back/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="/back/assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/back/assets/css/theme.min.css">
    <link rel="stylesheet" href="/extra-assets/css/ijabo.min.css">

    <link rel="canonical" href="https://geeksui.codescandy.com/geeks/pages/dashboard/dashboard-analytics.html">

    <title>@yield('pageTitle')</title>
    @kropifyStyles
    @stack('stylesheets')
</head>

<body>
    <!-- Wrapper -->
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="vh-100" data-simplebar>
                <!-- Brand logo -->
                <a class="navbar-brand" href="../../index.html">
                    <img src="/back/assets/images/brand/logo/logo-inverse.svg" alt="Geeks" />
                </a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('admin.dashboard') ? '' : 'collapsed' }}" href="#"
                            data-bs-toggle="collapse" data-bs-target="#navDashboard"
                            aria-expanded="{{ Route::is('admin.dashboard') ? 'true' : 'false' }}"
                            aria-controls="navDashboard">
                            <i class="nav-icon fe fe-home me-2"></i>
                            Dashboard
                        </a>
                        <div id="navDashboard" class="collapse {{ Route::is('admin.dashboard') ? 'show' : '' }}"
                            data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}"
                                        href="{{ route('admin.dashboard') }}">Overview</a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="../../pages/dashboard/dashboard-analytics.html">Analytics</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
                            data-bs-target="#navCourses" aria-expanded="false" aria-controls="navCourses">
                            <i class="nav-icon fe fe-book me-2"></i>
                            Courses
                        </a>
                        <div id="navCourses" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="../../pages/dashboard/admin-course-overview.html">All
                                        Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../../pages/dashboard/admin-course-category.html">Courses
                                        Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="../../pages/dashboard/admin-course-category-single.html">Category
                                        Single</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item divider -->
                    <li class="nav-item">
                        <div class="nav-divider"></div>
                    </li>
                    <!-- Nav item Heading -->
                    <li class="nav-item">
                        <div class="navbar-heading">Apps</div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="../../pages/dashboard/task-kanban.html">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-trello">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2">
                                    </rect>
                                    <rect x="7" y="7" width="3" height="9"></rect>
                                    <rect x="14" y="7" width="3" height="5"></rect>
                                </svg>
                            </span>
                            <span class="ms-2">Task</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="nav-divider"></div>
                    </li>
                </ul>
                <!-- Card -->
                <div class="card bg-dark-primary shadow-none text-center mx-4 my-8">

                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main id="page-content">
            <div class="header">
                <!-- navbar -->
                @livewire('admin.top-user-info')
            </div>
            <!-- Container fluid -->
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.js"></script>
    {{-- <script src="/back/croppie/croppie.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/extra-assets/js/ijabo.min.js"></script>

    <!-- Libs JS -->
    <script src="/back/assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="/back/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/back/assets/libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="/back/assets/js/theme.min.js"></script>

    <script src="/back/assets/libs/jsvectormap/dist/js/jsvectormap.min.js"></script>
    <script src="/back/assets/libs/jsvectormap/dist/maps/world.js"></script>
    <script src="/back/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="/back/assets/js/vendors/chart.js"></script>

    <script src="/back/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="/back/assets/js/vendors/flatpickr.js"></script>
    @kropifyScripts
    <script>
        window.addEventListener('showToastr', function(e) {
            $().notifa({
                vers: 1,
                cssClass: e.detail[0].type,
                html: e.detail[0].message,
                delay: 2500
            })
        });
    </script>
    @stack('scripts')
</body>

</html>
