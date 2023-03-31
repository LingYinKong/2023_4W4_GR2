<?php 
$titre = get_the_title();
$sigle = substr($titre,0,7); // 582-1w1 - Mise en page web
$titre_long = substr($titre,7,-5); // 582-1w1 Mise en ... (60h)
$duree = substr($titre, strpos($titre, '('));
?> 

<article class="blocflex__search">  
    <h3><a href="<?php the_permalink(); ?>"> <?= $sigle ?></a></h3>
    <h5><?= $titre_long ?></h5>
    <h3><?php the_field('enseignant') ?></h3>
    <p><?php the_field('domaine') ?></p>
    <p><?= wp_trim_words(get_the_excerpt()); ?></p>
    <h5><?= $duree ?></h5>
</article>