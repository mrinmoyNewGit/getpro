        <!-- START UPPER FOOTER SECTION -->
        <section class="upper_footer_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="upper_footer_logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/footer_logo.png" alt="<?php bloginfo('name'); ?>">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="upper_footer_para">
                            <p>let's make something new, different <b>great together.</b> <span>Just say hello</span></p>
                        </div>

                        <div class="upper_footer_info">
                            <div class="upper_footer_info_items">
                                <div class="upper_footer_info_img">
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icon/footer_icon/icon_one.png">
                                </div>
                                <div class="upper_footer_info_cont">
                                    <h6>Call Us</h6>
                                    <a href="tel:+91 9007957698">+91 000000000</a>
                                </div>
                            </div>
                            <div class="upper_footer_info_items">
                                <div class="upper_footer_info_img">
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icon/footer_icon/icon_two.png">
                                </div>
                                <div class="upper_footer_info_cont">
                                    <h6>Email</h6>
                                    <a href="mailto:info@getprdesign.com">info@getprdesign.com</a>
                                </div>
                            </div>
                            <div class="upper_footer_info_items">
                                <div class="upper_footer_info_img">
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icon/footer_icon/icon_three.png">
                                </div>
                                <div class="upper_footer_info_cont">
                                    <h6>Address</h6>
                                    <a href="https://goo.gl/maps/3J4UmXex4k5Xmd7a8" target="_blank">2nd Floor, PS Techno Park, 75, EN Block, Sector V, Bidhannagar</a>
                                </div>
                            </div>
                        </div>

                        <div class="footer_social_media">
                            <ul>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/social_media/fb_icon.png"></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/social_media/ig_icon.png"></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/social_media/yt_icon.png"></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/social_media/li_icon.png"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="offset-md-1"></div>

                    <div class="col-md-7">
                        <div class="upper_footer_form">
                            <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                                <input type="hidden" name="action" value="contact_form">
                                <?php wp_nonce_field('contact_form_nonce'); ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="upper_footer_inputs">
                                            <label>Name</label>
                                            <input type="text" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="upper_footer_inputs">
                                            <label>Email Address</label>
                                            <input type="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="upper_footer_inputs">
                                            <label>Message</label>
                                            <textarea name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="upper_footer_inputs">
                                            <button type="submit" value="Submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Dynamic Footer Widget Area -->
        <?php if (is_active_sidebar('footer-widget-area')) : ?>
            <section class="upper_footer_sec">
                <div class="container">
                    <div class="row">
                        <?php dynamic_sidebar('footer-widget-area'); ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- START COPYRIGHT FOOTER -->
        <footer class="footer_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_cont">
                            <p>
                                Copyright © <?php echo date('Y'); ?> 
                                Design and Developed by 
                                <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                                all Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->

    </main>
    <?php wp_footer(); ?>
    </body>
</html>