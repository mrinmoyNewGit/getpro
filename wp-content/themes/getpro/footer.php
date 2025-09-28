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
                                <?php /* If this line breaks the footer, just comment it out */ ?>
                                <?php if (function_exists('wp_nonce_field')) wp_nonce_field('contact_form_nonce'); ?>
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

        <!-- FOOTER COLUMNS -->
        <section class="upper_footer_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <?php if (is_active_sidebar('footer-col-1')) {
                            dynamic_sidebar('footer-col-1');
                        } else { ?>
                        <div>not showing</div>
                        <?php } ?>
                    </div>

                    <div class="col-md-3 padd">
                        <?php if (is_active_sidebar('footer-col-2')) {
                            dynamic_sidebar('footer-col-2');
                        } else { ?>
                        <div class="footer_element animatable fadeInDown">
                            <h6>OUR PROCESS</h6>
                            <ul>
                                <li><a href="#">Identifying the Problems</a></li>
                                <li><a href="#">Challenging the Bureaus</a></li>
                                <li><a href="#">Analyzing Updated Reports</a></li>
                                <li><a href="#">Weekly Education</a></li>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>

                    <div class="col-md-3">
                        <?php if (is_active_sidebar('footer-col-3')) {
                            dynamic_sidebar('footer-col-3');
                        } else { ?>
                        <div class="footer_element animatable fadeInUp">
                            <h6>GET IN TOUCH</h6>
                            <p>We're here to listen</p>
                            <ul>
                                <li><p><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icon/address_icon.png">6655 WEST SAHARA B200</p></li>
                                <li><p><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icon/phone_icon.png"><a href="tel:877-342-6787">877-342-6787</a></p></li>
                                <li><p><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icon/mail_icon.png"><a href="mailto:info@creditredesign.com">info@creditredesign.com</a></p></li>
                            </ul>
                            <div class="footer_emp_login"><a href="#">Employee Login</a></div>
                        </div>
                        <?php } ?>
                    </div>

                    <div class="col-md-3 padd">
                        <?php if (is_active_sidebar('footer-col-4')) {
                            dynamic_sidebar('footer-col-4');
                        } else { ?>
                        <div class="footer_element footer_newsletter animatable bounceInRight">
                            <h6>NEWSLETTER</h6>
                            <p>Receive resources & tools that can help you prepare for the future. You can cancel anytime.</p>
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="YOUR MAIL HERE" required>
                                </div>
                                <div class="fico_form_button">
                                    <button type="submit"><i class="fa fa-check" aria-hidden="true"></i> SUBSCRIBE NOW</button>
                                </div>
                            </form>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- COPYRIGHT FOOTER -->
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