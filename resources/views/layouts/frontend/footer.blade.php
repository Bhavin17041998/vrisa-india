<!-- Footer Start -->
@php
    $general_setttings = DB::table('general_settings')->first(); 
@endphp
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp footer" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
                <div
                    class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                    <a href="index.html" class="navbar-brand">
                        {{-- <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>Startup</h1> --}}
                        <img src="{{ asset('img/logos/logo-no-background2.svg') }}" width="300px" height="auto" />
                    </a>
                    <p class="mt-3 mb-4">Lorem diam sit erat dolor elitr et, diam lorem justo amet clita stet eos sit.
                        Elitr dolor duo lorem, elitr clita ipsum sea. Diam amet erat lorem stet eos. Diam amet et kasd
                        eos duo.</p>
                    {{-- <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-dark">Sign Up</button>
                        </div>
                    </form> --}}
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Get In Touch</h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">{{ $general_setttings->address }}</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">{{ $general_setttings->email }}</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">+91 {{ $general_setttings->phone_no }}</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square me-2" href="#"><i
                                    class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="#"><i
                                    class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="{{ $general_setttings->linkedin_link }}"><i
                                    class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square" href="{{ $general_setttings->instagram_link }}" target="_blank"><i
                                    class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Quick Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="{{ route('home') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-light mb-2" href="{{ route('about_us') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-light mb-2" href="{{ route('services') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                            <a class="text-light mb-2" href="{{ route('projects') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Projects</a>        
                            {{-- <a class="text-light mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                            <a class="text-light mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a> --}}
                            <a class="text-light" href="{{ route('contact_us') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Popular Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="{{ route('home') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-light mb-2" href="{{ route('about_us') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-light mb-2" href="{{ route('services') }}"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                            <a class="text-light mb-2" href="{{ route('projects') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Projects</a>    
                            {{-- <a class="text-light mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                            <a class="text-light mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a> --}}
                            <a class="text-light" href="{{ route('contact_us') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white footer">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; 2024 <a class="text-white border-bottom" href="#">Vrisa India pvt.ltd</a>.
                        All Rights Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Design and Devloped by <a class="text-white border-bottom" href="#">Bhavin Panchal</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->