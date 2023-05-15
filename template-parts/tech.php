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

                <li class="mt-4 px-4 text-center">
                    <p class="redtext">Learn more about how we can help you achieve your business goals. </p>
                    <button class="button">Contact Us Today</button>
                </li>
            </ul>
            <!-- full stack software dev ends -->

            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                <h3>Tab 3 Content</h3>
                <p>This is the content for Tab 3.</p>
            </div>
        </div>
    </div>

</section class="contain-fluid">

<!-- quality engineer section start -->

<?php the_content(); ?>

<section>
    <div class="mt-3" id="Quality Engineer">
        <div class="container-fluid banner d-flex align-items-center" style="height:90vh ;width:100%">
        </div>

    </div>
    <div class="container-fluid">
        <div class="row align-items-start">
            <div class="col-sm-12 col-lg-6 col-md-6">
                <div class="bg-white p-5 rounded" style="width:94% ;margin-top:-20% ;box-shadow: 0px 6px 9px 5px rgba(0, 0, 0, 0.1);">
                    <h5 class="redtext">Quality Engineer/SRE</h5>
                    <h3 class="text-dark">Quality Engineers and Site
                        Reliability Engineers are both
                        critical roles in ensuring the
                        success of a business, especially
                        in the technology industry.</h3>
                </div>


            </div>

        </div>

        <div class=" container justify-content-center">
            <h2 class="redtext text-center">Quality Engineers </h2>
            <p class="text-center">We take pride in delivering high-quality engineering solutions. We employ a
                team of skilled Quality Engineers that possess the critical job skills necessary to
                ensure that every project we undertake is a success. </p>
        </div>
    </div>
</section>
<!-- quality engineer section end-->

<!-- site reliability engineers section start -->
<div class="container custom-bg mt-5">
    <div class="justify-content-center">
        <h2 class="redtext text-center">Site Reliability Engineers </h2>
        <p class="text-center">We offer a resourceful range of SRE services.</p>
    </div>

    <div class="row gx-5 mt-5">

        <div class="row">
            <div class="col-sm-12 col-lg-6 col-md-6">
                <h5 class="redtext">INFRASTRUCTURE DESIGN AND MANAGEMENT</h5>
                <p>We design and manage infrastructure
                    for large-scale web applications. We
                    utilize the latest technologies and
                    tools to ensure that our clients'
                    infrastructure is reliable, scalable,
                    and secure. </p>
            </div>

            <div class="col-sm-12 col-lg-6 col-md-6">
                <h6 class="redtext">MONITORING AND ALERTING</h6>
                <p>We monitor and alert all web
                    applications. Using a variety of
                    monitoring tools and techniques
                    proactively identifies and addresses
                    issues before they impact our clients'
                    users. </p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-lg-6 col-md-6">
                <h6 class="redtext">PERFORMANCE OPTIMIZATION</h6>
                <p>By optimizing the performance of
                    web applications we ensure that all
                    applications meet the needs of our
                    clients' users. We use a variety of tools
                    and techniques to identify and
                    resolve performance issues, ensuring
                    that our clients' applications are fast
                    and responsive. </p>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6">
                <h6 class="redtext">DISASTER RECOVERY</h6>
                <p>We design and implement disaster
                    recovery plans for web applications
                    to ensure that our clients' applications
                    are protected against unexpected
                    failures, and that they can be quickly
                    recovered in the event of a disaster.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-lg-6 col-md-6">
                <h6 class="redtext"></h6>
                <p></p>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6">
                <h6 class="redtext">CONSULTING SERVICES</h6>
                <p>Our team members provide
                    consulting services to our clients,
                    including infrastructure design
                    review, performance optimization,
                    and disaster recovery planning. </p>
            </div>
        </div>

    </div>

    <div class="containers text-center mt-5">
        <h6>Our Quality Engineers or Site Reliability Engineering
            services that are tailored to your specific needs.</h6>
        <button class="justify-content-center mt-3">CONTACT US TODAY</button>
    </div>

</div>
<!-- site reliability engineers section end -->

<section class="mt-3">
</section>









<?php
get_sidebar();
get_footer();
