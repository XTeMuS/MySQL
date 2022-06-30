<?php
function Clean_String($txt)
	{
	$txt=trim($txt);
	$txt=htmlspecialchars($txt);
	$txt=stripslashes($txt);
	return "$txt";
	}
?>