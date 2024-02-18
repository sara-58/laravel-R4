@extends('layouts.admin')

@section('content')
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <form action="{{route('teacherDetails', $teacher->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h2 class="mb-4">Teacher Details</h2>
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <h5> Name: {{$teacher->teacherName}}</h5>
                            <h5>Email: {{$teacher->email}}</h5>
                            <h5>Position: {{$teacher->position}}</h5>
                            <h5>Social:</h5>
                            <h6>{{$teacher->facebook}} , {{$teacher->twitter}} , {{$teacher->instagram}} </h6>
                            <h5>Image: </h5>
                            <div class="col-md-6 col-sm-6">
                                @if($teacher->teacherImage)
                                <img src="{{ asset('assets/images/'.$teacher->teacherImage) }}" alt="" style="width: 250px;">
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