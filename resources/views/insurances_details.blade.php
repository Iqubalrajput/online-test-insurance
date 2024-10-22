@extends('layouts.app')

@section('title', 'Insurances details')

@section('content')
<section class="common_inner_banner" style="background-image:  url('assets/images/insurancebanner.jpg');">
    <div class="innerbanner_breadcrums">
        <h1>Silver Plan</h1>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/insurances-form')}}">Insurances</a></li>
                <li class="breadcrumb-item active" aria-current="page">Silver Plan</li>
            </ol>
        </nav>
    </div>
</section>

<section class="AboutOurCompany" id="plandescription">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="aboutCompany commonsection_content">
                    <span>Description</span>
                    <h1>Explore the world worry-free with our Silver Insurance</h1>
                    <p>We understand that the world is your playground, and exploring it should be a joy, not a worry.
                        That's why we proudly offer our Multi-Trip Insurance, an all-encompassing solution designed to
                        make your globetrotting adventures safer, more convenient, and more cost-effective than ever
                        before.</p>
                    <p>Whether you're a globetrotting enthusiast, a business explorer, or someone who simply craves the
                        thrill of new experiences, we're here to ensure that your journeys are as carefree as they are
                        unforgettable. Introducing our Multi-Trip Insurance, a comprehensive solution designed for the
                        modern traveler who seeks convenience, flexibility, and peace of mind on every expedition.
                    </p>
                    <a href="{{url('/insurances-form')}}"> <button type="button"
                            class="commonButtn_arrow btnlarge btncomn_grey">Get Started <iconify-icon
                                icon="gravity-ui:arrow-right"></iconify-icon></button>
                    </a>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="abgt_cmp_rightimg">
                    <div class="image_abexperi">
                        <img src="assets/images/insudetail-rightimg.jpg" alt="">
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="Insurance_Benefits_section">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-6 orderbeni1">
                <div class="benefits_Image">
                    <img src="assets/images/benefitsleftimg.png" alt="">
                </div>
            </div> -->
            <div class="col-lg-12 orderbeni2">
                <div class="benefitsRight_content">
                    <div class="aboutCompany commonsection_content">
                        <span>Benefits</span>
                        <h1>Benefits of Silver Plan</h1>

                        <!-- <div class="benefits_carddtr">
                            <ul>
                                <li>
                                    <div class="icon_left_beni"><img src="assets/images/beni1.png" alt=""></div>
                                    <div class="contentlist_beneif">
                                        <h3>Medical Expenses and Hospitalization Abroad</h3>
                                        <div class="PlansPrice">
                                            <h4>Price</h4>
                                            <div class="Price_amountPlan">35000</div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon_left_beni"><img src="assets/images/beni2.png" alt=""></div>
                                    <div class="contentlist_beneif">
                                        <h3>Transportation or Repatriation in case of lllness or Accident</h3>
                                        <div class="PlansPrice">
                                            <h4>Price</h4>
                                            <div class="Price_amountPlan">35000</div>
                                        </div>

                                    </div>
                                </li>

                                <li>
                                    <div class="icon_left_beni"><img src="assets/images/beni3.png" alt=""></div>
                                    <div class="contentlist_beneif">
                                        <h3>24/7 Global Support</h3>
                                        <div class="PlansPrice">
                                            <h4>Price</h4>
                                            <div class="Price_amountPlan">35000</div>
                                        </div>

                                    </div>
                                </li>

                                <li>
                                    <div class="icon_left_beni"><img src="assets/images/beni4.png" alt=""></div>
                                    <div class="contentlist_beneif">
                                        <h3>Effortless Enrollment</h3>
                                        <div class="PlansPrice">
                                            <h4>Price</h4>
                                            <div class="Price_amountPlan">35000</div>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="plans_Containertable">
                <div class="table_main__ table-responsive">

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                                    Benefits of Medical Expenses
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse show"
                                aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                <div class="accordion-body table-responsive">
                                    <table class="table table-bordered mb-2">

                                        <tbody>
                                            <tr>
                                                <th scope="row">Medical Expenses and Hospitalization
                                                    Abroad
                                                </th>
                                                <td>35,000</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Transportation or Repatriation in case of
                                                    Illness or Accident
                                                </th>
                                                <td>35,000</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Emergency Dental Care</th>
                                                <td colspan="2">Unavailable</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Repatriation of Insured's Mortal Remains
                                                    to Home Country
                                                </th>
                                                <td colspan="2">According to
                                                    Actual Cost, with a
                                                    Maximum of 5,000
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Medical Hospitalization Expenses due to
                                                    COVID-19 Disease
                                                </th>
                                                <td colspan="2">Unavailable</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Emergency Return to Home Country as a
                                                    result of close relative death (father, mother, brother, sister,
                                                    son, daughter)
                                                </th>
                                                <td colspan="2">Unavailable</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Travel of a Family Member in case of
                                                    Illness or Accident to Insured
                                                </th>
                                                <td colspan="2">Unavailable</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Personal Assistance Services
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body table-responsive">
                                    <table class="table table-bordered ">
                                        <tbody>
                                            <tr>
                                                <th scope="row">24-hour Assistance Services (Queries)
                                                </th>
                                                <td>Covered</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Medications Delivery Cost
                                                </th>
                                                <td>Unavailable</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Issuance of Guarantee</th>
                                                <td colspan="2">Unavailable</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Assistance in Legal Emergency Confrontation
                                                </th>
                                                <td colspan="2">Unavailable
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Insured Being Kidnapped in Visiting
                                                    Country

                                                </th>
                                                <td colspan="2">Unavailable</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Compensation for Baggage Delays
                                                    (exceeding 24 hours).

                                                </th>
                                                <td colspan="2">Unavailable</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Loss of Passport, Driver's License, or ID
                                                </th>
                                                <td colspan="2">Unavailable</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Compensation for Lost Luggage
                                                </th>
                                                <td colspan="2">8 euros per kg
                                                    less than 40 kg
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">Settlement and Shipment of Personal Items
                                                    in Case of Delay

                                                </th>
                                                <td colspan="2">Covered
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<!-- <section class="weCovered">
    <div class="container">
        <div class="centersection_heading">
            <h1>What’s Covered?</h1>
        </div>

        <div class="Covered_cards_items">
            <div class="row">
                <div class="col-lg-4">
                    <div class="covered_Item">
                        <div class="Covered_icoTitle">
                            <div class="coveredlhj_icon">
                                <img src="assets/images/coveredicon1.png" alt="">
                            </div>
                            <div class="crvc_Title">
                                <h2>Overseas <br class="removebrmedia"> Hospitalization</h2>
                            </div>
                        </div>

                        <p>Coverage for necessary medical expenses, including hospitalization, surgery, and doctor
                            visits, if you become ill or injured while traveling.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="covered_Item">
                        <div class="Covered_icoTitle">
                            <div class="coveredlhj_icon">
                                <img src="assets/images/coveredicon2.png" alt="">
                            </div>
                            <div class="crvc_Title">
                                <h2>Delayed <br class="removebrmedia"> Baggage</h2>
                            </div>
                        </div>

                        <p>Protection for your luggage and personal items against loss, theft, or damage during your
                            trip.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="covered_Item">
                        <div class="Covered_icoTitle">
                            <div class="coveredlhj_icon">
                                <img src="assets/images/coveredicon3.png" alt="">
                            </div>
                            <div class="crvc_Title">
                                <h2>Emergency <br class="removebrmedia"> Hotel Extension</h2>
                            </div>
                        </div>

                        <p>Whether your flight gets canceled,or unforeseen weather conditions disrupt your plans, this
                            coverage ensures you won't be left stranded.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="covered_Item">
                        <div class="Covered_icoTitle">
                            <div class="coveredlhj_icon">
                                <img src="assets/images/coveredicon4.png" alt="">
                            </div>
                            <div class="crvc_Title">
                                <h2>Travel <br class="removebrmedia"> Assistance</h2>
                            </div>
                        </div>

                        <p>24/7 access to a dedicated support team for help with travel-related issues, including lost
                            passports, legal assistance, and more.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="covered_Item">
                        <div class="Covered_icoTitle">
                            <div class="coveredlhj_icon">
                                <img src="assets/images/coveredicon5.png" alt="">
                            </div>
                            <div class="crvc_Title">
                                <h2>Trip <br class="removebrmedia"> Delay</h2>
                            </div>
                        </div>

                        <p>Reimbursement for additional expenses incurred due to travel delays, such as accommodation
                            and meals.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="covered_Item">
                        <div class="Covered_icoTitle">
                            <div class="coveredlhj_icon">
                                <img src="assets/images/coveredicon6.png" alt="">
                            </div>
                            <div class="crvc_Title">
                                <h2>Trip Cancellation <br class="removebrmedia"> and Interruption</h2>
                            </div>
                        </div>

                        <p>Reimbursement for non-refundable trip expenses in case you have to cancel your trip before
                            departure or cut it short due to covered reasons.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
@endsection
