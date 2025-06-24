<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Management - BixiTech Billing System</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
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
        
        .badge-inactive {
            background-color: rgba(220, 53, 69, 0.15);
            color: #dc3545;
        }
        
        .badge-pending {
            background-color: rgba(255, 193, 7, 0.15);
            color: #ffc107;
        }
        
        .badge-admin {
            background-color: rgba(220, 53, 69, 0.15);
            color: #dc3545;
        }
        
        .badge-manager {
            background-color: rgba(255, 193, 7, 0.15);
            color: #ffc107;
        }
        
        .badge-developer {
            background-color: rgba(23, 162, 184, 0.15);
            color: #17a2b8;
        }
        
        .badge-designer {
            background-color: rgba(108, 117, 125, 0.15);
            color: #6c757d;
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
        
        .team-member-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .team-card {
            text-align: center;
            padding: 30px 20px;
            transition: all 0.3s ease;
        }
        
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .team-card-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 15px;
            border: 4px solid var(--primary-color);
        }
        
        .team-card-name {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .team-card-role {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
        
        .team-stats {
            display: flex;
            justify-content: space-around;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #eee;
        }
        
        .team-stat {
            text-align: center;
        }
        
        .team-stat-value {
            font-weight: 600;
            font-size: 1.1rem;
            color: var(--primary-color);
        }
        
        .team-stat-label {
            font-size: 0.8rem;
            color: #6c757d;
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
                <a class="nav-link active" href="team.php">
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
                    <h4 class="mb-0">Team Management</h4>
                    <p class="text-muted mb-0">Manage team members and their roles</p>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-secondary me-2">
                        <i class="bi bi-funnel me-1"></i> Filter
                    </button>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#teamMemberModal">
                        <i class="bi bi-plus-circle me-1"></i> Add Member
                    </button>
                </div>
            </div>
            
            <!-- Team Stats Cards -->
            <div class="row mb-4">
                <div class="col-xl-3 col-md-6 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-uppercase text-muted mb-2">Total Members</h6>
                                    <h3 class="mb-0">12</h3>
                                </div>
                                <div class="text-primary">
                                    <i class="bi bi-people fs-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-6 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-uppercase text-muted mb-2">Active Projects</h6>
                                    <h3 class="mb-0 text-success">18</h3>
                                </div>
                                <div class="text-success">
                                    <i class="bi bi-folder fs-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-6 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-uppercase text-muted mb-2">Hours This Week</h6>
                                    <h3 class="mb-0 text-info">342</h3>
                                </div>
                                <div class="text-info">
                                    <i class="bi bi-clock fs-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-6 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-uppercase text-muted mb-2">Productivity</h6>
                                    <h3 class="mb-0 text-warning">94%</h3>
                                </div>
                                <div class="text-warning">
                                    <i class="bi bi-graph-up fs-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Team Cards -->
            <div class="row mb-4">
                <div class="col-12">
                    <h5 class="mb-3">Team Overview</h5>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card team-card h-100">
                        <div class="card-body">
                            <img src="/placeholder.svg?height=80&width=80" alt="John Smith" class="team-card-avatar">
                            <div class="team-card-name">John Smith</div>
                            <div class="team-card-role">Senior Developer</div>
                            <span class="badge badge-active">Active</span>
                            <div class="team-stats">
                                <div class="team-stat">
                                    <div class="team-stat-value">42</div>
                                    <div class="team-stat-label">Hours</div>
                                </div>
                                <div class="team-stat">
                                    <div class="team-stat-value">5</div>
                                    <div class="team-stat-label">Projects</div>
                                </div>
                                <div class="team-stat">
                                    <div class="team-stat-value">98%</div>
                                    <div class="team-stat-label">Efficiency</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card team-card h-100">
                        <div class="card-body">
                            <img src="/placeholder.svg?height=80&width=80" alt="Sarah Johnson" class="team-card-avatar">
                            <div class="team-card-name">Sarah Johnson</div>
                            <div class="team-card-role">UI/UX Designer</div>
                            <span class="badge badge-active">Active</span>
                            <div class="team-stats">
                                <div class="team-stat">
                                    <div class="team-stat-value">38</div>
                                    <div class="team-stat-label">Hours</div>
                                </div>
                                <div class="team-stat">
                                    <div class="team-stat-value">3</div>
                                    <div class="team-stat-label">Projects</div>
                                </div>
                                <div class="team-stat">
                                    <div class="team-stat-value">95%</div>
                                    <div class="team-stat-label">Efficiency</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card team-card h-100">
                        <div class="card-body">
                            <img src="/placeholder.svg?height=80&width=80" alt="Mike Chen" class="team-card-avatar">
                            <div class="team-card-name">Mike Chen</div>
                            <div class="team-card-role">Project Manager</div>
                            <span class="badge badge-active">Active</span>
                            <div class="team-stats">
                                <div class="team-stat">
                                    <div class="team-stat-value">40</div>
                                    <div class="team-stat-label">Hours</div>
                                </div>
                                <div class="team-stat">
                                    <div class="team-stat-value">8</div>
                                    <div class="team-stat-label">Projects</div>
                                </div>
                                <div class="team-stat">
                                    <div class="team-stat-value">92%</div>
                                    <div class="team-stat-label">Efficiency</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card team-card h-100">
                        <div class="card-body">
                            <img src="/placeholder.svg?height=80&width=80" alt="Emily Davis" class="team-card-avatar">
                            <div class="team-card-name">Emily Davis</div>
                            <div class="team-card-role">Frontend Developer</div>
                            <span class="badge badge-active">Active</span>
                            <div class="team-stats">
                                <div class="team-stat">
                                    <div class="team-stat-value">36</div>
                                    <div class="team-stat-label">Hours</div>
                                </div>
                                <div class="team-stat">
                                    <div class="team-stat-value">4</div>
                                    <div class="team-stat-label">Projects</div>
                                </div>
                                <div class="team-stat">
                                    <div class="team-stat-value">96%</div>
                                    <div class="team-stat-label">Efficiency</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Team Members Table -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">All Team Members</h5>
                    <div class="d-flex align-items-center">
                        <span class="text-muted me-3">Total: 12 members</span>
                        <button class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-download me-1"></i> Export
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="teamTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Member</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Join Date</th>
                                    <th>Hours/Week</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="/placeholder.svg?height=50&width=50" alt="John Smith" class="team-member-avatar me-3">
                                            <div>
                                                <strong>John Smith</strong>
                                                <br><small class="text-muted">Senior Developer</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-developer">Developer</span></td>
                                    <td>john.smith@bixitech.com</td>
                                    <td>+1 (555) 123-4567</td>
                                    <td>2022-01-15</td>
                                    <td>42 hrs</td>
                                    <td>$85/hr</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-info" title="Projects"><i class="bi bi-folder"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="/placeholder.svg?height=50&width=50" alt="Sarah Johnson" class="team-member-avatar me-3">
                                            <div>
                                                <strong>Sarah Johnson</strong>
                                                <br><small class="text-muted">UI/UX Designer</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-designer">Designer</span></td>
                                    <td>sarah.johnson@bixitech.com</td>
                                    <td>+1 (555) 234-5678</td>
                                    <td>2022-03-20</td>
                                    <td>38 hrs</td>
                                    <td>$75/hr</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-info" title="Projects"><i class="bi bi-folder"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="/placeholder.svg?height=50&width=50" alt="Mike Chen" class="team-member-avatar me-3">
                                            <div>
                                                <strong>Mike Chen</strong>
                                                <br><small class="text-muted">Project Manager</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-manager">Manager</span></td>
                                    <td>mike.chen@bixitech.com</td>
                                    <td>+1 (555) 345-6789</td>
                                    <td>2021-11-10</td>
                                    <td>40 hrs</td>
                                    <td>$95/hr</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-info" title="Projects"><i class="bi bi-folder"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="/placeholder.svg?height=50&width=50" alt="Emily Davis" class="team-member-avatar me-3">
                                            <div>
                                                <strong>Emily Davis</strong>
                                                <br><small class="text-muted">Frontend Developer</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-developer">Developer</span></td>
                                    <td>emily.davis@bixitech.com</td>
                                    <td>+1 (555) 456-7890</td>
                                    <td>2022-06-01</td>
                                    <td>36 hrs</td>
                                    <td>$70/hr</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-info" title="Projects"><i class="bi bi-folder"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="/placeholder.svg?height=50&width=50" alt="David Wilson" class="team-member-avatar me-3">
                                            <div>
                                                <strong>David Wilson</strong>
                                                <br><small class="text-muted">Backend Developer</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-developer">Developer</span></td>
                                    <td>david.wilson@bixitech.com</td>
                                    <td>+1 (555) 567-8901</td>
                                    <td>2022-02-14</td>
                                    <td>40 hrs</td>
                                    <td>$80/hr</td>
                                    <td><span class="badge badge-inactive">On Leave</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-info" title="Projects"><i class="bi bi-folder"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="/placeholder.svg?height=50&width=50" alt="Lisa Brown" class="team-member-avatar me-3">
                                            <div>
                                                <strong>Lisa Brown</strong>
                                                <br><small class="text-muted">QA Engineer</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-developer">QA</span></td>
                                    <td>lisa.brown@bixitech.com</td>
                                    <td>+1 (555) 678-9012</td>
                                    <td>2023-01-08</td>
                                    <td>35 hrs</td>
                                    <td>$65/hr</td>
                                    <td><span class="badge badge-pending">Probation</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-info" title="Projects"><i class="bi bi-folder"></i></button>
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

    <!-- Team Member Modal -->
    <div class="modal fade" id="teamMemberModal" tabindex="-1" aria-labelledby="teamMemberModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="teamMemberModalLabel">Add Team Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="memberFirstName" class="form-label">First Name *</label>
                                <input type="text" class="form-control" id="memberFirstName" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="memberLastName" class="form-label">Last Name *</label>
                                <input type="text" class="form-control" id="memberLastName" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="memberEmail" class="form-label">Email *</label>
                                <input type="email" class="form-control" id="memberEmail" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="memberPhone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="memberPhone">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="memberRole" class="form-label">Role *</label>
                                <select class="form-select" id="memberRole" required>
                                    <option value="">Select Role</option>
                                    <option value="admin">Administrator</option>
                                    <option value="manager">Project Manager</option>
                                    <option value="developer">Developer</option>
                                    <option value="designer">Designer</option>
                                    <option value="qa">QA Engineer</option>
                                    <option value="intern">Intern</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="memberDepartment" class="form-label">Department</label>
                                <select class="form-select" id="memberDepartment">
                                    <option value="">Select Department</option>
                                    <option value="development">Development</option>
                                    <option value="design">Design</option>
                                    <option value="management">Management</option>
                                    <option value="qa">Quality Assurance</option>
                                    <option value="marketing">Marketing</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="memberHourlyRate" class="form-label">Hourly Rate</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" step="0.01" min="0" class="form-control" id="memberHourlyRate">
                                    <span class="input-group-text">/hr</span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="memberStartDate" class="form-label">Start Date *</label>
                                <input type="date" class="form-control" id="memberStartDate" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="memberEmploymentType" class="form-label">Employment Type</label>
                                <select class="form-select" id="memberEmploymentType">
                                    <option value="full_time">Full Time</option>
                                    <option value="part_time">Part Time</option>
                                    <option value="contract">Contract</option>
                                    <option value="intern">Intern</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="memberStatus" class="form-label">Status</label>
                                <select class="form-select" id="memberStatus">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                    <option value="pending">Pending</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="memberAddress" class="form-label">Address</label>
                            <textarea class="form-control" id="memberAddress" rows="3"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="memberNotes" class="form-label">Notes</label>
                            <textarea class="form-control" id="memberNotes" rows="3" placeholder="Additional notes about the team member"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="memberSendWelcome" checked>
                                <label class="form-check-label" for="memberSendWelcome">
                                    Send welcome email with login credentials
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add Team Member</button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery, Bootstrap JS, and DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        $(document).ready(function() {
            // Initialize DataTables
            $('#teamTable').DataTable({
                responsive: true,
                order: [[4, 'desc']]
            });

            // Sidebar toggle
            $('#sidebarToggle').click(function() {
                $('.sidebar').toggleClass('active');
                $('.main-content').toggleClass('active');
            });
            
            // Set default start date to today
            const today = new Date().toISOString().split('T')[0];
            $('#memberStartDate').val(today);
        });
    </script>
</body>
</html>
