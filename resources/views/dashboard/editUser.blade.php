@extends('layouts.admin')

@section('content')
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <form action="{{ route('updateUser', $user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <h6 class="mb-4">Edit User</h6>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                        <label for="title">Name:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="mobile" name="mobile" value="{{ $user->mobile }}">
                        <label for="mobile">Mobile</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="file" id="image" class="form-control " name="image" value="{{ $user->image }}">
                        <label for="image">Image</label>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="flat" name="active" @checked($user->published)>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" class="btn btn-primary"> Update </button>
                        <a href="{{ route('users') }}" class="btn btn-primary ms-auto">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
@endsection