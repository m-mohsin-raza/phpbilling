<?php
$page_title = "Dashboard";
include 'includes/header.php';
?>

<?php include 'includes/admin_sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <!-- Dashboard Content -->
        <div class="row mb-4">
            <div class="col-12">
                <h2>Dashboard</h2>
                <p class="text-muted">Welcome back! Here's what's happening with your business today.</p>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row mb-4">
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-uppercase text-muted mb-2">Total Revenue</h6>
                                <h3 class="mb-0">$127,450</h3>
                            </div>
                            <div class="text-primary">
                                <i class="bi bi-currency-dollar fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-uppercase text-muted mb-2">Active Projects</h6>
                                <h3 class="mb-0 text-success">24</h3>
                            </div>
                            <div class="text-success">
                                <i class="bi bi-folder fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-uppercase text-muted mb-2">Total Clients</h6>
                                <h3 class="mb-0 text-info">156</h3>
                            </div>
                            <div class="text-info">
                                <i class="bi bi-people fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-uppercase text-muted mb-2">Pending Invoices</h6>
                                <h3 class="mb-0 text-warning">$8,750</h3>
                            </div>
                            <div class="text-warning">
                                <i class="bi bi-receipt fs-2"></i>
                            </div>
                        </div>
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
                        <div class="chart-container" style="position: relative; height:300px;">
                            <canvas id="revenueChart" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Recent Activity</h5>
                    </div>
                    <div class="card-body">
                        <div class="activity-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <strong>Invoice #INV-001</strong> created
                                    <br><small class="text-muted">Mansoor LLC</small>
                                </div>
                                <small class="activity-time">2 hours ago</small>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <strong>Payment received</strong>
                                    <br><small class="text-muted">$5,000.00</small>
                                </div>
                                <small class="activity-time">4 hours ago</small>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <strong>New client</strong> added
                                    <br><small class="text-muted">Tech Solutions Inc</small>
                                </div>
                                <small class="activity-time">1 day ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Ensure Chart.js is loaded before executing this code
document.addEventListener('DOMContentLoaded', function() {
    const revenueCtx = document.getElementById('revenueChart');
    
    if (revenueCtx) {
        // Check if Chart is available
        if (typeof Chart !== 'undefined') {
            new Chart(revenueCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                    datasets: [{
                        label: 'Revenue',
                        data: [12000, 15000, 18000, 14000, 22000, 25000, 28000, 24000, 30000, 32000],
                        borderColor: '#4361ee',
                        backgroundColor: 'rgba(67, 97, 238, 0.1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true,
                        pointBackgroundColor: '#4361ee',
                        pointRadius: 4,
                        pointHoverRadius: 6
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return '$' + context.raw.toLocaleString();
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return '$' + value.toLocaleString();
                                }
                            },
                            grid: {
                                drawBorder: false
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        } else {
            console.error('Chart.js is not loaded');
        }
    }
});
</script>

<?php include 'includes/footer.php'; ?>