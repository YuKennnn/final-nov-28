<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Locker Mangement System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!--JS Libray-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap v5 Stylesheet -->
    <link href="{{ asset ('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href= "{{ asset ('assets/css/allocate.css') }}" rel="stylesheet">
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
                    <a href="{{route ('dashboard') }}" class="nav-item nav-link"><i class="fas fa-users-cog me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active " data-bs-toggle="dropdown"><i class="fa fa-box me-2"></i>Manage Lockers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ route('allocate.index') }}" class="dropdown-item">Allocate Locker</a>
                                        <!-- <a href="typography.html" class="dropdown-item">Typography</a>
                                        <a href="element.html" class="dropdown-item">Other Elements</a> -->
                        </div>
                    </div>
                    <a href="{{ route('occupants.index') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Occupants</a>
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
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="{{ route ('admin.login') }}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


       <!-- Add the form here   -->
     
       <div class="container-fluid mt-4">
    <!-- Assign Locker Button -->
    <div class="d-flex justify-content-start mb-4">
        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#assignLockerModal">
            <i class="bi bi-plus"></i> Assign Locker
        </button>
    </div>
</div>

<!-- Locker Table -->
<div class="table-responsive">
    <table class="table table-bordered table-sm">
        <thead class="bg-success text-white">
            <tr>
                <th class="text-nowrap ">LOCKER NO</th>
                <th class="text-nowrap">STUDENT ID</th>
                <th class="text-nowrap">LAST NAME</th>
                <th class="text-nowrap">FIRST NAME</th>
                <th class="text-nowrap">PROGRAM</th>
                <th class="text-nowrap">YEAR & SET</th>
                <th class="text-nowrap">DATE RENTED</th>
                <th class="text-nowrap">DATE ENDED</th>
                <th class="text-nowrap">EMAIL</th>
                <th class="text-nowrap">PAYMENT</th>
                <th class="text-nowrap">ACTIONS</th>
            </tr>
        </thead>
        <tbody id="lockerTableBody ">
            @foreach($allocations as $allocation)
                <tr data-id="{{ $allocation->id }}" data-locker="{{ json_encode($allocation) }}">
                    <td class="text-nowrap text-dark">{{ $allocation->locker_number }}</td>
                    <td class="text-nowrap text-dark">{{ $allocation->student_id }}</td>
                    <td class="text-nowrap text-dark">{{ $allocation->last_name }}</td>
                    <td class="text-nowrap text-dark">{{ $allocation->first_name }}</td>
                    <td class="text-nowrap text-dark">{{ $allocation->program }}</td>
                    <td class="text-nowrap text-dark">{{ $allocation->year_set }}</td>
                    <td class="text-nowrap text-dark">{{ $allocation->date_rented }}</td>
                    <td class="text-nowrap text-dark">{{ $allocation->date_ended }}</td>
                    <td class="text-nowrap text-dark">{{ $allocation->email }}</td>
                    <td class="text-nowrap text-dark">{{ $allocation->payment }}</td>
                    <td>
                        <button class="btn btn-info btn-sm view-btn" data-bs-toggle="modal" data-bs-target="#viewLockerModal">
                            <i class="bi bi-eye"></i> 
                        </button>
                        <button class="btn btn-warning btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#editLockerModal" data-allocation="{{ json_encode($allocation) }}">
                            <i class="bi bi-pencil"></i> 
                        </button>
                        <form action="{{ route('allocate.destroy', $allocation->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i> 
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal for Assign Locker -->
<div class="modal fade" id="assignLockerModal" tabindex="-1" aria-labelledby="assignLockerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-m">
        <div class="modal-content ">
            <div class="modal-header bg-success custom-header">
                <h5 class="modal-title" id="assignLockerModalLabel">ASSIGN LOCKER FORM</h5>
                <button type="button" class="btn-close custom-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

                             <style>
                             .custom-header .modal-title {
                                color: white !important; 
                                
                            }
            
                            .custom-close {
                                filter: invert(1);
                            }
                        </style>

            <div class="modal-body">

            <!-- Display Flash Success Message -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

                <!-- Form for Assign Locker -->
                <form id="assignLockerForm" action="{{ route('allocate.store') }}" method="POST">
                    @csrf
                    <input type="hidden " id="allocationId" name="id">
                    <div class="mb-3">
                        <label for="lockerNumber" class="form-label">Locker Number</label>
                        <input type="number" class="form-control" id="lockerNumber" name="locker_number" placeholder="Enter locker number" required>
                    </div>
                    <div class="mb-3">
                        <label for="studentId" class="form-label">Student ID</label>
                        <input type="number" class="form-control" id="studentId" name="student_id" placeholder="Enter student ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Enter last name" required>
                    </div>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="first_name" placeholder="Enter first name" required>
                    </div>
                    <div class="mb-3">
                        <label for="program" class="form-label">Program</label>
                        <input type="text" class="form-control" id="program" name="program" placeholder="Enter program" required>
                    </div>
                    <div class="mb-3">
                        <label for="yearSet" class="form-label">Year & Set</label>
                        <input type="text" class="form-control" id="yearSet" name="year_set" placeholder="Enter year & set" required>
                    </div>
                    <div class="mb-3">
                        <label for="dateRented" class="form-label">Date Rented</label>
                        <input type="date" class="form-control" id="dateRented" name="date_rented" required>
                    </div>
                    <div class="mb-3">
                        <label for="dateEnded" class="form-label">Date Ended</label>
                        <input type="date" class="form-control" id="dateEnded" name="date_ended" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
                    </div>
                    <div class="mb-3">
                        <label for="payment" class="form-label">Payment</label>
                        <input type="number" class="form-control" id="payment" name="payment" placeholder="Enter payment amount" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

       <!-- View Locker Modal -->
