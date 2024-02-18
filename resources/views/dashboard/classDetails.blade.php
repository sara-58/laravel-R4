@extends('layouts.admin')

@section('content')
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <form action="{{route('classDetails', $class->id) }}" method="post">
                    @csrf
                    <h2 class="mb-4">Class Details</h2>
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <h4>Class Name: {{$class->className}}</h4>
                            <h4>Capacity: {{$class->capicity}}</h4>
                            <h4>Age: {{$class->age}}</h4>
                            <h4>From: {{$class->timeFrom}} To: {{$class->timeTo}}</h4>
                            <h4>Price: {{$class->price}}</h4>
                            <h4>Teacher: {{$class->teacher->teacherName}}</h4>
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