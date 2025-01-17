<div>
    <!-- User info -->
    <div class="row align-items-center">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <!-- Bg -->
            <div class="rounded-top"
                style="background: url(/back/assets/images/background/profile-bg.jpg) no-repeat; background-size: cover; height: 100px">
            </div>
            <div class="card px-4 pt-2 pb-4 shadow-sm rounded-top-0 rounded-bottom-0 rounded-bottom-md-2">
                <div class="d-flex align-items-end justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                            <img src="{{ $user->picture }}" class="avatar-xl rounded-circle border border-4 border-white"
                                alt="avatar">
                        </div>
                        <div class="lh-1">
                            <h2 class="mb-0">
                                {{ $user->full_name }}
                                <a href="#" data-bs-toggle="tooltip" data-placement="top" aria-label="Beginner"
                                    data-bs-original-title="Beginner">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                        </rect>
                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9">
                                        </rect>
                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                        </rect>
                                    </svg>
                                </a>
                            </h2>
                            {{-- i wanna put @ infront of user name --}}
                            <p class="mb-0 d-block">{{ '@' . $user->username }}</p>
                        </div>
                    </div>
                    <div>
                        <a href="profile-edit.html" class="btn btn-primary btn-sm d-none d-md-block">Account
                            Setting</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-0 mt-md-4">
        <div class="col-lg-3 col-md-4 col-12">
            <!-- Side navbar -->
            <nav class="navbar navbar-expand-md shadow-sm mb-4 mb-lg-0 sidenav">
                <!-- Menu -->
                <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
                <!-- Button -->
                <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button"
                    data-bs-toggle="collapse" data-bs-target="#sidenav" aria-controls="sidenav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fe fe-menu"></span>
                </button>
                <!-- Collapse navbar -->
                <div class="collapse navbar-collapse" id="sidenav">
                    <div class="navbar-nav flex-column">
                        <span class="navbar-header">Subscription</span>
                        <!-- List -->
                        <ul class="list-unstyled ms-n2 mb-4">
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link disabled" href="student-subscriptions.html">
                                    <i class="fe fe-calendar nav-icon"></i>
                                    My Subscriptions
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link disabled" href="billing-info.html">
                                    <i class="fe fe-credit-card nav-icon"></i>
                                    Billing Info
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link disabled" href="payment-method.html">
                                    <i class="fe fe-credit-card nav-icon"></i>
                                    Payment
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link disabled" href="invoice.html">
                                    <i class="fe fe-clipboard nav-icon"></i>
                                    Invoice
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link disabled" href="student-quiz.html">
                                    <i class="fe fe-help-circle nav-icon"></i>
                                    My Quiz Attempt
                                </a>
                            </li>
                        </ul>
                        <span class="navbar-header">Account Settings</span>
                        <!-- List -->
                        <ul class="list-unstyled ms-n2 mb-0">
                            <!-- Nav item -->
                            <li class="nav-item {{ $tab == 'personal_details' ? 'active' : '' }}">
                                <a wire:click="selectTab('personal_details')" class="nav-link">
                                    <i class="fe fe-settings nav-icon"></i>
                                    Edit Profile
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item {{ $tab == 'security' ? 'active' : '' }}">
                                <a wire:click="selectTab('security')" class="nav-link">
                                    <i class="fe fe-user nav-icon"></i>
                                    Security
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item {{ $tab == 'social_profile' ? 'active' : '' }}">
                                <a wire:click="selectTab('social_profile')" class="nav-link">
                                    <i class="fe fe-refresh-cw nav-icon"></i>
                                    Social Profiles
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="notifications.html">
                                    <i class="fe fe-bell nav-icon"></i>
                                    Notifications
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link disabled" href="profile-privacy.html">
                                    <i class="fe fe-lock nav-icon"></i>
                                    Profile Privacy
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link disabled" href="delete-profile.html">
                                    <i class="fe fe-trash nav-icon"></i>
                                    Delete Profile
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link disabled" href="linked-accounts.html">
                                    <i class="fe fe-user nav-icon"></i>
                                    Linked Accounts
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link disabled" href="../index.html">
                                    <i class="fe fe-power nav-icon"></i>
                                    Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-lg-9 col-md-8 col-12">
            <!-- personal_details-->
            <div class="card {{ $tab == 'personal_details' ? '' : 'd-none' }}" id="personal_details">
                <!-- Card header -->
                <div class="card-header">
                    <h3 class="mb-0">Profile Details</h3>
                    <p class="mb-0">You have full control to manage your own account setting.</p>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <div class="d-lg-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center mb-4 mb-lg-0">
                            <img id="profilePicturePreview" src="{{ $user->picture }}"
                                class="avatar-xl rounded-circle" alt="avatar">
                            <input style="opacity: 0" class="d-none" type="file" name="profilePictureFile"
                                id="profilePictureFile">
                            <div class="ms-3">
                                <h4 class="mb-0">Your avatar</h4>
                                <p class="mb-0">PNG or JPG no bigger than 800px wide and tall.</p>
                            </div>
                        </div>
                        <div>
                            <a onclick="event.preventDefault();document.getElementById('profilePictureFile').click();"
                                href="javascript:;" class="btn btn-outline-secondary btn-sm">
                                Update
                            </a>
                            <a href="#" class="btn btn-outline-danger btn-sm">Delete</a>
                        </div>
                    </div>
                    <hr class="my-5">
                    <div>
                        <h4 class="mb-0">Personal Details</h4>
                        <p class="mb-4">Edit your personal information and address.</p>
                        <!-- Form -->
                        <form wire:submit="updatePersonalDetails()" class="row gx-3 needs-validation" novalidate="">
                            {{-- display-name --}}
                            <div class="mb-3 col-12 col-md-12">
                                <label class="form-label" for="display-name">Full Name</label>
                                <input wire:model="fullname" type="text" id="fullname" class="form-control"
                                    placeholder="Enter your full name">
                                @error('fullname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- email --}}
                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="email">Email Address</label>
                                <input disabled wire:model="email" type="email" id="email"
                                    class="form-control" placeholder="Enter your email address" required="">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- username --}}
                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="username">Username</label>
                                <input wire:model="username" type="text" id="username" class="form-control"
                                    placeholder="Username">
                                @error('username')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <!-- Button -->
                                <button class="btn btn-primary" type="submit">Update Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- security -->
            <div class="card {{ $tab == 'security' ? '' : 'd-none' }}" id="security">
                <!-- Card header -->
                <div class="card-header">
                    <h3 class="mb-0">Security</h3>
                    <p class="mb-0">Edit your account settings and change your password here.</p>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <h4 class="mb-0">Email Address</h4>
                    <p>
                        Your current email address is
                        <span class="text-success">stellaflores@gmail.com</span>
                    </p>
                    <form class="row needs-validation" novalidate="">
                        <div class="mb-3 col-lg-6 col-md-12 col-12">
                            <label class="form-label" for="email">New email address</label>
                            <input id="email" type="email" name="email" class="form-control" placeholder=""
                                required="">
                            <div class="invalid-feedback">Please Enter email address</div>
                            <button type="submit" class="btn btn-primary mt-2">Update Details</button>
                        </div>
                    </form>
                    <hr class="my-5">
                    <div>
                        <h4 class="mb-0">Change Password</h4>
                        <p>We will email you a confirmation when changing your password, so please expect that email
                            after submitting.</p>
                        <!-- Form -->
                        <form class="row needs-validation" novalidate="">
                            <div class="col-lg-6 col-md-12 col-12">
                                <!-- Current password -->
                                <div class="mb-3">
                                    <label class="form-label" for="currentpassword">Current password</label>
                                    <input id="currentpassword" type="password" name="currentpassword"
                                        class="form-control" placeholder="" required="">
                                    <div class="invalid-feedback">Please enter current password.</div>
                                </div>
                                <!-- New password -->
                                <div class="mb-3 password-field">
                                    <label class="form-label" for="newpassword">New password</label>
                                    <input id="newpassword" type="password" name="newpassword"
                                        class="form-control mb-2" placeholder="" required="">
                                    <div class="invalid-feedback">Please enter new password.</div>
                                    <div class="row align-items-center g-0">
                                        <div class="col-6">
                                            <span data-bs-toggle="tooltip" data-placement="right"
                                                data-bs-original-title="Test it by typing a password in the field below. To reach full strength, use at least 6 characters, a capital letter and a digit, e.g. 'Test01'">
                                                Password strength
                                                <i class="fe fe-help-circle ms-1"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <!-- Confirm new password -->
                                    <label class="form-label" for="confirmpassword">Confirm New Password</label>
                                    <input id="confirmpassword" type="password" name="confirmpassword"
                                        class="form-control mb-2" placeholder="" required="">
                                    <div class="invalid-feedback">Please enter confirm new password.</div>
                                </div>
                                <!-- Button -->
                                <button type="submit" class="btn btn-primary">Save Password</button>
                                <div class="col-6"></div>
                            </div>
                            <div class="col-12 mt-4">
                                <p class="mb-0">
                                    Can't remember your current password?
                                    <a href="#">Reset your password via email</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- social-profile --}}
            <div class="card {{ $tab == 'social_profile' ? '' : 'd-none' }}" id="social_profile">
                <!-- Card header -->
                <div class="card-header">
                    <h3 class="mb-0">Social Profiles</h3>
                    <p class="mb-0">Add your social profile links in below social accounts.</p>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <div class="row mb-5">
                        <!-- Twitter -->
                        <div class="col-lg-3 col-md-4 col-12">
                            <h5>Twitter</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12">
                            <input type="text" class="form-control mb-1" placeholder="Twitter Profile Name">
                            <small>Add your Twitter username (e.g. johnsmith).</small>
                        </div>
                    </div>
                    <!-- Facebook -->
                    <div class="row mb-5">
                        <div class="col-lg-3 col-md-4 col-12">
                            <h5>Facebook</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12">
                            <input type="text" class="form-control mb-1" placeholder="Facebook Profile Name">
                            <small>Add your Facebook username (e.g. johnsmith).</small>
                        </div>
                    </div>
                    <!-- Instagram -->
                    <div class="row mb-5">
                        <div class="col-lg-3 col-md-4 col-12">
                            <h5>Instagram</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12">
                            <input type="text" class="form-control mb-1" placeholder="Instagram Profile Name">
                            <small>Add your Instagram username (e.g. johnsmith).</small>
                        </div>
                    </div>
                    <!-- Linked in -->
                    <div class="row mb-5">
                        <div class="col-lg-3 col-md-4 col-12">
                            <h5>LinkedIn Profile URL</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12">
                            <input type="text" class="form-control mb-1" placeholder="LinkedIn Profile URL ">
                            <small>Add your linkedin profile URL. (
                                https://www.linkedin.com/in/jitu-chauhan-ba004b78)</small>
                        </div>
                    </div>
                    <!-- Youtube -->
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 col-12">
                            <h5>YouTube</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12">
                            <input type="text" class="form-control mb-1" placeholder="YouTube URL">
                            <small>Add your Youtube profile URL.</small>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="row">
                        <div class="offset-lg-3 col-lg-6 col-12">
                            <a href="#" class="btn btn-primary">Save Social Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
