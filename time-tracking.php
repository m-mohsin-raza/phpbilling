<?php
$page_title = "Time Tracking";
include 'includes/header.php';
?>

<?php include 'includes/admin_sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12">
                <h2>Time Tracking</h2>
                <p class="text-muted">Track your time and manage tasks efficiently.</p>
            </div>
        </div>

        <!-- Timer Card -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card timer-card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-white">Active Timer</h5>
                        <div class="timer-display" id="timerDisplay">00:00:00</div>
                        <div class="timer-controls">
                            <button class="btn btn-success me-2" id="startTimer">
                                <i class="bi bi-play-fill"></i> Start
                            </button>
                            <button class="btn btn-warning me-2" id="pauseTimer" disabled>
                                <i class="bi bi-pause-fill"></i> Pause
                            </button>
                            <button class="btn btn-danger" id="stopTimer" disabled>
                                <i class="bi bi-stop-fill"></i> Stop
                            </button>
                        </div>
                        <div class="mt-3">
                            <select class="form-select mb-2" id="timerProject">
                                <option value="">Select Project</option>
                                <option value="project1">Website Redesign</option>
                                <option value="project2">Mobile App Development</option>
                                <option value="project3">Database Migration</option>
                            </select>
                            <input type="text" class="form-control" id="timerDescription" placeholder="Task description">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Today's Summary</h5>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-4">
                                <h4 class="text-primary">7.5h</h4>
                                <small class="text-muted">Total Time</small>
                            </div>
                            <div class="col-4">
                                <h4 class="text-success">6.2h</h4>
                                <small class="text-muted">Billable</small>
                            </div>
                            <div class="col-4">
                                <h4 class="text-warning">1.3h</h4>
                                <small class="text-muted">Non-billable</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Time Entries -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Time Entries</h5>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTimeModal">
                            <i class="bi bi-plus"></i> Add Time Entry
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover data-table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Project</th>
                                        <th>Task</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Duration</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2024-06-24</td>
                                        <td>Website Redesign</td>
                                        <td>Frontend Development</td>
                                        <td>09:00 AM</td>
                                        <td>12:30 PM</td>
                                        <td class="time-entry">3.5h</td>
                                        <td><span class="badge badge-billable">Billable</span></td>
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
                                        <td>2024-06-24</td>
                                        <td>Mobile App</td>
                                        <td>API Integration</td>
                                        <td>01:30 PM</td>
                                        <td>04:00 PM</td>
                                        <td class="time-entry">2.5h</td>
                                        <td><span class="badge badge-billable">Billable</span></td>
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
                                        <td>2024-06-24</td>
                                        <td>Internal</td>
                                        <td>Team Meeting</td>
                                        <td>04:30 PM</td>
                                        <td>05:45 PM</td>
                                        <td class="time-entry">1.25h</td>
                                        <td><span class="badge badge-non-billable">Non-billable</span></td>
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

<!-- Add Time Entry Modal -->
<div class="modal fade" id="addTimeModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Time Entry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="addTimeForm">
                    <div class="mb-3">
                        <label for="taskDate" class="form-label">Date</label>
                        <input type="date" class="form-control" id="taskDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="taskProject" class="form-label">Project</label>
                        <select class="form-select" id="taskProject" required>
                            <option value="">Select Project</option>
                            <option value="project1">Website Redesign</option>
                            <option value="project2">Mobile App Development</option>
                            <option value="project3">Database Migration</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="taskDescription" class="form-label">Task Description</label>
                        <input type="text" class="form-control" id="taskDescription" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="taskStartTime" class="form-label">Start Time</label>
                            <input type="time" class="form-control" id="taskStartTime">
                        </div>
                        <div class="col-md-6">
                            <label for="taskEndTime" class="form-label">End Time</label>
                            <input type="time" class="form-control" id="taskEndTime">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="taskHours" class="form-label">Hours</label>
                            <input type="number" class="form-control" id="taskHours" step="0.25" min="0">
                        </div>
                        <div class="col-md-6">
                            <label for="taskRate" class="form-label">Rate ($)</label>
                            <input type="number" class="form-control" id="taskRate" step="0.01" min="0">
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="taskAmount" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="taskAmount" readonly>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="taskBillable" checked>
                            <label class="form-check-label" for="taskBillable">
                                Billable
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="addTimeForm" class="btn btn-primary">Save Time Entry</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
