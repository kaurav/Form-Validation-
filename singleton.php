<html>
<body>
<?php  
class Singleton
{
  private static $instance = null;

  public static function sing_funtion()
  {
    if(self::$instance==null)
    {
      echo "hello ";
      self::$instance = new Singleton;
//      print_r(self::$instance); die();
    }
print_r(self::$instance);die();
    return self::$instance;
  }
}

$obj1 = Singleton::sing_funtion();
$obj1 = Singleton::sing_funtion();
$obj1 = Singleton::sing_funtion();
?>
</body>
</html>
