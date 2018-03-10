<?php
header ('Content-type: text/html; charset=utf-8');
class A
{
	function foo()
	{
		if (isset($this)) {
			echo '$this está definida (';
			echo get_class($this);
			echo ")\n";
		} else {
			echo "\$this no está definida.\n";
		}
	}
}

class B
{
	function bar()
	{
		// Nota: la siguiente línea arrojará una advertencia si E_STRICT está habilitado.
		A::foo();
	}
}

$a = new A();
$a->foo();
A::foo();

$b = new B();
$b->bar();
B::bar();