<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contracts - BixiTech Billing System</title>
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
        
        .badge-expired {
            background-color: rgba(220, 53, 69, 0.15);
            color: #dc3545;
        }
        
        .badge-pending {
            background-color: rgba(255, 193, 7, 0.15);
            color: #ffc107;
        }
        
        .badge-draft {
            background-color: rgba(108, 117, 125, 0.15);
            color: #6c757d;
        }
        
        .badge-signed {
            background-color: rgba(23, 162, 184, 0.15);
            color: #17a2b8;
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
        
        .contract-type-icon {
            width: 32px;
            height: 32px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }
        
        .amount-cell {
            font-weight: 600;
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
                <a class="nav-link" href="projects.php">
                    <i class="bi bi-folder"></i> Projects
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link active" href="contracts.php">
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
                    <h4 class="mb-0">Contract Management</h4>
                    <p class="text-muted mb-0">Manage client contracts and agreements</p>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-secondary me-2">
                        <i class="bi bi-funnel me-1"></i> Filter
                    </button>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#contractModal">
                        <i class="bi bi-plus-circle me-1"></i> New Contract
                    </button>
                </div>
            </div>
            
            <!-- Contract Stats Cards -->
            <div class="row mb-4">
                <div class="col-xl-3 col-md-6 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-uppercase text-muted mb-2">Total Contracts</h6>
                                    <h3 class="mb-0">18</h3>
                                </div>
                                <div class="text-primary">
                                    <i class="bi bi-file-earmark-text fs-2"></i>
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
                                    <h6 class="text-uppercase text-muted mb-2">Active Value</h6>
                                    <h3 class="mb-0 text-success">$485,750</h3>
                                </div>
                                <div class="text-success">
                                    <i class="bi bi-check-circle fs-2"></i>
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
                                    <h6 class="text-uppercase text-muted mb-2">Expiring Soon</h6>
                                    <h3 class="mb-0 text-warning">3</h3>
                                </div>
                                <div class="text-warning">
                                    <i class="bi bi-exclamation-triangle fs-2"></i>
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
                                    <h6 class="text-uppercase text-muted mb-2">Renewal Rate</h6>
                                    <h3 class="mb-0 text-info">89%</h3>
                                </div>
                                <div class="text-info">
                                    <i class="bi bi-arrow-repeat fs-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contracts Table -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">All Contracts</h5>
                    <div class="d-flex align-items-center">
                        <span class="text-muted me-3">Total: 18 contracts</span>
                        <button class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-download me-1"></i> Export
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="contractsTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Contract</th>
                                    <th>Client</th>
                                    <th>Type</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Value</th>
                                    <th>Progress</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div>
                                            <strong>E-commerce Platform Development</strong>
                                            <br><small class="text-muted">CON-2023-015</small>
                                        </div>
                                    </td>
                                    <td>Mansoor LLC</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="contract-type-icon bg-primary text-white me-2">
                                                <i class="bi bi-code-slash"></i>
                                            </div>
                                            Development
                                        </div>
                                    </td>
                                    <td>2023-08-01</td>
                                    <td>2024-02-01</td>
                                    <td class="amount-cell">$125,000</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width: 75%"></div>
                                        </div>
                                        <small class="text-muted">75%</small>
                                    </td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-info" title="Download"><i class="bi bi-download"></i></button>
                                            <button class="btn btn-sm btn-outline-success" title="Renew"><i class="bi bi-arrow-repeat"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <strong>CRM System Enhancement</strong>
                                            <br><small class="text-muted">CON-2023-014</small>
                                        </div>
                                    </td>
                                    <td>BixiSoft Inc</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="contract-type-icon bg-info text-white me-2">
                                                <i class="bi bi-gear"></i>
                                            </div>
                                            Maintenance
                                        </div>
                                    </td>
                                    <td>2023-06-15</td>
                                    <td>2024-06-15</td>
                                    <td class="amount-cell">$85,000</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" style="width: 45%"></div>
                                        </div>
                                        <small class="text-muted">45%</small>
                                    </td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-info" title="Download"><i class="bi bi-download"></i></button>
                                            <button class="btn btn-sm btn-outline-success" title="Renew"><i class="bi bi-arrow-repeat"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <strong>Mobile App Development</strong>
                                            <br><small class="text-muted">CON-2023-013</small>
                                        </div>
                                    </td>
                                    <td>Tech Solutions</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="contract-type-icon bg-success text-white me-2">
                                                <i class="bi bi-phone"></i>
                                            </div>
                                            Mobile
                                        </div>
                                    </td>
                                    <td>2023-09-01</td>
                                    <td>2024-03-01</td>
                                    <td class="amount-cell">$95,000</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" style="width: 30%"></div>
                                        </div>
                                        <small class="text-muted">30%</small>
                                    </td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-info" title="Download"><i class="bi bi-download"></i></button>
                                            <button class="btn btn-sm btn-outline-success" title="Renew"><i class="bi bi-arrow-repeat"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <strong>Website Redesign Project</strong>
                                            <br><small class="text-muted">CON-2023-012</small>
                                        </div>
                                    </td>
                                    <td>Digital Partners</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="contract-type-icon bg-warning text-dark me-2">
                                                <i class="bi bi-palette"></i>
                                            </div>
                                            Design
                                        </div>
                                    </td>
                                    <td>2023-05-01</td>
                                    <td>2023-10-31</td>
                                    <td class="amount-cell">$45,000</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width: 100%"></div>
                                        </div>
                                        <small class="text-muted">100%</small>
                                    </td>
                                    <td><span class="badge badge-expired">Expired</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-info" title="Download"><i class="bi bi-download"></i></button>
                                            <button class="btn btn-sm btn-outline-success" title="Renew"><i class="bi bi-arrow-repeat"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <strong>Database Migration Services</strong>
                                            <br><small class="text-muted">CON-2023-011</small>
                                        </div>
                                    </td>
                                    <td>Innovative Systems</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="contract-type-icon bg-danger text-white me-2">
                                                <i class="bi bi-database"></i>
                                            </div>
                                            Consulting
                                        </div>
                                    </td>
                                    <td>2023-07-15</td>
                                    <td>2023-12-15</td>
                                    <td class="amount-cell">$65,000</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" style="width: 60%"></div>
                                        </div>
                                        <small class="text-muted">60%</small>
                                    </td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-info" title="Download"><i class="bi bi-download"></i></button>
                                            <button class="btn btn-sm btn-outline-success" title="Renew"><i class="bi bi-arrow-repeat"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <strong>API Integration Project</strong>
                                            <br><small class="text-muted">DRAFT-010</small>
                                        </div>
                                    </td>
                                    <td>Mansoor LLC</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="contract-type-icon bg-secondary text-white me-2">
                                                <i class="bi bi-link-45deg"></i>
                                            </div>
                                            Integration
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td class="amount-cell">$35,000</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-secondary" style="width: 0%"></div>
                                        </div>
                                        <small class="text-muted">0%</small>
                                    </td>
                                    <td><span class="badge badge-draft">Draft</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-success" title="Send"><i class="bi bi-send"></i></button>
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

    <!-- Contract Modal -->
    <div class="modal fade" id="contractModal" tabindex="-1" aria-labelledby="contractModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contractModalLabel">Create New Contract</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contractClient" class="form-label">Client *</label>
                                    <select class="form-select" id="contractClient" required>
                                        <option value="">Select Client</option>
                                        <option value="1">Mansoor LLC</option>
                                        <option value="2">BixiSoft Inc</option>
                                        <option value="3">Tech Solutions</option>
                                        <option value="4">Digital Partners</option>
                                        <option value="5">Innovative Systems</option>
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="contractTitle" class="form-label">Contract Title *</label>
                                    <input type="text" class="form-control" id="contractTitle" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="contractType" class="form-label">Contract Type *</label>
                                    <select class="form-select" id="contractType" required>
                                        <option value="">Select Type</option>
                                        <option value="development">Development</option>
                                        <option value="maintenance">Maintenance</option>
                                        <option value="consulting">Consulting</option>
                                        <option value="design">Design</option>
                                        <option value="mobile">Mobile</option>
                                        <option value="integration">Integration</option>
                                        <option value="support">Support</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="contractStartDate" class="form-label">Start Date *</label>
                                        <input type="date" class="form-control" id="contractStartDate" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="contractEndDate" class="form-label">End Date *</label>
                                        <input type="date" class="form-control" id="contractEndDate" required>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="contractValue" class="form-label">Contract Value *</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" step="0.01" min="0" class="form-control" id="contractValue" required>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="contractNumber" class="form-label">Contract Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text">CON-2023-</span>
                                        <input type="number" class="form-control" id="contractNumber" placeholder="016" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="contractDescription" class="form-label">Project Description</label>
                            <textarea class="form-control" id="contractDescription" rows="4" placeholder="Describe the project scope, deliverables, and requirements..."></textarea>
                        </div>
                        
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contractPaymentTerms" class="form-label">Payment Terms</label>
                                    <select class="form-select" id="contractPaymentTerms">
                                        <option value="">Select Payment Terms</option>
                                        <option value="net_15">Net 15</option>
                                        <option value="net_30">Net 30</option>
                                        <option value="net_45">Net 45</option>
                                        <option value="net_60">Net 60</option>
                                        <option value="due_on_receipt">Due on Receipt</option>
                                        <option value="50_50">50% Upfront, 50% on Completion</option>
                                        <option value="monthly">Monthly Payments</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contractCurrency" class="form-label">Currency</label>
                                    <select class="form-select" id="contractCurrency">
                                        <option value="USD">USD - US Dollar</option>
                                        <option value="EUR">EUR - Euro</option>
                                        <option value="GBP">GBP - British Pound</option>
                                        <option value="CAD">CAD - Canadian Dollar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <label class="form-label mb-0">Milestones & Deliverables</label>
                                <button type="button" class="btn btn-sm btn-outline-primary" id="addMilestone">
                                    <i class="bi bi-plus me-1"></i> Add Milestone
                                </button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-sm" id="milestonesTable">
                                    <thead>
                                        <tr>
                                            <th width="30%">Milestone</th>
                                            <th width="25%">Due Date</th>
                                            <th width="20%">Amount</th>
                                            <th width="20%">Status</th>
                                            <th width="5%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control form-control-sm" placeholder="Milestone description"></td>
                                            <td><input type="date" class="form-control form-control-sm"></td>
                                            <td><input type="number" class="form-control form-control-sm" placeholder="0.00" min="0" step="0.01"></td>
                                            <td>
                                                <select class="form-select form-select-sm">
                                                    <option value="pending">Pending</option>
                                                    <option value="in_progress">In Progress</option>
                                                    <option value="completed">Completed</option>
                                                </select>
                                            </td>
                                            <td><button type="button" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contractNotes" class="form-label">Notes</label>
                                    <textarea class="form-control" id="contractNotes" rows="4" placeholder="Additional notes or special conditions"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contractTerms" class="form-label">Terms & Conditions</label>
                                    <textarea class="form-control" id="contractTerms" rows="4">Standard terms and conditions apply. All work to be completed as per agreed specifications.</textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-outline-primary">Save Draft</button>
                    <button type="button" class="btn btn-success">Create Contract</button>
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
            $('#contractsTable').DataTable({
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
                order: [[3, 'desc']]
            });

            // Sidebar toggle
            $('#sidebarToggle').click(function() {
                $('.sidebar').toggleClass('active');
                $('.main-content').toggleClass('active');
            });
            
            // Set default dates
            const today = new Date().toISOString().split('T')[0];
            $('#contractStartDate').val(today);
            
            const endDate = new Date();
            endDate.setMonth(endDate.getMonth() + 6);
            $('#contractEndDate').val(endDate.toISOString().split('T')[0]);
            
            // Add new milestone
            $('#addMilestone').click(function() {
                const newRow = `
                    <tr>
                        <td><input type="text" class="form-control form-control-sm" placeholder="Milestone description"></td>
                        <td><input type="date" class="form-control form-control-sm"></td>
                        <td><input type="number" class="form-control form-control-sm" placeholder="0.00" min="0" step="0.01"></td>
                        <td>
                            <select class="form-select form-select-sm">
                                <option value="pending">Pending</option>
                                <option value="in_progress">In Progress</option>
                                <option value="completed">Completed</option>
                            </select>
                        </td>
                        <td><button type="button" class="btn btn-sm btn-outline-danger remove-milestone"><i class="bi bi-trash"></i></button></td>
                    </tr>
                `;
                $('#milestonesTable tbody').append(newRow);
            });
            
            // Remove milestone
            $(document).on('click', '.remove-milestone', function() {
                $(this).closest('tr').remove();
            });
        });
    </script>
</body>
</html>
