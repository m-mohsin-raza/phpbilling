<?php
$page_title = "Payments";
include 'includes/header.php';
?>

<?php include 'includes/admin_sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12">
                <h2>Payments</h2>
                <p class="text-muted">Track and manage payment transactions.</p>
            </div>
        </div>

        <!-- Payment Stats -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-success">$127,450</h3>
                        <p class="text-muted mb-0">Total Received</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-warning">$8,750</h3>
                        <p class="text-muted mb-0">Pending</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-danger">$2,300</h3>
                        <p class="text-muted mb-0">Failed</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-info">42</h3>
                        <p class="text-muted mb-0">This Month</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payments Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Payment History</h5>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPaymentModal">
                            <i class="bi bi-plus"></i> Record Payment
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover data-table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Client</th>
                                        <th>Invoice #</th>
                                        <th>Method</th>
                                        <th>Reference</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2024-06-24</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="client-avatar me-2">ML</div>
                                                Mansoor LLC
                                            </div>
                                        </td>
                                        <td><span class="invoice-number">INV-001</span></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="payment-method-icon bg-primary text-white me-2">
                                                    <i class="bi bi-credit-card"></i>
                                                </div>
                                                Credit Card
                                            </div>
                                        </td>
                                        <td><span class="transaction-ref">TXN-789456123</span></td>
                                        <td class="amount-cell credit-amount">+$5,750.00</td>
                                        <td><span class="badge badge-received">Received</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2024-06-22</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="client-avatar me-2">TS</div>
                                                Tech Solutions Inc
                                            </div>
                                        </td>
                                        <td><span class="invoice-number">INV-002</span></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="payment-method-icon bg-success text-white me-2">
                                                    <i class="bi bi-bank"></i>
                                                </div>
                                                Bank Transfer
                                            </div>
                                        </td>
                                        <td><span class="transaction-ref">WIRE-456789012</span></td>
                                        <td class="amount-cell credit-amount">+$8,250.00</td>
                                        <td><span class="badge badge-pending">Pending</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2024-06-20</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="client-avatar me-2">DM</div>
                                                Digital Marketing Pro
                                            </div>
                                        </td>
                                        <td><span class="invoice-number">INV-003</span></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="payment-method-icon bg-info text-white me-2">
                                                    <i class="bi bi-paypal"></i>
                                                </div>
                                                PayPal
                                            </div>
                                        </td>
                                        <td><span class="transaction-ref">PP-123456789</span></td>
                                        <td class="amount-cell debit-amount">-$3,500.00</td>
                                        <td><span class="badge badge-failed">Failed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
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

<!-- Add Payment Modal -->
<div class="modal fade" id="addPaymentModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Record Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="addPaymentForm">
                    <div class="mb-3">
                        <label for="paymentDate" class="form-label">Payment Date</label>
                        <input type="date" class="form-control" id="paymentDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="paymentClient" class="form-label">Client</label>
                        <select class="form-select" id="paymentClient" required>
                            <option value="">Select Client</option>
                            <option value="client1">Mansoor LLC</option>
                            <option value="client2">Tech Solutions Inc</option>
                            <option value="client3">Digital Marketing Pro</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="paymentInvoice" class="form-label">Invoice</label>
                        <select class="form-select" id="paymentInvoice">
                            <option value="">Select Invoice (Optional)</option>
                            <option value="inv1">INV-001 - $5,750.00</option>
                            <option value="inv2">INV-002 - $8,250.00</option>
                            <option value="inv3">INV-003 - $3,500.00</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="paymentAmount" class="form-label">Amount</label>
                                <input type="number" class="form-control" id="paymentAmount" step="0.01" min="0" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="paymentMethod" class="form-label">Payment Method</label>
                                <select class="form-select" id="paymentMethod" required>
                                    <option value="">Select Method</option>
                                    <option value="credit_card">Credit Card</option>
                                    <option value="bank_transfer">Bank Transfer</option>
                                    <option value="paypal">PayPal</option>
                                    <option value="check">Check</option>
                                    <option value="cash">Cash</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="paymentReference" class="form-label">Reference/Transaction ID</label>
                                <input type="text" class="form-control" id="paymentReference">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="paymentWireFee" class="form-label">Wire Fee (if applicable)</label>
                                <input type="number" class="form-control" id="paymentWireFee" step="0.01" min="0" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="paymentNetAmount" class="form-label">Net Amount</label>
                        <input type="text" class="form-control" id="paymentNetAmount" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="paymentNotes" class="form-label">Notes</label>
                        <textarea class="form-control" id="paymentNotes" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="addPaymentForm" class="btn btn-primary">Record Payment</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
