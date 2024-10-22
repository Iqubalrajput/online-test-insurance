@extends('layouts.app')

@section('title', 'Insurances')

@section('content')
<section class="common_inner_banner" style="background-image:  url('assets/images/insurancebanner.jpg');">
    <div class="innerbanner_breadcrums">
        <h1>Insurances</h1>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Insurances</li>
            </ol>
        </nav>
    </div>
</section>

<section class="Insurance_Detail_container">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="insurancePAGE_title">
                     <h2>Wide Range of Insurance Services</h2>
                     <p>We, at Al- Hamraa Insurance, are offering varieties of insurance products and services within the scope of the insurance industry in the country. We continuously develop and grow strong customer relationships and deliver excellence in all our products, operations, processes, and behaviors. Our products and services are guaranteed to be the most secure, the most trustworthy and the most beneficial to your situation.</p>
                </div>
            </div>
        </div>

        <div class="insuramce_subCards">
            <div class="row">
                <div class="col-lg-4">
                <div class="card">
  <img src="assets/images/insup1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title insu_cardTitle">Silver Plan</h5>
    <div class="planlist_detail">
        <ul>
            <li>
                <div class="iconcheck__"><iconify-icon icon="teenyicons:tick-circle-solid"></iconify-icon></div>
                <div class="plandetailpers">
                    <p><strong>Overseas Hospitalization:</strong>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </li>

            <li>
                <div class="iconcheck__"><iconify-icon icon="teenyicons:tick-circle-solid"></iconify-icon></div>
                <div class="plandetailpers">
                    <p><strong>Delayed Baggage:</strong>Lorem ipsum dolor sit amet consectetur. </p>
                </div>
            </li>
            <li>
                <div class="iconcheck__"><iconify-icon icon="teenyicons:tick-circle-solid"></iconify-icon></div>
                <div class="plandetailpers">
                    <p><strong>Emergency Hotel Extension:</strong>Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.  </p>
                </div>
            </li>

        </ul>
    </div>
    <div class="ins_cardBTN">
<a href="{{url('/insurances-details')}}">    <button type="button" class="commonButtn_arrow btnlarge btncomn_grey">Read More <iconify-icon icon="gravity-ui:arrow-right"></iconify-icon></button>
</a>
    </div>
  </div>
</div>
                </div>

                <div class="col-lg-4">
                <div class="card">
  <img src="assets/images/insur3.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title insu_cardTitle">Gold Plan</h5>
    <div class="planlist_detail">
        <ul>
            <li>
                <div class="iconcheck__"><iconify-icon icon="teenyicons:tick-circle-solid"></iconify-icon></div>
                <div class="plandetailpers">
                    <p><strong>Overseas Hospitalization:</strong>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </li>

            <li>
                <div class="iconcheck__"><iconify-icon icon="teenyicons:tick-circle-solid"></iconify-icon></div>
                <div class="plandetailpers">
                    <p><strong>Delayed Baggage:</strong>Lorem ipsum dolor sit amet consectetur. </p>
                </div>
            </li>
            <li>
                <div class="iconcheck__"><iconify-icon icon="teenyicons:tick-circle-solid"></iconify-icon></div>
                <div class="plandetailpers">
                    <p><strong>Emergency Hotel Extension:</strong>Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.  </p>
                </div>
            </li>

        </ul>
    </div>
    <div class="ins_cardBTN">
    <a href="{{url('/insurances-details')}}">    <button type="button" class="commonButtn_arrow btnlarge btncomn_grey">Read More <iconify-icon icon="gravity-ui:arrow-right"></iconify-icon></button>
</a>
    </div>
  </div>
</div>
                </div>

                <div class="col-lg-4">
                <div class="card">
  <img src="assets/images/insup2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title insu_cardTitle">Diamond Plan</h5>
    <div class="planlist_detail">
        <ul>
            <li>
                <div class="iconcheck__"><iconify-icon icon="teenyicons:tick-circle-solid"></iconify-icon></div>
                <div class="plandetailpers">
                    <p><strong>Overseas Hospitalization:</strong>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </li>

            <li>
                <div class="iconcheck__"><iconify-icon icon="teenyicons:tick-circle-solid"></iconify-icon></div>
                <div class="plandetailpers">
                    <p><strong>Delayed Baggage:</strong>Lorem ipsum dolor sit amet consectetur. </p>
                </div>
            </li>
            <li>
                <div class="iconcheck__"><iconify-icon icon="teenyicons:tick-circle-solid"></iconify-icon></div>
                <div class="plandetailpers">
                    <p><strong>Emergency Hotel Extension:</strong>Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.  </p>
                </div>
            </li>

        </ul>
    </div>
    <div class="ins_cardBTN">
    <a href="{{url('/insurances-details')}}">    <button type="button" class="commonButtn_arrow btnlarge btncomn_grey">Read More <iconify-icon icon="gravity-ui:arrow-right"></iconify-icon></button>
</a>
    </div>
  </div>
</div>
                </div>


            </div>
        </div>
    </div>
</section>


@endsection
