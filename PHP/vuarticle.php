<?php 

require "articles.php";


?>




<article>
    <h3><?= $article1["titre"] ?></h3>
    <p class=""><?= $article1["description"] ?></p>
    <div class="art">
        <div class="img-cont"><img class="img-resp" src= <?= $article1["image"] ?> alt=""></div>
    </div>
    <p><?= $article1["date"] ?></p>
</article>