<?php
require_once('php/db.php');
include('php/common-path.php');
mysqli_query($connection, "set names 'utf8'");

$status = 1;
$stmt = $connection->prepare('SELECT news_id, news_title, description, news_date FROM news WHERE status=?');
$stmt->bind_param('i', $status);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $news_id = $row['news_id'];
    $news_title = $row['news_title'];
    $description = $row['description'];
    $news_date = $row['news_date'];
    ?>

    <div class="col-md-6">
        <div class="home-news-box">
            <?php
            $imgResult = mysqli_prepare($connection, "SELECT image_id FROM news_image WHERE news_id = ? LIMIT 1");
            mysqli_stmt_bind_param($imgResult, "i", $news_id);
            mysqli_stmt_execute($imgResult);
            $resultImage = mysqli_stmt_get_result($imgResult);

            while ($homeImages = mysqli_fetch_assoc($resultImage)) {
                $imgid = $homeImages['image_id'];
                $filename = $imgid . '.webp';
                $image_path = $IMG_PATH . "news/" . $news_id . '/' . $filename;
                ?>
                <img src="<?php echo $image_path ?>" class="img-fluid" />
                <?php
            }
            mysqli_stmt_close($imgResult);
            ?>

            <div class="home-news-content-box">
                <a href="news-details.php?url=<?php echo $news_id ?>">
                    <h4><?php echo $news_title; ?></h4>
                    <h5>Read more <span><?php echo date('j M, Y', strtotime($news_date)); ?></span></h5>
                </a>
            </div>
        </div>
    </div>

    <?php
}
$stmt->close();
?>