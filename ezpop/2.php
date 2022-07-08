<?php
  class A{
  public function __destruct()
  {
    echo "aaaa";
  }
}
$c = serialize(array(0=>new A(),1=>""));
var_dump($c);
// $b = 'a:2:{i:0;O:1:"A":0:{}i:0;s:0:"";}';
// $a = unserialize($b);
throw new Exception("a");