@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
   <!-- home slider -->

<section class="Home_banner" style="background-image:  url('assets/images/bannerimg.jpg');">
    <div class="container">
        <div class="banner_content">
            <span>TRAVEL INSURANCE</span>
            <h1>Your dreams, <br class="removebrmedia"> our assurance</h1>
            <p>Adventure awaits, and so does our travel insurance. From lost luggage to unexpected delays, we've got you
                covered</p>

            <div class="bannerbuttonhome">

                <a href="insurances.php"> <button type="button" class="commonButtn_arrow btnlarge">Get Started
                        <iconify-icon icon="gravity-ui:arrow-right"></iconify-icon></button>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="home_about">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="aboutCompany commonsection_content">
                    <span>About Us</span>
                    <h1>Pioneering the Insurance Industry Since 2001</h1>
                    <p>Al Hamraa Company is an Insurance firm which started operating in 2001 providing advice and
                        professional assistance to clients to protect their property, assets, employees, earnings, and
                        liabilities on a cost-effective basis.</p>
                    <a href="about-us.php"> <button type="button" class="commonButtn_arrow btnlarge btncomn_grey">View
                            More <iconify-icon icon="gravity-ui:arrow-right"></iconify-icon></button>
                    </a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="imagesection_rightAB">
                    <img src="assets/images/aboutoverlap1.png" alt="" class="overlapimg1">
                    <img src="assets/images/aboutoverlap2.jpg" alt="" class="overlapimg2">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="allInsurances">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="aboutCompany allabout_insurance commonsection_content">
                    <span>Insurances</span>
                    <div class="allinsuranse_desc">
                        <p>We help you make an informed decision and ensure your travels are worry-free</p>

                    </div>
                    <a href="insurances.php"> <button type="button" class="commonButtn_arrow btnlarge btncomn_grey">View
                            All <iconify-icon icon="gravity-ui:arrow-right"></iconify-icon></button>
                    </a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="allinsurances_slider">
                    <div class="insurance_items row">
                        <div class="col-lg-4">
                            <div class="insurance_itemcard">
                                <div class="insurance_Cardimage">
                                    <img src="assets/images/insur1.jpg" alt="">
                                </div>
                                <div class="insuranceCardContent">
                                    <h1>Silver Plan</h1>
                                    <div class="insuright_icon">
                                        <iconify-icon icon="majesticons:arrow-right"></iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="insurance_itemcard">
                                <div class="insurance_Cardimage">
                                    <img src="assets/images/insur2.jpg" alt="">
                                </div>
                                <div class="insuranceCardContent">
                                    <h1>Gold Plan</h1>
                                    <div class="insuright_icon">
                                        <iconify-icon icon="majesticons:arrow-right"></iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="insurance_itemcard">
                                <div class="insurance_Cardimage">
                                    <img src="assets/images/insur3.jpeg" alt="">
                                </div>
                                <div class="insuranceCardContent">
                                    <h1>Diamond Plan</h1>
                                    <div class="insuright_icon">
                                        <iconify-icon icon="majesticons:arrow-right"></iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="haveaquestion">
    <div class="container">
        <div class="getintouch_content">
            <span>GET IN TOUCH WITH US</span>
            <h1>Have a question or need assistance?</h1>
            <a href="contact-us.php"> <button type="button" class="commonButtn_arrow btnlarge btncomn_grey">Contact Us
                    <iconify-icon icon="gravity-ui:arrow-right"></iconify-icon></button>
            </a>
        </div>
    </div>
</section>
@endsection
