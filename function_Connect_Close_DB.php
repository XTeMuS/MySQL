<?php
function ConnDB()
	{
		global $conn,$ServerName,$UserName,$UserPassword,$DataBaseName;
		$conn=mysqli_connect($ServerName,$UserName,$UserPassword,$DataBaseName) or die("Could not connect");
		mysqli_set_charset($conn,"utf8");
	}

function CloseDB()
	{
		global $conn;
		mysqli_close($conn);
	}
?>