<?php
$page_title = "Team Management";
include 'includes/header.php';
?>

<?php include 'includes/admin_sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h4 class="mb-0">Team Management</h4>
                <p class="text-muted mb-0">Manage team members and their roles</p>
            </div>
            <div>
                <button class="btn btn-sm btn-outline-secondary me-2">
                    <i class="bi bi-funnel me-1"></i> Filter
                </button>
                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#teamMemberModal">
                    <i class="bi bi-plus-circle me-1"></i> Add Member
                </button>
            </div>
        </div>
        
        <!-- Team Stats Cards -->
        <div class="row mb-4">
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-uppercase text-muted mb-2">Total Members</h6>
                                <h3 class="mb-0">12</h3>
                            </div>
                            <div class="text-primary">
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
                                <h6 class="text-uppercase text-muted mb-2">Active Projects</h6>
                                <h3 class="mb-0 text-success">18</h3>
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
                                <h6 class="text-uppercase text-muted mb-2">Hours This Week</h6>
                                <h3 class="mb-0 text-info">342</h3>
                            </div>
                            <div class="text-info">
                                <i class="bi bi-clock fs-2"></i>
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
                                <h6 class="text-uppercase text-muted mb-2">Productivity</h6>
                                <h3 class="mb-0 text-warning">94%</h3>
                            </div>
                            <div class="text-warning">
                                <i class="bi bi-graph-up fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Team Cards -->
        <div class="row mb-4">
            <div class="col-12">
                <h5 class="mb-3">Team Overview</h5>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card team-card h-100">
                    <div class="card-body">
                        <img src="/placeholder.svg?height=80&width=80" alt="John Smith" class="team-card-avatar">
                        <div class="team-card-name">John Smith</div>
                        <div class="team-card-role">Senior Developer</div>
                        <span class="badge badge-active">Active</span>
                        <div class="team-stats">
                            <div class="team-stat">
                                <div class="team-stat-value">42</div>
                                <div class="team-stat-label">Hours</div>
                            </div>
                            <div class="team-stat">
                                <div class="team-stat-value">5</div>
                                <div class="team-stat-label">Projects</div>
                            </div>
                            <div class="team-stat">
                                <div class="team-stat-value">98%</div>
                                <div class="team-stat-label">Efficiency</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card team-card h-100">
                    <div class="card-body">
                        <img src="/placeholder.svg?height=80&width=80" alt="Sarah Johnson" class="team-card-avatar">
                        <div class="team-card-name">Sarah Johnson</div>
                        <div class="team-card-role">UI/UX Designer</div>
                        <span class="badge badge-active">Active</span>
                        <div class="team-stats">
                            <div class="team-stat">
                                <div class="team-stat-value">38</div>
                                <div class="team-stat-label">Hours</div>
                            </div>
                            <div class="team-stat">
                                <div class="team-stat-value">3</div>
                                <div class="team-stat-label">Projects</div>
                            </div>
                            <div class="team-stat">
                                <div class="team-stat-value">95%</div>
                                <div class="team-stat-label">Efficiency</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card team-card h-100">
                    <div class="card-body">
                        <img src="/placeholder.svg?height=80&width=80" alt="Mike Chen" class="team-card-avatar">
                        <div class="team-card-name">Mike Chen</div>
                        <div class="team-card-role">Project Manager</div>
                        <span class="badge badge-active">Active</span>
                        <div class="team-stats">
                            <div class="team-stat">
                                <div class="team-stat-value">40</div>
                                <div class="team-stat-label">Hours</div>
                            </div>
                            <div class="team-stat">
                                <div class="team-stat-value">8</div>
                                <div class="team-stat-label">Projects</div>
                            </div>
                            <div class="team-stat">
                                <div class="team-stat-value">92%</div>
                                <div class="team-stat-label">Efficiency</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card team-card h-100">
                    <div class="card-body">
                        <img src="/placeholder.svg?height=80&width=80" alt="Emily Davis" class="team-card-avatar">
                        <div class="team-card-name">Emily Davis</div>
                        <div class="team-card-role">Frontend Developer</div>
                        <span class="badge badge-active">Active</span>
                        <div class="team-stats">
                            <div class="team-stat">
                                <div class="team-stat-value">36</div>
                                <div class="team-stat-label">Hours</div>
                            </div>
                            <div class="team-stat">
                                <div class="team-stat-value">4</div>
                                <div class="team-stat-label">Projects</div>
                            </div>
                            <div class="team-stat">
                                <div class="team-stat-value">96%</div>
                                <div class="team-stat-label">Efficiency</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Team Members Table -->
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">All Team Members</h5>
                <div class="d-flex align-items-center">
                    <span class="text-muted me-3">Total: 12 members</span>
                    <button class="btn btn-sm btn-outline-secondary">
                        <i class="bi bi-download me-1"></i> Export
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover data-table">
                        <thead>
                            <tr>
                                <th>Member</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Join Date</th>
                                <th>Hours/Week</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="/placeholder.svg?height=50&width=50" alt="John Smith" class="team-member-avatar me-3">
                                        <div>
                                            <strong>John Smith</strong>
                                            <br><small class="text-muted">Senior Developer</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-developer">Developer</span></td>
                                <td>john.smith@bixitech.com</td>
                                <td>+1 (555) 123-4567</td>
                                <td>2022-01-15</td>
                                <td>42 hrs</td>
                                <td>$85/hr</td>
                                <td><span class="badge badge-active">Active</span></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-outline-info" title="Projects"><i class="bi bi-folder"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="/placeholder.svg?height=50&width=50" alt="Sarah Johnson" class="team-member-avatar me-3">
                                        <div>
                                            <strong>Sarah Johnson</strong>
                                            <br><small class="text-muted">UI/UX Designer</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-designer">Designer</span></td>
                                <td>sarah.johnson@bixitech.com</td>
                                <td>+1 (555) 234-5678</td>
                                <td>2022-03-20</td>
                                <td>38 hrs</td>
                                <td>$75/hr</td>
                                <td><span class="badge badge-active">Active</span></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-outline-info" title="Projects"><i class="bi bi-folder"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="/placeholder.svg?height=50&width=50" alt="Mike Chen" class="team-member-avatar me-3">
                                        <div>
                                            <strong>Mike Chen</strong>
                                            <br><small class="text-muted">Project Manager</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-manager">Manager</span></td>
                                <td>mike.chen@bixitech.com</td>
                                <td>+1 (555) 345-6789</td>
                                <td>2021-11-10</td>
                                <td>40 hrs</td>
                                <td>$95/hr</td>
                                <td><span class="badge badge-active">Active</span></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-outline-info" title="Projects"><i class="bi bi-folder"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="/placeholder.svg?height=50&width=50" alt="Emily Davis" class="team-member-avatar me-3">
                                        <div>
                                            <strong>Emily Davis</strong>
                                            <br><small class="text-muted">Frontend Developer</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-developer">Developer</span></td>
                                <td>emily.davis@bixitech.com</td>
                                <td>+1 (555) 456-7890</td>
                                <td>2022-06-01</td>
                                <td>36 hrs</td>
                                <td>$70/hr</td>
                                <td><span class="badge badge-active">Active</span></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-outline-info" title="Projects"><i class="bi bi-folder"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="/placeholder.svg?height=50&width=50" alt="David Wilson" class="team-member-avatar me-3">
                                        <div>
                                            <strong>David Wilson</strong>
                                            <br><small class="text-muted">Backend Developer</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-developer">Developer</span></td>
                                <td>david.wilson@bixitech.com</td>
                                <td>+1 (555) 567-8901</td>
                                <td>2022-02-14</td>
                                <td>40 hrs</td>
                                <td>$80/hr</td>
                                <td><span class="badge badge-inactive">On Leave</span></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-outline-info" title="Projects"><i class="bi bi-folder"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="/placeholder.svg?height=50&width=50" alt="Lisa Brown" class="team-member-avatar me-3">
                                        <div>
                                            <strong>Lisa Brown</strong>
                                            <br><small class="text-muted">QA Engineer</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-developer">QA</span></td>
                                <td>lisa.brown@bixitech.com</td>
                                <td>+1 (555) 678-9012</td>
                                <td>2023-01-08</td>
                                <td>35 hrs</td>
                                <td>$65/hr</td>
                                <td><span class="badge badge-pending">Probation</span></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-sm btn-outline-primary" title="View"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-outline-info" title="Projects"><i class="bi bi-folder"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team Member Modal -->
