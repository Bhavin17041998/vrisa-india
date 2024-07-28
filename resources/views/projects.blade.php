@extends('layouts.frontend.app')
@section('content')

    @include('layouts.common_slider')
    {{-- <style>
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
    </style> --}}
    <style>
        /* General styles */
        .project-container {
            padding: 30px;
            margin-bottom: 30px;
            border-radius: 15px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
    
        .project-container:hover {
            transform: translateY(-5px);
        }
    
        .project-header {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
    
        .project-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #333;
        }
    
        .project-subtitle {
            font-size: 1.1rem;
            font-weight: 400;
            margin-bottom: 1rem;
            color: #777;
        }
    
        .project-description {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: #666;
            text-align: justify;
        }
    
        .card-img-top {
            object-fit: cover;
            height: 250px; /* Adjust the height as needed */
            border-radius: 10px;
            transition: transform 0.3s;
        }
    
        .card-img-top:hover {
            transform: scale(1.05);
        }
    
        .project-divider {
            margin: 4rem 0; /* Adjust the spacing around the divider as needed */
            border-top: 2px solid #eee; /* Customize the color of the divider */
        }
    
        /* Responsive styles */
        @media (max-width: 768px) {
            .project-title {
                font-size: 2rem;
            }
    
            .project-subtitle {
                font-size: 1rem;
            }
    
            .project-description {
                font-size: 1rem;
            }
    
            .card-img-top {
                height: 200px; /* Adjust the height for smaller screens */
            }
        }
    
        @media (max-width: 576px) {
            .project-title {
                font-size: 1.75rem;
            }
    
            .project-subtitle {
                font-size: 0.9rem;
            }
    
            .project-description {
                font-size: 0.9rem;
            }
    
            .card-img-top {
                height: 150px; /* Adjust the height for extra small screens */
            }
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
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            @foreach ($projects as $key => $item)
                <div class="row g-5">
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