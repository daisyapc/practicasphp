<?php
include('superficie.php');
include('funciones.php');

radioMayor(5,4,6);
function radioMayor($r1,$r2,$r3){
     $area1= circulo($r1);
     $area2= circulo($r2);
     $area3= circulo($r3);
     $rmayor= mayor($area1,$area2,$area3);
  return $rmayor;
  }


 ?>
