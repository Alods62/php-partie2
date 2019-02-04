<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 2</title>

</head>

<body>
    
    <h1>Exercice 4</h1>
    <?php
    
    $magnitude = rand(1,10);

    switch ($magnitude) // le switch prendra en compte la valeur de la variable magnitude
    { 
        case 1: // lorsque que séisme vaut 1 ...
            echo $magnitude . "Micro-séisme impossible à ressentir."; // ... on affiche la phrase précédente
        break; // on passe à la condition suivante

        case 2:
            echo $magnitude . "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;

        case 3:
            echo $magnitude . "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;

        case 4:
            echo $magnitude . "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        break;

        case 5:
            echo $magnitude . "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        break;

        case 6:
            echo $magnitude . "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        break;

        case 7:
            echo $magnitude . "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;
            
        case 8:
            echo $magnitude . "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break; 
        
        case 9:
            echo $magnitude . "Séisme capable de tout détruire sur une très vaste zone.";
        break;

        default:
            echo $magnitude . "Ce séisme n'existe pas ou n'est pas répertoriable sur l'échelle de Richter";
    }


    
    ?>  
    
    
</body>
</html>