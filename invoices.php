<?php
$page_title = "Invoices";
include 'includes/header.php';
?>

<?php include 'includes/admin_sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12">
                <h2>Invoices</h2>
                <p class="text-muted">Create and manage your invoices.</p>
            </div>
        </div>

        <!-- Invoice Stats -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-primary">47</h3>
                        <p class="text-muted mb-0">Total Invoices</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-success">32</h3>
                        <p class="text-muted mb-0">Paid</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-warning">12</h3>
                        <p class="text-muted mb-0">Pending</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-danger">3</h3>
                        <p class="text-muted mb-0">Overdue</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Invoices Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>All Invoices</h5>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addInvoiceModal">
                            <i class="bi bi-plus"></i> Create Invoice
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover data-table">
                                <thead>
                                    <tr>
                                        <th>Invoice #</th>
                                        <th>Client</th>
                                        <th>Date</th>
                                        <th>Due Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="invoice-number">INV-001</span></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="client-avatar me-2">ML</div>
                                                Mansoor LLC
                                            </div>
                                        </td>
                                        <td>2024-06-20</td>
                                        <td>2024-07-05</td>
                                        <td class="amount-cell">$5,750.00</td>
                                        <td><span class="badge badge-paid">Paid</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Download">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="invoice-number">INV-002</span></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="client-avatar me-2">TS</div>
                                                Tech Solutions Inc
                                            </div>
                                        </td>
                                        <td>2024-06-22</td>
                                        <td>2024-07-07</td>
                                        <td class="amount-cell">$8,250.00</td>
                                        <td><span class="badge badge-pending">Pending</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Download">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="invoice-number">INV-003</span></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="client-avatar me-2">DM</div>
                                                Digital Marketing Pro
                                            </div>
                                        </td>
                                        <td>2024-06-15</td>
                                        <td>2024-06-30</td>
                                        <td class="amount-cell">$3,500.00</td>
                                        <td><span class="badge badge-overdue">Overdue</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary" title="Download">
                                                <i class="bi bi-download"></i>
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

<!-- Add Invoice Modal -->
<div class="modal fade" id="addInvoiceModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Invoice</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="addInvoiceForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="invoiceClient" class="form-label">Client</label>
                                <select class="form-select" id="invoiceClient" required>
                                    <option value="">Select Client</option>
                                    <option value="client1">Mansoor LLC</option>
                                    <option value="client2">Tech Solutions Inc</option>
                                    <option value="client3">Digital Marketing Pro</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="invoiceDate" class="form-label">Invoice Date</label>
                                <input type="date" class="form-control" id="invoiceDate" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="invoiceDueDate" class="form-label">Due Date</label>
                                <input type="date" class="form-control" id="invoiceDueDate" required>
                            </div>
                        </div>
                    </div>

                    <!-- Invoice Items -->
                    <div class="mb-3">
                        <label class="form-label">Invoice Items</label>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="invoiceItemsTable">
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
                        <button type="button" class="btn btn-sm btn-outline-primary" id="addInvoiceItem">
                            <i class="bi bi-plus"></i> Add Item
                        </button>
                    </div>

                    <!-- Invoice Totals -->
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <div class="d-flex justify-content-between">
                                    <span>Subtotal:</span>
                                    <span id="invoiceSubtotal">$100.00</span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>Tax:</span>
                                    <div class="input-group" style="width: 120px;">
                                        <input type="number" class="form-control form-control-sm" id="invoiceTaxRate" value="10" min="0" max="100" step="0.1">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <span id="invoiceTax">$10.00</span>
                                </div>
                            </div>
                            <div class="border-top pt-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Total:</strong>
                                    <strong id="invoiceTotal">$110.00</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="invoiceNotes" class="form-label">Notes</label>
                        <textarea class="form-control" id="invoiceNotes" rows="3" placeholder="Additional notes or terms"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="addInvoiceForm" class="btn btn-primary">Create Invoice</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
