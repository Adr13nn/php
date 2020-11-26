<?php

    var_dump($_GET);

    if(isset($_GET["page"])) {

        switch($_GET["page"]) {
            case "science" : $pageAINCLURE = "science.php";
            break;
            case "ecologie" : $pageAINCLURE = "ecologie.php";
            break;
            case "sport1" : $pageAINCLURE = "sport1.php ";
            break;
            case "sport2" : $pageAINCLURE = "sport2.php";
            break;
            case "sport3" : $pageAINCLURE = "sport3.php";
            break;
            default : $pageAINCLURE = "science.php"
        }


    } else {
        $pageAINCLURE = "science.php";
    }

    
    
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

    
    
    <?php require "PHP/$pageAINCLURE" ?>


</body>
</html>


