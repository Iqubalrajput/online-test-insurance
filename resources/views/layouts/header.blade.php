<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Insurance</title>
    <link rel="icon" type="icon" href="assets/images/favicon-icon.png">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&family=IBM+Plex+Sans&display=swap" rel="stylesheet"> 
    <!-- bold -->
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&family=IBM+Plex+Sans:wght@400;700&display=swap" rel="stylesheet"> 

    <!-- 5000 bold -->
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

</head>
<body>
    

<!-- header start -->
<header class="CustomHeader">

<div class="Topbar_Container">
<div class="container">
<div class="header_topbar">
            <div class="lefttopcontanet">
                 <ul>
                    <li><a href="##"><iconify-icon icon="quill:mail"></iconify-icon> info@alhamraains.com</a></li>
                 </ul>
            </div>
            <div class="Righttophed_content">
                <ul>
                    <li>
                        <a href=""><iconify-icon icon="jam:instagram"></iconify-icon></a>
                    </li>
                    <li>
                        <a href=""><iconify-icon icon="bxl:facebook"></iconify-icon></a>
                    </li>
                </ul>
            </div>
        </div>
</div>
</div>


    <div class="container">
        
    <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}"><img src="assets/images/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <iconify-icon icon="solar:hamburger-menu-broken"></iconify-icon>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0" id="navbar_Menu">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/') }}" onclick="setActiveLink(this)">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/about-us') }}" onclick="setActiveLink(this)">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/insurances') }}" onclick="setActiveLink(this)">Insurances</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/contact-us') }}" onclick="setActiveLink(this)">Contact Us</a>
            </li>
        </ul>

       <div class="navRight_login">
         <div class="callUs_section">
             <div class="iconcall">
             <iconify-icon icon="ph:phone"></iconify-icon>
             </div>
             <div class="contant_phonetext">
                 <span>Call us at</span>
                 <p>+964 782 1322 111</p>
             </div>
         </div>
       
       </div>
      </div>
      <!-- <div class="logincontainer">
           <a href="{{ url('/login') }}"> <button type="button">Login/Register</button></a>
         </div>
    </div> -->
    <div class="logincontainer">
    @if(Auth::check())
        <div class="dropdown">
        <i class="fa fa-user dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;"></i> 

        <ul class="dropdown-menu" aria-labelledby="userDropdown">
            <li>
                <a class="dropdown-item" href="{{ url('/profile') }}">Profile</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
            </li>
        </ul>
    </div>

    @else
        <!-- User is not logged in -->
        <a href="{{ url('/login') }}">
            <button type="button">Login/Register</button>
        </a>
    @endif
</div>

    <div class="dropdown profileDrop_menu">
  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    <div class="profile_user">
      <img src="assets/images/userimage.png" alt="">
    </div>
  </button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" href="#">Profile</a></li>
    <li><a class="dropdown-item" href="#">Logout</a></li>
  </ul>
</div>

    
  </nav>
    </div>
</header>