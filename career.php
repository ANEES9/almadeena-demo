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
            <img src="img/banner/career.jpg" class="img-fluid">
            <div class="container">
                <h1>Career</h1>
            </div>
        </section>
        <section class="inner-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-10">
                        <h2 class="headMain text-center">JOIN OUR TEAM </h2>
                        <p class="text-center">Almadeena Institute is continuously seeking passionate and dedicated individuals who are
                            eager to contribute to our mission of education, growth, and excellence. We believe in
                            nurturing talent and creating an environment that encourages learning, innovation, and
                            personal development.</p>
                        <p class="text-center">We welcome individuals who are motivated, forward-thinking, and committed to making a
                            meaningful impact. At Almadeena Institute, you will have the opportunity to grow
                            professionally while helping shape the future of our students and community.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <img src="img/career.png"  class="img-fluid rounded-3">
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
                                            <label for="position">Position</label>
                                            <input type="text" class="form-control" id="position" name="position" autocomplete="off" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label for="qualification">Qualification</label>
                                            <input type="text" class="form-control" id="qualification" name="qualification" autocomplete="off" required="">
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
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label for="cv">Select CV</label>
                                            <input type="file" id="cv" name="cv" class="form-control" accept=".pdf,.doc,.docx" required="">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="hidden" id="subject" name="subject" value="Career Enquiry">
                                            <input type="hidden" name="career_id" value="<?php echo isset($_GET['url']) ? $_GET['url'] : ''; ?>">
                                            <button class="btn-one" type="submit"><span>Submit</span> <i class="fa-solid fa-chevron-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include("footer.php") ?>
        <?php include("footer-common-js.php") ?>
    </div>
</body>
</html>