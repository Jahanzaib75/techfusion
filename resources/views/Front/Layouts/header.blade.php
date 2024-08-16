<header class="main-header position-absolute w-100">
    <nav class="navbar navbar-expand-xl navbar-dark sticky-header" style="{{isset($header['zIndex'] ) && !empty($header['zIndex'] )? 'width:100%;z-index:999999999;': ''}}">
        <div class="container d-flex align-items-center justify-content-lg-between position-relative">
            <a href="{{route('homepage')}}" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                <img src="{{asset('Front')}}/img/second-logo.png" alt="logo" class="img-fluid custom-logo logo-white">
                <img src="{{asset('Front')}}/img/logos.png" alt="logo" class="img-fluid custom-logo logo-color">
            </a>
            <a class="navbar-toggler position-absolute right-0 border-0 " href="#offcanvasWithBackdrop" role="button">
                <span class="far fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"></span>
            </a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="nav col-12 col-md-auto  main-menu">
                    @foreach($data as $data)
                    <li class="nav-item">
                        <a class="nav-link" href="/{{$data->url_slug}}" role="button">
                            {{$data->page_title}}
                        </a>
                    </li>
                    @endforeach
                    <!-- <li><a href="{{route('aboutus')}}" class="nav-link">Our Story</a></li>
                    <li><a href="{{route('contactus')}}" class="nav-link">Contact</a></li> -->
                </ul>
            </div>
            <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                <a href="/#qoute" class="btn btn-primary">Get Started</a>
            </div>

            <!--offcanvas menu start-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                <div class="offcanvas-header d-flex align-items-center mt-4">
                    <a href="{{route('homepage')}}" class="d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="{{asset('Front')}}/img/logos.png" alt="logo" class="img-fluid custom-logo logo-color">
                    </a>
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close"><i class="far fa-close"></i></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                        <li><a href="{{route('homepage')}}" class="nav-link">Home</a></li>
                        <li><a href="{{route('aboutus')}}" class="nav-link">Our Story</a></li>
                        <li><a href="#our-clients" class="nav-link" data-bs-dismiss="offcanvas" aria-label="Close">Our Clients</a></li>
                        <li><a href="{{route('contactus')}}" class="nav-link">Contact</a></li>
                        <li><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
                        <div class="action-btns mt-4 ps-3">
                            <a href="/#qoute" class="btn btn-primary" data-bs-dismiss="offcanvas" aria-label="Close">Get Started</a>
                        </div>
                </div>
            </div>
            <!--offcanvas menu end-->
        </div>
    </nav>
</header>