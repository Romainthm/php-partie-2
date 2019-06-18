<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>P2 Exercice 8</title>
</head>
<body>
  <main>
    <p>
      <?php
      $isOK=true;
      if (!$isOK){
        echo "C'est pas bon.";
      }else {
        echo "C'est bon.";
      }
      ?>
    </p>
    <p>
      if (!$isOK){<br>
        &emsp;echo "C'est bon.";<br>
      }else {<br>
        &emsp;echo "C'est pas bon.";<br>
      }
    </p>
  </main>
</body>
</html>
