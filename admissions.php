<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Almadeena Islamic and Academic School</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="copyright" content="">
    <meta name="author" content="">
    <meta name="zipcode" content="">
    <meta name="city" content="">
    <meta name="country" content="">
    <meta name="robots" content="All">
    <meta name="robots" content="ODP (Default)">
    <link rel="shortcut icon" href="favicon.ico" />
    <?php include('header-analytics.php') ?>
    <?php include('top-link.php') ?>
    <?php include('main-font.php') ?>
    <?php include('css-header.php') ?>
</head>

<body>
    <div class="site-container">
        <?php include('header.php') ?>

        <section class="inner-banner">
            <img src="img/banner/about.jpg" class="img-fluid">
            <div class="container">
                <h1>Admissions</h1>
            </div>
        </section>
        <section class="inner-section">
            <section class="am-header">
                <h1 class="headMain text-center">Admissions at Al Madeena</h1>
                <p class="text-center">
                    Welcoming students into a journey of knowledge, faith, and excellence
                </p>
            </section>

            <!-- Admissions Content -->
            <div class="am-wrapper">

                <div class="am-section-box">
                    <h2 class="am-section-title">About Admissions</h2>
                    <p class="am-section-text">
                        Al Madeena welcomes students from diverse backgrounds into its educational
                        institutions. Admissions are open for religious, academic, and skill-based
                        programs, subject to eligibility criteria.
                    </p>
                </div>

                <div class="am-section-box">
                    <h2 class="am-section-title">Admission Process</h2>

                    <div class="am-process-grid">
                        <div class="am-process-step">
                            <span class="am-step-label">Step 1</span>
                            Submit inquiry or application form
                        </div>

                        <div class="am-process-step">
                            <span class="am-step-label">Step 2</span>
                            Eligibility screening
                        </div>

                        <div class="am-process-step">
                            <span class="am-step-label">Step 3</span>
                            Counseling & guidance
                        </div>

                        <div class="am-process-step">
                            <span class="am-step-label">Step 4</span>
                            Enrollment confirmation
                        </div>
                    </div>
                </div>

              
                <div class="row mb-5">
                    <div class="col-md-5">
                        <img src="img/admission-bg.jpg" alt="" class="img-fluid rounded-3">
                    </div>
                    <div class="col-md-6  offset-md-1">
                        <div class="contact-form-bg">
                            <!-- <form method="post" onSubmit="return validateFormOnSubmit(this);" action="enquiry.php"> -->
                            <form role="form" id="form" onsubmit="return validateFormOnSubmit(this);" method="post" enctype="multipart/form-data" action="send-career.php">
                                <div class="form-group clearfix">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" autocomplete="off" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label for="email">Email ID</label>
                                            <input type="email" id="email" name="email" class="form-control" autocomplete="off" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label for="contactNumber">Mob/Tel Number</label>
                                            <input class="form-control" id="contactNumber" name="contactNumber" required="" pattern="[0-9]{10,15}" onkeypress="return isNumberKey(event);" autocomplete="off">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label for="comments">Message If any</label>
                                            <textarea id="comments" name="comments" class="form-control" placeholder="Message" type="text" rows="2" required=""></textarea>
                                        </div>
                                       
                                        <div class="col-md-12">
                                            <input type="hidden" id="subject" name="subject" value="Contact Makhavi Arabia Contracting Co.">
                                            <button class="btn-one" type="submit"><span>Submit</span> <i class="fa-solid fa-chevron-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                  <div class="am-section-box am-contact-box">
                    <h2 class="am-section-title">Contact Admissions</h2>
                    <p class="am-contact-item"><strong>📍 Location:</strong> Manjanady, Mangalore, Karnataka</p>
                    <p class="am-contact-item"><strong>📞 Phone:</strong> +91 99006 51580 / +91 84710 88999</p>
                    <p class="am-contact-item"><strong>📧 Email:</strong> almadeena313@gmail.com</p>
                </div>


            </div>
        </section>









        <?php include("footer.php") ?>
        <?php include("footer-common-js.php") ?>
    </div>
</body>

</html>