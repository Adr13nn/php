<?php
    // $science = [
    //     'titre' => 'Civilisations extraterrestres : plus de 26 millions de technosignatures détectées en quatre heures', 
    //     'date' => '1 novembre 2020', 
    //     'contenu' => 'article'];

    // $ecologie = ['titre' => 'la fin du monde', 
    //     'date' => '2020', 
    //     'contenu' => 'FakeNews'];

    // $sport = ['titre' => 'Record du monde', 
    //     'date' => '2009', 
    //     'contenu' =>'article'];

    // var_dump($science, $ecologie, $sport);
    // $tableau dans articles.php


    var_dump($_GET)

    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>


    <h1>Informations</h1>

    <div id="container">
        <ul id="menu">
            <li><a href="index.php?page=science">Science</a></li>
            <li><a href="index.php?page=ecologie">Ecologie</a></li>
            <li id="bsport"><a href="index.php?page=sport1">Sport</a> 
                <ul id="sport">
                    <li><a href="index.php?page=sport1">Voile</a> </li>
                    <li><a href="index.php?page=sport2">Tennis</a> </li>
                    <li><a href="index?page=sport3">Natation</a> </li>
                </ul>
            </li>    
        </ul>
        
    </div> 
    
    <!-- <?php require 'science/science1.php'; ?> -->


</body>
</html>


