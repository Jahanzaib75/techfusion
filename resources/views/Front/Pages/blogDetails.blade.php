@extends('Front.template')
@section('content')
<section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="background: url('{{ asset('Front') }}/img/page-header-bg.svg')no-repeat bottom left">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h1 class="display-5 fw-bold">Blog</h1>
                <p class="lead">Why customer retention is the ultimate growth strategy</p>
            </div>
        </div>
        <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
    </div>
</section>
<!--page header section end-->



  <!--blog details section start-->
        <section class="blog-details ptb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8 pe-5">
                        <div class="blog-details-wrap">
                            <!-- <p>Objectively restore stand-alone markets rather than enterprise-wide products. Uniquely underwhelm best-of-breed mindshare through adaptive niches. Interactively leverage existing innovative e-services seamlessly parallel task open-source content without resource sucking technology.
                            </p> -->
                            <?php 
                            // foreach($record as $record){
                           echo $record->page_detail;
// } ?>
                       
                           
                            

                           
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="author-wrap text-center bg-light p-5 sticky-sidebar mt-5 mt-lg-0">
                            <img src="{{asset('uploads/blogs/orignal_images/' .$record->image)}}" alt="author" width="120" class="img-fluid shadow-sm rounded-circle">
                            <div class="author-info my-4">
                                <h5 class="mb-0">Jahanzaib Ramzan</h5>
                                <span class="small">Team Lead of App Developer</span>
                            </div>
                            <p>Uniquely communicate open-source technology after value-added ideas. Professionally engage efficient channels without B2C functionalities.</p>
                            <ul class="list-unstyled author-social-list list-inline mt-3 mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!--blog details section end-->
@endsection
@section("js")
<script src="{{ URL::asset('assets/themeJquery/contactUsForm/jquery.js') }}"></script>
<link href="{{ asset('Front') }}/css/intlTelInput.css" rel="stylesheet">
<script src="{{ asset('Front') }}/js/prism.js"></script>
<script src="{{ asset('Front') }}/js/intlTelInput.js"></script>
<script src="{{ URL::asset('assets/themeJquery/contactUsForm/jquery.js') }}"></script>
@endsection