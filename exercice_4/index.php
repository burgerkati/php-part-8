<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP pt.8 exercice_4</title>
  </head>
  <body>
  <?php
  // allows us to change and set local format settings (the .utf8 was necessary to set local format settings)
  setlocale(LC_TIME, ['fr_FR.utf8']);
  // to show full weekday name day month and year
  echo "Aujourd'hui nous sommes le, " . strftime("%A %e %B %Y", mktime(0,0,0,06,24,2021));
  ?>
  </body>
</html>
