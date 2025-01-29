@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
                    <div>
                        <h1 class="mb-1 h2 fw-bold">All Posts</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="../dashboard/admin-dashboard.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">CMS</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Post</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="#" class="btn btn-primary me-2" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight">New Post</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card rounded-3">
                    <!-- Card Header -->
                    <div class="card-header p-0">
                        <ul class="nav nav-lb-tab border-bottom-0" id="tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="all-post-tab" data-bs-toggle="pill" href="#all-post"
                                    role="tab" aria-controls="all-post" aria-selected="true">All</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="published-tab" data-bs-toggle="pill" href="#published"
                                    role="tab" aria-controls="published" aria-selected="false"
                                    tabindex="-1">Published</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="scheduled-tab" data-bs-toggle="pill" href="#scheduled"
                                    role="tab" aria-controls="scheduled" aria-selected="false"
                                    tabindex="-1">Scheduled</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="draft-tab" data-bs-toggle="pill" href="#draft" role="tab"
                                    aria-controls="draft" aria-selected="false" tabindex="-1">Draft</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="deleted-tab" data-bs-toggle="pill" href="#deleted" role="tab"
                                    aria-controls="deleted" aria-selected="false" tabindex="-1">Deleted</a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-4 row">
                        <!-- Form -->
                        <form class="d-flex align-items-center col-12 col-md-8 col-lg-3">
                            <span class="position-absolute ps-3 search-icon">
                                <i class="fe fe-search"></i>
                            </span>
                            <input type="search" class="form-control ps-6" placeholder="Search Post">
                        </form>
                    </div>
                    <div>
                        <div class="tab-content container-fluid p-4" id="tabContent">
                            <!-- Tab -->
                            <div class="tab-pane fade active show" id="all-post" role="tabpanel"
                                aria-labelledby="all-post-tab">
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-12 mb-4">
                                        <!-- card -->
                                        <div class="card h-100">
                                            <!-- card body -->
                                            <div class="card-body">
                                                <!-- heading-->
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <!-- text-->

                                                    <div class="d-flex align-items-center">
                                                        <div class="icon-shape icon-lg rounded-3 border p-4">
                                                            <i class="fe fe-clipboard fs-3"></i>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h4 class="mb-0"><a href="#" class="text-inherit">File
                                                                    Management App</a></h4>
                                                            <span class="fs-6">Web Design</span>
                                                        </div>
                                                    </div>
                                                    <!-- dropdown-->
                                                    <div class="d-flex">
                                                        <div class="dropdown dropstart">
                                                            <a href="#"
                                                                class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                id="dropdownProjectFour" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownProjectFour">
                                                                <span class="dropdown-header">Settings</span>
                                                                <a class="dropdown-item" href="#">
                                                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                                                    Edit Details
                                                                </a>

                                                                <a class="dropdown-item" href="#">
                                                                    <i class="fe fe-link dropdown-item-icon"></i>
                                                                    Copy project link
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <i class="fe fe-save dropdown-item-icon"></i>
                                                                    Save as Default
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <i class="fe fe-copy dropdown-item-icon"></i>
                                                                    Duplicate
                                                                </a>

                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">
                                                                    <i class="fe fe-upload dropdown-item-icon"></i>
                                                                    Import
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <i class="fe fe-printer dropdown-item-icon"></i>
                                                                    Export / Print
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <i class="fe fe-users dropdown-item-icon"></i>
                                                                    Move to another team
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">
                                                                    <i class="fe fe-archive dropdown-item-icon"></i>
                                                                    Archive
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                                                    Delete Project
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- para-->
                                                <div class="mt-4 mb-4">
                                                    <p class="mb-0">Quisque at augue convallis, tincidunt erat et,
                                                        tristique ssa mollis dignissim eget</p>
                                                </div>

                                                <!-- progress -->
                                                <div class="d-flex justify-content-between align-items-center mb-5">
                                                    <div class="d-flex align-items-center">
                                                        <!-- avatar group -->
                                                        <div class="avatar-group">
                                                            <span class="avatar avatar-md avatar-warning imgtooltip"
                                                                data-template="textFour">
                                                                <span class="avatar-initials rounded-circle">GK</span>

                                                                <span id="textFour" class="d-none">
                                                                    <small class="fw-semibold">Geeks Only</small>
                                                                </span>
                                                            </span>
                                                            <span class="avatar avatar-md">
                                                                <img alt="avatar"
                                                                    src="/back/assets/images/avatar/avatar-12.jpg"
                                                                    class="rounded-circle imgtooltip"
                                                                    data-template="eleven ">
                                                                <span id="eleven" class="d-none">
                                                                    <small class="fw-semibold">Charlie Holland</small>
                                                                </span>
                                                            </span>
                                                            <span class="avatar avatar-md">
                                                                <img alt="avatar"
                                                                    src="/back/assets/images/avatar/avatar-13.jpg"
                                                                    class="rounded-circle imgtooltip"
                                                                    data-template="twelve ">
                                                                <span id="twelve" class="d-none">
                                                                    <small class="fw-semibold">Jamie Lusar</small>
                                                                </span>
                                                            </span>
                                                            <span class="avatar avatar-md">
                                                                <span
                                                                    class="avatar-initials rounded-circle bg-light text-dark">2+</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- text -->
                                                    <div>
                                                        <span class="badge bg-info-soft">In Progress</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <!-- progress bar -->

                                                    <div class="progress progress-tooltip" style="height: 6px">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 85%" aria-valuenow="85" aria-valuemin="0"
                                                            aria-valuemax="85">
                                                            <span>85%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card footer -->
                                            <div class="card-footer p-0">
                                                <div class="d-flex justify-content-between">
                                                    <div class="w-50 py-3 px-4">
                                                        <h6 class="mb-0">Due Date:</h6>
                                                        <p class="text-dark fs-6 fw-semibold mb-0">25 Jan, 2022</p>
                                                    </div>
                                                    <div class="border-start w-50 py-3 px-4">
                                                        <h6 class="mb-0">Budget:</h6>
                                                        <p class="text-dark fs-6 fw-semibold mb-0">$2,000</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-12 mb-4">
                                        <!-- card -->
                                        <div class="card h-100">
                                            <img src="/back/assets/images/background/project-cover-img.jpg" alt=""
                                                class="img-fluid rounded-top ">
                                            <div class="d-flex position-absolute end-0 pe-3 pt-3">
                                                <div class="dropdown dropstart">
                                                    <a href="#" class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        id="dropdownProjectTen" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownProjectTen">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                            Edit Details
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-link dropdown-item-icon"></i>
                                                            Copy project link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-save dropdown-item-icon"></i>
                                                            Save as Default
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-copy dropdown-item-icon"></i>
                                                            Duplicate
                                                        </a>

                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-upload dropdown-item-icon"></i>
                                                            Import
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-printer dropdown-item-icon"></i>
                                                            Export / Print
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-users dropdown-item-icon"></i>
                                                            Move to another team
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-archive dropdown-item-icon"></i>
                                                            Archive
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                            Delete Project
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card body -->
                                            <div class="card-body">
                                                <!-- heading-->

                                                <!-- text-->

                                                <div class="mb-4">
                                                    <h4 class="mb-0"><a href="#" class="text-inherit">CRM
                                                            Dashboard</a></h4>
                                                    <span class="fs-6">Front End Development</span>
                                                </div>

                                                <!-- progress -->
                                                <div class="d-flex justify-content-between align-items-center mb-5">
                                                    <div class="d-flex align-items-center">
                                                        <!-- avatar group -->
                                                        <div class="avatar-group">
                                                            <span class="avatar avatar-md avatar-success imgtooltip"
                                                                data-template="textThirteen">
                                                                <span class="avatar-initials rounded-circle">GK</span>

                                                                <span id="textThirteen" class="d-none">
                                                                    <small class="fw-semibold">Geeks Only</small>
                                                                </span>
                                                            </span>
                                                            <span class="avatar avatar-md">
                                                                <img alt="avatar"
                                                                    src="/back/assets/images/avatar/avatar-13.jpg"
                                                                    class="rounded-circle imgtooltip"
                                                                    data-template="fifteen ">
                                                                <span id="fifteen" class="d-none">
                                                                    <small class="fw-semibold">Charlie Holland</small>
                                                                </span>
                                                            </span>
                                                            <span class="avatar avatar-md">
                                                                <img alt="avatar"
                                                                    src="/back/assets/images/avatar/avatar-14.jpg"
                                                                    class="rounded-circle imgtooltip"
                                                                    data-template="seventeen ">
                                                                <span id="seventeen" class="d-none">
                                                                    <small class="fw-semibold">Jamie Lusar</small>
                                                                </span>
                                                            </span>
                                                            <span class="avatar avatar-md">
                                                                <span
                                                                    class="avatar-initials rounded-circle bg-light text-dark">9+</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- text -->
                                                    <div>
                                                        <span class="badge bg-success-soft">Finished</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <!-- progress bar -->

                                                    <div class="progress progress-tooltip" style="height: 6px">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                            <span>100%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card footer -->
                                            <div class="card-footer p-0">
                                                <div class="d-flex justify-content-between">
                                                    <div class="w-50 py-3 px-4">
                                                        <h6 class="mb-0">Due Date:</h6>
                                                        <p class="text-dark fs-6 fw-semibold mb-0">1 Sept, 2022</p>
                                                    </div>
                                                    <div class="border-start w-50 py-3 px-4">
                                                        <h6 class="mb-0">Budget:</h6>
                                                        <p class="text-dark fs-6 fw-semibold mb-0">$5,200</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-12 mb-4">
                                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                                            <div class="card h-100 border border-2 shadow-none card-dashed-hover p-12">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center text-center">
                                                    <i class="fe fe-plus text-secondary mb-3 fs-2" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="published" role="tabpanel" aria-labelledby="published-tab">
                                <div class="row">
                                    OT TON DG DAK EY?
                                </div>
                            </div>
                            <div class="tab-pane fade" id="scheduled" role="tabpanel" aria-labelledby="scheduled-tab">
                                <div class="row">
                                    OT TON DG DAK EY?
                                </div>
                            </div>
                            <div class="tab-pane fade" id="draft" role="tabpanel" aria-labelledby="draft-tab">
                                <div class="row">
                                    OT TON DG DAK EY?
                                </div>
                            </div>
                            <div class="tab-pane fade" id="deleted" role="tabpanel" aria-labelledby="deleted-tab">
                                <div class="row">
                                    OT TON DG DAK EY?
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card Footer -->
                    <div class="card-footer">
                        <nav>
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link mx-1 rounded" href="#" tabindex="-1"
                                        aria-disabled="true">
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
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
