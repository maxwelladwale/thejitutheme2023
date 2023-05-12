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
    <div class="container-fluid banner d-flex align-items-center" style="height:90vh">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <h1 class="banner_h1">Augment your team <span class="redtext">accelerate </span> your success!</h1>
                    <p>
                        At THE Jitu, we offer comprehensive suite of services that helps your organization reduce costs, increase productivity, and gain access to top-notch talent. We take pride in offering customized and personalized solutions that cater to the unique needs of each company we work with.
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
<section class="section pb-5">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-6 col-sm-12">
                <h3 class="redtext">Our Services</h3>
                <p class="mt-3"> THE Jitu offers extra talent needed in Front Office and Back Office services and Technology Solutions. In addition, The Jitu offers a training program to empower young software developers in Kenya.</p>
            </div>

            <div class="col-md-6 col-sm-12">

                <!--Card Begin-->
                <a href="#">
                    <div class="card mb-3 midnav">
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                <!-- <i class="ri-cpu-line"></i>  -->
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/tech.png" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title">Technology</h5>
                                    <p class="card-text">Our IT Services Solutions are designed to help you streamline your operations, reduce costs, and increase efficiency. </p>
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
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/bpo.png" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title">BPO</h5>
                                    <p class="card-text">THE Jitu BPO services are designed to improve customer service and increase efficiency in customer facing operations. </p>
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
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/training.png" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title">TRAINING</h5>
                                    <p class="card-text">THE Jitu offers a unique opportunity for young software developers in Kenya to gain invaluable experience by working in a fully-fledged software company. </p>
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

<!-- Testimonial Section -->
<!-- TODO: Remove inline css-->
<!-- style="box-shadow: 0px 6px 9px 5px rgba(0, 0, 0, 0.1);" -->
<section>
    <div class="testimonials mb-5">
        <div class="container">
            <div class="row py-5 text-center">
                <div class="col-12 d-flex flex-column align-items-center">
                    <h4 class="redtext">Testimonials</h4>
                    <h3>See what our clients have to say</h3>
                    <p class="py-3 col-lg-6 col-sm-12">Don't just take our word for it, hear what our satisfied clients have to say about their experience working with us.</p>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/testimonial.png" class="img-thumbnail" alt="">
                        <div class="card-body">
                            <h5>CFO THH Holdings</h5>
                            <h6>Kyle Fisher</h6>
                            <p>"Using The Jitu resources has allowed our team to better leverage our domestic talent and accomplish more in less time, a win, win." </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/testimonial.png" class="img-thumbnail" alt="">
                        <div class="card-body">
                            <h5>Sr. Consultant AcquireTek </h5>
                            <h6>Samir Vaghmar</h6>
                            <p>"Leveraging The Jitu resources has allowed our team to work more efficiently. We can achieve and deliver the end product much faster while maintaining the same scope of work with reduced costs." </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/testimonial.png" class="img-thumbnail" alt="">
                        <div class="card-body">
                            <h5>4Cloud Services </h5>
                            <h6>Joshua Sarno</h6>
                            <p>"Partnering with The Jitu has allowed our company to expand service levels and decrease response time, enabling us to better focus and expand our client base. Great talent and commitment from everyone involved." </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- WHY THE JITU -->
<?php the_content(); ?>

<!-- THH FAMILY -->
<section class="section">
    <div class="container-fluid mt-5 mb-5">
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
