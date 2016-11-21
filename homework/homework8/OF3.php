<?php

$name = '';
$lastname = '';

function reverser($item1, $item2) {
    echo __FUNCTION__, " /// Now your $item2 and your $item1 are reversed. You are welcome :)";
}
class Reverser {
    function rev($item1, $item2) {
        echo __METHOD__, " /// Now your $item2 and your $item1 are reversed. You are welcome :)";
    }
}

call_user_func_array('reverser', array("First Item", "Second Item"));

$Reverser = new Reverser;
echo '<br><br>';
call_user_func_array(array($Reverser, "rev"), array("First Item", "Second Item"));
?>