<?php wp_footer(  )?>
        <footer class="main_footer container-fluid">
            <div class="footer_logo col-sm-12 col-lg-5">
                <a href="/"><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/logo-jitu-red.svg" alt="The Jitu Red Company logo"></a>
            </div>
            <div class="row col-sm-12 col-lg-7">
                <div class="f_contacts col-sm-12 col-md-6 col-lg-4">
                    <h3>Contact us</h3>
                    <ul>
                        <li><span class="link_r">Adress:</span> <span class="link_l">P.O Box 1126-10100 Nyeri, Kenya</span></li>
                        <li>Phone: (+254) 710 453 693</li>
                        <li>Email: hello@thejitu.com</li>
                        <li>Office: Kimathi Way, KDS Centre, 2nd Floor Nyeri Town, Kenya</li>
                    </ul>
                </div>
                <div class="f_quicklinks col-sm-12 col-md-6 col-lg-4">
                    <h3>Quick Links</h3>
                    <!-- <ul>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">BPO</a></li>
						<li><a href="#">Training</a></li>
						<li><a href="#">Careers</a></li>
                    </ul> -->

                    <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'footer-menu',
                            'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'ul',
                            'container_class' => 'f_quicklinks col-sm-12 col-md-6 col-lg-4',
                            'container_id'    => '',
                            'menu_class'      => '',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
                </div>
                <div class="f_ourtechfam col-sm-12 col-md-6 col-lg-4">
                    <h3>Our Technology Family</h3>
                    <ul>
						<li><a href="#">AcquireTek</a></li>
						<li><a href="#">Carveos</a></li>
						<li><a href="#">Eclipse Reality</a></li>
						<li><a href="#">Griffin Technology Solutions</a></li>
						<li><a href="#">K2 Data Technologies</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>