<?php
require_once('php/db.php');
include('php/common-path.php');
mysqli_query($connection, "set names 'utf8'");

$status = 1;
$stmt = $connection->prepare('SELECT career_id, position, qualification, date, institution_id FROM career WHERE status=?');
$stmt->bind_param('i', $status);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $career_id = $row['career_id'];
    $position = $row['position'];
    $qualification = $row['qualification'];
    $date = $row['date'];
    $institution_id = $row['institution_id'];
    ?>
    <div class="col-md-4">
        <div class="bg-color-two">
            <h4>Position: <?php echo $position; ?></h4>
            <p>Qualification Required: <?php echo $qualification; ?></p>
            <p><?php echo $date; ?></p>
            <a href="career.php?url=<?php echo $career_id ?>" class="btn-two-full">Apply Now</a>
        </div>
    </div>

    <?php
}
$stmt->close();
?>