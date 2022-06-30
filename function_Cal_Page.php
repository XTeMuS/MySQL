<?php
function Cal_Page($p,$Num_Rows,$Per_Page)
	{

if ( empty($p) ) { $p="1"; }
$Per_Page=(int) $Per_Page; 
$p=(int) $p; 

$Prev_Page=$p - 1; 
$Next_Page=$p + 1; 
$Page_start=($Per_Page*$p)-$Per_Page; 

if ($Num_Rows<=$Per_Page)
{
	$Num_Pages=1; 
} else if (($Num_Rows%$Per_Page)== 0) {
	$Num_Pages=($Num_Rows/$Per_Page); 
} else {
	$Num_Pages=($Num_Rows/$Per_Page)+1; 
}
$Num_Pages=(int)$Num_Pages; 

if ($p>$Num_Pages) 
{
$p=$Num_Pages;
$Page_start=($Per_Page*$p)-$Per_Page;
if ($Page_start=="1") { $Page_start=="0"; }
$Prev_Page=$Num_Pages-1;
} else if ($p<="0") {
$p="1";
$Page_start="0";
$Next_Page="2";
}
//return "$p|$Num_Pages|$Prev_Page|$Next_Page|$Page_start|$Per_Page";
return "$p:$Num_Pages:$Prev_Page:$Next_Page:$Page_start:$Per_Page";
	}
?>