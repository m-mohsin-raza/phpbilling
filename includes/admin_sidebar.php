<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-header">
        <h5 class="sidebar-title">Navigation</h5>
    </div>
    <nav class="nav flex-column">
        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" href="index.php">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>
        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'clients.php' ? 'active' : ''; ?>" href="clients.php">
            <i class="bi bi-people"></i> Clients
        </a>
        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'projects.php' ? 'active' : ''; ?>" href="projects.php">
            <i class="bi bi-folder"></i> Projects
        </a>
        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'invoices.php' ? 'active' : ''; ?>" href="invoices.php">
            <i class="bi bi-receipt"></i> Invoices
            <?php
            // You can add dynamic badge count here
            $pending_invoices = 3; // This would come from your database
            if ($pending_invoices > 0) {
                echo '<span class="badge badge-pending">' . $pending_invoices . '</span>';
            }
            ?>
        </a>
        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'estimates.php' ? 'active' : ''; ?>" href="estimates.php">
            <i class="bi bi-file-text"></i> Estimates
        </a>
        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'payments.php' ? 'active' : ''; ?>" href="payments.php">
            <i class="bi bi-credit-card"></i> Payments
        </a>
        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'expenses.php' ? 'active' : ''; ?>" href="expenses.php">
            <i class="bi bi-receipt-cutoff"></i> Expenses
        </a>
        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'time-tracking.php' ? 'active' : ''; ?>" href="time-tracking.php">
            <i class="bi bi-clock"></i> Time Tracking
        </a>
        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'tasks.php' ? 'active' : ''; ?>" href="tasks.php">
            <i class="bi bi-check-square"></i> Tasks
        </a>
        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'reports.php' ? 'active' : ''; ?>" href="reports.php">
            <i class="bi bi-graph-up"></i> Reports
        </a>
        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'settings.php' ? 'active' : ''; ?>" href="settings.php">
            <i class="bi bi-gear"></i> Settings
        </a>
    </nav>
</div>
