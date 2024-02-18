@extends('layouts.admin')

@section('content')
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <form action="{{ route('updateTestimonial', $testimonial->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <h6 class="mb-4">Edit User</h6>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="testimonialName" name="testimonialName" value="{{ $testimonial->testimonialName }}">
                        <label for="title">Name:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="file" id="image" class="form-control " name="image" value="{{ $testimonial->image }}">
                        <label for="image">Image</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="subject" name="subject" value="{{ $testimonial->subject }}">
                        <label for="subject">Subject:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="review" name="review" value="{{ $testimonial->review }}">
                        <label for="review">Subject:</label>
                    </div>
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" class="btn btn-primary"> Update </button>
                        <a href="{{ route('testimonials') }}" class="btn btn-primary ms-auto">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
@endsection