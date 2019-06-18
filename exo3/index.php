<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>P2 Exercice 3</title>
</head>
<body>
  <main class="bg-white py-5 text-center">
    <p>
      <?php
      $gender="homme";
      $age=36;
      echo "Vous êtes ";
      if ( $gender == "homme"){
        echo "un homme et vous êtes ";
        echo($age>=18)?"majeur.":"mineur.";
      }else{
        echo "une femme et vous êtes ";
        echo($age>=18)?"majeure.":"mineure.";
      }
      ?>
    </p>
  </main>
</body>
</html>
