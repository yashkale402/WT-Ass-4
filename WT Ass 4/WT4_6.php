<?php
/*Ass 4 : 6 Define a class Employee having private members – id, name, department, salary. 
Define parameterized constructors. Create a subclass called “Manager” with private member bonus. 
Create 6 objects of the Manager class and display the details of the manager having the maximum total salary (salary + bonus).*/
class employee
{
	private $id,$name,$department,$salary;
	function __construct($id,$name,$department,$salary)
	{
		$this->id=$id;
		$this->name=$name;
		$this->department=$department;
		$this->salary=$salary;
	}
	function display()
	{
		echo "Employee id: $this->id <br>";
		echo "Employee Name: $this->name <br>";
		echo "Employee Department: $this->department <br>";
		echo "Employee Salary: $this->salary <br>";
	}
	function getsal()
	{
		return $this->salary;
	}
}
class manager extends employee
{
	private $bonus;
	static $maximum=0;
	function __construct($id,$name,$department,$salary,$bonus)
	{
		parent::__construct($id,$name,$department,$salary);
		$this->bonus=$bonus;
	}
	function display()
	{
		parent::display();
		echo "Employee Bonus: $this->bonus<br>";
		echo "Total Salary (Maximum) :".self::$maximum;
	}
	function max($m)
	{
         $sal=$this->getsal();
         $totalsal=$sal+$this->bonus;
         if($totalsal>self::$maximum)
         {
         	self::$maximum=$totalsal;
         	return $this;
         }
         else
         {
         	return $m;
         }
        
	}
}
$m=new manager(0," "," ",0,0);
$m1=new manager(1,"Aachal","Computer",35000,3000);
$m=$m1->max($m);
$m2=new manager(2,"Payal","Computer",30000,3500);
$m=$m2->max($m);
$m3=new manager(3,"Kajal","Computer",42000,4000);
$m=$m3->max($m);
$m4=new manager(4,"Vighnesh","Electronics",38000,4000);
$m=$m4->max($m);
$m5=new manager(5,"Rushikesh","Electronics",48000,4000);
$m=$m5->max($m);
$m6=new manager(6,"Prathnesh","Electronics",26000,1000);
$m=$m6->max($m);

$m->display();
?>