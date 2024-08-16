@extends('Front.template')
@section('content')
<!--hero section start-->
<section class="hero-section ptb-80 text-white bg-gradient" style="background: url('{{asset('Front')}}/img/hero-dot-bg.png')no-repeat center right">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-10">
                <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                    <h1 class="fw-bold display-5">{{$meta->head_title ?? ''}}</h1>
                    <p class="lead">{{$meta->short_description ?? ''}}</p>
                    <div class="row justify-content-lg-start">
                        <div class="col-lg-12 mt-4">
                            <div class="position-relative d-flex flex-column h-100 flex-wrap bg-danger-soft p-5 rounded-custom">
                                <div class="cta-left-info mb-2">
                                    <h5 class="custom-black-color">Quick, Easy, and Seamless!</h5>
                                    <p class="light-black-color">We showcase to you the best talent pool. You choose the best resources according to your needs and budget. And that’s all about it. And that’s all it takes to hire certified professionals with TechFusionPro.</p>
                                </div>
                                <div class="action-btns mt-auto">
                                    <a href="#process" class="custom-icon"><i class="fas fa-arrow-down"></i></a>
                                </div>
                                <div class="cta-img position-absolute right-0 bottom-0">
                                    <img src="{{ asset('Front') }}/img/cta-img-1.png" alt="cta img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 mt-5">
                <div class="hero-img position-relative circle-shape-images">
                    <!--animated shape start-->

                    <!--animated shape end-->
                    <img src="{{ asset('Front') }}/img/hero-1-min.png" alt="hero img" class="img-fluid position-relative z-5">
                </div>
            </div>
        </div>
    </div>
</section>
<!--hero section end-->

<!--start clients owlcarusel -->
<section class="owl-section">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
            <div class="section-heading text-center" style="margin-top:12%;">
                <h2>Featured Projects</h2>
                <p>Here are some words from our best and happy customers all over the world, we really want your business to be featured on our website</p>
            </div>
        </div>
    </div>
    <div class="owl-carousel owl-theme display">
        @foreach($clinets as $client)
        <div class="item">
            <img style="max-height: 150px; max-width:150px;" src="{{asset('uploads/clients/orignal_images/'.$client->image) ?? ''}}">
        </div>
        @endforeach
    </div>
    <div class="row displayimg" style="width: 90%;margin: 0 auto;">
        @foreach($clinets as $client)
        <div class="col-md-2 col-sm-12 col-xs-12" id="container">
            <img style="max-height: 150px; max-width:150px;" src="{{asset('uploads/clients/orignal_images/'.$client->image) ?? ''}}">
        </div>
        @endforeach
    </div>
</section>
<!-- end clients owl carusel -->
<!-- our team carusel -->
<section class="owl-section ptb-60 d-none">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
            <div class="section-heading text-center" style="margin-top:12%;">
                <h2>Our Team</h2>
                <p>TechFusionPro has experts who usher ease of mind for you.</p>
            </div>
        </div>
    </div>
    <div class="owl-carousel owl-theme">
        @foreach($teams as $team)
        <div class="item">
            <div class="team-single-wrap mb-5 ml-5">
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
</section>
<!-- end our carusel team -->

<!--services section start-->
<section class="services-section ptb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-heading text-center">
                    <h2 class="text-primary">Services</h2>
                    <h3>What Type of Hiring Model Suits You Best?</h3>
                    <p>We know the one-size-fits-all approach doesn’t work well for hiring, particularly outsourcing. That’s why we offer you different types of tried and tested hiring models to hire professionals online at the best rates.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="main-process">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                            <div class="hiring-type-card" style="width:74%;">
                                <div class="feature-icon hiring-type-icon rounded-round">
                                    <img src="{{asset('icons/employee.ico')}}" class="w-100">
                                </div>
                                <div class="mt-3">
                                    <p class="process-title">Full-time Employee</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 custom-margins">
                            <div class="hiring-type-card" style="width:74%;">
                                <div class="feature-icon hiring-type-icon rounded-round">
                                    <img src="{{asset('icons/freelauncer.ico')}}" class="w-100">
                                </div>
                                <div class="mt-3">
                                    <p class="process-title">Freelancer</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 custom-margins">
                            <div class="hiring-type-card" style="width:74%;">
                                <div class="feature-icon hiring-type-icon rounded-round">
                                    <img src="{{asset('icons/team.ico')}}" class="w-100">
                                </div>
                                <div class="mt-3">
                                    <p class="process-title">Hire a Team</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--services section end-->

