<?php
$page_title = "Contracts";
include 'includes/header.php';
?>

<?php include 'includes/admin_sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12">
                <h2>Contract Management</h2>
                <p class="text-muted">Manage client contracts and agreements.</p>
            </div>
        </div>

        <!-- Contract Stats -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-primary">18</h3>
                        <p class="text-muted mb-0">Total Contracts</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-success">$485,750</h3>
                        <p class="text-muted mb-0">Active Value</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-warning">3</h3>
                        <p class="text-muted mb-0">Expiring Soon</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-info">89%</h3>
                        <p class="text-muted mb-0">Renewal Rate</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contracts Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>All Contracts</h5>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addContractModal">
                            <i class="bi bi-plus"></i> New Contract
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover data-table">
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
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-success" style="width: 75%"></div>
                                            </div>
                                            <small class="text-muted">75%</small>
                                        </td>
                                        <td><span class="badge badge-active">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info" title="Download">
                                                <i class="bi bi-download"></i>
                                            </button>
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
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-info" style="width: 45%"></div>
                                            </div>
                                            <small class="text-muted">45%</small>
                                        </td>
                                        <td><span class="badge badge-active">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info" title="Download">
                                                <i class="bi bi-download"></i>
                                            </button>
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
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-warning" style="width: 30%"></div>
                                            </div>
                                            <small class="text-muted">30%</small>
                                        </td>
                                        <td><span class="badge badge-active">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info" title="Download">
                                                <i class="bi bi-download"></i>
                                            </button>
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
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-success" style="width: 100%"></div>
                                            </div>
                                            <small class="text-muted">100%</small>
                                        </td>
                                        <td><span class="badge badge-expired">Expired</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info" title="Download">
                                                <i class="bi bi-download"></i>
                                            </button>
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
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-info" style="width: 60%"></div>
                                            </div>
                                            <small class="text-muted">60%</small>
                                        </td>
                                        <td><span class="badge badge-active">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info" title="Download">
                                                <i class="bi bi-download"></i>
                                            </button>
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
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-secondary" style="width: 0%"></div>
                                            </div>
                                            <small class="text-muted">0%</small>
                                        </td>
                                        <td><span class="badge badge-draft">Draft</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success" title="Send">
                                                <i class="bi bi-send"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Contract Modal -->
<div class="modal fade" id="addContractModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Contract</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="addContractForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="contractClient" class="form-label">Client</label>
                                <select class="form-select" id="contractClient" required>
                                    <option value="">Select Client</option>
                                    <option value="client1">Mansoor LLC</option>
                                    <option value="client2">BixiSoft Inc</option>
                                    <option value="client3">Tech Solutions</option>
                                    <option value="client4">Digital Partners</option>
                                    <option value="client5">Innovative Systems</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="contractType" class="form-label">Contract Type</label>
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
                    </div>
                    <div class="mb-3">
                        <label for="contractTitle" class="form-label">Contract Title</label>
                        <input type="text" class="form-control" id="contractTitle" required>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="contractStartDate" class="form-label">Start Date</label>
                                <input type="date" class="form-control" id="contractStartDate" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="contractEndDate" class="form-label">End Date</label>
                                <input type="date" class="form-control" id="contractEndDate" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="contractValue" class="form-label">Contract Value</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" id="contractValue" step="0.01" min="0" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="contractDescription" class="form-label">Project Description</label>
                        <textarea class="form-control" id="contractDescription" rows="4" placeholder="Describe the project scope, deliverables, and requirements..."></textarea>
                    </div>
                    <div class="row">
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

                    <!-- Milestones Section -->
                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <label class="form-label mb-0">Milestones & Deliverables</label>
                            <button type="button" class="btn btn-sm btn-outline-primary" id="addMilestone">
                                <i class="bi bi-plus"></i> Add Milestone
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-sm" id="milestonesTable">
                                <thead>
                                    <tr>
                                        <th>Milestone</th>
                                        <th>Due Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
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
                                        <td><button type="button" class="btn btn-sm btn-outline-danger remove-milestone"><i class="bi bi-trash"></i></button></td>
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
                <button type="submit" form="addContractForm" class="btn btn-primary">Create Contract</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
