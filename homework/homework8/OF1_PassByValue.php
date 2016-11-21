<?php
  echo 'pass parameters as values';
  
  function pass_by_value($param) {
      array_push($param, 4, 5);
  }
  
  $ar = array(1,2,3);
  
  pass_by_value($ar);
  
  foreach ($ar as $elem) {
    print "<br>$elem";
  }
?>