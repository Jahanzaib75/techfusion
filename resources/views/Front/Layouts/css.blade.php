<link href="{{ asset('Front') }}/css/font.css" rel="stylesheet">
<!--bootstrap css-->
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ asset('Front') }}/js/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="{{ asset('Front') }}/css/bootstrap.min.css">
<!--font-awesome css-->
<link rel="stylesheet" href="{{ asset('Front') }}/css/fontawesome-all.min.css">
<!--swiper slider css-->
<link rel="stylesheet" href="{{ asset('Front') }}/css/swiper-bundle.min.css">
<!--aos animation css-->
<link rel="stylesheet" href="{{ asset('Front') }}/css/aos.css">
<!--magnific popup css css-->
<link rel="stylesheet" href="{{ asset('Front') }}/css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="{{ asset('Front') }}/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('Front') }}/owlcarousel/owl.theme.default.min.css">

<!--custom css-->
<!-- sweet alerts -->

<link rel="stylesheet" href="{{ asset('Front') }}/css/style.css">
<link href="{{URL::asset('assets/css/toastr.min.css')}}" rel="stylesheet" />
<script src="{{URL::asset('assets/js/toastr.min.js')}}"></script>
<style>
    .bg-image2{
        background: url('{{ asset('Front') }}/img/blog/Frame17.svg')no-repeat;
        display: block !important;
    }
    .bg-image1{
        background: url('{{ asset('Front') }}/img/blog/Frame7.svg')no-repeat bottom left;
    }
@media (min-width: 1440px) and (max-width: 1920px) {
    .bg-image1{
        background: url('{{ asset('Front') }}/img/blog/Frame7.svg')no-repeat bottom left;
        display:block;
    }
    .bg-image2{
        background: url('{{ asset('Front') }}/img/blog/Frame17.svg')no-repeat;
    }
}
.Frame2{
        background: url('{{ asset('Front') }}/img/Frame15.svg')no-repeat;
        display: block !important;
    }
    .Frame1{
        background: url('{{ asset('Front') }}/img/Frame5.svg')no-repeat bottom left;
    }
@media (min-width: 1440px) and (max-width: 1920px) {
        .Frame1{
            background: url('{{ asset('Front') }}/img/Frame5.svg')no-repeat bottom left;
            display:block;
        }
        .Frame2{
            background: url('{{ asset('Front') }}/img/Frame15.svg')no-repeat;
        }
}
</style>