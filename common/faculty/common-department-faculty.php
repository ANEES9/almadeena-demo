<?php
require_once('php/db.php');
include('php/common-path.php');
mysqli_set_charset($connection, 'utf8');

// $department_id = isset($_GET['department_id']) ? (int)$_GET['department_id'] : 0;
$department_id = 1;
$status = 1;
$stmt = mysqli_prepare($connection, "SELECT * FROM faculty WHERE department_id = ? AND status = ? LIMIT 20");
mysqli_stmt_bind_param($stmt, "ii", $department_id, $status);
mysqli_stmt_execute($stmt);
$facultyResult = mysqli_stmt_get_result($stmt);

// Fetch department name once
$stmt_dept = mysqli_prepare($connection, "SELECT department_name FROM department WHERE department_id = ?");
mysqli_stmt_bind_param($stmt_dept, "i", $department_id);
mysqli_stmt_execute($stmt_dept);
$deptResult = mysqli_stmt_get_result($stmt_dept);
$deptRow = mysqli_fetch_assoc($deptResult);
$department_name = $deptRow['department_name'];
mysqli_stmt_close($stmt_dept);

while ($facultyRow = mysqli_fetch_assoc($facultyResult)) {
    $id = $facultyRow['id'];
    $faculty_name = $facultyRow['faculty_name'];
    $designation = $facultyRow['designation'];
    $filename = $id . '.jpg';
    $image_path = $IMG_PATH . "faculty/" . $department_id . "/" . $filename;
    $emp_id = $facultyRow['emp_id'];
    $email = $facultyRow['email'];
    $phone_no = $facultyRow['phone_no'];
    $department_id = $facultyRow['department_id'];
    ?>

    <div class="facbox">
        <img src="<?php echo $image_path ?>" class="img-fluid">
        <h2><?php echo $faculty_name ?></h2>
        <p><?php echo $designation ?></p>
        <p><a href="#" data-bs-toggle="modal" data-bs-target="#modal<?php echo $id ?>" class="btnOne">View More <i
                    class="fa fa-angle-right" aria-hidden="true"></i></a></p>
    </div>
    <?php
}
mysqli_stmt_close($stmt);
?>