<?php
$page_title = "Reports";
include 'includes/header.php';
?>

<?php include 'includes/admin_sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12">
                <h2>Reports & Analytics</h2>
                <p class="text-muted">Analyze your business performance with detailed reports.</p>
            </div>
        </div>

        <!-- Date Range Selector -->
        <div class="date-range-selector">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="startDate" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="startDate">
                        </div>
                        <div class="col-md-6">
                            <label for="endDate" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="endDate">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-secondary" onclick="setDateRange(7)">Last 7 Days</button>
                        <button type="button" class="btn btn-outline-secondary" onclick="setDateRange(30)">Last 30 Days</button>
                        <button type="button" class="btn btn-outline-secondary" onclick="setDateRange(90)">Last 90 Days</button>
                        <button type="button" class="btn btn-primary" onclick="updateReports()">Update Reports</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Key Metrics -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="metric-value text-success">$127,450</div>
                        <div class="metric-label">Total Revenue</div>
                        <small class="trend-up"><i class="bi bi-arrow-up"></i> +12.5%</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="metric-value text-primary">$115,200</div>
                        <div class="metric-label">Net Profit</div>
                        <small class="trend-up"><i class="bi bi-arrow-up"></i> +8.3%</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="metric-value text-warning">$12,250</div>
                        <div class="metric-label">Total Expenses</div>
                        <small class="trend-down"><i class="bi bi-arrow-down"></i> -3.2%</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="metric-value text-info">156</div>
                        <div class="metric-label">Active Clients</div>
                        <small class="trend-up"><i class="bi bi-arrow-up"></i> +5.1%</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Report Cards -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card report-card">
                    <div class="card-body text-center">
                        <div class="report-icon bg-primary text-white mx-auto">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h5>Revenue Report</h5>
                        <p class="text-muted">Detailed revenue analysis and trends</p>
                        <button class="btn btn-outline-primary">Generate Report</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card report-card">
                    <div class="card-body text-center">
                        <div class="report-icon bg-success text-white mx-auto">
                            <i class="bi bi-people"></i>
                        </div>
                        <h5>Client Report</h5>
                        <p class="text-muted">Client activity and billing summary</p>
                        <button class="btn btn-outline-success">Generate Report</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card report-card">
                    <div class="card-body text-center">
                        <div class="report-icon bg-warning text-white mx-auto">
                            <i class="bi bi-receipt"></i>
                        </div>
                        <h5>Invoice Report</h5>
                        <p class="text-muted">Invoice status and payment tracking</p>
                        <button class="btn btn-outline-warning">Generate Report</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="row mb-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Revenue Trend</h5>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Payment Methods</h5>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="paymentMethodsChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Charts -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Project Status Distribution</h5>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="projectStatusChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Expense Categories</h5>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="expenseCategoriesChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
