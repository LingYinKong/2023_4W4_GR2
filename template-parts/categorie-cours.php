<?php 
/**
 * Template part pour afficher un blocflex cours
 */
    $titre = get_the_title();
    $sigle = substr($titre,0,7); // 582-1w1 - Mise en page web
    $titre_long = substr($titre,7,-5);  // 582-1w1 - Mise en ... (60h)
    $duree = "60";
?> 
<article class="blocflex__article">
    <h2><a href="<?php the_permalink(); ?>"> <?= $sigle ?></a></h2>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <h5><?= $duree ?></h5>
</article>