<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - BixiTech Billing System</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3a0ca3;
            --accent-color: #4cc9f0;
            --dark-color: #1a1a2e;
            --light-color: #f8f9fa;
        }
        
        body {
            padding-top: 60px;
            background-color: #f5f7fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .sidebar {
            height: calc(100vh - 60px);
            position: fixed;
            left: 0;
            width: 280px;
            background: linear-gradient(180deg, var(--secondary-color), var(--dark-color));
            color: white;
            transition: all 0.3s;
            z-index: 1000;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
        }
        
        .main-content {
            margin-left: 280px;
            padding: 25px;
            transition: all 0.3s;
            background-color: var(--light-color);
            min-height: calc(100vh - 60px);
        }
        
        .nav-link {
            color: rgba(255, 255, 255, 0.85);
            padding: 12px 20px;
            margin: 2px 10px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            transition: all 0.2s;
        }
        
        .nav-link:hover, .nav-link.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateX(5px);
        }
        
        .nav-link i {
            margin-right: 10px;
            font-size: 1.1rem;
        }
        
        .card {
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
            border: none;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            background-color: white;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 12px 12px 0 0 !important;
            padding: 15px 20px;
        }
        
        .brand-logo {
            height: 36px;
        }
        
        .user-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid rgba(255, 255, 255, 0.2);
        }
        
        .sidebar-header {
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 10px;
        }
        
        .sidebar-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: white;
            margin-bottom: 0;
        }
        
        .sidebar-divider {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin: 15px 0;
        }
        
        .nav-item {
            position: relative;
        }
        
        .nav-item .badge {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
        }
        
        .navbar {
            background: linear-gradient(90deg, var(--secondary-color), var(--primary-color));
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            height: 60px;
            padding: 0.5rem 1rem;
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
        }
        
        .navbar-toggler {
            border: none;
            font-size: 1.25rem;
        }
        
        .navbar-toggler:focus {
            box-shadow: none;
        }
        
        .dropdown-menu {
            border-radius: 8px;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .badge {
            padding: 5px 10px;
            font-weight: 500;
            border-radius: 6px;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: #3a56d8;
            border-color: #3a56d8;
        }
        
        .badge-active {
            background-color: rgba(40, 167, 69, 0.15);
            color: #28a745;
        }
        
        .badge-completed {
            background-color: rgba(23, 162, 184, 0.15);
            color: #17a2b8;
        }
        
        .badge-on-hold {
            background-color: rgba(255, 193, 7, 0.15);
            color: #ffc107;
        }
        
        .badge-cancelled {
            background-color: rgba(220, 53, 69, 0.15);
            color: #dc3545;
        }
        
        .table {
            border-radius: 8px;
            overflow: hidden;
        }
        
        .table thead th {
            background-color: #f8f9fa;
            border-bottom-width: 1px;
            font-weight: 600;
        }
        
        .table-hover tbody tr:hover {
            background-color: rgba(67, 97, 238, 0.05);
        }
        
        .modal-header {
            border-bottom: none;
            padding-bottom: 0;
        }
        
        .modal-footer {
            border-top: none;
            padding-top: 0;
        }
        
        @media (max-width: 992px) {
            .sidebar {
                margin-left: -280px;
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .sidebar.active {
                margin-left: 0;
            }
        }
        
        .sidebar::-webkit-scrollbar {
            width: 6px;
        }
        
        .sidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
        }
        
        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 3px;
        }
        
        .project-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
        }
        
        .progress {
            height: 8px;
            border-radius: 4px;
        }
    </style>
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
                <a class="nav-link" href="time-tracking.php">
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
                <a class="nav-link active" href="projects.php">
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
                    <h4 class="mb-0">Projects Management</h4>
                    <p class="text-muted mb-0">Manage your client projects and track progress</p>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-secondary me-2">
                        <i class="bi bi-funnel me-1"></i> Filter
                    </button>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#projectModal">
                        <i class="bi bi-plus-circle me-1"></i> New Project
                    </button>
                </div>
            </div>
            
            <!-- Projects Table -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">All Projects</h5>
                    <div class="d-flex align-items-center">
                        <span class="text-muted me-3">Total: 15 projects</span>
                        <button class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-download me-1"></i> Export
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="projectsTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Project</th>
                                    <th>Client</th>
                                    <th>Start Date</th>
                                    <th>Progress</th>
                                    <th>Hours Logged</th>
                                    <th>Budget</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="project-icon me-3">
                                                <i class="bi bi-globe"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Mansoor Website</h6>
                                                <small class="text-muted">E-commerce platform development</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Mansoor LLC</td>
                                    <td>2023-08-15</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="progress me-2" style="width: 100px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%"></div>
                                            </div>
                                            <small>85%</small>
                                        </div>
                                    </td>
                                    <td>142.5 hrs</td>
                                    <td>$25,000</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="project-icon me-3">
                                                <i class="bi bi-phone"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Mansoor Mobile App</h6>
                                                <small class="text-muted">iOS and Android mobile application</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Mansoor LLC</td>
                                    <td>2023-09-01</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="progress me-2" style="width: 100px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 65%"></div>
                                            </div>
                                            <small>65%</small>
                                        </div>
                                    </td>
                                    <td>98.0 hrs</td>
                                    <td>$35,000</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="project-icon me-3">
                                                <i class="bi bi-diagram-3"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">BixiSoft CRM</h6>
                                                <small class="text-muted">Customer relationship management system</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>BixiSoft Inc</td>
                                    <td>2023-07-10</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="progress me-2" style="width: 100px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                            </div>
                                            <small>100%</small>
                                        </div>
                                    </td>
                                    <td>256.5 hrs</td>
                                    <td>$45,000</td>
                                    <td><span class="badge badge-completed">Completed</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="project-icon me-3">
                                                <i class="bi bi-building"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">BixiSoft ERP</h6>
                                                <small class="text-muted">Enterprise resource planning system</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>BixiSoft Inc</td>
                                    <td>2023-06-01</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="progress me-2" style="width: 100px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 45%"></div>
                                            </div>
                                            <small>45%</small>
                                        </div>
                                    </td>
                                    <td>189.0 hrs</td>
                                    <td>$75,000</td>
                                    <td><span class="badge badge-on-hold">On Hold</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="project-icon me-3">
                                                <i class="bi bi-person-circle"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Client Portal</h6>
                                                <small class="text-muted">Self-service client dashboard</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Tech Solutions</td>
                                    <td>2023-09-15</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="progress me-2" style="width: 100px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 30%"></div>
                                            </div>
                                            <small>30%</small>
                                        </div>
                                    </td>
                                    <td>45.5 hrs</td>
                                    <td>$18,000</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
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

    <!-- Project Modal -->
    <div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="projectModalLabel">Create New Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <label for="projectName" class="form-label">Project Name *</label>
                                <input type="text" class="form-control" id="projectName" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="projectClient" class="form-label">Client *</label>
                                <select class="form-select" id="projectClient" required>
                                    <option value="">Select Client</option>
                                    <option value="1">Mansoor LLC</option>
                                    <option value="2">BixiSoft Inc</option>
                                    <option value="3">Tech Solutions</option>
                                    <option value="4">Digital Partners</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="projectDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="projectDescription" rows="3"></textarea>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="projectStartDate" class="form-label">Start Date *</label>
                                <input type="date" class="form-control" id="projectStartDate" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="projectEndDate" class="form-label">End Date</label>
                                <input type="date" class="form-control" id="projectEndDate">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="projectBudget" class="form-label">Budget ($)</label>
                                <input type="number" step="100" min="0" class="form-control" id="projectBudget">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="projectRate" class="form-label">Hourly Rate ($)</label>
                                <input type="number" step="1" min="0" class="form-control" id="projectRate" value="100">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="projectStatus" class="form-label">Status</label>
                                <select class="form-select" id="projectStatus">
                                    <option value="active">Active</option>
                                    <option value="on-hold">On Hold</option>
                                    <option value="completed">Completed</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="projectTeam" class="form-label">Team Members</label>
                            <select class="form-select" id="projectTeam" multiple>
                                <option value="1">John Doe</option>
                                <option value="2">Jane Smith</option>
                                <option value="3">Mike Johnson</option>
                                <option value="4">Sarah Wilson</option>
                            </select>
                            <div class="form-text">Hold Ctrl/Cmd to select multiple team members</div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="projectNotes" class="form-label">Notes</label>
                            <textarea class="form-control" id="projectNotes" rows="3"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="projectBillable" checked>
                                <label class="form-check-label" for="projectBillable">
                                    Billable Project
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Create Project</button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery, Bootstrap JS, and DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        $(document).ready(function() {
            // Initialize DataTables
            $('#projectsTable').DataTable({
                dom: '<"top"fB>rt<"bottom"lip><"clear">',
                buttons: [
                    {
                        extend: 'copy',
                        className: 'btn btn-sm btn-outline-secondary'
                    },
                    {
                        extend: 'csv',
                        className: 'btn btn-sm btn-outline-secondary'
                    },
                    {
                        extend: 'excel',
                        className: 'btn btn-sm btn-outline-secondary'
                    },
                    {
                        extend: 'pdf',
                        className: 'btn btn-sm btn-outline-secondary'
                    },
                    {
                        extend: 'print',
                        className: 'btn btn-sm btn-outline-secondary'
                    }
                ],
                responsive: true,
                order: [[0, 'asc']]
            });

            // Sidebar toggle
            $('#sidebarToggle').click(function() {
                $('.sidebar').toggleClass('active');
                $('.main-content').toggleClass('active');
            });
            
            // Set default start date to today
            const today = new Date().toISOString().split('T')[0];
            $('#projectStartDate').val(today);
        });
    </script>
</body>
</html>
