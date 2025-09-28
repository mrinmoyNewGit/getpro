<?php
/**
 * The main template file
 * Template Name: Home Page
 */

get_header(); ?>

<!-- START BANNER -->
<section class="banner_sec">
  <div id="banner" class="owl-carousel owl-theme">

    <?php
    $args = array(
        'post_type'      => 'banner',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC'
    );
    $banner_query = new WP_Query($args);

    if ($banner_query->have_posts()) :
      while ($banner_query->have_posts()) : $banner_query->the_post(); ?>

        <div class="item">
          <div class="container">
            <div class="banner_item">

              <div class="banner_content">
                <!-- Small Heading -->
                <h6>
                  <?php echo get_post_meta(get_the_ID(), 'banner_small_heading', true) ?: 'hello, We\'re'; ?>
                </h6>

                <!-- Main Title (Post Title) -->
                <h2><?php the_title(); ?></h2>

                <!-- Subheading -->
                <h4>
                  <?php echo get_post_meta(get_the_ID(), 'banner_subheading', true) ?: 'Design'; ?>
                </h4>

                <!-- Paragraph (Post Content) -->
                <div class="banner_para">
                  <?php if (get_the_content()) : ?>
                    <p><?php echo wp_kses_post(get_the_content()); ?></p>
                  <?php endif; ?>
                </div>

                <!-- Button -->
                <?php if ($btn_text = get_post_meta(get_the_ID(), 'banner_button_text', true)) : ?>
                  <div class="banner_link">
                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'banner_button_url', true)); ?>">
                      <?php echo esc_html($btn_text); ?>
                    </a>
                  </div>
                <?php endif; ?>
              </div><!-- .banner_content -->

              <!-- Banner Image (Post Featured Image) -->
              <div class="banner_img">
                <?php if (has_post_thumbnail()) :
                    the_post_thumbnail('full', [
                    'class' => 'img-fluid',
                    'srcset' => ''
                    ]);
                else: ?>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/banner_icon.png" alt="Banner image">
                <?php endif; ?>
                </div>

            </div>
          </div>
        </div>

      <?php endwhile;
      wp_reset_postdata();
    endif; ?>

  </div>
</section>
<!-- END BANNER -->

<!-- START ABOUT ME -->
<section class="about_me_sec">
  <div class="container">
    <div class="about_us_bot">
      <div class="row">
        <div class="col-md-5">
          <div class="about_us_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/about_me.png">
          </div>
        </div>
        <div class="col-md-7">
          <div class="about_us_cont">
            <div class="about_us_head">
              <h2>About Us</h2>
              <h6>
                <?php 
                $subheading = get_field('about_subheading');
                echo $subheading ? esc_html($subheading) : 'I am UI/UX Designer based in India.';
                ?>
              </h6>
            </div>
            <div class="about_us_para">
              <p>
                <?php 
                $description = get_field('about_description');
                echo $description ? wp_kses_post($description) : 'Default about text here...';
                ?>
              </p>
              
            </div>
            <div class="about_us_btn">
              <?php 
              $btn_text = get_field('about_button_text') ?: 'Know More';
              $btn_url  = get_field('about_button_url') ?: '#';
              ?>
              <a href="<?php echo esc_url($btn_url); ?>"><?php echo esc_html($btn_text); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END ABOUT ME -->

<!-- START OUR SKILLS -->
<section class="my_skill_sec">
  <div class="container">
    <div class="skill_bef">
      <div class="row">
        <div class="col-md-12">
          <div class="my_skill_head">
            <h2>Our skills</h2>
          </div>
        </div>

        <?php
        $args = array(
            'post_type'      => 'skill',
            'posts_per_page' => -1,
            'orderby'        => 'date',
            'order'          => 'ASC'
        );
        $skills = new WP_Query($args);

        if ($skills->have_posts()) :
            while ($skills->have_posts()) : $skills->the_post();
                $percentage   = get_post_meta(get_the_ID(), 'skill_percentage', true); 
                $skill_class  = get_post_meta(get_the_ID(), 'skill_class', true); 
                ?>
                
                <div class="col-md-3 col-sm-6">
                  <div class="my_skill_per">
                    <div class="circle-big <?php echo esc_attr($skill_class); ?>">
                      <div class="circle_text"><p><?php echo esc_html($percentage); ?>%</p></div>
                      <svg>
                        <circle class="bg" cx="57" cy="57" r="52"></circle>
                        <circle class="progress" cx="57" cy="65" r="65"></circle>
                      </svg>
                    </div>
                    <div class="skill_name"><h6><?php the_title(); ?></h6></div>
                  </div>
                </div>

        <?php endwhile; wp_reset_postdata();
        else : ?>
            <p>No skills added yet.</p>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
<!-- END OUR SKILLS -->

