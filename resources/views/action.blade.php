<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
    <div class="container-xxl bg-white p-0">
        @include('includes.header')

        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Become A Teachers</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Become A Teachers</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        @include('includes.action')

        @include('includes.footer')
</body>

</html>