<section class="why-us ptb-60">
    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-heading text-center mb-4">
                    <h2>Our Services</h2>
                    <p>Years of industry exposure have helped TechFusionPro set up a diverse service pool, covering all areas essential for any business to thrive in the virtual world. Our resource pool comprises hand-picked professionals with a solid track record. We select them through a lengthy and strict vetting process, so you get the best services for the best rates.</p>
                    <a href="#qoute" class="btn btn-primarycontact text-center">Contact Us!</a>
                    <h4 class="text-primary mt-4">Our core services include</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills mt-4 justify-content-center feature-tab-list" id="pills-tab" role="tablist" data-mouse="click" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active custom-tab" href="#tab-1" id="pills-home-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-1" aria-selected="true">Web Development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-tab" href="#tab-2" id="pills-profile-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-2" aria-selected="false">Mobile App Development</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link custom-tab" href="#tab-7" id="pills-profile-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-7" aria-selected="false">.Net Development</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link custom-tab" href="#tab-3" id="pills-profile-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-3" aria-selected="false">Graphic Designing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-tab" href="#tab-4" id="pills-profile-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-4" aria-selected="false">SQA Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-tab" href="#tab-5" id="pills-profile-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-5" aria-selected="false">Project Management</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-tab" href="#tab-6" id="pills-profile-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-6" aria-selected="false">Digital Marketing</a>
                    </li>
                </ul>
                <div class="tab-content bg-lights text-white rounded-custom" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel">
                        <div class="row justify-content-center pb-0">
                            <div class="col-lg-12">
                                <div class="highlight-card rounded-custom p-5">
                                    <div class="feature-content">
                                        <h3 class="h5 custom-black-color">Our web development specialities</h3>
                                        <p class="custom-black-color">Our web development team specializes in giving you the best combo of function and aesthetics. The websites we design and develop are not only visually appealing but also focus on the best user interface (UI) and user experience (UX). That’s why they’re highly responsive too, meaning your visitors can access them whether they’re on desktops, mobiles, or tablets.</p>
                                        <p class="custom-black-color">Our web design and development team excel in</p>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12" style="float:left; padding-bottom:50px;">
                                            <h6 class="mt-4 custom-black-color">Backend Development</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Laravel</li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>NodeJS
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Codeigniter
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>PHP
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12" style="float:left; padding-bottom:50px;">
                                            <h6 class="mt-4 custom-black-color">Front-end Development</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>React JS
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Angular JS
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>HTML
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>CSS
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12" style="float:left; padding-bottom:50px;">
                                            <h6 class="mt-4 custom-black-color">Content Management System (CMS)</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Wordpress
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Shopify
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Magento
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-2" role="tabpanel">
                        <div class="row justify-content-center pb-0">
                            <div class="col-lg-12">
                                <div class="highlight-card rounded-custom p-5">
                                    <div class="feature-content">
                                        <h3 class="h5 custom-black-color">Our App development</h3>
                                        <p class="custom-black-color">In today’s world, it’s all about squeezing everything into the palm of your hand. That’s why it can be a game-changer for your business. And that’s why we deem app development as one of our core areas of strength. Our app development gives your users the convenience of accessing your services anytime, anywhere, resulting in greater user engagement, and higher revenue generation.</p>
                                        <!-- <p class="custom-black-color">In Tech Fusion Pro App Developers will be able to
                                                        develop the Hybrid Mobile Apps on the following Platforms:</p> -->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12" style="float:left; padding-bottom:50px;">
                                            <h6 class="mt-4 custom-black-color">Our app development team specializes in</h6>
                                            <ul class="list-unstyled mb-0">
                                                <!-- <li class="py-1 custom-black-color"><i
                                                                    class="fad fa-check-circle me-2 custom-black-color"></i>Hybrid Mobile Applications Development JS
                                                            </li> -->
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Native Android App Development
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>React Native.
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Swift.
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Java.
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Kotlin.
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Flutter.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-3" role="tabpanel">

                        <div class="row justify-content-center pb-0">
                            <div class="col-lg-12">
                                <div class="highlight-card rounded-custom p-5">
                                    <div class="feature-content">
                                        <h3 class="h5 custom-black-color">Our Graphic Designing</h3>
                                        <p class="custom-black-color">As an integral part of the TechFusionPro, our graphic designing team always anticipates new challenges, as their role allows them to take an idea and turn it into something beautiful and unique. They enjoy seeing a project come together from start to finish, and work on all types of print and digital designs. Brochures, business cards, banners, posters, social media assets — you name it, they do it!</p>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 bot"  style="float:left; padding-bottom:50px;">
                                            <h6 class="mt-4 custom-black-color">Always ready to embrace new tools and technologies, our design team’s preferred tools include</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Adobe Illustrator
                                                    </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Adobe Photoshop
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Adobe lightroom
                                                    </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Adobe Premiere Pro</li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Adobe Media Encoder
                                                    </li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 mar" style="float:left; padding-bottom:50px;">
                                            <h6 class="mt-4 custom-black-color" style="visibility:hidden;">Front-end Development</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Adobe After Effect
                                                    </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Adobe Indesign
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Adobe XD
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Figma
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Sketch
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-4" role="tabpanel">

                        <div class="row justify-content-center pb-0">
                            <div class="col-lg-12">
                                <div class="highlight-card rounded-custom p-5">
                                    <div class="feature-content">
                                        <h3 class="h5 custom-black-color">SQA Services</h3>
                                        <p class="custom-black-color">The role of software testing is as important in contemporary online experience as that of design and development services. That’s why we’ve built up a very formidable Quality Assurance team comprising of highly skilled and passionate individuals. They see and perform software testing as a perfect amalgam of art and science. Complementing their immaculate skillset is a themself-aware and self-critical attitude, which helps them best understand and deliver what’s needed.</p>
                                        <p class="custom-black-color">In Manual and Automations we are performing:</p>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 bot" style="float:left; padding-bottom:50px;">
                                            <h6 class="mt-4 custom-black-color">Our SQA team’s core strengths include</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Unit
                                                    Testing.</li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Integration
                                                    Testing.</li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>System
                                                    Testing.</li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Sanity
                                                    Testing.</li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Smoke
                                                    Testing.</li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 mar" style="float:left; padding-bottom:50px;">
                                            <h6 class="mt-4 custom-black-color" style="visibility:hidden;">Software
                                                Quality Assurance</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Interface
                                                    Testing.</li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Regression
                                                    Testing.</li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Beta/Acceptance
                                                    Testing.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-5" role="tabpanel">

                        <div class="row justify-content-center pb-0">
                            <div class="col-lg-12">
                                <div class="highlight-card rounded-custom p-5">
                                    <div class="feature-content">
                                        <h3 class="h5 custom-black-color">Project Management</h3>
                                        <p class="custom-black-color">TechFusionPro’s IT Project management services aim to assist you in eliminating the risk out of any online venture you intend to take. Our project management services make sure that your project completes in a timely and efficient manner, following exceptional quality standards. Whether you want to upscale in an existing area or want to embrace innovation, our team PM team will help you cut costs, improve delivery, and augment overall performance.</p>
                                        <p class="custom-black-color">In Manual and Automations we are performing:</p>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12" style="float:left; padding-bottom:50px;">
                                            <h6 class="mt-4 custom-black-color">Our Project Managers will be able to:
                                            </h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Plan
                                                    and Develop the Project Idea.</li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Create
                                                    and Lead Your Dream Team.</li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Monitor
                                                    Project Progress and Set Deadlines.</li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Solve
                                                    Issues That Arise.</li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Manage
                                                    the Money.</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-6" role="tabpanel">
                        <div class="row justify-content-center pb-0">
                            <div class="col-lg-12">
                                <div class="highlight-card rounded-custom p-5">
                                    <div class="feature-content">
                                        <h3 class="h5 custom-black-color">Digital Marketing</h3>
                                        <p class="custom-black-color">Today’s cutthroat competition entails equally competitive data-driven digital marketing campaigns. TechFusionPro team’s digital competitive analysis studies yours and your top competitors’ business to give you a digital competitive analysis. Based on that analysis, we identify gaps in your current market strategy, and our expert team devises a full-funnel digital marketing strategy to reach your target audience in the most proficient and cost-effective manner.</p>
                                        <!-- <p class="custom-black-color">In Manual and Automations we are performing:</p> -->
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12" style="float:left; padding-bottom:50px;">
                                            <h6 class="mt-4 custom-black-color">The scope of our digital marketing team includes:
                                            </h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>Social media Marketing
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>SEO
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>SMO
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>SEM
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-7" role="tabpanel">
                        <div class="row justify-content-center pb-0">
                            <div class="col-lg-12">
                                <div class="highlight-card rounded-custom p-5">
                                    <div class="feature-content">
                                        <h3 class="h5 custom-black-color">.Net Development</h3>
                                        <p class="custom-black-color">Nothing might serve your business better than the .net framework if it needs a variety of features to cater to a broader range of services. Our seasoned .net developers take advantage of the versatility and comprehensiveness of the .net framework to develop custom solutions for your business ranging from desktop and web-based applications to eCommerce solutions and content management solutions.</p>
                                        <!-- <p class="custom-black-color">In Manual and Automations we are performing:</p> -->
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12" style="float:left; padding-bottom:50px;">
                                            <h6 class="mt-4 custom-black-color">Our team’s development expertise on the .net framework includes but is not limited to:
                                            </h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>ASP.Net
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>C#
                                                </li>
                                                <li class="py-1 custom-black-color"><i class="fad fa-check-circle me-2 custom-black-color"></i>.Net Core
                                                </li>
                                                <!-- <li class="py-1 custom-black-color"><i
                                                                    class="fad fa-check-circle me-2 custom-black-color"></i>SEM
                                                            </li> -->
                                            </ul>
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
    <div id="process"></div>
