<?php
require_once('php/db.php');
include('php/common-path.php');
mysqli_query($connection, "set names 'utf8'");

$status = 1;
$stmt = $connection->prepare('SELECT event_id, event_title, start_date FROM event WHERE status=?');
$stmt->bind_param('i', $status);
$stmt->execute();

$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $event_id = $row['event_id'];
    $event_title = $row['event_title'];
    $start_date = $row['start_date'];
    ?>
    <div class="item newsbox">
        <a href="event-details.php?url=<?php echo $event_id ?>">
            <?php
            $imgResult = mysqli_prepare($connection, "SELECT image_id FROM event_image WHERE event_id = ? LIMIT 1");
            mysqli_stmt_bind_param($imgResult, "i", $event_id);
            mysqli_stmt_execute($imgResult);
            $resultImage = mysqli_stmt_get_result($imgResult);

            while ($homeImages = mysqli_fetch_assoc($resultImage)) {
                $imgid = $homeImages['image_id'];
                $filename = $imgid . '.webp';
                $image_path = $IMG_PATH . "event/" . $event_id . '/' . $filename;
                ?>
                <img src="<?php echo $image_path ?>" class="img-fluid" />
                <?php
            }
            mysqli_stmt_close($imgResult);
            ?>
            <h2><?php echo $event_title; ?></h2>
            <p>View more>> <span> <?php if (!empty($start_date) && $start_date !== "0000-00-00" && $start_date !== null) {
                echo htmlspecialchars($start_date);
            } ?></span></p>
        </a>
    </div>

    <?php
}
$stmt->close();
?>