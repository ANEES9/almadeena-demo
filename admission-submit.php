<?php
include('admin/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $institution_id = (int) $_POST['institution_id'];
    $course_id = (int) $_POST['course_id'];
    $name = trim($_POST['name']);
    $gender = trim($_POST['gender']);
    $dob = $_POST['dob'];
    $blood_group = trim($_POST['blood_group']);
    $religion = trim($_POST['religion']);
    $mother_tongue = trim($_POST['mother_tongue']);
    $nationality = trim($_POST['nationality']);
    $aadhaar = trim($_POST['aadhaar']);
    $is_disabled = trim($_POST['is_disabled']);

    /* ================= CONTACT ================= */
    $mobile = trim($_POST['mobile']);
    $whatsapp = trim($_POST['whatsapp']);
    $email = trim($_POST['email']);
    $house_name = trim($_POST['house_name']);
    $district = trim($_POST['district']);
    $pincode = trim($_POST['pincode']);

    /* ================= FATHER ================= */
    $father_name = trim($_POST['father_name']);
    $father_phone = trim($_POST['father_phone']);
    $father_qualification = trim($_POST['father_qualification']);
    $father_occupation = trim($_POST['father_occupation']);
    $father_income = trim($_POST['father_income']);

    /* ================= MOTHER ================= */
    $mother_name = trim($_POST['mother_name']);
    $mother_qualification = trim($_POST['mother_qualification']);
    $mother_occupation = trim($_POST['mother_occupation']);
    $mother_income = trim($_POST['mother_income']);

    /* ================= GUARDIAN ================= */
    $guardian_name = trim($_POST['guardian_name']);
    $guardian_relationship = trim($_POST['guardian_relationship']);
    $guardian_address = trim($_POST['guardian_address']);

    /* ================= ACADEMIC ================= */
    $last_school_name = trim($_POST['last_school_name']);
    $last_school_affiliation = trim($_POST['last_school_affiliation']);
    $tc_number = trim($_POST['tc_number']);
    $tc_issue_date = $_POST['tc_issue_date'];

    $stmt = $connection->prepare("
        INSERT INTO admissions (
            institution_id, course_id, name, gender, dob, blood_group,
            religion, mother_tongue, nationality, aadhaar, is_disabled,
            mobile, whatsapp, email, house_name, district, pincode,
            father_name, father_phone, father_qualification,
            father_occupation, father_income,
            mother_name, mother_qualification,
            mother_occupation, mother_income,
            guardian_name, guardian_relationship, guardian_address,
            last_school_name, last_school_affiliation,
            tc_number, tc_issue_date,
            created_date
        )
        VALUES (
            ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
            ?, ?, ?, ?, ?, ?,
            ?, ?, ?, ?, ?,
            ?, ?, ?, ?,
            ?, ?, ?,
            ?, ?, ?, ?, NOW()
        )
    ");

    $stmt->bind_param(
        "iisssssssssssssssssssssssssssssss",
        $institution_id,
        $course_id,
        $name,
        $gender,
        $dob,
        $blood_group,
        $religion,
        $mother_tongue,
        $nationality,
        $aadhaar,
        $is_disabled,
        $mobile,
        $whatsapp,
        $email,
        $house_name,
        $district,
        $pincode,
        $father_name,
        $father_phone,
        $father_qualification,
        $father_occupation,
        $father_income,
        $mother_name,
        $mother_qualification,
        $mother_occupation,
        $mother_income,
        $guardian_name,
        $guardian_relationship,
        $guardian_address,
        $last_school_name,
        $last_school_affiliation,
        $tc_number,
        $tc_issue_date
    );

    $stmt->execute();
    $stmt->close();
    $inst = mysqli_fetch_assoc(mysqli_query(
        $connection,
        "SELECT institution_name FROM institution WHERE institution_id = $institution_id"
    ));

    $course = mysqli_fetch_assoc(mysqli_query(
        $connection,
        "SELECT course_name FROM courses WHERE course_id = $course_id"
    ));

    $institution_name = $inst['institution_name'];
    $course_name = $course['course_name'];

    $to = "banu.safeera987@gmail.com";
    $subject = "New Admission Enquiry - $institution_name";

    $message = "
================ NEW ADMISSION RECEIVED ================

INSTITUTE DETAILS
------------------
Institute: $institution_name
Course: $course_name

STUDENT DETAILS
------------------
Name: $name
Gender: $gender
DOB: $dob
Blood Group: $blood_group
Religion: $religion
Mother Tongue: $mother_tongue
Nationality: $nationality
Aadhaar: $aadhaar
Is Disabled: $is_disabled

CONTACT DETAILS
------------------
Mobile: $mobile
WhatsApp: $whatsapp
Email: $email
Address: $house_name
District: $district
Pincode: $pincode

FATHER DETAILS
------------------
Name: $father_name
Phone: $father_phone
Qualification: $father_qualification
Occupation: $father_occupation
Income: $father_income

MOTHER DETAILS
------------------
Name: $mother_name
Qualification: $mother_qualification
Occupation: $mother_occupation
Income: $mother_income

GUARDIAN DETAILS
------------------
Name: $guardian_name
Relationship: $guardian_relationship
Address: $guardian_address

ACADEMIC DETAILS
------------------
Last School: $last_school_name
Affiliation: $last_school_affiliation
TC Number: $tc_number
TC Issue Date: $tc_issue_date

";

    $headers = "From: noreply@yourdomain.com";

    mail($to, $subject, $message, $headers);

    /* ================= REDIRECT ================= */

    header("Location: thankyou.php?success=1");
    exit();
}
?>