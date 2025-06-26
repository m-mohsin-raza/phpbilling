<?php 
require('../functions.php');


try {
    // Validate required fields
    if (empty($_POST['task_title']) || empty($_POST['project_id'])) {
        throw new Exception('Task title and project are required');
    }

    // Insert task into database
    DB::insert('tasks', [
        'task_title' => $_POST['task_title'],
        'project_id' => $_POST['project_id'] ?: null,
        'project_name' => $_POST['project_name'] ?: null,
        'task_date' => $_POST['task_date'],
        'estimated_hours' => $_POST['estimated_hours'],
        'assignee_id' => $_POST['assignee_id'] ?: null,
        'assignee_name' => $_POST['assignee_name'] ?: null,
        'status' => $_POST['status'],
        'task_details' => $_POST['task_details'] ?: null,
        'clickup_link' => $_POST['clickup_link'] ?: null
    ]);

    // Return simple success response
    echo '1';
    
} catch (Exception $e) {
    // Return error message
    echo $e->getMessage();
}
?>