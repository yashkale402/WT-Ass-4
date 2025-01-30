<?php
class teacher
{
	var $code,$name,$qualification;
	function __construct($code,$name,$qualification)
	{
		$this->code=$code;
		$this->name=$name;
		$this->qualification=$qualification;
	}
	function display()
	{
		echo "<td>$this->code</td>";
		echo "<td>$this->name</td>";
		echo "<td>$this->qualification</td>";
	}
	function getcode()
	{
		return $this->code;
	}

}
class teach_account extends teacher
{
	var $account_no,$Joining_date;
	function __construct($code,$name,$qualification,$account_no,$Joining_date)
	{
		parent::__construct($code,$name,$qualification);
		$this->account_no=$account_no;
		$this->Joining_date=$Joining_date;		
	}
	function display()
	{
		parent::display();
		echo "<td>$this->account_no</td>";
		echo "<td>$this->Joining_date</td>";
	}
}
class teach_sal extends teach_account
{
    	var $basic_pay,$earning,$deduction;
    	function __construct($code,$name,$qualification,$account_no,$Joining_date,$basic_pay,$earning,$deduction)
	{
		parent::__construct($code,$name,$qualification,$account_no,$Joining_date);
		$this->basic_pay=$basic_pay;
		$this->earning=$earning;
		$this->deduction=$deduction;		
	}
	function display()
	{
		echo "<tr>";
		parent::display();
		echo "<td>$this->basic_pay</td>";
		echo "<td>$this->earning</td>";
		echo "<td>$this->deduction</td>";
		echo "</tr>";
	}
	function displaysal()
	{
		$salary=$this->basic_pay+$this->earning-$this->deduction;
		echo "<br> Salary of $this->name is: ".$salary;
	}
	function search($c)
	{
		if($this->code==$c)
			return 1;
		else
			return 0;
	}
}
$ts[0]=new teach_sal(2,'Payal','msc',12345,'5 july 2007',25000,200000,30000);
$ts[1]=new teach_sal(1,'Aachal','mca',64267,'3 june 2012',35000,300000,25000);
$ts[2]=new teach_sal(3,'Kajal','bca',85313,'12 aug 2016',15000,100000,15000);
$temp=new teach_sal(0," "," ",0," ",0,0,0);
$op=$_POST['op'];

switch($op)
{
	case 'master':	echo "<table border=1>";
			echo "<tr><td>Code</td><td>Name</td><td>qualification</td><td>account no</td><td>Joining_date</td><td>basic_pay</td><td>earning</td><td> deduction</td>";
			for($i=0;$i<count($ts);$i++)
			{
				$ts[$i]->display();
			}
			echo "</table>";
			break; 
	case 'sort':   	echo "After sorting";
			for($i=0;$i<count($ts);$i++) 
			{
			  	  for($j=$i+1;$j<count($ts);$j++)
			   	  {
			   	  	if($ts[$i]->getcode()>$ts[$j]->getcode())
			   	  	{
			   	  		$temp=$ts[$i];
			   	  		$ts[$i]=$ts[$j];
			   	  		$ts[$j]=$temp;
			   	  	}
			   	  }
			}
			echo "<table border=1>";
			echo "<tr><td>Code</td><td>Name</td><td>qualification</td><td>account no</td><td>Joining_date</td><td>basic_pay</td><td>earning</td><td> deduction</td>";
			for($i=0;$i<count($ts);$i++)
			{
				$ts[$i]->display();
			}
			echo "</table>";
			break;
	case 'search': 	$c=$_POST['code'];
			for($i=0;$i<count($ts);$i++)
			{
				$response=$ts[$i]->search($c);
				if($response==1)
				{
					echo "Teacher record found with code = $c";
					break;
				}
			}
			if($response==0)
				echo "Teacher record not found with code = $c";
			break;
	case 'displaysal':	for($i=0;$i<count($ts);$i++)
				{
					$ts[$i]->displaysal();
				}
				break;
}
?>
