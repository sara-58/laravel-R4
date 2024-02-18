@extends('layouts.admin')

@section('content')
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row  bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4  ">
                <form action="{{route('storeClass') }}" method="post">
                    @csrf
                    <h6 class="mb-4">Add Class</h6>
                    <div class="form-floating mb-3 ">
                        <input type="text" class="form-control" id="className" required="required" placeholder="Class Name" name="className">
                        <label for="className">Class Name</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="number" class="form-control" id="capicity" required="required" placeholder="Capacity" name="capicity">
                        <label for="capicity">Capacity</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="number" class="form-control" id="age" required="required" placeholder="Age" name="age">
                        <label for="age">Age</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="time" class="form-control" id="timeFrom" required="required" placeholder="From" name="timeFrom">
                        <label for="timeFrom">From</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="time" class="form-control" id="timeTo" required="required" placeholder="To" name="timeTo">
                        <label for="timeTo">To</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="number" class="form-control" id="price" required="required" placeholder="Price" name="price">
                        <label for="price">Price</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <select class="form-control" name="teacher_id" id="teacher_id" required="required">
                            <option>Select Teacher</option>
                            @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id}}">{{$teacher->teacherName}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" class="btn btn-primary"> Add </button>
                        <a href="{{ route('classes') }}" class="btn btn-primary ms-auto">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
@endsection