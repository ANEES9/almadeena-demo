<?php
require_once('php/db.php');
include('php/common-path.php');
mysqli_query($connection, "set names 'utf8'");
$status = 1;
$stmt = $connection->prepare('SELECT announcement_title, pdf_path, page_link FROM announcement WHERE status=?');
$stmt->bind_param('i', $status);
$stmt->execute();

$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $announcement_title = $row['announcement_title'];
    $pdf_path = $row['pdf_path'];
    $page_link = $row['page_link'];
    ?>
    <div class="item ">
        <p><?php echo $announcement_title; ?>
            <?php if ($pdf_path == null) { ?>
                <span class="clrTwo"><a href="<?php echo $page_link; ?>" target="_blank"> Read more >></a></span>

            <?php } else { ?>
                <span class="clrTwo"><a href="<?php echo "admin/" . $pdf_path; ?>" target="_blank"> Read more >></a></span>
            <?php } ?>
        </p>
    </div>
    <?php
}

$stmt->close();
?>