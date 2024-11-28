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

    <link href= "{{ asset ('assets/css/dashboard.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-success"><i class="fa fa-user me-2"></i>ZakkSpace</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('assets/images/logo.jpg') }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">ZakkSpace</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('dashboard')}}" class="nav-item nav-link active"><i class="fas fa-users-cog me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-box me-2"></i>Manage Lockers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ route('allocate.index') }}" class="dropdown-item">Allocate Locker</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
                    <a href="{{ route ('occupants.index') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Occupants</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
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
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
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


            <!-- Stat Cards  -->
            <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <!-- Today Occupants Card -->
        <div class="col-sm-6 col-xl-3">
            <div class="bg-white rounded shadow-sm d-flex align-items-center justify-content-between p-4 border border-primary">
                <i class="fa fa-users fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2 text-muted">Occupants</p>
                    <h6 class="mb-0 text-dark">120</h6>
                    <a href="{{ route('allocate.index') }}" class="btn btn-primary text-white text-decoration-none mt-2 view-details-btn">View Details</a>
                </div>
            </div>
        </div>
        
        <!-- Assign Lockers Card -->
        <div class="col-sm-6 col-xl-3">
            <div class="bg-white rounded shadow-sm d-flex align-items-center justify-content-between p-4 border border-success">
                <i class="fa fa-lock fa-3x text-success"></i>
                <div class="ms-3">
                    <p class="mb-2 text-muted">Lockers</p>
                    <h6 class="mb-0 text-dark">50 Available</h6>
                    <a href="#" class="btn btn-success text-white text-decoration-none mt-2 view-details-btn">View Details</a>
                </div>
            </div>
        </div>

        <!-- Revenue Card -->
        <div class="col-sm-6 col-xl-3">
            <div class="bg-white rounded shadow-sm d-flex align-items-center justify-content-between p-4 border border-warning">
                <i class="fa fa-dollar-sign fa-3x text-warning"></i>
                <div class="ms-3">
                    <p class="mb-2 text-muted">Revenue</p>
                    <h6 class="mb-0 text-dark">$5,000</h6>
                    <a href="#" class="btn btn-warning text-dark text-decoration-none mt-2 view-details-btn">View Details</a>
                </div>
            </div>
        </div>

        <!-- Overdues Card -->
        <div class="col-sm-6 col-xl-3">
            <div class="bg-white rounded shadow-sm d-flex align-items-center justify-content-between p-4 border border-danger">
                <i class="fa fa-clock fa-3x text-danger"></i>
                <div class="ms-3">
                    <p class="mb-2 text-muted">Overdues</p>
                    <h6 class="mb-0 text-dark">5</h6>
                    <a href="#" class="btn btn-danger text-white text-decoration-none mt-2 view-details-btn">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div>

            
            <!--custom css for view detaiks-->
            <style>
                    .view-details-btn:focus {
                    box-shadow: 0 0 0 0.2rem rgba(39, 174, 96, 0.5); /* Focus outline effect */
                }
            </style>
            <!--  End -->

            <!-- Diri pagbutang -->
            
            <!-- Diri End -->

            <!-- Locker Management Section -->
            <div class="container">
    <h2>Transaction History</h2>

    <!-- Locker Overview Table -->
    <table class="table text-start align-middle table-bordered table-hover mb-0">
        <thead>
            <tr class="text-white">
                <th scope="col">Locker ID</th>
                <th scope="col">Locker Number</th>
                <th scope="col">Student ID</th> <!-- Changed Status to Student ID -->
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Program</th>
                <th scope="col">Year</th>
                <th scope="col">Set</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody id="transactionHistory">
            <!-- Visible rows (First 5 rows will be shown by default) -->
            <tr>
                <td>LK-001</td>
                <td>101</td>
                <td>STU12345</td> <!-- Student ID -->
                <td>Doe</td>
                <td>John</td>
                <td>Computer Science</td>
                <td>3rd Year</td>
                <td>Set A</td>
                <td>john.doe@example.com</td>
            </tr>
            <tr>
                <td>LK-002</td>
                <td>102</td>
                <td>STU12346</td> <!-- Student ID -->
                <td>Smith</td>
                <td>Jane</td>
                <td>Engineering</td>
                <td>2nd Year</td>
                <td>Set B</td>
                <td>jane.smith@example.com</td>
            </tr>
            <tr>
                <td>LK-003</td>
                <td>103</td>
                <td>STU12347</td> <!-- Student ID -->
                <td>Johnson</td>
                <td>Mark</td>
                <td>Business</td>
                <td>4th Year</td>
                <td>Set C</td>
                <td>mark.johnson@example.com</td>
            </tr>
            <tr>
                <td>LK-004</td>
                <td>104</td>
                <td>STU12348</td> <!-- Student ID -->
                <td>Lee</td>
                <td>Chris</td>
                <td>Information Technology</td>
                <td>1st Year</td>
                <td>Set A</td>
                <td>chris.lee@example.com</td>
            </tr>
            <tr>
                <td>LK-005</td>
                <td>105</td>
                <td>STU12349</td> <!-- Student ID -->
                <td>Brown</td>
                <td>Emily</td>
                <td>Mathematics</td>
                <td>3rd Year</td>
                <td>Set B</td>
                <td>emily.brown@example.com</td>
            </tr>
        </tbody>

        <!-- Hidden rows (6th to 100th locker will be hidden initially) -->
        <tbody id="extraRows" class="collapse">
            <tr>
                <td>LK-006</td>
                <td>106</td>
                <td>STU12350</td> <!-- Student ID -->
                <td>Wong</td>
                <td>Anna</td>
                <td>Physics</td>
                <td>2nd Year</td>
                <td>Set C</td>
                <td>anna.wong@example.com</td>
            </tr>
            <tr>
                <td>LK-007</td>
                <td>107</td>
                <td>STU12351</td> <!-- Student ID -->
                <td>Lee</td>
                <td>David</td>
                <td>Engineering</td>
                <td>1st Year</td>
                <td>Set A</td>
                <td>david.lee@example.com</td>
            </tr>
            <tr>
                <td>LK-008</td>
                <td>108</td>
                <td>STU12352</td> <!-- Student ID -->
                <td>Kim</td>
                <td>Paul</td>
                <td>Computer Science</td>
                <td>4th Year</td>
                <td>Set B</td>
                <td>paul.kim@example.com</td>
            </tr>
            <tr>
                <td>LK-009</td>
                <td>109</td>
                <td>STU12353</td> <!-- Student ID -->
                <td>Patel</td>
                <td>Ravi</td>
                <td>Mathematics</td>
                <td>3rd Year</td>
                <td>Set C</td>
                <td>ravi.patel@example.com</td>
            </tr>
            <tr>
                <td>LK-010</td>
                <td>110</td>
                <td>STU12354</td> <!-- Student ID -->
                <td>Nguyen</td>
                <td>Linda</td>
                <td>Engineering</td>
                <td>2nd Year</td>
                <td>Set A</td>
                <td>linda.nguyen@example.com</td>
            </tr>
            <!-- Add more rows for LK-011 to LK-100 -->
        </tbody>
    </table>

    <!-- Show All / Hide All Button -->
    <a href="{{ route('allocate.index') }}" class="btn btn-primary mt-3" id="toggleButton" role="button" aria-expanded="false" aria-controls="extraRows" data-bs-toggle="collapse">
    Show All
