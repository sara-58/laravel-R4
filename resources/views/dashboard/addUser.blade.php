@extends('layouts.admin')

@section('content')
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <form action="{{route('storeUser') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h6 class="mb-4">Add User</h6>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" required="required" placeholder="Name" name="name">
                        <label for="title">Name:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" required="required" placeholder="Email" name="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" required="required" placeholder="Password" name="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="mobile" required="required" placeholder="Mobile" name="mobile">
                        <label for="mobile">Mobile</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="file" id="image" class="form-control " required="required" name="image">
                        <label for="image">Image</label>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="flat" name="active">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" class="btn btn-primary"> Add </button>
                        <a href="{{ route('users') }}" class="btn btn-primary ms-auto">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
@endsection