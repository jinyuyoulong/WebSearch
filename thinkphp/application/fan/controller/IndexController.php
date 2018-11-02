<?php  
namespace app\fan\controller;
use app\common\model\User;
/**
 * 
 */
class IndexController
{
	
	function index()
	{
        $user = new User;
        $users = $user->select();
//        var_dump($users);
		return $users;
	}

	function fan0()
    {
        return 'fan 0';
    }
}
?>