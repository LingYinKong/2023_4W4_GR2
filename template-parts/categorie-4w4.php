<?php 
/**
 * Template part pour afficher un blocflex note de cours 4w4  
*/

$titre = get_the_title(); 
if (substr($titre,0,1) == '0'){
    $titre = substr($titre,1);
}
?>   
    <article class="blocflex__article">
    <?php 
    if (has_post_thumbnail()){
        the_post_thumbnail('thumbnail');
        echo get_the_ID();
    }
    else
    {
       echo get_the_post_thumbnail(37,'thumbnail');
    }
    
     ?>    
    <h2><a href="<?php the_permalink(); ?>"> <?= $titre ?></a></h2>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article>