        <!-- START UPPER FOOTER SECTION -->
<?php 
// Get the page ID of "Global Settings"
$global_page = get_page_by_path('global-settings'); 
$settings_id = $global_page ? $global_page->ID : 0;
?>

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
                <p>
                    let’s make something new, different 
                    <b>great together.</b> <span>Just say hello</span>
                </p>
                </div>

                <div class="upper_footer_info">
                <div class="upper_footer_info_items">
                    <div class="upper_footer_info_img">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icon/footer_icon/icon_one.png">
                    </div>
                    <div class="upper_footer_info_cont">
                    <h6><?php the_field('footer_phone_label', $settings_id); ?></h6>
                    <a href="tel:<?php the_field('footer_phone_number', $settings_id); ?>">
                        <?php the_field('footer_phone_number', $settings_id); ?>
                    </a>
                    </div>
                </div>

                <div class="upper_footer_info_items">
                    <div class="upper_footer_info_img">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icon/footer_icon/icon_two.png">
                    </div>
                    <div class="upper_footer_info_cont">
                    <h6><?php the_field('footer_email_label', $settings_id); ?></h6>
                    <a href="mailto:<?php the_field('footer_email', $settings_id); ?>">
                        <?php the_field('footer_email', $settings_id); ?>
                    </a>
                    </div>
                </div>

                <div class="upper_footer_info_items">
                    <div class="upper_footer_info_img">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icon/footer_icon/icon_three.png">
                    </div>
                    <div class="upper_footer_info_cont">
                    <h6><?php the_field('footer_address_label', $settings_id); ?></h6>
                    <a href="<?php the_field('footer_address_url', $settings_id); ?>" target="_blank">
                        <?php the_field('footer_address', $settings_id); ?>
                    </a>
                    </div>
                </div>
                </div>

                <div class="footer_social_media">
                <ul>
                    <?php if ($fb = get_field('footer_facebook', $settings_id)): ?>
                    <li><a href="<?php echo esc_url($fb); ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon/social_media/fb_icon.png" alt="Facebook">
                    </a></li>
                    <?php endif; ?>

                    <?php if ($ig = get_field('footer_instagram', $settings_id)): ?>
                    <li><a href="<?php echo esc_url($ig); ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon/social_media/ig_icon.png" alt="Instagram">
                    </a></li>
                    <?php endif; ?>

                    <?php if ($yt = get_field('footer_youtube', $settings_id)): ?>
                    <li><a href="<?php echo esc_url($yt); ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon/social_media/yt_icon.png" alt="YouTube">
                    </a></li>
                    <?php endif; ?>

                    <?php if ($ln = get_field('footer_linkedin', $settings_id)): ?>
                    <li><a href="<?php echo esc_url($ln); ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon/social_media/li_icon.png" alt="LinkedIn">
                    </a></li>
                    <?php endif; ?>
                </ul>
                </div>
            </div>

                <div class="offset-md-1"></div>

                <div class="col-md-7">
                    <div class="upper_footer_form">
                        <?php echo do_shortcode('[contact-form-7 id="1cd266e" title="main contact form"]'); ?>
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
                            
                        </div>
                        <?php } ?>
                        <div class="footer_element footer_newsletter animatable bounceInRight">
                            <?php echo do_shortcode('[contact-form-7 id="f993d18" title="Newsletter Form"]'); ?>
                            
                        </div>
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