@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
    <div class="card-body p-6">
        <div class="mb-4">
            <a href="../index.html"><img src="/back/assets/images/brand/logo/logo-icon.svg" class="mb-4" alt="logo-icon"></a>
            <h1 class="mb-1 fw-bold">Log in</h1>
            {{-- <span>
                Don’t have an account?
                <a href="sign-up.html" class="ms-1">Sign up</a>
            </span> --}}
        </div>
        <!-- Form -->
        <form method="post" action="{{ route('admin.login_handler') }}" class="needs-validation" novalidate>
            @csrf
            <!-- Username -->
            <div class="mb-3">
                <label for="email" class="form-label">Username or email</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="admin@example.com"
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
                    <a href="{{ route('admin.forgot') }}">Forgot your password?</a>
                </div>
            </div>
            <div>
                <!-- Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Log in</button>
                </div>
            </div>
        </form>
    </div>
@endsection
