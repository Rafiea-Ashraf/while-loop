<?php
function print_table($num){
	$i = 1;
	while($i<= 10)
	{echo '{$num} x $i =' . $i*$num. '\n';
	$i++;
	}
}
 print_table(4)
?>