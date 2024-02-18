@extends('layouts.admin')

@section('content')
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <form action="{{route('studentDetails', $student->id) }}" method="post">
                    @csrf
                    <h2 class="mb-4">Student Details</h2>
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <h5>Child Name: {{$student->childName}}</h5>
                            <h5>Guardian Name: {{$student->gurdianName}}</h5>
                            <h5>Age: {{$student->childAge}}</h5>
                            <h5>Email: {{$student->gurdianEmail}}</h5>
                            <h5>Message: {{$student->message}}</h5>
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