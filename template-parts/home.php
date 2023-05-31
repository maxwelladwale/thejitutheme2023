<?php

/**
 * The template for displaying the home page
 *  
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 *  Template Name: home 
 * @package jitutheme
 */

get_header();

?>
<!-- BANNER -->
<section style="box-shadow: 0px 6px 9px 5px rgba(0, 0, 0, 0.1);">
    <div class="container-fluid banner d-flex align-items-center banns" style="height:90vh">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <h1 class="banner_h1">Augment your team <span class="redtext">accelerate your success!</span></h1>
                    <p>
                        In addition to helping your organization reduce cost, increase productivity, and hire top talent, we offer a comprehensive suite of services. Our mission is to offer customized and personalized solutions that cater to the unique needs of each company we work with. Whether you need front-end or back-end services, technology solutions, or all three, we are here to help.
                    </p>
                    <button class="button">Contact Us Today</button>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </div>
</section>

<!-- MID NAV -->
<section class="section pb-5 services">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-6 col-sm-12">
                <h3 class="redtext">Our Services</h3>
                <p class="mt-3"> Aside from providing extra talent in Front Office and Back Office services, we provide a training program to empower young Kenyan software developers.</p>
            </div>

            <div class="col-md-6 col-sm-12">

                <!--Card Begin-->
                <a href="#">
                    <div class="card mb-3 midnav">
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                <!-- <i class="ri-cpu-line"></i>  -->
                                <img id="services-img" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/technology.png" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title">Technology</h5>
                                    <p class="card-text">Streamline your operations, reduce costs, and increase efficiency with our IT Services Solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <!--Card End-->

                <!--Card Begin-->
                <a href="#">
                    <div class="card mb-3 midnav">
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                <!-- <i class="ri-bar-chart-grouped-fill"></i> -->
                                <img id="services-img" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/outsourcing.png" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title">BPO</h5>
                                    <p class="card-text">Our BPO services improve customer service and increase efficiency in customer-facing operations. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <!--Card End-->

                <!--Card Begin-->
                <a href="#">
                    <div class="card mb-3 midnav">
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                <!-- <i class="ri-graduation-cap-line"></i>  -->
                                <img id="services-img" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/train.png" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title">TRAINING</h5>
                                    <p class="card-text">By working in a fully-fledged software company, young software developers in Kenya can gain invaluable experience. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <!--Card End-->

            </div>
        </div>
    </div>
</section>

<!-- WHY THE JITU -->
<div class="box">
    <?php the_content(); ?>
</div>

<!-- THH FAMILY -->
<section class="section">
    <div class="container-fluid mt-5 mb-5 why-jitu">
        <div class="container text-center ">
            <h3 class="text-uppercase">We are part of the THH-LLC <br> technology family</h3>
            <p>
                THE Jitu is proud to work with a diverse group of partners and clients, ranging from small startups to multinational corporations. We believe in fostering strong, long-term relationships with all of our partners and clients, and strive to provide them with the highest level of service and support. Our commitment to excellence and innovation has earned us a reputation as a trusted and reliable partner in the industry.
            </p>
        </div>
    </div>

    <div class="container">
        <section class="customer-logos slider">
            <div class="slide"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/AcquireTek.png"></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/CarveOS.png"></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/Eclipse Reality logo.png"></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/Griffin Solutions Group.png"></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/k2-data-logo-large.png"></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/AcquireTek.png"></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/CarveOS.png"></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/Eclipse Reality logo.png"></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/Griffin Solutions Group.png"></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/k2-data-logo-large.png"></div>

        </section>
    </div>
</section>

<!-- TESTIMONIALS -->
<div id="carouselExampleIndicators" class="carousel slide testimonials" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button class="indicators active" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
        <button class="indicators" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button class="indicators" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="test-box">
                <p class="testimonial-title">Hear what our clients say about us</p>
                <p class="testimonial-content">"Using THE Jitu resources has allowed our tean to better leverage our domestic talent and accomplish more in less time, a win, a win."</p>
                <p class="testimonial-author">- Kyle Fisher, CFO THH Holdings</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="test-box">
            <p class="testimonial-title">Hear what our clients say about us</p>
                <p class="testimonial-content">"Partnering with THE Jitu has allowed our company to expand service levels and decrease response time, enabling us to better focus and expand our client base. Great talent and commitment from everyone involved."</p>
                <p class="testimonial-author">- Joshua Sarno, 4Cloud Services</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="test-box">
            <p class="testimonial-title">Hear what our clients say about us</p>
                <p class="testimonial-content">"Leveraging THE Jitu resources has allowed our team to work more efficiently. We can achieve and deliver the end product much faster while maintaining the same scope of work with reduced costs."</p>
                <p class="testimonial-author">- Samir Vaghmar, Sr. Consultant AcquireTek</p>
            </div>
        </div>
    </div>
    <button id="previous" class="carousel-control-prev previous" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/back.png">
        </span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button id="next" class="carousel-control-next next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/next.png"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- CONTACT US -->
<section class="section jitucontact">
    <div class="mt-5 pb-5">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-6 col-sm-12">
                    <h2 class="redtext text-uppercase">Let's Discuss Your<br /> Next Project</h2>
                    <p>
                        Fill out the form or call us to set up a meeting. We’ll be happy to discuss your staffing needs in detail, provide estimates, and answer all your questions.
                    </p>
                    <span class="">
                        <i class="ri-phone-fill"></i> (+254) 710 453 693
                    </span>
                </div>
                <div class="col">
                    <?php echo do_shortcode('[wpforms id="7"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
get_sidebar();
get_footer();
