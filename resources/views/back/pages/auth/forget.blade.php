@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
    <div class="card-body p-6">
        <div class="mb-4">
            <a href="../index.html"><img src="/back/assets/images/brand/logo/logo-icon.svg" class="mb-4" alt="logo-icon"></a>
            <h1 class="mb-1 fw-bold">Forgot Password</h1>
            <p>Fill the form to reset your password.</p>
        </div>
        <!-- Form -->
        <form class="needs-validation" novalidate="">
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email "
                    required="">
                <div class="invalid-feedback">Please enter valid email.</div>
            </div>
            <!-- Button -->
            <div class="mb-3 d-grid">
                <button type="submit" class="btn btn-primary">Send Resest Link</button>
            </div>
            <span>
                Return to
                <a href="sign-in.html">sign in</a>
            </span>
        </form>
    </div>
@endsection
