<?php
//namespace dbManager\db_mysql;

class FFPDO extends PDO{
    private static $_instance = null;
    /**
     * 静态工厂方法，返还此类的唯一实例
     */
    public static function init(){
        if (is_null(self::$_instance))
        {
            try{
                self::$_instance = new FFPDO('mysql:host=127.0.0.1;dbname=SchoolOrders','root','333',array(
                    PDO::ATTR_PERSISTENT => true
                ));
                return self::$_instance;
            }catch (PDOException $e){
                print "Error!: ".$e->getMessage()."<br>";
                die();
            }

        }else{
            echo 'ffpdo have init';
            return self::$_instance;
        }
    }
    /**
     * 私有化默认构造方法，保证外界无法直接实例化
     */
//    private function __construct(string $dsn, string $username, string $passwd, array $options)
//    {
//        parent::__construct($dsn, $username, $passwd, $options);
//    }

    /**
     * 防止用户克隆实例
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
        die('clone is not allowed.'.E_USER_ERROR);
    }


}
?>

