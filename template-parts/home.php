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
            <div class="container-fluid banner vh-100 d-flex align-items-center">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-sm-12 col-lg-6 col-md-6">
                            <h1>Lorem ipsum dolor sit amet <span class="redtext">consectetur</span> adipisicing.</h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ratione eum laborum? Facere temporibus voluptas nemo distinctio inventore omnis repellendus ratione quisquam numquam commodi, cum veritatis quibusdam pariatur. Maiores, aperiam?
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
        <section class="section">
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-md-6 col-sm-12">
                        <h3 class="redtext">Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                        <p class="mt-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam sunt aliquam iure quasi perferendis, esse cumque sequi qui necessitatibus nam dolorem aspernatur fugiat! Nam nihil nostrum explicabo ipsa suscipit nisi.</p>
                    </div>
    
                    <div class="col-md-6 col-sm-12">

                        <!--Card Begin-->
                        <a href="">
                            <div class="card mb-3 midnav">
                            <div class="row">
                                <div class="col-md-2 d-flex align-items-center justify-content-center">
                                    <!-- <i class="ri-cpu-line"></i>  -->
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/icons/tech.png" class="img-thumbnail" alt="">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title">Technology</h5>
                                        <p class="card-text">Card text goes here.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                        <!--Card End-->

                        <!--Card Begin-->
                        <div class="card mb-3 midnav">
                            <div class="row">
                                <div class="col-md-2 d-flex align-items-center justify-content-center">
                                    <!-- <i class="ri-bar-chart-grouped-fill"></i> -->
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/icons/bpo.png" class="img-thumbnail" alt="">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title">BPO</h5>
                                        <p class="card-text">Card text goes here.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Card End-->

                        <!--Card Begin-->
                        <div class="card mb-3 midnav">
                            <div class="row">
                                <div class="col-md-2 d-flex align-items-center justify-content-center">
                                    <!-- <i class="ri-graduation-cap-line"></i>  -->
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/icons/training.png" class="img-thumbnail" alt="">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title">TRAINING</h5>
                                        <p class="card-text">Card text goes here.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <h4 class="redtext">Lorem Ipsum</h4>
                            <h3>Lorem Ipsum dolor sit amet, onsectetuer</h3>
                            <p class="py-3 col-lg-6 col-sm-12">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis tenetur et autem explicabo pariatur itaque tempore voluptatum facere dolore veritatis, sapiente adipisci dolor deserunt sit quia quis deleniti eum ipsam!</p>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="card">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/icons/testimonial.png" class="img-thumbnail" alt="">
                                <div class="card-body">
                                    <h5>Your Topic</h5>
                                    <p>Nulla luctus quam id ipsum tristique, sit amet mollis magna pellentesque. Nulla</p>
                                    <p>Nulla luctus quam id ipsum tristique, sit amet mollis magna pellentesque. Nulla</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="card">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/icons/testimonial.png" class="img-thumbnail" alt="">
                                <div class="card-body">
                                    <h5>Your Topic</h5>
                                    <p>Nulla luctus quam id ipsum tristique, sit amet mollis magna pellentesque. Nulla</p>
                                    <p>Nulla luctus quam id ipsum tristique, sit amet mollis magna pellentesque. Nulla</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="card">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/icons/testimonial.png" class="img-thumbnail" alt="">
                                <div class="card-body">
                                    <h5>Your Topic</h5>
                                    <p>Nulla luctus quam id ipsum tristique, sit amet mollis magna pellentesque. Nulla</p>
                                    <p>Nulla luctus quam id ipsum tristique, sit amet mollis magna pellentesque. Nulla</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHY THE JITU -->
        <?php the_content();?>
        
        <!-- THH FAMILY -->
        <section class="section">
            <div class="container-fluid mt-5 mb-5"> 
                <div class="container text-center ">
                    <h3 class="text-uppercase">We are part of the THH-LLC <br> technology family</h3>
                    <p>THE JITU brings dedicated remote software engineers from Kenya to the world, providing reliability and adaptability across business challenges to empowere IT teams.</p>
                </div>
            </div>

            <div class="container">
                <section class="customer-logos slider">
                    <div class="slide"><img src="<?php echo get_template_directory_uri()?>/assets/img/familylogos/AcquireTek.png"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri()?>/assets/img/familylogos/CarveOS.png"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri()?>/assets/img/familylogos/Eclipse Reality logo.png"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri()?>/assets/img/familylogos/Griffin Solutions Group.png"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri()?>/assets/img/familylogos/k2-data-logo-large.png"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri()?>/assets/img/familylogos/AcquireTek.png"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri()?>/assets/img/familylogos/CarveOS.png"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri()?>/assets/img/familylogos/Eclipse Reality logo.png"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri()?>/assets/img/familylogos/Griffin Solutions Group.png"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri()?>/assets/img/familylogos/k2-data-logo-large.png"></div>
    
                </section>
            </div>
        </section>

        <!-- CONTACT US -->
        <section class="section jitucontact">
            <div class="mt-5 mb-5">
                <div class="container">
                    <div class="row py-5">
                        <div class="col-lg-6 col-sm-12">
                            <h2 class="redtext text-uppercase">Let's Discuss Your<br/> Next Project</h2>
                            <p>
                                Fill out the form or call us to set up a meeting. We’ll be happy to discuss your stang needs in detail, provide estimates, and answer all your questions.
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
