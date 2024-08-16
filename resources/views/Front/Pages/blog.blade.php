@extends('Front.template')
@section('content')
<section class="page-header position-relative overflow-hidden ptb-120 bg-dark bg-image2 bg-image1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h1 class="display-5 fw-bold">Blog</h1>
                <p class="lead">Wanna spend some quality time with our useful blogs on IT, latest trends, and work life balance?
                    <span class="px-2" style="font-weight:600;color:#f5c66c">Let's dig into it!</span>
                </p>
            </div>
        </div>
    </div>
</section>
<!--page header section end-->

<!--blog section start-->
<section class="home-blog-section ptb-120 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-heading text-center">
                    <h2>Check our Latest Article</h2>
                    <p>Dynamically pursue process improvements
                        develop end-to-end customer service impactful action items and web-enabled markets.</p>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-grid">
                <div class="featured-post-wrapper">
                    <?php $counter = 1;
                    $isFirstSection = 0;
                    ?>
                    @foreach($record as $key => $records)

                    <?php
                    $counter++;
                    $true = $enable = 0;
                    if ($isFirstSection == $true) {
                    ?>
                        <div class="blog-item">

                            <div class="blog-content">
                                <div class="blog-media">
                                    <img src="{{asset('uploads/blogs/orignal_images/' .$records->image)}}" alt="article" class="img-fluid">
                                    <!-- <img src="{{asset('front')}}/img/blog/blog-1.jpg" alt="article" class="img-fluid"> -->
                                </div>
                                <div class="blog-text p-4 p-lg-5">
                                    <span class="featured-badge"><i class="fas fa-bookmark text-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Featured"></i></span>
                                    <a href="blogDetail/<?= $records->id ?>">
                                        <h3 class="h5">{{$records->tittle}}</h3>
                                    </a>
                                    <p>{{$records->detail}}</p>
                                    <!-- <p>Your waiting room is never going to be the same as what it was before COVID-19.
                Practice social distancing...</p> -->
                                    <div class="read-more-link">
                                        <a href="blogDetail/<?= $records->id ?>" class="mt-2 d-inline-flex align-items-center btn btn-sm btn-pill font-weight-bold"><span>Read
                                                More</span>
                                            <i class="far fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            <?php }
                    $isFirstSection = $counter;

            ?>

            @endforeach

            <div class="posts-wrapper">
                <?php $isFirstSection = 3 ?>
                @foreach($record as $records)
                <?php if ($isFirstSection != 3) {

                ?>
                    <div class="blog-item">
                        <div class="blog-content">
                            <div class="blog-media">
                                <img src="{{asset('uploads/blogs/orignal_images/' .$records->image)}}" alt="article" class="img-fluid">
                                <!-- <img src="{{asset('front')}}/img/blog/blog-1.jpg" alt="article" class="img-fluid"> -->
                            </div>
                            <div class="blog-text p-4 p-lg-5">
                                <a href="blogDetail/<?= $records->id ?>">
                                    <h3 class="h5">{{$records->tittle}}</h3>
                                </a>
                                <p>{{$records->detail}}</p>
                                <!-- <p>Your waiting room is never going to be the same as what it was before COVID-19.
Practice social distancing...</p> -->
                                <div class="read-more-link">
                                    <a href="blogDetail/<?= $records->id ?>" class="mt-2 d-inline-flex align-items-center btn btn-sm btn-pill font-weight-bold"><span>Read
                                            More</span>
                                        <i class="far fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
                $isFirstSection = 1 ?>
                @endforeach
            </div>

            </div>
        </div>
    </div>
    </div>
</section>
<!--blog section end-->

@endsection
@section("js")
<script src="{{ URL::asset('assets/themeJquery/contactUsForm/jquery.js') }}"></script>
<link href="{{ asset('Front') }}/css/intlTelInput.css" rel="stylesheet">
<script src="{{ asset('Front') }}/js/prism.js"></script>
<script src="{{ asset('Front') }}/js/intlTelInput.js"></script>
<script src="{{ URL::asset('assets/themeJquery/contactUsForm/jquery.js') }}"></script>
@endsection