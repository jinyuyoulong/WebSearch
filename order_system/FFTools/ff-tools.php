<?php  
/**
 * TOOLS 工具包
 */
class FFTools
{
	
	static public function tostUI($msg='', $url='')
	{
//	    echo $msg."<a href='".$url."'>返回</a>" ;
        echo '<script language="JavaScript">';
        echo "alert($msg);location.href='$url';"."</script>";

	}

	static public function formateDate($date){
	    return date('Y-m-d',strtotime( $date));
    }
}

?>