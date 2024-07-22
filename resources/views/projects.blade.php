@extends('layouts.frontend.app')
@section('content')

    @include('layouts.common_slider')
    <style>
        .project-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .project-description {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }

        .card-img-top {
            object-fit: cover;
            height: 200px; /* Adjust the height as needed */
        }
        .project-divider {
            margin: 3rem 0; /* Adjust the spacing around the divider as needed */
            border-top: 1px solid #dee2e6; /* Customize the color of the divider */
        }
    </style>
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
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            @foreach ($projects as $key => $item)
                <div class="row g-5" style="border: 1px solid black; padding-bottom: 30px;">
                    <div class="col-12">
                        <h1 class="project-title">{{ $key + 1 }}. {{ $item->project_name }}</h1>
                        <p class="project-description">{{ $item->project_description }}</p>
                    </div>
                    @if($item->project_image)
                        <div class="col-12" style="">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                @foreach ($item->project_image as $path)
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{ Storage::url($path) }}" class="card-img-top" alt="Image">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
                <hr class="project-divider">
            @endforeach
        </div>        
    </div>

@endsection