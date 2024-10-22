@extends('layouts.app')

@section('title', 'Login/Register')

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

</head>
<body id="top">
<div class="page_loader"></div>

<!-- Login 25 section start -->
<div class="login-25">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-12 form-section">
                <div class="form-inner">
                    <a href="login-25.html" class="logo">
                        <img src="assets/images/logo.png" alt="logo">
                    </a>
                    <h3>Sign Into Your Account</h3>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Sorry,</strong> Something went wrong!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <form action="#" method="POST" id="commonForm">
                        <div class="form-group position-relative clearfix">
                            <input name="email" type="email" class="form-control" placeholder="Email Address" aria-label="Email Address">
                            <div class="login-popover login-popover-abs" data-bs-toggle="popover" data-bs-trigger="hover" title="Clarification" data-bs-content="And here's some amazing content. It's very engaging. Right?">
                                <i class="fa fa-info-circle"></i>
                            </div>
                        </div>
                        <div class="form-group clearfix position-relative password-wrapper">
                            <input name="password" type="password" class="form-control" autocomplete="off" placeholder="Password" aria-label="Password">
                            <i class="fa fa-eye password-indicator"></i>
                        </div>
                        <div class="checkbox form-group clearfix">
                            <div class="form-check float-start">
                                <input class="form-check-input" type="checkbox" id="rememberme">
                                <label class="form-check-label" for="rememberme">
                                    Remember me
                                </label>
                            </div>
                            <a href="forgot-password.php" class="link-light float-end forgot-password">Forgot your password?</a>
                        </div>
                        <div class="form-group clearfix mb-0">
                            <a href="{{ url('/') }}"><button type="button" class="btn btn-primary btn-lg btn-theme">Login</button></a>
                        </div>
                        <!-- <div class="extra-login clearfix">
                            <span>Or Login With</span>
                        </div> -->
                    </form>
                    <div class="clearfix"></div>
                    <!-- <div class="social-list clearfix">
                        <div class="icon facebook">
                            <div class="tooltip">Facebook</div>
                            <span><i class="fa fa-facebook"></i></span>
                        </div>
                        <div class="icon twitter">
                            <div class="tooltip">Twitter</div>
                            <span><i class="fa fa-twitter"></i></span>
                        </div>
                        <div class="icon instagram">
                            <div class="tooltip">Google</div>
                            <span><i class="fa fa-google"></i></span>
                        </div>
                        <div class="icon github mr-0">
                            <div class="tooltip">Linkedin</div>
                            <span><i class="fa fa-linkedin"></i></span>
                        </div>
                    </div> -->
                    <p>Don't have an account? <a href="{{ url('/signup') }}" class="thembo"> Register here</a></p>
                </div>
            </div>
            <!-- <div class="col-lg-6 align-self-center form-text">
                <div class="info clearfix align-self-center">
                    <h1 class="animate-charcter">We Make Spectacular</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type scrambled it to make</p>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Login 25 section end -->

<!-- External JS libraries -->
<script src="login-assets/js/jquery-3.6.0.min.js"></script>
<script src="login-assets/js/bootstrap.bundle.min.js"></script>
<script src="login-assets/js/jquery.validate.min.js"></script>
<script src="login-assets/js/app.js"></script>
<!-- Custom JS Script -->
</body>

</html>

@endsection
