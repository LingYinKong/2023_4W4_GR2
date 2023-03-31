
<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>

<main class="site__main">
    <section class="blocflex">
      <?php
      if (have_posts() ) :
         while (have_posts() ) : the_post(); ?>
         <?php
          get_template_part('template-parts/search', '4w4'); ?>
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
</main>

<?php get_footer(); ?>