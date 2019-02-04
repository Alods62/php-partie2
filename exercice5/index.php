<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 2</title>

</head>

<body>
    
    <h1>Exercice 5</h1>
   
    <?php 
    
    // on part de la condition condensée ci-dessous pour la transformer en condtion else if 
    // echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
    
    $gender = "Femme";
    
    if ($gender != "Homme")
    {
        echo "C'est une développeuse !!!";
    }
    else 
    {
        echo "C'est un développeur !!!";
    }
    
    ?>  
    
    
</body>
</html>