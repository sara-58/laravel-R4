<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
        </a>
        @include('adminincludes.userinfo')
        <div class="navbar-nav w-100">
            <a href="{{ route('adminMain') }}" class="nav-item nav-link">
                <i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('index') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Website</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">
                    <i class="fa fa-keyboard me-2"></i>Forms</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('addUser') }} " class="dropdown-item"> Add User</a>
                    <a href="{{ route('addTestimonial') }} " class="dropdown-item"> Add Testimonial</a>
                    <a href="{{ route('addTeacher') }}" class="dropdown-item">Add Teacher</a>
                    <a href="{{ route('addStudent') }}" class="dropdown-item">Add Student</a>
                    <a href="{{ route('addClass') }}" class="dropdown-item">Add Class</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">
                    <i class="far fa-file-alt me-2"></i>Tables</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('users') }} " class="dropdown-item">Users</a>
                    <a href="{{ route('testimonials') }}" class="dropdown-item">Testimonials</a>
                    <a href="{{ route('teachers') }}" class="dropdown-item">Teachers</a>
                    <a href="{{ route('students') }}" class="dropdown-item">Students</a>
                    <a href="{{ route('classes') }}" class="dropdown-item">Classes</a>
                    <a href="{{ route('messages') }}" class="dropdown-item">Mesages</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">
                    <i class="fa fa-laptop me-2"></i>Trashed</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('trashedUser') }} " class="dropdown-item"> Trashed Users</a>
                    <a href="{{ route('trashedTestimonial') }}" class="dropdown-item">Trashed Testimonial</a>
                    <a href="{{ route('trashedTeacher') }}" class="dropdown-item">Trashed Teacher</a>
                    <a href="{{ route('trashedStudent') }}" class="dropdown-item">Trashed Student</a>
                    <a href="{{ route('trashedClass') }}" class="dropdown-item">Trashed Class</a>
                    <a href="{{ route('trashedMessage') }}" class="dropdown-item">Trashed Message</a>
                </div>
            </div>
            <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">
                    <i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('logout') }}" class="dropdown-item">Sign In</a>
                    <a href="{{ route('register') }}" class="dropdown-item">Sign Up</a>
                    <a href="{{ route('logout') }}" class="dropdown-item">Sign out</a>
                    <a href="blank.html" class="dropdown-item active">Blank Page</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->