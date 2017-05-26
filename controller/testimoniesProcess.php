<?php
require_once '../Model/testimonies.php';
$objtestimonies=new testimonies();

	if ($_POST['btnManage']=="add") {
		$user=$_POST['uesr'];
		$rating=$_POST['rating_text'];
		$testimony=$_POST['testimony_text'];

		$objtestimonies->addtestimony($user,$rating,$testimony);
		header("Location:../Members_testmonies.php");
	}
	elseif ($_POST['btnManage']=="update") {
		$user=$_POST['uesr'];
		$rating=$_POST['rating_text'];
		$testimony=$_POST['testimony_text'];

		$objtestimonies->updatetestimony($user,$rating,$testimony);
		header("Location:../Members_testmonies.php");
	}
?>