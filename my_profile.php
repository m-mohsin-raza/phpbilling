<?php
$page_title = "My Profile";
include 'includes/header.php';
?>

<?php include 'includes/admin_sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12">
                <h2>My Profile</h2>
                <p class="text-muted">Manage your account information and settings.</p>
            </div>
        </div>

        <div class="row">
            <!-- Profile Column -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="profile-avatar mx-auto mb-3">
                            JD
                        </div>
                        <h4>John Doe</h4>
                        <p class="text-muted">Administrator</p>
                        <p class="text-muted mb-0">john.doe@example.com</p>
                        <p class="text-muted">Last login: 2024-06-24 09:42</p>
                        <button class="btn btn-outline-primary btn-sm mt-2">
                            <i class="bi bi-camera"></i> Change Photo
                        </button>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h5>Security</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span>Password</span>
                            <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                                Change
                            </button>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Two-Factor Authentication</span>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="twoFactorSwitch">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Details Column -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Personal Information</h5>
                    </div>
                    <div class="card-body">
                        <form id="profileForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstName" value="John">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" value="Doe">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" value="john.doe@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="phone" value="+1 (555) 123-4567">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" rows="2">123 Main St, New York, NY 10001</textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="timezone" class="form-label">Timezone</label>
                                        <select class="form-select" id="timezone">
                                            <option value="EST" selected>Eastern Time (ET)</option>
                                            <option value="CST">Central Time (CT)</option>
                                            <option value="PST">Pacific Time (PT)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="language" class="form-label">Language</label>
                                        <select class="form-select" id="language">
                                            <option value="en" selected>English</option>
                                            <option value="es">Spanish</option>
                                            <option value="fr">French</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h5>Activity Log</h5>
                    </div>
                    <div class="card-body">
                        <div class="activity-timeline">
                            <div class="activity-item">
                                <div class="activity-badge"></div>
                                <div class="activity-content">
                                    <small class="text-muted">Today, 09:42 AM</small>
                                    <p>Logged in to the system</p>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-badge"></div>
                                <div class="activity-content">
                                    <small class="text-muted">Yesterday, 02:15 PM</small>
                                    <p>Updated invoice #INV-001</p>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-badge"></div>
                                <div class="activity-content">
                                    <small class="text-muted">June 22, 10:30 AM</small>
                                    <p>Created new client: Tech Solutions Inc</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Change Password Modal -->
<div class="modal fade" id="changePasswordModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="changePasswordForm">
                    <div class="mb-3">
                        <label for="currentPassword" class="form-label">Current Password</label>
                        <input type="password" class="form-control" id="currentPassword" required>
                    </div>
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="newPassword" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmNewPassword" class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" id="confirmNewPassword" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="changePasswordForm" class="btn btn-primary">Update Password</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>