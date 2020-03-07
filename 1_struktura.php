<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Struktura</title>
  </head>
  <body>
    <?php
      $name= "Janusz";
      $surname= "Kowal";


      //heredoc
      echo <<<SHOW


      Imię: $name<br>

SHOW;

      echo <<<SHOW


      Imię: $name<br>

SHOW;

     ?>
  </body>
</html>
