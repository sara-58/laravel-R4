@extends('layouts.admin')

@section('content')
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Trashed Students </h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Child Name</th>
                                <th scope="col">Guardian Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Restore</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <th scope="row">{{$student->id}}</th>
                                <td>{{$student->childName}}</td>
                                <td>{{$student->gurdianName}}</td>
                                <td>{{$student->childAge}}</td>
                                <td><a href="restoreStudent/{{$student->id }}">Restore</a></td>
                                <td><a href="delete/{{$student->id}}">Force Delete</a></td>
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