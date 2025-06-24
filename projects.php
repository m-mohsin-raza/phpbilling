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
                <p class="text-muted">Manage your projects and track progress.</p>
            </div>
        </div>

        <!-- Project Stats -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-primary">24</h3>
                        <p class="text-muted mb-0">Total Projects</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-warning">8</h3>
                        <p class="text-muted mb-0">In Progress</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-success">14</h3>
                        <p class="text-muted mb-0">Completed</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-danger">2</h3>
                        <p class="text-muted mb-0">On Hold</p>
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
                                        <th>Client</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Budget</th>
                                        <th>Progress</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="project-icon me-3">
                                                    <i class="bi bi-globe"></i>
                                                </div>
                                                <div>
                                                    <strong>Website Redesign</strong>
                                                    <br><small class="text-muted">Complete website overhaul</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Mansoor LLC</td>
                                        <td>2024-06-01</td>
                                        <td>2024-07-15</td>
                                        <td class="amount-cell">$25,000.00</td>
                                        <td>
                                            <div class="progress mb-1" style="height: 6px;">
                                                <div class="progress-bar" style="width: 75%"></div>
                                            </div>
                                            <small class="text-muted">75%</small>
                                        </td>
                                        <td><span class="badge badge-pending">In Progress</span></td>
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
                                                <div class="project-icon me-3">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                                <div>
                                                    <strong>Mobile App Development</strong>
                                                    <br><small class="text-muted">iOS and Android app</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Tech Solutions Inc</td>
                                        <td>2024-05-15</td>
                                        <td>2024-08-30</td>
                                        <td class="amount-cell">$45,000.00</td>
                                        <td>
                                            <div class="progress mb-1" style="height: 6px;">
                                                <div class="progress-bar bg-warning" style="width: 45%"></div>
                                            </div>
                                            <small class="text-muted">45%</small>
                                        </td>
                                        <td><span class="badge badge-pending">In Progress</span></td>
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
                                                <div class="project-icon me-3">
                                                    <i class="bi bi-database"></i>
                                                </div>
                                                <div>
                                                    <strong>Database Migration</strong>
                                                    <br><small class="text-muted">Legacy system upgrade</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Digital Marketing Pro</td>
                                        <td>2024-04-01</td>
                                        <td>2024-06-30</td>
                                        <td class="amount-cell">$15,000.00</td>
                                        <td>
                                            <div class="progress mb-1" style="height: 6px;">
                                                <div class="progress-bar bg-success" style="width: 100%"></div>
                                            </div>
                                            <small class="text-muted">100%</small>
                                        </td>
                                        <td><span class="badge badge-completed">Completed</span></td>
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
                    <div class="mb-3">
                        <label for="projectDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="projectDescription" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="projectClient" class="form-label">Client</label>
                                <select class="form-select" id="projectClient" required>
                                    <option value="">Select Client</option>
                                    <option value="client1">Mansoor LLC</option>
                                    <option value="client2">Tech Solutions Inc</option>
                                    <option value="client3">Digital Marketing Pro</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="projectBudget" class="form-label">Budget</label>
                                <input type="number" class="form-control" id="projectBudget" step="0.01" min="0">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="projectStartDate" class="form-label">Start Date</label>
                                <input type="date" class="form-control" id="projectStartDate" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="projectDueDate" class="form-label">Due Date</label>
                                <input type="date" class="form-control" id="projectDueDate" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="projectStatus" class="form-label">Status</label>
                        <select class="form-select" id="projectStatus">
                            <option value="pending">Pending</option>
                            <option value="in-progress">In Progress</option>
                            <option value="completed">Completed</option>
                            <option value="on-hold">On Hold</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
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

<?php include 'includes/footer.php'; ?>
