<?php 
$titre = get_the_title();
$sigle = substr($titre,0,7); // 582-1w1 - Mise en page web
$titre_long = substr($titre,7,-5); // 582-1w1 Mise en ... (60h)
$duree = substr($titre, strpos($titre, '('));
?> 

<article class="blocflex__search">  
    <h5><a href="<?php the_permalink(); ?>"> <?= $sigle ?></a></h5>
    <h6><?php the_field('enseignant') ?></h6>
    <h6><?php the_field('domaine') ?></h6>
    <h5><?= $duree ?></h5>
    <h5><?= $titre_long ?></h5>
    <p><?= wp_trim_words(get_the_excerpt()); ?></p>
</article>