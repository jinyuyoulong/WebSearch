<?
function compute($a,$b,$func)	
{	
		if (!is_callable($func)) {
			return false;
		}
		return $a + $b + $func($a,$b);
}

function plus1($x,$y){
	return $x + $y;
}

echo(compute(3,2,'plus1')) ;
?>