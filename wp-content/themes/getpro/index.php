<?php get_header(); ?>
<main>
  <h2><?php esc_html_e( 'This is index.php fallback', 'getpro-design' ); ?></h2>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h3><?php the_title(); ?></h3>
    <div><?php the_content(); ?></div>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>