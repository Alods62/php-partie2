<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 2</title>

</head>

<body>
    
    <h1>Exercice 2</h1>
    <?php
    
    // rand(paramètre, ..) fonction aléatoire, 
    $isEasy = rand(true,false);
    
    if ($isEasy == true)
    {
        echo 'C\'est facile!!';
    }
    else 
    {
        echo 'C\'est difficile !!!';
    }
    
    $isEasy2 = true;
    
    switch ($isEasy2){
        case true : 
            echo 'C\'est facile';
        break;
        default :
            echo 'C\'est difficile !!!';
        break;
    }
    
    // autre méthode :
    // conditions condensées ou ternaires
    // on teste la condition ($isEasy == true)
    // si la condtion est vrai on affecte la valeur après le point d'interrogation " ? "
    // si la condition est fausse on affecte alors la valeur après les deux points " : "
    // echo ($isEasy == true) ? "C'est facile !!" : "C'est difficile !!!";
    
    ?>  
    
    
</body>
</html>