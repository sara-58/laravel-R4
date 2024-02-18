@extends('layouts.admin')

@section('content')

<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Messages table</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Contact Name</th>
                                <th scope="col">Contact Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col">Readed</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Show</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                            <tr>
                                <th scope="row">{{$message->id}}</th>
                                <td>{{$message->contactName}}</td>
                                <td>{{$message->contactEmail}}</td>
                                <td>{{$message->contactSubject}}</td>
                                <td>{{$message->contactMessage}}</td>
                                <td>{{$message->readed}}</td>
                                <td><a href="deleteMessage/{{$message->id}}">Delete</a></td>
                                <td><a href="showMessage/{{$message->id}}">Show</a></td>
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