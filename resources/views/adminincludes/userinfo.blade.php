<div class="d-flex align-items-center ms-4 mb-4">
    <div class="position-relative">
        <img class="rounded-circle" src="{{ asset('assets/images/'.auth()->user()->image) }}" alt="" style="width: 40px; height: 40px;">
        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
    </div>
    @auth
    <div class="ms-3">
        <h6 class="mb-0">{{ auth()->user()->name }}</h6>
        <span>Admin</span>
    </div>
    @endauth
</div>