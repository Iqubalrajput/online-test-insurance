@extends('layouts.app')

@section('title', 'signup Page')

@section('content')
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/oddo-2-html/HTML/main/login-25.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 10:27:13 GMT -->
<head>
<title>Travel Insurance</title>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="login-assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="login-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="login-assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="icon" type="icon" href="assets/images/favicon-icon.png">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="login-assets/css/style.css">
    <style>
        .form-group input:focus + label, .form-group input:not(:placeholder-shown) + label {
            top: 0px!important;
            left: 52px!important;
            color: #000;
        }
   </style>
</head>
<body id="top">
<div class="page_loader"></div>

<!-- Login 25 start -->
<div class="login-25">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-12 form-section">
                <div class="form-inner">
                    <a href="login-25.html" class="logo">
                        <img src="assets/images/logo.png" alt="logo">
                    </a>
                    <h3>Create an account</h3>
                    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congrats,</strong> your account has been created!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST" id="commonForm">
                            @csrf

                            <!-- Display Validation Errors -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                        <div class="form-group position-relative clearfix">
                            <input name="name" type="text" class="form-control" placeholder="Full Name" aria-label="Full Name" required>
                        </div>
                        <div class="form-group position-relative clearfix">
                            <input name="email" type="email" class="form-control" placeholder="Email Address" aria-label="Email Address" required>
                            <div class="login-popover login-popover-abs" data-bs-toggle="popover" data-bs-trigger="hover" title="Clarification" data-bs-content="And here's some amazing content. It's very engaging. Right?">
                                <i class="fa fa-info-circle"></i>
                            </div>
                        </div>
                        <div class="form-group clearfix position-relative password-wrapper">
                            <input name="password" type="password" class="form-control" autocomplete="off" placeholder="Password" aria-label="Password" required>
                            <i class="fa fa-eye password-indicator"></i>
                        </div>
                        
                        <div class="form-group checkbox clearfix">
                            <div class="clearfix float-start">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberme" required>
                                    <label class="form-check-label" for="rememberme">
                                        I agree to the terms of service
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group clearfix mb-0">
                            <button type="submit" class="btn btn-primary btn-lg btn-theme">Register</button>
                        </div>
                    </form>


                    <div class="clearfix"></div>
                   
                    <p>Already a member? <a href="{{ url('/login') }}">Login here</a></p>
                </div>
            </div>
            <!-- <div class="col-lg-6 align-self-center form-text">
                <div class="info clearfix align-self-center">
                    <h1 class="animate-charcter">Hamraa Insurance</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type scrambled it to make</p>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Login 25 end -->

<!-- External JS libraries -->
<script src="login-assets/js/jquery-3.6.0.min.js"></script>
<script src="login-assets/js/bootstrap.bundle.min.js"></script>
<script src="login-assets/js/jquery.validate.min.js"></script>
<script src="login-assets/js/app.js"></script>
<!-- Custom JS Script -->
</body>

</html>

@endsection
