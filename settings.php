<?php
$page_title = "Settings";
include 'includes/header.php';
?>

<?php include 'includes/admin_sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12">
                <h2>Settings</h2>
                <p class="text-muted">Configure your application settings and preferences.</p>
            </div>
        </div>

        <!-- Settings Navigation -->
        <div class="settings-nav">
            <ul class="nav nav-pills" id="settingsNav">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-section="generalSettings">General</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-section="companySettings">Company</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-section="invoiceSettings">Invoice</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-section="paymentSettings">Payment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-section="notificationSettings">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-section="backupSettings">Backup</a>
                </li>
            </ul>
        </div>

        <!-- General Settings -->
        <div id="generalSettings" class="settings-section active">
            <div class="card">
                <div class="card-header">
                    <h5>General Settings</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-section">
                            <h6 class="section-title">Application Settings</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="appName" class="form-label">Application Name</label>
                                        <input type="text" class="form-control" id="appName" value="BixiTech Billing System">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="timezone" class="form-label">Timezone</label>
                                        <select class="form-select" id="timezone">
                                            <option value="UTC">UTC</option>
                                            <option value="America/New_York" selected>Eastern Time</option>
                                            <option value="America/Chicago">Central Time</option>
                                            <option value="America/Denver">Mountain Time</option>
                                            <option value="America/Los_Angeles">Pacific Time</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="dateFormat" class="form-label">Date Format</label>
                                        <select class="form-select" id="dateFormat">
                                            <option value="MM/DD/YYYY" selected>MM/DD/YYYY</option>
                                            <option value="DD/MM/YYYY">DD/MM/YYYY</option>
                                            <option value="YYYY-MM-DD">YYYY-MM-DD</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Company Settings -->
        <div id="companySettings" class="settings-section">
            <div class="card">
                <div class="card-header">
                    <h5>Company Information</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-section">
                            <h6 class="section-title">Company Details</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="companyName" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="companyName" value="BixiTech Solutions">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="companyEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="companyEmail" value="info@bixitech.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="companyPhone" class="form-label">Phone</label>
                                        <input type="tel" class="form-control" id="companyPhone" value="+1 (555) 123-4567">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="companyWebsite" class="form-label">Website</label>
                                        <input type="url" class="form-control" id="companyWebsite" value="https://bixitech.com">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="companyAddress" class="form-label">Address</label>
                                <textarea class="form-control" id="companyAddress" rows="3">123 Business Street
Suite 100
New York, NY 10001</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="companyLogo" class="form-label">Company Logo</label>
                                <input type="file" class="form-control" id="companyLogo" accept="image/*">
                                <div class="logo-preview mt-3">
                                    <img src="assets/images/logo.png" alt="Current Logo" style="max-height: 100px;">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Invoice Settings -->
        <div id="invoiceSettings" class="settings-section">
            <div class="card">
                <div class="card-header">
                    <h5>Invoice Settings</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-section">
                            <h6 class="section-title">Invoice Configuration</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="invoicePrefix" class="form-label">Invoice Number Prefix</label>
                                        <input type="text" class="form-control" id="invoicePrefix" value="INV-">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="invoiceStartNumber" class="form-label">Starting Number</label>
                                        <input type="number" class="form-control" id="invoiceStartNumber" value="1000">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="defaultTaxRate" class="form-label">Default Tax Rate (%)</label>
                                        <input type="number" class="form-control" id="defaultTaxRate" value="10" step="0.1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="paymentTerms" class="form-label">Default Payment Terms (Days)</label>
                                        <input type="number" class="form-control" id="paymentTerms" value="15">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="invoiceNotes" class="form-label">Default Invoice Notes</label>
                                <textarea class="form-control" id="invoiceNotes" rows="3">Thank you for your business! Payment is due within 15 days.</textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Payment Settings -->
        <div id="paymentSettings" class="settings-section">
            <div class="card">
                <div class="card-header">
                    <h5>Payment Settings</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-section">
                            <h6 class="section-title">Payment Methods</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="enableCreditCard" checked>
                                            <label class="form-check-label" for="enableCreditCard">
                                                Enable Credit Card Payments
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="enableBankTransfer" checked>
                                            <label class="form-check-label" for="enableBankTransfer">
                                                Enable Bank Transfer
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="enablePayPal" checked>
                                            <label class="form-check-label" for="enablePayPal">
                                                Enable PayPal
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="enableCheck">
                                            <label class="form-check-label" for="enableCheck">
                                                Enable Check Payments
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Notification Settings -->
        <div id="notificationSettings" class="settings-section">
            <div class="card">
                <div class="card-header">
                    <h5>Notification Settings</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-section">
                            <h6 class="section-title">Email Notifications</h6>
                            <div class="notification-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>New Invoice Created</strong>
                                        <br><small class="text-muted">Notify when a new invoice is created</small>
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
                                        <br><small class="text-muted">Notify when payment is received</small>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="notifyPaymentReceived" checked>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>Invoice Overdue</strong>
                                        <br><small class="text-muted">Notify when invoice becomes overdue</small>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="notifyInvoiceOverdue" checked>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Backup Settings -->
        <div id="backupSettings" class="settings-section">
            <div class="card">
                <div class="card-header">
                    <h5>Backup & Data</h5>
                </div>
                <div class="card-body">
                    <div class="form-section">
                        <h6 class="section-title">Automatic Backups</h6>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="enableAutoBackup" checked>
                                <label class="form-check-label" for="enableAutoBackup">
                                    Enable Automatic Backups
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="backupFrequency" class="form-label">Backup Frequency</label>
                            <select class="form-select" id="backupFrequency">
                                <option value="daily" selected>Daily</option>
                                <option value="weekly">Weekly</option>
                                <option value="monthly">Monthly</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-section">
                        <h6 class="section-title">Manual Backup</h6>
                        <p class="text-muted">Create a backup of your data manually.</p>
                        <button type="button" class="btn btn-outline-primary">
                            <i class="bi bi-download"></i> Create Backup Now
                        </button>
                    </div>
                    <div class="form-section">
                        <h6 class="section-title">Recent Backups</h6>
                        <div class="backup-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <strong>backup_2024-06-24.sql</strong>
                                    <br><small class="text-muted">June 24, 2024 at 2:00 AM</small>
                                </div>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-download"></i> Download
                                </button>
                            </div>
                        </div>
                        <div class="backup-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <strong>backup_2024-06-23.sql</strong>
                                    <br><small class="text-muted">June 23, 2024 at 2:00 AM</small>
                                </div>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-download"></i> Download
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Save Button -->
        <div class="row mt-4">
            <div class="col-12">
                <button type="button" class="btn btn-primary" id="saveAllSettings">
                    <i class="bi bi-check"></i> Save All Settings
                </button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