</section>

<section class="work-process ptb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="section-heading text-center">
                    <h2 class="text-primary">Our Process</h2>
                    <h3>Worried about the nitty-gritty of finding the right candidate for the job?</h3>
                    <p>Your journey to hire experienced professionals seamlessly begins here with TechFusionPro in a few clicks.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 col-md-12 order-1 order-lg-0">
                <div class="img-wrap">
                    <img src="{{ asset('Front') }}/img/process-min.png" alt="work process" class="img-fluid rounded-custom">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                <ul class="work-process-list list-unstyled">
                    <li class="d-flex align-items-start mb-4">
                        <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                            <i class="fas fa-lightbulb fa-2x"></i>
                        </div>
                        <div class="icon-content">
                            <span class="h6 custom-black-color">Step 1</span>
                            <h3 class="h5 mb-2 custom-black-color">You Share, We Care</h3>
                            <p style="text-align: justify;">This journey begins with you sharing your concerns with us, and taking care of them. We dig deep into your issues, identify your hiring goals, and spin the roulette wheel.
                            </p>
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-4">
                        <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                            <i class="fas fa-th-list fa-2x"></i>
                        </div>
                        <div class="icon-content">
                            <span class="h6 custom-black-color">Step 2</span>
                            <h3 class="h5 mb-2 custom-black-color">Pick ‘n Choose</h3>
                            <p style="text-align: justify;">We showcase you with the best matches based on the requisite list of your desired candidate. All you need to do is go through their profile and hire an IT professional that suits you best.
                            </p>
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-4">
                        <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                            <i class="far fa-layer-group fa-2x"></i>
                        </div>
                        <div class="icon-content">
                            <span class="h6 custom-black-color">Step 3</span>
                            <h3 class="h5 mb-2 custom-black-color">Sit Back and Relax</h3>
                            <p style="text-align: justify;">With our top-notch professionals at your disposal, all you need to do is sit back and relax. They know their job well and make sure to go above and beyond your expectations.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="integration-section ptb-60">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-3">
                <div class="integration-list-wrap">
                    <a href="javascript:void(0)" class="integration-1 " data-bs-toggle="tooltip" data-bs-placement="top" title="Doocado" id="container">
                        <img src="{{ asset('Front') }}/img/usa-flag.png" alt="integration" class="img-fluid rounded-circles rounded-circle ">
                    </a>
                    <a href="javascript:void(0)" class="integration-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Eden Meet & Greet" id="container">
                        <img src="{{ asset('Front') }}/img/uk-flag.png" alt="integration" class="img-fluid rounded-circles rounded-circle">
                    </a>
                    <a href="javascript:void(0)" class="integration-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Retail Hub" id="container">
                        <img src="{{ asset('Front') }}/img/australlia-flag.png" alt="integration" class="img-fluid rounded-circles rounded-circle">
                    </a>

                    <a href="javascript:void(0)" class="integration-4" data-bs-toggle="tooltip" data-bs-placement="top" title="Dinehome" id="container">
                        <img src="{{ asset('Front') }}/img/norway-flag.png" alt="integration" class="img-fluid rounded-circles rounded-circle">
                    </a>
                    <a href="javascript:void(0)" class="integration-5" data-bs-toggle="tooltip" data-bs-placement="top" title="Foodara" id="container">
                        <img src="{{ asset('Front') }}/img/nepal-flag.png" alt="integration" class="img-fluid rounded-circles rounded-circle">
                    </a>
                    <a href="javascript:void(0)" class="integration-6" data-bs-toggle="tooltip" data-bs-placement="top" title="Lognz" id="container">
                        <img src="{{ asset('Front') }}/img/newzealand-flag.png" alt="integration" class="img-fluid rounded-circles rounded-circle">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="section-heading text-center my-5 my-lg-0 my-xl-0">
                    <!-- <h4 class="text-primary h5">Integration</h4> -->
                    <h2>Our collaboration with international businesses</h2>
                    <p>
                        Our top international projects and collaborations.
                    </p>
                    <!-- <a href="javascript:void(0)" class="mt-4 btn btn-primary">View all Integration</a> -->
                </div>
            </div>
            <div class="col-lg-3">
                <div class="col-lg-4">
                    <div class="integration-list-wrap">
                        <a href="javascript:void(0)" class="integration-7" data-bs-toggle="tooltip" data-bs-placement="top" title="Fajira" id="container">
                            <img src="{{ asset('Front') }}/img/pakistan-flag.png" alt="integration" class="img-fluid rounded-circle rounded-circles">
                        </a>
                        <a href="javascript:void(0)" class="integration-8" data-bs-toggle="tooltip" data-bs-placement="top" title="Icotour" id="container">
                            <img src="{{ asset('Front') }}/img/iceland-flag.png" alt="integration" class="img-fluid rounded-circle rounded-circles">
                        </a>
                        <a href="javascript:void(0)" class="integration-9 goo" data-bs-toggle="tooltip" data-bs-placement="top" title="Swiss Grocery" id="container">
                            <img src="{{ asset('Front') }}/img/switzerland.png" alt="integration" class="img-fluid rounded-circle rounded-circles">
                        </a>

                        <a href="javascript:void(0)" class="integration-10" data-bs-toggle="tooltip" data-bs-placement="top" title="Tuk tuk Thai" id="container">
                            <img src="{{ asset('Front') }}/img/thailand-flg.png" alt="integration" class="img-fluid rounded-circle rounded-circles">
                        </a>
                        <a href="javascript:void(0)" class="integration-11" data-bs-toggle="tooltip" data-bs-placement="top" title="Ordenapp" id="container">
                            <img src="{{ asset('Front') }}/img/mexico-flag.png" alt="integration" class="img-fluid rounded-circle rounded-circles">
                        </a>
                        <a href="javascript:void(0)" class="integration-12" data-bs-toggle="tooltip" data-bs-placement="top" title="Splintr" id="container">
                            <img src="{{ asset('Front') }}/img/dubai-flag.png" alt="integration" class="img-fluid rounded-circle rounded-circles">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature-promo ptb-60 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-heading text-center">
                    <h2>With "TechFusionPro" You Save Way More than Just Money?</h2>
                    <p>There’s a lot more than just money that you save choosing Tech Fusion Pro as your partner. You save time, hassle, energy, resources, and a lot of motivation to get going under these challenging times without distractions</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-feature-promo p-5 text-left mt-4">
                    <div class="feature-icon pb-5 rounded-custom bg-primary">
                        <i class="fab fa-connectdevelop fa-2x text-white"></i>
                    </div>
                    <div class="feature-info-wrap mt-4">
                        <h3 class="h5">Technological Innovations</h3>
                        <p>This era is all about staying abreast of fast-paced technological innovations. And TechFusionPro is no strange to teaching-up. We not only embrace the latest tools, techniques, and gadgets, but we also continually spruce up our ways of doing business on a global scale. It includes training and development of our resource pool, making sure they have a firm grip on all technical aspects of what they do as well as the communication norms.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature-promo p-5 text-left mt-4">
                    <div class="feature-icon pb-5 rounded-custom bg-danger">
                        <i class="fas fa-fighter-jet fa-2x text-white"></i>
                    </div>
                    <div class="feature-info-wrap mt-4">
                        <h3 class="h5">Project Management</h3>
                        <p>Gone are the days when skillset alone sufficed for completion of a job successfully. Today, it’s imperative to have top-notch project management skills. With multitasking becoming one of the basic requisites of a highly fulfilled resource. Our seasoned professionals how to gel in as part of a diverse team relying on their superb communication skills and familiarity with all modern project management tools.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature-promo p-5 text-left mt-4">
                    <div class="feature-icon pb-5 rounded-custom bg-dark">
                        <i class="fas fa-link fa-2x text-white"></i>
                    </div>
                    <div class="feature-info-wrap mt-4">
                        <h3 class="h5">Relationship Building</h3>
                        <p>One of the best things we’ve learned in our long years of industry exposure is that you can’t fare well if you’re not good at relationship building. That’s why we dig deep into what our partners bring to us their problems. We get the feel of who they are and what they want during the process before we come up with a solution well-orchestrated enough to solve their problems and be a part of their team simultaneously.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-60">
            <div class="col-lg-6 mt-4">
                <div class="position-relative d-flex flex-column h-100 flex-wrap bg-danger-soft p-5 rounded-custom">
                    <div class="cta-left-info mb-2">
                        <h5>Our Development Team</h5>
                        <p style="text-align: justify;">We take pride in our team of top-quality development and design specialists, helping us achieve landmark after landmark. We induct only the best resources in our team after vetting them through a grilling test that assesses their skills, aptitude, and more importantly, their passion and hunger to grow.</p>
                    </div>
                    <div class="action-btns mt-auto" id="container">
                        <a href="#qoute" class="btn btn-outline-primary btn-sm">Let's Start</a>
                    </div>
                    <div class="cta-img position-absolute right-0 bottom-0">
                        <img src="{{ asset('Front') }}/img/development-team-min.png" alt="cta img" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <div class="position-relative d-flex flex-column h-100 flex-wrap bg-primary-soft p-5 rounded-custom">
                    <div class="cta-left-info mb-2">
                        <h5>Our Project Managers & Outsourcing Operations</h5>
                        <p style="text-align: justify;">Similarly, our project management team (comprising of a bunch of really sharp project managers) has been the backbone of our outsourcing operations. They are not equipped with technical knowledge and team management skills, they’re also great at communicating and facilitating our clients.</p>
                    </div>
                    <div class="action-btns mt-auto" id="container">
                        <a href="#qoute" class="btn btn-outline-primary btn-sm">Let's Start</a>
                    </div>
                    <div class="cta-img position-absolute right-0 bottom-0">
                        <img src="{{ asset('Front') }}/img/other-outsource-min.png" alt="cta img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="our-clients"></div>
