<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-header">
        <h5 class="sidebar-title"><i class="bi bi-speedometer2 me-2"></i> Navigating</h5>
    </div>
    
    <ul class="nav flex-column">
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>" href="index.php">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>
        
        <div class="sidebar-divider"></div>
        
        <!-- Time & Tasks -->
        <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'time-tracking.php' ? 'active' : '' ?>" href="time-tracking.php">
                <i class="bi bi-stopwatch"></i> Time Tracking
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'tasks.php' ? 'active' : '' ?>" href="tasks.php">
                <i class="bi bi-list-task"></i> Task Entries
                <span class="badge bg-primary rounded-pill">34</span>
            </a>
        </li>
        
        <div class="sidebar-divider"></div>
        
        <!-- Billing & Finance -->
        <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'invoices.php' ? 'active' : '' ?>" href="invoices.php">
                <i class="bi bi-file-earmark-text"></i> Invoices
                <span class="badge bg-danger rounded-pill">12</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'estimates.php' ? 'active' : '' ?>" href="estimates.php">
                <i class="bi bi-file-earmark-check"></i> Estimates
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'payments.php' ? 'active' : '' ?>" href="payments.php">
                <i class="bi bi-cash-stack"></i> Payments
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'expenses.php' ? 'active' : '' ?>" href="expenses.php">
                <i class="bi bi-credit-card"></i> Expenses
            </a>
        </li>
        
        <div class="sidebar-divider"></div>
        
        <!-- Clients & Projects -->
        <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'clients.php' ? 'active' : '' ?>" href="clients.php">
                <i class="bi bi-people"></i> Clients
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'projects.php' ? 'active' : '' ?>" href="projects.php">
                <i class="bi bi-folder"></i> Projects
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'contracts.php' ? 'active' : '' ?>" href="contracts.php">
                <i class="bi bi-file-earmark-text"></i> Contracts
            </a>
        </li>
        
        <div class="sidebar-divider"></div>
        
        <!-- Reports & Ledger -->
        <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'reports.php' ? 'active' : '' ?>" href="reports.php">
                <i class="bi bi-graph-up"></i> Reports
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'ledger.php' ? 'active' : '' ?>" href="ledger.php">
                <i class="bi bi-journal-bookmark"></i> Ledger
            </a>
        </li>
        
        <div class="sidebar-divider"></div>
        
        <!-- Team & Settings -->
        <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'team.php' ? 'active' : '' ?>" href="team.php">
                <i class="bi bi-person-lines-fill"></i> Team
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'settings.php' ? 'active' : '' ?>" href="settings.php">
                <i class="bi bi-gear"></i> Settings
            </a>
        </li>
    </ul>
</div>