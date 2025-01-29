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
    <!-- Bootstrap JS (ensure this is included after Bootstrap CSS) -->

    <!-- darkmode js -->
    <script src="/back/assets/js/vendors/darkMode.js"></script>

    <!-- Libs CSS -->
    <link href="/back/assets/fonts/feather/feather.css" rel="stylesheet" />
    <link href="/back/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="/back/assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
    <link href="/back/assets/libs/dropzone/dist/dropzone.css" rel="stylesheet" />

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
        <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="vh-100" data-simplebar>
                <!-- Brand logo -->
                <a class="navbar-brand" href="/back/assets/index.html">
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
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('admin.post') ? '' : 'collapsed' }}" href="#"
                            data-bs-toggle="collapse" data-bs-target="#navCMS"
                            aria-expanded="{{ Route::is('admin.post') ? 'true' : 'false' }}" aria-controls="navCMS">
                            <i class="nav-icon fe fe-book-open me-2"></i>
                            CMS
                        </a>
                        <div id="navCMS"
                            class="collapse {{ Route::is('admin.post') || Route::is('admin.postOverview') ? 'show' : '' }}"
                            data-bs-parent="#sideNavbar" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is(patterns: 'admin.postOverview') ? 'active' : '' }}"
                                        href="{{ route('admin.postOverview') }}">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is('admin.post') ? 'active' : '' }}"
                                        href="{{ route('admin.post') }}">All
                                        Post</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/back/assets/pages/dashboard/admin-cms-post-new.html">New
                                        Post</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "
                                        href="/back/assets/pages/dashboard/admin-cms-post-category.html">Category</a>
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
                        <a class="nav-link " href="/back/assets/pages/dashboard/task-kanban.html">
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

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" style="width: 600px">
        <div class="offcanvas-body" data-simplebar>
            <div class="offcanvas-header px-2 pt-0">
                <h3 class="offcanvas-title" id="offcanvasExampleLabel">Name & Description</h3>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <!-- card body -->
            <div class="container">
                <!-- form -->
                <form class="row needs-validation" novalidate>
                    <!-- form group -->
                    <div class="mb-3 col-12">
                        <label class="form-label" for="projectTitle">
                            Project Title
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="projectTitle"
                            placeholder="Enter project title" required />
                        <div class="invalid-feedback">Please enter project title</div>
                    </div>
                    <!-- form group -->
                    <div class="mb-3 col-12">
                        <label class="form-label" for="keyFeature">
                            Key Features
                        </label>
                        <input type="text" class="form-control mb-3 " id="keyFeatures0"
                            placeholder="Enter 1st key feature" required />
                        <input type="text" class="form-control mb-3 " id="keyFeatures1"
                            placeholder="Enter 2nd key feature" required />
                        <input type="text" class="form-control" id="keyFeatures2"
                            placeholder="Enter 3rd key feature" required />
                        <div class="invalid-feedback">Please enter key features</div>
                    </div>
                    <!-- form group -->
                    <div class="mb-3 col-12">
                        <label class="form-label" for="description">Description</label>
                        <textarea class="form-control" id="description" placeholder="Enter brief about project..." rows="3" required></textarea>
                        <div class="invalid-feedback">Please enter project description</div>
                    </div>
                    <!-- form group -->
                    <div class="col-md-3 col-12 mb-4">
                        <div>
                            <!-- logo -->
                            <h5 class="mb-3">Project Logo</h5>
                            <div class="icon-shape icon-xxl border rounded position-relative">
                                <span class="position-absolute"><i class="bi bi-image fs-3"></i></span>
                                <input class="form-control border-0 opacity-0" type="file ">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <h5 class="mb-3">Cover Image</h5>
                        <div id="my-dropzone" class="dropzone mt-4 border-dashed rounded-2 min-h-0"></div>
                    </div>
                    <div class="col-md-8"></div>
                    <!-- button -->
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button type="button" class="btn btn-outline-primary ms-2" data-bs-dismiss="offcanvas"
                            aria-label="Close">Close</button>
                    </div>
                </form>
            </div>
        </div>
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

    <script src="/back/assets/js/theme.min.js"></script>

    <script src="/back/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="/back/assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
    <script src="/back/assets/js/vendors/tooltip.js"></script>
    <script src="/back/assets/js/vendors/dropzone.js"></script>
    <script src="/back/assets/js/vendors/validation.js"></script>


    <script src="/back/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="/back/assets/js/vendors/flatpickr.js"></script>
    @kropifyScripts
    <script>
        window.addEventListener('showToastr', function(e) {
            $().notifa({
                vers: 2,
                cssClass: e.detail[0].type,
                html: e.detail[0].message,
                delay: 2500
            })
        });
    </script>
    @stack('scripts')
</body>

</html>