</section>
<!-- Testimonial section -->
<section class="customer-review-tab ptb-60 bg-gradient text-white position-relative z-2">
    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="col-md-10 col-lg-6">
                <div class="section-heading text-center">
                    <h2 class="text-warning">Testimonial</h2>
                    <h3>What do They Say About Us?</h3>
                    <p>We have dozens of clients and endless success stories to boast of. From startups to fast-growing small and medium businesses, we’ve helped countless businesses actualize their dreams. So, it’s about time you get that right from the horse’s mouth.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="testimonial-tabContent">
                    <?php $count = 0; ?>
                    @foreach($testimonial as $key => $test)
                    <?php $count++ ?>
                    <div class="tab-pane fade <?php if ($key == 0) {
                                                    echo 'active';
                                                } ?>  show" id="testimonial-tab-<?= $count ?>" role="tabpanel">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-md-6">
                                <div class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0">
                                    <!-- <img src="{{ asset('Front') }}/img/testimonial/quotes-left.svg"
                                            alt="testimonial quote" width="65" class="img-fluid mb-32"> -->
                                    <i class="fas fa-quote-left" style="font-size:40px;"></i>
                                    <div class="blockquote-title-review mb-4">
                                        <h3 class="mb-0 h4 fw-semi-bold">{{$test->company_name}}</h3>
                                        <ul class="review-rate mb-0 list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <blockquote class="blockquote">
                                        <p>{{$test->timespending}}</p>
                                    </blockquote>
                                    <div class="author-info mt-4">
                                        <h6 class="mb-0 custom-white">{{$test->name}}</h6>
                                        <span>{{$test->designation}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6">
                                <div class="author-img-wrap pt-5 ps-5">
                                    <div class="testimonial-video-wrapper position-relative">
                                        <img src="{{asset('uploads/testimonial/orignal_images/'.$test->image) ?? ''}}" class="img-fluid rounded-custom shadow-lg" alt="testimonial author">

                                        <div class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left">
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
    <div class="row justify-content-center">
        <div class="col-10">
            <ul class="nav nav-pills testimonial-tab-menu mt-60" id="testimonial" role="tablist">
                <?php
                $count = 0;
                ?>
                @foreach($testimonial as $test)
                <?php
                $count++;
                ?>
                <li class="nav-item" role="presentation">
                    <div class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link " data-bs-toggle="pill" data-bs-target="#testimonial-tab-<?= $count ?>" role="tab" aria-selected="false" style="height: 90px;">
                        <div class="testimonial-thumb me-3">
                            <img src="{{asset('uploads/testimonial/orignal_images/'.$test->image) ?? ''}}" width="50" class="rounded-circle" alt="testimonial thumb">
                        </div>
                        <div class="author-info">
                            <h6 class="mb-0">{{$test->name}}</h6>
                            <span>{{$test->designation}}</span>
                        </div>
                    </div>
                </li>
                @endforeach
                <!-- <li class="nav-item" role="presentation">
                        <div class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link"
                            data-bs-toggle="pill" data-bs-target="#testimonial-tab-3" role="tab" aria-selected="false">
                            <div class="testimonial-thumb me-3">
                                <img src="{{asset('Front')}}/img/testimonial/3.jpg" width="50" class="rounded-circle" alt="testimonial thumb">
                            </div>
                            <div class="author-info">
                                <h6 class="mb-0">Anissa</h6>
                                <span>CEO of Sympbanissa</span>
                            </div>
                        </div>
                    </li> -->
            </ul>
        </div>
    </div>
    </div>
</section>
<!-- end Testimonial section -->

<section class="cta-subscribe custom-color ptb-120 position-relative overflow-hidden" id="qoute">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="subscribe-info-wrap position-relative z-2">
                    <div class="section-heading">
                        <!-- <h4 class="h5 text-warning">Let's Try! Get Free Support</h4> -->
                        <h2 class="text-center">Let's qoute us</h2>
                        <!-- <p>We can help you to create your dream website for better business revenue.</p> -->
                    </div>
                    <div class="form-block-banner mw-65 m-auto mt-5">
                        <form id="email-form2" action="{{url('/submit-qoute')}}" name="email-form" class="qoute-form" data-redirecturl="{{ route('homepage') }}">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="firstName" class="mb-1">First name <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="firstname" class="test form-control" id="firstName" placeholder="First name" aria-label="First name">
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <label for="lastName" class="mb-1">Last name </label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="lastname" class="test form-control notrequired" id="lastName" placeholder="Last name" aria-label="Last name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="phone" class="mb-1">Phone  <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="contact" class="test form-control" id="account-phone" placeholder="Phone" aria-label="Phone" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" class="mb-1">Email <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="email" name="email" class="test form-control" id="email" placeholder="Email" aria-label="Email">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="yourMessage" class="mb-1">Message <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <textarea class="test form-control" name="detail" id="yourMessage" placeholder="How can we help you?" style="height: 120px"></textarea>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="Join!" data-wait="Please wait..." class="btn btn-primary qoute text-center">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
        <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
    </div>
</section>
<!--cat subscribe end-->
@endsection
@section('js')
<script src="{{ asset('Front') }}/js/custom.js"></script>
<link href="{{ asset('Front') }}/css/intlTelInput.css" rel="stylesheet">
<script src="{{ asset('Front') }}/js/prism.js"></script>
<script src="{{ asset('Front') }}/js/intlTelInput.js"></script>
<script src="{{ asset('assets/themeJquery/qouteus/jquery.js') }}"></script>
@endsection