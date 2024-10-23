@extends('layouts.app')

@section('title', 'Insurances  form')

@section('content')
<link rel="stylesheet" href="assets-form/css/animate.min.css">
		<link rel="stylesheet" href="assets-form/css/style.css">
	   


<section class="common_inner_banner" style="background-image:  url('assets/images/formbanner.jpg');">
    <div class="innerbanner_breadcrums">
        <h1>Insurance Form</h1>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="insurances.php">Insurances</a></li>
                <li class="breadcrumb-item active" aria-current="page">Silver Plan</li>
            </ol>
        </nav>
    </div>
</section>

<section class="InsuranceForm_start">
    <div class="container">

    <div class="multisteps-form">
						
                        <!--form panels-->
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="titleofthe_Form">
                                    <span>Please fill the details below</span>
                                    <h2>Insurance Application Form</h2>
                                </div>
                                 <div class="ternanoteandbutton">
                                    <span><strong>Note:</strong> All the fields with a ‘*’ are mandatory to fill.</span>
                                 </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="multisteps-form__progress">
                                    <button class="multisteps-form__progress-btn js-active"> Select Person </button>
                                    <button class="multisteps-form__progress-btn Prijzen_btn"> Person Details</button>
                                    <button class="multisteps-form__progress-btn Details_btn"> Insurance Details </button>
                                    <!-- <button class="multisteps-form__progress-btn Betalen_btn">  </button> -->
                    
                                </div>
                            </div>
                            <div class="col-12 col-lg-12 m-auto ">
                                <form class="multisteps-form__form clearfix" action="#" method="post" id="wizard">
                                @csrf    
                                @php
                                         $selectedPlan = session('selected_plan');
                                    @endphp
                                    <input type="hidden" name="plan_id" value="{{ $selectedPlan->id }}">
                                    <!--single form panel-->
                                    <div class="multisteps-form__panel js-active" data-animation="slideVert">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <div class="Form_startmain">
                                        <div class="row">
                                            <div class="col-lg-12 text-center">
                                              <h3 class="travel_title">How many people are travelling</h3>
                                            </div>
                                       <div class="col-lg-4 mx-auto mb-4">
                                      
                                                        <div class="form-group ">
                                                            <select id="numberOfPersons" name="" class="select2">
                                                              
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                            <label for="subject">Select Person </label>
                                                        </div>
                                                    </div>
                                       </div>
                                        </div>
                                            
                                        </div>
                                    </div>
                                        <div class="wizard-footer">
                                            <div class="actions">
                                                    <ul>
                                                        <li><span class="js-btn-next first_next_btn" title="NEXT" id="next_btn">NEXT   <i class="fa fa-arrow-right"></i></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </div>
                                
                                    <!--single form panel-->
                                    <div class="multisteps-form__panel" data-animation="slideVert">
                                    
                                        <div class="Form_startmain">
                                            <div class="person_bx">
                                                <h6 class="person_title">Person 1</h6>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                        
                                                            <input type="text" name="persons[1][first_name]"id="first_name_1" value="{{ $user->name }}" required readonly>
                                                            <label for="name">First Name  <span>*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <input type="text"  name="persons[1][last_name]" id="last_name_1"required value="{{ $user->last_name }}" required readonly>
                                                            <label for="name">Last Name  <span>*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <input type="text" id="insuranceDate" class="dobDate"  name="persons[1][dob]"
                                                                placeholder="dd/mm/yy">

                                                            <label for="email">Date of Birth <span>*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <input type="text"  name="persons[1][email]" id="email_2" required value="{{ $user->email }}" required readonly>
                                                            <label for="subject">Email</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="form-group ">
                                                            <input type="tel" value="+91"  name="persons[1][phone]" id="phone_1"class="TelPhoneinput">
                                                            <label for="subject">Number <span>*</span></label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="form-group ">
                                                            <label for="insuranceDate">Insurance Start Date:</label>
                                                            <input type="text"  class="insuranceDate"  name="persons[1][insurance_start]" id="insurance_start_1"
                                                                placeholder="Select a date">

                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="form-group ">
                                                            <select id="nationality" name="persons[1][nationality]" id="nationality_1" class="select2">
                                                                <option value="" selected disabled>Select Nationality</option>
                                                            </select>
                                                            <label for="subject">Nationality <span>*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group ">
                                                            <select id="" name="persons[1][marital_status]" id="marital_status_1" class="select2">
                                                                <option value="single">Single</option>
                                                                <option value="married">Married</option>
                                                                <option value="divorced">Divorced</option>
                                                                <option value="widowed">Widowed</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                            <label for="subject">Marital Status <span>*</span></label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="form-group ">
                                                            <select id="" name="persons[1][gender]" id="gender_1"class="select2">
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                <option value="non-binary">Non-Binary</option>
                                                                <option value="prefer-not-to-say">Prefer not to say</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                            <label for="subject">Gender <span>*</span></label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="form-group ">
                                                        <select id="numberOfDays" class="select2" name="persons[1][days]">
                                                        
                                                        </select>
                                                               
                                                            <label for="subject">No. of Days <span>*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="insuranceEndDate">Insurance End Date:</label>
                                                            <input type="text" id="insuranceEndDate" class="insuranceEndDate" name="persons[1][insurance_end]"
                                                                placeholder="End Date" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="form-group ">
                                                            <input type="text" name="persons[1][destination]" id="destination_1" required>
                                                            <label for="subject">Destination <span>*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group ">
                                                            <input type="text" name="persons[1][price]" id="price_1" required>
                                                            <label for="subject">Price </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group ">
                                                            <input type="text" name="persons[1][passport_id]" id="passport_id_1"required>
                                                            <label for="subject">Passport/ID Number <span>*</span></label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group ">
                                                            <input name="persons[1][passport_file]" id="passport_file_1"type="file" class="dropify" data-height="100" />

                                                            <label for="subject">Upload Passport <span>*</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="Form_startmain" id="personsContainer"></div>
                                            <!-- 111 -->
                                        <div class="Form_startmain">
                                            <!-- <div class="person_bx">
                                            <h6 class="person_title">Person 2</h6>
                                            <div class="row"> -->
                                                <!-- <div class="col-lg-12 text-center">
                                                <h3 class="travel_title">How many people are travelling</h3>
                                                </div> -->
                                                <!-- <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <input type="text" required>
                                                                <label for="name">First Name  <span>*</span></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <input type="text" required>
                                                                <label for="name">Last Name  <span>*</span></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <input type="text" id="insuranceDate" class="insuranceDate" name="insuranceDate"
                                                                    placeholder="dd/mm/yy">

                                                                <label for="email">Date of Birth <span>*</span></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group ">
                                                                <input type="text" required>
                                                                <label for="subject">Price </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group ">
                                                                <select id="" name="" class="select2">
                                                                    <option value="male">Male</option>
                                                                    <option value="female">Female</option>
                                                                    <option value="non-binary">Non-Binary</option>
                                                                    <option value="prefer-not-to-say">Prefer not to say</option>
                                                                    <option value="other">Other</option>
                                                                </select>
                                                                <label for="subject">Gender <span>*</span></label>
                                                            </div>
                                                        </div>

                                                        

                                                    

                                                        <div class="col-lg-4">
                                                            <div class="form-group ">
                                                                <input type="text" required>
                                                                <label for="subject">Passport/ID Number <span>*</span></label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="form-group ">
                                                                <input name="file1" type="file" class="dropify" data-height="100" />

                                                                <label for="subject">Upload Passport <span>*</span></label>
                                                            </div>
                                                        </div>

                                        
                                                </div>
                                            </div> -->

                                            <!-- <div class="person_bx">
                                                <h6 class="person_title">Person 3</h6>
                                            <div class="row"> -->
                                                <!-- <div class="col-lg-12 text-center">
                                                <h3 class="travel_title">How many people are travelling</h3>
                                                </div> -->
                                                <!-- <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <input type="text" required>
                                                                <label for="name">First Name  <span>*</span></label>
                                                            </div>
                                                        </div> -->
                                                        <!-- <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <input type="text" required>
                                                                <label for="name">Last Name  <span>*</span></label>
                                                            </div>
                                                        </div> -->
                                                        <!-- <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <input type="text" id="insuranceDate" class="insuranceDate" name="insuranceDate"
                                                                    placeholder="dd/mm/yy">

                                                                <label for="email">Date of Birth <span>*</span></label>
                                                            </div>
                                                        </div> -->
                                                        <!-- <div class="col-lg-4">
                                                            <div class="form-group ">
                                                                <input type="text" required>
                                                                <label for="subject">Price </label>
                                                            </div>
                                                        </div> -->
                                                        <!-- <div class="col-lg-4">
                                                            <div class="form-group ">
                                                                <select id="" name="" class="select2">
                                                                    <option value="male">Male</option>
                                                                    <option value="female">Female</option>
                                                                    <option value="non-binary">Non-Binary</option>
                                                                    <option value="prefer-not-to-say">Prefer not to say</option>
                                                                    <option value="other">Other</option>
                                                                </select>
                                                                <label for="subject">Gender <span>*</span></label>
                                                            </div>
                                                        </div> -->

                                                        

                                                    

                                                        <!-- <div class="col-lg-4">
                                                            <div class="form-group ">
                                                                <input type="text" required>
                                                                <label for="subject">Passport/ID Number <span>*</span></label>
                                                            </div>
                                                        </div> -->

                                                        <!-- <div class="col-lg-12">
                                                            <div class="form-group ">
                                                                <input name="file1" type="file" class="dropify" data-height="100" />

                                                                <label for="subject">Upload Passport <span>*</span></label>
                                                            </div>
                                                        </div> -->

                                        
                                                <!-- </div>
                                            </div> -->
                                            
                                            </div>
                                            <div class="wizard-footer">
                                                            <div class="actions">
                                                                <ul>
                                                                    <li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK</span></li>
                                                                    <li><span class="js-btn-next" title="NEXT" id="insurance_submitBtn">NEXT <i class="fa fa-arrow-right"></i></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                        </div>
                                    <!--single form panel-->
                                    <div class="multisteps-form__panel" data-animation="slideVert">
                                        <div class="Form_startmain" id="Form_startmain_data">
                                            <div class="row">
                                                <div class="col-lg-12 px-0">
                                                  <div class="person_bx">
                                                      <h6 class="person_title">Person 1</h6>
                                                      <div class="row">
                                                      <div class="col-lg-6">
                                                    <div class="detail_box pe-4">
                                                        <ul>
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Full Name* (as per passport)</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>Andrea Monroy</h6>
                                                                </div>
                                                            </li>
                                                        
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Date of Birth</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>May 5, 1994</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Marital Status</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>Single </h6>
                                                                </div>
                                                            </li>
                                                        
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Number</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>+839 39339 3939</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Policy Start Date</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>January 26, 2023</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Nationality</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>Venezuelan</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Price</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6 class="price_highlight">$4</h6>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                            
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="detail_box ps-4">
                                                        <ul>
                                                        <li>
                                                                <div class="detail_title">
                                                                    <h6>Gender</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>Female</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Destination</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>United States of America, Canada, Japan, Australia</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Passport ID number</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>AJSOD02020JDI</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Date of Guarantee</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>February 23, 2023</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Expire of Guarantee</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>March 23, 2023</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>No. of days</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>Less than 30 days</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                            <div class="detail_title">
                                                                <h6>Uploaded Passport </h6>
                                                            </div>
                                                            <div class="detail_ans sign_img_bx">
                                                            <!-- <img src="assets/images/passport.jpg" alt=""> -->
                                                            <a href="assets/images/passport.jpg" data-lightbox="gallery" data-title="Image 2">
                                                                <img src="assets/images/passport.jpg" alt="Image 2">
                                                            </a>
                                                            </div>
                                                            </li>
                                                        </ul>
                                                      
                                                    </div>
                                            
                                                </div>
                                                      </div>
                                                     </div>
                                                </div>
                                            
                                                <div class="col-lg-12 px-0 mt-3">
                                                    <div class="row">
                                                    <div class="col-lg-6">
                                                <div class="person_bx">
                                                      <h6 class="person_title">Person 1</h6>
                                                   
                                                      <div class="detail_box ">
                                                        <ul>
                                                        <li>
                                                                <div class="detail_title">
                                                                    <h6>Name</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>Jhon Monroy</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Date of Birth</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>March 23, 1995</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Gender</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>Male</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Price</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6 class="price_highlight">$6</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Passport ID number</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>AJSOD02020JDI</h6>
                                                                </div>
                                                            </li>
                                                           
                                                            <li>
                                                            <div class="detail_title">
                                                                <h6>Uploaded Passport </h6>
                                                            </div>
                                                            <div class="detail_ans sign_img_bx">
                                                            <!-- <img src="assets/images/passport.jpg" alt=""> -->
                                                            <a href="assets/images/passport.jpg" data-lightbox="gallery" data-title="Image 2">
                                                                <img src="assets/images/passport.jpg" alt="Image 2">
                                                            </a>
                                                            </div>
                                                            </li>
                                                        </ul>
                                                  
                                                    </div>
                                        
                                                   </div>
                                                </div>

                                                <div class="col-lg-6">
                                                <div class="person_bx">
                                                      <h6 class="person_title">Person 2</h6>
                                                   
                                                      <div class="detail_box ">
                                                        <ul>
                                                        <li>
                                                                <div class="detail_title">
                                                                    <h6>Name</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>Jhon Monroy</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Date of Birth</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>March 23, 1995</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Gender</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>Male</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Price</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6 class="price_highlight">$7</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="detail_title">
                                                                    <h6>Passport ID number</h6>
                                                                </div>
                                                                <div class="detail_ans">
                                                                    <h6>AJSOD02020JDI</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                            <div class="detail_title">
                                                                <h6>Uploaded Passport </h6>
                                                            </div>
                                                            <div class="detail_ans sign_img_bx">
                                                            <!-- <img src="assets/images/passport.jpg" alt=""> -->
                                                            <a href="assets/images/passport.jpg" data-lightbox="gallery" data-title="Image 2">
                                                                <img src="assets/images/passport.jpg" alt="Image 2">
                                                            </a>
                                                            </div>
                                                            </li>
                                                            
                                                        </ul>
                                                  
                                                    </div>
                                        
                                                   </div>
                                                </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-12 text-end mb-3">
                                                    <h4>Total Price : $17</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wizard-footer">
                                                        <div class="actions">
                                                              <ul>
                                                                <li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK</span></li>
                                                                  <li><span class="" title="NEXT" id="purchase_insurance">PAY NOW <i class="fa fa-arrow-right"></i></span></li>
                                                              </ul>
                                                          </div>
                                                      </div>
                                    </div>
                                    <!--single form panel-->
                                                    
                                </form>
                            </div>
                        </div>
                    </div>
       
    </div>
</section>
@endsection
