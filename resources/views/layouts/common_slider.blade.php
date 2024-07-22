<!-- Navbar Start -->
  <div class="container-fluid position-relative p-0">
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                @if(request()->routeIs('about_us'))
                    <h1 class="display-4 text-white animated zoomIn">About us</h1>
                @elseif(request()->routeIs('services'))
                    <h1 class="display-4 text-white animated zoomIn">Services</h1>
                @elseif(request()->routeIs('contact_us'))
                    <h1 class="display-4 text-white animated zoomIn">Contact Us</h1>
                @elseif(request()->routeIs('projects'))
                    <h1 class="display-4 text-white animated zoomIn">Projects</h1>
                @endif
                <a href="" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                @if(request()->routeIs('about_us'))
                <a href="{{ route('about_us')}}" class="h5 text-white">About</a>
                @elseif(request()->routeIs('services'))
                <a href="{{ route('services')}}" class="h5 text-white">Service</a>
                @elseif(request()->routeIs('contact_us'))
                    <a href="{{ route('contact_us')}}" class="h5 text-white">Contact</a>
                @elseif(request()->routeIs('projects'))
                    <a href="{{ route('projects')}}" class="h5 text-white">Project</a>
                @endif
        </div>
        </div>
    </div>
</div>
<!-- Navbar End -->