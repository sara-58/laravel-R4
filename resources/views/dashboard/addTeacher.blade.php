@extends('layouts.admin')

@section('content')
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row  bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4  ">
                <form action="{{route('storeTeacher') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h6 class="mb-4">Add Teacher</h6>
                    <div class="form-floating mb-3 ">
                        <input type="text" class="form-control" id="teacherName" required="required" placeholder="Name" name="teacherName">
                        <label for="title">Name</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="email" class="form-control" id="email" required="required" placeholder="Email" name="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="password" class="form-control" id="password" required="required" placeholder="Password" name="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="text" class="form-control" id="position" required="required" placeholder="Position" name="position">
                        <label for="position">Position</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="file" id="teacherImage" class="form-control " required="required" name="teacherImage">
                        <label for="teacherImage">Image</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="facebook" required="required" placeholder="facebook" name="facebook">
                        <label for="facebook">Facebook</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="twitter" required="required" placeholder="twitter" name="twitter">
                        <label for="twitter">Twitter</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="instagram" required="required" placeholder="instagram" name="instagram">
                        <label for="instagram">Instagram</label>
                    </div>
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" class="btn btn-primary"> Add </button>
                        <a href="{{ route('teachers') }}" class="btn btn-primary ms-auto">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
@endsection