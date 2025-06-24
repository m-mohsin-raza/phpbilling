<?php
$page_title = "Tasks";
include 'includes/header.php';
?>

<?php include 'includes/admin_sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12">
                <h2>Tasks</h2>
                <p class="text-muted">Manage and track your project tasks.</p>
            </div>
        </div>

        <!-- Task Stats -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-primary">24</h3>
                        <p class="text-muted mb-0">Total Tasks</p>
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
                        <p class="text-muted mb-0">Overdue</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tasks Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>All Tasks</h5>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">
                            <i class="bi bi-plus"></i> Add Task
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover data-table">
                                <thead>
                                    <tr>
                                        <th>Task</th>
                                        <th>Project</th>
                                        <th>Assigned To</th>
                                        <th>Priority</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Progress</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <strong>Design Homepage Layout</strong>
                                            <br><small class="text-muted">Create wireframes and mockups for the new homepage</small>
                                        </td>
                                        <td>Website Redesign</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="client-avatar me-2">JD</div>
                                                John Doe
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger">High</span></td>
                                        <td>2024-06-30</td>
                                        <td><span class="badge badge-pending">In Progress</span></td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar" style="width: 75%"></div>
                                            </div>
                                            <small class="text-muted">75%</small>
                                        </td>
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
                                            <strong>API Integration</strong>
                                            <br><small class="text-muted">Integrate payment gateway API</small>
                                        </td>
                                        <td>E-commerce Platform</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="client-avatar me-2">SM</div>
                                                Sarah Miller
                                            </div>
                                        </td>
                                        <td><span class="badge bg-warning">Medium</span></td>
                                        <td>2024-07-05</td>
                                        <td><span class="badge badge-completed">Completed</span></td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-success" style="width: 100%"></div>
                                            </div>
                                            <small class="text-muted">100%</small>
                                        </td>
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
                                            <strong>Database Optimization</strong>
                                            <br><small class="text-muted">Optimize database queries for better performance</small>
                                        </td>
                                        <td>Performance Upgrade</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="client-avatar me-2">MJ</div>
                                                Mike Johnson
                                            </div>
                                        </td>
                                        <td><span class="badge bg-info">Low</span></td>
                                        <td>2024-06-25</td>
                                        <td><span class="badge badge-overdue">Overdue</span></td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-warning" style="width: 30%"></div>
                                            </div>
                                            <small class="text-muted">30%</small>
                                        </td>
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

<!-- Add Task Modal -->
<div class="modal fade" id="addTaskModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="addTaskForm">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="taskTitle" class="form-label">Task Title</label>
                                <input type="text" class="form-control" id="taskTitle" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="taskPriority" class="form-label">Priority</label>
                                <select class="form-select" id="taskPriority" required>
                                    <option value="low">Low</option>
                                    <option value="medium" selected>Medium</option>
                                    <option value="high">High</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="taskDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="taskDescription" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="taskProject" class="form-label">Project</label>
                                <select class="form-select" id="taskProject" required>
                                    <option value="">Select Project</option>
                                    <option value="project1">Website Redesign</option>
                                    <option value="project2">E-commerce Platform</option>
                                    <option value="project3">Performance Upgrade</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="taskAssignee" class="form-label">Assign To</label>
                                <select class="form-select" id="taskAssignee" required>
                                    <option value="">Select Team Member</option>
                                    <option value="john">John Doe</option>
                                    <option value="sarah">Sarah Miller</option>
                                    <option value="mike">Mike Johnson</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="taskStartDate" class="form-label">Start Date</label>
                                <input type="date" class="form-control" id="taskStartDate">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="taskDueDate" class="form-label">Due Date</label>
                                <input type="date" class="form-control" id="taskDueDate" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="taskEstimatedHours" class="form-label">Estimated Hours</label>
                                <input type="number" class="form-control" id="taskEstimatedHours" step="0.5" min="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="taskStatus" class="form-label">Status</label>
                                <select class="form-select" id="taskStatus">
                                    <option value="pending">Pending</option>
                                    <option value="in-progress">In Progress</option>
                                    <option value="completed">Completed</option>
                                    <option value="on-hold">On Hold</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="addTaskForm" class="btn btn-primary">Create Task</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
