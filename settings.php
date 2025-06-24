<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - BixiTech Billing System</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/css/settings.css">
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
                <a class="nav-link" href="team.php">
                    <i class="bi bi-person-lines-fill"></i> Team
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link active" href="settings.php">
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
                    <h4 class="mb-0">System Settings</h4>
                    <p class="text-muted mb-0">Configure your billing system preferences</p>
                </div>
                <div>
                    <button class="btn btn-sm btn-success" id="saveAllSettings">
                        <i class="bi bi-check-circle me-1"></i> Save All Changes
                    </button>
                </div>
            </div>
            
            <!-- Settings Navigation -->
            <div class="settings-nav">
                <ul class="nav nav-pills" id="settingsNav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#general" data-section="general">
                            <i class="bi bi-gear me-2"></i> General
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#company" data-section="company">
                            <i class="bi bi-building me-2"></i> Company
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#billing" data-section="billing">
                            <i class="bi bi-credit-card me-2"></i> Billing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#notifications" data-section="notifications">
                            <i class="bi bi-bell me-2"></i> Notifications
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#security" data-section="security">
                            <i class="bi bi-shield-lock me-2"></i> Security
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#backup" data-section="backup">
                            <i class="bi bi-cloud-download me-2"></i> Backup
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- General Settings -->
            <div id="general" class="settings-section active">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">General Settings</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-section">
                            <div class="section-title">System Preferences</div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="systemName" class="form-label">System Name</label>
                                    <input type="text" class="form-control" id="systemName" value="BixiTech Billing System">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="systemTimezone" class="form-label">Timezone</label>
                                    <select class="form-select" id="systemTimezone">
                                        <option value="UTC">UTC</option>
                                        <option value="America/New_York" selected>Eastern Time (ET)</option>
                                        <option value="America/Chicago">Central Time (CT)</option>
                                        <option value="America/Denver">Mountain Time (MT)</option>
                                        <option value="America/Los_Angeles">Pacific Time (PT)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="dateFormat" class="form-label">Date Format</label>
                                    <select class="form-select" id="dateFormat">
                                        <option value="MM/DD/YYYY" selected>MM/DD/YYYY</option>
                                        <option value="DD/MM/YYYY">DD/MM/YYYY</option>
                                        <option value="YYYY-MM-DD">YYYY-MM-DD</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="currency" class="form-label">Default Currency</label>
                                    <select class="form-select" id="currency">
                                        <option value="USD" selected>USD - US Dollar</option>
                                        <option value="EUR">EUR - Euro</option>
                                        <option value="GBP">GBP - British Pound</option>
                                        <option value="CAD">CAD - Canadian Dollar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <div class="section-title">Display Settings</div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="itemsPerPage" class="form-label">Items Per Page</label>
                                    <select class="form-select" id="itemsPerPage">
                                        <option value="10">10</option>
                                        <option value="25" selected>25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="theme" class="form-label">Theme</label>
                                    <select class="form-select" id="theme">
                                        <option value="light" selected>Light</option>
                                        <option value="dark">Dark</option>
                                        <option value="auto">Auto (System)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Company Settings -->
            <div id="company" class="settings-section">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Company Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-section">
                            <div class="section-title">Basic Information</div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="companyName" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="companyName" value="BixiTech Solutions">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="companyEmail" class="form-label">Company Email</label>
                                    <input type="email" class="form-control" id="companyEmail" value="info@bixitech.com">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="companyPhone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="companyPhone" value="+1 (555) 123-4567">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="companyWebsite" class="form-label">Website</label>
                                    <input type="url" class="form-control" id="companyWebsite" value="https://bixitech.com">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="companyAddress" class="form-label">Address</label>
                                <textarea class="form-control" id="companyAddress" rows="3">123 Business Street
