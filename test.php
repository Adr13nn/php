<?php
    $science = [
        'titre' => 'Civilisations extraterrestres : plus de 26 millions de technosignatures détectées en quatre heures', 
        'date' => '1 novembre 2020', 
        'contenu' => 'article'];

    $ecologie = ['titre' => '', 'date' => '', 'contenu' => ''];

    $sport = ['titre' => '', 'date' => '', 'contenu' =>''];

    // var_dump($science);

    $tableau = [
        [$science],
        [$ecologie],
        [$sport]
    ];

    var_dump($tableau)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        require_once'index.html';
    ?>
    
</body>
</html>