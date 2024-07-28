@extends('layouts.frontend.app')
@section('content')

    @include('layouts.common_slider')
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0"><a href="tel:{{ str_replace(' ', '', $general_settings->phone_no) }}" target="_blank">+91 {{ $general_settings->phone_no }}</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Email to get free quote</h5>
                            <h4 class="text-primary mb-0">{{ $general_settings->email }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Visit our office</h5>
                            <h4 class="text-primary mb-0">{{ $general_settings->short_address }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form method="POST" id="newForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" id="service_type" name="serviceType" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea id="message"  name="message" class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                            <div id="success" style="color: black"></div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.9210400141544!2d73.02830467428985!3d19.095160759491755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be795d5c3fdd3cf%3A0x94e82e71712154c7!2sUnit%20No.%207%2C%205th%20Floor%2C%20B%20Building%2C%20Gami%20Industrial%20Park%2C%20Plot%20C-39%20A%2C%20Pawane%20MIDC%2C%20Mahape%20Road%2C%20Navi%20Mumbai%2C%20Maharashtra%2040071!5e0!3m2!1sen!2sin!4v1690124670280!5m2!1sen!2sin"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    @foreach ($clientLogo as $item)
                        <img src="{{ asset('storage/'. $item->image) }}" alt="">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

    <script type="text/javascript">
        // $('.load').show();
        // $('#formSubmit').hide();
            
        $(document).ready(function(){
            $("#newForm").validate({
                rules: {
                    name: {
                        required: true,
                    },
                    // message: {
                    //     required: true,
                    // },
                    email: {
                        required: true,
                        email: true,
                    },
                    serviceType: {
                        required: true,
                    }
                },
                messages: {
                    name: {
                        required: "Please enter your name",
                    },
                    // message: {
                    //     required: "Please enter your message",
                    // },
                    email: {
                        required: "Please enter a valid email address",
                        email: "Please enter a valid email address",
                    },
                    serviceType: {
                        required: "Please select a service type",
                    }
                },
                submitHandler: function(form) {
                    $('.load').show();
                    $('#formSubmit').hide();
                    // Form is valid, submit using AJAX
                    var name = $("input[name=name]").val();
                    var message = $("#message").val();
                    var serviceType = $("#service_type").val();
                    var email = $("input[name=email]").val();
                    console.log(message);
                    $.ajax({
                        type:'POST',
                        url:"{{ route('submitForm') }}",
                        data:{
                            name: name, 
                            message: message, 
                            email: email, 
                            serviceType: serviceType,
                            _token: '{{ csrf_token() }}'
                        },
                        success:function(data){
                            $('.load').hide();
                            $('#formSubmit').show();
                            var messageBox = $('#success').text(data.message);
                            setTimeout(function () {
                                messageBox.fadeOut(500, function () {
                                    messageBox.remove();
                                });
                            }, 3000);
                        }
                    });
                }
            });
        });
    </script>
@endsection