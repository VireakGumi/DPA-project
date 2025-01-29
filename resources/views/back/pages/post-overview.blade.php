@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
                    <div>
                        <h1 class="mb-1 h2 fw-bold">CMS Dashboard</h1>
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">CMS</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Overview</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="admin-cms-post-new.html" class="btn btn-primary">New Post</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card body -->
                    <div class="card-body">
                        <span class="fs-6 text-uppercase fw-semibold ls-md">Total Posts</span>
                        <div class="mt-2 d-flex justify-content-between align-items-center">
                            <div class="lh-1">
                                <h2 class="h1 fw-bold mb-1">2,000</h2>
                                <span>100Last 30Days</span>
                            </div>
                            <div>
                                <span class="bg-light-primary icon-shape icon-xl rounded-3 text-dark-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <span class="fs-6 text-uppercase fw-semibold ls-md">Assets</span>
                        <div class="mt-2 d-flex justify-content-between align-items-center">
                            <div class="lh-1">
                                <h2 class="h1 fw-bold mb-1">367</h2>
                                <span>300+ Media Object</span>
                            </div>
                            <div>
                                <span class="bg-light-warning icon-shape icon-xl rounded-3 text-dark-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder">
                                        <path
                                            d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <span class="fs-6 text-uppercase fw-semibold ls-md">USers</span>
                        <div class="mt-2 d-flex justify-content-between align-items-center">
                            <div class="lh-1">
                                <h2 class="h1 fw-bold mb-1">13,234</h2>
                                <span>1.5k in 30Days</span>
                            </div>
                            <div>
                                <span class="bg-light-success icon-shape icon-xl rounded-3 text-dark-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <span class="fs-6 text-uppercase fw-semibold ls-md">Comments</span>
                        <div class="mt-2 d-flex justify-content-between align-items-center">
                            <div class="lh-1">
                                <h2 class="h1 fw-bold mb-1">120</h2>
                                <span>20+ Comments</span>
                            </div>
                            <div>
                                <span class="bg-light-info icon-shape icon-xl rounded-3 text-dark-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-message-square">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card header -->
                    <div
                        class="card-header d-flex justify-content-between align-items-center border-bottom-0 card-header-height">
                        <h4 class="mb-0">Recent Posts</h4>
                        <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button"
                                id="courseDropdown1" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                <span class="dropdown-header">Settings</span>
                                <a class="dropdown-item" href="#">
                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                    Edit
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                    Remove
                                </a>
                            </span>
                        </span>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive border-0 overflow-y-hidden">
                        <table class="table mb-0 text-nowrap table-hover table-centered">
                            <thead class="table-light">
                                <tr>
                                    <th>Post</th>
                                    <th>Type</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Author</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h5 class="mb-0">
                                            <a href="#" class="text-inherit">Revolutionize how you build the
                                                web...</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <i class="fe fe-image text-primary fs-4"></i>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">Courses</a>
                                    </td>
                                    <td>7 July, 2021 1:42pm</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="/back/assets/images/avatar/avatar-7.jpg" alt=""
                                                class="rounded-circle avatar-xs me-2">
                                            <h5 class="mb-0">Reva Yokk</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>
                                        Draft
                                    </td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown2" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                                    Edit
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-move dropdown-item-icon"></i>
                                                    Move
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-copy dropdown-item-icon"></i>
                                                    Copy
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-toggle-left dropdown-item-icon"></i>
                                                    Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-toggle-right dropdown-item-icon"></i>
                                                    Unpublish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                                    Delete
                                                </a>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="mb-0">
                                            <a href="#" class="text-inherit">Guide to Static Sites with
                                                Gatsby.js</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <i class="fe fe-video fs-4 text-primary"></i>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">Marketing</a>
                                    </td>
                                    <td>6 July, 2021 2:42pm</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="/back/assets/images/avatar/avatar-5.jpg" alt=""
                                                class="rounded-circle avatar-xs me-2">
                                            <h5 class="mb-0">March Menon</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>
                                        Draft
                                    </td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown3" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                                    Edit
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-move dropdown-item-icon"></i>
                                                    Move
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-copy dropdown-item-icon"></i>
                                                    Copy
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-toggle-left dropdown-item-icon"></i>
                                                    Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-toggle-right dropdown-item-icon"></i>
                                                    Unpublish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                                    Delete
                                                </a>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="mb-0">
                                            <a href="#" class="text-inherit">The Modern JavaScript Courses</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <i class="fe fe-link fs-4 text-primary"></i>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">Workshop</a>
                                    </td>
                                    <td>5 July, 2021 5:42pm</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="/back/assets/images/avatar/avatar-4.jpg" alt=""
                                                class="rounded-circle avatar-xs me-2">
                                            <h5 class="mb-0">Lisa Menon</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge-dot bg-success me-1 d-inline-block align-middle"></span>
                                        Published
                                    </td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown4" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                                    Edit
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-move dropdown-item-icon"></i>
                                                    Move
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-copy dropdown-item-icon"></i>
                                                    Copy
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-toggle-left dropdown-item-icon"></i>
                                                    Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-toggle-right dropdown-item-icon"></i>
                                                    Unpublish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                                    Delete
                                                </a>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="mb-0">
                                            <a href="#" class="text-inherit">Online WordPress Courses Become ..</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <i class="fe fe-image text-primary fs-4"></i>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">Company</a>
                                    </td>
                                    <td>3 July, 2021 10:42am</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="/back/assets/images/avatar/avatar-8.jpg" alt=""
                                                class="rounded-circle avatar-xs me-2">
                                            <h5 class="mb-0">Maria Pinto</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge-dot bg-success me-1 d-inline-block align-middle"></span>
                                        Published
                                    </td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown5" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown5">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                                    Edit
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-move dropdown-item-icon"></i>
                                                    Move
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-copy dropdown-item-icon"></i>
                                                    Copy
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-toggle-left dropdown-item-icon"></i>
                                                    Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-toggle-right dropdown-item-icon"></i>
                                                    Unpublish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                                    Delete
                                                </a>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="mb-0">
                                            <a href="#" class="text-inherit">How to become Java Developer</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <i class="fe fe-image text-primary fs-4"></i>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">Company</a>
                                    </td>
                                    <td>4 July, 2021 12:42pm</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="/back/assets/images/avatar/avatar-10.jpg" alt=""
                                                class="rounded-circle avatar-xs me-2">
                                            <h5 class="mb-0">John Deo</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge-dot bg-success me-1 d-inline-block align-middle"></span>
                                        Published
                                    </td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown6" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown6">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                                    Edit
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-move dropdown-item-icon"></i>
                                                    Move
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-copy dropdown-item-icon"></i>
                                                    Copy
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-toggle-left dropdown-item-icon"></i>
                                                    Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-toggle-right dropdown-item-icon"></i>
                                                    Unpublish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                                    Delete
                                                </a>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="mb-0">
                                            <a href="#" class="text-inherit">The Javascript Learning</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <i class="fe fe-video fs-4 text-primary"></i>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">Marketing</a>
                                    </td>
                                    <td>3 July, 2021 12:42pm</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="/back/assets/images/avatar/avatar-15.jpg" alt=""
                                                class="rounded-circle avatar-xs me-2">
                                            <h5 class="mb-0">Misty Smaln</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge-dot bg-info me-1 d-inline-block align-middle"></span>
                                        Schedule
                                    </td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown7" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown7">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                                    Edit
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-move dropdown-item-icon"></i>
                                                    Move
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-copy dropdown-item-icon"></i>
                                                    Copy
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-toggle-left dropdown-item-icon"></i>
                                                    Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-toggle-right dropdown-item-icon"></i>
                                                    Unpublish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                                    Delete
                                                </a>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="mb-0">
                                            <a href="#" class="text-inherit">How to become modern Stack
                                                Developer</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <i class="fe fe-image fs-4 text-primary"></i>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">Company</a>
                                    </td>
                                    <td>3 July, 2021 12:42pm</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="/back/assets/images/avatar/avatar-12.jpg" alt=""
                                                class="rounded-circle avatar-xs me-2">
                                            <h5 class="mb-0">March Liso</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge-dot bg-success me-1 d-inline-block align-middle"></span>
                                        Published
                                    </td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown8" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown8">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                                    Edit
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-move dropdown-item-icon"></i>
                                                    Move
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-copy dropdown-item-icon"></i>
                                                    Copy
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-toggle-left dropdown-item-icon"></i>
                                                    Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-toggle-right dropdown-item-icon"></i>
                                                    Unpublish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                                    Delete
                                                </a>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="mb-0">
                                            <a href="#" class="text-inherit">How to become Full Stack Developer</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <i class="fe fe-link fs-4 text-primary"></i>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">Workshop</a>
                                    </td>
                                    <td>2 July, 2021 12:42pm</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="/back/assets/images/avatar/avatar-2.jpg" alt=""
                                                class="rounded-circle avatar-xs me-2">
                                            <h5 class="mb-0">Sina Ray</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge-dot bg-danger me-1 d-inline-block align-middle"></span>
                                        Deleted
                                    </td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown9" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown9">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                                    Edit
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-move dropdown-item-icon"></i>
                                                    Move
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-copy dropdown-item-icon"></i>
                                                    Copy
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-toggle-left dropdown-item-icon"></i>
                                                    Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-toggle-right dropdown-item-icon"></i>
                                                    Unpublish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                                    Delete
                                                </a>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
