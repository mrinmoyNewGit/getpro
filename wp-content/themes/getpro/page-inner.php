<?php
/*
Template Name: Inner Page
*/
get_header(); ?>

<main role="main">

  <!-- Banner -->
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
      <h6><?php the_field('page_subtitle'); ?></h6>
    </div>
  </section>

  <!-- Page content -->
<section class="inner_page_content">
  <div class="container">
    <?php
    if (have_posts()):
      while (have_posts()): the_post();
        echo '<div class="inner_content_wrapper">';
        the_content();
        echo '</div>';
      endwhile;
    endif;
    ?>
  </div>
</section>

</main>

<?php get_footer(); ?>