<!-- START EXPERTISE AREA -->
<section class="expertise_sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="expertise_head">
          <h2>Expertise area</h2>
        </div>
      </div>
      <div class="col-md-12">
        <div id="expertise_area" class="owl-carousel owl-theme">

          <?php
          $args = array(
              'post_type'      => 'expertise',
              'posts_per_page' => -1,
              'orderby'        => 'date',
              'order'          => 'ASC'
          );
          $expertise = new WP_Query($args);

          if ($expertise->have_posts()) :
              while ($expertise->have_posts()) : $expertise->the_post();
                  
                  $icon_default = get_field('expertise_icon_default');
                  $icon_hover   = get_field('expertise_icon_hover');
                  $link         = get_field('expertise_link');
                  
                  ?>
                  <div class="item">
                    <a href="<?php echo esc_url($link ? $link : '#'); ?>">
                      <div class="expertise_item">
                        
                        <div class="expertise_img">
                          <?php if ($icon_default) : ?>
                              <img class="img-fluid exp-one" src="<?php echo esc_url($icon_default['url']); ?>" alt="<?php the_title(); ?>">
                          <?php endif; ?>
                          
                          <?php if ($icon_hover) : ?>
                              <img class="img-fluid exp-two" src="<?php echo esc_url($icon_hover['url']); ?>" alt="<?php the_title(); ?> hover">
                          <?php endif; ?>
                        </div>
                        
                        <div class="expertise_head"><h4><?php the_title(); ?></h4></div>
                        
                        <div class="expertise_content">
                          <?php the_content(); ?>
                        </div>
                      </div>
                    </a>
                  </div>
              <?php endwhile;
              wp_reset_postdata();
          else :
              echo "<p>No expertise items added yet.</p>";
          endif;
          ?>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- END EXPERTISE AREA -->

<!-- START RECENT WORK -->
<!-- START RECENT WORK -->
<section class="recent_work_sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="recent_work_head">
          <h2>Recent Work</h2>
        </div>
      </div>

      <?php
      $args = array(
        'post_type'      => 'portfolio',
        'posts_per_page' => 8,
      );
      $portfolio_query = new WP_Query($args);

      if ($portfolio_query->have_posts()) :
        $count = 0;

        // COLUMN LOOP: 4 columns
        for ($col = 0; $col < 4; $col++) {
          echo '<div class="col-md-3">';

          // Each column can hold 1–2 work items
          $items_in_col = 2;
          if ($col == 0) { $items_in_col = 1; } // your first column has 1 item

          for ($i = 0; $i < $items_in_col; $i++) {
            if ($portfolio_query->have_posts()) {
              $portfolio_query->the_post(); ?>

              <div class="renenct_work_items <?php echo ($i == 0) ? 'mb-2' : ''; ?>">
                <div class="recent_work_img <?php echo ($col == 0 && $i == 0) ? 'recent_first_img' : ''; ?>">
                  
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                  <?php else: ?>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/recent_work/default.jpg" alt="<?php the_title(); ?>">
                  <?php endif; ?>

                  <div class="recent_overlay">
                    <div class="recent_overlay_content">
                      <h6><?php the_title(); ?></h6>
                      <a href="<?php the_permalink(); ?>">View Project</a>
                    </div>
                  </div>
                </div>
              </div>

            <?php }
          }

          echo '</div>'; // end col-md-3
        }

        wp_reset_postdata();
      else :
        echo '<p>No portfolio items found. Please add some.</p>';
      endif;
      ?>

      <!-- View All Button -->
      <div class="col-md-12">
        <div class="recent_work_btn">
          <a href="<?php echo get_post_type_archive_link('portfolio'); ?>">View All</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END RECENT WORK -->
<!-- END RECENT WORK -->

<!-- START OUR TEAM -->
<section class="our_team_sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="our_team_head">
          <h2>Our team</h2>
        </div>
      </div>
      <div class="col-md-12">
        <div id="our_team" class="owl-carousel owl-theme">

          <?php
          $args = array(
              'post_type'      => 'team_member',
              'posts_per_page' => -1,
              'orderby'        => 'title',
              'order'          => 'ASC'
          );
          $team_query = new WP_Query($args);

          if ($team_query->have_posts()) :
              while ($team_query->have_posts()) : $team_query->the_post(); ?>
                
                <div class="item">
                  <div class="our_team_item">
                    
                    <!-- Team Image -->
                    <div class="our_team_img">
                      <?php if (has_post_thumbnail()) :
                        the_post_thumbnail('medium', ['class' => 'img-fluid']);
                      else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/default-team.png" alt="<?php the_title(); ?>">
                      <?php endif; ?>
                    </div>
                    
                    <!-- Team Name -->
                    <div class="our_team_name">
                      <h6><?php the_title(); ?></h6>
                    </div>
                    
                    <!-- Team Role -->
                    <div class="our_team_role">
                      <p><?php echo get_the_content(); ?></p>
                    </div>

                    <!-- Placeholder Socials -->
                    <div class="our_team_social_media">
                      <ul>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/social_media/fb_icon.png" alt=""></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/social_media/ig_icon.png" alt=""></a></li>
                      </ul>
                    </div>

                  </div>
                </div>

              <?php endwhile;
              wp_reset_postdata();
          else: ?>
              <p>No team members found. Add some in your WP Admin!</p>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- END OUR TEAM -->

<?php get_footer(); ?>