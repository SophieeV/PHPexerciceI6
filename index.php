<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice I6</title>
</head>
<body>
<?php
  $mois = 2; 
  echo 'février 2021: '.date('t',mktime(0,0,0,$mois,1,2021)).' jours';
?>
</body>
</html>