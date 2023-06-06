<?php

/**
 * The template for displaying the technology services page
 *  
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * Template Name: Technology Services 
 * @package jitutheme
 */

get_header();

?>
<!-- BANNER -->
<section style="box-shadow: 0px 6px 9px 5px rgba(0, 0, 0, 0.1);">
    <div class="container-fluid banner d-flex align-items-center" style="height:90vh">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-12 col-md-8 col-lg-6">
                    <h1 class="banner_h1">
                        Augment your team <span class="redtext">accelerate </span> your success!
                    </h1>
                    <p>
                        At THE Jitu, we offer comprehensive suite of services that helps your organization reduce costs, increase productivity, and gain access to top-notch talent. We take pride in offering customized and personalized solutions that cater to the unique needs of each company we work with.
                    </p>
                    <div class="row">
                        <button class="col-12 col-sm-auto mb-3 mb-sm-0 me-sm-3">REVIEW OUR PROCESSES</button>
                        <button class="col-12 col-sm-auto">CONTACT US TODAY</button>
                    </div>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Navigation Tabs -->
<section class="container overflow-hidden">
    <ul class="nav flex-nowrap justify-content-lg-around border-bottom overflow-auto">
        <li class="nav-item flex-shrink-0" role="presentation">
            <a class="nav-link py-4 text-black" href="#Full-Stack">Full-Stack Software Development</a>
        </li>

        <li class="nav-item flex-shrink-0" role="presentation">
            <a class="nav-link py-4 text-black" href="#Quality Engineer">Quality Engineer/SRE</a>
        </li>

        <li class="nav-item flex-shrink-0" role="presentation">
            <a class="nav-link py-4 text-black" href="#Restful API & GraphQL API">Restful API & GraphQL API</a>
        </li>

        <li class="nav-item flex-shrink-0" role="presentation">
            <a class="nav-link py-4 text-black" href="#ETL/Reporting Analysis">ETL/Reporting Analysis</a>
        </li>
    </ul>
</section>

<!-- Service 1: Full-Stack Software Development -->
<section id="Full-Stack">
    <div class="container mb-sm-5 pb-5">
        <div class="py-5 text-center">
            <h5 class="redtext">Full-Stack Software Development</h5>
            <h1>Need a Custom Web Application?</h1>
        </div>

        <!-- Tech Stacks -->
        <div class="row pb-4 pb-sm-5">
            <div class="col-12 col-sm-2 text-center">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/tech-stacks.png" class="img-fluid mb-3" alt="">
                <h6 class="d-sm-none mb-3 fw-bold">TECH STACKS</h6>
                <p class="d-sm-none">
                    We create customized web applications that are tailored to meet our clients' unique
                    needs. Our team of developers use the latest web development technologies such as
                    React, Angular, Java, .NET, and all relevant components. We have the ability to deliver
                    complex projects on time, within budget, and with a global standard of quality.
                </p>
            </div>
            <div class="d-none d-sm-block col-sm-10 col-lg-9">
                <h6 class="fw-bold">TECH STACKS</h6>
                <p>
                    We create customized web applications that are tailored to meet our clients' unique
                    needs. Our team of developers use the latest web development technologies such as
                    React, Angular, Java, .NET, and all relevant components. We have the ability to deliver
                    complex projects on time, within budget, and with a global standard of quality.
                </p>
            </div>
        </div>

        <!-- Best Practices -->
        <div class="row pb-4 pb-sm-5">
            <div class="col-12 col-sm-2 text-center">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/best-practices.png" class="img-fluid mb-3" alt="">
                <h6 class="d-sm-none mb-3 fw-bold">BEST PRACTICES</h6>
                <p class="d-sm-none">
                    Our front-end developers create responsive and visually appealing user interfaces
                    that follow best UI/UX practices and are easy to use and navigate. Meanwhile, our
                    back-end developers are experts in creating scalable and secure applications that
                    can handle high traffic volumes.
                </p>
            </div>
            <div class="d-none d-sm-block col-sm-10 col-lg-9">
                <h6 class="fw-bold">BEST PRACTICES</h6>
                <p>
                    Our front-end developers create responsive and visually appealing user interfaces
                    that follow best UI/UX practices and are easy to use and navigate. Meanwhile, our
                    back-end developers are experts in creating scalable and secure applications that
                    can handle high traffic volumes.
                </p>
            </div>
        </div>

        <!-- Sensible Solutions -->
        <div class="row pb-4 pb-sm-5">
            <div class="col-12 col-sm-2 text-center">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/sensible-solutions.png" class="img-fluid mb-3" alt="">
                <h6 class="d-sm-none mb-3 fw-bold">SENSIBLE SOLUTIONS</h6>
                <p class="d-sm-none">
                    We don't just create full stack solutions; we also follow industry best practices to
                    ensure that the applications we build are secure, scalable, and easy to maintain. Our
                    team of developers provide continuous integration/continuous delivery (CI/CD),
                    DevOps, containerization, and all the tools necessary to ensure smooth launching of
                    custom applications and patches.
                </p>
            </div>
            <div class="d-none d-sm-block col-sm-10 col-lg-9">
                <h6 class="fw-bold">SENSIBLE SOLUTIONS</h6>
                <p>
                    We don't just create full stack solutions; we also follow industry best practices to
                    ensure that the applications we build are secure, scalable, and easy to maintain. Our
                    team of developers provide continuous integration/continuous delivery (CI/CD),
                    DevOps, containerization, and all the tools necessary to ensure smooth launching of
                    custom applications and patches.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col offset-sm-2">
                <p class="redtext">Learn more about how we can help you achieve your business goals.</p>
                <button class="button">Contact Us Today</button>
            </div>
        </div>
    </div>
