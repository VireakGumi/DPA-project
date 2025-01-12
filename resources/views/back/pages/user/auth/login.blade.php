@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
    <div class="card-body p-6">
        <div class="mb-4">
            <a href="../index.html"><img src="/back/assets/images/brand/logo/logo-icon.svg" class="mb-4" alt="logo-icon"></a>
            <h1 class="mb-1 fw-bold">Log in</h1>
        </div>
        <!-- Form -->
        <form method="post" action="#" class="needs-validation" novalidate>
            @csrf
            <!-- Username -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="user@example.com"
                    required>
                <div class="invalid-feedback">Please enter valid username.</div>
            </div>
            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="**************"
                    required>
                <div class="invalid-feedback">Please enter valid password.</div>
            </div>
            <!-- Checkbox -->
            <div class="d-lg-flex justify-content-end align-items-center mb-4">
                <div>
                    <a href="{{ route('u.forgot') }}">Forgot your password?</a>
                </div>
            </div>
            <div>
                <!-- Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Log in</button>
                </div>
            </div>
            <div class="d-lg-flex justify-content-center align-items-center mt-4">
                <div>
                    <span>Don’t have an account?
                        <a href="{{ route('u.register') }}">Register now.</a>
                    </span>
                </div>
            </div>
            <hr class="my-4">
            <div class="mt-4 text-center">
                <!--Facebook-->
                <a href="#" class="btn-social btn-social-outline btn-facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="bi bi-facebook mb-1" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                    </svg>
                </a>
                <!-- Google -->
                <a href="#" class="btn-social btn-social-outline btn-google">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="bi bi-google mb-1" viewBox="0 0 16 16">
                        <path
                            d="M8 1.5C4.14 1.5 1 4.64 1 8.5S4.14 15.5 8 15.5c3.35 0 6.22-2.18 7.28-5.14H8.5V8h6.25C14.85 5.25 12.61 3 8 3 5.02 3 2.9 4.26 1.8 6.5h4.2v2.5H1.5C2.5 10.5 4.96 12 8 12c3.31 0 6-2.69 6-6s-2.69-6-6-6z">
                        </path>
                    </svg>
                </a>
            </div>
        </form>
    </div>
@endsection
