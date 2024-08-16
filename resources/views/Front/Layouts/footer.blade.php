<footer class="footer-section">
    <div class="footer-top bg-gradient text-white ptb-120"
        style="background: url('{{ asset('Front') }}/img/page-header-bg.svg')no-repeat bottom right">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-8 col-lg-4 mb-md-4 mb-lg-0">
                    <div class="footer-single-col">
                        <div class="footer-single-col mb-4">
                            <img src="{{ asset('Front') }}/img/second-logo.png" alt="logo"
                                class="img-fluid custom-logo logo-white">
                            <img src="{{ asset('Front') }}/img/logos.png" alt="logo" class="img-fluid logo-color">
                        </div>
                        <p class="footer-text-color">TechFusionPro is offering its honest hand to you in order to get
                            your work done by professionals at reasonable rates. We will respect the amount you will pay
                            and consider your satisfaction as our bonus.</p>
                        <form class="newsletter-form position-relative d-block d-lg-flex d-md-flex subscribeFrom"
                            action="{{ route('submitSubsription') }}" method="POST"
                            data-redirecturl="{{ route('homepage') }}">
                            @csrf
                            <input type="text" class="test input-newsletter form-control me-2"
                                placeholder="Enter your email" name="subscriptionEmail" autocomplete="off">
                            <input type="submit" value="Subscribe" data-wait="Please wait..."
                                class="subscription_button btn btn-primary mt-3 mt-lg-0 mt-md-0">
                        </form>
                        <div class="ratting-wrap mt-4">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-7 mt-4 mt-md-0 mt-lg-0">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-4 mt-md-0 mt-lg-0">
                            <div class="footer-single-col">
                                <h3>Important Links</h3>
                                <ul class="list-unstyled footer-nav-list mb-lg-0">
                                    <li><a href="{{ route('homepage') }}"
                                            class="text-decoration-none footer-text-color">Home</a></li>
                                    <li><a href="{{ route('aboutus') }}"
                                            class="text-decoration-none footer-text-color">Our Story</a></li>
                                    <li><a href="{{ route('contactus') }}"
                                            class="text-decoration-none footer-text-color">Contact</a></li>
                                    <li><a href="{{ route('privacypolicy') }}"
                                            class="text-decoration-none footer-text-color">Privacy Policy</a></li>
                                    <li><a href="{{ route('termsandconditions') }}"
                                            class="text-decoration-none footer-text-color">Terms & Conditions</a></li>
                                    <li><a href="{{ route('faq') }}"
                                            class="text-decoration-none footer-text-color">FAQ's</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mt-4 mt-md-0 mt-lg-0">
                            <div class="footer-single-col">
                                <h3>Contact Us</h3>
                                <ul class="list-unstyled footer-nav-list mb-lg-0">
                                    <li><a class="text-decoration-none footer-text-color">Address : Pakistan, Punjab</a>
                                    </li>
                                    <li><a class="text-decoration-none footer-text-color">Phone : +923176002420</a></li>
                                    <li><a class="text-decoration-none footer-text-color">Email :
                                            info@techfusionpro.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--footer top end-->

    <!--footer bottom start-->
    <div class="footer-bottom bg-gradient text-white py-4">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-7 col-lg-7">
                    <div class="copyright-text">
                        <p class="mb-lg-0 mb-md-0 footer-text-color">Copyright © {{ date('Y') }} TechFusionPro. All
                            Rights Reserved.</p>
                    </div>
                </div>
                {{-- <div class="col-md-4 col-lg-4">
                    <div class="footer-single-col text-start text-lg-end text-md-end">
                        <ul class="list-unstyled list-inline footer-social-list mb-0 display-block"
                            style="display:block !important;">
                            <li class="list-inline-item"><a href="https://www.facebook.com/LetsTechFusionPro"><img
                                        src="{{ asset('icons/facebook.ico') }}" class="w-75 mr-0"></a></li>
                            <li class="list-inline-item"><a href="https://www.instagram.com/lets_hirepro/"><img
                                        src="{{ asset('icons/instagram.ico') }}" class="w-75 mr-0"></a></li>

                            <li class="list-inline-item"><a href="https://www.linkedin.com/in/hirepro"><img
                                        src="{{ asset('icons/linkedin.ico') }}" class="w-75 mr-0"></a></li>
                            <!-- <li class="list-inline-item"><a href="javascript:void(0)"><i class="fab fa-github"></i></a></li> -->
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!--footer bottom end-->
</footer>
<script src="{{ URL::asset('assets/themeJquery/subscribeUs/jquery.js?16132366868373343') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
    });
    $(document).off("click", ".action_publish").on("click", ".action_publish", function(event) {
        event.preventDefault();
        var id = $(this).attr('rel');
        var status = $(this).attr('status');
        $.ajax({
            type: 'POST',
            url: "<?= ADMIN_BASE_URL ?>category/change_status",
            data: {
                'id': id,
                'status': status
            },
            async: false,
            success: function(result) {
                toaster_success_setting();
                toastr.success("Status change successfully");
                location.reload();
            }
        });
    });
</script>
