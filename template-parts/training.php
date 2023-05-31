<?php

/**
 * The template for displaying the home page
 *  
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 *  Template Name: training
 * @package jitutheme
 */

get_header();

?>
<!-- BANNER -->
<section style="box-shadow: 0px 6px 9px 5px rgba(0, 0, 0, 0.1);">
    <div class="container-fluid banner d-flex align-items-center" style="height:90vh">
        <div class="container">
            <div class="row align-items-end landing">
                <div class="col-sm-12 col-lg-6 col-md-6 landingHeader" style="text-align: right;">
                    <h1> <span class="redtext">Training </span> </h1>
                    <p style="font-size: 20px;">
                    An intensive and immersive <br> 3-month program      
                    </p>
                    <button class="button" id="trainingbtn">View Our Upcoming Program Calendar</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MID NAV -->
<section class="section pb-5 trainingContent">
    <div class="container">
     
         <h3 class="threetraining">
            Our three-month training program is designed to provide an intensive and immersive learning experience. The program is taught by experienced instructors who have a deep understanding of these technologies and have been working in the industry for many years. We believe in a hands-on approach to learning, so you will have plenty of opportunities to practice your skills and work on real-world projects.
        </h3>
       

        <div class="row mt-5 mb-5">
            <div class="col-md-6 col-sm-12">
             
                <div class="row align-items-start landing">
                    <div class="col me-5">
                        <h4 class="training-desc">
                            <p class="trainingp1" style="inline-size: 530px; font-size: 20px;">
                            We believe in investing in our trainees and giving them the support they need to succeed after they complete our training program. Many of our graduates are placed into software development roles with our company after completing our training program. We are proud to have a talented team of developers who are passionate about what they do, and we are committed to fostering a culture of collaboration and innovation.
                            </p>
                        </h4>
                        <p class="training-desc trainingp2" style="inline-size: 528px; font-size: 20px;">
                        If you are ready to take the next step in your career and become a full stack web developer, we invite you to join our training program.
                        </p>
                        <button class="cont">CONTACT US</button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/map.webp" class="img-thumbnail world-map" alt="">

            </div>
        </div>
    </div>
</section>

<!-- What we teach section -->
<section class="teach">
    <div class="testimonials">
        <div class="container">
            <div class="row py-5 text-center">
                <div class="col-12 d-flex flex-column align-items-center">
                    <h4 class="redtext">WHAT WE TEACH</h4>
                    <h4 class="py-3 col-lg-6 col-sm-12 resources" style="font-size: 20px; inline-size: 740px;">
                    In order to ensure that our resources are competitive in the market, we teach market-based technologies and professional skills.
                    </h4>
                </div>
                
                <div class="container">
                    <div class="row justify-content-center row-cols-2 row-cols-lg-5 g-5 g-lg-3">
                        <div class="col">
                            <div class="stackIcon">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/React-icon.svg.webp" class="img-thumbnail" alt="">
                            </div>
                            <div class="stack">
                                <p style="font-size: 20px;">React/Node Express Js</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="stackIcon">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/AngularJS-Icon.webp" class="img-thumbnail" alt="">
                            </div>
                            <div class="stack">
                                <p style="font-size: 20px;">Angular/Node Express Js</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="stackIcon">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/wordpress.webp" class="img-thumbnail" alt="">
                            </div>
                            <div class="stack">
                                <p style="font-size: 20px;">Wordpress</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="stackIcon">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/NET_logo.webp" class="img-thumbnail" alt="">
                            </div>
                            <div class="stack">
                                <p style="font-size: 20px;">.NET</p>
                            </div>
                        </div>
                    </div>

                <div>
                <div class="d-flex flex-column gap-20px" style="padding-top:25px">
                    <div class="justify-content-center checkdiv1 rightIcon" style="height:50px">
                            <img class="plus check1" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/check-solid.svg" 
                            class="img-thumbnail " alt="" style="margin-bottom: 10px; margin-right: 10px; margin-left: 24px;">
                            <p style="font-size: 20px;">
                                Competitive market rates and affordable resources
                            </p>
                    </div>
                    
                    <div class="justify-content-center checkdiv2 rightIcon" style="height:42px">
                            <img class="plus check2"  src="<?php echo get_template_directory_uri() ?>/assets/img/icons/check-solid.svg" 
                            class="img-thumbnail" alt="" style="margin-bottom: 10px; margin-right: 10px";>
                            <p class="checkp1" style="font-size: 20px;">
                                Effective communication and professional skills
                            </p>
                    </div>
                    <div class="d-flex justify-content-center checkdiv3 rightIcon" style="height:54px">
                        <div>
                            <img class="plus check3" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/check-solid.svg" 
                            class="img-thumbnail" alt="" style="margin-bottom: 10px; margin-right: 10px; margin-left: 58px;">
                        </div>
                        <div>
                        <div>
                            <p class="checkp2" style="font-size: 20px;">
                                Resources with the ability to learn, unlearn and relearn
                            </p>
                        </div>
                    </div>
                </div>

                <!-- sample -->
           

                            <div></div>
                            <div></div>
                        </div>

                    </div>
                </div>             

            </div>
        </div>
    </div>
</section>

<!-- Our program calendar -->
<section class=" pb-5 py-5 bg-program" >
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-6 col-sm-12">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/calendar-removebg-preview.png" class="calendar-img " alt="">
            </div>
            <div class="col-md-6 col-sm-12">

                <div class="row align-items-start landing">
                    <div class="col">
                        <h1 class="redtext">Our Program Calendar</h1>
                        
                        <p style="font-size: 20px; inline-size: 445px;" class="programContent" >
                        During our three-month training program, cohort trainees are equipped with quality resources and achieve global standard results in a competitive environment.
                        </p>
                    </div>
                </div>
                <button class="button ">VIEW PROGRAM DATES</button>              
            </div>
        </div>
    </div>
</section>

<!-- Attachments -->
<section class=" pb-5 py-5 program">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-6 col-sm-12">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/map.webp" class="img-thumbnail world-map" alt="">
            </div>

            <div class="col-md-6 col-sm-12">

                <div class="row align-items-start landing">
                    <div class="col">
                        <h1 class="redtext">Attachments</h1>
                        
                        <p style="font-size: 20px; inline-size: 680px;" class="attchmentContent" >
                        Our attachment training program focuses on full stack web development using Angular and React. These are two of the most popular and powerful web development frameworks used by top companies all over the world. Our comprehensive curriculum covers everything you need to know to become a proficient full stack developer, from front-end design to back-end architecture and everything in between.
                        </p>
                    </div>
                    <button class="button" id="attchmentbtn">VIEW PROGRAM DATES</button>              
                </div>
            </div>
        </div>
    </div>
</section>



<?php
get_sidebar();
get_footer();