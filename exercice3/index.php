<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 2</title>

</head>

<body>
    
    <h1>Exercice 3</h1>
    <?php
    
    $age = rand(1,100);
    $genderArray = ['homme','femme'];
    $gender = $genderArray[rand(0,1)];
    
    if ($age > 0 && ($gender == 'femme' || $gender == 'homme'))
    {
        if ($age >= 18 && $gender == 'femme' )
        {
            echo 'Vous êtes une femme majeure de ' . $age . ' ans';        
        }
        else if ($age < 18 && $gender == 'femme' )
        {
            echo 'Vous êtes une femme mineure de ' . $age . ' ans';        
        }
        else if ($age >= 18 && $gender == 'homme' )
        {
            echo 'Vous êtes un homme majeur de ' . $age . ' ans';     
        }
        else if ($age < 18 && $gender == 'homme' )
        {
            echo 'Vous êtes un homme mineur de ' . $age . ' ans';        
        }
    }
    else
    {
        echo "Veuillez entrer des infos valide.";
    }
    
    /*
    $age = rand(1,100);
    $genderList = array('homme','femme'); // déclaration d'un tableau 
    $gender = array_rand($genderList,1); // array_rand récupère une valeur aléatoire dans le tableau $genderList
    
    if ($gender == 'homme' && $age >= 18) 
    {
        echo 'Vous êtes un homme de ' . $age . ' ans, et vous êtes majeur.';
    }
    else if ($gender == 'homme' && $age < 18)
    {
        echo 'Vous êtes un homme de ' . $age . ' ans, et vous êtes mineur.';
    }
    else if ($gender == 'femme' && $age >= 18) 
    {
        echo 'Vous êtes une femme de ' . $age . ' ans, et vous êtes majeure.';
    }
    else if ($gender == 'femme' && $age < 18)  
    {
        echo 'Vous êtes une femme de ' . $age . ' ans, et vous êtes mineure.';
    }
    else {
        echo 'Veuillez entrer des infos valide.';
    }
        
          
        
    if ($gender == 'femme')
    {
        if($age >= 18){
        echo 'Vous êtes une femme majeure';
        }
        else
        {
        echo 'Vous êtes une femme mineure';
        }
    }
    else if ($gender == 'homme')
    {
        if($age >= 18){
        echo 'Vous êtes un homme majeur';
        }
        else
        {
        echo 'Vous êtes un homme mineur';
        }
    }
    */
    ?>  
    
    
</body>
</html>