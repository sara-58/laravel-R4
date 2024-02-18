@extends('layouts.admin')

@section('content')
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <form action="{{ route('storeTestimonial') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h6 class="mb-4">Add Testimonial</h6>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control border-0" id="testimonialName" placeholder="Testimonial Name" name="testimonialName">
                        <label for="testimonialName">Testimonial Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control border-0" id="subject" placeholder="Subject" name="subject">
                        <label for="subject">Subject</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control border-0" rows="5" id="review" placeholder="Review" name="review" style="height: 100px">Review</textarea>
                        <label for="review">Review</label>
                    </div>
                    <div class="form-floating mb-3">
                        <div class="form-floating">
                            <input type="file" class="form-control border-0" id="image" name="image">
                            <label for="image">Image</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" class="btn btn-primary"> Add </button>
                        <a href="{{ route('testimonials') }}" class="btn btn-primary ms-auto">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
@endsection