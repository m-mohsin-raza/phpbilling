<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoices - BixiTech Billing System</title>
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
        
        .badge-paid {
            background-color: rgba(40, 167, 69, 0.15);
            color: #28a745;
        }
        
        .badge-pending {
            background-color: rgba(255, 193, 7, 0.15);
            color: #ffc107;
        }
        
        .badge-overdue {
            background-color: rgba(220, 53, 69, 0.15);
            color: #dc3545;
        }
        
        .badge-draft {
            background-color: rgba(108, 117, 125, 0.15);
            color: #6c757d;
        }
        
        .badge-partial {
            background-color: rgba(253, 126, 20, 0.15);
            color: #fd7e14;
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
        
        .invoice-number {
            font-family: 'Courier New', monospace;
            font-weight: 600;
        }
        
        .amount-cell {
            font-weight: 600;
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
                <a class="nav-link active" href="invoices.php">
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
                    <h4 class="mb-0">Invoice Management</h4>
                    <p class="text-muted mb-0">Create, manage and track your invoices</p>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-secondary me-2">
                        <i class="bi bi-funnel me-1"></i> Filter
                    </button>
                    <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#invoiceModal">
                        <i class="bi bi-plus-circle me-1"></i> Create Invoice
                    </button>
                </div>
            </div>
            
            <!-- Invoice Stats Cards -->
            <div class="row mb-4">
                <div class="col-xl-3 col-md-6 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-uppercase text-muted mb-2">Total Invoices</h6>
                                    <h3 class="mb-0">47</h3>
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
                                    <h6 class="text-uppercase text-muted mb-2">Paid Amount</h6>
                                    <h3 class="mb-0 text-success">$125,750</h3>
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
                                    <h6 class="text-uppercase text-muted mb-2">Outstanding</h6>
                                    <h3 class="mb-0 text-warning">$18,650</h3>
                                </div>
                                <div class="text-warning">
                                    <i class="bi bi-clock-history fs-2"></i>
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
                                    <h6 class="text-uppercase text-muted mb-2">Overdue</h6>
                                    <h3 class="mb-0 text-danger">$5,200</h3>
                                </div>
                                <div class="text-danger">
                                    <i class="bi bi-exclamation-triangle fs-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Invoices Table -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">All Invoices</h5>
                    <div class="d-flex align-items-center">
                        <span class="text-muted me-3">Total: 47 invoices</span>
                        <button class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-download me-1"></i> Export
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="invoicesTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Invoice #</th>
                                    <th>Client</th>
                                    <th>Date</th>
                                    <th>Due Date</th>
                                    <th>Amount</th>
                                    <th>Paid</th>
                                    <th>Balance</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="invoice-number">INV-2023-105</span></td>
                                    <td>Mansoor LLC</td>
                                    <td>2023-10-10</td>
                                    <td>2023-10-30</td>
                                    <td class="amount-cell">$3,200.00</td>
                                    <td class="amount-cell text-success">$3,200.00</td>
                                    <td class="amount-cell">$0.00</td>
                                    <td><span class="badge badge-paid">Paid</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-info" title="Download"><i class="bi bi-download"></i></button>
                                            <button class="btn btn-sm btn-outline-success" title="Send"><i class="bi bi-send"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="invoice-number">INV-2023-104</span></td>
                                    <td>BixiSoft Inc</td>
                                    <td>2023-10-05</td>
                                    <td>2023-10-25</td>
                                    <td class="amount-cell">$5,750.00</td>
                                    <td class="amount-cell text-warning">$3,500.00</td>
                                    <td class="amount-cell text-warning">$2,250.00</td>
                                    <td><span class="badge badge-partial">Partial</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-info" title="Download"><i class="bi bi-download"></i></button>
                                            <button class="btn btn-sm btn-outline-success" title="Send"><i class="bi bi-send"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="invoice-number">INV-2023-103</span></td>
                                    <td>Mansoor LLC</td>
                                    <td>2023-09-28</td>
                                    <td>2023-10-18</td>
                                    <td class="amount-cell">$2,800.00</td>
                                    <td class="amount-cell">$0.00</td>
                                    <td class="amount-cell text-danger">$2,800.00</td>
                                    <td><span class="badge badge-overdue">Overdue</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-info" title="Download"><i class="bi bi-download"></i></button>
                                            <button class="btn btn-sm btn-outline-success" title="Send"><i class="bi bi-send"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="invoice-number">INV-2023-102</span></td>
                                    <td>BixiSoft Inc</td>
                                    <td>2023-09-20</td>
                                    <td>2023-10-10</td>
                                    <td class="amount-cell">$4,200.00</td>
                                    <td class="amount-cell text-success">$4,200.00</td>
                                    <td class="amount-cell">$0.00</td>
                                    <td><span class="badge badge-paid">Paid</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-info" title="Download"><i class="bi bi-download"></i></button>
                                            <button class="btn btn-sm btn-outline-success" title="Send"><i class="bi bi-send"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="invoice-number">INV-2023-101</span></td>
                                    <td>Tech Solutions</td>
                                    <td>2023-09-15</td>
                                    <td>2023-10-05</td>
                                    <td class="amount-cell">$1,850.00</td>
                                    <td class="amount-cell text-success">$1,850.00</td>
                                    <td class="amount-cell">$0.00</td>
                                    <td><span class="badge badge-paid">Paid</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-info" title="Download"><i class="bi bi-download"></i></button>
                                            <button class="btn btn-sm btn-outline-success" title="Send"><i class="bi bi-send"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="invoice-number">INV-2023-100</span></td>
                                    <td>Digital Partners</td>
                                    <td>2023-09-10</td>
                                    <td>2023-09-25</td>
                                    <td class="amount-cell">$3,450.00</td>
                                    <td class="amount-cell">$0.00</td>
                                    <td class="amount-cell text-warning">$3,450.00</td>
                                    <td><span class="badge badge-pending">Pending</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-info" title="Download"><i class="bi bi-download"></i></button>
                                            <button class="btn btn-sm btn-outline-success" title="Send"><i class="bi bi-send"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="invoice-number">DRAFT-099</span></td>
                                    <td>Innovative Systems</td>
                                    <td>2023-10-15</td>
                                    <td>2023-10-30</td>
                                    <td class="amount-cell">$6,750.00</td>
                                    <td class="amount-cell">$0.00</td>
                                    <td class="amount-cell">$6,750.00</td>
                                    <td><span class="badge badge-draft">Draft</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-info" title="Download"><i class="bi bi-download"></i></button>
                                            <button class="btn btn-sm btn-outline-success" title="Send"><i class="bi bi-send"></i></button>
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

    <!-- Invoice Modal -->
    <div class="modal fade" id="invoiceModal" tabindex="-1" aria-labelledby="invoiceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="invoiceModalLabel">Create New Invoice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="invoiceClient" class="form-label">Client *</label>
                                    <select class="form-select" id="invoiceClient" required>
                                        <option value="">Select Client</option>
                                        <option value="1">Mansoor LLC</option>
                                        <option value="2">BixiSoft Inc</option>
                                        <option value="3">Tech Solutions</option>
                                        <option value="4">Digital Partners</option>
                                        <option value="5">Innovative Systems</option>
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="invoiceProject" class="form-label">Project</label>
                                    <select class="form-select" id="invoiceProject">
                                        <option value="">Select Project</option>
                                        <option value="1">Mansoor Website</option>
                                        <option value="2">BixiSoft CRM</option>
                                        <option value="3">Mansoor Mobile App</option>
                                        <option value="4">BixiSoft ERP</option>
                                        <option value="5">Client Portal</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="invoiceDate" class="form-label">Invoice Date *</label>
                                        <input type="date" class="form-control" id="invoiceDate" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="invoiceDueDate" class="form-label">Due Date *</label>
                                        <input type="date" class="form-control" id="invoiceDueDate" required>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="invoiceNumber" class="form-label">Invoice Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text">INV-2023-</span>
                                        <input type="number" class="form-control" id="invoiceNumber" placeholder="106" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <label class="form-label mb-0">Invoice Items</label>
                                <button type="button" class="btn btn-sm btn-outline-primary" id="addInvoiceItem">
                                    <i class="bi bi-plus me-1"></i> Add Item
                                </button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-sm" id="invoiceItemsTable">
                                    <thead>
                                        <tr>
                                            <th width="40%">Description</th>
                                            <th width="15%">Quantity</th>
                                            <th width="15%">Rate</th>
                                            <th width="15%">Amount</th>
                                            <th width="15%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control form-control-sm" placeholder="Item description"></td>
                                            <td><input type="number" class="form-control form-control-sm" value="1" min="0.25" step="0.25"></td>
                                            <td><input type="number" class="form-control form-control-sm" value="100" min="0" step="1"></td>
                                            <td><input type="text" class="form-control form-control-sm" value="$100.00" readonly></td>
                                            <td><button type="button" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="invoiceNotes" class="form-label">Notes</label>
                                    <textarea class="form-control" id="invoiceNotes" rows="4" placeholder="Additional notes for the client"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="invoiceTerms" class="form-label">Terms & Conditions</label>
                                    <textarea class="form-control" id="invoiceTerms" rows="4">Payment due within 15 days of invoice date. Late payments are subject to fees.</textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">
                                <table class="table table-sm">
                                    <tr>
                                        <td><strong>Subtotal:</strong></td>
                                        <td class="text-end" id="invoiceSubtotal">$100.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input-group input-group-sm">
                                                <span class="input-group-text">Tax</span>
                                                <input type="number" class="form-control" id="invoiceTaxRate" value="0" min="0" max="100" step="0.1">
                                                <span class="input-group-text">%</span>
                                            </div>
                                        </td>
                                        <td class="text-end" id="invoiceTax">$0.00</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td><strong>Total:</strong></td>
                                        <td class="text-end"><strong id="invoiceTotal">$100.00</strong></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-outline-primary">Save Draft</button>
                    <button type="button" class="btn btn-success">Create & Send</button>
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
            $('#invoicesTable').DataTable({
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
                order: [[0, 'desc']]
            });

            // Sidebar toggle
            $('#sidebarToggle').click(function() {
                $('.sidebar').toggleClass('active');
                $('.main-content').toggleClass('active');
            });
            
            // Set default dates
            const today = new Date().toISOString().split('T')[0];
            $('#invoiceDate').val(today);
            
            const dueDate = new Date();
            dueDate.setDate(dueDate.getDate() + 15);
            $('#invoiceDueDate').val(dueDate.toISOString().split('T')[0]);
            
            // Calculate invoice totals
            function calculateInvoiceTotal() {
                let subtotal = 0;
                $('#invoiceItemsTable tbody tr').each(function() {
                    const qty = parseFloat($(this).find('input[type="number"]').eq(0).val()) || 0;
                    const rate = parseFloat($(this).find('input[type="number"]').eq(1).val()) || 0;
                    const amount = qty * rate;
                    $(this).find('input[readonly]').val('$' + amount.toFixed(2));
                    subtotal += amount;
                });
                
                const taxRate = parseFloat($('#invoiceTaxRate').val()) || 0;
                const tax = subtotal * (taxRate / 100);
                const total = subtotal + tax;
                
                $('#invoiceSubtotal').text('$' + subtotal.toFixed(2));
                $('#invoiceTax').text('$' + tax.toFixed(2));
                $('#invoiceTotal').text('$' + total.toFixed(2));
            }
            
            // Recalculate on input change
            $(document).on('input', '#invoiceItemsTable input, #invoiceTaxRate', calculateInvoiceTotal);
            
            // Add new invoice item
            $('#addInvoiceItem').click(function() {
                const newRow = `
                    <tr>
                        <td><input type="text" class="form-control form-control-sm" placeholder="Item description"></td>
                        <td><input type="number" class="form-control form-control-sm" value="1" min="0.25" step="0.25"></td>
                        <td><input type="number" class="form-control form-control-sm" value="100" min="0" step="1"></td>
                        <td><input type="text" class="form-control form-control-sm" value="$100.00" readonly></td>
                        <td><button type="button" class="btn btn-sm btn-outline-danger remove-item"><i class="bi bi-trash"></i></button></td>
                    </tr>
                `;
                $('#invoiceItemsTable tbody').append(newRow);
                calculateInvoiceTotal();
            });
            
            // Remove invoice item
            $(document).on('click', '.remove-item', function() {
                $(this).closest('tr').remove();
                calculateInvoiceTotal();
            });
        });
    </script>
</body>
</html>
