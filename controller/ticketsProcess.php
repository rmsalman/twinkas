<?php
error_reporting(1);
	require_once'../Model/tickets.php';
	$objtickets =new tickets();

	if ($_POST['btnManage']=="submitTicket") {
		$userid=$_POST['tid'];/*session id of logged in user*/
		$title=$_POST['heading_text'];
		$complainTxt=$_POST['complaints_text'];
		$screenshot=$_FILES['file_input']['name'];
		$date=date("D, d M  .Y @ H:i");
		//echo $title.$complainTxt.$screenshot.$date;
		
		if ($objtickets->createTicket($title,$complainTxt,$screenshot,$userid,$date) > 0) {

			$tempPath=$_FILES['file_input']['tmp_name'];
			$DesPath="../tickets/".$_FILES['file_input']['name'];
			move_uploaded_file($tempPath, $DesPath);
					header("Location:../My_Tickets.php");
		}
		
	}
?>