@extends('layouts.admin')

@section('content')

<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Testimonial table</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Testimonial Name</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Review</th>
                                <th scope="col">Date</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Show</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonials as $testimonial)
                            <tr>
                                <th scope="row">{{$testimonial->id}}</th>
                                <td>{{$testimonial->testimonialName}}</td>
                                <td>{{$testimonial->subject}}</td>
                                <td>{{$testimonial->review}}</td>
                                <td>{{$testimonial->created_at}}</td>
                                <td><a href="editTestimonial/{{$testimonial->id}}">Edit</a></td>
                                <td><a href="deleteTestimonial/{{$testimonial->id}}">Delete</a></td>
                                <td><a href="testimonialDetails/{{$testimonial->id}}">Show</a></td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
@endsection