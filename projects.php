<?php
$page_title = "Projects";
include 'includes/header.php';
?>

<?php include 'includes/admin_sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12">
                <h2>Projects</h2>
                <p class="text-muted">Manage your projects and billing cycles.</p>
            </div>
        </div>

        <!-- Project Stats (Kept same as per your request) -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-primary">7</h3>
                        <p class="text-muted mb-0">Total Projects</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-warning">5</h3>
                        <p class="text-muted mb-0">Active</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-success">4</h3>
                        <p class="text-muted mb-0">Recurring</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-danger">3</h3>
                        <p class="text-muted mb-0">Hourly</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Projects Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>All Projects</h5>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProjectModal">
                            <i class="bi bi-plus"></i> Add Project
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover data-table">
                                <thead>
                                    <tr>
                                        <th>Project</th>
                                        <th>From Company</th>
                                        <th>To Client</th>
                                        <th>Billing Type</th>
                                        <th>Rate</th>
                                        <th>Payment Cycle</th>
                                        <th>Invoice Cycle</th> <!-- Added -->
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="project-icon me-3">
                                                    <i class="bi bi-briefcase"></i>
                                                </div>
                                                <div>
                                                    <strong>SF 1</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Acme Corp</td>
                                        <td>Client Alpha</td>
                                        <td><span class="badge bg-success">Recurring</span></td>
                                        <td>$2,500.00</td>
                                        <td>Weekly</td>
                                        <td>9th to 25th</td> <!-- Example Invoice Cycle -->
                                        <td><span class="badge bg-primary">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="project-icon me-3">
                                                    <i class="bi bi-briefcase"></i>
                                                </div>
                                                <div>
                                                    <strong>SF 2</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Beta Solutions</td>
                                        <td>Client Bravo</td>
                                        <td><span class="badge bg-danger">Hourly</span></td>
                                        <td>$50.00/hr</td>
                                        <td>15 days</td>
                                        <td>9th to 25th</td> <!-- Example Invoice Cycle -->
                                        <td><span class="badge bg-primary">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="project-icon me-3">
                                                    <i class="bi bi-briefcase"></i>
                                                </div>
                                                <div>
                                                    <strong>SF 3</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Gamma LLC</td>
                                        <td>Client Charlie</td>
                                        <td><span class="badge bg-success">Recurring</span></td>
                                        <td>$2,000.00</td>
                                        <td>Monthly</td>
                                        <td>26th to 10th</td> <!-- Example Invoice Cycle -->
                                        <td><span class="badge bg-primary">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="project-icon me-3">
                                                    <i class="bi bi-briefcase"></i>
                                                </div>
                                                <div>
                                                    <strong>DAL</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Delta Inc</td>
                                        <td>Client Delta</td>
                                        <td><span class="badge bg-success">Recurring</span></td>
                                        <td>$1,800.00</td>
                                        <td>Weekly</td>
                                        <td>9th to 25th</td> <!-- Example Invoice Cycle -->
                                        <td><span class="badge bg-primary">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="project-icon me-3">
                                                    <i class="bi bi-briefcase"></i>
                                                </div>
                                                <div>
                                                    <strong>CRAFT</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>CraftWorks</td>
                                        <td>Client Echo</td>
                                        <td><span class="badge bg-danger">Hourly</span></td>
                                        <td>$60.00/hr</td>
                                        <td>15 days</td>
                                        <td>9th to 25th</td> <!-- Example Invoice Cycle -->
                                        <td><span class="badge bg-primary">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="project-icon me-3">
                                                    <i class="bi bi-briefcase"></i>
                                                </div>
                                                <div>
                                                    <strong>DRD</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>DRD Group</td>
                                        <td>Client Foxtrot</td>
                                        <td><span class="badge bg-success">Recurring</span></td>
                                        <td>$1,200.00</td>
                                        <td>Monthly</td>
                                        <td>26th to 10th</td> <!-- Example Invoice Cycle -->
                                        <td><span class="badge bg-primary">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="project-icon me-3">
                                                    <i class="bi bi-briefcase"></i>
                                                </div>
                                                <div>
                                                    <strong>PLATINUM</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Platinum Partners</td>
                                        <td>Client Golf</td>
                                        <td><span class="badge bg-danger">Hourly</span></td>
                                        <td>$75.00/hr</td>
                                        <td>Weekly</td>
                                        <td>9th to 25th</td> <!-- Example Invoice Cycle -->
                                        <td><span class="badge bg-primary">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="bi bi-pencil"></i>
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

<!-- Add Project Modal -->
<div class="modal fade" id="addProjectModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="addProjectForm">
                    <div class="mb-3">
                        <label for="projectName" class="form-label">Project Name</label>
                        <input type="text" class="form-control" id="projectName" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="fromCompany" class="form-label">From Company</label>
                                <input type="text" class="form-control" id="fromCompany" value="Your Company" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="toClient" class="form-label">To Client</label>
                                <input type="text" class="form-control" id="toClient" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Billing Type</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="billingType" id="recurring"
                                value="recurring" checked>
                            <label class="form-check-label" for="recurring">
                                Recurring
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="billingType" id="hourly" value="hourly">
                            <label class="form-check-label" for="hourly">
                                Hourly
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3" id="recurringRateField">
                                <label for="recurringRate" class="form-label">Recurring Rate ($)</label>
                                <input type="number" class="form-control" id="recurringRate" step="0.01" min="0">
                            </div>
                            <div class="mb-3 d-none" id="hourlyRateField">
                                <label for="hourlyRate" class="form-label">Hourly Rate ($/hr)</label>
                                <input type="number" class="form-control" id="hourlyRate" step="0.01" min="0">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="paymentCycle" class="form-label">Payment Cycle</label>
                                    <select class="form-select" id="paymentCycle" required>
                                        <option value="">Select Cycle</option>
                                        <option value="weekly">Weekly</option>
                                        <option value="15-days">15 days</option>
                                        <option value="monthly">Monthly</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="invoiceCycle" class="form-label">Invoice Cycle</label>
                                    <select class="form-select" id="invoiceCycle" required>
                                        <option value="">Select Invoice Cycle</option>
                                        <option value="15 days">15 days</option>
                                        <option value="9th to 25th">9th to 25th</option>
                                        <option value="26th to 10th">26th to 10th</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="addProjectForm" class="btn btn-primary">Create Project</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Show/hide rate fields based on billing type selection
    document.addEventListener('DOMContentLoaded', function () {
        const recurringRadio = document.getElementById('recurring');
        const hourlyRadio = document.getElementById('hourly');
        const recurringRateField = document.getElementById('recurringRateField');
        const hourlyRateField = document.getElementById('hourlyRateField');

        function toggleRateFields() {
            if (recurringRadio.checked) {
                recurringRateField.classList.remove('d-none');
                hourlyRateField.classList.add('d-none');
            } else {
                recurringRateField.classList.add('d-none');
                hourlyRateField.classList.remove('d-none');
            }
        }

        recurringRadio.addEventListener('change', toggleRateFields);
        hourlyRadio.addEventListener('change', toggleRateFields);

        // Initialize on page load
        toggleRateFields();
    });
</script>

<?php include 'includes/footer.php'; ?>