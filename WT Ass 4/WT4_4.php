
<?php
/*Ass 4 : 4) Write a PHP script to demonstrate the concept of introspection for examining object.*/
class CLASS1
{
var $i;
function fun1() {}
function fun2() {}
}
class CLASS2 extends CLASS1
{
var $j,$k;
function fun3() {}
function fun4() {}
}
$obj=new CLASS2();
if(is_object($obj)) 
{
	echo "Object obj is belongs to class ".get_class($obj)."<br>"; 
}
if(method_exists($obj,'fun4')) 
{
	echo "Method fun4 exists for object obj"."<br>";
}
if(!method_exists($obj,'fun5')) 
{
	echo "Method fun5 does not exists for object obj"."<br>";
}
$v=get_object_vars($obj); 
echo "Properties that are set in an object obj are : ";
print_r($v);
?>
