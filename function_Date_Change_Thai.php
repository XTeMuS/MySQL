<?php
function date_change_thai1($da)
	{
		$arrdate=explode("-",$da);
		$namedate=$arrdate[2];
		if (substr("$namedate", 0, 1)=="0"){ $namedate=substr("$namedate", 1, 1); }
		$namemonth=$arrdate[1]-1;
		$nameyear=$arrdate[0]+543;
		$month=array ("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
		$redate=$namedate."  ".$month[$namemonth]."  ".$nameyear;
		return $redate;
	}

function date_change_thai2($da)
	{
		$arrdate=explode("-",$da);
		$namedate=$arrdate[2];
		if (substr("$namedate", 0, 1)=="0"){ $namedate=substr("$namedate", 1, 1); }
		$namemonth=$arrdate[1]-1;
		$nameyear=$arrdate[0]+543;
		$month=array ("ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$redate=$namedate."  ".$month[$namemonth]."  ".$nameyear;
		return $redate;
	}

function date_change_thai3($da)
	{
		$arrdate=explode("-",$da);
		$namedate=$arrdate[2];
		if (substr("$namedate", 0, 1)=="0"){ $namedate=substr("$namedate", 1, 1); }
		$namemonth=$arrdate[1]-1;
		$nameyear=substr($arrdate[0]+543, 2, 2);
		$month=array ("ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$redate=$namedate."  ".$month[$namemonth]."  ".$nameyear;
		return $redate;
	}

function date_change_thai4($da)
	{
		$arrdate=explode("-",$da);
		$namedate=$arrdate[2];
		//if (substr("$namedate", 0, 1)=="0"){ $namedate=substr("$namedate", 1, 1); }
		$nameyear=$arrdate[0]+543;
		$redate=$nameyear.$arrdate[1].$namedate;
		return $redate;
	}

function date_change_thai5($da)
	{
		$arrdate=explode("-",$da);
		$namedate=$arrdate[2];
		if (substr("$namedate", 0, 1)=="0"){ $namedate=substr("$namedate", 1, 1); }
		$namemonth=$arrdate[1]-1;
		$nameyear=substr($arrdate[0]+543, 2, 2);
		$month=array ("ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$redate=$namedate." ".$month[$namemonth]." ".$nameyear;
		return $redate;
	}
?>