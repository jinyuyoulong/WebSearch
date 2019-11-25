 <?
 // // 销毁session数据
 // 1. unset($_SESSION['XXX']);
 // // PS:请不要！请不要！请不要unset($_SESSION),
 // // 会导致后续无法使用$_SESSION这个变量！！！

 // 2.$_SESSION = array();//赋值空数组
 // 3. session_destroy()
 // 4.