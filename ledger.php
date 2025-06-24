<?php
$page_title = "Ledger - BixiTech Billing System";
include 'includes/header.php';
?>

<?php include 'includes/admin_sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="row mb-4">
            <div class="col-12">
                <h2>General Ledger</h2>
                <p class="text-muted">Complete financial transaction history</p>
            </div>
        </div>
        
        <!-- Balance Summary -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-primary">$127,450.00</h3>
                        <p class="text-muted mb-0">Total Revenue</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-danger">$18,750.00</h3>
                        <p class="text-muted mb-0">Total Expenses</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-success">$108,700.00</h3>
                        <p class="text-muted mb-0">Net Profit</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-warning">$23,450.00</h3>
                        <p class="text-muted mb-0">Outstanding</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Ledger Entries -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Transaction History</h5>
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
                            <button class="btn btn-primary" id="exportBtn">
                                <i class="bi bi-download"></i> Export
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover data-table" id="ledgerTable" style="width:100%">
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
    </div>
</div>

<?php include 'includes/footer.php'; ?>