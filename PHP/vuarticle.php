<?php 

require "articles.php";


var_dump($articles[0]);

$article = $articles[$_GET["art"]];

?>

<p><a href="index.php?page=sience">Les News</a> / <?php $article["titre"] ?></p>


<article>
    <h3><?= $article["titre"] ?></h3>
    <p class=""><?= $article["description"] ?></p>
    <div class="">
        <div class=""><img src= <?= $article["image"] ?> alt=""></div>
    </div>
    <p><?= $article["date"] ?></p>
</article>