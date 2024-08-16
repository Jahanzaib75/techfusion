@extends('Front.template')
@section('content')
<!--about header section start-->
<section class="about-header-section ptb-120 position-relative overflow-hidden bg-dark" style="background: url('{{ asset('Front') }}/img/page-header-bg.svg')no-repeat center right">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading-wrap d-flex justify-content-between z-5 position-relative">
                    <div class="about-content-left">
                        <div class="about-info mb-5">
                            <h1 class="fw-bold display-5">Our Story</h1>
                            <!-- <p class="lead">Dynamically disintermediate technically sound technologies with compelling quality vectors error-free communities. </p> -->
                            <!-- <a href="career.html" class="btn btn-primary mt-4 me-3">Open Positions</a>
                            <a href="#our-team" class="btn btn-soft-primary mt-4">Meet Our Team</a> -->
                        </div>
                        <img src="{{ asset('Front') }}/img/about-img-1.jpg" alt="about" class="img-fluid about-img-first mt-5 rounded-custom shadow">
                    </div>
                    <div class="about-content-right" >
                        <img src="{{ asset('Front') }}/img/about-img-2.jpg" alt="about" class="img-fluid mb-5  rounded-custom shadow">
                        <img src="{{ asset('Front') }}/img/about-img-3.jpg" alt="about" class="img-fluid mb-5  rounded-custom shadow ">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white position-absolute bottom-0 h-25 bottom-0 left-0 right-0 z-2 py-5">
    </div>
</section>
<!--about header section end-->

<!--our story section start-->
<section class="our-story-section pt-60 pb-120" style="background: url('{{ asset('Front') }}/img/shape/dot-dot-wave-shape.svg')no-repeat left bottom">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 col-md-12 order-lg-1">
                <div class="section-heading sticky-sidebar">
                    <h4 class="h5 text-primary">Our Story</h4>
                    <h2>Our Client success history</h2>
                    <div>
                <input type="checkbox" class="read-more-state jcf-hidden" id="following-content">
                <p class="read-more-wrap">Believe us or not! It is not a castle in the sky but a truth!</p>
                <!-- read more goes here -->
                <p>We have started with honesty, dedication, and professionalism so now we are protecting their trust in order to provide the best we have. This is not a figure of speech, but we have justified ourselves with our success rate. Let’s see! With this integral approach, we have earned the trust of more than 20+ clients worldwide. Our expertise includes all the trends which provide our clients, the best story of success to describe. Internationally growing needs of Outsourcing and Out staffing are gradually showing their importance in the IT field. TechFusionPro is blessed with quality 150+ resources equipped with the perfect set of abilities to revolutionize our client’s businesses with IT in order to fulfill their needs in a professional manner.There must be a question! “Why would we have a high satisfaction rate?” The answer is simple i.e. we have hired our resources by focusing on Quality, not just quantity. After a thorough interview, we hire professionals like our name says “TechFusionPro”.</p>
                <!-- <label for="following-content" class="read-more-trigger"></label> -->
                <a href="/#qoute" class="btn btn-primarycontact text-center">Give us a try!</a>
            </div>
                    <!-- <div class="mt-4">
                        <h6 class="mb-3">We Are Awarded By-</h6>
                        <img src="{{ asset('Front') }}/img/awards-01.svg" alt="awards" class="me-4 img-fluid">
                        <img src="{{ asset('Front') }}/img/awards-02.svg" alt="awards" class="img-fluid">
                    </div> -->
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-lg-0">
                <div class="story-grid-wrapper position-relative">
                    <!--animated shape start-->
                    <ul class="position-absolute animate-element parallax-element shape-service">
                        <li class="layer" data-depth="0.02" >
                            <img src="{{ asset('Front') }}/img/color-shape/image-2.svg" alt="shape" class="img-fluid position-absolute color-shape-2 z-5">
                        </li>
                        <li class="layer" data-depth="0.03">
                            <img src="{{ asset('Front') }}/img/color-shape/feature-3.svg" alt="shape" class="img-fluid position-absolute color-shape-3">
                        </li>
                    </ul>
                    <!--animated shape end-->
                    <div class="story-grid rounded-custom bg-dark overflow-hidden position-relative">
                        <div class="story-item bg-light border">
                            <h3 class="display-5 fw-bold mb-1 text-success">300K+</h3>
                            <h6 class="mb-0">Active Users</h6>
                        </div>
                        <div class="story-item bg-white border">
                            <h3 class="display-5 fw-bold mb-1 text-primary">150+</h3>
                            <h6 class="mb-0">Team Members</h6>
                        </div>
                        <div class="story-item bg-white border">
                            <h3 class="display-5 fw-bold mb-1 text-dark">$600K+</h3>
                            <h6 class="mb-0">Revenue Per/Year</h6>
                        </div>
                        <div class="story-item bg-light border">
                            <h3 class="display-5 fw-bold mb-1 text-warning">5 Years</h3>
                            <h6 class="mb-0">In Business</h6>
                        </div>
                        <div class="story-item bg-light border">
                            <h3 class="display-5 fw-bold mb-1 text-danger">20+</h3>
                            <h6 class="mb-0">Clients Worldwide</h6>
                        </div>
                        <div class="story-item bg-white border">
                            <h3 class="display-5 fw-bold mb-1 text-primary">50+</h3>
                            <h6 class="mb-0">Projects Completed</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--our story section end-->

