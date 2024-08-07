<!-- Topbar Start -->
@php
    $general_setttings = DB::table('general_settings')->first(); 
@endphp
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>{{ $general_setttings->short_address }}</small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+91 {{ $general_setttings->phone_no }}</small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>{{ $general_setttings->email }}</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $general_setttings->linkedin_link }}" target="_blank"><i
                        class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $general_setttings->instagram_link }}" target="_blank"><i
                        class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="{{ $general_setttings->facebook_link }}" target="_blank"><i
                        class="fab fa-whatsapp fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->