@extends('layouts.app')

@section('title', 'profile')

@section('content')
<style>
   .CustomHeader {
    border-bottom: 1px solid #d1d1d1;
}
</style>
        <!-- CONTAINER -->
        <div class="main-container container">
         <div class="row">
         <div class="col-lg-3 col-md-12">
               <div class="panel profile-cover">
                  <div class="profile-cover__action bg-img"></div>
                  <div class="profile-cover__img">
                        <div class="profile-img-1">
                           <img src="assets/images/3.jpg" alt="img">
                           <div class="text-dark">
                              <h3 class="profile_name">Percy Kewshun</h3>
                              <h5 class="pr_gmail">example@gmail.com</h5>
                           </div>
                        </div>
                                         
                           <div class="custom-tab">
                              <ul class="nav nav-tabs profile_tab" role="tablist">
                                    <li class="nav-item" role="presentation"><a href="#my-posts" data-bs-toggle="tab" class="nav-link active show" aria-selected="true" role="tab"><i class="fa-solid fa-house"></i> Personal Information</a>
                                    </li>
                                    <li class="nav-item" role="presentation"><a href="#about-me" data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1" role="tab"><i class="fa-solid fa-user-lock"></i> Change Password</a>
                                    </li>
                                    <li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1" role="tab"><i class="fa-solid fa-clipboard-list"></i> All Insurances</a>
                                    </li>
                                 </ul>
                           </div>
                        
                  </div>
                  
               </div>
            </div>
            <div class="col-lg-9">
                        <div class="card h-auto">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        
                                        <div class="tab-content">
                                            <div id="my-posts" class="tab-pane fade active show" role="tabpanel">
                                            <div class="">
                                                    <div class="settings-form">
                                                        <h4 class="tab_title">Personal Information</h4>
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <input type="email" placeholder="Liam" >
                                                                    <label class="form-label">First Name</label>
                                                                  </div>
                                                       
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <input type="password" placeholder="Risher" >
                                                                    <label class="form-label">Last Name</label>
                                                                  </div>
                                                                    
                                                                </div>
                                                                <div class="col-md-6">
                                                                <div class="form-group">
                                                                     <input type="text" placeholder="liamrisher@gmail.com" >
                                                                     <label class="form-label">Email</label>
                                                                  </div>
                                                               
                                                            </div>
                                                            <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <input type="text" placeholder="+91 789 278 4432" >
                                                                    <label class="form-label">Contact Number</label>
                                                                  </div>
                                                            </div>

                                                            <div class="col-md-12 text-end">
                                                            <button class="btn theme_btn" type="submit">Update</button>
                                                            <button class="btn theme_btn theme_btn2" type="submit">Cancel</button>
                                                            </div>
                                                            </div>
                                                           
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="about-me" class="tab-pane fade" role="tabpanel">
                                            <div class="">
                                                    <div class="settings-form">
                                                       <h4 class="tab_title">Change Password</h4>
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="*****" >
                                                                    <label class="form-label">Old Password</label>
                                                                  </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                     <div class="form-group">
                                                                    <input type="password" placeholder="*****" >
                                                                    <label class="form-label">New Password</label>
                                                                  </div>
                                                              
                                                                </div>
                                                                <div class="col-md-4">
                                                                <div class="form-group">
                                                                <input type="password" placeholder="*****" >
                                                                <label class="form-label">Confirm Password</label>
                                                               </div>
                                                               
                                                            </div>
                                                          
                                                            <div class="col-md-12 text-end">
                                                            <button class="btn theme_btn" type="submit">Update</button>
                                                            <button class="btn theme_btn theme_btn2" type="submit">Cancel</button>
                                                            </div>
                                                            </div>
                                                           
                                                        </form>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div id="profile-settings" class="tab-pane fade">
                                                <div class="">
                                                    <div class="settings-form">
                                                       <h4 class="tab_title">All Insurances</h4>
                                                         <div class="accordion" id="accordionExample">
                                                            <div class="accordion-item">
                                                               <h2 class="accordion-header">
                                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                     <div class="insurancebox">
                                                                        <div class="inner_left">
                                                                        <div class="insurance_img">
                                                                           <img src="assets/images/insup1.jpg" alt="">
                                                                        </div>
                                                                        <div class="insurance_dt">
                                                                           <h4>Silver Plan</h4>
                                                                           <p>United States of America, Canada, Japan, Australia</p>
                                                                        </div>
                                                                        </div>
                                                                        <div class="inner_right">
                                                                           <div class="date_">
                                                                              <p>January 26, 2023</p>
                                                                           </div>
                                                                        </div>
                     
                                                                     </div>
                                                                  </button>
                                                               </h2>
                                                               <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                                  <div class="accordion-body">
                                                                  <div class="Form_startmain mt-3">
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
                                                                                                <h6 class="destination">United States of America, Canada, Japan, Australia</h6>
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
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                               <h2 class="accordion-header">
                                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                  <div class="insurancebox">
                                                                        <div class="inner_left">
                                                                        <div class="insurance_img">
                                                                           <img src="assets/images/insup1.jpg" alt="">
                                                                        </div>
                                                                        <div class="insurance_dt">
                                                                           <h4>Silver Plan</h4>
                                                                           <p>United States of America, Canada, Japan, Australia</p>
                                                                        </div>
                                                                        </div>
                                                                        <div class="inner_right">
                                                                           <div class="date_">
                                                                              <p>January 26, 2023</p>
                                                                           </div>
                                                                        </div>
                     
                                                                     </div>
                                                                  </button>
                                                               </h2>
                                                               <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                               <div class="accordion-body">
                                                                  <div class="Form_startmain mt-3">
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
                                                                                                <h6 class="destination">United States of America, Canada, Japan, Australia</h6>
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
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                               <h2 class="accordion-header">
                                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                  <div class="insurancebox">
                                                                        <div class="inner_left">
                                                                        <div class="insurance_img">
                                                                           <img src="assets/images/insup1.jpg" alt="">
                                                                        </div>
                                                                        <div class="insurance_dt">
                                                                           <h4>Silver Plan</h4>
                                                                           <p class="destination">United States of America, Canada, Japan, Australia</p>
                                                                        </div>
                                                                        </div>
                                                                        <div class="inner_right">
                                                                           <div class="date_">
                                                                              <p>January 26, 2023</p>
                                                                           </div>
                                                                        </div>
                     
                                                                     </div>
                                                                  </button>
                                                               </h2>
                                                               <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                                  <div class="accordion-body">
                                                                  <div class="accordion-body">
                                                                  <div class="Form_startmain mt-3">
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
                                                                  </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<!-- Modal -->
									<div class="modal fade" id="replyModal">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Post Reply</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
												</div>
												<div class="modal-body">
													<form>
														<textarea class="form-control h-50" rows="4">Message</textarea>
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Reply</button>
												</div>
											</div>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
         </div>
 
            

           
        </div>
    </div>

</div>
@endsection