</a>


<script>
    // Script to toggle between "Show All" and "Hide All" text
    document.getElementById('toggleButton').addEventListener('click', function() {
        var collapse = document.getElementById('extraRows');
        // Check if collapse is expanded
        if (collapse.classList.contains('show')) {
            // If expanded, change text to "Hide All"
            this.textContent = 'Hide All';
        } else {
            // If collapsed, change text to "Show All"
            this.textContent = 'Show All';
        }
    });
</script>


<style>
    /* custom css for transaction history table*/
    body {
      background-color: #f8f9fa; /* Light background color for the body */
    }

    .container {
      max-width: 1200px; /* Wider layout */
      margin-top: 50px;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #28a745; /* Green color */
      font-weight: bold;
      text-align: center;
      margin-bottom: 30px;
    }

    /* Table Styles */
    .table {
      background-color: white;
      color: #343a40;
      margin-top: 20px;
    }

    .table thead {
      background-color: #28a745; /* Green background for table header */
      color: white;
    }

    .badge {
      background-color: #28a745;
      color: white;
    }

    .badge.bg-secondary {
      background-color: #6c757d; /* Grey for secondary badge */
    }

    .badge.bg-danger {
      background-color: #dc3545; /* Red for 'Unpaid' status */
    }

    /* Table footer inside the table */
    .footer-row {
      background-color: white; /* Gray background for footer row */
      color: black;
    }

    .footer-row td {
      text-align: center;
      font-size: 14px;
    }
  </style>

        <!-- Content End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Locker Management System</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                           
                            Designed By <a href="">ZakkSpace</a>
                        </br>
                        Distributed By <a class="border-bottom" href="" target="_blank">ZakkSpace</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript  -->
   
    <script src="{{ asset('assets/js/admindashboard.js') }}"></script>


</body>

</html>