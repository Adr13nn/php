<?php

require_once "articles.php";

// var_dump($articles);

// $html = "";

// $len = sizeof($articles);
// for($i =0; $i < $len; $i++) {

//     $html .= "<article><h3>" . $articles[$i]["titre"] . "</h3";
// }

// foreach($articles as $index => $article) {

//     $html .= "<article><h3>Article N°" . ($index + 1) . " " . $article["titre"] . "</h3>";
//     $html .= "<p class='news main'>" . $article['description'] . "<a href='index.php?page=ecologie'>Lire la suite...</a></p>";
//     $html .= "<div class='img-cont'><img class='img-resp' src='" . $article["image"] . "'alt=''></div></article";
// }

// 



?>

<?php foreach($articles as $index => $article) : ?>

<article>
    <h3><?= $article["titre"] ?></h3>
    <p class=""><?= substr($article["description"], 0, 100) ?>...<a href="index.php?page=vuarticle&art=<?= $index ?>">Lire la suite...</a></p>
    <div class="">
        <div class=""><img class="" src= <?= $article["image"] ?> alt=""></div>
    </div>
</article>

<?php endforeach ?>









