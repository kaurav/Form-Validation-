<html>
<body>
<?php  
class Singleton
{
  private static $instance = null;
  private static $call = 0;
  public static function sing_funtion()
  {

  self :: $call++;
    if(self::$instance==null)
    {

 echo self :: $call;
      echo "hello <br>";
      self::$instance = new Singleton;
    }

    return self::$instance;
  }

  public function checkit(){
echo self :: $call;
}

}

$obj1 = Singleton::sing_funtion();
$obj1->checkit().'<br>';
$obj2 = Singleton::sing_funtion();
$obj2->checkit().'<br>';
$obj3 = Singleton::sing_funtion();
$obj3->checkit().'<br>';

//$obj1->checkit().'<br>';
//$obj2->checkit().'<br>';
//$obj3->checkit();
?>
</body>
</html>
