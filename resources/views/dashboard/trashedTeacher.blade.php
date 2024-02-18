@extends('layouts.admin')

@section('content')
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Trashed Teachers table</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Teacher Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Position</th>
                                <th scope="col">Facebook</th>
                                <th scope="col">Twitter</th>
                                <th scope="col">Instagram</th>
                                <th scope="col">Restore</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                            <tr>
                                <th scope="row">{{$teacher->id}}</th>
                                <td>{{$teacher->teacherName}}</td>
                                <td>{{$teacher->email}}</td>
                                <td>{{$teacher->position}}</td>
                                <td>{{$teacher->facebook}}</td>
                                <td>{{$teacher->twitter}}</td>
                                <td>{{$teacher->instagram}}</td>
                                <td><a href="restoreTeacher/{{$teacher->id }}">Restore</a></td>
                                <td><a href="delete/{{$teacher->id}}">Force Delete</a></td>
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