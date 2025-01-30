<html>
<body>
<?php
class Account 
{
	public $acc_no;
	public $acc_name;
  	public function __construct($acc_name, $acc_no) 
	{
    		$this->acc_name = $acc_name;
		$this->acc_no = $acc_no;
  	}
	public function display() 
	{
    		echo"<table border='2'>";
            	echo"<tr><td>Account Name</td><td>Account Number</td><td>Balance</td><td>Min_balance</td></tr>";
      		echo "<tr><td>{$this->acc_name}</td>";
            	echo "<td>{$this->acc_no}</td>";
	}
}

class saving_acc extends Account 
{
	public $balance;
  	public $min_amount;
  	public function __construct($acc_name, $acc_no, $balance,$min_amount) 
	{
    		parent::__construct($acc_name, $acc_no);
    		$this->balance = $balance;
              	$this->min_amount = $min_amount;
  	}
	public function display() 
	{      
		parent::display();        
            	echo"<td>{$this->balance}</td>";
            	echo"<td>{$this->min_amount}</td></tr>";
		echo"</table>";
	}
    public function deposit()
    {
    	$this->balance=$this->balance + 30000 ;
        $this->display();
    }
    public function withdraw()
    {
    	$this->balance=$this->balance - 30000 ;
        $this->display();
    }
}

class current_acc extends Account 
{
	public $bal;
  	public $mamt;
  	public function __construct($acc_name, $acc_no, $bal,$mamt) 
	{
    		parent::__construct($acc_name, $acc_no);
    		$this->bal = $bal;
            	$this->mamt = $mamt;
  	}
  	public function display() 
	{
    		parent::display(); 
            	echo "<td>{$this->bal}</td>";
            	echo "<td>{$this->mamt}</td></tr> ";
		echo"</table>";
    }
    public function deposit()
    {
    	$this->bal=$this->bal + 20000 ;
        $this->display();
    }
    public function withdraw()
    {
    	$this->bal=$this->bal - 20000 ;
        $this->display();
    }
}

$saving_acc= new saving_acc("Kajal", 1111, 50000,1000);
$current_acc=new current_acc("Payal",2222,40000,1000);
$AT=$_POST['at'];
$BT=$_POST['bt'];
if($AT=="saving")
{
    switch($BT)
    {
    	case "create":	$saving_acc->display();
        		break;
        case "deposit":	$saving_acc->deposit();
        		break;
        case "withdraw" : $saving_acc->withdraw();
        		break;
    }
	
}
if($AT=="current")
{
    switch($BT)
    {
    	case "create":	$current_acc->display();
        		break;
        case "deposit":	$current_acc->deposit();
        		break;
        case "withdraw" : $current_acc->withdraw();
        		break;
    }
	
}
?>
</body>
</html>

