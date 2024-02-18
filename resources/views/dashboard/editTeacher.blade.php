@extends('layouts.admin')

@section('content')
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <form action="{{route('updateTeacher', $teacher->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <h6 class="mb-4">Edit Teacher</h6>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="teacherName" name="teacherName" value="{{ $teacher->teacherName }}">
                        <label for="title">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" value="{{ $teacher->email }}">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="position" name="position" value="{{ $teacher->position }}">
                        <label for="position">Position</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="file" id="teacherImage" class="form-control" name="teacherImage" value="{{ $teacher->teacherImage }}">
                        <label for="teacherImage">Image</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $teacher->facebook }}">
                        <label for="facebook">Facebook</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="twitter" name="twitter" value="{{ $teacher->twitter }}">
                        <label for="twitter">Twitter</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $teacher->instagram }}">
                        <label for="instagram">Instagram</label>
                    </div>
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" class="btn btn-primary"> Update </button>
                        <a href="{{ route('teachers') }}" class="btn btn-primary ms-auto">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
@endsection