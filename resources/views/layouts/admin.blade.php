<!DOCTYPE html>
<html lang="en">

@include('adminincludes.adminhead')

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @include('adminincludes.adminside')

        <!-- Content Start -->
        <div class="content">

            @include('adminincludes.adminnav')

            @yield('content')

            <!-- Blank End -->

            @include('adminincludes.adminfooter')

        </div>
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    @include('adminincludes.adminscript')
</body>

</html>