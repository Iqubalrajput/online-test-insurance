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
                                                        <form id="updateForm" method="POST">
                                                         @csrf <!-- CSRF token for Laravel -->
                                                         <div class="row">
                                                            <div class="col-md-6">
                                                                  <div class="form-group">
                                                                     <input type="text" name="name" value="{{ old('name', $user->name) }}"placeholder="Enter First Name" required>
                                                                     <label class="form-label">First Name</label>
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                  <div class="form-group">
                                                                     <input type="text" name="last_name" value="{{ old('last_name', $user->last_name) }}" placeholder="Enter Last name" >
                                                                     <label class="form-label">Last Name</label>
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                  <div class="form-group">
                                                                     <input type="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Enter Email" required>
                                                                     <label class="form-label">Email</label>
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                  <div class="form-group">
                                                                     <input type="text" name="mobile_no"  value="{{ old('mobile_no', $user->mobile_no) }}" placeholder="Enter Mobile no" required>
                                                                     <label class="form-label">Contact Number</label>
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-12 text-end">
                                                                  <button class="btn theme_btn" type="submit">Update</button>
                                                                  <button class="btn theme_btn theme_btn2" type="button" onclick="cancelUpdate()">Cancel</button>
                                                            </div>
                                                         </div>
                                                      </form>

<div id="responseMessage"></div> <!-- Div to display messages -->

                                                    </div>
                                                </div>
                                            </div>
                                            <div id="about-me" class="tab-pane fade" role="tabpanel">
                                            <div class="">
                                                    <div class="settings-form">
                                                       <h4 class="tab_title">Change Password</h4>
                                                       <form id="passwordUpdateForm">
                                       <div class="row">
                                          <div class="col-md-4">
                                                <div class="form-group">
                                                   <input type="password" name="old_password" placeholder="*****" required>
                                                   <label class="form-label">Old Password</label>
                                                </div>
                                          </div>

                                          <div class="col-md-4">
                                                <div class="form-group">
                                                   <input type="password" name="new_password" placeholder="*****" required>
                                                   <label class="form-label">New Password</label>
                                                </div>
                                          </div>

                                          <div class="col-md-4">
                                                <div class="form-group">
                                                   <input type="password" name="confirm_password" placeholder="*****" required>
                                                   <label class="form-label">Confirm Password</label>
                                                </div>
                                          </div>

                                          <div class="col-md-12 text-end">
                                                <button class="btn theme_btn" type="submit">Update</button>
                                                <button class="btn theme_btn theme_btn2" type="button" onclick="cancelUpdate()">Cancel</button>
                                          </div>
                                       </div>
                                    </form>
                                    <div id="responseMessage_pass" style="margin-top: 20px;"></div>

