<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 2</title>

</head>

<body>
    
    <h1>Exercice 1</h1>
    <?php
    
    $age = rand(1,100); 
    
    if ($age >= 18)
    {
        echo 'Vous avez ' . $age . '  donc vous êtes majeur' ;
    }
    else 
    {
        echo 'Vous avez ' . $age . ' donc vous êtes mineur';
    }
    
    ?>  
    
    
</body>
</html>