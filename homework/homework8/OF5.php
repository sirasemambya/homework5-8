<?php

echo 'The Test class has 3 properties: protected \$pro, private \$priv and public \$pub.<br><br>';

class Test {
    public    $pub  = 1;
    protected $pro  = 2;
    private   $priv  = 3;
}

$test = new Test();

$reflect = new ReflectionClass($test);
$props   = $reflect->getProperties(ReflectionProperty::IS_PUBLIC | ReflectionProperty::IS_PROTECTED);

echo 'Since we filter out the private properties, they will not be displayed.<br><br>';
foreach ($props as $prop) {
    print $prop->getName() . "\n";
}

var_dump($props);

?>