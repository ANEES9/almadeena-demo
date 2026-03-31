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
    <div class="col-md-4">
        <div class="swiper-slide">
            <div class="card-slide">
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
                    <img src="<?php echo $image_path ?>" alt="<?php echo $event_title ?>" class="img-fluid" />
                    <?php
                }
                mysqli_stmt_close($imgResult);
                ?>
                <div class="overlay">
                    <a href="event-details.php?url=<?php echo $event_id ?>">
                        <h4><?php echo $event_title; ?></h4>
                        <p>Read more</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
}
$stmt->close();
?>