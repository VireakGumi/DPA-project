@extends('back.layout.user.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
    <main>
        <section class="py-8 bg-cover bg-light">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div>
                            <div class="text-center text-md-start">
                                <!-- heading -->
                                <h1 class="display-5 fw-bold mb-3">Professional WordPress Themes & Website Templates for any
                                    project</h1>
                                <!-- lead -->
                                <p class="lead">Discover thousands of easy to customize themes, templates & CMS products,
                                    made by world-class developers.</p>
                            </div>
                            <div class="mt-8">
                                <!-- card -->
                                <div class="bg-white rounded-md-pill shadow rounded-3 mb-4">
                                    <!-- card body -->
                                    <div class="p-md-2 p-4">
                                        <!-- form -->
                                        <form method="GET" action="{{ route('u.search') }}" class="row g-1">
                                            @csrf
                                            <div class="col-12 col-md-9">
                                                <!-- input -->
                                                <div class="input-group mb-2 mb-md-0 border-md-0 border rounded-pill">
                                                    <!-- input group -->
                                                    <span
                                                        class="input-group-text bg-transparent border-0 pe-0 ps-md-3 ps-md-0"
                                                        id="searchCategory">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" fill="currentColor" class="bi bi-search"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                                        </svg>
                                                    </span>
                                                    <!-- search -->
                                                    <input type="search"
                                                        class="form-control rounded-pill border-0 ps-3 form-focus-none"
                                                        placeholder="e.g. responsive website" aria-label="Job Title"
                                                        aria-describedby="searchCategory">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 text-end d-grid">
                                                <!-- button -->
                                                <button type="submit" class="btn btn-primary rounded-pill">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- text -->
                                <span class="fs-4">Currently listing 30,642 jobs from 5,717 companies</span>
                            </div>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-5 col-12 text-center">
                        <div class="position-relative d-none d-lg-block">
                            <img src="/back/assets/images/job/png/job-hero-section.png" class="img-fluid" alt="img">
                            <div class="position-absolute top-0 mt-7 ms-n6 ms-md-n6 ms-lg-n12 start-0">
                                <img src="/back/assets/images/job/job-hero-block-1.svg" class="img-fluid" alt="img">
                            </div>
                            <div class="position-absolute bottom-0 mb-8 me-n6 me-md-n4 me-lg-n12 end-0">
                                <img src="/back/assets/images/job/job-hero-block-2.svg" class="img-fluid" alt="img">
                            </div>
                            <div class="position-absolute bottom-0 mb-n4 ms-n1 ms-md-n4 ms-lg-n7 start-0">
                                <img src="/back/assets/images/job/job-hero-block-3.svg" class="img-fluid" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-lg-8 pb-6">
            <div class="container pb-lg-6">
                <!--row-->
                <div class="row">
                    <div class="col-12">
                        <div class="text-center mb-6">
                            <!--heading-->
                            <h2 class="mb-0 h1">Explore Templates by Category</h2>
                        </div>
                    </div>
                </div>
                <!--row-->
                <div class="row gy-4">
                    <div class="col-xxl-2 col-md-4 col-12">
                        <!--card-->
                        <a href="#!" class="card card-border-primary rounded-4">
                            <!--card body-->
                            <div class="card-body d-flex flex-column gap-4 text-center">
                                <div>
                                    <!--icon-->
                                    <div class="icon-shape icon-xxl bg-light-primary rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="bi bi-gear text-primary" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0">
                                            </path>
                                            <path
                                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <!--content-->
                                <div>
                                    <h3 class="mb-0">WordPress Themes</h3>
                                    <span>Thousands of WordPress themes</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-2 col-md-4 col-12">
                        <!--card-->
                        <a href="#!" class="card card-border-primary rounded-4">
                            <!--card body-->
                            <div class="card-body d-flex flex-column gap-4 text-center">
                                <div>
                                    <!--icon-->
                                    <div class="icon-shape icon-xxl bg-light-danger rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="bi bi-palette2 text-danger" viewBox="0 0 16 16">
                                            <path
                                                d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 .5.5v5.277l4.147-4.131a.5.5 0 0 1 .707 0l3.535 3.536a.5.5 0 0 1 0 .708L10.261 10H15.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5H3a3 3 0 0 1-2.121-.879A3 3 0 0 1 0 13.044m6-.21 7.328-7.3-2.829-2.828L6 7.188zM4.5 13a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0M15 15v-4H9.258l-4.015 4zM0 .5v12.495zm0 12.495V13z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <!--content-->
                                <div>
                                    <h3 class="mb-0">Marketing Templates</h3>
                                    <span>Email, newsletter and landing page templates.</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-2 col-md-4 col-12">
                        <!--card-->
                        <a href="#!" class="card card-border-primary rounded-4">
                            <!--card body-->
                            <div class="card-body d-flex flex-column gap-4 text-center">
                                <div>
                                    <!--icon-->
                                    <div class="icon-shape icon-xxl bg-light-info rounded-circle">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.515 12.0001C23.5962 7.67381 25.1675 3.20256 22.9825 1.01756C20.7975 -1.16744 16.3262 0.403809 12 3.48506C7.67375 0.403809 3.2025 -1.16744 1.0175 1.01756C-1.1675 3.20256 0.403748 7.67381 3.485 12.0001C0.403748 16.3263 -1.1675 20.7976 1.0175 22.9826C1.72125 23.6863 2.66125 24.0001 3.75625 24.0001C6.06625 24.0001 9.06625 22.6038 12.0062 20.5151C14.9337 22.6038 17.9337 24.0001 20.25 24.0001C21.345 24.0001 22.2862 23.6851 22.9887 22.9826C25.1675 20.7976 23.5962 16.3263 20.515 12.0001ZM21.5687 2.43131C22.5237 3.38631 21.8787 6.48131 19.2537 10.3413C18.4233 9.31329 17.5392 8.32984 16.605 7.39506C15.6701 6.46218 14.6867 5.57929 13.6587 4.75006C17.5187 2.12506 20.6137 1.47506 21.5687 2.43131ZM18.0362 12.0001C17.1517 13.119 16.2017 14.1846 15.1912 15.1913C14.1846 16.2018 13.119 17.1518 12 18.0363C10.881 17.1518 9.81543 16.2018 8.80875 15.1913C7.79827 14.1846 6.84828 13.119 5.96375 12.0001C7.73838 9.76376 9.7637 7.73844 12 5.96381C13.119 6.84834 14.1846 7.79834 15.1912 8.80881C16.2017 9.81549 17.1517 10.8811 18.0362 12.0001ZM2.43125 2.43131C2.70625 2.15506 3.16 2.01256 3.75875 2.01256C5.23625 2.01256 7.595 2.87506 10.34 4.75006C9.31305 5.57996 8.33005 6.46283 7.395 7.39506C6.46212 8.32993 5.57923 9.31338 4.75 10.3413C2.125 6.48131 1.47625 3.38631 2.43125 2.43131ZM2.43125 21.5688C1.47625 20.6138 2.125 17.5188 4.75 13.6588C5.58044 14.6868 6.46459 15.6703 7.39875 16.6051C8.33301 17.5372 9.31518 18.4201 10.3412 19.2501C6.48125 21.8751 3.38625 22.5251 2.43125 21.5688ZM21.5687 21.5688C20.6137 22.5251 17.5187 21.8788 13.6587 19.2538C14.6862 18.4227 15.6696 17.5386 16.605 16.6051C17.5379 15.6702 18.4208 14.6867 19.25 13.6588C21.875 17.5188 22.5237 20.6138 21.5687 21.5688ZM13.5 12.0001C13.5 12.2967 13.412 12.5867 13.2472 12.8334C13.0824 13.0801 12.8481 13.2723 12.574 13.3859C12.2999 13.4994 11.9983 13.5291 11.7074 13.4712C11.4164 13.4134 11.1491 13.2705 10.9393 13.0607C10.7296 12.8509 10.5867 12.5837 10.5288 12.2927C10.4709 12.0017 10.5006 11.7001 10.6142 11.426C10.7277 11.1519 10.92 10.9177 11.1666 10.7529C11.4133 10.588 11.7033 10.5001 12 10.5001C12.3978 10.5001 12.7794 10.6581 13.0607 10.9394C13.342 11.2207 13.5 11.6022 13.5 12.0001Z"
                                                fill="#0EA5E9"></path>
                                        </svg>
                                    </div>
                                </div>
                                <!--content-->
                                <div>
                                    <h3 class="mb-0">eCommerce Templates</h3>
                                    <span>beautiful website templates</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-2 col-md-4 col-12">
                        <!--card-->
                        <a href="#!" class="card card-border-primary rounded-4">
                            <!--card body-->
                            <div class="card-body d-flex flex-column gap-4 text-center">
                                <div>
                                    <!--icon-->
                                    <div class="icon-shape icon-xxl bg-light-success rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="bi bi-briefcase text-success" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5m1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0M1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <!--content-->
                                <div>
                                    <h3 class="mb-0">Site Templates</h3>
                                    <span>HTML and website templates</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-2 col-md-4 col-12">
                        <!--card-->
                        <a href="#!" class="card card-border-primary rounded-4">
                            <!--card body-->
                            <div class="card-body d-flex flex-column gap-4 text-center">
                                <div>
                                    <!--icon-->
                                    <div class="icon-shape icon-xxl bg-light-warning rounded-circle">
                                        <svg width="24" height="24" viewBox="0 0 26 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21 14.6787V7.32125C21.0006 7.03737 20.9269 6.75828 20.7861 6.51177C20.6453 6.26526 20.4423 6.05994 20.1975 5.91625L13.78 2.21C13.5429 2.07308 13.2738 2.001 13 2.001C12.7262 2.001 12.4572 2.07308 12.22 2.21L5.80375 5.91625C5.55868 6.05978 5.35551 6.26503 5.21449 6.51155C5.07346 6.75807 4.99951 7.03724 5 7.32125V14.6787C4.99938 14.9626 5.07315 15.2417 5.21395 15.4882C5.35474 15.7347 5.55767 15.9401 5.8025 16.0837L12.22 19.79C12.4572 19.9268 12.7262 19.9988 13 19.9988C13.2738 19.9988 13.5428 19.9268 13.78 19.79L20.1963 16.0837C20.4413 15.9402 20.6445 15.735 20.7855 15.4884C20.9265 15.2419 21.0005 14.9628 21 14.6787ZM13 4.06875L18.0737 7L13 9.92875L7.92625 7L13 4.06875ZM7 8.77375L12 11.6612V17.3538L7 14.4662V8.77375ZM14 17.3538V11.6612L19 8.77375V14.4662L14 17.3538ZM26 1V6C26 6.26522 25.8946 6.51957 25.7071 6.70711C25.5196 6.89464 25.2652 7 25 7C24.7348 7 24.4804 6.89464 24.2929 6.70711C24.1054 6.51957 24 6.26522 24 6V2H20C19.7348 2 19.4804 1.89464 19.2929 1.70711C19.1054 1.51957 19 1.26522 19 1C19 0.734784 19.1054 0.48043 19.2929 0.292893C19.4804 0.105357 19.7348 0 20 0H25C25.2652 0 25.5196 0.105357 25.7071 0.292893C25.8946 0.48043 26 0.734784 26 1ZM7 21C7 21.2652 6.89464 21.5196 6.70711 21.7071C6.51957 21.8946 6.26522 22 6 22H1C0.734784 22 0.48043 21.8946 0.292893 21.7071C0.105357 21.5196 0 21.2652 0 21V16C0 15.7348 0.105357 15.4804 0.292893 15.2929C0.48043 15.1054 0.734784 15 1 15C1.26522 15 1.51957 15.1054 1.70711 15.2929C1.89464 15.4804 2 15.7348 2 16V20H6C6.26522 20 6.51957 20.1054 6.70711 20.2929C6.89464 20.4804 7 20.7348 7 21ZM26 16V21C26 21.2652 25.8946 21.5196 25.7071 21.7071C25.5196 21.8946 25.2652 22 25 22H20C19.7348 22 19.4804 21.8946 19.2929 21.7071C19.1054 21.5196 19 21.2652 19 21C19 20.7348 19.1054 20.4804 19.2929 20.2929C19.4804 20.1054 19.7348 20 20 20H24V16C24 15.7348 24.1054 15.4804 24.2929 15.2929C24.4804 15.1054 24.7348 15 25 15C25.2652 15 25.5196 15.1054 25.7071 15.2929C25.8946 15.4804 26 15.7348 26 16ZM0 6V1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0H6C6.26522 0 6.51957 0.105357 6.70711 0.292893C6.89464 0.48043 7 0.734784 7 1C7 1.26522 6.89464 1.51957 6.70711 1.70711C6.51957 1.89464 6.26522 2 6 2H2V6C2 6.26522 1.89464 6.51957 1.70711 6.70711C1.51957 6.89464 1.26522 7 1 7C0.734784 7 0.48043 6.89464 0.292893 6.70711C0.105357 6.51957 0 6.26522 0 6Z"
                                                fill="#C28135"></path>
                                        </svg>
                                    </div>
                                </div>
                                <!--content-->
                                <div>
                                    <h3 class="mb-0">CMS Templates</h3>
                                    <span>Over 1,700 CMS website templates</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-2 col-md-4 col-12">
                        <!--card-->
                        <a href="#!" class="card card-border-primary rounded-4">
                            <!--card body-->
                            <div class="card-body d-flex flex-column gap-4 text-center">
                                <div>
                                    <!--icon-->
                                    <div class="icon-shape icon-xxl bg-light-primary rounded-circle">
                                        <svg width="24" height="24" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.2925 13.2925L4 16.5863L1.7075 14.2925C1.56764 14.1525 1.38939 14.0571 1.19531 14.0185C1.00122 13.9798 0.800033 13.9996 0.61721 14.0754C0.434387 14.1511 0.278151 14.2794 0.16828 14.444C0.0584092 14.6086 -0.000155428 14.8021 3.09801e-07 15V21C3.09801e-07 21.2652 0.105357 21.5196 0.292894 21.7071C0.48043 21.8946 0.734784 22 1 22H7C7.1979 22.0002 7.39139 21.9416 7.55598 21.8317C7.72058 21.7218 7.84887 21.5656 7.92462 21.3828C8.00038 21.2 8.02018 20.9988 7.98153 20.8047C7.94288 20.6106 7.84751 20.4324 7.7075 20.2925L5.41375 18L8.7075 14.7075C8.89514 14.5199 9.00056 14.2654 9.00056 14C9.00056 13.7346 8.89514 13.4801 8.7075 13.2925C8.51986 13.1049 8.26536 12.9994 8 12.9994C7.73464 12.9994 7.48014 13.1049 7.2925 13.2925ZM2 20V17.4137L4.58625 20H2ZM5.41375 4L7.7075 1.7075C7.84751 1.56764 7.94288 1.38939 7.98153 1.19531C8.02018 1.00122 8.00038 0.800033 7.92462 0.61721C7.84887 0.434387 7.72058 0.278151 7.55598 0.16828C7.39139 0.0584092 7.1979 -0.000155428 7 3.09801e-07H1C0.734784 3.09801e-07 0.48043 0.105357 0.292894 0.292894C0.105357 0.48043 3.09801e-07 0.734784 3.09801e-07 1V7C-0.000155428 7.1979 0.0584092 7.39139 0.16828 7.55598C0.278151 7.72058 0.434387 7.84887 0.61721 7.92462C0.800033 8.00038 1.00122 8.02018 1.19531 7.98153C1.38939 7.94288 1.56764 7.84751 1.7075 7.7075L4 5.41375L7.2925 8.7075C7.48014 8.89514 7.73464 9.00056 8 9.00056C8.26536 9.00056 8.51986 8.89514 8.7075 8.7075C8.89514 8.51986 9.00056 8.26536 9.00056 8C9.00056 7.73464 8.89514 7.48014 8.7075 7.2925L5.41375 4ZM2 4.58625V2H4.58625L2 4.58625ZM21 3.09801e-07H15C14.8021 -0.000155428 14.6086 0.0584092 14.444 0.16828C14.2794 0.278151 14.1511 0.434387 14.0754 0.61721C13.9996 0.800033 13.9798 1.00122 14.0185 1.19531C14.0571 1.38939 14.1525 1.56764 14.2925 1.7075L16.5863 4L13.2925 7.2925C13.1049 7.48014 12.9994 7.73464 12.9994 8C12.9994 8.26536 13.1049 8.51986 13.2925 8.7075C13.4801 8.89514 13.7346 9.00056 14 9.00056C14.2654 9.00056 14.5199 8.89514 14.7075 8.7075L18 5.41375L20.2925 7.7075C20.4324 7.84751 20.6106 7.94288 20.8047 7.98153C20.9988 8.02018 21.2 8.00038 21.3828 7.92462C21.5656 7.84887 21.7218 7.72058 21.8317 7.55598C21.9416 7.39139 22.0002 7.1979 22 7V1C22 0.734784 21.8946 0.48043 21.7071 0.292894C21.5196 0.105357 21.2652 3.09801e-07 21 3.09801e-07ZM20 4.58625L17.4137 2H20V4.58625ZM21.3825 14.0763C21.1998 14.0005 20.9987 13.9805 20.8047 14.019C20.6107 14.0575 20.4324 14.1527 20.2925 14.2925L18 16.5863L14.7075 13.2925C14.5199 13.1049 14.2654 12.9994 14 12.9994C13.7346 12.9994 13.4801 13.1049 13.2925 13.2925C13.1049 13.4801 12.9994 13.7346 12.9994 14C12.9994 14.2654 13.1049 14.5199 13.2925 14.7075L16.5863 18L14.2925 20.2925C14.1525 20.4324 14.0571 20.6106 14.0185 20.8047C13.9798 20.9988 13.9996 21.2 14.0754 21.3828C14.1511 21.5656 14.2794 21.7218 14.444 21.8317C14.6086 21.9416 14.8021 22.0002 15 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V15C22 14.8022 21.9413 14.6089 21.8314 14.4445C21.7214 14.28 21.5652 14.1519 21.3825 14.0763ZM20 20H17.4137L20 17.4137V20Z"
                                                fill="#754FFE"></path>
                                        </svg>
                                    </div>
                                </div>
                                <!--content-->
                                <div>
                                    <h3 class="mb-0">Blogging</h3>
                                    <span>Blogger templates and themes</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- button -->
            <div class="col-12 mt-4 text-center">
                <a href="#" class="btn btn-outline-primary">View all categories</a>
            </div>
        </section>
        <section class="py-4 bg-light">
            <!-- row -->
            <div class="container mb-lg-8">
                <div class="row text-center">
                    <div class="col-md-12 px-lg-8 mb-8 mt-6">
                        <!-- heading -->
                        <h2 class="h1 fw-bold ">Check out our newest themes and templates</h2>
                        <!-- text -->
                        <p class="mb-0 fs-4">We carefully review new entries from our community one by one to make sure
                            they meet high-quality design and functionality standards. From multipurpose themes to niche
                            templates, you’ll always find something that catches your eye.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Nav tab -->
                        <ul class="nav nav-lb-tab mb-6 bg-gray-200 px-5 rounded-3" id="pills-tab" role="tablist">
                            <!-- nav item -->
                            <li class="nav-item ms-0" role="presentation">
                                <a class="nav-link active" id="pills-development-tab" data-bs-toggle="pill"
                                    href="#pills-development" role="tab" aria-controls="pills-development"
                                    aria-selected="false" tabindex="-1">
                                    All categories
                                </a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-design-tab" data-bs-toggle="pill" href="#pills-design"
                                    role="tab" aria-controls="pills-design" aria-selected="false"
                                    tabindex="-1">Site Templates</a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-marketing-tab" data-bs-toggle="pill"
                                    href="#pills-marketing" role="tab" aria-controls="pills-marketing"
                                    aria-selected="true">
                                    WordPress
                                </a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-business-tab" data-bs-toggle="pill" href="#pills-business"
                                    role="tab" aria-controls="pills-business" aria-selected="false" tabindex="-1">
                                    CMS Themes
                                </a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-health-tab" data-bs-toggle="pill" href="#pills-health"
                                    role="tab" aria-controls="pills-health" aria-selected="false"
                                    tabindex="-1">eCommerce</a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-health-tab" data-bs-toggle="pill" href="#pills-health"
                                    role="tab" aria-controls="pills-health" aria-selected="false"
                                    tabindex="-1">Blogging</a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-health-tab" data-bs-toggle="pill" href="#pills-health"
                                    role="tab" aria-controls="pills-health" aria-selected="false"
                                    tabindex="-1">Marketing</a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-health-tab" data-bs-toggle="pill" href="#pills-health"
                                    role="tab" aria-controls="pills-health" aria-selected="false"
                                    tabindex="-1">Forums</a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-health-tab" data-bs-toggle="pill" href="#pills-health"
                                    role="tab" aria-controls="pills-health" aria-selected="false"
                                    tabindex="-1">Muse Templates</a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-health-tab" data-bs-toggle="pill" href="#pills-health"
                                    role="tab" aria-controls="pills-health" aria-selected="false"
                                    tabindex="-1">Jamstack</a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-health-tab" data-bs-toggle="pill" href="#pills-health"
                                    role="tab" aria-controls="pills-health" aria-selected="false"
                                    tabindex="-1">Courses</a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-health-tab" data-bs-toggle="pill" href="#pills-health"
                                    role="tab" aria-controls="pills-health" aria-selected="false"
                                    tabindex="-1">Template Kits</a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-health-tab" data-bs-toggle="pill" href="#pills-health"
                                    role="tab" aria-controls="pills-health" aria-selected="false" tabindex="-1">UI
                                    Templates</a>
                            </li>
                        </ul>
                        <!-- Tab content -->
                        <div class="tab-content" id="pills-tabContent">
                            <!-- tab content -->
                            <div class="tab-pane fade" id="pills-development" role="tabpanel"
                                aria-labelledby="pills-development-tab">
                                <!-- row -->

                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-javascript.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">How to easily create a website with
                                                        JavaScript</a></h4>

                                                <small>By: Claire Evans</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$40.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enroll
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-css.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Beginner</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2">
                                                    <a href="../course-single.html" class="text-inherit">CSS: ultimate CSS
                                                        course from beginner to advanced</a>
                                                </h4>

                                                <small>By: Carolyn Welborn</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(8,890)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$30.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-gatsby.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">The Gatsby Course: build web application</a>
                                                </h4>

                                                <small>By: Floyd Amall</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$34.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-wordpress.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Advance</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2">
                                                    <a href="../course-single.html" class="text-inherit">WordPress:
                                                        introduction to wordpress for beginners</a>
                                                </h4>

                                                <small>By: Victor Elliott</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$39.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-react.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">How to easily create a website with React</a>
                                                </h4>
                                                <!-- List -->
                                                <small>By: Morris Mccoy</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(7,700)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$29.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-graphql.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">GraphQL: introduction to graphQL for
                                                        beginners</a></h4>

                                                <small>By: Michael Cundiff</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$29.00</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit btn btn-outline-warning">
                                                            <i class="fe fe-shopping-cart align-middle me-2"></i>
                                                        </a>
                                                        <a href="#" class="text-inherit btn btn-outline-primary">
                                                            Live Preview
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-angular.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Advance</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">Angular - the complete guide for beginner</a>
                                                </h4>

                                                <small>By: Jeffrey McCoy</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(8,890)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$49.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-python.jpg" alt="card"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">The Python Course: build web application</a>
                                                </h4>

                                                <small>By: Douglas Howell</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$19.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tab content -->
                            <div class="tab-pane fade" id="pills-design" role="tabpanel"
                                aria-labelledby="pills-design-tab">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-graphql.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">GraphQL: introduction to graphQL for
                                                        beginners</a></h4>

                                                <small>By: Michael Cundiff</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$29.00</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit btn btn-outline-warning">
                                                            <i class="fe fe-shopping-cart align-middle me-2"></i>
                                                        </a>
                                                        <a href="#" class="text-inherit btn btn-outline-primary">
                                                            Live Preview
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-angular.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Advance</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">Angular - the complete guide for beginner</a>
                                                </h4>

                                                <small>By: Jeffrey McCoy</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(8,890)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$49.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-python.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">The Python Course: build web application</a>
                                                </h4>

                                                <small>By: Douglas Howell</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$19.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-javascript.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">How to easily create a website with
                                                        JavaScript</a></h4>

                                                <small>By: Claire Evans</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$39.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enroll
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-css.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Beginner</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2">
                                                    <a href="../course-single.html" class="text-inherit">CSS: ultimate
                                                        CSS course from beginner to advanced</a>
                                                </h4>

                                                <small>By: Carolyn Welborn</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(8,890)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$30.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-gatsby.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">The Gatsby Course: build web application</a>
                                                </h4>

                                                <small>By: Floyd Amall</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$34.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-wordpress.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Advance</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2">
                                                    <a href="../course-single.html" class="text-inherit">WordPress:
                                                        introduction to wordpress for beginners</a>
                                                </h4>

                                                <small>By: Victor Elliott</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$39.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-react.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">How to easily create a website with React</a>
                                                </h4>
                                                <!-- List -->
                                                <small>By: Morris Mccoy</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(7,700)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$29.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Pane -->
                            <div class="tab-pane fade active show" id="pills-marketing" role="tabpanel"
                                aria-labelledby="pills-marketing-tab">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-react.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">How to easily create a website with React</a>
                                                </h4>
                                                <!-- List -->
                                                <small>By: Morris Mccoy</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(7,700)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$29.00</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit btn btn-outline-warning">
                                                            <i class="fe fe-shopping-cart align-middle me-2"></i>
                                                        </a>
                                                        <a href="#" class="text-inherit btn btn-outline-primary">
                                                            Live Preview
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-graphql.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">GraphQL: introduction to graphQL for
                                                        beginners</a></h4>

                                                <small>By: Michael Cundiff</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$29.00</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit btn btn-outline-warning">
                                                            <i class="fe fe-shopping-cart align-middle me-2"></i>
                                                        </a>
                                                        <a href="#" class="text-inherit btn btn-outline-primary">
                                                            Live Preview
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-angular.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Advance</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">Angular - the complete guide for beginner</a>
                                                </h4>

                                                <small>By: Jeffrey McCoy</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(8,890)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$29.00</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit btn btn-outline-warning">
                                                            <i class="fe fe-shopping-cart align-middle me-2"></i>
                                                        </a>
                                                        <a href="#" class="text-inherit btn btn-outline-primary">
                                                            Live Preview
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-css.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Beginner</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2">
                                                    <a href="../course-single.html" class="text-inherit">CSS: ultimate
                                                        CSS course from beginner to advanced</a>
                                                </h4>

                                                <small>By: Carolyn Welborn</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(8,890)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$30.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-gatsby.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">The Gatsby Course: build web application</a>
                                                </h4>

                                                <small>By: Floyd Amall</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$34.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-javascript.jpg"
                                                    alt="course" class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">How to easily create a website with
                                                        JavaScript</a></h4>

                                                <small>By: Claire Evans</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$39.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-wordpress.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Advance</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2">
                                                    <a href="../course-single.html" class="text-inherit">WordPress:
                                                        introduction to wordpress for beginners</a>
                                                </h4>

                                                <small>By: Victor Elliott</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$39.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-python.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">The Python Course: build web application</a>
                                                </h4>

                                                <small>By: Douglas Howell</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$19.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-business" role="tabpanel"
                                aria-labelledby="pills-business-tab">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-wordpress.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Advance</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2">
                                                    <a href="../course-single.html" class="text-inherit">WordPress:
                                                        introduction to wordpress for beginners</a>
                                                </h4>

                                                <small>By: Victor Elliott</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$39.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-python.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">The Python Course: build web application</a>
                                                </h4>

                                                <small>By: Douglas Howell</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$19.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-react.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">How to easily create a website with React</a>
                                                </h4>
                                                <!-- List -->
                                                <small>By: Morris Mccoy</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(7,700)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$29.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-graphql.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">GraphQL: introduction to graphQL for
                                                        beginners</a></h4>

                                                <small>By: Michael Cundiff</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$29.00</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit btn btn-outline-warning">
                                                            <i class="fe fe-shopping-cart align-middle me-2"></i>
                                                        </a>
                                                        <a href="#" class="text-inherit btn btn-outline-primary">
                                                            Live Preview
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-angular.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Advance</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">Angular - the complete guide for beginner</a>
                                                </h4>

                                                <small>By: Jeffrey McCoy</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(8,890)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$49.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-javascript.jpg"
                                                    alt="course" class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">How to easily create a website with
                                                        JavaScript</a></h4>

                                                <small>By: Claire Evans</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$39.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-css.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Beginner</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2">
                                                    <a href="../course-single.html" class="text-inherit">CSS: ultimate
                                                        CSS course from beginner to advanced</a>
                                                </h4>

                                                <small>By: Carolyn Welborn</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(8,890)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$30.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-gatsby.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">The Gatsby Course: build web application</a>
                                                </h4>

                                                <small>By: Floyd Amall</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$34.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-health" role="tabpanel"
                                aria-labelledby="pills-health-tab">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-python.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">The Python Course: build web application</a>
                                                </h4>

                                                <small>By: Douglas Howell</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$19.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-wordpress.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Advance</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2">
                                                    <a href="../course-single.html" class="text-inherit">WordPress:
                                                        introduction to wordpress for beginners</a>
                                                </h4>

                                                <small>By: Victor Elliott</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$39.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-react.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">How to easily create a website with React</a>
                                                </h4>
                                                <!-- List -->
                                                <small>By: Morris Mccoy</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">3.5</span>
                                                    <span class="fs-6">(7,700)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$29.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-graphql.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">GraphQL: introduction to graphQL for
                                                        beginners</a></h4>

                                                <small>By: Michael Cundiff</small>
                                                <div class="d-flex align-text-top mt-3">
                                                    <span class="fs-6">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </span>

                                                    <span class="text-warning">4</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$29.00</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit btn btn-outline-warning">
                                                            <i class="fe fe-shopping-cart align-middle me-2"></i>
                                                        </a>
                                                        <a href="#" class="text-inherit btn btn-outline-primary">
                                                            Live Preview
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-javascript.jpg"
                                                    alt="course" class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">How to easily create a website with
                                                        JavaScript</a></h4>

                                                <small>By: Claire Evans</small>
                                                <div class="d-flex align-text-top mt-3">
                                                    <span class="fs-6">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="text-warning">3.5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$39.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-css.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Beginner</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2">
                                                    <a href="../course-single.html" class="text-inherit">CSS: ultimate
                                                        CSS course from beginner to advanced</a>
                                                </h4>

                                                <small>By: Carolyn Welborn</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">5</span>
                                                    <span class="fs-6">(8,890)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$30.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-gatsby.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">The Gatsby Course: build web application</a>
                                                </h4>

                                                <small>By: Floyd Amall</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$34.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="../course-single.html"><img
                                                    src="/back/assets/images/course/course-angular.jpg" alt="course"
                                                    class="card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Advance</span>
                                                    <a href="#" class="fs-5"><i
                                                            class="fe fe-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="../course-single.html"
                                                        class="text-inherit">Angular - the complete guide for beginner</a>
                                                </h4>

                                                <small>By: Jeffrey McCoy</small>
                                                <div class="lh-1 mt-3">
                                                    <span class="align-text-top">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(8,890)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$49.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="#" class="text-inherit">
                                                            <i
                                                                class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- button -->
            <div class="col-12 mt-8 text-center">
                <a href="#" class="btn btn-outline-primary">View more new items</a>
            </div>
        </section>
    </main>
@endsection
