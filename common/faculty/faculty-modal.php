<?php
$stmt = mysqli_prepare($connection, "SELECT * FROM faculty WHERE department_id = ? AND status = ? LIMIT 20");
mysqli_stmt_bind_param($stmt, "ii", $department_id, $status);
mysqli_stmt_execute($stmt);
$facultyResult = mysqli_stmt_get_result($stmt);
while ($facultyRow = mysqli_fetch_assoc($facultyResult)) {
    $id = $facultyRow['id'];
    $faculty_name = $facultyRow['faculty_name'];
    $designation = $facultyRow['designation'];
    $filename = $id . '.jpg';
    $image_path = $IMG_PATH . "faculty/" . $department_id . "/" . $filename;
    $qualification = $facultyRow['qualification'];
    $emp_id = $facultyRow['emp_id'];
    $email = $facultyRow['email'];
    $phone_no = $facultyRow['phone_no'];
    $experience = $facultyRow['experience'];
    $area_of_expertise = $facultyRow['area_of_expertise'];
    $irnis = $facultyRow['irnis'];
    $linked_in = $facultyRow['linked_in'];
    $personal_website = $facultyRow['personal_website'];
    $achievements = $facultyRow['achievements'];
    $responsibility = $facultyRow['responsibility'];
    $responsibility_at_dept = $facultyRow['responsibility_at_dept'];
    $professional_memberships = $facultyRow['professional_memberships'];
    $publication = $facultyRow['publication'];
    $department_id = $facultyRow['department_id'];
    ?>

    <div class="modal fade modal-custom-bg fade-flip" id="modal<?php echo $id; ?>">
        <div class="modal-dialog modal-custom modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body">
                <button type="button" class="close" data-bs-dismiss="modal">×</button>
                <div class="modal-custom-details-popup">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php echo htmlspecialchars($image_path, ENT_QUOTES, 'UTF-8'); ?>"
                                class="img-fluid p-h-img" />
                        </div>
                        <div class="col-md-8">
                            <h3><?php echo htmlspecialchars($faculty_name, ENT_QUOTES, 'UTF-8'); ?>
                                <span>
                                    <?php if (trim($designation)) {
                                        echo htmlspecialchars($designation, ENT_QUOTES, 'UTF-8');
                                    } ?>
                                    <br>
                                    <?php echo htmlspecialchars($department_name, ENT_QUOTES, 'UTF-8'); ?></span>
                            </h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="Fa-list">
                                        <?php if (trim($email)) { ?>
                                            <li>
                                                <a
                                                    href="mailto:<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
                                                    <i class="fa-solid fa-envelope"></i>
                                                    <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                        <?php if (trim($phone_no)) { ?>
                                            <li>
                                                <a
                                                    href="tel:<?php echo htmlspecialchars($phone_no, ENT_QUOTES, 'UTF-8'); ?>">
                                                    <i class="fa-solid fa-phone"></i>
                                                    <?php echo htmlspecialchars($phone_no, ENT_QUOTES, 'UTF-8'); ?> </a>
                                            </li>
                                        <?php } ?>
                                        <?php if (trim($emp_id)) { ?>
                                            <li>Employee ID :
                                                <b><?php echo htmlspecialchars($emp_id, ENT_QUOTES, 'UTF-8'); ?></b>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="Fa-list sociallinks">
                                        <?php if (trim($irnis)) { ?>
                                            <li>
                                                <a href="<?php echo htmlspecialchars($irnis, ENT_QUOTES, 'UTF-8'); ?>"
                                                    target="_blank">
                                                    <img src="img/irins-logo.png" class="img-fluid"></a>
                                            </li>
                                        <?php } ?>
                                        <?php if (trim($linked_in)) { ?>
                                            <li>
                                                <a href="<?php echo htmlspecialchars($linked_in, ENT_QUOTES, 'UTF-8'); ?>"
                                                    target="_blank">
                                                    <img src="img/linkedin-logo.png" class="img-fluid mx-2"></a>
                                            </li>
                                        <?php } ?>
                                        <?php if (trim($personal_website)) { ?>
                                            <li>
                                                <a href="<?php echo htmlspecialchars($personal_website, ENT_QUOTES, 'UTF-8'); ?>"
                                                    target="_blank">
                                                    <img src="img/globe.png" class="img-fluid"></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="accordionExample" class="accordion">

                        <?php if (trim($qualification)) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">

                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Educational Qualifications
                                    </button>

                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <?php echo $qualification ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if (trim($experience)) { ?>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Experience
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <?php echo $experience ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>



                        <?php if (trim($achievements)) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        Achievements
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <?php echo $achievements ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>


                        <?php if (trim($area_of_expertise)) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        Area of Expertise 
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <?php echo $area_of_expertise ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if (trim($responsibility)) { ?>
                             <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        Responsibility
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <?php echo $responsibility ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                        <?php if (trim($responsibility_at_dept)) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        Responsibility at Department Level
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <?php echo $responsibility_at_dept ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        
                        <?php if (trim($professional_memberships)) { ?>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                        Professional Memberships
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <?php echo $professional_memberships ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if (trim($publication)) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                        Publication
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <?php echo $publication ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
}?>