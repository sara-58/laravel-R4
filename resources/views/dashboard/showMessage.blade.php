@extends('layouts.admin')

@section('content')
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <form action="{{route('showMessage', $message->id) }}" method="post">
                    @csrf
                    <h2 class="mb-4">Message Details</h2>
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <h5>Contact Name: {{$message->contactName}}</h5>
                            <h5>Contact Email: {{$message->contactEmail}}</h5>
                            <h5>Subject: {{$message->contactSubject}}</h5>
                            <h5>Message: {{$message->contactMessage}}</h5>
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