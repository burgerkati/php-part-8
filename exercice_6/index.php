<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP pt.8 exercice_6</title>
  </head>
  <body>
  <?php
  // to find the number of days in the month of February 2021
  $days = cal_days_in_month(CAL_GREGORIAN,02,2021);
  // output of the number of days in the month of February 2021
  echo "There were {$days} days in February 2021";
  ?>
  </body>
</html>
