<?php 
$titre = get_the_title(); 
if (substr($titre,0,1) == '0'){
    $titre = substr($titre,1);
}
?>   
    <article class="blocflex__search">
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article>