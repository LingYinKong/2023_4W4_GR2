<?php
/**
* template name: Atelier
*/
get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail('thumbnail'); ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<p>Date de l'atelier: <?php //the_field('date_et_heure'); ?></p>¸
<p>Heure de l'atelier: </p>
<p>Durée de l'atelier: </p>    
<p>Local de l'atelier: </p>    
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();