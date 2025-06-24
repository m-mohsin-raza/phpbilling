<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ledger - BixiTech Billing System</title>
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
        
        .badge-credit {
            background-color: rgba(40, 167, 69, 0.15);
            color: #28a745;
        }
        
        .badge-debit {
            background-color: rgba(220, 53, 69, 0.15);
            color: #dc3545;
        }
        
        .badge-invoice {
            background-color: rgba(23, 162, 184, 0.15);
            color: #17a2b8;
        }
        
        .badge-payment {
            background-color: rgba(40, 167, 69, 0.15);
            color: #28a745;
        }
        
        .badge-expense {
            background-color: rgba(255, 193, 7, 0.15);
            color: #ffc107;
        }
        
        .badge-adjustment {
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
        
        .amount-cell {
            font-weight: 600;
            font-family: 'Courier New', monospace;
        }
        
        .credit-amount {
            color: #28a745;
        }
        
        .debit-amount {
            color: #dc3545;
        }
        
        .balance-summary {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 25px;
        }
        
        .balance-item {
            text-align: center;
        }
        
        .balance-value {
            font-size: 1.8rem;
            font-weight: 700;
            font-family: 'Courier New', monospace;
        }
        
        .balance-label {
            font-size: 0.875rem;
            opacity: 0.9;
        }
        
        .transaction-ref {
            font-family: 'Courier New', monospace;
            font-size: 0.875rem;
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
                <a class="nav-link active" href="ledger.php">
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
                    <h4 class="mb-0">General Ledger</h4>
                    <p class="text-muted mb-0">Complete financial transaction history</p>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-secondary me-2">
                        <i class="bi bi-funnel me-1"></i> Filter
                    </button>
                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-download me-1"></i> Export
                    </button>
                </div>
            </div>
            
            <!-- Balance Summary -->
            <div class="balance-summary">
                <div class="row">
                    <div class="col-md-3 balance-item">
                        <div class="balance-value">$127,450.00</div>
                        <div class="balance-label">Total Revenue</div>
                    </div>
                    <div class="col-md-3 balance-item">
                        <div class="balance-value">$18,750.00</div>
                        <div class="balance-label">Total Expenses</div>
                    </div>
                    <div class="col-md-3 balance-item">
                        <div class="balance-value">$108,700.00</div>
                        <div class="balance-label">Net Profit</div>
                    </div>
                    <div class="col-md-3 balance-item">
                        <div class="balance-value">$23,450.00</div>
                        <div class="balance-label">Outstanding</div>
                    </div>
                </div>
            </div>
            
            <!-- Ledger Entries -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Transaction History</h5>
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <select class="form-select form-select-sm" id="accountFilter">
                                <option value="">All Accounts</option>
                                <option value="revenue">Revenue</option>
                                <option value="expenses">Expenses</option>
                                <option value="receivables">Accounts Receivable</option>
                                <option value="payables">Accounts Payable</option>
                            </select>
                        </div>
                        <span class="text-muted me-3">Total: 156 transactions</span>
                        <button class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-download me-1"></i> Export
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="ledgerTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Reference</th>
                                    <th>Description</th>
                                    <th>Account</th>
                                    <th>Client/Vendor</th>
                                    <th>Debit</th>
                                    <th>Credit</th>
                                    <th>Balance</th>
                                    <th>Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2023-10-15</td>
                                    <td><span class="transaction-ref">INV-2023-045</span></td>
                                    <td>Payment received for E-commerce Platform</td>
                                    <td>Accounts Receivable</td>
                                    <td>Mansoor LLC</td>
                                    <td class="amount-cell">-</td>
                                    <td class="amount-cell credit-amount">$25,000.00</td>
                                    <td class="amount-cell">$127,450.00</td>
                                    <td><span class="badge badge-payment">Payment</span></td>
                                </tr>
                                <tr>
                                    <td>2023-10-14</td>
                                    <td><span class="transaction-ref">EXP-2023-089</span></td>
                                    <td>Adobe Creative Suite License</td>
                                    <td>Software Expenses</td>
                                    <td>Adobe Inc</td>
                                    <td class="amount-cell debit-amount">$52.99</td>
                                    <td class="amount-cell">-</td>
                                    <td class="amount-cell">$102,450.00</td>
                                    <td><span class="badge badge-expense">Expense</span></td>
                                </tr>
                                <tr>
                                    <td>2023-10-12</td>
                                    <td><span class="transaction-ref">INV-2023-044</span></td>
                                    <td>CRM System Enhancement - Invoice</td>
                                    <td>Revenue</td>
                                    <td>BixiSoft Inc</td>
                                    <td class="amount-cell">-</td>
                                    <td class="amount-cell credit-amount">$18,500.00</td>
                                    <td class="amount-cell">$102,502.99</td>
                                    <td><span class="badge badge-invoice">Invoice</span></td>
                                </tr>
                                <tr>
                                    <td>2023-10-10</td>
                                    <td><span class="transaction-ref">EXP-2023-088</span></td>
                                    <td>Client meeting - Uber ride</td>
                                    <td>Travel Expenses</td>
                                    <td>Uber Technologies</td>
                                    <td class="amount-cell debit-amount">$28.50</td>
                                    <td class="amount-cell">-</td>
                                    <td class="amount-cell">$84,002.99</td>
                                    <td><span class="badge badge-expense">Expense</span></td>
                                </tr>
                                <tr>
                                    <td>2023-10-08</td>
                                    <td><span class="transaction-ref">PAY-2023-067</span></td>
                                    <td>Payment received for Mobile App Development</td>
                                    <td>Accounts Receivable</td>
                                    <td>Tech Solutions</td>
                                    <td class="amount-cell">-</td>
                                    <td class="amount-cell credit-amount">$35,000.00</td>
                                    <td class="amount-cell">$84,031.49</td>
                                    <td><span class="badge badge-payment">Payment</span></td>
                                </tr>
                                <tr>
                                    <td>2023-10-05</td>
                                    <td><span class="transaction-ref">EXP-2023-087</span></td>
                                    <td>Office supplies - Staples</td>
                                    <td>Office Expenses</td>
                                    <td>Staples Inc</td>
                                    <td class="amount-cell debit-amount">$124.30</td>
                                    <td class="amount-cell">-</td>
                                    <td class="amount-cell">$49,031.49</td>
                                    <td><span class="badge badge-expense">Expense</span></td>
                                </tr>
                                <tr>
                                    <td>2023-10-03</td>
                                    <td><span class="transaction-ref">INV-2023-043</span></td>
                                    <td>Website Redesign Project - Final Payment</td>
                                    <td>Revenue</td>
                                    <td>Digital Partners</td>
                                    <td class="amount-cell">-</td>
                                    <td class="amount-cell credit-amount">$12,750.00</td>
                                    <td class="amount-cell">$49,155.79</td>
                                    <td><span class="badge badge-invoice">Invoice</span></td>
                                </tr>
                                <tr>
                                    <td>2023-10-01</td>
                                    <td><span class="transaction-ref">EXP-2023-086</span></td>
                                    <td>Monthly internet bill</td>
                                    <td>Utilities</td>
                                    <td>Comcast</td>
                                    <td class="amount-cell debit-amount">$89.99</td>
                                    <td class="amount-cell">-</td>
                                    <td class="amount-cell">$36,405.79</td>
                                    <td><span class="badge badge-expense">Expense</span></td>
                                </tr>
                                <tr>
                                    <td>2023-09-28</td>
                                    <td><span class="transaction-ref">ADJ-2023-012</span></td>
                                    <td>Bank fee adjustment</td>
                                    <td>Bank Charges</td>
                                    <td>Chase Bank</td>
                                    <td class="amount-cell debit-amount">$15.00</td>
                                    <td class="amount-cell">-</td>
                                    <td class="amount-cell">$36,495.78</td>
                                    <td><span class="badge badge-adjustment">Adjustment</span></td>
                                </tr>
                                <tr>
                                    <td>2023-09-25</td>
                                    <td><span class="transaction-ref">PAY-2023-066</span></td>
                                    <td>Payment received for Database Migration</td>
                                    <td>Accounts Receivable</td>
                                    <td>Innovative Systems</td>
                                    <td class="amount-cell">-</td>
                                    <td class="amount-cell credit-amount">$32,500.00</td>
                                    <td class="amount-cell">$36,510.78</td>
                                    <td><span class="badge badge-payment">Payment</span></td>
                                </tr>
                                <tr>
                                    <td>2023-09-22</td>
                                    <td><span class="transaction-ref">EXP-2023-085</span></td>
                                    <td>External hard drive for backups</td>
                                    <td>Equipment</td>
                                    <td>Best Buy</td>
                                    <td class="amount-cell debit-amount">$159.99</td>
                                    <td class="amount-cell">-</td>
                                    <td class="amount-cell">$4,010.78</td>
                                    <td><span class="badge badge-expense">Expense</span></td>
                                </tr>
                                <tr>
                                    <td>2023-09-20</td>
                                    <td><span class="transaction-ref">INV-2023-042</span></td>
                                    <td>API Integration Project - Milestone 2</td>
                                    <td>Revenue</td>
                                    <td>Mansoor LLC</td>
                                    <td class="amount-cell">-</td>
                                    <td class="amount-cell credit-amount">$15,200.00</td>
                                    <td class="amount-cell">$4,170.77</td>
                                    <td><span class="badge badge-invoice">Invoice</span></td>
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
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        $(document).ready(function() {
            // Initialize DataTables
            $('#ledgerTable').DataTable({
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
                order: [[0, 'desc']],
                pageLength: 25
            });

            // Sidebar toggle
            $('#sidebarToggle').click(function() {
                $('.sidebar').toggleClass('active');
                $('.main-content').toggleClass('active');
            });
            
            // Account filter
            $('#accountFilter').change(function() {
                const selectedAccount = $(this).val();
                if (selectedAccount) {
                    $('#ledgerTable').DataTable().column(3).search(selectedAccount).draw();
                } else {
                    $('#ledgerTable').DataTable().column(3).search('').draw();
                }
            });
        });
    </script>
</body>
</html>
