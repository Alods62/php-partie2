<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 2</title>

</head>

<body>
    
    <h1>Exercice 8</h1>
   
    <?php 
    
    // on part de la condition condensée ci-dessous pour la transformer en condtion else if  
    // echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!'; 
    
    $isOk = (rand(true,false));
    
    if ($isOk)
    {
        echo "C'est ok !!";
    }
    else 
    {
        echo "C'est pas bon !!!";
    }
    
    ?>  
    
    
</body>
</html>