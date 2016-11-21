<?php
    
    echo 'This method returns all constants within the reflected class <br><br>';
    
    
    class Test{
        const ONE = "Test Class Constant 1";
        const TWO = "Test Class Constant 2";
    }
    
    $obj = new ReflectionClass( "Test" );
    echo 'The Reflection class will return:<br><br>';
    echo $obj->getconstant( "ONE" ).'<br><br>';
    echo 'and<br><br>';
    echo $obj->getconstant( "TWO" );
    
?>
