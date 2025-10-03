<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

<main role="main">

  <!-- Inner Banner (optional, same style as inner pages) -->
  <section class="inner_page_banner">
    <div class="inner_pages_img">
      <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/banner/inner_banner.jpg" alt="Banner">
      <?php endif; ?>
    </div>
    <div class="about_me_head">
      <h2><?php the_title(); ?></h2>
      <h6><?php the_field('contact_sub__heading'); ?></h6>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="map_contact_box">
    <div class="container">
      <div class="row">
        
        <div class="col-md-12">
          <div class="map_contact_box_head">
            <h2><?php the_field('contact_heading'); ?></h2>
          </div>
        </div>
        
        <div class="col-md-6">
          <!-- Address -->
          <div class="contact_icons">
            <img src="<?php echo get_template_directory_uri(); ?>/images/contact_loc.gif" alt="Location">
            <a href="<?php the_field('contact_address_url'); ?>" target="_blank">
              <?php the_field('contact_address'); ?>
            </a>
          </div>

          <!-- Email -->
          <div class="contact_icons">
            <img src="<?php echo get_template_directory_uri(); ?>/images/contact_mail.gif" alt="Email">
            <a href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a>
          </div>

          <!-- Phone -->
          <div class="contact_icons">
            <img src="<?php echo get_template_directory_uri(); ?>/images/contact_phone.gif" alt="Phone">
            <a href="tel:<?php the_field('contact_phone'); ?>"><?php the_field('contact_phone'); ?></a>
          </div>
        </div>

        <!-- Map -->
        <div class="col-md-6">
          <div class="contact_map bounceInRight animated"> 
            <?php 
                $map = get_field('contact_map_iframe');
                if ($map) {
                    echo $map;
                }
            ?>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>