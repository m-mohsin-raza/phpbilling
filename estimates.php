<?php
$page_title = "Estimates";
include 'includes/header.php';
?>

<?php include 'includes/admin_sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12">
                <h2>Estimates</h2>
                <p class="text-muted">Create and manage project estimates and quotes.</p>
            </div>
        </div>

        <!-- Estimate Stats -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-primary">23</h3>
                        <p class="text-muted mb-0">Total Estimates</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-success">15</h3>
                        <p class="text-muted mb-0">Accepted</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-warning">6</h3>
                        <p class="text-muted mb-0">Pending</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-danger">2</h3>
                        <p class="text-muted mb-0">Declined</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Estimates Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>All Estimates</h5>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEstimateModal">
                            <i class="bi bi-plus"></i> Create Estimate
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover data-table">
                                <thead>
                                    <tr>
                                        <th>Estimate #</th>
                                        <th>Client</th>
                                        <th>Date</th>
                                        <th>Valid Until</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="estimate-number">EST-001</span></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="client-avatar me-2">ML</div>
                                                Mansoor LLC
                                            </div>
                                        </td>
                                        <td>2024-06-15</td>
                                        <td>2024-07-15</td>
                                        <td class="amount-cell">$25,000.00</td>
                                        <td><span class="badge badge-accepted">Accepted</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success" title="Convert to Invoice">
                                                <i class="bi bi-receipt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="estimate-number">EST-002</span></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="client-avatar me-2">TS</div>
                                                Tech Solutions Inc
                                            </div>
                                        </td>
                                        <td>2024-06-18</td>
                                        <td>2024-07-18</td>
                                        <td class="amount-cell">$45,000.00</td>
                                        <td><span class="badge badge-sent">Sent</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success" title="Convert to Invoice">
                                                <i class="bi bi-receipt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="estimate-number">EST-003</span></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="client-avatar me-2">DM</div>
                                                Digital Marketing Pro
                                            </div>
                                        </td>
                                        <td>2024-06-10</td>
                                        <td>2024-07-10</td>
                                        <td class="amount-cell">$15,000.00</td>
                                        <td><span class="badge badge-declined">Declined</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success" title="Convert to Invoice">
                                                <i class="bi bi-receipt"></i>
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

<!-- Add Estimate Modal -->
<div class="modal fade" id="addEstimateModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Estimate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="addEstimateForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="estimateClient" class="form-label">Client</label>
                                <select class="form-select" id="estimateClient" required>
                                    <option value="">Select Client</option>
                                    <option value="client1">Mansoor LLC</option>
                                    <option value="client2">Tech Solutions Inc</option>
                                    <option value="client3">Digital Marketing Pro</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="estimateDate" class="form-label">Estimate Date</label>
                                <input type="date" class="form-control" id="estimateDate" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="estimateValidUntil" class="form-label">Valid Until</label>
                                <input type="date" class="form-control" id="estimateValidUntil" required>
                            </div>
                        </div>
                    </div>

                    <!-- Estimate Items -->
                    <div class="mb-3">
                        <label class="form-label">Estimate Items</label>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="estimateItemsTable">
                                <thead>
                                    <tr>
                                        <th>Description</th>
                                        <th width="100">Qty</th>
                                        <th width="120">Rate</th>
                                        <th width="120">Amount</th>
                                        <th width="50">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control form-control-sm" placeholder="Item description"></td>
                                        <td><input type="number" class="form-control form-control-sm" value="1" min="0.25" step="0.25"></td>
                                        <td><input type="number" class="form-control form-control-sm" value="100" min="0" step="1"></td>
                                        <td><input type="text" class="form-control form-control-sm" value="$100.00" readonly></td>
                                        <td><button type="button" class="btn btn-sm btn-outline-danger remove-item"><i class="bi bi-trash"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-primary" id="addEstimateItem">
                            <i class="bi bi-plus"></i> Add Item
                        </button>
                    </div>

                    <!-- Estimate Totals -->
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <div class="d-flex justify-content-between">
                                    <span>Subtotal:</span>
                                    <span id="estimateSubtotal">$100.00</span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>Tax:</span>
                                    <div class="input-group" style="width: 120px;">
                                        <input type="number" class="form-control form-control-sm" id="estimateTaxRate" value="10" min="0" max="100" step="0.1">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <span id="estimateTax">$10.00</span>
                                </div>
                            </div>
                            <div class="border-top pt-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Total:</strong>
                                    <strong id="estimateTotal">$110.00</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="estimateNotes" class="form-label">Notes</label>
                        <textarea class="form-control" id="estimateNotes" rows="3" placeholder="Additional notes or terms"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="addEstimateForm" class="btn btn-primary">Create Estimate</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
