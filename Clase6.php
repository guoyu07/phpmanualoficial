<?php
header ('Content-type: text/html; charset=utf-8');
class Foo
{
    public $bar = 'propiedad';
    
    public function bar() {
        return 'método';
    }
}

$obj = new Foo();
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;