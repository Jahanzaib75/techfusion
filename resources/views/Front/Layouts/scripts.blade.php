<script src="{{ asset('Front') }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('Front') }}/js/smooth-scroll.polyfills.min.js"></script>
<script src="{{ asset('Front') }}/js/gumshoe.polyfills.min.js"></script>
<script src="{{ asset('Front') }}/js/swiper-bundle.min.js"></script>
<script src="{{ asset('Front') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('Front') }}/js/parallax.min.js"></script>
<script src="{{ asset('Front') }}/js/aos.js"></script>
<script src="{{ asset('Front') }}/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script type="text/javascript" src="{{ asset('Front') }}/owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 15,
        autoplay: true,
        autoplayTimeout: 4000,
        stagePadding: 10,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>
<script type="text/javascript">
    $('#owl-carousel').owlCarousel({
        loop: true,
        margin: 15,
        autoplay: false,
        autoplayTimeout: 4000,
        stagePadding: 10,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>
@yield('js')