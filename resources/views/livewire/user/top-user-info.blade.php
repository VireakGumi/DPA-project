<div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid px-0">
            <div class="d-flex">
                <a class="navbar-brand" href="{{ route('u.home') }}"><img src="/back/assets/images/brand/logo/logo.svg"
                        alt="Geeks"></a>
            </div>
            @if ($user_profile->resource == null)
                <div class="order-lg-3">
                    <div class="d-flex align-items-center">
                        <div class="dropdown">
                            <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center"
                                type="button" aria-expanded="false" data-bs-toggle="dropdown"
                                aria-label="Toggle theme (auto)">
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
                        <a href="{{ route('login') }}" class="btn btn-outline-primary ms-2 d-none d-lg-block">Log
                            in</a>
                        <a href="{{ route('register') }}" class="btn btn-primary ms-2 d-none d-lg-block">Register</a>
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
            @else
                <div class="ms-auto d-flex align-items-center order-lg-3">
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
                    <ul class="navbar-nav navbar-right-wrap ms-2 flex-row d-none d-md-block">
                        <li class="dropdown d-inline-block stopevent position-static">
                            <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary" href="#"
                                role="button" id="dropdownNotificationSecond" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fe fe-bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg position-absolute mx-3 my-5"
                                aria-labelledby="dropdownNotificationSecond">
                                <div>
                                    <div class="border-bottom px-3 pb-3 d-flex align-items-center">
                                        <span class="h5 mb-0">Notifications</span>
                                        <a href="# ">
                                            <span class="align-middle"><i class="fe fe-settings me-1"></i></span>
                                        </a>
                                    </div>
                                    <ul class="list-group list-group-flush" style="height: 300px"
                                        data-simplebar="init">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper" tabindex="0"
                                                        role="region" aria-label="scrollable content"
                                                        style="height: auto; overflow: hidden;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <li class="list-group-item bg-light">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <a class="text-body" href="#">
                                                                            <div class="d-flex">
                                                                                <img src="{{ $user_profile->picture }}"
                                                                                    alt=""
                                                                                    class="avatar-md rounded-circle">
                                                                                <div class="ms-3">
                                                                                    <h5 class="fw-bold mb-1">Kristin
                                                                                        Watson:</h5>
                                                                                    <p class="mb-3 text-body">Krisitn
                                                                                        Watsan like your comment on
                                                                                        course Javascript Introduction!
                                                                                    </p>
                                                                                    <span class="fs-6">
                                                                                        <span>
                                                                                            <span
                                                                                                class="fe fe-thumbs-up text-success me-1"></span>
                                                                                            2 hours ago,
                                                                                        </span>
                                                                                        <span class="ms-1">2:19
                                                                                            PM</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-auto text-center me-2">
                                                                        <a href="#" class="badge-dot bg-info"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            aria-label="Mark as read"
                                                                            data-bs-original-title="Mark as read"></a>
                                                                        <div>
                                                                            <a href="#" class="bg-transparent"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                aria-label="Remove"
                                                                                data-bs-original-title="Remove">
                                                                                <i class="fe fe-x"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <a class="text-body" href="#">
                                                                            <div class="d-flex">
                                                                                <img src="./assets/images/avatar/avatar-2.jpg"
                                                                                    alt=""
                                                                                    class="avatar-md rounded-circle">
                                                                                <div class="ms-3">
                                                                                    <h5 class="fw-bold mb-1">Brooklyn
                                                                                        Simmons</h5>
                                                                                    <p class="mb-3 text-body">Just
                                                                                        launched a new Courses React for
                                                                                        Beginner.</p>
                                                                                    <span class="fs-6">
                                                                                        <span>
                                                                                            <span
                                                                                                class="fe fe-thumbs-up text-success me-1"></span>
                                                                                            Oct 9,
                                                                                        </span>
                                                                                        <span class="ms-1">1:20
                                                                                            PM</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-auto text-center me-2">
                                                                        <a href="#"
                                                                            class="badge-dot bg-secondary"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            aria-label="Mark as unread"
                                                                            data-bs-original-title="Mark as unread"></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <a class="text-body" href="#">
                                                                            <div class="d-flex">
                                                                                <img src="./assets/images/avatar/avatar-3.jpg"
                                                                                    alt=""
                                                                                    class="avatar-md rounded-circle">
                                                                                <div class="ms-3">
                                                                                    <h5 class="fw-bold mb-1">Jenny
                                                                                        Wilson</h5>
                                                                                    <p class="mb-3 text-body">Krisitn
                                                                                        Watsan like your comment on
                                                                                        course Javascript Introduction!
                                                                                    </p>
                                                                                    <span class="fs-6">
                                                                                        <span>
                                                                                            <span
                                                                                                class="fe fe-thumbs-up text-info me-1"></span>
                                                                                            Oct 9,
                                                                                        </span>
                                                                                        <span class="ms-1">1:56
                                                                                            PM</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-auto text-center me-2">
                                                                        <a href="#"
                                                                            class="badge-dot bg-secondary"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            aria-label="Mark as unread"
                                                                            data-bs-original-title="Mark as unread"></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <a class="text-body" href="#">
                                                                            <div class="d-flex">
                                                                                <img src="./assets/images/avatar/avatar-4.jpg"
                                                                                    alt=""
                                                                                    class="avatar-md rounded-circle">
                                                                                <div class="ms-3">
                                                                                    <h5 class="fw-bold mb-1">Sina Ray
                                                                                    </h5>
                                                                                    <p class="mb-3 text-body">You earn
                                                                                        new certificate for complete the
                                                                                        Javascript Beginner course.</p>
                                                                                    <span class="fs-6">
                                                                                        <span>
                                                                                            <span
                                                                                                class="fe fe-award text-warning me-1"></span>
                                                                                            Oct 9,
                                                                                        </span>
                                                                                        <span class="ms-1">1:56
                                                                                            PM</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-auto text-center me-2">
                                                                        <a href="#"
                                                                            class="badge-dot bg-secondary"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            aria-label="Mark as unread"
                                                                            data-bs-original-title="Mark as unread"></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;">
                                            </div>
                                        </div>
                                    </ul>
                                    <div class="border-top px-3 pt-3 pb-0">
                                        <a href="./pages/notification-history.html" class="text-link fw-semibold">See
                                            all Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown ms-2 d-inline-block position-static">
                            <a class="rounded-circle" href="#" data-bs-toggle="dropdown"
                                data-bs-display="static" aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="{{ $user_profile->picture }}" class="rounded-circle">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end position-relation mx-3 my-5">
                                <div class="dropdown-item">
                                    <div class="d-flex">
                                        <div class="avatar avatar-md avatar-indicators avatar-online">
                                            <img alt="avatar" src="{{ $user_profile->picture }}"
                                                class="rounded-circle">
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h5 class="mb-1">{{ $user_profile->full_name }}</h5>
                                            <p class="mb-0">{{ $user_profile->email }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li class="dropdown-submenu dropstart-lg">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                            href="#">
                                            <i class="fe fe-circle me-2"></i>
                                            Status
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge-dot bg-success me-2"></span>
                                                    Online
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge-dot bg-secondary me-2"></span>
                                                    Offline
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge-dot bg-warning me-2"></span>
                                                    Away
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge-dot bg-danger me-2"></span>
                                                    Busy
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        @if ($user_profile->roles->first()->id == 1)
                                            <a class="dropdown-item" href="{{ route('admin.profile_edit') }}">
                                                <i class="fe fe-user me-2"></i>
                                                Profile
                                            </a>
                                        @else
                                            <a class="dropdown-item" href="{{ route('u.profile') }}">
                                                <i class="fe fe-user me-2"></i>
                                                Profile
                                            </a>
                                        @endif
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./pages/student-subscriptions.html">
                                            <i class="fe fe-star me-2"></i>
                                            Subscription
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="fe fe-settings me-2"></i>
                                            Settings
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li>
                                        <a onclick="
                                                event.preventDefault();
                                                document.getElementById('logout-form-submit').submit();
                                            "
                                            class="dropdown-item" href="{{ route('logout') }}">
                                            <i class="fe fe-power me-2"></i>
                                            Log Out
                                        </a>
                                        <form id="logout-form-submit" action="{{ route('logout') }}" method="post">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            @endif
        </div>
    </nav>
</div>