<!--feature section two start-->
<section class="feature-section-two ptb-120 bg-light">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="section-heading">
                    <!-- <h4 class="h5 text-primary">Our Values</h4> -->
                    <h2>Why are we different? </h2>
                    <p>If there would be a question or need for IT and you need a remote offshoring company to do your work in a professional manner without hassle then the answer would definitely be TechFusionPro. </p>
                    <ul class="list-unstyled mb-0">
                        <li class="py-1 custom-black-color list-spacing"><i
                                class="fad fa-check-circle me-2 custom-black-color"></i>This answer makes us different and we are just 2 clicks away! See more, what makes us different or best suitable for your need in such gifting price. </li>
                        <li class="py-1 custom-black-color list-spacing"><i
                                class="fad fa-check-circle me-2 custom-black-color"></i>Tech Fusion Pro always has quick Support where you do not need to wait forever to get the response. 
                        </li>
                        <li class="py-1 custom-black-color list-spacing"><i
                                class="fad fa-check-circle me-2 custom-black-color"></i>We have in-house training sessions which boost our employees' performances and also their productivity. 
                        </li>
                        <li class="py-1 custom-black-color list-spacing"><i
                                class="fad fa-check-circle me-2 custom-black-color"></i>We are adaptable to almost any client’s needs, as we offer several variants of Outsourcing and staff recruitment, and Outstaffing.
                        </li>
                        <li class="py-1 custom-black-color list-spacing"><i
                                class="fad fa-check-circle me-2 custom-black-color"></i>We have a solid track record of successful collaboration on large projects with top companies.
                        </li>
                        <li class="py-1 custom-black-color list-spacing"><i
                                class="fad fa-check-circle me-2 custom-black-color"></i>Ask for the developer and we will provide you with the person who is qualified on multiple stacks which defines our top service. 
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="feature-img-wrap position-relative d-flex flex-column align-items-end">
                    <ul class="img-overlay-list list-unstyled position-absolute">
                        <li class="d-flex align-items-center bg-white rounded shadow-sm p-3">
                            <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                            <h6 class="mb-0">Let us know your idea</h6>
                        </li>
                        <li class="d-flex align-items-center bg-white rounded shadow-sm p-3">
                            <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                            <h6 class="mb-0">Get a list of best matches</h6>
                        </li>
                        <li class="d-flex align-items-center bg-white rounded shadow-sm p-3">
                            <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                            <h6 class="mb-0">Get Relax</h6>
                        </li>
                    </ul>
                    <img src="{{ asset('Front') }}/img/frame10.png" alt="feature image" class="img-fluid rounded-custom">
                </div>
            </div>
        </div>
    </div>
</section>
<!--feature section two end-->

<!--team section start-->
<section  id="our-team"  class="team-section ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="section-heading text-center">
                    <h2 class="text-primary">Our Team</h2>
                    <h3>Our People behind your best experience.</h3>
                    <p>TechFusionPro has experts who usher ease of mind for you. </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($teams as $team)
                <div class="col-lg-3 col-md-6">
                    <div class="team-single-wrap mb-5">
                        <div class="team-img rounded-custom">
                            <img src="{{asset('uploads/teams/orignal_images/'.$team->image) ?? ''}}" alt="team" class="img-fluid position-relative">

                        </div>
                        <div class="team-info mt-4 text-center">
                            <h5 class="h6 mb-1">{{$team->name}}</h5>
                            <p class="text-muted small mb-0">{{$team->desigination}}</p>
                        </div>
                    </div>
                </div>  
                @endforeach
            </div> 
        </div>
    </div>
</section>
<!--team section end-->
@endsection
