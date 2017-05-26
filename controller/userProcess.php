<?php
error_reporting(1);
	require_once '../Model/user.php';
	$objUser =new User();
	require_once '../Model/wallet.php';
	$objwallet =new wallet();

	if ($_POST['btnManage']=="register") {

		
		 $group_id=$_POST['group_id'];
		 $title=$_POST['title_text'];	
		 $fullname=$_POST['fullname_text'];	
		 $email=$_POST['email_text'];
		 $username=$_POST['username_text'];		
		 $password=$_POST['password1'];		
		 $Rpassword=$_POST['password2'];		
		 $phone=$_POST['mobile_text'];		
		 $state=$_POST['state_text'];	
		 $gender=$_POST['gender_text'];
		//echo $account=$_POST['bankDetails'];
		if($_POST['referal']){
			$referal = $_POST['referhide'];	
			if ($referal !== "None") {
				$objwallet->creatWallet($referal,$email,$group_id);
			}
		}
		$img;
		if ($gender == "Male") {
			$img="avatarM.png";
		}
		else
		{
			$img="avatarF.png";
		}


		if ($password==$Rpassword) 
		{	
			$check = $objUser->checkUser($email); //check if already exiset
			if ($check->num_rows==1) {
				header("Location:../signup.php");
			}
			else{
				$id = $objUser->register($fullname,$email,$gender,$password,$phone,$img, $referal, $group_id);
				session_start();
				$_SESSION["userid"] = $id;
				header("Location:../index.php");
			}
		}
		else
		{
			header("Location:../signup.php");
		}
		
}
	elseif ($_POST['btnManage']=="updateP") {
			$id=$_POST['mid'];
			$title=$_POST['title_text'];
			$dob=$_POST['dob_text'];
			$name=$_POST['fullname_text'];
			$objUser->updateP($id,$title,$dob,$name);
			header("Location:../My_profile.php?t=p");
	}
	elseif ($_POST['btnManage']=="Hop-in") {

		$email=$_POST['email'];
		$password=$_POST['password'];
		$result = $objUser->verify($email,$password);	

		if($result->num_rows== 1)
		{
			$row=$result->fetch_array();
			$id=$row['id']; 
			session_start();
			$_SESSION['userid']=$id;
			header("Location:../index.php");
		}	
		else
		{
			header("Location:../login.php?e=error");
		}
		
	}
	elseif($_POST['btnManage']=="Cpswrd")
	{
		$id=$_POST['pid'];
		$Cpswrd=$_POST['old_pwd'];
		$result=$objUser->checkoldpswrd($id,$Cpswrd);
		if ($result->num_rows==1) {
			$Npassword=$_POST['new_pwd1'];
			$RNpswrd=$_POST['new_pwd2'];
			if ($Npassword==$RNpswrd) {
				$objUser->updatepswrd($id,$Npassword);
				header("Location:../index.php");
			}
		}else{
			echo "old password is wrong";
		}
	
	}
	elseif($_POST['btnManage']=="chngPic")
	{
		$id=$_POST['iid'];
		$image=$_FILES['profileimg']['name'];
		$tempPath=$_FILES['profileimg']['tmp_name'];
		$DesPath="../userpics/".$_FILES['profileimg']['name'];
		move_uploaded_file($tempPath, $DesPath);
		$objUser->updateimg($id,$image);
		header("Location:../My_profile.php?t=picx_info");
	}
	elseif ($_POST['btnManage']=="updateC") {
		$id=$_POST['cid'];
		$mbl2=$_POST['mobile2_text'];
		$addr=$_POST['address_text'];
		$fb=$_POST['fb_text'];
		$tw=$_POST['tw_text'];
		$objUser->updateC($id,$mbl2,$addr,$fb,$tw);
		header("Location:../My_profile.php?t=c_info");
	}
	elseif ($_GET['i']=="Logout") {
		session_start(); //to ensure you are using same session
		session_destroy(); //destroy the session
		header("location:../index.php");
	}
	elseif($_POST['btnManage']=="updateCash"){
		$newCash=$_POST['newCash'];
		$email=$_POST['upcid'];
		$objUser->updateCash($email,$newCash);
		header("Location:../admin.php");
	}
?>