<?php
$page_title = "Expenses";
include 'includes/header.php';
?>

<?php include 'includes/admin_sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12">
                <h2>Expenses</h2>
                <p class="text-muted">Track and manage your business expenses.</p>
            </div>
        </div>

        <!-- Expense Stats -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-danger">$12,450</h3>
                        <p class="text-muted mb-0">Total Expenses</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-warning">$3,200</h3>
                        <p class="text-muted mb-0">This Month</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-info">$1,850</h3>
                        <p class="text-muted mb-0">Pending Approval</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-success">47</h3>
                        <p class="text-muted mb-0">Total Records</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Expenses Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>All Expenses</h5>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addExpenseModal">
                            <i class="bi bi-plus"></i> Add Expense
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover data-table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        <th>Receipt</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2024-06-24</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="expense-category-icon bg-primary text-white me-2">
                                                    <i class="bi bi-laptop"></i>
                                                </div>
                                                Office Equipment
                                            </div>
                                        </td>
                                        <td>MacBook Pro 16" for development</td>
                                        <td class="amount-cell debit-amount">-$2,499.00</td>
                                        <td>
                                            <img src="assets/images/receipt-placeholder.jpg" alt="Receipt" class="receipt-preview">
                                        </td>
                                        <td><span class="badge badge-approved">Approved</span></td>
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
                                                <div class="expense-category-icon bg-success text-white me-2">
                                                    <i class="bi bi-car-front"></i>
                                                </div>
                                                Travel
                                            </div>
                                        </td>
                                        <td>Client meeting - Gas and parking</td>
                                        <td class="amount-cell debit-amount">-$85.50</td>
                                        <td>
                                            <img src="assets/images/receipt-placeholder.jpg" alt="Receipt" class="receipt-preview">
                                        </td>
                                        <td><span class="badge badge-approved">Approved</span></td>
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
                                                <div class="expense-category-icon bg-warning text-white me-2">
                                                    <i class="bi bi-wifi"></i>
                                                </div>
                                                Internet & Phone
                                            </div>
                                        </td>
                                        <td>Monthly internet service</td>
                                        <td class="amount-cell debit-amount">-$129.99</td>
                                        <td>
                                            <img src="assets/images/receipt-placeholder.jpg" alt="Receipt" class="receipt-preview">
                                        </td>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Expense Modal -->
<div class="modal fade" id="addExpenseModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Expense</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="addExpenseForm">
                    <div class="mb-3">
                        <label for="expenseDate" class="form-label">Date</label>
                        <input type="date" class="form-control" id="expenseDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="expenseCategory" class="form-label">Category</label>
                        <select class="form-select" id="expenseCategory" required>
                            <option value="">Select Category</option>
                            <option value="office_equipment">Office Equipment</option>
                            <option value="travel">Travel</option>
                            <option value="internet_phone">Internet & Phone</option>
                            <option value="software">Software</option>
                            <option value="marketing">Marketing</option>
                            <option value="meals">Meals & Entertainment</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="expenseDescription" class="form-label">Description</label>
                        <input type="text" class="form-control" id="expenseDescription" required>
                    </div>
                    <div class="mb-3">
                        <label for="expenseAmount" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="expenseAmount" step="0.01" min="0" required>
                    </div>
                    <div class="mb-3">
                        <label for="expenseReceipt" class="form-label">Receipt</label>
                        <input type="file" class="form-control" id="expenseReceipt" accept="image/*,.pdf">
                        <small class="form-text text-muted">Upload receipt image or PDF</small>
                    </div>
                    <div class="mb-3">
                        <label for="expenseNotes" class="form-label">Notes</label>
                        <textarea class="form-control" id="expenseNotes" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="addExpenseForm" class="btn btn-primary">Add Expense</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
