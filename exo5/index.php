<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>P2 Exercice 5</title>
</head>
<body>
  <main>
    <?php
    $gender="homme";
    if ($gender =! "homme"){
      echo "<p>C'est une developpeuse !!!</p>";
    }else{
      echo "<p>C'est un developpeur !!!</p>";
    }
    ?>
    <p class="my-5">
      if ($gender =! "homme"){<br>
        &emsp;echo "C'est une developpeuse !";<br>
      }else{<br>
        &emsp;echo "C'est un developpeur !";<br>
      }
    </p>
  </main>
</body>
</html>
