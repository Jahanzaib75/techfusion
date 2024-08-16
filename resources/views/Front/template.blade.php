<!DOCTYPE html>
<html lang="en">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--twitter og-->
    <meta name="twitter:site" content="@themetags">
    <meta name="twitter:creator" content="@themetags">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="#">
    <!--facebook og-->
    <meta property="og:url" content="#">
    <meta property="og:image" content="#">
    <meta property="og:image:secure_url" content="#">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <!--meta-->
    <meta name="description" content="{{ $meta->meta_description ?? '' }}">
    <meta name="title" content="{{ $meta->meta_title ?? '' }}">
    <meta name="keyword" content="{{ $meta->meta_keywords ?? '' }}">
    <meta name="author" content="ThemeTags">
    <!--favicons-->
    <link rel="icon" type="image/png" href="{{ asset('Front') }}/img/fav.png" class="img-fluid">
    <!--title-->
    <title>{{ $meta->meta_title ?? '' }}</title>
    @include('Front.Layouts.css')
</head>

<body>
    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="{{ asset('Front') }}/img/logos.png" class="img-fluid" alt="logo"
                class="img-fluid preloader-icon" />
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">
        @include('Front.Layouts.header')
        @yield('content')
        @include('Front.Layouts.footer')
        @include('Front.Layouts.scripts')
        @include('admin.layouts.templateJquery')
        @include('Front.Layouts.validatePhone')
    </div>
</body>

</html>
