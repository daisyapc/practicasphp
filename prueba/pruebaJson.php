<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba con JSON</title>
  </head>
  <body>
    <?php
    $a = array('a' => 1 ,'b' => 2, 'c' => 'YO <3 JSON');
    var_dump($a);
    '<br>';
    echo json_encode($a);
    $b = json_encode($a);
    echo $b;
    $c= json_decode($b,true);
    print_r ($c);
    echo $c['c'] . " " . "|" . $c['a'] . " " . "|" . " " . $c['b'];
     ?>

  </body>
</html>
