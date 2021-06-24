<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP pt.8 exercice_5</title>
  </head>
  <body>
  <?php
  // set default timezone
  date_default_timezone_set("Europe/Berlin");
  // create current timestamp
  $date=date_create();
  date_timestamp_get($date);
  // output of current timestamp from 24th of June 2021 around 15h30
  echo "The current timestamp is" . date_format($date, "U = Y-m-d") . "<br>";
  // change current timestamp to 1st of February 2021 from 24th of June 2021
  $date=strtotime("-21 Weeks + 4 Days");
  // output of current timestamp transformation to 1st of February 2021
  echo date("Y-m-d", $date);
  ?>
  </body>
</html>