<div class="modal fade  " id="viewLockerModal" tabindex="-1" aria-labelledby="viewLockerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-m ">
        <div class="modal-content text-dark">
            <div class="modal-header bg-success custom-header ">
                <h5 class="modal-title" id="viewLockerModalLabel">VIEW LOCKER DETAILS</h5>
                <button type="button" class="btn-close custom-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div id="viewLockerDetails">
                    <p><strong>Locker Number:</strong> <span id="viewLockerNumber"></span></p>
                    <p><strong>Student ID:</strong> <span id="viewStudentId"></span></p>
                    <p><strong>Last Name:</strong> <span id="viewLastName"></span></p>
                    <p><strong>First Name:</strong> <span id="viewFirstName"></span></p>
                    <p><strong>Program:</strong> <span id="viewProgram"></span></p>
                    <p><strong>Year & Set:</strong> <span id="viewYearSet"></span></p>
                    <p><strong>Date Rented:</strong> <span id="viewDateRented"></span></p>
                    <p><strong>Date Ended:</strong> <span id="viewDateEnded"></span></p>
                    <p><strong>Email:</strong> <span id="viewEmail"></span></p>
                    <p><strong>Payment:</strong> <span id="viewPayment"></span></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

        <script>
           
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.view-btn').forEach(function (button) {
            button.addEventListener('click', function () {
                
                const row = this.closest('tr');
                
                // Parse the data-locker attribute into a JavaScript object
                const allocationData = JSON.parse(row.getAttribute('data-locker'));

                // Populate the modal with the relevant data
                document.getElementById('viewLockerNumber').textContent = allocationData.locker_number;
                document.getElementById('viewStudentId').textContent = allocationData.student_id;
                document.getElementById('viewLastName').textContent = allocationData.last_name;
                document.getElementById('viewFirstName').textContent = allocationData.first_name;
                document.getElementById('viewProgram').textContent = allocationData.program;
                document.getElementById('viewYearSet').textContent = allocationData.year_set;
                document.getElementById('viewDateRented').textContent = allocationData.date_rented;
                document.getElementById('viewDateEnded').textContent = allocationData.date_ended;
                document.getElementById('viewEmail').textContent = allocationData.email;
                document.getElementById('viewPayment').textContent = allocationData.payment;
            });
        });
    });
        </script>

