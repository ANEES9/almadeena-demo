<?php
include('admin/db.php');

$institution_id = (int)$_GET['institution_id'];

$sql = "
SELECT c.course_id, c.course_name
FROM courses c
INNER JOIN institution_courses ic
    ON c.course_id = ic.course_id
WHERE ic.institution_id = $institution_id
AND c.status = 1
ORDER BY c.course_name
";

$res = mysqli_query($connection, $sql);

echo '<option value="">Choose a course</option>';

while ($row = mysqli_fetch_assoc($res)) {
    echo "<option value='{$row['course_id']}'>{$row['course_name']}</option>";
}
