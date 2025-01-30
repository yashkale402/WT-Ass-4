<?php

/*
Ass 4 : 2 Write a PHP script to create a Class shape and its subclass triangle, square and display area of the selected shape 
(Use the concept of Inheritance). Display menu (use radio button)
a)	Triangle
b)	Square
c)	Rectangle
d)	Circle
*/
define('PI','3.14');
class shape
{
	var $ar;
}
class triangle extends shape
{
	 function area($b,$h)
	 {
	 	$ar=(1/2)*$b*$h;
		echo "<h2> Area of Triangle is : $ar</h2>";
	 }
}
class square extends shape
{
	function area($s)
	{
		$ar=$s*$s;
		echo "<h2> Area of Square is : $ar</h2>";
	}
}
class rectangle extends shape
{
	function area($l,$w)
	{
		$ar=$l*$w;
		echo "<h2> Area of Rectangle is : $ar</h2>";
	}
}
class circle extends shape
{
	function area($r)
	{
		$ar=PI*$r*$r;
		echo "<h2> Area of Circle is : $ar</h2>";
	}
}
$op=$_POST['op'];
switch($op)
{
	case 'tri': 	$b=$_POST['b'];
			$h=$_POST['h'];
			$t=new triangle();
			$t->area($b,$h);
			break;
	case 'squ': 	$side=$_POST['s'];
			$s=new square();
			$s->area($side);
			break;
	case 'rec': 	$l=$_POST['l'];
			$w=$_POST['w'];
			$r=new rectangle();
			$r->area($l,$w);
			break;
	case 'cir': 	$r=$_POST['r'];
			$c=new circle();
			$c->area($r);
			break;
}
?>
