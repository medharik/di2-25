<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les tableaux et les boucles en php</title>
</head>
<body>
    <h1>les tableaux + boucles en PHP</h1>
    <h2>LES TABLEAUX INDEXES (LES CASES DU TABLEAUX SONT NUMEROTES A PARTIR DE 0)</h2>
    <?php
    //creer un tableau  (array)
    $t=[13,-12,9];
    // $t=array(13,13,9);
    echo $t[0],$t[1],$t[2];
    
    
    echo $t[3] ;//undefined
    //ajouter une valeur a la fin : push 
    $t[]=17;
    $t[]=20;
    $t[]=7;
    //remplacer une valeur 
    $t[0]=100;
    //pour consulter rapidement toutes les valeurs du tableau:
    print_r($t) ; echo "<br>";
    //ou
    // var_dump($t);
    //supprimer une case : unset
    unset($t[0]);
    // $t[1]=null;
    print_r($t) ;
    //les boucles 
    // boucle (souvent utilisee quand on connait a l'avance le nombre de repetition)
    echo count($t)."<br>";

    $somme=0;
for ($i=0; $i < count($t) ; $i++) { 
    if(isset($t[$i])) {

        echo $t[$i]."<br>";
        $somme+=$t[$i];
    }

}
echo "<h2>la somme est $somme</h2>";

    ?>
</body>
</html>