</section>

<!-- Service 2: Quality Engineer/SRE -->
<section id="Quality Engineer">
    <div class="position-relative">
        <div class="banner mb-5" style="height: 90vh; clip-path: polygon(0% 5rem, 100% 0%, 100% 100%, 0% 100%);"></div>
        <div class="container">
            <div class="position-absolute row g-0" style="bottom: -3rem;">
                <div class="col-12 col-md-5">
                    <div class="bg-white p-5 rounded shadow">
                        <h5 class=redtext>Quality Engineer/SRE</h5>
                        <h3 class=text-dark>
                            Quality Engineers and Site Reliability Engineers are both critical roles in ensuring the success of a business, especially in the technology industry.
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 py-5 text-center">
                <h2 class="redtext">Quality Engineers</h2>
                <p>
                    We take pride in delivering high-quality engineering solutions. We employ a team of skilled Quality Engineers that possess the critical job skills necessary to ensure that every project we undertake is a success.
                </p>
            </div>
        </div>
        <div class="position-relative row g-lg-0 align-items-start justify-content-lg-center">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/quality-engineer-tenates.png" alt="Quality Engineers" class="position-absolute d-none d-lg-block w-auto">
            <div style="min-height: 576px;" class="col-12 col-md-6 col-lg-5 col-xl-4 row g-lg-0">
                <div class="col-lg-11 col-xl-auto mb-4 mb-lg-0">
                    <h6 class="redtext fw-bold">TEAMWORK</h6>
                    <p>
                        Collaboration is an integral part of our company culture, and our Quality Engineers are
                        skilled
                        at working collaboratively with cross-functional teams to deliver outstanding projects on
                        time
                        and within budget.
                    </p>
                </div>
                <div class="col-lg-10 d-lg-flex flex-column justify-content-center mb-4 mb-lg-0">
                    <h6 class="redtext fw-bold">COMMUNICATION</h6>
                    <p>
                        Our engineers are excellent communicators, with the ability to communicate technical
                        concepts
                        effectively to both technical and non-&nbsp;technical stakeholders.
                    </p>
                </div>
            </div>
            <div style="min-height: 576px;" class="col-12 col-md-6 offset-lg-1 row g-lg-0">
                <div class="col-lg-9 offset-lg-3 mb-4 mb-lg-0">
                    <h6 class="redtext fw-bold">QUALITY ASSURANCE</h6>
                    <p>
                        Our engineers have an in-depth understanding of quality assurance principles and practices,
                        which enables them to develop and implement effective quality control measures throughout
                        the project lifecycle.
                    </p>
                </div>
                <div class="col-lg-7 offset-lg-5 mb-4 mb-lg-0">
                    <h6 class="redtext fw-bold">PROBLEM SOLVING</h6>
                    <p>
                        Our team members have exceptional problem-&nbsp;solving skills that enable them to identify
                        complex issues and implement solutions that meet the highest standards of quality and
                        efficiency
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5 col-xl-4 offset-lg-2">
                <div class="mb-4 mb-lg-0">
                    <h6 class="redtext fw-bold">TECHNICAL EXPERTISE</h6>
                    <p>
                        Our Quality Engineers possess a strong technical background, with proficiency in a wide
                        range of
                        programming languages, software testing tools, and other technical skills.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service 3: Site Reliability Engineers -->
