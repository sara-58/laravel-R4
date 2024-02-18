@extends('layouts.admin')

@section('content')
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row  bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4  ">
                <form action="{{route('updateClass', $class->id) }}" method="post">
                    @csrf
                    @method('put')
                    <h6 class="mb-4">Edit Class</h6>
                    <div class="form-floating mb-3 ">
                        <input type="text" class="form-control" id="className" required="required" placeholder="Class Name" name="className" value="{{ $class->className }}">
                        <label for="className">Class Name</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="number" class="form-control" id="capicity" required="required" placeholder="Capacity" name="capicity" value="{{ $class->capicity }}">
                        <label for="capicity">Capacity</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="number" class="form-control" id="age" required="required" placeholder="Age" name="age" value="{{ $class->age }}">
                        <label for="age">Age</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="time" class="form-control" id="timeFrom" required="required" placeholder="From" name="timeFrom" value="{{ $class->timeFrom }}">
                        <label for="timeFrom">From</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="time" class="form-control" id="timeTo" required="required" placeholder="To" name="timeTo" value="{{ $class->timeTo }}">
                        <label for="timeTo">To</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="number" class="form-control" id="price" required="required" placeholder="Price" name="price" value="{{ $class->price }}">
                        <label for="price">Price</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <select class="form-control" name="teacher_id" id="teacher_id" required="required" value="{{ $class->capicity }}">
                            <option value="{{ $class->teacher_id }}">{{$class->teacher->teacherName}}</option>
                                @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id}}">{{$teacher->teacherName}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" class="btn btn-primary"> Update </button>
                        <a href="{{ route('classes') }}" class="btn btn-primary ms-auto">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
@endsection