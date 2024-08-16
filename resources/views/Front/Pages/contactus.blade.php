@extends('Front.template')
@section('content')
<section class="page-header position-relative overflow-hidden ptb-120 bg-dark Frame1 Frame2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h1 class="display-5 fw-bold">Contact Us</h1>
                <!-- <p class="lead">Seamlessly actualize client-based users after out-of-the-box value data through frictionless expertise.</p> -->
            </div>
        </div>

    </div>
</section>
<!--page header section end-->

<!--contact us promo section start-->
<section class="contact-promo ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                    <span class="fad fa-envelope fa-3x text-primary"></span>
                    <div class="contact-promo-info mb-4">
                        <h5>Email Us</h5>
                        <p>Simply drop us an email at <strong>info@techfusionpro.com</strong>
                            and you'll receive a reply within 24 hours.</p>
                    </div>
                    <a href="mailto:info@techfusionpro.com" class="btn btn-primary mt-auto">Email Us</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                    <span class="fad fa-phone fa-3x text-primary"></span>
                    <div class="contact-promo-info mb-4">
                        <h5>Giving us your valued suggestions</h5>
                        <p>Give us a ring.Our Experts are standing by <strong>24 hours</strong>.
                        </p>
                    </div>
                    <a href="tel:+923176002420" class="btn btn-link mt-auto">+923176002420</a>
                </div>
            </div>
        </div>
    </div>
    <div id="qoute"></div>
</section>
<!--contact us promo section end-->
<!--contact us form start-->
<section class="contact-us-form pt-60 pb-120" style="background: url('{{ asset('Front') }}/img/shape/contact-us-bg.svg')no-repeat center bottom">
    <div class="container">
        <div class="row justify-content-lg-between align-items-center">
            <div class="col-lg-6 col-md-8">
                <div class="section-heading">
                    <h2>How our IT professionals are best for your business?</h2>
                </div>
                <form class="validationForm formSubmit" action="javascript:void(0)" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="firstName" class="mb-1">First name <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="text" name="firstname" class="form-control" id="firstName" placeholder="First name" aria-label="First name" required>
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <label for="lastName" class="mb-1">Last name</label>
                            <div class="input-group mb-3">
                                <input type="text" name="lastname" class="form-control notrequired" id="lastName" placeholder="Last name" aria-label="Last name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="phone" class="mb-1">Phone <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="text" name="phonenumber" class="form-control" id="account-phone" placeholder="Phone" aria-label="Phone" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="email" class="mb-1">Email<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email" aria-label="Email" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="yourMessage" class="mb-1">Message <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <textarea class="form-control" name="description" id="yourMessage" placeholder="How can we help you?" style="height: 120px" required></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 submit_button">Get in Touch</button>
                </form>
            </div>
            <div class="col-lg-5 col-md-10">
                <div class="contact-us-img">
                    <img src="{{ asset('Front') }}/img/contact-us-img-2.svg" alt="contact us" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="utilClassLink noneDiv">{{ asset('Front') }}/js/utils.js</div>
    <div class="formSubmitUrl noneDiv">{{ route('submitContactUs') }}</div>
    <div class="formRedirectUrl noneDiv">{{ route('homepage') }}</div>
</section>
@endsection
@section("js")
<script src="{{ URL::asset('assets/themeJquery/contactUsForm/jquery.js') }}"></script>
<link href="{{ asset('Front') }}/css/intlTelInput.css" rel="stylesheet">
<script src="{{ asset('Front') }}/js/prism.js"></script>
<script src="{{ asset('Front') }}/js/intlTelInput.js"></script>
<script src="{{ URL::asset('assets/themeJquery/contactUsForm/jquery.js') }}"></script>
@endsection