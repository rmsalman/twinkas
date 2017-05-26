<?php

require_once 'Model/connect.php';
require_once 'Model/user.php';
$objUser=new User();

session_start();
$id=$_SESSION['userid'];

$user = "SELECT * FROM users where id = '$id'";
$usersql  = mysqli_query($conn, $user );
if (mysqli_num_rows($usersql ) > 0) {
	$Cntsentuser  = mysqli_fetch_assoc($usersql);
	$userEmail  =  $Cntsentuser['email'];
}

if(isset($_POST['group_submit'])){

$id = $me=$_SESSION['userid'];
$g_id= $_POST['group'];
$cash = "SELECT cash from users  where id = '$id'";
$sql  = "SELECT price FROM groups where id = '$g_id'";


$resultcash = mysqli_query($conn, $cash);
if (mysqli_num_rows($resultcash) > 0) {
    while($row = mysqli_fetch_assoc($resultcash)) {
		 $u_cash = $row['cash'];
    }}
$cash_result = mysqli_query($conn, $sql);
if (mysqli_num_rows($cash_result) > 0) {
    while($cashrow = mysqli_fetch_assoc($cash_result)) {
 		$g_cash = $cashrow['price'];
}}

if($u_cash >= $g_cash){

$new_cash = $u_cash - $g_cash;

$sqlnew_cash  = "UPDATE `users` SET `cash`= '$new_cash', `group_id` = '$g_id' WHERE id = '$id'";

if(mysqli_query($conn, $sqlnew_cash)){	
	echo '<script>alert("New Cash after updation of Package left in your Account is '.$new_cash.'")</script>';	
	echo '<script type="text/javascript"> window.location = "packages.php" </script>';
}

}else {
	echo '<script>alert("Sorry you do not have sufficient balance!")</script>';	
	echo '<script type="text/javascript"> window.location = "packages.php" </script>';
}
}



if(isset($_POST['send_msg'])){

$to = $_POST['mainl_to'];
$head = $_POST['msg_head'];
$msg_body  = $_POST['msg_body'];
$created_at = date('Y-m-d h:m:s');

$sqlmsg = "INSERT INTO `messages` (`msg_from`, `msg_to`, `msg_head`, `msg_body`, `created_at`)
		VALUES 
		('$userEmail', '$to', '$head', '$msg_body', '$created_at')";
if (mysqli_query($conn, $sqlmsg)) {
    
$headers = 'From:' . $userEmail;
if(mail($to, $head, $msg_body, $headers) == true){
    echo "<script>alert('Email and Massage sent Successfully ')</script>";	
}else {
	echo "<script>alert('Message Sent Successfully(Email not sent!)')</script>";

	echo '<script type="text/javascript"> window.location = "messages.php" </script>';
}
}
}



if(isset($_GET['change_status'])){
	$user = $_GET['id'];
	$status = $_GET['status'];
	$statusSql  = "UPDATE `users` SET `status`= '$status' WHERE id = '$user'";

if($status == 1){
	$status = 'InActive';
}else {

	$status = 'Active';
}


if(mysqli_query($conn, $statusSql)){	
	echo '<script>alert("User ID: '. $user .' has changed Status to '.$status.'")</script>';	
	echo '<script type="text/javascript"> window.location = "admin.php" </script>';
}
	$checkuserRefer=$objUser->checkuserRefer($user);
	$rowUser=$checkuserRefer->fetch_array();
	$referal=$rowUser['referal'];
	$group=$rowUser['group_id'];
	$checkGP=$objUser->checkprice($group);
	$rowgroup=$checkGP->fetch_array();
	$Gprice=$rowgroup['price'];
	$cashof_referal=$objUser->checkoldcash($referal);
	$rowCashOR=$cashof_referal->fetch_array();
	$oldCash=$rowCashOR['cash'];
	if ($_GET['status']=="1") {
		$newCash= $oldCash + $Gprice * 0.025;
		$objUser->updateCash($referal,$newCash);
	}
	else{
		$newCash= $oldCash - $Gprice * 0.025;
		$objUser->updateCash($referal,$newCash);
	}
	
}



?>