<!-- Edit Locker Modal -->
<div class="modal fade" id="editLockerModal" tabindex="-1" aria-labelledby="editLockerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-m">
        <div class="modal-content text-dark">
            <div class="modal-header bg-success custom-header">
                <h5 class="modal-title" id="editLockerModalLabel">EDIT LOCKER DETAILS</h5>
                <button type="button" class="btn-close custom-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editLockerForm" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="editAllocationId" name="id">
                    <div class="mb-3">
                        <label for="editLockerNumber" class="form-label">Locker Number</label>
                        <input type="text" class="form-control" id="editLockerNumber" name="locker_number" placeholder="Enter locker number" required>
                    </div>
                    <div class="mb-3">
                        <label for="editStudentId" class="form-label">Student ID</label>
                        <input type="text" class="form-control" id="editStudentId" name="student_id" placeholder="Enter student ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="editLastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="editLastName" name="last_name" placeholder="Enter last name" required>
                    </div>
                    <div class="mb-3">
                        <label for="editFirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="editFirstName" name="first_name" placeholder="Enter first name" required>
                    </div>
                    <div class="mb-3">
                        <label for="editProgram" class="form-label">Program</label>
                        <input type="text" class="form-control" id="editProgram" name="program" placeholder="Enter program" required>
                    </div>
                    <div class="mb-3">
                        <label for="editYearSet" class="form-label">Year & Set</label>
                        <input type="text" class="form-control" id="editYearSet" name="year_set" placeholder="Enter year & set" required>
                    </div>
                    <div class="mb-3">
                        <label for="editDateRented" class="form-label">Date Rented</label>
                        <input type="date" class="form-control" id="editDateRented" name="date_rented" required>
                    </div>
                    <div class="mb-3">
                        <label for="editDateEnded" class="form-label">Date Ended</label>
                        <input type="date" class="form-control" id="editDateEnded" name="date_ended" required>
                    </div>
                    <div class="mb-3">
                        <label for="editEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="editEmail" name="email" placeholder="Enter email address" required>
                    </div>
                    <div class="mb-3">
                        <label for="editPayment" class="form-label">Payment</label>
                        <input type="number" class="form-control" id="editPayment" name="payment" placeholder="Enter payment amount" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
   //for update
document.addEventListener('DOMContentLoaded', function () {
    // When the edit button is clicked, populate the modal with existing row data
    document.querySelectorAll('.edit-btn').forEach(function (button) {
        button.addEventListener('click', function () {
            const row = this.closest('tr');
            const allocationData = JSON.parse(row.getAttribute('data-locker'));

            // Fill the modal with the current data
            document.getElementById('editAllocationId').value = allocationData.id;
            document.getElementById('editLockerNumber').value = allocationData.locker_number;
            document.getElementById('editStudentId').value = allocationData.student_id;
            document.getElementById('editLastName').value = allocationData.last_name;
            document.getElementById('editFirstName').value = allocationData.first_name;
            document.getElementById('editProgram').value = allocationData.program;
            document.getElementById('editYearSet').value = allocationData.year_set;
            document.getElementById('editDateRented').value = allocationData.date_rented;
            document.getElementById('editDateEnded').value = allocationData.date_ended;
            document.getElementById('editEmail').value = allocationData.email;
            document.getElementById('editPayment').value = allocationData.payment;
        });
    });

    // Handle form submission and update the table row
    document.getElementById('editLockerForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        const form = new FormData(this);
        const allocationId = form.get('id');

        // AJAX request to update locker details
        fetch(`/allocate/${allocationId}`, {
            method: 'PUT',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content, // Include CSRF Token
            },
            body: form
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Find the row by the allocation ID and update it
                const row = document.querySelector(`tr[data-id="${allocationId}"]`);

                // Update the table row with the new values
                row.querySelector('td:nth-child(1)').textContent = data.locker_number;
                row.querySelector('td:nth-child(2)').textContent = data.student_id;
                row.querySelector('td:nth-child(3)').textContent = data.last_name;
                row.querySelector('td:nth-child(4)').textContent = data.first_name;
                row.querySelector('td:nth-child(5)').textContent = data.program;
                row.querySelector('td:nth-child(6)').textContent = data.year_set;
                row.querySelector('td:nth-child(7)').textContent = data.date_rented;
                row.querySelector('td:nth-child(8)').textContent = data.date_ended;
                row.querySelector('td:nth-child(9)').textContent = data.email;
                row.querySelector('td:nth-child(10)').textContent = data.payment;

                // Close the modal
                const modal = new bootstrap.Modal(document.getElementById('editLockerModal'));
                modal.hide();
            } else {
                // Handle error case
                alert('Error updating locker details');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('There was an issue updating the locker details.');
        });
    });
});
</script>