<div id="responseMessage"></div> <!-- For displaying response messages -->

                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div id="profile-settings" class="tab-pane fade">
                                                <div class="">
                                                    <div class="settings-form">
                                                       <h4 class="tab_title">All Insurances</h4>
                                                         <div class="accordion" id="accordionExample">
                                                         @foreach($plans as  $index =>$plan)
                                                            <div class="accordion-item">
                                                                  <h2 class="accordion-header">
                                                                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$index}}" aria-expanded="true" aria-controls="collapseOne">
                                                                        <div class="insurancebox">
                                                                           <div class="inner_left">
                                                                           <div class="insurance_img">
                                                                              <img src="assets/images/insup1.jpg" alt="">
                                                                           </div>
                                                                           <div class="insurance_dt">
                                                                              <h4>{{$plan->name}}</h4>
                                                                              <p>{{ \Illuminate\Support\Str::limit($plan->description, 65, '...') }}</p>

                                                                           </div>
                                                                           </div>
                                                                           <div class="inner_right">
                                                                              <div class="date_">
                                                                                 <p>{{ \Carbon\Carbon::parse($plan->created_at)->format('F d, Y') }}</p>
                                                                              </div>
                                                                           </div>                        
                                                                        </div>
                                                                     </button>
                                                                  </h2>
                                                                  <div id="collapseOne{{$index}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                                     <div class="accordion-body">
                                                                     <div class="Form_startmain mt-3">
                                                                     @foreach($plan->insurancePurchases as $index => $user)
                                                                        <div class="row">
                                                                           <div class="col-lg-12 px-0">
                                                                                 <div class="person_bx">
                                                                                    <h6 class="person_title">Person {{ $index + 1 }}</h6>
                                                                                    <div class="row">
                                                                                       <div class="col-lg-6">
                                                                                             <div class="detail_box pe-4">
                                                                                                <ul>
                                                                                                   <li>
                                                                                                         <div class="detail_title">
                                                                                                            <h6>Full Name* (as per passport)</h6>
                                                                                                         </div>
                                                                                                         <div class="detail_ans">
                                                                                                            <h6>{{ $user->full_name ?? 'NA' }}</h6>
                                                                                                         </div>
                                                                                                   </li>
                                                                                                   <li>
                                                                                                         <div class="detail_title">
                                                                                                            <h6>Date of Birth</h6>
                                                                                                         </div>
                                                                                                         <div class="detail_ans">
                                                                                                            <h6>{{ $user->date_of_birth ? \Carbon\Carbon::parse($user->date_of_birth)->format('F d, Y') : 'NA' }}</h6>
                                                                                                         </div>
                                                                                                   </li>
                                                                                                   <li>
                                                                                                         <div class="detail_title">
                                                                                                            <h6>Marital Status</h6>
                                                                                                         </div>
                                                                                                         <div class="detail_ans">
                                                                                                            <h6>{{ $user->marital_status ?? 'NA' }}</h6>
                                                                                                         </div>
                                                                                                   </li>
                                                                                                   <li>
                                                                                                         <div class="detail_title">
                                                                                                            <h6>Number</h6>
                                                                                                         </div>
                                                                                                         <div class="detail_ans">
                                                                                                            <h6>{{ $user->number ?? 'NA' }}</h6>
                                                                                                         </div>
                                                                                                   </li>
                                                                                                   <li>
                                                                                                         <div class="detail_title">
                                                                                                            <h6>Policy Start Date</h6>
                                                                                                         </div>
                                                                                                         <div class="detail_ans">
                                                                                                            <h6>{{ $user->policy_start_date ? \Carbon\Carbon::parse($user->policy_start_date)->format('F d, Y') : 'NA' }}</h6>
                                                                                                         </div>
                                                                                                   </li>
                                                                                                   <li>
                                                                                                         <div class="detail_title">
                                                                                                            <h6>Nationality</h6>
                                                                                                         </div>
                                                                                                         <div class="detail_ans">
                                                                                                            <h6>{{ $user->nationality ?? 'NA' }}</h6>
                                                                                                         </div>
                                                                                                   </li>
                                                                                                   <li>
                                                                                                         <div class="detail_title">
                                                                                                            <h6>Price</h6>
                                                                                                         </div>
                                                                                                         <div class="detail_ans">
                                                                                                            <h6 class="price_highlight">
                                                                                                               $ {{ $user->price ? number_format($user->price, 2) : 'NA' }}
                                                                                                            </h6>
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
                                                                                                            <h6>{{ $user->gender ?? 'NA' }}</h6>
                                                                                                         </div>
                                                                                                   </li>
                                                                                                   <li>
                                                                                                         <div class="detail_title">
                                                                                                            <h6>Destination</h6>
                                                                                                         </div>
                                                                                                         <div class="detail_ans">
                                                                                                            <h6 class="destination">{{ $user->destination ?? 'NA' }}</h6>
                                                                                                         </div>
                                                                                                   </li>
                                                                                                   <li>
                                                                                                         <div class="detail_title">
                                                                                                            <h6>Passport ID number</h6>
                                                                                                         </div>
                                                                                                         <div class="detail_ans">
                                                                                                            <h6>{{ $user->passport_id ?? 'NA' }}</h6>
                                                                                                         </div>
                                                                                                   </li>
                                                                                                   <li>
                                                                                                         <div class="detail_title">
                                                                                                            <h6>Date of Guarantee</h6>
                                                                                                         </div>
                                                                                                         <div class="detail_ans">
                                                                                                            <h6>{{ $user->date_of_guarantee ? \Carbon\Carbon::parse($user->date_of_guarantee)->format('F d, Y') : 'NA' }}</h6>
                                                                                                         </div>
                                                                                                   </li>
                                                                                                   <li>
                                                                                                         <div class="detail_title">
                                                                                                            <h6>Expire of Guarantee</h6>
                                                                                                         </div>
                                                                                                         <div class="detail_ans">
                                                                                                            <h6>{{ $user->expire_of_guarantee ? \Carbon\Carbon::parse($user->expire_of_guarantee)->format('F d, Y') : 'NA' }}</h6>
                                                                                                         </div>
                                                                                                   </li>
                                                                                                   <li>
                                                                                                         <div class="detail_title">
                                                                                                            <h6>No. of days</h6>
                                                                                                         </div>
                                                                                                         <div class="detail_ans">
                                                                                                            <h6>{{ $user->no_of_days ?? 'NA' }}</h6>
                                                                                                         </div>
                                                                                                   </li>
                                                                                                   <li>
                                                                                                         <div class="detail_title">
                                                                                                            <h6>Uploaded Passport </h6>
                                                                                                         </div>
                                                                                                         <div class="detail_ans sign_img_bx">
                                                                                                            <div class="detail_ans sign_img_bx">
                                                                                                               <a href="{{ $user->uploaded_passport ? asset('storage/' . $user->uploaded_passport) : '#' }}" data-lightbox="gallery" data-title="Uploaded Passport">
                                                                                                                     <img src="{{ $user->uploaded_passport ? asset('storage/' . $user->uploaded_passport) : asset('path/to/default/image.jpg') }}" alt="Uploaded Passport">
                                                                                                               </a>
                                                                                                            </div>
                                                                                                         </div>
                                                                                                   </li>
                                                                                                </ul>
                                                                                             </div>
                                                                                       </div>
                                                                                    </div>
                                                                                 </div>
                                                                           </div>
                                                                        </div>
                                                                     @endforeach
                                                                                 <div class="col-lg-12 text-end mb-3">
                                                                                    <h4>Total Price : ${{ number_format($totalPrice, 2) }}</h4>
                                                                                 </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         @endforeach
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