<section id="Site Reliability Engineers">
    <div class="position-relative">
        <div class="banner position-absolute top-0 left-0 h-100 w-100 z-n1 opacity-25" style="clip-path: polygon(0% 5rem, 100% 0%, 100% 100%, 0% 100%);"></div>
        <div class="container pt-5">
            <div class="row justify-content-center py-5">
                <div class="col-12 col-md-6 pt-5 pb-md-4 text-center">
                    <h2 class="redtext">Site Reliability Engineers</h2>
                    <p class="fw-bold">We offer a resourceful range of SRE services.</p>
                </div>
            </div>
            <div class=row>
                <div class="col-md-1"></div>
                <div class="col-md-5 mb-4 mb-md-0">
                    <h6 class="redtext fw-bold">INFRASTRUCTURE DESIGN AND MANAGEMENT</h6>
                    <p>We design and manage infrastructure for large-scale web applications. We utilize the latest technologies and tools to ensure that our clients' infrastructure is reliable, scalable, and secure.</p>
                </div>
                <div class="col-md-5 mb-4 mb-md-0">
                    <h6 class="redtext fw-bold">MONITORING AND ALERTING</h6>
                    <p>We monitor and alert all web applications. Using a variety of monitoring<br>tools and techniques proactively identifies and addresses issues before they impact our clients' users.</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                <div class="col-md-5 mb-4 mb-md-0">
                    <h6 class="redtext fw-bold">PERFORMANCE OPTIMIZATION</h6>
                    <p>By optimizing the performance of web applications we ensure that all applications meet the needs of our clients' users. We use a variety of tools and techniques to identify and resolve performance issues, ensuring that our clients' applications are fast and responsive.</p>
                </div>
                <div class="col-md-5 mb-4 mb-md-0">
                    <h6 class="redtext fw-bold">DISASTER RECOVERY</h6>
                    <p>We design and implement disaster recovery plans for web applications to ensure that our clients' applications are protected against unexpected failures, and that they can be quickly recovered in the event of a disaster.</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                <div class="col-md-5"></div>
                <div class="col-md-5 mb-4 mb-md-0">
                    <h6 class="redtext fw-bold">CONSULTING SERVICES</h6>
                    <p>Our team members provide consulting services to our clients, including infrastructure design review, performance optimization, and disaster recovery planning.</p>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row justify-content-center pb-5 py-md-5">
                <div class="col-12 col-md-5 text-center">
                    <h6 class="fw-bold">Our Quality Engineers or Site Reliability Engineering services that are tailored to your specific needs.</h6>
                    <button class="justify-content-center mt-3">CONTACT US TODAY</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service 4: Restful API and GraphQL API -->
