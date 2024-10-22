@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<section class="common_inner_banner" style="background-image:  url('assets/images/contactbanner.jpg');">
    <div class="innerbanner_breadcrums">
        <h1>Contact Us</h1>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="insurances.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</section>

<section class="Contactaddress_area">
    <div class="container">
        <div class="Covered_cards_items">
            <div class="row">
                <div class="col-lg-4">
                    <div class="covered_Item">
                        <div class="Covered_icoTitle">
                            <div class="coveredlhj_icon">
                                <img src="assets/images/coveredicon1.png" alt="">
                            </div>
                            <div class="crvc_Title">
                                <h2>Baghdad Office</h2>
                            </div>
                        </div>

                        <p>Arrest Al-Hindia, Dist 929, St. 23, Bldg. 27 Baghdad, Iraq. P.O. Box 10491 Karrada</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="covered_Item">
                        <div class="Covered_icoTitle">
                            <div class="coveredlhj_icon">
                                <img src="assets/images/coveredicon2.png" alt="">
                            </div>
                            <div class="crvc_Title">
                                <h2>Basrah Office</h2>
                            </div>
                        </div>

                        <p>Basrah - Minawi Pasha, Opposite to Basrah Tourist Hotel Nando’s Restaurant Building - 3rd
                            floor
                            +964 7700 1700 16
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="covered_Item">
                        <div class="Covered_icoTitle">
                            <div class="coveredlhj_icon">
                                <img src="assets/images/coveredicon3.png" alt="">
                            </div>
                            <div class="crvc_Title">
                                <h2>Erbil Office</h2>
                            </div>
                        </div>

                        <p>Italian Village 1, Villa No. 357
                            +964 7505 0000 35

                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="contact_Form">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <div class="commonsection_content">
                     <span>Contact Us</span>
                     <h1>We value your feedback, questions, and inquiries.</h1>
                     <p>We strive to provide exceptional customer service and promptly address your inquiries. Your satisfaction is important to us, and we look forward to assisting you.</p>

                     <div class="contactMobilesec">
                        <div class="mobilecont_iconlgt">
                        <iconify-icon icon="ph:phone"></iconify-icon>
                        </div>
                        <div class="mobilenumbers">
                            <h3>Call Us at</h3>
                            <ul>
                                <li><a href="##">+964 782 1322 111 </a></li>
                                <li><a href="##">+964 782 1322 111  </a></li>
                                <li><a href="##">+964 782 1322 111  </a></li>
                            </ul>
                        </div>
                     </div>
                    </div>
            </div>
            <div class="col-lg-6">
                <div class="Contact_FromContainer">
                    <h2>Send us a message</h2>
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group">
            <input type="text" required>
            <label for="name">Full Name* (as per passport)</label>
        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
            <input type="email" required>
            <label for="email">Email</label>
        </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="form-group">
            <input type="text" required>
            <label for="subject">Subject</label>
        </div>
                        </div>

                        <div class="col-lg-12">
                        <div class="form-group textareaform_GRP">
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <label for="subject">Message</label>
        </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="Frm_Submit_button">
                            <button type="button">Submit</button>
                            </div>
                        </div>


                    </div>
        
        <!-- Add more form fields as needed -->

        
    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
