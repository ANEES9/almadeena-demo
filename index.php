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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <?php include('css-header.php') ?>
    <style>
        .swiper-button-next {
            width: 40px;
            /* Adjust size */
            height: 40px;
            /* Adjust size */
            background-color: var(--color-one);
            /* Change to your preferred color */
            border-radius: 50%;
            /* Makes it round */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .swiper-button-next::after {
            font-size: 18px;
            /* Reduce arrow size */
            color: white;
            /* Change arrow color */
        }

        .swiper-button-prev {
            width: 40px;
            /* Adjust size */
            height: 40px;
            /* Adjust size */
            background-color: var(--color-one);
            /* Change to your preferred color */
            border-radius: 50%;
            /* Makes it round */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .swiper-button-prev::after {
            font-size: 18px;
            /* Reduce arrow size */
            color: white;
            /* Change arrow color */
        }

        .swiper-3d .swiper-slide-shadow-right {
            background-image: none !important;
        }

        .swiper-3d .swiper-slide-shadow-left {
            background-image: none !important;
        }
    </style>
</head>

<body>
    <div class="site-container">
        <?php include('header.php') ?>
        <section class="slider">
            <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active slide1" data-bs-interval="10000">

                        <img src="img/slider/1.jpg" class="d-block w-100" alt="Almadeena Islamic and Academic School" />
                        <div class="banner-overlay">
                            <h1>Empowering Education,For a<br> Bright Future.</h1>

                            <div class="banner-buttons">
                                <a href="contact.php" class="btn btn-contact">Contact Us</a>
                                <a href="donate.php" class="btn btn-donate">Donate Us</a>
                            </div>
                        </div>

                    </div>


                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- <section class="home-scroll-section">
            <div class="container-fluid">
                <div class="scroll-section">
                    <div class="scroll-content">
                        <div class="item">CULTURAL DEVELOPMENT</div>
                        <div class="item">EDUCATION</div>
                        <div class="item">EMPOWERMENT</div>
                        <div class="item">PHILANTHROPY</div>
                        <div class="item">CULTURAL DEVELOPMENT</div>

                        <div class="item">CULTURAL DEVELOPMENT</div>
                        <div class="item">EDUCATION</div>
                        <div class="item">EMPOWERMENT</div>
                        <div class="item">PHILANTHROPY</div>
                        <div class="item">CULTURAL DEVELOPMENT</div>
                    </div>
                </div>


            </div>
        </section> -->
        <section class="home-scroll-section">
            <div class="container-fluid">
                <div class="scroll-section">
                    <div class="scroll-content">

                        <div class="item">
                            CULTURAL DEVELOPMENT
                            <i class="fa-solid fa-landmark"></i>
                        </div>

                        <div class="item">
                            EDUCATION
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>

                        <div class="item">
                            EMPOWERMENT
                            <i class="fa-solid fa-hand-fist"></i>
                        </div>

                        <div class="item">
                            PHILANTHROPY
                            <i class="fa-solid fa-heart"></i>
                        </div>

                        <!-- Duplicate for loop -->
                        <div class="item">
                            CULTURAL DEVELOPMENT
                            <i class="fa-solid fa-landmark"></i>
                        </div>

                        <div class="item">
                            EDUCATION
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>

                        <div class="item">
                            EMPOWERMENT
                            <i class="fa-solid fa-hand-fist"></i>
                        </div>

                        <div class="item">
                            PHILANTHROPY
                            <i class="fa-solid fa-heart"></i>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="home-welcome-bg">
            <div class="container-fluid">
                <div class="home-head">
                    <h2 class="scribble-heading">Enlightens <span>Epoch</span></h2>

                    <div class="scribble-wrapper">
                        <svg class="scribble-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 275 73">
                            <path id="scribble-path"
                                d="M 1.677 56.035 L 54.513 23.467 C 55.4 22.92 56.569 23.762 56.076 24.593 C 48.843 36.777 38.596 56.035 43.525 56.035 C 48.508 56.035 69.627 37.963 81.926 26.806 C 82.671 26.13 84.005 26.763 83.724 27.656 C 81.441 34.943 78.511 45.165 79.394 45.913 C 80.354 46.726 97.202 34.964 107.416 27.615 C 108.18 27.065 109.338 27.66 109.131 28.49 C 107.615 34.547 105.846 43.069 107.466 42.612 C 109.648 41.996 131.046 26.453 138.347 24.361 C 139.004 24.172 139.501 24.692 139.313 25.257 C 137.572 30.496 135.165 39.26 137.097 39.752 C 138.987 40.231 155.626 31.414 165.927 25.729 C 166.789 25.253 167.874 26.013 167.484 26.821 C 163.789 34.47 158.795 45.913 161.01 45.913 C 164.129 45.913 201.038 34.911 254.323 1.685"
                                stroke="#005b66" stroke-width="4" stroke-linecap="round" fill="none">
                            </path>
                        </svg>
                    </div>

                </div>

                <div class="row justify-content-center pb-5">
                    <div class="col-md-7">
                        <h5>“Al Madeena emerged as the epitome of educational excellence and personality development,
                            striving to unlock the true potential of modern education through visionary ideals. Having
                            originated in the tranquil setting of Manjanady village, this educational movement blends
                            contemporary and spiritual wisdom, dedicated to preserving the rich cultural heritages which
                            are at risk of fading away. As this journey spans over three decades, Al Madeena continues
                            to surpass educational aspirations, ensuring a secure future for every student and parent.”
                        </h5>
                    </div>
                </div>


                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <img src="img/home-welcome-bg.png" alt="" class="img-fluid w-100">
                    </div>
                </div>



            </div>
        </section>
        <section class="home-snd-bg">
            <div class="container">
                <h2>Welcome to <span>Al Madeena Islamic Complex</span></h2>
                <div class="row">
                    <div class="col-md-5">
                        <video src="img/home-video.mp4" autoplay muted loop playsinline></video>
                    </div>
                    <div class="col-md-7">
                        <h5><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" focusable="false"
                                color="rgb(1, 99, 122)"
                                style="user-select: none; width: 10%; height: 100%; display: inline-block; fill: rgb(1, 99, 122); color: rgb(1, 99, 122); flex-shrink: 0;">
                                <g color="rgb(1, 99, 122)" weight="duotone">
                                    <path
                                        d="M216,70.39v112c-72,59.69-104-56.47-176,3.22v-112C112,13.92,144,130.08,216,70.39Z"
                                        opacity="0.2"></path>
                                    <path
                                        d="M222.16,177.25a8,8,0,0,1-1,11.25c-17.36,14.39-32.86,19.5-47,19.5-18.58,0-34.82-8.82-49.93-17-25.35-13.76-47.24-25.64-79.07.74a8,8,0,1,1-10.22-12.31c40.17-33.28,70.32-16.92,96.93-2.48,25.35,13.75,47.24,25.63,79.07-.74A8,8,0,0,1,222.16,177.25Zm-11.27-57c-31.83,26.38-53.72,14.5-79.07.74-26.61-14.43-56.76-30.79-96.93,2.49a8,8,0,0,0,10.22,12.31c31.83-26.38,53.72-14.5,79.07-.74,15.11,8.19,31.35,17,49.93,17,14.14,0,29.64-5.11,47-19.5a8,8,0,1,0-10.22-12.31ZM45.11,79.8c31.83-26.37,53.72-14.49,79.07-.74,15.11,8.2,31.35,17,49.93,17,14.14,0,29.64-5.12,47-19.5a8,8,0,1,0-10.22-12.31c-31.83,26.38-53.72,14.5-79.07.74C105.21,50.58,75.06,34.22,34.89,67.5A8,8,0,1,0,45.11,79.8Z">
                                    </path>
                                </g>
                            </svg> About Us</h5>
                        <p>Al Madeena stands as a beacon of educational excellence and moral upliftment, committed to empowering individuals and strengthening communities, especially among the underprivileged sections of society in South Canara. With a strong foundation built on visionary ideals, the institution strives to unlock the true potential of modern education while preserving cultural and spiritual values</p>
                        <p>Emerging from humble beginnings, Al Madeena has grown into a respected educational movement that blends contemporary learning with ethical guidance. Rooted in a mission of social responsibility, the organization focuses on nurturing knowledge, character, and leadership among students, ensuring they are well-prepared to face the challenges of the modern world.</p>
                      


                    </div>

                </div>


            </div>
        </section>
        <section class="home-counter-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="counter-box">
                            <img src="img/icons/count-1.png" alt="" class="img-fluid">
                            <h4><span class="counter">10000</span><i class="fa-solid fa-plus"></i></h4>
                            <p>Happy Students Taught</p>

                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="counter-box">
                            <img src="img/icons/count-3.png" alt="" class="img-fluid">

                            <h4><span class="counter">32</span><i class="fa-solid fa-plus"></i></h4>
                            <p>Years</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="counter-box">
                            <img src="img/icons/count-q.png" alt="" class="img-fluid">

                            <h4><span class="counter">100</span><i class="fa-solid fa-plus"></i></h4>
                            <p>Certified Teacher</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-founder-message">
            <div class="container">
                <h2 class="text-center">Message</h2>
                <h3 class="text-center">Founder's Message</h3>
                <p class="text-center">Discover our founder’s vision, inspiring students through decades of spiritual
                    and academic excellence.</p>
                    
                    <div class="row mt-5">
    <div class="col-md-4">
        <div class="founder-div"><img class="founder-image" alt=""
                src="img/founder.jpg">
            <div class="founder-details">
                <h4 class="founder-name">P.M. Abbas Musliyar</h4>
                <p class="founder-p"> ( Founder, Almadeena)</p>
            </div>
        </div>
    </div>
    <div class="col-md-8 my-auto">
        <div class="founder-content">
            <p class="founder-subtitle">P.M. Abbas Musliyar, popularly known as Sharaf Ulama, was a distinguished Islamic scholar whose lifelong dedication greatly contributed to the social, educational, and spiritual progress of the Muslim community in Karnataka. Revered for his wisdom, humility, and leadership, he emerged as a guiding light for generations seeking knowledge and moral direction.</p>
            <p>As the founder and guiding force behind the Al Madeena Institutions, Sharaf Ulama envisioned a society empowered through education, grounded in faith, and driven by compassion. His unwavering commitment to community development played a pivotal role in uplifting individuals and families through structured learning, spiritual guidance, and social responsibility.</p>
            <p>With a profound love for the Prophet Muhammad (PBUH) and deep scholarly expertise, he nurtured hundreds of devoted students and followers. His teachings emphasized not only religious understanding but also ethical living, unity, and service to humanity. Through his leadership, he became an ideal role model for Sunni Muslims and remained actively involved in strengthening religious awareness, educational growth, and social welfare initiatives.</p>
            <p>Sharaf Ulama’s spiritual insight, educational vision, and organizational excellence transformed his aspirations into a lasting reality. The establishment of Al Madeena stands today as a beacon of knowledge, discipline, and compassion — a living legacy that continues to inspire and serve communities with dedication and purpose.</p>
          
        </div>
    </div>
</div>
                <!--<div class="row justify-content-center pt-5">-->
                <!--    <div class="col-md-6 Morder-2">-->
                <!--        <h4>The Visionary Insights of <br>Sharaful Ulama</h4>-->
                <!--        <h5>P.M. Abbas Musliyar, Popularly known as Sharaf Ulama, was a renowned scholar who made significant contributions to the progress of the Muslim community in Karnataka. He was the founder and symbol of the Al Madeena institutions. His unwavering dedication to community advancement played a vital role in achieving social progress. With his deep love of Prophet (PBUH), scholarly expertise, hundreds of his obedient disciples, and unwavering commitment to his community, he served as an idealist for Sunni Muslims and was actively engaged in their religious, educational, and social well-being. Through his spiritual, educational, and organizational experiences, his vision became a reality, giving birth to Al Madeena, a beacon of knowledge and compassion.</h5>-->
                <!--    </div>-->
                <!--    <div class="col-md-3 Morder-1">-->
                <!--        <img src="img/founder.jpg" class="img-fluid rounded-3 mb-3">-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </section>
        <section class="home-courses">
            <div class="container">
                <h2 class="text-center">Courses</h2>
                <h3 class="text-center">Are we building institutes that inspire,<br> learning, growth, and positive
                    change?</h3>
                <p class="text-center mb-5">we are committed to creating institutes that empower individuals through
                    quality
                    education and holistic development. </p>

                <div class="home-course-box">
                    <img src="img/course-1.JPG" class="img-fluid">
                    <div class="cource-content-box">
                        <h2>Privileged School</span><span> (orphanage)</span></h2>
                        <p>We provide free, high-quality education with accommodation and empowerment programs
                            for holistic student development.</p>
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <p><a href="#" class="btn-two-full">Admissions</a></p>
                            </div>
                            <div class="col-md-6 col-6">
                            <p><a href="#" class="btn-two">institutionst</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="home-course-box">
                    <img src="img/course-2.JPG" class="img-fluid">
                    <div class="cource-content-box">
                        <h2> Center for Holy <span>Verses</span></h2>
                        <p>A 4-year program specializing in Quran memorization, Tajwid, and accurate recitation under
                            expert guidance.</p>
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <p><a href="#" class="btn-two-full">Admissions</a></p>
                            </div>
                            <div class="col-md-6 col-6">
                               <p><a href="#" class="btn-two">institutionst</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="home-course-box">
                    <img src="img/course-3.JPG" class="img-fluid">
                    <div class="cource-content-box">
                        <h2>Hibr Hall Of <span> Excellence(Dawa)</span></h2>
                        <p>We nurture young children in an Islamic environment, promoting Quranic learning and positive
                            personal growth.</p>
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <p><a href="#" class="btn-two-full">Admissions</a></p>
                            </div>
                            <div class="col-md-6 col-6">
                              <p><a href="#" class="btn-two">institutionst</a></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="home-course-box">
                    <img src="img/course-4.JPG" class="img-fluid">
                    <div class="cource-content-box">
                        <h2>English and <span>Kannda </span><span>Medium High</span><span> School</span></h2>
                        <p>Providing quality education that nurtures growth through both English and Kannada medium
                            learning.</p>
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <p><a href="#" class="btn-two-full">Admissions</a></p>
                            </div>
                            <div class="col-md-6 col-6">
                                <p><a href="#" class="btn-two">institutionst</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="home-course-box">
                    <img src="img/course-3.JPG" class="img-fluid">
                    <div class="cource-content-box">
                        <h2>Al Madeena Boys <span> PU & Degree Collegen</span></h2>
                        <p>Shaping future leaders through quality education, discipline, and strong Islamic values.</p>
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <p><a href="#" class="btn-two-full">Admissions</a></p>
                            </div>
                            <div class="col-md-6 col-6">
                              <p><a href="#" class="btn-two">institutionst</a></p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </section>

        <section class="home-events-bg">
            <div class="container">
                <h2 class="text-center">Latest Update</h2>
                <h3 class="text-center">What are our latest events<br> and announcements?</h3>
                <p class="text-center mb-5">Stay updated with our newest programs, community gatherings, and important
                    organizational updates. </p>

                <div class="row">

                    <div class="col-md-6">
                        <div class="home-news-box">
                            <img src="img/news/news1.jpg" class="img-fluid">
                            <div class="home-news-content-box">
                                <a href="events.php">
                                    <h4>Major Platform Update Introduces Enhanced User Dashboard</h4>
                                    <h5>Read more <span>Jun 4, 2025</span></h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="home-news-box">
                            <img src="img/news/news2.jpg" class="img-fluid">
                            <div class="home-news-content-box">
                                <a href="events.php">
                                    <h4>Community Event Announced: Join Our Summer Networking Mixer!</h4>
                                    <h5>Read more <span>Oct 8, 2025</span></h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="home-news-box">
                            <img src="img/news/news3.jpg" class="img-fluid">
                            <div class="home-news-content-box">
                                <a href="events.php">
                                    <h4>New Mobile App Version Released With Dark Mode Feature</h4>
                                    <h5>Read more <span>Oct 8, 2025</span></h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="home-news-box">
                            <img src="img/news/news4.jpg" class="img-fluid">
                            <div class="home-news-content-box">
                                <a href="events.php">
                                    <h4>City Unveils Green Spaces Initiative for Summer 2024</h4>
                                    <h5>Read more <span>Jul 23, 2025</span></h5>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </section>
        <section class="home-events-bg">
            <div class="container">
                <h2 class="text-center">Social Upliftment</h2>
                <h3 class="text-center">Making a difference where it matters most.</h3>
                <p class="text-center mb-5">Follow Our Journey Of Service, Support, And Social Transformation.</p>

                <div class="swiper mySwiper newsSwiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="card-slide">
                                <img src="img/events/events1.jpg" alt="">
                                <div class="overlay">
                                    <h4>Market Research</h4>
                                    <p>Make informed decisions with in-depth market insights.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card-slide">
                                <img src="img/events/events2.jpg" alt="">
                                <div class="overlay">
                                    <h4>Digital Transformation</h4>
                                    <p>Leverage cutting-edge technology to modernize your business.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card-slide">
                                <img src="img/events/events3.jpg" alt="">
                                <div class="overlay">
                                    <h4>Business Consulting</h4>
                                    <p>Get strategic guidance tailored to your goals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-slide">
                                <img src="img/events/events4.jpg" alt="">
                                <div class="overlay">
                                    <h4>Digital Transformation</h4>
                                    <p>Leverage cutting-edge technology to modernize your business.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card-slide">
                                <img src="img/events/events3.jpg" alt="">
                                <div class="overlay">
                                    <h4>Business Consulting</h4>
                                    <p>Get strategic guidance tailored to your goals.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>


            </div>
        </section>

        <section class="home-projects-bg">
            <div class="container-fluid">
                <h2 class="text-center">Project</h2>
                <h3 class="text-center">What is the Green Madeena Project?</h3>
                <p class="text-center mb-5">Stay updated for Upcomming Project</p>
                <div class="home-project-bx">
                    <div class="row">
                        <div class="project-img-wrap col-md-6">
                            <img src="img/home-project-side-bg.png" class="zoom-inside">
                        </div>

                        <div class="col-md-6">
                            <p><a href="#" class="btn-one">Project will complete at 2028</a></p>
                            <h5>Eco-Friendly Green Madeena</h5>
                            <p>Green Madeena inspires nature-friendly living with sustainable choices.</p>
                        </div>

                    </div>

                </div>
                <div class="row project-section">
                    <div class="col-md-4 mb-3">
                        <div class="inner-proect-bx">
                            <img src="img/project1.png" alt="" class="img-fluid">
                            <h5>Green Madeena</h5>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="inner-proect-bx">
                            <img src="img/project2.png" alt="" class="img-fluid">
                            <h5>Green Madeena</h5>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="inner-proect-bx">
                            <img src="img/project3.png" alt="" class="img-fluid">
                            <h5>Green Madeena</h5>
                        </div>
                    </div>
                </div>



            </div>
        </section>
        <section class="home-projects-bg">
            <div class="container">
                <h2 class="text-center">Photos</h2>
                <h3 class="text-center">Gallery</h3>
                <p class="text-center mb-5">Snapshots of unforgettable Event</p>
                <div class="scroll-mask">
                    <div class="scroll-wrapper">
                        <div class="scroll-column">
                            <div class="scroll-track">
                                <img src="img/1.jpg">
                                <img src="img/2.jpg">
                                <img src="img/3.jpg">
                                <img src="img/1.jpg">
                                <img src="img/1.jpg">
                                <img src="img/2.jpg">
                                <img src="img/3.jpg">
                                <img src="img/1.jpg"><!-- duplicate for smooth loop -->
                            </div>
                        </div>

                        <div class="scroll-column reverse">
                            <div class="scroll-track">
                                <img src="img/4.jpg">
                                <img src="img/5.jpg">
                                <img src="img/6.jpg">
                                <img src="img/4.jpg">
                                <img src="img/4.jpg">
                                <img src="img/5.jpg">
                                <img src="img/6.jpg">
                                <img src="img/4.jpg">
                            </div>
                        </div>

                        <div class="scroll-column">
                            <div class="scroll-track">
                                <img src="img/7.jpg">
                                <img src="img/8.jpg">
                                <img src="img/9.jpg">
                                <img src="img/7.jpg">
                                <img src="img/7.jpg">
                                <img src="img/8.jpg">
                                <img src="img/9.jpg">
                                <img src="img/7.jpg">
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </section>
        <section class="home-contact-bg">
            <div class="container">
                <h2>Contact</h2>
                <h3>Say Hello to <span>Bright Future</span></h3>
                <div class="row g-4">

                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <div class="contact-card">
                            <span class="card-no">01</span>
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <h5>CALL US ON</h5>
                            <p>+91 9900 651 580</p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-4">
                        <div class="contact-card">
                            <span class="card-no">02</span>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h5>EMAIL US AT</h5>
                            <p>almadeena313@gmail.com</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-4">
                        <div class="contact-card">
                            <span class="card-no">03</span>
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h5>REACH OUT US</h5>
                            <p>
                                Manjanady, Naringana,<br>
                                Bantwal TQ, 575018,<br>
                                Mangalore, Karnataka
                            </p>
                        </div>
                    </div>

                </div>

                <div class="row  mt-5">
                    <div class="col-md-6">
                        <div class="contact-form-bg">
                            <form method="post" onsubmit="return validateFormOnSubmit(this);" action="send.php">
                                <!-- <form method="post" onsubmit="return validateFormOnSubmit(this);" action="enquiry.php"> -->
                                <div class="form-group clearfix">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Name" autocomplete="off" required=""
                                                fdprocessedid="yqvmer">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <input class="form-control" id="contactNumber" name="contactNumber"
                                                placeholder="Mobile Number" required="" pattern="[0-9]{10,15}"
                                                onkeypress="return isNumberKey(event);" autocomplete="off"
                                                fdprocessedid="o0zknb">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="E-mail ID" autocomplete="off" required=""
                                                fdprocessedid="uff4ou">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <textarea id="comments" name="comments" class="form-control"
                                                placeholder="Message" type="text" rows="5" required=""></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="hidden" id="subject" name="subject"
                                                value="Contact Anugraha Education Trust">
                                            <input type="hidden" id="ProspectID" name="ProspectID" value="">
                                            <button class="submit-btn" type="submit"
                                                fdprocessedid="4n8qut">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d15563.460399080226!2d74.9128662!3d12.7872672!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d12.787267199999999!2d74.9128662!5e0!3m2!1sen!2sin!4v1765611527038!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-scroll-section">
            <div class="container-fluid">
                <div class="scroll-section">
                    <div class="scroll-content">

                        <div class="item">
                            CULTURAL DEVELOPMENT
                            <i class="fa-solid fa-landmark"></i>
                        </div>

                        <div class="item">
                            EDUCATION
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>

                        <div class="item">
                            EMPOWERMENT
                            <i class="fa-solid fa-hand-fist"></i>
                        </div>

                        <div class="item">
                            PHILANTHROPY
                            <i class="fa-solid fa-heart"></i>
                        </div>

                        <!-- Duplicate for loop -->
                        <div class="item">
                            CULTURAL DEVELOPMENT
                            <i class="fa-solid fa-landmark"></i>
                        </div>

                        <div class="item">
                            EDUCATION
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>

                        <div class="item">
                            EMPOWERMENT
                            <i class="fa-solid fa-hand-fist"></i>
                        </div>

                        <div class="item">
                            PHILANTHROPY
                            <i class="fa-solid fa-heart"></i>
                        </div>

                    </div>
                </div>
            </div>
        </section>






        <!-- <?php //include("footer-top-common.php") ?> -->
        <?php include("footer.php") ?>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <?php include("footer-common-js.php") ?>


        <script>
            const cards = document.querySelectorAll('.home-course-box');

            window.addEventListener('scroll', () => {
                const scrollPos = window.scrollY + window.innerHeight * 0.55;

                cards.forEach(card => {
                    if (scrollPos >= card.offsetTop) {
                        card.classList.add('show');
                    }
                });
            });



        </script>






    </div>
</body>

</html>