<div class="modal fade" id="teamMemberModal" tabindex="-1" aria-labelledby="teamMemberModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="teamMemberModalLabel">Add Team Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="memberFirstName" class="form-label">First Name *</label>
                            <input type="text" class="form-control" id="memberFirstName" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="memberLastName" class="form-label">Last Name *</label>
                            <input type="text" class="form-control" id="memberLastName" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="memberEmail" class="form-label">Email *</label>
                            <input type="email" class="form-control" id="memberEmail" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="memberPhone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="memberPhone">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="memberRole" class="form-label">Role *</label>
                            <select class="form-select" id="memberRole" required>
                                <option value="">Select Role</option>
                                <option value="admin">Administrator</option>
                                <option value="manager">Project Manager</option>
                                <option value="developer">Developer</option>
                                <option value="designer">Designer</option>
                                <option value="qa">QA Engineer</option>
                                <option value="intern">Intern</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="memberDepartment" class="form-label">Department</label>
                            <select class="form-select" id="memberDepartment">
                                <option value="">Select Department</option>
                                <option value="development">Development</option>
                                <option value="design">Design</option>
                                <option value="management">Management</option>
                                <option value="qa">Quality Assurance</option>
                                <option value="marketing">Marketing</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="memberHourlyRate" class="form-label">Hourly Rate</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" step="0.01" min="0" class="form-control" id="memberHourlyRate">
                                <span class="input-group-text">/hr</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="memberStartDate" class="form-label">Start Date *</label>
                            <input type="date" class="form-control" id="memberStartDate" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="memberEmploymentType" class="form-label">Employment Type</label>
                            <select class="form-select" id="memberEmploymentType">
                                <option value="full_time">Full Time</option>
                                <option value="part_time">Part Time</option>
                                <option value="contract">Contract</option>
                                <option value="intern">Intern</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="memberStatus" class="form-label">Status</label>
                            <select class="form-select" id="memberStatus">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                                <option value="pending">Pending</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="memberAddress" class="form-label">Address</label>
                        <textarea class="form-control" id="memberAddress" rows="3"></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="memberNotes" class="form-label">Notes</label>
                        <textarea class="form-control" id="memberNotes" rows="3" placeholder="Additional notes about the team member"></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="memberSendWelcome" checked>
                            <label class="form-check-label" for="memberSendWelcome">
                                Send welcome email with login credentials
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Add Team Member</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>