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
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <h1> <span class="redtext">Training </span> </h1>
                    <p>
                    An intensive and immersive 3-month program      
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
            Our three-month training program is designed to provide an intensive and immersive learning experience. The program is taught by experienced instructors who have a deep understanding of these technologies and have been working in the industry for many years. We believe in a hands-on approach to learning, so you will have plenty of opportunities topractice your skills and work on real-world projects.
        </h3>
       

        <div class="row mt-5 mb-5">
            <div class="col-md-6 col-sm-12">
             
                <div class="row align-items-start landing">
                    <div class="col me-5">
                        <h4 class="training-desc">
                            <p>
                            We believe in investing in our trainees and giving them the support they need to succeed after they complete our training program. Many of our graduates are placed into software development roles with our company after completing our training program. We are proud to have a talented team of developers who are passionate about what they do, and we are committed to fostering a culture of collaboration and innovation.
                            </p>
                        </h4>
                        <p class="training-desc">
                        If you are ready to take the next step in your career and become a full stack web developer, we invite you to join our training program.
                        </p>
                        <button>CONTACT US</button>
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
                    <p class="py-3 col-lg-6 col-sm-12">
                    In order to ensure that our resources are competitive in the market, we teach market-based technologies and professional skills.
                    </p>
                </div>
                
                <div class="container">
                    <div class="row justify-content-center row-cols-2 row-cols-lg-5 g-5 g-lg-3">
                        <div class="col">
                            <div class="stackIcon">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/React-icon.svg.webp" class="img-thumbnail" alt="">
                            </div>
                            <div class="stack">
                                <p>React/Node Express Js</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="stackIcon">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/AngularJS-Icon.webp" class="img-thumbnail" alt="">
                            </div>
                            <div class="stack">
                                <p>Angular/Node Express Js</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="stackIcon">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/wordpress.webp" class="img-thumbnail" alt="">
                            </div>
                            <div class="stack">
                                <p>Wordpress</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="stackIcon">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/NET_logo.webp" class="img-thumbnail" alt="">
                            </div>
                            <div class="stack">
                                <p>.NET</p>
                            </div>
                        </div>
                    </div>

                <div>
                <div class="d-flex flex-column ">
                    <div class="justify-content-center rightIcon">
                            <img class="plus" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/check-solid.svg" 
                            class="img-thumbnail " alt="" style="margin-bottom: 10px; margin-right: 10px; margin-left: 24px;">
                            <p>
                                Competitive market rates and affordable resources
                            </p>
                    </div>
                    
                    <div class="justify-content-center rightIcon">
                            <img class="plus"  src="<?php echo get_template_directory_uri() ?>/assets/img/icons/check-solid.svg" 
                            class="img-thumbnail" alt="" style="margin-bottom: 10px; margin-right: 10px";>
                            <p>
                                Effective communication and professional skills
                            </p>
                    </div>
                    <div class="d-flex justify-content-center rightIcon">
                        <div>
                            <img class="plus" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/check-solid.svg" 
                            class="img-thumbnail" alt="" style="margin-bottom: 10px; margin-right: 10px; margin-left: 58px;">
                        </div>
                        <div>
                        <div>
                            <p>
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
<section class="section pb-5 py-5 bg-program" >
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-6 col-sm-12">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/calendar-removebg-preview.png" class="world-map" alt="">
            </div>
            <div class="col-md-6 col-sm-12">

                <div class="row align-items-start landing">
                    <div class="col">
                        <h1 class="redtext">Our Program Calendar</h1>
                        
                        <p class="programContent" >
                        During our three-month training program, cohort trainees are equipped with quality resources and achieve global standard results in a competitive environment.
                        </p>
                    </div>
                </div>
                <button class="button">VIEW PROGRAM DATES</button>              
            </div>
        </div>
    </div>
</section>

<!-- Attachments -->
<section class="section pb-5 py-5 program">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-6 col-sm-12">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/map.webp" class="img-thumbnail world-map" alt="">
            </div>

            <div class="col-md-6 col-sm-12">

                <div class="row align-items-start landing">
                    <div class="col">
                        <h1 class="redtext">Attachments</h1>
                        
                        <p class="attchmentContent" >
                        Our attachment training program focuses on full stack web development using Angular and React. These are two of the most popular and powerful web development frameworks used by top companies all over the world. Our comprehensive curriculum covers everything you need to know to become a proficient full stack developer, from front-end design to back-end architecture and everything in between.
                        </p>
                    </div>
                    <button class="button" id="attchmentbtn">VIEW PROGRAM DATES</button>              
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hear from our customer -->
<!-- <section class ="container">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <div type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></div>
    <div type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></div>
    <div type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></div>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active d-flex justify-content-center p-10">
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus nostrum voluptatem obcaecati rerum, cum minus sed ducimus corrupti consectetur minima ratione dolorem deserunt hic mollitia doloremque repudiandae quaerat molestiae recusandae. Maiores reiciendis sint accusantium nisi aut voluptatibus corrupti inventore expedita eligendi, eum quasi, magnam pariatur eaque dolores possimus et numquam laboriosam suscipit qui nostrum excepturi, nemo quas nulla minus. Aspernatur quia quos facere animi ut nulla iste sapiente at beatae, numquam dicta tempora unde, voluptates explicabo corporis consequuntur sequi? Hic temporibus quia dolorum beatae quisquam ullam accusantium aperiam ratione consequatur perferendis laboriosam qui dolores voluptas, architecto porro sunt molestiae recusandae.
        </p>
    </div>
    <div class="carousel-item d-flex justify-content-center p-10">
    <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus nostrum voluptatem obcaecati rerum, cum minus sed ducimus corrupti consectetur minima ratione dolorem deserunt hic mollitia doloremque repudiandae quaerat molestiae recusandae. Maiores reiciendis sint accusantium nisi aut voluptatibus corrupti inventore expedita eligendi, eum quasi, magnam pariatur eaque dolores possimus et numquam laboriosam suscipit qui nostrum excepturi, nemo quas nulla minus. Aspernatur quia quos facere animi ut nulla iste sapiente at beatae, numquam dicta tempora unde, voluptates explicabo corporis consequuntur sequi? Hic temporibus quia dolorum beatae quisquam ullam accusantium aperiam ratione consequatur perferendis laboriosam qui dolores voluptas, architecto porro sunt molestiae recusandae.
        </p>    </div>
    <div class="carousel-item d-flex justify-content-center p-10">
    <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus nostrum voluptatem obcaecati rerum, cum minus sed ducimus corrupti consectetur minima ratione dolorem deserunt hic mollitia doloremque repudiandae quaerat molestiae recusandae. Maiores reiciendis sint accusantium nisi aut voluptatibus corrupti inventore expedita eligendi, eum quasi, magnam pariatur eaque dolores possimus et numquam laboriosam suscipit qui nostrum excepturi, nemo quas nulla minus. Aspernatur quia quos facere animi ut nulla iste sapiente at beatae, numquam dicta tempora unde, voluptates explicabo corporis consequuntur sequi? Hic temporibus quia dolorum beatae quisquam ullam accusantium aperiam ratione consequatur perferendis laboriosam qui dolores voluptas, architecto porro sunt molestiae recusandae.
        </p>    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section> -->

<?php
get_sidebar();
get_footer();