@extends('layouts.admin')

@section('content')
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row  bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4  ">
                <form action="{{route('storeStudent') }}" method="post">
                    @csrf
                    <h6 class="mb-4">Add Student</h6>
                    <div class="form-floating mb-3 ">
                        <input type="text" class="form-control" id="childName" required="required" placeholder="Child Name" name="childName">
                        <label for="childName">Child Name</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="text" class="form-control" id="gurdianName" required="required" placeholder="Guardian Name" name="gurdianName">
                        <label for="gurdianName">Guardian Name</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="number" class="form-control" id="childAge" required="required" placeholder="Age" name="childAge">
                        <label for="childAge">Age</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="text" class="form-control" id="message" required="required" placeholder="Message" name="message">
                        <label for="message">Message</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="email" class="form-control" id="gurdianEmail" required="required" placeholder="Email" name="gurdianEmail">
                        <label for="gurdianEmail">Email</label>
                    </div>
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" class="btn btn-primary"> Add </button>
                        <a href="{{ route('students') }}" class="btn btn-primary ms-auto">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
@endsection