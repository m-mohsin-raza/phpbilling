<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Tracking - BixiTech Billing System</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/css/time-tracking.css">
</head>
<body>
    <!-- Top Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler me-2" type="button" id="sidebarToggle">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="assets/logo-white.png" alt="BixiTech Logo" class="brand-logo me-2">
                <span class="fw-bold">BixiTech</span>
            </a>
            
            <div class="d-flex align-items-center ms-auto">
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/user-avatar.jpg" alt="User" class="user-avatar me-2">
                        <span class="d-none d-md-inline">Manager User</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h5 class="sidebar-title"><i class="bi bi-speedometer2 me-2"></i> Billing System</h5>
        </div>
        
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
            </li>
            
            <div class="sidebar-divider"></div>
            
            <li class="nav-item">
                <a class="nav-link active" href="time-tracking.php">
                    <i class="bi bi-stopwatch"></i> Time Tracking
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="tasks.php">
                    <i class="bi bi-list-task"></i> Task Entries
                    <span class="badge bg-primary rounded-pill">34</span>
                </a>
            </li>
            
            <div class="sidebar-divider"></div>
            
            <li class="nav-item">
                <a class="nav-link" href="invoices.php">
                    <i class="bi bi-file-earmark-text"></i> Invoices
                    <span class="badge bg-danger rounded-pill">12</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="estimates.php">
                    <i class="bi bi-file-earmark-check"></i> Estimates
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="payments.php">
                    <i class="bi bi-cash-stack"></i> Payments
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="expenses.php">
                    <i class="bi bi-credit-card"></i> Expenses
                </a>
            </li>
            
            <div class="sidebar-divider"></div>
            
            <li class="nav-item">
                <a class="nav-link" href="clients.php">
                    <i class="bi bi-people"></i> Clients
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="projects.php">
                    <i class="bi bi-folder"></i> Projects
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="contracts.php">
                    <i class="bi bi-file-earmark-text"></i> Contracts
                </a>
            </li>
            
            <div class="sidebar-divider"></div>
            
            <li class="nav-item">
                <a class="nav-link" href="reports.php">
                    <i class="bi bi-graph-up"></i> Reports
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="ledger.php">
                    <i class="bi bi-journal-bookmark"></i> Ledger
                </a>
            </li>
            
            <div class="sidebar-divider"></div>
            
            <li class="nav-item">
                <a class="nav-link" href="team.php">
                    <i class="bi bi-person-lines-fill"></i> Team
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="settings.php">
                    <i class="bi bi-gear"></i> Settings
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h4 class="mb-0">Time Tracking</h4>
                    <p class="text-muted mb-0">Track your work time and manage timers</p>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-secondary me-2">
                        <i class="bi bi-calendar me-1"></i> Today
                    </button>
                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-download me-1"></i> Export
                    </button>
                </div>
            </div>
            
            <!-- Timer Section -->
            <div class="row mb-4">
                <div class="col-lg-8">
                    <div class="card timer-card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="timer-display" id="timerDisplay">00:00:00</div>
                                    <div class="timer-controls">
                                        <button class="btn btn-success btn-lg me-2" id="startTimer">
                                            <i class="bi bi-play-fill"></i> Start
                                        </button>
                                        <button class="btn btn-warning btn-lg me-2" id="pauseTimer" disabled>
                                            <i class="bi bi-pause-fill"></i> Pause
                                        </button>
                                        <button class="btn btn-danger btn-lg" id="stopTimer" disabled>
                                            <i class="bi bi-stop-fill"></i> Stop
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label text-white">Project</label>
                                        <select class="form-select" id="timerProject">
                                            <option value="">Select Project</option>
                                            <option value="1">Mansoor Website</option>
                                            <option value="2">BixiSoft CRM</option>
                                            <option value="3">Mansoor Mobile App</option>
                                            <option value="4">BixiSoft ERP</option>
                                            <option value="5">Client Portal</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label text-white">Description</label>
                                        <textarea class="form-control" id="timerDescription" rows="3" placeholder="What are you working on?"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <h6 class="mb-0">Today's Summary</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span>Total Hours:</span>
                                <span class="time-entry">7.5 hrs</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span>Billable Hours:</span>
                                <span class="time-entry text-success">6.0 hrs</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span>Non-billable:</span>
                                <span class="time-entry text-warning">1.5 hrs</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <span><strong>Earnings:</strong></span>
                                <span class="time-entry text-primary"><strong>$600.00</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Recent Time Entries -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Recent Time Entries</h5>
                    <div class="d-flex align-items-center">
                        <span class="text-muted me-3">Today: 7.5 hours</span>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-plus me-1"></i> Manual Entry
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="timeEntriesTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Project</th>
                                    <th>Description</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Duration</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2023-10-15</td>
                                    <td>Mansoor Website</td>
                                    <td>Payment gateway integration testing</td>
                                    <td>09:00 AM</td>
                                    <td>12:30 PM</td>
                                    <td class="time-entry">3.5 hrs</td>
                                    <td><span class="badge badge-stopped">Stopped</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-success" title="Continue"><i class="bi bi-play"></i></button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-10-15</td>
                                    <td>BixiSoft CRM</td>
                                    <td>Bug fixes in report module</td>
                                    <td>01:30 PM</td>
                                    <td>03:00 PM</td>
                                    <td class="time-entry">1.5 hrs</td>
                                    <td><span class="badge badge-stopped">Stopped</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-success" title="Continue"><i class="bi bi-play"></i></button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-10-15</td>
                                    <td>Mansoor Mobile App</td>
                                    <td>UI improvements for dashboard</td>
                                    <td>03:30 PM</td>
                                    <td>06:00 PM</td>
                                    <td class="time-entry">2.5 hrs</td>
                                    <td><span class="badge badge-stopped">Stopped</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-success" title="Continue"><i class="bi bi-play"></i></button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-10-14</td>
                                    <td>BixiSoft ERP</td>
                                    <td>Database optimization</td>
                                    <td>10:00 AM</td>
                                    <td>02:30 PM</td>
                                    <td class="time-entry">4.5 hrs</td>
                                    <td><span class="badge badge-stopped">Stopped</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-success" title="Continue"><i class="bi bi-play"></i></button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-10-14</td>
                                    <td>Client Portal</td>
                                    <td>Security enhancements</td>
                                    <td>03:00 PM</td>
                                    <td>05:00 PM</td>
                                    <td class="time-entry">2.0 hrs</td>
                                    <td><span class="badge badge-stopped">Stopped</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-success" title="Continue"><i class="bi bi-play"></i></button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery, Bootstrap JS, and DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/datatables-config.js"></script>
    <script src="assets/js/time-tracking.js"></script>
    <script src="assets/js/date-helpers.js"></script>
</body>
</html>
