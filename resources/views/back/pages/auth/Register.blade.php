@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
    <div class="card-body p-6">
        <div class="mb-4">
            <a href="../index.html"><img src="/back/assets/images/brand/logo/logo-icon.svg" class="mb-4" alt="logo"></a>
            <h1 class="mb-1 fw-bold">Register</h1>

        </div>
        <!-- Form -->
        <form method="post" action="{{ route('register_handler') }}" class="needs-validation" novalidate>
            @csrf
            <!-- Full Name -->
            <div class="mb-3">
                <label for="full_name" class="form-label">Full Name</label>
                <input type="text" id="full_name" class="form-control" name="full_name" placeholder="Full Name*" required>
                <div class="invalid-feedback">Please enter your full name.</div>
            </div>
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="Email address here"
                    required>
                <div class="invalid-feedback">Please enter a valid email.</div>
            </div>
            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="**************"
                    required>
                <div class="invalid-feedback">Please enter a valid password.</div>
            </div>
            <!-- Confirm Password -->
            <div class="mb-6">
                <label for="cf-password" class="form-label">Confirm Password</label>
                <input type="password" id="cf-password" class="form-control" name="password_confirmation"
                    placeholder="**************" required>
                <div class="invalid-feedback">Please confirm your password.</div>
            </div>
            <div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
        </form>
    </div>
@endsection
