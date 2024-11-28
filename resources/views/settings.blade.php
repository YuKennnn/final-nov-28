
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Locker Mangement System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!--JS Libray-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap v5 Stylesheet -->
    <link href="{{ asset ('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset ('assets/css/dashboard.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{ route ('dashboard') }}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-success"><i class="fa fa-user me-2"></i>ZakkSpace</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('assets/images/logo.jpg') }}" alt="" style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">ZakkSpace</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('dashboard')}}" class="nav-item nav-link active"><i
                            class="fas fa-users-cog me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-box me-2"></i>Manage Lockers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('allocate.index') }}" class="dropdown-item">Allocate Locker</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-success sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-success mb-0"><i class="fa fa-user"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fas fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('assets/images/logo.jpg') }}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">ZakkSpace</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="{{ route ('settings.index') }}" class="dropdown-item">Settings</a>
                            <a href="{{ route ('admin.login') }}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg rounded-3 border-0">
                <div class="card-header bg-gradient text-white rounded-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0"><i class="fas fa-cog me-2"></i>Settings</h4>
                    </div>
                </div>

                <div class="card-body">
                    {{-- Success Message --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- Error Message --}}
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Settings Tabs -->
                    <ul class="nav nav-pills mb-3" id="settingsTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-bs-toggle="pill" href="#profile"
                                role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="notifications-tab" data-bs-toggle="pill"
                                href="#notifications" role="tab" aria-controls="notifications"
                                aria-selected="false">Notifications</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="security-tab" data-bs-toggle="pill" href="#security"
                                role="tab" aria-controls="security" aria-selected="false">Security</a>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content">
                        <!-- Profile Tab -->
                        <div class="tab-pane fade show active" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <form id="profile-photo-form" action="{{ route('settings.update.profile-picture') }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <img class="rounded-circle me-lg-2" 
                                         src="{{ asset('storage/' . $settings->image) }}" 
                                         alt="Profile Picture" 
                                         style="width: 40px; height: 40px;">
                                    <label for="profilePhoto" class="form-label">Change Profile Photo</label>
                                    <input type="file" class="form-control" id="profilePhoto"
                                        name="profile_photo" accept="image/*">
                                </div>
                                <button type="submit" class="btn btn-primary" id="saveChangesButton">Apply</button>
                            </form>
                            
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" value="zakkspace" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" value="zakkspace@gmail.com" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Language</label>
                                <input type="text" class="form-control" value="English" disabled>
                            </div>
                        </div>

                        {{-- Notifications and Security tabs remain the same as in your original code --}}
                        <!-- Notifications Tab -->
                        <div class="tab-pane fade" id="notifications" role="tabpanel"
                            aria-labelledby="notifications-tab">
                            <div class="list-group">
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">Email Notifications</h6>
                                        <small class="text-muted">Receive updates via email</small>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" checked>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">Push Notifications</h6>
                                        <small class="text-muted">Receive browser notifications</small>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Security Tab -->
                        <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Current Password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirm New Password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-flex justify-content-end mt-4">
                        <button type="button" class="btn btn-outline-secondary me-2 px-4 py-2">Cancel</button>
                        <button type="button" class="btn btn-success px-4 py-2">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

        <!-- JavaScript  -->

        <script src="{{ asset('assets/js/admindashboard.js') }}"></script>


</body>

</html>