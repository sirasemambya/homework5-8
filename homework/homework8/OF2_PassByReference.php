<?php
  echo 'pass parameters as reference';
  
  function pass_by_reference(&$param) {
      array_push($param, 4, 5);
    }
    $ar = array(1,2,3);
    pass_by_reference($ar);
    foreach ($ar as $elem) {
      print "<br>$elem";
    }
?>