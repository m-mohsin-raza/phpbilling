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
        <!-- Projects Tabs -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <ul class="nav nav-tabs card-header-tabs" id="projectTabs" role="tablist">
                            <li class="nav-item">
                                <a class="tab-link nav-link" id="sf1-tab" data-bs-toggle="tab" href="#sf1" role="tab">SF 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="tab-link nav-link" id="sf2-tab" data-bs-toggle="tab" href="#sf2" role="tab">SF 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="tab-link nav-link" id="sf3-tab" data-bs-toggle="tab" href="#sf3" role="tab">SF 3</a>
                            </li>
                            <li class="nav-item">
                                <a class="tab-link nav-link" id="dal-tab" data-bs-toggle="tab" href="#dal" role="tab">DAL</a>
                            </li>
                            <li class="nav-item">
                                <a class="tab-link nav-link" id="craft-tab" data-bs-toggle="tab" href="#craft"
                                    role="tab">CRAFT</a>
                            </li>
                            <li class="nav-item">
                                <a class="tab-link nav-link" id="drd-tab" data-bs-toggle="tab" href="#drd" role="tab">DRD</a>
                            </li>
                            <li class="nav-item">
                                <a class="tab-link nav-link" id="platinum-tab" data-bs-toggle="tab" href="#platinum"
                                    role="tab">PLATINUM</a>
                            </li>
                        </ul>
                        <div>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addTaskModal">
                                <i class="bi bi-plus"></i> Add Task
                            </button>
                            <button class="btn btn-info ms-2" data-bs-toggle="modal" data-bs-target="#assignUserModal">
                                <i class="bi bi-person-plus"></i> Assign User
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="tab-content" id="projectTabsContent">

                            <!-- SF 1 Project Tab -->
                            <div class="tab-pane fade" id="sf1" role="tabpanel">
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h4>SF 1 Project Details</h4>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p><strong>From Company:</strong> Tech Solutions Inc.</p>
                                                        <p><strong>To Client:</strong> Client A</p>
                                                        <p><strong>Start Date:</strong> 2024-05-15</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p><strong>Type:</strong> Recurring</p>
                                                        <p><strong>Rate:</strong> $5,000.00</p>
                                                        <p><strong>Due Date:</strong> 2024-08-30</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p><strong>Payment Cycle:</strong> 15 days (9th-25th)</p>
                                                        <p><strong>Assigned Users:</strong> John, Sarah</p>
                                                        <p><strong>Status:</strong> <span class="badge bg-primary">Active</span></p>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <p><strong>Description:</strong> E-commerce platform development with payment gateway integration and inventory management system.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tasks Table -->
                                <div class="row">
                                    <div class="col-12">
                                        <h4>SF 1 Tasks</h4>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover data-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Task</th>
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
                                                                <td><strong>API Integration</strong><br><small class="text-muted">Integrate payment system</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">JD</div>John Doe</div></td>
                                                                <td><span class="badge bg-danger">High</span></td>
                                                                <td>2024-06-30</td>
                                                                <td><span class="badge badge-pending">In Progress</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 75%"></div></div><small class="text-muted">75%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>UI Redesign</strong><br><small class="text-muted">Update dashboard interface</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">SM</div>Sarah Miller</div></td>
                                                                <td><span class="badge bg-warning">Medium</span></td>
                                                                <td>2024-07-05</td>
                                                                <td><span class="badge badge-pending">Pending</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 10%"></div></div><small class="text-muted">10%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Database Migration</strong><br><small class="text-muted">Move to new DB server</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">MJ</div>Mike Johnson</div></td>
                                                                <td><span class="badge bg-success">Low</span></td>
                                                                <td>2024-06-28</td>
                                                                <td><span class="badge badge-completed">Completed</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar bg-success" style="width: 100%"></div></div><small class="text-muted">100%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Security Audit</strong><br><small class="text-muted">Conduct penetration testing</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">JD</div>John Doe</div></td>
                                                                <td><span class="badge bg-danger">High</span></td>
                                                                <td>2024-07-15</td>
                                                                <td><span class="badge badge-onhold">On Hold</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 30%"></div></div><small class="text-muted">30%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
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

                            <!-- SF 2 Project Tab -->
                            <div class="tab-pane fade" id="sf2" role="tabpanel">
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h4>SF 2 Project Details</h4>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p><strong>From Company:</strong> Tech Solutions Inc.</p>
                                                        <p><strong>To Client:</strong> Client B</p>
                                                        <p><strong>Start Date:</strong> 2024-06-01</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p><strong>Type:</strong> Hourly</p>
                                                        <p><strong>Rate:</strong> $85/hour</p>
                                                        <p><strong>Due Date:</strong> 2024-09-15</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p><strong>Payment Cycle:</strong> 15 days (26th-10th)</p>
                                                        <p><strong>Assigned Users:</strong> Sarah, Mike</p>
                                                        <p><strong>Status:</strong> <span class="badge bg-primary">Active</span></p>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <p><strong>Description:</strong> Mobile application development with cross-platform support and backend API integration.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tasks Table -->
                                <div class="row">
                                    <div class="col-12">
                                        <h4>SF 2 Tasks</h4>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover data-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Task</th>
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
                                                                <td><strong>Mobile App Development</strong><br><small class="text-muted">Build iOS version</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">SM</div>Sarah Miller</div></td>
                                                                <td><span class="badge bg-danger">High</span></td>
                                                                <td>2024-07-10</td>
                                                                <td><span class="badge badge-pending">In Progress</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 45%"></div></div><small class="text-muted">45%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>API Documentation</strong><br><small class="text-muted">Write developer docs</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">JD</div>John Doe</div></td>
                                                                <td><span class="badge bg-warning">Medium</span></td>
                                                                <td>2024-07-03</td>
                                                                <td><span class="badge badge-pending">Pending</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 5%"></div></div><small class="text-muted">5%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>User Testing</strong><br><small class="text-muted">Conduct beta testing</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">MJ</div>Mike Johnson</div></td>
                                                                <td><span class="badge bg-success">Low</span></td>
                                                                <td>2024-06-25</td>
                                                                <td><span class="badge badge-completed">Completed</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar bg-success" style="width: 100%"></div></div><small class="text-muted">100%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Performance Optimization</strong><br><small class="text-muted">Improve load times</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">SM</div>Sarah Miller</div></td>
                                                                <td><span class="badge bg-warning">Medium</span></td>
                                                                <td>2024-07-18</td>
                                                                <td><span class="badge badge-pending">In Progress</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 60%"></div></div><small class="text-muted">60%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
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

                            <!-- SF 3 Project Tab -->
                            <div class="tab-pane fade" id="sf3" role="tabpanel">
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h4>SF 3 Project Details</h4>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p><strong>From Company:</strong> Gamma LLC</p>
                                                        <p><strong>To Client:</strong> Client C</p>
                                                        <p><strong>Start Date:</strong> 2024-04-10</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p><strong>Type:</strong> Fixed Price</p>
                                                        <p><strong>Rate:</strong> $12,000.00</p>
                                                        <p><strong>Due Date:</strong> 2024-08-15</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p><strong>Payment Cycle:</strong> Monthly</p>
                                                        <p><strong>Assigned Users:</strong> John, Mike</p>
                                                        <p><strong>Status:</strong> <span class="badge bg-warning">Behind Schedule</span></p>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <p><strong>Description:</strong> Custom CRM system development with advanced reporting and analytics features.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tasks Table -->
                                <div class="row">
                                    <div class="col-12">
                                        <h4>SF 3 Tasks</h4>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover data-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Task</th>
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
                                                                <td><strong>E-commerce Integration</strong><br><small class="text-muted">Add shopping cart</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">MJ</div>Mike Johnson</div></td>
                                                                <td><span class="badge bg-danger">High</span></td>
                                                                <td>2024-07-12</td>
                                                                <td><span class="badge badge-pending">In Progress</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 35%"></div></div><small class="text-muted">35%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Payment Gateway Setup</strong><br><small class="text-muted">Configure Stripe API</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">JD</div>John Doe</div></td>
                                                                <td><span class="badge bg-danger">High</span></td>
                                                                <td>2024-07-08</td>
                                                                <td><span class="badge badge-pending">In Progress</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 80%"></div></div><small class="text-muted">80%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Inventory Management</strong><br><small class="text-muted">Build stock tracking</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">SM</div>Sarah Miller</div></td>
                                                                <td><span class="badge bg-warning">Medium</span></td>
                                                                <td>2024-07-20</td>
                                                                <td><span class="badge badge-pending">Pending</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 0%"></div></div><small class="text-muted">0%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Customer Portal</strong><br><small class="text-muted">Design account dashboard</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">SM</div>Sarah Miller</div></td>
                                                                <td><span class="badge bg-success">Low</span></td>
                                                                <td>2024-06-29</td>
                                                                <td><span class="badge badge-completed">Completed</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar bg-success" style="width: 100%"></div></div><small class="text-muted">100%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
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

                            <!-- DAL Project Tab -->
                            <div class="tab-pane fade" id="dal" role="tabpanel">
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h4>DAL Project Details</h4>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p><strong>From Company:</strong> Data Analytics Ltd.</p>
                                                        <p><strong>To Client:</strong> Client D</p>
                                                        <p><strong>Start Date:</strong> 2024-03-01</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p><strong>Type:</strong> Retainer</p>
                                                        <p><strong>Rate:</strong> $7,500.00</p>
                                                        <p><strong>Due Date:</strong> Ongoing</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p><strong>Payment Cycle:</strong> Monthly</p>
                                                        <p><strong>Assigned Users:</strong> John, Sarah, Mike</p>
                                                        <p><strong>Status:</strong> <span class="badge bg-primary">Active</span></p>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <p><strong>Description:</strong> Data analytics and visualization platform with real-time reporting and predictive modeling capabilities.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tasks Table -->
                                <div class="row">
                                    <div class="col-12">
                                        <h4>DAL Tasks</h4>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover data-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Task</th>
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
                                                                <td><strong>Data Migration</strong><br><small class="text-muted">Transfer legacy data</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">JD</div>John Doe</div></td>
                                                                <td><span class="badge bg-danger">High</span></td>
                                                                <td>2024-07-05</td>
                                                                <td><span class="badge badge-pending">In Progress</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 65%"></div></div><small class="text-muted">65%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Analytics Dashboard</strong><br><small class="text-muted">Build reporting tools</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">MJ</div>Mike Johnson</div></td>
                                                                <td><span class="badge bg-warning">Medium</span></td>
                                                                <td>2024-07-15</td>
                                                                <td><span class="badge badge-pending">Pending</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 15%"></div></div><small class="text-muted">15%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Database Optimization</strong><br><small class="text-muted">Improve query performance</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">JD</div>John Doe</div></td>
                                                                <td><span class="badge bg-success">Low</span></td>
                                                                <td>2024-06-27</td>
                                                                <td><span class="badge badge-completed">Completed</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar bg-success" style="width: 100%"></div></div><small class="text-muted">100%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Backup System</strong><br><small class="text-muted">Implement automated backups</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">MJ</div>Mike Johnson</div></td>
                                                                <td><span class="badge bg-warning">Medium</span></td>
                                                                <td>2024-07-22</td>
                                                                <td><span class="badge badge-pending">In Progress</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 40%"></div></div><small class="text-muted">40%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
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

                            <!-- CRAFT Project Tab -->
                            <div class="tab-pane fade" id="craft" role="tabpanel">
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h4>CRAFT Project Details</h4>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p><strong>From Company:</strong> Creative Agency</p>
                                                        <p><strong>To Client:</strong> Client E</p>
                                                        <p><strong>Start Date:</strong> 2024-05-20</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p><strong>Type:</strong> Fixed Price</p>
                                                        <p><strong>Rate:</strong> $8,000.00</p>
                                                        <p><strong>Due Date:</strong> 2024-08-10</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p><strong>Payment Cycle:</strong> 15 days (9th-25th)</p>
                                                        <p><strong>Assigned Users:</strong> Sarah, Mike</p>
                                                        <p><strong>Status:</strong> <span class="badge bg-primary">Active</span></p>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <p><strong>Description:</strong> Creative website redesign with custom illustrations and interactive elements.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tasks Table -->
                                <div class="row">
                                    <div class="col-12">
                                        <h4>CRAFT Tasks</h4>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover data-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Task</th>
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
                                                                <td><strong>Frontend Revamp</strong><br><small class="text-muted">Redesign main pages</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">SM</div>Sarah Miller</div></td>
                                                                <td><span class="badge bg-danger">High</span></td>
                                                                <td>2024-07-07</td>
                                                                <td><span class="badge badge-pending">In Progress</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 55%"></div></div><small class="text-muted">55%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Content Management</strong><br><small class="text-muted">Implement CMS</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">JD</div>John Doe</div></td>
                                                                <td><span class="badge bg-warning">Medium</span></td>
                                                                <td>2024-07-14</td>
                                                                <td><span class="badge badge-pending">Pending</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 20%"></div></div><small class="text-muted">20%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>SEO Optimization</strong><br><small class="text-muted">Improve search rankings</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">SM</div>Sarah Miller</div></td>
                                                                <td><span class="badge bg-success">Low</span></td>
                                                                <td>2024-06-30</td>
                                                                <td><span class="badge badge-completed">Completed</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar bg-success" style="width: 100%"></div></div><small class="text-muted">100%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Multilingual Support</strong><br><small class="text-muted">Add language switcher</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">MJ</div>Mike Johnson</div></td>
                                                                <td><span class="badge bg-warning">Medium</span></td>
                                                                <td>2024-07-25</td>
                                                                <td><span class="badge badge-pending">In Progress</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 25%"></div></div><small class="text-muted">25%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
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

                            <!-- DRD Project Tab -->
                            <div class="tab-pane fade" id="drd" role="tabpanel">
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h4>DRD Project Details</h4>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p><strong>From Company:</strong> Design Research Dept.</p>
                                                        <p><strong>To Client:</strong> Internal</p>
                                                        <p><strong>Start Date:</strong> 2024-02-15</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p><strong>Type:</strong> Research & Development</p>
                                                        <p><strong>Rate:</strong> $15,000.00</p>
                                                        <p><strong>Due Date:</strong> 2024-09-30</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p><strong>Payment Cycle:</strong> Monthly</p>
                                                        <p><strong>Assigned Users:</strong> John, Sarah</p>
                                                        <p><strong>Status:</strong> <span class="badge bg-info">Ongoing</span></p>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <p><strong>Description:</strong> User experience research and design system development for future projects.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tasks Table -->
                                <div class="row">
                                    <div class="col-12">
                                        <h4>DRD Tasks</h4>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover data-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Task</th>
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
                                                                <td><strong>Research Phase</strong><br><small class="text-muted">Market analysis</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">MJ</div>Mike Johnson</div></td>
                                                                <td><span class="badge bg-danger">High</span></td>
                                                                <td>2024-07-09</td>
                                                                <td><span class="badge badge-pending">In Progress</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 70%"></div></div><small class="text-muted">70%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Prototype Design</strong><br><small class="text-muted">Create wireframes</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">SM</div>Sarah Miller</div></td>
                                                                <td><span class="badge bg-warning">Medium</span></td>
                                                                <td>2024-07-16</td>
                                                                <td><span class="badge badge-pending">Pending</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 5%"></div></div><small class="text-muted">5%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Requirements Gathering</strong><br><small class="text-muted">Client interviews</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">JD</div>John Doe</div></td>
                                                                <td><span class="badge bg-success">Low</span></td>
                                                                <td>2024-06-26</td>
                                                                <td><span class="badge badge-completed">Completed</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar bg-success" style="width: 100%"></div></div><small class="text-muted">100%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Technical Documentation</strong><br><small class="text-muted">Write specs</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">JD</div>John Doe</div></td>
                                                                <td><span class="badge bg-warning">Medium</span></td>
                                                                <td>2024-07-19</td>
                                                                <td><span class="badge badge-pending">In Progress</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 50%"></div></div><small class="text-muted">50%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
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

                            <!-- PLATINUM Project Tab -->
                            <div class="tab-pane fade" id="platinum" role="tabpanel">
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h4>PLATINUM Project Details</h4>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p><strong>From Company:</strong> Premium Services</p>
                                                        <p><strong>To Client:</strong> VIP Client</p>
                                                        <p><strong>Start Date:</strong> 2024-01-10</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p><strong>Type:</strong> Enterprise</p>
                                                        <p><strong>Rate:</strong> $50,000.00</p>
                                                        <p><strong>Due Date:</strong> 2024-12-31</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p><strong>Payment Cycle:</strong> Monthly</p>
                                                        <p><strong>Assigned Users:</strong> All Team</p>
                                                        <p><strong>Status:</strong> <span class="badge bg-primary">Active</span></p>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <p><strong>Description:</strong> Comprehensive enterprise solution with custom development, premium support, and dedicated resources.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tasks Table -->
                                <div class="row">
                                    <div class="col-12">
                                        <h4>PLATINUM Tasks</h4>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover data-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Task</th>
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
                                                                <td><strong>Premium Features</strong><br><small class="text-muted">Implement VIP options</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">SM</div>Sarah Miller</div></td>
                                                                <td><span class="badge bg-danger">High</span></td>
                                                                <td>2024-07-11</td>
                                                                <td><span class="badge badge-pending">In Progress</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 65%"></div></div><small class="text-muted">65%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Membership System</strong><br><small class="text-muted">Create tiers</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">JD</div>John Doe</div></td>
                                                                <td><span class="badge bg-warning">Medium</span></td>
                                                                <td>2024-07-17</td>
                                                                <td><span class="badge badge-pending">Pending</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 10%"></div></div><small class="text-muted">10%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Payment Processing</strong><br><small class="text-muted">Setup subscriptions</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">MJ</div>Mike Johnson</div></td>
                                                                <td><span class="badge bg-success">Low</span></td>
                                                                <td>2024-06-28</td>
                                                                <td><span class="badge badge-completed">Completed</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar bg-success" style="width: 100%"></div></div><small class="text-muted">100%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Customer Support</strong><br><small class="text-muted">Train support team</small></td>
                                                                <td><div class="d-flex align-items-center"><div class="client-avatar me-2">SM</div>Sarah Miller</div></td>
                                                                <td><span class="badge bg-warning">Medium</span></td>
                                                                <td>2024-07-23</td>
                                                                <td><span class="badge badge-pending">In Progress</span></td>
                                                                <td><div class="progress" style="height: 6px;"><div class="progress-bar" style="width: 30%"></div></div><small class="text-muted">30%</small></td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></button>
                                                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
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
                                    <option value="sf1">SF 1</option>
                                    <option value="sf2">SF 2</option>
                                    <option value="sf3">SF 3</option>
                                    <option value="dal">DAL</option>
                                    <option value="craft">CRAFT</option>
                                    <option value="drd">DRD</option>
                                    <option value="platinum">PLATINUM</option>
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

