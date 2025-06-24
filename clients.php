<?php
$page_title = "Clients";
include 'includes/header.php';
?>

<?php include 'includes/admin_sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12">
                <h2>Clients</h2>
                <p class="text-muted">Manage your client relationships and information.</p>
            </div>
        </div>

        <!-- Client Stats -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-primary">156</h3>
                        <p class="text-muted mb-0">Total Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-success">142</h3>
                        <p class="text-muted mb-0">Active</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-warning">14</h3>
                        <p class="text-muted mb-0">Inactive</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-info">28</h3>
                        <p class="text-muted mb-0">New This Month</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Clients Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>All Clients</h5>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addClientModal">
                            <i class="bi bi-plus"></i> Add Client
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover data-table">
                                <thead>
                                    <tr>
                                        <th>Client</th>
                                        <th>Company</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Projects</th>
                                        <th>Total Billed</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="client-avatar me-3">JD</div>
                                                <div>
                                                    <strong>John Doe</strong>
                                                    <br><small class="text-muted">Client since 2023</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Mansoor LLC</td>
                                        <td>john@mansoorllc.com</td>
                                        <td>+1 (555) 123-4567</td>
                                        <td>3</td>
                                        <td class="amount-cell">$45,750.00</td>
                                        <td><span class="badge badge-active">Active</span></td>
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
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="client-avatar me-3">SM</div>
                                                <div>
                                                    <strong>Sarah Miller</strong>
                                                    <br><small class="text-muted">Client since 2024</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Tech Solutions Inc</td>
                                        <td>sarah@techsolutions.com</td>
                                        <td>+1 (555) 987-6543</td>
                                        <td>2</td>
                                        <td class="amount-cell">$28,500.00</td>
                                        <td><span class="badge badge-active">Active</span></td>
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
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="client-avatar me-3">MJ</div>
                                                <div>
                                                    <strong>Mike Johnson</strong>
                                                    <br><small class="text-muted">Client since 2022</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Digital Marketing Pro</td>
                                        <td>mike@digitalmarketing.com</td>
                                        <td>+1 (555) 456-7890</td>
                                        <td>1</td>
                                        <td class="amount-cell">$12,300.00</td>
                                        <td><span class="badge badge-inactive">Inactive</span></td>
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

<!-- Add Client Modal -->
<div class="modal fade" id="addClientModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="addClientForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="clientFirstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="clientFirstName" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="clientLastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="clientLastName" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="clientCompany" class="form-label">Company</label>
                        <input type="text" class="form-control" id="clientCompany">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="clientEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="clientEmail" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="clientPhone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="clientPhone">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="clientAddress" class="form-label">Address</label>
                        <textarea class="form-control" id="clientAddress" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="clientCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="clientCity">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="clientState" class="form-label">State</label>
                                <input type="text" class="form-control" id="clientState">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="clientZip" class="form-label">ZIP Code</label>
                                <input type="text" class="form-control" id="clientZip">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="addClientForm" class="btn btn-primary">Add Client</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
