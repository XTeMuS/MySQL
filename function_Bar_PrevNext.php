<?php
function Bar_PrevNext($p,$Num_Pages,$Prev_Page,$Next_Page,$q,$type,$cate,$filepage,$mby)
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

		$message="<center><table>";

	if ( $Prev_Page>="1" )
		{
		$message.="<tr><td><a href=\"".$filepage."?p=".$Prev_Page.$showq."\" title=\"ก่อนหน้า\"><img src=\"images/icon-arrow-left.png\" width=\"32\" height=\"32\" border=\"0\" alt=\"\"></a></td>"; 
		} else {
		$message.="<tr><td><img src=\"images/icon-arrow-left2.png\" width=\"32\" height=\"32\" border=\"0\" alt=\"\"></td>";
		}
		$message.="<td>&nbsp; หน้าที่   $p  จากทั้งหมด  $Num_Pages   หน้า&nbsp;</td>";
	if ( $p != $Num_Pages )
		{
		$message.="<td><a href=\"".$filepage."?p=".$Next_Page.$showq."\" title=\"ถัดไป\"><img src=\"images/icon-arrow-right.png\" width=\"32\" height=\"32\" border=\"0\" alt=\"\"></a></td></tr>";
		} else {
		$message.="<td><img src=\"images/icon-arrow-right2.png\" width=\"32\" height=\"32\" border=\"0\" alt=\"\"></td></tr>";
		}
		$message.="</table></center>";

		return "$message";
	}
?>