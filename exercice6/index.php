<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 2</title>

</head>

<body>
    
    <h1>Exercice 6</h1>
   
    <?php 
    
    // on part de la condition condensée ci-dessous pour la transformer en condtion else if 
    // echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
    
    $age = 14;
    
    if ($age >= 18){
        echo "Tu es majeur";
    }
    else 
    {
        echo "Tu n'es pas majeur";
    }
    
    ?>  
    
    
</body>
</html>