<script>
             
    // Submit form to either create or edit
    document.getElementById('assignLockerForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting normally

        const formData = new FormData(this); // Form data collection

        // Determine the method (POST for create, PUT for update)
        const method = formData.get('id') ? 'PUT' : 'POST';
      const url = formData.get('id') 
    ? '{{ route('allocate.update', '') }}/' + formData.get('id') 
    : '{{ route('allocate.store') }}';



        // Fetch request to send data to the backend
        fetch(url, {
            method: method,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content // Add CSRF Token
            },
            body: formData
        })
        .then(data => {
    console.log('Response Data:', data); // Log the response to see what you get back

    // Check if the data object is valid and contains an id
    if (data && data.id) {
        // Check if we are updating an existing row or adding a new one
        const existingRow = document.querySelector(#lockerTableBody tr[data-id="${data.id}"]);

        if (existingRow) {
            // Update existing row if data.id matches the one already in the table
            existingRow.querySelector('td:nth-child(1)').textContent = data.locker_number;
            existingRow.querySelector('td:nth-child(2)').textContent = data.student_id;
            existingRow.querySelector('td:nth-child(3)').textContent = data.last_name;
            existingRow.querySelector('td:nth-child(4)').textContent = data.first_name;
            existingRow.querySelector('td:nth-child(5)').textContent = data.program;
            existingRow.querySelector('td:nth-child(6)').textContent = data.year_set;
            existingRow.querySelector('td:nth-child(7)').textContent = data.date_rented;
            existingRow.querySelector('td:nth-child(8)').textContent = data.date_ended;
            existingRow.querySelector('td:nth-child(9)').textContent = data.email;
            existingRow.querySelector('td:nth-child(10)').textContent = data.payment;
        } else {
            // If not an existing row, create a new one
            const newRow = document.createElement('tr');
            newRow.setAttribute('data-id', data.id); // Ensure data-id is set
            newRow.innerHTML = 
                <td>${data.locker_number}</td>
                <td>${data.student_id}</td>
                <td>${data.last_name}</td>
                <td>${data.first_name}</td>
                <td>${data.program}</td>
                <td>${data.year_set}</td>
                <td>${data.date_rented}</td>
                <td>${data.date_ended}</td>
                <td>${data.email}</td>
                <td>${data.payment}</td>
                <td>
                    <button class="btn btn-info btn-sm view-btn" data-bs-toggle="modal" data-bs-target="#viewLockerModal">
                        <i class="bi bi-eye"></i>
                    </button>
                    <button class="btn btn-warning btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#assignLockerModal" data-allocation="${JSON.stringify(data)}">
                        <i class="bi bi-pencil"></i>
                    </button>
                    <form action="{{ route('allocate.destroy', '') }}/${data.id}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </td>
            ;
            document.getElementById('lockerTableBody').appendChild(newRow);
        }

        // Close the modal and reset the form
        const modal = bootstrap.Modal.getInstance(document.getElementById('assignLockerModal'));
        modal.hide();
        document.getElementById('assignLockerForm').reset(); // Reset form after submission
    } else {
        console.log('No valid data returned.');
    }
})
.catch(error => {
    console.error('Error:', error);
});


</script>




        <!-- form End -->



        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript  -->
   
    <script src="{{ asset('assets/js/admindashboard.js') }}"></script>


</body>

</html>