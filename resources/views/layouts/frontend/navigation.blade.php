<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-2 py-3 py-lg-0">
        <a href="{{ route('home') }}" class="navbar-brand p-0">
            <img src="{{ asset('img/logos/logo-no-background.svg') }}" id="sticky-image2" style="width: 350px; height:auto">
            <img src="{{ asset('img/logos/logo-no-background1.svg') }}" id="sticky-image" style="width: 350px; height:auto">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about_us') }}" class="nav-item nav-link {{ request()->routeIs('about_us') ? 'active' : '' }}">About</a>
                <a href="{{ route('services') }}" class="nav-item nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                <a href="{{ route('projects') }}" class="nav-item nav-link {{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a>

                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="detail.html" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="feature.html" class="dropdown-item">Our features</a>
                        <a href="team.html" class="dropdown-item">Team Members</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                    </div>
                </div> --}}
                {{-- <a href="{{ route('contact_us') }}" class="nav-item nav-link">Contact</a> --}}
            </div>
            {{-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal">
                <i class="fa fa-search"></i></butaton> --}}
                <a href="{{ route('contact_us') }}" class="btn btn-primary py-2 px-4 ms-3">Contact Us</a>
            {{-- <a href="https://htmlcodex.com/startup-company-website-template"
                class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a> --}}
        </div>
    </nav>
</div>
<!-- Navbar & Carousel End -->


