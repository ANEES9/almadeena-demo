<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Almadeena Islamic and Academic School</title>

    <link rel="shortcut icon" href="favicon.ico" />
    <?php include('header-analytics.php'); ?>
    <?php include('top-link.php'); ?>
    <?php include('main-font.php'); ?>
    <?php include('css-header.php'); ?>
</head>

<body>
    <div class="site-container">

        <?php include('header.php'); ?>

        <section class="inner-banner">
            <img src="img/banner/about.jpg" class="img-fluid">
            <div class="container">
                <h1>Admission</h1>
            </div>
        </section>

        <section class="inner-bg">
            <div class="container">

                <!-- ================= INSTITUTE SELECT ================= -->
                <div class="row justify-content-center mb-4">
                    <div class="col-md-6 mt-2">
                        <label>Select Institute *</label>
                        <select id="institute" class="form-control" required>
                            <option value="">-- Select Institute --</option>
                            <?php
                            include('admin/db.php');
                            $res = mysqli_query($connection, "SELECT * FROM institution WHERE status = 1");
                            while ($row = mysqli_fetch_assoc($res)) {
                                echo "<option value='{$row['institution_id']}'>
                        {$row['institution_name']}
                      </option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!-- ================= ADMISSION FORM ================= -->
                <div class="contact-form-bg">
                    <form method="post" action="admission-submit.php">

                        <input type="hidden" name="institution_id" id="institution_id">

                        <div class="row justify-content-center" id="admissionForm" style="display:none;">

                            <!-- ================= COURSE ================= -->
                            <div class="col-md-6 mt-2">
                                <label>Select Course *</label>
                                <select name="course_id" id="standard" class="form-control" required>
                                    <option value="">Choose a Course</option>
                                </select>
                            </div>

                            <!-- ================= STUDENT BASIC DETAILS ================= -->
                            <div class="col-md-6 mt-2">
                                <label>Name *</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Gender *</label>
                                <select name="gender" class="form-control" required>
                                    <option value="">Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Date of Birth *</label>
                                <input type="date" name="dob" class="form-control" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Blood Group *</label>
                                <select name="blood_group" class="form-control" required>
                                    <option value="">Select Blood Group</option>
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                    <option>O+</option>
                                    <option>O-</option>
                                </select>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Religion *</label>
                                <input type="text" name="religion" class="form-control" value="Islam" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Mother Tongue *</label>
                                <input type="text" name="mother_tongue" class="form-control" value="Malayalam" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Nationality *</label>
                                <input type="text" name="nationality" class="form-control" value="Indian" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Aadhaar Number *</label>
                                <input type="text" name="aadhaar" class="form-control" maxlength="12" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Is Disabled *</label>
                                <select name="is_disabled" class="form-control" required>
                                    <option value="No" selected>No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>

                            <!-- ================= CONTACT DETAILS ================= -->
                            <div class="col-md-6 mt-2">
                                <label>Mobile *</label>
                                <input type="text" name="mobile" class="form-control" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>WhatsApp *</label>
                                <input type="text" name="whatsapp" class="form-control" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Address *</label>
                                <input type="text" name="house_name" class="form-control" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>District *</label>
                                <input type="text" name="district" class="form-control" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Pin Code *</label>
                                <input type="text" name="pincode" class="form-control" required>
                            </div>

                            <!-- ================= FATHER DETAILS ================= -->
                            <div class="col-md-6 mt-2">
                                <label>Father's Name *</label>
                                <input type="text" name="father_name" class="form-control" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Father's Phone *</label>
                                <input type="text" name="father_phone" class="form-control" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Father's Qualification *</label>
                                <input type="text" name="father_qualification" class="form-control" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Father's Occupation *</label>
                                <input type="text" name="father_occupation" class="form-control" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Father's Income *</label>
                                <input type="text" name="father_income" class="form-control" required>
                            </div>

                            <!-- ================= MOTHER DETAILS ================= -->
                            <div class="col-md-6 mt-2">
                                <label>Mother's Name *</label>
                                <input type="text" name="mother_name" class="form-control" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Mother's Qualification *</label>
                                <input type="text" name="mother_qualification" class="form-control" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Mother's Occupation *</label>
                                <input type="text" name="mother_occupation" class="form-control" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Mother's Income *</label>
                                <input type="text" name="mother_income" class="form-control" required>
                            </div>

                            <!-- ================= GUARDIAN DETAILS ================= -->
                            <div class="col-md-6 mt-2">
                                <label>Guardian Name</label>
                                <input type="text" name="guardian_name" class="form-control">
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Guardian Relationship</label>
                                <input type="text" name="guardian_relationship" class="form-control">
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Guardian Address</label>
                                <input type="text" name="guardian_address" class="form-control">
                            </div>

                            <!-- ================= ACADEMIC DETAILS ================= -->
                            <div class="col-md-6 mt-2">
                                <label>Last School *</label>
                                <input type="text" name="last_school_name" class="form-control" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>Last School Affiliation *</label>
                                <input type="text" name="last_school_affiliation" class="form-control" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>TC Number *</label>
                                <input type="text" name="tc_number" class="form-control" required>
                            </div>

                            <div class="col-md-6 mt-2">
                                <label>TC Issue Date *</label>
                                <input type="date" name="tc_issue_date" class="form-control" required>
                            </div>

                            <!-- SUBMIT -->
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-two-full">Submit Admission</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </section>

        <?php include('footer.php'); ?>
        <?php include("footer-common-js.php"); ?>

        <script>
            document.getElementById('institute').addEventListener('change', function () {

                let instituteId = this.value;

                if (instituteId !== '') {

                    document.getElementById('admissionForm').style.display = 'flex';
                    document.getElementById('institution_id').value = instituteId;

                    fetch('get-courses.php?institution_id=' + instituteId)
                        .then(res => res.text())
                        .then(data => {
                            document.getElementById('standard').innerHTML = data;
                        });

                } else {

                    document.getElementById('admissionForm').style.display = 'none';
                    document.getElementById('standard').innerHTML =
                        '<option value="">Choose a Standard</option>';
                }
            });
        </script>

    </div>
</body>

</html>