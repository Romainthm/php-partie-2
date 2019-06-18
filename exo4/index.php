<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>P2 Exercice 4</title>
</head>
<body>
  <main>
    <?php
    $magnitude=2;
    $descrition= array("Micro-séisme impossible à ressentir."
    ,"Micro-séisme impossible à ressentir mais enregistrable par les sismomètres."
    ,"Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti."
    ,"Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats."
    ,"Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes."
    ,"Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre."
    ,"Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance."
    ,"Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres."
    ,"Séisme capable de tout détruire sur une très vaste zone.");
    ?>
    <p>Le séisme en cours est de puissance <?= $magnitude ?>.</p>
    <?php
    if ($magnitude>0 && $magnitude<10){
      echo $descrition[$magnitude-1];
    }
    ?>
  </main>
</body>
</html>