Suite 100
New York, NY 10001</textarea>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <div class="section-title">Branding</div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="companyLogo" class="form-label">Company Logo</label>
                                    <input type="file" class="form-control" id="companyLogo" accept="image/*">
                                    <div class="form-text">Recommended size: 200x100px, PNG or JPG</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Logo Preview</label>
                                    <div class="logo-preview">
                                        <img src="/placeholder.svg?height=60&width=120" alt="Company Logo" style="max-width: 100%; height: auto;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="primaryColor" class="form-label">Primary Color</label>
                                    <div class="d-flex align-items-center">
                                        <input type="text" class="form-control" id="primaryColor" value="#4361ee">
                                        <div class="color-preview" style="background-color: #4361ee;" onclick="document.getElementById('primaryColorPicker').click()"></div>
                                        <input type="color" id="primaryColorPicker" style="display: none;" value="#4361ee">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="secondaryColor" class="form-label">Secondary Color</label>
                                    <div class="d-flex align-items-center">
                                        <input type="text" class="form-control" id="secondaryColor" value="#3a0ca3">
                                        <div class="color-preview" style="background-color: #3a0ca3;" onclick="document.getElementById('secondaryColorPicker').click()"></div>
                                        <input type="color" id="secondaryColorPicker" style="display: none;" value="#3a0ca3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Billing Settings -->
            <div id="billing" class="settings-section">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Billing Configuration</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-section">
                            <div class="section-title">Invoice Settings</div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="invoicePrefix" class="form-label">Invoice Number Prefix</label>
                                    <input type="text" class="form-control" id="invoicePrefix" value="INV">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="invoiceStartNumber" class="form-label">Starting Number</label>
                                    <input type="number" class="form-control" id="invoiceStartNumber" value="1000">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="defaultPaymentTerms" class="form-label">Default Payment Terms</label>
                                    <select class="form-select" id="defaultPaymentTerms">
                                        <option value="net_15">Net 15</option>
                                        <option value="net_30" selected>Net 30</option>
                                        <option value="net_45">Net 45</option>
                                        <option value="net_60">Net 60</option>
                                        <option value="due_on_receipt">Due on Receipt</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="defaultTaxRate" class="form-label">Default Tax Rate (%)</label>
                                    <input type="number" step="0.01" class="form-control" id="defaultTaxRate" value="8.25">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <div class="section-title">Payment Settings</div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="lateFeePercentage" class="form-label">Late Fee Percentage</label>
                                    <input type="number" step="0.01" class="form-control" id="lateFeePercentage" value="1.5">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lateFeeGracePeriod" class="form-label">Grace Period (Days)</label>
                                    <input type="number" class="form-control" id="lateFeeGracePeriod" value="5">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="autoSendReminders" checked>
                                    <label class="form-check-label" for="autoSendReminders">
                                        Automatically send payment reminders
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <div class="section-title">Time Tracking</div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="defaultHourlyRate" class="form-label">Default Hourly Rate</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" step="0.01" class="form-control" id="defaultHourlyRate" value="75.00">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="timeRounding" class="form-label">Time Rounding</label>
                                    <select class="form-select" id="timeRounding">
                                        <option value="none">No Rounding</option>
                                        <option value="15min" selected>Round to 15 minutes</option>
                                        <option value="30min">Round to 30 minutes</option>
                                        <option value="1hour">Round to 1 hour</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Notifications Settings -->
            <div id="notifications" class="settings-section">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Notification Settings</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-section">
                            <div class="section-title">Email Notifications</div>
                            <div class="notification-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>New Invoice Created</strong>
                                        <br><small class="text-muted">Notify when a new invoice is generated</small>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="notifyInvoiceCreated" checked>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>Payment Received</strong>
                                        <br><small class="text-muted">Notify when a payment is received</small>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="notifyPaymentReceived" checked>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>Overdue Invoices</strong>
                                        <br><small class="text-muted">Notify when invoices become overdue</small>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="notifyOverdueInvoices" checked>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>New Client Registration</strong>
                                        <br><small class="text-muted">Notify when a new client is added</small>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="notifyNewClient">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <div class="section-title">System Notifications</div>
                            <div class="notification-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>System Updates</strong>
                                        <br><small class="text-muted">Notify about system updates and maintenance</small>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="notifySystemUpdates" checked>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>Backup Completion</strong>
                                        <br><small class="text-muted">Notify when automated backups complete</small>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="notifyBackupComplete" checked>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Security Settings -->
            <div id="security" class="settings-section">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Security Settings</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-section">
                            <div class="section-title">Password Policy</div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="minPasswordLength" class="form-label">Minimum Password Length</label>
                                    <input type="number" class="form-control" id="minPasswordLength" value="8" min="6" max="20">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="passwordExpiry" class="form-label">Password Expiry (Days)</label>
                                    <input type="number" class="form-control" id="passwordExpiry" value="90">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="requireSpecialChars" checked>
                                    <label class="form-check-label" for="requireSpecialChars">
                                        Require special characters
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="requireNumbers" checked>
                                    <label class="form-check-label" for="requireNumbers">
                                        Require numbers
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <div class="section-title">Session Management</div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="sessionTimeout" class="form-label">Session Timeout (Minutes)</label>
                                    <input type="number" class="form-control" id="sessionTimeout" value="30">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="maxLoginAttempts" class="form-label">Max Login Attempts</label>
                                    <input type="number" class="form-control" id="maxLoginAttempts" value="5">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="enableTwoFactor">
                                    <label class="form-check-label" for="enableTwoFactor">
                                        Enable Two-Factor Authentication
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <div class="section-title">Data Protection</div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="enableDataEncryption" checked>
                                    <label class="form-check-label" for="enableDataEncryption">
                                        Enable data encryption at rest
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="enableAuditLog" checked>
                                    <label class="form-check-label" for="enableAuditLog">
                                        Enable audit logging
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Backup Settings -->
            <div id="backup" class="settings-section">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Backup & Recovery</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-section">
                            <div class="section-title">Automated Backups</div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="backupFrequency" class="form-label">Backup Frequency</label>
                                    <select class="form-select" id="backupFrequency">
                                        <option value="daily" selected>Daily</option>
                                        <option value="weekly">Weekly</option>
                                        <option value="monthly">Monthly</option>
                                        <option value="disabled">Disabled</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="backupTime" class="form-label">Backup Time</label>
                                    <input type="time" class="form-control" id="backupTime" value="02:00">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="backupRetention" class="form-label">Retention Period (Days)</label>
                                    <input type="number" class="form-control" id="backupRetention" value="30">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="backupLocation" class="form-label">Backup Location</label>
                                    <select class="form-select" id="backupLocation">
                                        <option value="local" selected>Local Storage</option>
                                        <option value="aws_s3">Amazon S3</option>
                                        <option value="google_drive">Google Drive</option>
                                        <option value="dropbox">Dropbox</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <div class="section-title">Recent Backups</div>
                            <div class="backup-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>Daily Backup - October 15, 2023</strong>
                                        <br><small class="text-muted">Size: 245 MB | Status: Completed</small>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-outline-primary me-2">Download</button>
                                        <button class="btn btn-sm btn-outline-success">Restore</button>
                                    </div>
                                </div>
                            </div>
                            <div class="backup-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>Daily Backup - October 14, 2023</strong>
                                        <br><small class="text-muted">Size: 243 MB | Status: Completed</small>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-outline-primary me-2">Download</button>
                                        <button class="btn btn-sm btn-outline-success">Restore</button>
                                    </div>
                                </div>
                            </div>
                            <div class="backup-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>Daily Backup - October 13, 2023</strong>
                                        <br><small class="text-muted">Size: 241 MB | Status: Completed</small>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-outline-primary me-2">Download</button>
                                        <button class="btn btn-sm btn-outline-success">Restore</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <div class="section-title">Manual Backup</div>
                            <p class="text-muted">Create an immediate backup of your system data.</p>
                            <button class="btn btn-primary">
                                <i class="bi bi-cloud-download me-2"></i> Create Backup Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/forms.js"></script>
    <script src="assets/js/settings.js"></script>
</body>
</html>
