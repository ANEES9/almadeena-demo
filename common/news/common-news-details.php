<?php
include('php/db.php');
include('php/common-path.php');
mysqli_query($connection, "set names 'utf8'");

if (isset($_GET['url'])) {
  $url = $_GET['url'];
  $news_id = (int) strtok($url, '/'); 
  $status = 1;

  $sql = "SELECT * FROM news where news_id=?";
  $stmt = mysqli_prepare($connection, $sql);
  mysqli_stmt_bind_param($stmt, "i", $news_id);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  while ($row = mysqli_fetch_assoc($result)) {
    $news_id = $row['news_id'];
    $news_title = $row['news_title'];
    $content = $row['content'];
    $news_date = $row['news_date'];
    $description = $row['description'];
    $pdf_path = $row['pdf_path'];
    ?>
    <div class="bg-color-two">
      <div class="row d-flex justify-content-center">

        <div class="col-md-12">
          <h3><?php echo $news_title; ?></h3>
          <h6><i class="fa-solid fa-calendar-days"></i>
            <?php
            if ($news_date != '0000-00-00' && $news_date != null) {
              echo date('M j, Y', strtotime($news_date));
            } ?>
          </h6>
          <br>
          <p><?php echo $description ?></p>
          <p><?php echo $content ?></p>

        </div>

        <div class="col-md-12">
          <div class="row gallery">
            <?php
            $stmt = mysqli_prepare($connection, "SELECT * FROM news_image WHERE news_id = ? ORDER BY image_id ASC LIMIT 10");
            mysqli_stmt_bind_param($stmt, "i", $news_id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while ($homeImages = mysqli_fetch_assoc($result)) {
              $imgid = $homeImages['image_id'];
              $filename = $imgid . '.webp';
              $image_path = $IMG_PATH . "/news/" . $news_id . '/' . $filename;
              ?>
              <div class="col-md-13 col-6 mb-2">
                <a href="<?php echo $image_path ?>">
                  <img src="<?php echo $image_path ?>" class="img-fluid img-thumbnail h-100">
                </a>
              </div>
              <?php
            }
            ?>

          </div>
        </div>

        <?php if (!empty($pdf_path)) { ?>
          <div class="col-md-4 m-3">
            <a href="<?php echo "admin/" . $pdf_path ?>" class="btn-two-full text-center" target="_blank">Please check the attachment
              for details </a>
          </div>
        <?php } ?>
      </div>
    </div>

    <?php
  }
}
?>