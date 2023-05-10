<?php
/**
 * The template for displaying the home page
 *  
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 *  Template Name: proesses
 * @package jitutheme
 */

get_header();

?>
        <!-- BANNER -->
        <section style="box-shadow: 0px 6px 9px 5px rgba(0, 0, 0, 0.1);">
            <div class="container-fluid banner d-flex align-items-center" style="height:90vh">
                <div class="container">
                    <div class="row align-items-start landing">
                        <div class="col-sm-12 col-lg-6 col-md-6">
                            <h1>Lorem ipsum dolor sit amet, <span class="redtext">consectetuer </span> adipiscing</h1>
                            <p>
                            Nulla luctus quam id ipsum tristique, sit amet mollis magna pellentesque. Nulla sed mauris venenatis, faucibus nisl ut, ullamcorper enim. Aenean eget tincidunt donec vel interdum.
                            </p>
                        </div>
                        <div class="col land_btn" >
                            <button class="button" id="sdlc">Our SDLC Processes</button>
                            <button class="button">Contact Us Today</button>
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
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/icons/audi.jpg" class="img-thumbnail" alt="">

                    </div>
    
                    <div class="col-md-6 col-sm-12">

                        <!--country proceses section-->
                        <div class="row align-items-start landing">
                        <div class="col">
                            <h1 class="redtext">Multi-Country Processes</h1>
                            <h4>
                            <span class="redtext">We pride ourselves on being a truly global organization.</span> With teams located in both the United States and Kenya, we can offer our clients the benefits of multi-country processes.</h4>
                            <p>Our teams in both countries are highly skilled and experienced in web development, and work in their own time zones to ensure maximum efficiency and client satisfaction. This means that we can offer 24/7 support to our clients, regardless of where they are located.</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- benefits to clients section -->
        <section>
            <div class="testimonials mb-5">
                <div class="container">
                    <div class="row py-5 text-center">
                        <div class="col-12 d-flex flex-column align-items-center">
                            <h2 class="redtext">Our multi-country processes offer several benefits to our clients, including:</h2>
                        </div>
                        <!-- missimg contents -->
                        <div class="col-12 d-flex flex-column align-items-center">
                            <p >We are committed to delivering exceptional services that meet the needs of our clients. By utilizing multi-country processes, we provide our clients with faster turnaround times, greater flexibility, better quality, and cost savings.</p>
                        </div>
                        <!-- work on it  -->
                                                                   
                    </div>
                </div>
            </div>
        </section>

        <!-- software development life-cycle -->
        
        
        
        <section class="section">
            <div class="container"> 
                <div class="bg-benefits">
                </div>
                <div class="sw_lifeCycle ">
                    <h3 class="redtext">Software Development Life Cycle</h3>
                    <h2>
                    THE Jitu specializes in providing exceptional web development services using our proven Software Development Lifecycle (SDLC) process. 
                    </h2>
                        <h6 class="sw_subheading">We believe that effective software development requires a comprehensive approach that covers every stage of the project lifecycle, from planning to deployment.
                        </h6>
                </div>
            </div>

     
        </section>

        <section>
        <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-md-6 col-sm-12">
                        <h1 class="redtext">Our SDLC process consists of the following stages:</h1>
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/icons/audi.jpg" class="img-thumbnail" alt="">
<!-- line -->
                    <span class="border_stage">
                        <hr>
                    </span>

                    <p class="closing_p">By following our comprehensive SDLC process, we ensure that our clients receive high-quality web development services that are delivered on time and within budget. Let us utilize our experience and help you achieve your business goals through effective software development.</p>
                    </div>
    
                    <div class="col-md-6 col-sm-12 stages">

                        <!--country proceses section-->
                        <div class="row align-items-start landing">
                        <div class="col">
                            <h5 class="redtext">Planning </h5>
                            <p>We work closely with our clients to define their project goals and objectives. We analyze their requirements, establish project timelines and budgets, and develop a detailed project plan that outlines the scope of work.</p>
                        </div>
                        <div class="col">
                            <h5 class="redtext">Analysis </h5>
                            <p>During this stage, we conduct a thorough analysis of our clients' requirements to ensure we understand their needs. We collaborate with our clients to identify any potential challenges and develop solutions to address them.</p>
                        </div>
                        <div class="col">
                            <h5 class="redtext">Design </h5>
                            <p>Based on the requirements analysis, we develop a comprehensive design plan that outlines the system architecture, user interface design, database schema, and other critical aspects of the system.</p>
                        </div>
                        <div class="col">
                            <h5 class="redtext">Development </h5>
                            <p>During this stage, our team of experienced developers works diligently using 2–3-week spring cycles to create high-quality code that meets the design specifications. We employ rigorous manual and automated testing procedures to ensure that the code is error-free and meets our clients' requirements.</p>
                        </div>
                        <div class="col">
                            <h5 class="redtext">Testing </h5>
                            <p>We conduct rigorous testing procedures to ensure that the software is stable, reliable, and performs as expected. We utilize a variety of testing methodologies, including unit testing, integration testing, and user acceptance testing.</p>
                        </div>
                        <div class="col">
                            <h5 class="redtext">Deployment </h5>
                            <p>Once the software has been tested and approved, we deploy it to the production environment. We work closely with our clients to ensure that the software is installed correctly and is functioning as expected.</p>
                        </div>
                        <div class="col">
                            <h5 class="redtext">Testing </h5>
                            <p>We offer ongoing maintenance and support services to ensure that our clients' software remains stable and reliable. We provide timely updates and bug fixes to ensure that the software continues to meet our clients' evolving needs.</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT US -->
        <section class="section jitucontact">
            <div class="mt-5 pb-5">
                <div class="container">
                    <div class="row py-5">
                        <div class="col-lg-6 col-sm-12">
                            <h2 class="redtext text-uppercase">Let's Discuss Your<br/> Next Project</h2>
                            <p>
                                Fill out the form or call us to set up a meeting. We’ll be happy to discuss your staffing needs in detail, provide estimates, and answer all your questions.
                            </p>
                            <span class="">
                                <i class="ri-phone-fill"></i> (+254) 710 453 693
                            </span>
                        </div>
                        <div class="col">
                            <?php echo do_shortcode('[wpforms id="12"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>



<?php
get_sidebar();
get_footer();
