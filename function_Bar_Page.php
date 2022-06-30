<?php
function Bar_Page($p,$Num_Pages,$q,$type,$cate,$filepage,$mby)
	{
if (empty($q))
			{
$showq="";
			} else {
$showq="&q=$q";
			}
if (empty($mby))
			{
$showmby="";
			} else {
$showmby="&m=$mby";
			}

		$message="";

if ($p<=$Num_Pages) {

if ($Num_Pages<="10") {
	$a=1;
	$total=$Num_Pages;

} else {

$a=$p-5;
$total=$p+4;

if ($a<=0){
$a=1;
$total=10;
}

if ($total>=$Num_Pages) {
$a=$Num_Pages-9;
$total=$Num_Pages;
	}

}

	}
do{ 
	if ($p==$a)
	{
	$message.="[ $a ]";
	} else {
	$message.=" <a href=\"".$filepage."?p=".$a.$showq."\">$a</a> ";
	}
	$a++;
} while ($a<=$total);
return "$message";
	}
?>