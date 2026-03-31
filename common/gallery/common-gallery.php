<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('php/db.php');
include('php/common-path.php');
mysqli_query($connection, "set names 'utf8'");

$status = 1;
$stmt = $connection->prepare('SELECT * FROM gallery WHERE status=?');
$stmt->bind_param('i', $status);
$stmt->execute();

$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $gallery_id = $row['gallery_id'];
    $gallery_title = $row['gallery_title'];
    ?>
    <div class="col-md-4 mb-3">

        <?php
        $imgResult = mysqli_prepare($connection, "SELECT image_id FROM gallery_image WHERE gallery_id = ? LIMIT 1");
        mysqli_stmt_bind_param($imgResult, "i", $gallery_id);
        mysqli_stmt_execute($imgResult);
        $resultImage = mysqli_stmt_get_result($imgResult);

        while ($homeImages = mysqli_fetch_assoc($resultImage)) {
            $imgid = $homeImages['image_id'];
            $filename = $imgid . '.webp';
            $image_path = $IMG_PATH . "gallery/" . $gallery_id . '/' . $filename;
            ?>
            <a href="<?php echo $image_path ?>">
                <img src="<?php echo $image_path ?>" class="img-fluid h-100 w-100 rounded" />
            </a>
            <?php
        }
        mysqli_stmt_close($imgResult);
        ?>
        <div class="contents">
            <p class="text-center m-2"><?php echo $gallery_title ?></p>
        </div>
    </div>


<?php } ?>