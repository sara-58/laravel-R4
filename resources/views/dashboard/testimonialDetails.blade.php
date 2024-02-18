@extends('layouts.admin')

@section('content')
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <form action="{{route('testimonialDetails', $testimonial->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h2 class="mb-4">Testimonial Details</h2>
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <h4> Name: {{$testimonial->testimonialName}}</h4>
                            <br>
                            <h4>subject: {{$testimonial->subject}}</h4>
                            <br>
                            <h4>review: {{$testimonial->review}}</h4>
                            <br>
                            <h4>Image: </h4>
                            <div class="col-md-3 col-sm-3">
                                @if($testimonial->image)
                                <img src="{{ asset('assets/images/'.$testimonial->image) }}" alt="" style="width: 250px;">
                                @else
                                <p>No image available</p>
                                @endif
                            </div>
                            <br>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
@endsection