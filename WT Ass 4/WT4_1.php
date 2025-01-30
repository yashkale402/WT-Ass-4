<?php
$r=$_POST['r'];
$h=$_POST['h'];
define('PI','3.14');
interface Shape
{
    function area();
    function volume();
}
class Cylinder implements Shape
{
    public $a;
    public $v;
    public $r;
    public $h;
    function __construct($r,$h)
    {
        $this->r=$r;
        $this->h=$h;
    }
    function area()
    {
        $this->a=2*($this->h*$this->r);
        echo"Area of Cylinder= ".$this->a."<br>";
    }
    function volume()
    {
        $this->v=PI*$this->r*$this->r*$this->h;
        echo"Volume of Cylinder= ".$this->v."<br>";
    }
}
$c=new Cylinder($r,$h);
$c->area();
$c->volume();
?>