<section>
    <div id="Restful API & GraphQL API">
        <div class="pb-5 text-white" style="background-color:#C11E2E;">
            <div class="container py-5">
                <div class="h2 fw-light">Restful API and GraphQL API</div>
                <div class="h1 fw-bold">
                    Our custom RESTful and GraphQL API development services help businesses create tailored solutions that meet their specific needs.
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-0 justify-content-between align-items-start pb-md-5">
                <div style="margin-top: -3rem;" class="col-12 col-md-6 mb-4 mb-md-0">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/audi.jpg" alt="" class="img-fluid rounded-5 shadow-lg">
                </div>
                <div class="col-12 col-md-6 row g-0">
                    <div class="col-lg-9 offset-lg-2">
                        <div class="my-lg-5">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/rest-api.svg" alt="" class="img-fluid col-2 me-4">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/graphql.svg" alt="" class="img-fluid col-2">
                        </div>
                        <p class="">
                            RESTful and GraphQL APIs are an essential component of modern web applications, allowing businesses to connect their front-end user interfaces with the back-end data and services they need. Our team of developers has extensive experience in creating custom APIs using both RESTful and GraphQL protocols; we handle even the toughest business problems. Our APIs are efficient, secure, and scalable to navigate even the toughest business problems.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row p-md-5">
                <div class="col-12 col-md-4">
                    <div class="mb-lg-4 text-center">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/check-circle.svg" alt="" class="img-fluid">
                    </div>
                    <p>
                        By creating custom APIs, we help businesses streamline their operations, reduce costs, and improve customer experiences. Our APIs are designed to be efficient, secure, and scalable, ensuring that they can handle high volumes of traffic and provide fast responses.
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <div class="mb-lg-4 text-center">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/check-circle.svg" alt="" class="img-fluid">
                    </div>
                    <p>
                        We offer affordable custom API development solutions to keep your project on budget. Our APIs are built with scalability and future growth in mind, ensuring that they can adapt to changing business needs and deliver value over time while seeing an ROI in the long-run.
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <div class="mb-lg-4 text-center">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/check-circle.svg" alt="" class="img-fluid">
                    </div>
                    <p>
                        Whether our clients need a custom API solution for a new application or to integrate legacy code, our team is up to the challenge. We have the expertise and experience to create custom APIs that meet our clients' unique business requirements, no matter how complex or challenging.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center my-5">
                <hr class="col-10 mb-0">
            </div>
        </div>
    </div>
</section>

<!-- Service 5: ETL/Reporting Analysis -->
<section id="ETL/Reporting Analysis">
    <div class="container">
        <div class="pb-4 p-md-5 text-center">
            <div class="h2 fw-light" style="color: #c3202f !important;">ETL/Reporting Analysis</div>
            <div class="h1 fw-bold mb-3">
                Data is at the heart of every business decision. We translate raw data into actionable insights.
            </div>
        </div>
        <div class="row justify-content-center g-0">
            <div class="card col-md-10 flex-row align-items-center mb-4 mb-md-5 p-3 p-md-4 shadow-lg">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/tick.png" class="col-1" alt="">
                <div class="col card-body">
                    <div class="card-text">
                        <span class="mb-0 h6 fw-bold">ETL</span>
                        <div>
                            We extract data from various sources, transforming it into a usable format, and loading it into a database or data warehouse. Using the latest technologies and techniques ensures that our clients' data is accurate, consistent, and up-to-date.
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-md-10 flex-row align-items-center mb-4 mb-md-5 p-3 p-md-4 shadow-lg">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/tick.png" class="col-1" alt="">
                <div class="col card-body">
                    <span class="mb-0 h6 fw-bold">REPORTING ANALYSIS</span>
                    <div>
                        We use advanced statistical models and data visualization tools to help our clients understand their data and make informed business decisions.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ETL/Reporting Analysis end-->

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
