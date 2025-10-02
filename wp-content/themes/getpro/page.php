<?php get_header(); ?>

<main role="main">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="inner_page_banner">
      <div class="inner_pages_img">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/banner/inner_banner.jpg" alt="Banner">
        <?php endif; ?>
      </div>
      <div class="about_me_head">
        <h2><?php the_title(); ?></h2>
        <h6><?php the_field('page_subtitle'); ?></h6>
      </div>
    </section>

    <section class="inner_page_content">
      <div class="container">
        <?php the_content(); ?>
      </div>
    </section>

  <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>