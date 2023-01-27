<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<h1>Bienvenu au cours 4W4</h1>
<main>
    <?php
        if(have_posts()): 
            while(have_posts()) : the_post();
                the_title('<h1>', '</h1>');
                the_content(); ?>
                <hr>
            <?php endwhile;
        endif;
    ?>
</main>
<?php get_footer(); ?>