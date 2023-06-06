<?php

/**
 * The template for displaying the home page
 *  
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 *  Template Name: aboutUs 
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
                    <h1 class="banner_h1">Scale Your IT Workforce <br> with <span class="redtext">THE Jitu </span></h1>
                    <p>
                        A Cost-Effective Staff <br> Augmentation Solution
                </div>
                <div>
                    <button class="button">Contact Us Today</button>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHO WE ARE -->
<section>
    <div class="container text-center mt-5 col-lg-6 col-sm-12">
        <h1 class="redtext">Who We Are</h1>
        <h6 class="mt-5">THE Jitu is an IT Staff augmentation firm that offers scalable remote software engineers to <br>
            businesses. Our engineers are recent computer science graduates and the entire team in <br>
            Nyeri, Kenya is led on-site by American executives.</h6>
        <p class="mt-3">Our purpose is to provide staff augmentation that enables businesses to scale their IT workforce and avoid <br>
            costly onboarding and common pitfalls offshore IT services often bring.</p>
        <p>We provide staff in various fields - Designers, Business and Data Analysts, Software Developers, Project <br>
            Managers, and Customer Support - to guarantee business success.</p>
    </div>
</section>

<!-- OUR PROGRESS  section-->
<section class="container-fluid mt-5" id="our-progress">
    <div class="row container justify-content-center" style="margin:auto;">
        <!-- grid -->
        <div class="col" style="width: 1650px;" id="grid-images">
            <div class="row">
                <div id="first-row">
                    <div class="col-sm-3 col-md-6 mb-5 ">
                        <img src="http://jitu.test/wp-content/themes/thejitutheme2023/assets/img/icons/process_banner.jpg" alt="" class="rounded">
                    </div>
                    <div class="col-sm-9 col-md-6 mb-5 ">
                        <img src="http://jitu.test/wp-content/themes/thejitutheme2023/assets/img/icons/process_banner.jpg" alt="" class="rounded">
                    </div>
                </div>
            </div>


            <div class="row">
                <div id="second-row">
                    <div class="col-sm-3 col-md-6 mb-5 ">
                        <img src="http://jitu.test/wp-content/themes/thejitutheme2023/assets/img/icons/process_banner.jpg" alt="" class="rounded">
                    </div>
                    <div class="col-sm-9 col-md-6 mb-5 ">
                        <img src="http://jitu.test/wp-content/themes/thejitutheme2023/assets/img/icons/process_banner.jpg" alt="" class="rounded">
                    </div>
                </div>
            </div>

            <div class="row">
                <div id="third-row">
                    <div class="col-sm-3 col-md-6 mb-3 ">
                        <img src="http://jitu.test/wp-content/themes/thejitutheme2023/assets/img/icons/process_banner.jpg" alt="" class="rounded">
                    </div>
                    <div class="col-sm-9 col-md-6 mb-3 ">
                        <img src="http://jitu.test/wp-content/themes/thejitutheme2023/assets/img/icons/process_banner.jpg" alt="" class="rounded">
                    </div>
                </div>
            </div>

        </div>


        <div class="col col-sm-9 col-md-6  text-black p-5">
            <div class="progress-text">
                <h2 class="redtext mt-5">Our Progress</h2>
                <p mt-5="">A permanent US executive team based in Nyeri,
                    Kenya provides leadership and deep subject
                    matter expertise in technology and business
                    operations.</p>
                <p mt-3="">We were founded by THH-LLC, a
                    technology-focused holding company in Atlanta,
                    GA with clients ranging from start-ups to global
                    enterprises. One of our objectives has been to
                    make a difference in the Silicon Savanna
                    software industry. In this regard, we have
                    managed to enter into partnerships within the
                    tech community in Kenya and rapidly grow our
                    software development team.</p>
                <button type="button">EXPLORE OUR TECHNOLOGY SERVICES</button>
            </div>
        </div>
    </div>

</section>


<!-- THH FAMILY -->
<section class="section mt-5">
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

<!-- HEAR FROM EMPLOYEES -->
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

<!-- form section -->
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
                    <?php echo do_shortcode('[wpforms id="14"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_sidebar();
get_footer();
