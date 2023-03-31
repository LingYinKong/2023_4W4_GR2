<?php 
$titre = get_the_title();
$sigle = substr($titre,0,7); // 582-1w1 - Mise en page web
$titre_long = substr($titre,7,-5); // 582-1w1 Mise en ... (60h)
$duree = substr($titre, strpos($titre, '('));
?> 

<article class="blocflex__search">  
    <h5><a href="<?php the_permalink(); ?>"><?= $titre_long ?></a></h5>
    <h5>Sigle: <?= $sigle ?></h5>
    <h5>Durée: <?= $duree ?></h5>
    <h6>Enseignant: <?php the_field('enseignant') ?></h6>
    <h6>Domaine: <?php the_field('domaine') ?></h6>
    <p><?= wp_trim_words(get_the_excerpt()); ?></p>
</article>