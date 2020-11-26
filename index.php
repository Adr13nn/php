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

    if ( $_GET["page"] == true ) {
        require 'science1.php';
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


    <h1>Informations</h1>

    <div id="container">
        <ul id="menu">
            <li><a href="science1.php?page=science">Science</a></li>
            <li><a href="ecologie/ecologie.php?page=ecologie">Ecologie</a></li>
            <li id="bsport"><a href="sport/sport1.php?page=sport">Sport</a> 
                <ul id="sport">
                    <li><a href="sport/sport1.php?page=sport">Voile</a> </li>
                    <li><a href="sport/sport2.php?page=sport">Tennis</a> </li>
                    <li><a href="sport/sport3.php?page=sport">Natation</a> </li>
                </ul>
            </li>    
        </ul>
        
    </div> 
    
    <!-- <?php require 'science/science1.php'; ?> -->


</body>
</html>


