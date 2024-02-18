@extends('layouts.admin')

@section('content')

<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Classes table</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Class Name</th>
                                <th scope="col">Capacity</th>
                                <th scope="col">Age</th>
                                <th scope="col">From</th>
                                <th scope="col">To</th>
                                <th scope="col">Price</th>
                                <th scope="col">Teacher</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Show</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($classes as $class)
                            <tr>
                                <th scope="row">{{$class->id}}</th>
                                <td>{{$class->className}}</td>
                                <td>{{$class->capicity}}</td>
                                <td>{{$class->age}}</td>
                                <td>{{$class->timeFrom}}</td>
                                <td>{{$class->timeTo}}</td>
                                <td>{{$class->price}}</td>
                                <td>{{$class->teacher->teacherName}}</td>
                                <td><a href="editClass/{{$class->id}}">Edit</a></td>
                                <td><a href="deleteClass/{{$class->id}}">Delete</a></td>
                                <td><a href="classDetails/{{$class->id}}">Show</a></td>
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