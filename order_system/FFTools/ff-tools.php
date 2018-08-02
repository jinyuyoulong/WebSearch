<?php  
/**
 * TOOLS 工具包
 */
class FFTools
{
	
	public function tostUI($msg='', $url='')
	{
	    echo $msg."<a href='".$url."'>返回</a>" ;
	}

	static public function formateDate($date){
	    return date('Y-m-d',strtotime( $date));
    }
}

?>