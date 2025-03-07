@extends('back.layout.user.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
    <main>
        <!-- Page header -->
        <section class="py-7 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 col-12">
                        <!-- text -->
                        <div>
                            <div class="mb-4">
                                <h1 class="fw-bold mb-4">
                                    Showing jobs for '
                                    <span class="text-primary">it manager</span>
                                    , India
                                </h1>
                            </div>
                            <div class="bg-white rounded-md-pill me-lg-8 shadow rounded-3">
                                <!-- card body -->
                                <div class="p-md-2 p-4">
                                    <!-- form -->
                                    <form class="row g-1">
                                        <div class="col-12 col-md-5">
                                            <!-- input -->
                                            <div class="input-group mb-2 mb-md-0 border-md-0 border rounded-pill">
                                                <!-- input group -->
                                                <span class="input-group-text bg-transparent border-0 pe-0 ps-md-3 ps-md-0"
                                                    id="searchJob">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path
                                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <!-- search -->
                                                <input type="search"
                                                    class="form-control rounded-pill border-0 ps-3 form-focus-none"
                                                    placeholder="Job Title" aria-label="Job Title"
                                                    aria-describedby="searchJob">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <!-- inpt group -->
                                            <div class="input-group mb-3 mb-md-0 border-md-0 border rounded-pill">
                                                <span class="input-group-text bg-transparent border-0 pe-0 ps-md-0"
                                                    id="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                                                            <path
                                                                d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z">
                                                            </path>
                                                        </path>
                                                    </svg>
                                                </span>
                                                <!-- search -->
                                                <input type="search"
                                                    class="form-control rounded-pill border-0 ps-3 form-focus-none"
                                                    placeholder="Location" aria-label="Search Job"
                                                    aria-describedby="location">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3 text-end d-grid">
                                            <!-- button -->
                                            <button type="submit" class="btn btn-primary rounded-pill">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xl-3">
                        <div class="card border mb-6 mb-md-0 shadow-none">
                            <div class="card-header">
                                <h4 class="mb-0 fs-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-filter me-2" viewBox="0 0 16 16">
                                        <path
                                            d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z">
                                        </path>
                                    </svg>
                                    All Filters
                                </h4>
                            </div>
                            <div class="card-body py-3">
                                <a class="fs-5 text-dark fw-semibold" data-bs-toggle="collapse" href="#collapseExample"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Locations
                                    <span class="float-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                            </path>
                                        </svg>
                                    </span>
                                </a>
                                <div class="collapse show" id="collapseExample">
                                    <div class="mt-3">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckLocationOne">
                                            <label class="form-check-label" for="flexCheckLocationOne">
                                                Gujarat
                                                <span>(4)</span>
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckLocationTwo " checked="">
                                            <label class="form-check-label" for="flexCheckLocationTwo ">
                                                Rajasthan
                                                <span>(8)</span>
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckLocationThree ">
                                            <label class="form-check-label" for="flexCheckLocationThree ">
                                                Delhi
                                                <span>(12)</span>
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckLocationFour ">
                                            <label class="form-check-label" for="flexCheckLocationFour ">
                                                Pune
                                                <span>(412)</span>
                                            </label>
                                        </div>
                                        <a href="#" class="fw-semibold">12+ More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-top py-3">
                                <a class="fs-5 text-dark fw-semibold" data-bs-toggle="collapse"
                                    href="#collapseExampleSecond" role="button" aria-expanded="false"
                                    aria-controls="collapseExampleSecond">
                                    Salary
                                    <span class="float-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                            </path>
                                        </svg>
                                    </span>
                                </a>
                                <div class="collapse show" id="collapseExampleSecond">
                                    <div class="mt-3">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckSalaryOne">
                                            <label class="form-check-label" for="flexCheckSalaryOne">0-3 Lakhs</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckSalaryTwo " checked="">
                                            <label class="form-check-label" for="flexCheckSalaryTwo ">3-6 Lakhs</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckSalaryThree ">
                                            <label class="form-check-label" for="flexCheckSalaryThree ">6-10 Lakhs</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckSalaryFour ">
                                            <label class="form-check-label" for="flexCheckSalaryFour ">10-15 Lakhs</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-top py-3">
                                <h4 class="mb-4 fs-5">Experience</h4>
                                <div id="slider" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                    {{-- <div class="noUi-base">
                                        <div class="noUi-connects">
                                            <div class="noUi-connect"
                                                style="transform: translate(0%, 0px) scale(0.533333, 1);"></div>
                                        </div>
                                        <div class="noUi-origin"
                                            style="transform: translate(-46.6667%, 0px); z-index: 4;">
                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0"
                                                role="slider" aria-orientation="horizontal" aria-valuemin="0.0"
                                                aria-valuemax="60.0" aria-valuenow="32.0" aria-valuetext="32.00">
                                                <div class="noUi-touch-area"></div>
                                                <div class="noUi-tooltip">32</div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="d-flex justify-content-between mt-2 fs-6 text-dark">
                                    <span>4 yrs</span>
                                    <span>30 yrs</span>
                                </div>
                            </div>
                            <div class="card-body border-top py-3">
                                <a class="fs-5 text-dark fw-semibold" data-bs-toggle="collapse"
                                    href="#collapseExampleThird" role="button" aria-expanded="false"
                                    aria-controls="collapseExampleThird">
                                    Last updated
                                    <span class="float-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                            </path>
                                        </svg>
                                    </span>
                                </a>
                                <div class="collapse show" id="collapseExampleThird">
                                    <div class="mt-3">
                                        <select class="form-select">
                                            <option value="">Last Day</option>
                                            <option value="Newest">Newest</option>
                                            <option value="Oldest">Oldest</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-top py-3">
                                <a class="fs-5 text-dark fw-semibold" data-bs-toggle="collapse"
                                    href="#collapseExampleFourth" role="button" aria-expanded="false"
                                    aria-controls="collapseExampleFourth">
                                    Education
                                    <span class="float-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                            </path>
                                        </svg>
                                    </span>
                                </a>
                                <div class="collapse show" id="collapseExampleFourth">
                                    <div class="mt-3">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckEduFive">
                                            <label class="form-check-label" for="flexCheckEduFive">M.Tech</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckEduSix " checked="">
                                            <label class="form-check-label" for="flexCheckEduSix ">MBA / MTech</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckEduSeven ">
                                            <label class="form-check-label" for="flexCheckEduSeven ">Any Graduate</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckEduEight ">
                                            <label class="form-check-label" for="flexCheckEduEight ">Post Graduate</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pb-3 pt-0 d-grid">
                                <a href="#" class="btn btn-outline-secondary">Clear Data</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9 col-md-8 mb-6 mb-md-0">
                        <div class="row align-items-center mb-4">
                            <div class="col">
                                <p class="mb-0">1 - 20 of 86 IT Manager Jobs in India</p>
                            </div>
                            <div class="col-auto">
                                <div class="d-flex">
                                    <div class="nav btn-group flex-nowrap" role="tablist">
                                        <a href="job-grid.html"
                                            class="btn btn-outline-secondary btn-icon d-flex align-items-center">
                                            <span class="fe fe-grid"></span>
                                        </a>
                                        <a href="job-listing.html"
                                            class="btn btn-outline-secondary active btn-icon d-flex align-items-center">
                                            <span class="fe fe-list"></span>
                                        </a>
                                    </div>
                                    <div class="ms-3">
                                        <select class="form-select">
                                            <option value="">Sorting</option>
                                            <option value="Newest">Newest</option>
                                            <option value="Oldest">Oldest</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-bordered mb-3 card-hover cursor-pointer">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-xl-flex">
                                    <div class="mb-3 mb-md-0">
                                        <!-- Img -->
                                        <img src="/back/assets/images/job/job-brand-logo/job-list-logo-1.svg"
                                            alt="Geeks UI - Bootstrap 5 Template"
                                            class="icon-shape border rounded-circle">
                                    </div>
                                    <!-- text -->
                                    <div class="ms-xl-3 w-100 mt-3 mt-xl-1">
                                        <div class="d-flex justify-content-between mb-5">
                                            <div>
                                                <h3 class="mb-1 fs-4">
                                                    <a href="job-single.html" class="text-inherit">Software Engineer
                                                        (Web3/Crypto)</a>
                                                    <span class="badge bg-danger-soft ms-2">Featured Job</span>
                                                </h3>

                                                <div>
                                                    <span>at HelpDesk</span>
                                                    <span class="text-dark ms-2 fw-medium">
                                                        4.5
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                            height="10" fill="currentColor"
                                                            class="bi bi-star-fill text-warning align-baseline"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="ms-0">(131 Reviews)</span>
                                                </div>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bookmark bookmark"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="d-md-flex justify-content-between">
                                            <div class="mb-2 mb-md-0">
                                                <span class="me-2">
                                                    <i class="fe fe-briefcase"></i>
                                                    <span class="ms-1">1 - 5 years</span>
                                                </span>
                                                <span class="me-2">
                                                    <i class="fe fe-dollar-sign"></i>
                                                    <span class="ms-1">12k - 18k</span>
                                                </span>
                                                <span class="me-2">
                                                    <i class="fe fe-map-pin"></i>
                                                    <span class="ms-1">Ahmedabad, Gujarat</span>
                                                </span>
                                            </div>
                                            <div>
                                                <i class="fe fe-clock"></i>
                                                <span>21 hours ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card card-bordered mb-3 card-hover cursor-pointer">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-xl-flex">
                                    <div class="mb-3 mb-md-0">
                                        <!-- Img -->

                                        <img src="/back/assets/images/job/job-brand-logo/job-list-logo-2.svg"
                                            alt="Geeks Bootstrap 5 Template" class="icon-shape border rounded-circle">
                                    </div>
                                    <!-- text -->
                                    <div class="ms-xl-3 w-100 mt-3 mt-xl-1">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div>
                                                <h3 class="mb-1 fs-4"><a href="job-single.html"
                                                        class="text-inherit">Senior React Developer</a></h3>
                                                <div>
                                                    <span>at Airtable</span>
                                                    <span class="text-dark ms-2 fw-medium">
                                                        5.0
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                            height="10" fill="currentColor"
                                                            class="bi bi-star-fill text-warning align-baseline"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="ms-0">(324 Reviews)</span>
                                                </div>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bookmark bookmark"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="d-md-flex justify-content-between">
                                            <div class="mb-2 mb-lg-0">
                                                <span class="me-2">
                                                    <i class="fe fe-briefcase"></i>
                                                    <span class="ms-1">0 - 5 years</span>
                                                </span>
                                                <span class="me-2">
                                                    <i class="fe fe-dollar-sign"></i>
                                                    <span class="ms-1">5k - 8k</span>
                                                </span>
                                                <span class="me-2">
                                                    <i class="fe fe-map-pin"></i>
                                                    <span class="ms-1">Jaipur, Rajasthan</span>
                                                </span>
                                            </div>
                                            <div>
                                                <i class="fe fe-clock"></i>
                                                <span>1 day ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card card-bordered mb-3 card-hover cursor-pointer">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-xl-flex">
                                    <div class="mb-3 mb-md-0">
                                        <!-- Img -->

                                        <img src="/back/assets/images/job/job-brand-logo/job-list-logo-3.svg"
                                            alt="Geeks Bootstrap 5 Template" class="icon-shape border rounded-circle">
                                    </div>
                                    <!-- text -->
                                    <div class="ms-xl-3 w-100 mt-3 mt-xl-1">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div>
                                                <h3 class="mb-1 fs-4"><a href="job-single.html"
                                                        class="text-inherit">Software Engineer (Web3/Crypto)</a></h3>
                                                <div>
                                                    <span>at Square</span>
                                                    <span class="text-dark ms-2 fw-medium">
                                                        3.9
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                            height="10" fill="currentColor"
                                                            class="bi bi-star-fill text-warning align-baseline"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="ms-0">(424 Reviews)</span>
                                                </div>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bookmark bookmark"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-md-flex justify-content-between">
                                                <div class="mb-2 mb-md-0">
                                                    <span class="me-2">
                                                        <i class="fe fe-briefcase"></i>
                                                        <span class="ms-1">2 - 6 years</span>
                                                    </span>
                                                    <span class="me-2">
                                                        <i class="fe fe-dollar-sign"></i>
                                                        <span class="ms-1">Not discloses</span>
                                                    </span>
                                                    <span class="me-2">
                                                        <i class="fe fe-map-pin"></i>
                                                        <span class="ms-1">Hastsal, Delhi</span>
                                                    </span>
                                                </div>
                                                <div>
                                                    <i class="fe fe-clock"></i>
                                                    <span>1 day ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card card-bordered mb-3 card-hover cursor-pointer">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-xl-flex">
                                    <div class="mb-3 mb-md-0">
                                        <!-- Img -->

                                        <img src="/back/assets/images/job/job-brand-logo/job-list-logo-4.svg"
                                            alt="Geeks Bootstrap 5 Template" class="icon-shape border rounded-circle">
                                    </div>
                                    <!-- text -->
                                    <div class="ms-xl-3 w-100 mt-3 mt-xl-1">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div>
                                                <h3 class="mb-1 fs-4"><a href="job-single.html" class="text-inherit">Lead
                                                        Software Engineer</a></h3>
                                                <div>
                                                    <span>at Dot</span>
                                                    <span class="text-dark ms-2 fw-medium">
                                                        4.5
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                            height="10" fill="currentColor"
                                                            class="bi bi-star-fill text-warning align-baseline"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="ms-0">(523 Reviews)</span>
                                                </div>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bookmark bookmark"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-md-flex justify-content-between">
                                                <div class="mb-2 mb-md-0">
                                                    <span class="me-2">
                                                        <i class="fe fe-briefcase"></i>
                                                        <span class="ms-1">0 - 2 years</span>
                                                    </span>
                                                    <span class="me-2">
                                                        <i class="fe fe-dollar-sign"></i>
                                                        <span class="ms-1">Not discloses</span>
                                                    </span>
                                                    <span class="me-2">
                                                        <i class="fe fe-map-pin"></i>
                                                        <span class="ms-1">Pune, Chennai</span>
                                                    </span>
                                                </div>
                                                <div>
                                                    <i class="fe fe-clock"></i>
                                                    <span>1 Month ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card card-bordered mb-3 card-hover cursor-pointer">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-xl-flex">
                                    <div class="mb-3 mb-md-0">
                                        <!-- Img -->

                                        <img src="/back/assets/images/job/job-brand-logo/job-list-logo-5.svg"
                                            alt="Geeks Bootstrap 5 Template" class="icon-shape border rounded-circle">
                                    </div>
                                    <!-- text -->
                                    <div class="ms-xl-3 w-100 mt-3 mt-xl-1">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div>
                                                <h3 class="mb-1 fs-4"><a href="job-single.html"
                                                        class="text-inherit">Senior Full Stack Engineer</a></h3>
                                                <div>
                                                    <span>at Toggle</span>
                                                    <span class="text-dark ms-2 fw-medium">
                                                        4.9
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                            height="10" fill="currentColor"
                                                            class="bi bi-star-fill text-warning align-baseline"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="ms-0">(923 Reviews)</span>
                                                </div>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bookmark bookmark"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-md-flex justify-content-between">
                                                <div class="mb-2 mb-md-0">
                                                    <span class="me-2">
                                                        <i class="fe fe-briefcase"></i>
                                                        <span class="ms-1">2 - 6 years</span>
                                                    </span>
                                                    <span class="me-2">
                                                        <i class="fe fe-dollar-sign"></i>
                                                        <span class="ms-1">Not discloses</span>
                                                    </span>
                                                    <span class="me-2">
                                                        <i class="fe fe-map-pin"></i>
                                                        <span class="ms-1">Ahmedabad, Gujarat</span>
                                                    </span>
                                                </div>
                                                <div>
                                                    <i class="fe fe-clock"></i>
                                                    <span>2 Month ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card -->

                        <!-- pagination start -->
                        <ul class="pagination mt-4 mb-2">
                            <li class="page-item disabled">
                                <a class="page-link mx-1 rounded" href="#" tabindex="-1" aria-disabled="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                        fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link mx-1 rounded" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link mx-1 rounded" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link mx-1 rounded" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link mx-1 rounded" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                        fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <!-- pagination end -->
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
