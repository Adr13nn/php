<?php

require_once "articles.php";

var_dump($articles)
?>

<h2>Les news</h2>

<article>
    <h3><?= $articles[$article1[0]]; ?></h3>
    <p class="news main">Culpa, distinctio inventore quia, quasi doloremque perferendis quaerat quisquam sunt consequatur alias nobis praesentium, unde nulla aut adipisci doloribus. <a href="index.php?page=article&art=0">Lire la suite...</a></p>
    <div class="art">
        <div class="img-cont"><img class="img-resp" src="img/art1.webp" alt=""></div>
    </div>
</article>
