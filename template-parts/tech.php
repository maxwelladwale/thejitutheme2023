<?php

/**
 * The template for displaying the home page
 *  
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 *  Template Name: services 
 * @package jitutheme
 */

get_header();

?>

<section style="box-shadow: 0px 6px 9px 5px rgba(0, 0, 0, 0.1);">
    <div class="container-fluid banner d-flex align-items-center" style="height:90vh">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <h1 class="banner_h1">Augment your team <span class="redtext">accelerate </span> your success!</h1>
                    <p>
                        At THE Jitu, we offer comprehensive suite of services that helps your organization reduce costs, increase productivity, and gain access to top-notch talent. We take pride in offering customized and personalized solutions that cater to the unique needs of each company we work with.
                    </p>
                    <div class=" gapBtn gap-3 mt-5">
                        <button class="button process_banner">review our Processes</button>
                        <button class="button">Contact Us Today</button>
                    </div>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </div>
</section>

<!-- full stack software dev starts -->
<section class="container mt-3">
    <div class="dev">

        <ul class="nav nav-links justify-content-around border-bottom" id="myTabs">
            <li class="nav-item" role="presentation">
                <a class="nav-link active text-black text-danger" href="#Full-Stack">Full-Stack Software Development</a>
            </li>

            <li class="nav-item" role="presentation">
              <a class="nav-link active text-danger text-black" href="#Quality Engineer" role="tab">Quality Engineer/SRE</a>
            </li>

            <li class="nav-item" role="presentation">
                <!-- <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">Restful API & GraphQL API</button> -->
                <a class="nav-link active text-danger text-black" id="tab3-tab" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Restful API & GraphQL API</a>
            </li>

            <li class="nav-item" role="presentation">
                <!-- <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">ETL/Reporting Analysis </button> -->
                <a class="nav-link active text-danger text-black" id="tab3-tab" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">ETL/Reporting Analysis</a>

            </li>
        </ul>

        <div class="mt-5" id="Full-Stack">
                <h5 class="redtext text-center">Full-Stack Software Development</h5>
                <h1 class="text-center">Need a Custom Web Application?</h1>
                <ul class="list-unstyled ">
                    <li class="mt-5">
                        <span class="d-flex gap-5">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/tech.png" class="img-thumbnail img-fluid" alt="" style="height: 50%">
                            <span>
                                <h6>TECH STACKS</h6>
                                <p>We create customized web applications that are tailored to meet our clients' unique
                                    needs. Our team of developers use the latest web development technologies such as
                                    React, Angular, Java, .NET, and all relevant components. We have the ability to deliver
                                    complex projects on time, within budget, and with a global standard of quality.</p>
                            </span>
                        </span>
                    </li>

                    <li class="mt-5">
                        <span class="d-flex gap-5">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/tech.png" class="img-thumbnail img-fluid" alt="" style="height: 50%">
                            <span>
                                <h6>BEST PRACTICES</h6>
                                <p>Our front-end developers create responsive and visually appealing user interfaces
                                    that follow best UI/UX practices and are easy to use and navigate. Meanwhile, our
                                    back-end developers are experts in creating scalable and secure applications that
                                    can handle high traffic volumes. .</p>
                            </span>
                        </span>
                    </li>

                    <li class="mt-5">
                        <span class="d-flex gap-5">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/tech.png" class="img-thumbnail img-fluid" alt="" style="height: 50%">
                            <span>
                                <h6>SENSIBLE SOLUTIONS</h6>
                                <p>We don't just create full stack solutions; we also follow industry best practices to
                                    ensure that the applications we build are secure, scalable, and easy to maintain. Our
                                    team of developers provide continuous integration/continuous delivery (CI/CD),
                                    DevOps, containerization, and all the tools necessary to ensure smooth launching of
                                    custom applications and patches.</p>
                            </span>
                        </span>
                    </li>

                    <li class="mt-4 px-4">
                        <p class="redtext">Learn more about how we can help you achieve your business goals. </p>
                        <button class="button">Contact Us Today</button>
                    </li>
                </ul>
 <!-- full stack software dev ends -->

 
 <section>
     <div class="mt-5 pt-5" id="Quality Engineer">
         <div class="container-fluid banner d-flex align-items-center" style="height:65vh" id="Quality Engineer">
             <div class=" container row align-items-start">
                 <div class="col-sm-12 col-lg-6 col-md-6">
         
                     </div>
                     
                 </div>
                 
             </div>
             </div>
          </section>


            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                <h3>Tab 3 Content</h3>
                <p>This is the content for Tab 3.</p>
            </div>
        </div>
    </div>

</section>


<!-- quality engineer section start -->
<section class="mt-3">
        
        <div class="bg-white p-5" style="width:28%">
            <h5 class="redtext">Quality Engineer/SRE</h5>
            <h3 class="text-dark">Quality Engineers and Site
                Reliability Engineers are both
                critical roles in ensuring the
                success of a business, especially
                in the technology industry.</h3>
        </div>
    </section>
<p mt-6>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore sit laborum corporis <br> doloremque, aliquam veritatis? Possimus dolorum, voluptas quaerat rem hic <br> ut impedit temporibus mollitia esse reprehenderit animi error tempore?
</p>


<!-- quality engineer section end-->






<?php
get_sidebar();
get_footer();