<!-- Assign User Modal (copied and adapted from users.php) -->
<div class="modal fade" id="assignUserModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Assign User to Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="assignUserForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="assignProject" class="form-label">Project</label>
                                <select class="form-select" id="assignProject" required>
                                    <option value="">Select Project</option>
                                    <option value="sf1">SF 1</option>
                                    <option value="sf2">SF 2</option>
                                    <option value="sf3">SF 3</option>
                                    <option value="dal">DAL</option>
                                    <option value="craft">CRAFT</option>
                                    <option value="drd">DRD</option>
                                    <option value="platinum">PLATINUM</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="assignUser" class="form-label">User</label>
                                <select class="form-select" id="assignUser" required>
                                    <option value="">Select User</option>
                                    <option value="john">John Doe</option>
                                    <option value="sarah">Sarah Miller</option>
                                    <option value="mike">Mike Johnson</option>
                                    <!-- Add more users as needed -->
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="assignRole" class="form-label">Role</label>
                        <select class="form-select" id="assignRole" required>
                            <option value="">Select Role</option>
                            <option value="admin">Administrator</option>
                            <option value="manager">Manager</option>
                            <option value="user">Standard User</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="assignNotes" class="form-label">Notes</label>
                        <textarea class="form-control" id="assignNotes" rows="2"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="assignUserForm" class="btn btn-primary">Assign User</button>
            </div>
        </div>
    </div>
</div>
<style>
.tab-link {
    color: #495057;
    background: #f8f9fa;
    border: 1px solid transparent;
    border-bottom: none;
    padding: 10px 20px;
    margin-right: 2px;
    font-weight: 500;
    transition: background 0.2s, color 0.2s;
    border-radius: 0.5rem 0.5rem 0 0;
}
.tab-link.active,
.tab-link:focus,
.tab-link:hover {
    color: #0d6efd;
    background: #fff;
    border-color: #dee2e6 #dee2e6 #fff;
    text-decoration: none;
    outline: none;
    font-weight: 600;
}
</style>
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
<script>
    // Show/hide rate fields based on project type selection
    // Show/hide rate fields based on project type selection
    document.querySelectorAll('input[name="projectType"]').forEach(radio => {
        radio.addEventListener('change', function () {
            if (this.value === 'recurring') {
                document.getElementById('recurringRateField').classList.remove('d-none');
                document.getElementById('hourlyRateField').classList.add('d-none');
            } else {
                document.getElementById('recurringRateField').classList.add('d-none');
                document.getElementById('hourlyRateField').classList.remove('d-none');
            }
        });
    });
</script>

<?php include 'includes/footer.php'; ?>