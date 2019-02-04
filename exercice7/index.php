<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 2</title>

</head>

<body>
    
    <h1>Exercice 7</h1>
   
    <?php 
    
    // on part de la condition condensée ci-dessous pour la transformer en condtion else if     
    // echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';    
    
    $isOk = rand(true,false);
    
    if ($isOk == false )
    {
        echo "C'est pas bon !!!";
    }
    else
    {
        echo "C'est ok !!";
    }
    
    ?>  
    
    
</body>
</html>