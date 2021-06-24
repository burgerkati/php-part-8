<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP pt.8 exercice_1</title>
  </head>
  <!-- Afficher la date du jour au format année/mois/jour -->
  <body>
  <?php
  $date = new DateTime('2021-06-23');
  echo $date->format('Y/m/d');
  ?>
  </body>
</html>
